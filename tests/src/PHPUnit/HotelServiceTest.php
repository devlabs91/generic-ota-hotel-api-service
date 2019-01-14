<?php

namespace Devlabs91\GenericOtaHotelApiService\Tests\PHPUnit;

use Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ;
use Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRS;
use Devlabs91\GenericOtaHotelApiService\StructType\SuccessType;

class HotelServiceTest extends \PHPUnit_Framework_TestCase
{

    public function testHotelService() {

        $mockRequest = file_get_contents(__DIR__ . '/../../resources/OTA_HotelResNotifRQ/Reservation.xml');
        
        $class = new HotelSoapClient( $this->getOptions() );
        $class->getSoapClient()->setMockRequest($mockRequest);
        
        $response = $class->HotelResNotifRQ( new OTA_HotelResNotifRQ() );
        if($response) {
            $this->assertInstanceOf(OTA_HotelResNotifRS::class, $response);
            if($response->getSuccess()) {
                $this->assertInstanceOf(SuccessType::class, $response->getSuccess());
            }
        }
        
    }

    public function getOptions() {
        return [
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'file://'.__DIR__."/../../../src/Schemas/index.wsdl",
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Devlabs91\GenericOtaHotelApiService\ClassMap::get(),
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOCATION => 'http://127.0.0.1:8000/service/hotel',
        ];
    }
    
}