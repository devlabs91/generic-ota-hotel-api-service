<?php

namespace Devlabs91\GenericOtaHotelApiService\Tests\PHPUnit;

use Devlabs91\GenericOtaHotelApiService\ServiceType\Hello;

class HelloSoapClient extends Hello
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
