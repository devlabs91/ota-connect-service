<?php 

namespace App\SoapServer;

use OtaInterface\Otaconnect\StructType\SecurityHeaderType;
use OtaInterface\Otaconnect\StructType\UsernameTokenType;
use OtaInterface\Otaconnect\StructType\PasswordString;

class SoapServerBase {

    protected $username;
    protected $password;
    protected $authenticated;
    
    public function __construct( $username, $password ) {
        $this->username = $username;
        $this->password = $password;
        $this->authenticated = false;
    }
    
    /**
     * 
     * @param SecurityHeaderType $security
     */
    public function Security( $security ) {

        $username = ""; $password = "";
        if($security instanceof SecurityHeaderType) {
            $any = $security->getAny( false );
            /** @var $UsernameToken \OtaInterface\Otaconnect\StructType\UsernameTokenType */
            $UsernameToken = $any['UsernameToken'];
            if($UsernameToken instanceof UsernameTokenType ) {
                $UsernameString = $UsernameToken->getUsername();
                if($UsernameString instanceof \OtaInterface\Otaconnect\StructType\AttributedString ) {
                    $username = $UsernameString->get_();
                }
                $any = $UsernameToken->getAny(false);
                $PasswordString = $any['Password'];
                if($PasswordString instanceof PasswordString) {
                    $password = $PasswordString->get_();
                }
            }
        }
        
        if( $this->username == $username && $this->password == $password ) {
            $this->authenticated = true;
            return;
        }
        
        if($security && property_exists($security, 'UsernameToken') && 
            property_exists($security->UsernameToken, 'Username') && property_exists($security->UsernameToken, 'Password') ) {
            if( $this->username == $security->UsernameToken->Username && $this->password == $security->UsernameToken->Password ) {
                $this->authenticated = true;
            }
        }
    }
    
}