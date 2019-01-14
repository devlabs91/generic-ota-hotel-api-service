<?php 

namespace Devlabs91\GenericOtaHotelApiService\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

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

    public function serviceHotel( Request $request )
    {
        if($request->getMethod()=='GET') { 
            $params = [];parse_str( $request->normalizeQueryString( $request->getQueryString() ), $params);
            if(!key_exists('wsdl', $params)) {
                $response = new Response( '', Response::HTTP_BAD_REQUEST, [ 'HTTP/1.1 400 Client Error' ] );
                return $response;
            }
            $content = file_get_contents(__DIR__."/../Schemas/index.wsdl");
            $response = new Response( $content, Response::HTTP_OK, [ 'Content-Type: application/wsdl+xml' ] );
            return $response;
        }
        if($request->getMethod()!='POST') { 
            return new Response( '', Response::HTTP_BAD_REQUEST, [ 'HTTP/1.1 400 Client Error' ] );
        }
        
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