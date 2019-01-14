<?php

namespace Devlabs91\GenericOtaHotelApiService\Tests\PHPUnit;

class HotelSoapClient
{
    
    public function getSoapClientClassName($soapClientClassName = null)
    {
        return parent::getSoapClientClassName(empty($soapClientClassName) ? '\Devlabs91\GenericOtaHotelApiService\Tests\PHPUnit\Client' : $soapClientClassName);
    }

    /**
     * @return Client
     */
    public function getSoapClient()
    {
        return parent::getSoapClient();
    }

}
