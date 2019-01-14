<?php

namespace Devlabs91\GenericOtaHotelApiService\Tests\PHPUnit;

class Client extends \SoapClient {
    
    public $mockRequest;
    public $mockResponse;
    
    public function __doRequest($request, $location, $action, $version, $one_way = NULL) {
        if( $this->mockRequest ) { $request = $this->mockRequest; }
        if( $this->mockResponse ) { return $this->mockResponse; }
        return parent::__doRequest($request, $location, $action, $version, $one_way);
    }
    
    public function setMockRequest($mockRequest) {
        $this->mockRequest = $mockRequest;
    }
    
    public function setMockResponse($mockResponse) {
        $this->mockResponse = $mockResponse;
    }
    
}
