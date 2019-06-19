<?php

namespace App\SoapServer;

use OtaInterface\Otaconnect\StructType\OTA_HotelAvailNotifRQ;
use OtaInterface\Otaconnect\StructType\OTA_HotelAvailRQ;
use OtaInterface\Otaconnect\StructType\OTA_HotelAvailRS;
use OtaInterface\Otaconnect\StructType\OTA_HotelRateAmountNotifRQ;
use OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRQ;
use OtaInterface\Otaconnect\StructType\OTA_HotelResNotifRS;
use OtaInterface\Otaconnect\StructType\ErrorsType;
use OtaInterface\Otaconnect\StructType\ErrorType;
use OtaInterface\Otaconnect\StructType\SuccessType;

class ServerObject extends SoapServerBase {

    public function __construct($username, $password) {
        parent::__construct($username, $password);
    }
    
    public function addErrorHotelResNotifRQ(OTA_HotelResNotifRS $response, $value, $code, $type = '1') {
        if(!$response->getErrors()) { $response->setErrors( new ErrorsType( [ ] ) ); }
        $item = new ErrorType( $value );$item->setType( $type );$item->setCode( $code );
        $response->getErrors()->addToError($item);
    }
    
    public function HotelResNotifRQ(OTA_HotelResNotifRQ $request) {
        
        $response = new OTA_HotelResNotifRS();
        
        $response->setVersion('1.0');
        $response->setTimeStamp( (new \DateTime())->format('c') );
        $response->setEchoToken( $request->getEchoToken() );
        
        if(!$this->username || !$this->password || !$this->authenticated) {
            $this->addErrorHotelResNotifRQ( $response, 'Authentication', '6', '4' );
            return $response;
        }
        
        if( $request->getHotelReservations()->getHotelReservation() ) {
            /** @var $hotelReservation \OtaInterface\Otaconnect\StructType\HotelReservationType */
            foreach( $request->getHotelReservations()->getHotelReservation() AS $hotelReservation ){
                $hotelCode = null;
                if($hotelReservation->getRoomStays() && $hotelReservation->getRoomStays()->getRoomStay() ) {
                    /** @var $roomStay \OtaInterface\Otaconnect\StructType\RoomStay */
                    foreach( $hotelReservation->getRoomStays()->getRoomStay() AS $roomStay ){
                        /** @var $basicPropertyInfo \OtaInterface\Otaconnect\StructType\BasicPropertyInfoType */
                        $basicPropertyInfo = $roomStay->getBasicPropertyInfo();
                        if($basicPropertyInfo) { 
                            $hotelCode = $basicPropertyInfo->HotelCode;
                        }
                    }
                }
                if(!$hotelCode) {
                    $this->addErrorHotelResNotifRQ( $response, 'Invalid hotel code', '392', '6' );
                    return $response;
                }
                $response->setSuccess( new SuccessType() );
                break;
            }
        }
        
        if( !$response->getSuccess() ) {
            $this->addErrorHotelResNotifRQ( $response, 'Unable to process', '450', '12' );
        }
        
        return $response;
    }

    private function addErrorHotelAvailRQ(OTA_HotelAvailRS $response, $value, $code, $type = '1') {
        if(!$response->getErrors()) { $response->setErrors( new ErrorsType( [ ] ) ); }
        $item = new ErrorType( $value );$item->setType( $type );$item->setCode( $code );
        $response->getErrors()->addToError($item);
    }

    public function HotelAvailRQ(OTA_HotelAvailRQ $request) {

        $response = new OTA_HotelAvailRS();

        $response->setVersion('1.0');
        $response->setTimeStamp( (new \DateTime())->format('c') );
        $response->setEchoToken( $request->getEchoToken() );

        if(!$this->username || !$this->password || !$this->authenticated) {
            $this->addErrorHotelAvailRQ( $response, 'Authentication', '6', '4' );
            return $response;
        }

        if($request->getAvailRequestSegments()) {
            foreach($request->getAvailRequestSegments()->getAvailRequestSegment() AS $availRequestSegment) {
                $hotelCode = null;
                if($availRequestSegment->getHotelSearchCriteria() && $availRequestSegment->getHotelSearchCriteria()->getCriterion()) {
                    foreach($availRequestSegment->getHotelSearchCriteria()->getCriterion() AS $criterion) {
                        $hotelCode = $criterion->getHotelRef();
                    }
                }
                if(!$hotelCode) {
                    $this->addErrorHotelAvailRQ($response, 'Invalid hotel code', '392', '6');
                    return $response;
                }
                $response->setSuccess(new SuccessType());
                break;
            }
        }

        if(!$response->getSuccess()) {
            $this->addErrorHotelAvailRQ($response, 'Unable to process', '450', '12');
        }

        return $response;
    }

    public function HotelAvailNotifRQ(OTA_HotelAvailNotifRQ $request) {

        $response = new OTA_HotelAvailRS();

        $response->setVersion('1.0');
        $response->setTimeStamp( (new \DateTime())->format('c') );
        $response->setEchoToken( $request->getEchoToken() );

        if(!$this->username || !$this->password || !$this->authenticated) {
            $this->addErrorHotelAvailRQ( $response, 'Authentication', '6', '4' );
            return $response;
        }

        if($request->getAvailStatusMessages()) {
            $hotelCode = $request->getAvailStatusMessages()->getHotelCode();
            if(!$hotelCode) {
                $this->addErrorHotelAvailRQ($response, 'Invalid hotel code', '392', '6');
                return $response;
            }

            $response->setSuccess(new SuccessType());
        }

        if(!$response->getSuccess()) {
            $this->addErrorHotelAvailRQ($response, 'Unable to process', '450', '12');
        }

        return $response;
    }

    public function HotelRateAmountNotifRQ(OTA_HotelRateAmountNotifRQ $request) {

        $response = new OTA_HotelAvailRS();

        $response->setVersion('1.0');
        $response->setTimeStamp( (new \DateTime())->format('c') );
        $response->setEchoToken( $request->getEchoToken() );

        if(!$this->username || !$this->password || !$this->authenticated) {
            $this->addErrorHotelAvailRQ( $response, 'Authentication', '6', '4' );
            return $response;
        }

        if($request->getRateAmountMessages()) {
            $hotelCode = $request->getRateAmountMessages()->getHotelCode();
            if(!$hotelCode) {
                $this->addErrorHotelAvailRQ($response, 'Invalid hotel code', '392', '6');
                return $response;
            }

            $response->setSuccess(new SuccessType());
        }

        if(!$response->getSuccess()) {
            $this->addErrorHotelAvailRQ($response, 'Unable to process', '450', '12');
        }

        return $response;
    }

}
