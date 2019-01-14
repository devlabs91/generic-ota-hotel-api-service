<?php 

namespace Devlabs91\GenericOtaHotelApiService\Service;

class HelloService
{
    private $mailer;
    
    public function __construct()
    {
        
    }
    
    public function hello($name)
    {
        
        return 'Hello, '.$name;
    }
}