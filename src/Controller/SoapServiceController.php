<?php

namespace App\Controller;

use App\SoapServer\ServerObject;
use OtaInterface\Otaconnect\ClassMap;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SoapServiceController extends AbstractController {

    /**
     * @Route("/soap/service", name="soap_service")
     */
    public function index(Request $request) {
        if($request->getMethod()=='GET') {
            $params = [];parse_str( $request->normalizeQueryString( $request->getQueryString() ), $params);
            if(!key_exists('wsdl', $params)) {
                $response = new Response( '', Response::HTTP_BAD_REQUEST, [ 'HTTP/1.1 400 Client Error' ] );
                return $response;
            }
            $content = file_get_contents(dirname(__DIR__)."/Schemas/index.wsdl");
            $response = new Response( $content, Response::HTTP_OK, [ 'Content-Type' => 'application/wsdl+xml' ] );
            return $response;
        }
        if($request->getMethod()!='POST') {
            return new Response( '', Response::HTTP_BAD_REQUEST, [ 'HTTP/1.1 400 Client Error' ] );
        }
        if(strtolower($request->headers->get('Content-Type'))!='text/xml; charset=utf-8') {
            return new Response( '', Response::HTTP_UNSUPPORTED_MEDIA_TYPE, [ 'HTTP/1.1 415 Unsupported Media Type' ] );
        }

        $options = array (
            'classmap' => ClassMap::get(),
            'cache_wsdl' => WSDL_CACHE_DISK, 'exceptions' => 1, 'features' => 5, 'trace' => 1, 'soap_version' => SOAP_1_1,
        );

        $soapServer = new \SoapServer( dirname(__DIR__)."/Schemas/inlined.wsdl", $options);

        $username = 'username';$password = 'password';
        $soapServer->setObject( new ServerObject( $username, $password ) );

        $response = new Response();
        $response->headers->set('Content-Type', strtolower($request->headers->get('Content-Type')));

        ob_start();
        $soapServer->handle( $request->getContent() );
        $response->setContent( ob_get_clean() );
        ob_end_clean();

        return $response;
    }
}
