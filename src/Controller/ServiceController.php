<?php 

namespace Devlabs91\GenericOtaHotelApiService\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ServiceController extends AbstractController {

    public function service()
    {
        
        $helloService = $this->get('hello_service');
        
        $soapServer = new \SoapServer( __DIR__."/../Schemas/hello.wsdl");
        $soapServer->setObject($helloService);
        
        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml; charset=ISO-8859-1');
        
        ob_start();
        $soapServer->handle();
        $response->setContent(ob_get_clean());
        return $response;        
    }

    public function serviceHotel()
    {
        
        $hotelService = $this->get('hotel_service');

        $options = array (
            'classmap' => \Devlabs91\GenericOtaHotelApiService\ClassMap::get()
        );
        
        $soapServer = new \SoapServer( __DIR__."/../Schemas/index.wsdl", $options);
        
        $soapServer->setObject($hotelService);
        
        $response = new Response();
        $response->headers->set('Content-Type', 'text/xml; charset=ISO-8859-1');
        
        ob_start();
        $soapServer->handle();
        $response->setContent(ob_get_clean());
        return $response;
    }
    
}