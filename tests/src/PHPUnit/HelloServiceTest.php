<?php

namespace Devlabs91\GenericOtaHotelApiService\Tests\PHPUnit;

class HelloServiceTest extends \PHPUnit_Framework_TestCase
{

    public function testHelloService() {

        $class = new HelloSoapClient( $this->getOptions() );
        $response = $class->hello('Scott');
        $this->assertNotNull($response);
        $this->assertEquals('Hello, Scott', $response);
        
    }

    public function getOptions() {
        return [
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'file://'.__DIR__."/../../../src/Schemas/hello.wsdl",
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Devlabs91\GenericOtaHotelApiService\HelloClassMap::get(),
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOCATION => 'http://127.0.0.1:8000/service',
        ];
    }
    
}