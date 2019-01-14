<?php

namespace Devlabs91\GenericOtaHotelApiService\Tests\PHPUnit;

class Client extends \SoapClient {
    
    public $mockResponse;
    
    public function __doRequest($request, $location, $action, $version, $one_way = NULL) {
        if( $this->mockResponse ) { return $this->mockResponse; }
        return parent::__doRequest($request, $location, $action, $version, $one_way);
    }
    
    public function setMockResponse($mockResponse) {
        $this->mockResponse = $mockResponse;
    }
    
}
