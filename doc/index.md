Introduction
============

Soap Service API built following the OTA specifications (https://opentravel.org) [2003B-1.0](http://opentravelmodel.net/pubs/specifications/Specifications.html?spec=2003B).

Functiallity focused on :

    HotelAvail
    HotelAvailNotif
    HotelRateAmountNotif
    HotelResNotif

Hello Service [SOAP Web Service](https://symfony.com/doc/current/controller/soap_web_service.html).

    Schemas/hello.wsdl
    Service/HelloService.php
    ServiceType/Hello.php
    HelloClassMap.php
    
    HelloServiceTest.php
    HelloSoapClient.php

    resources/hello_request.xml

Symfony Framework Installation

    https://symfony.com/doc/current/setup.html
    
    composer create-project symfony/skeleton my-project
    cd my-project
    composer require symfony/web-server-bundle --dev

Generation
==========

Inital generation for base classes :

    wsdltophp generate:package \
            --urlorpath="./generic-ota-hotel-api-service/src/Schemas/index.wsdl" \
            --destination="./GenericOtaHotelApiService" \
            --composer-name="devlabs91/generic-ota-hotel-api-service" \
            --force \
            --namespace="Devlabs91\GenericOtaHotelApiService"

Issues
------

Issues with generation are stored in the `doc/issues.md` file in this bundle:

[Read the documentation](https://github.com/devlabs91/generic-ota-hotel-api-service/blob/master/doc/issues.md)

Testing
=======

Tests are using mockup responses located in tests/resources/

Start server by command 

    ./bin/console server:start

then run
    
    ./vendor/bin/phpunit 
    
or run for individual files

    ./vendor/bin/phpunit tests/src/PHPUnit/HelloService.php
