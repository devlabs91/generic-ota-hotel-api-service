<?php

namespace Devlabs91\GenericOtaHotelApiService\Service;

use Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRS;
use Devlabs91\GenericOtaHotelApiService\StructType\SuccessType;
use Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS;
use Devlabs91\GenericOtaHotelApiService\StructType\MessageAcknowledgementType;

/**
 * This class stands for Hotel Service
 * @subpackage Services
 */
class HotelService
{
    
    public function HotelResNotifRQ(\Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ $oTA_HotelResNotifRQ)
    {
        try {
            return new OTA_HotelResNotifRS( new SuccessType() );
        } catch (\SoapFault $soapFault) {
//            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    
    public function HotelAvailRQ(\Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ $oTA_HotelAvailRQ)
    {
        try {
            return new OTA_HotelAvailRS( null, new SuccessType() );
        } catch (\SoapFault $soapFault) {
//            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    public function HotelAvailNotifRQ(\Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailNotifRQ $oTA_HotelAvailNotifRQ)
    {
        try {
            return new MessageAcknowledgementType( true );
        } catch (\SoapFault $soapFault) {
//            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    
    public function HotelRateAmountNotifRQ(\Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ $oTA_HotelRateAmountNotifRQ)
    {
        try {
            return new MessageAcknowledgementType( true );
        } catch (\SoapFault $soapFault) {
//            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
