Introduction
============

Soap Service API built following the OTA specifications (https://opentravel.org) [2003B-1.0](http://opentravelmodel.net/pubs/specifications/Specifications.html?spec=2003B).

Functiallity focused on :

    HotelAvail
    HotelAvailNotif
    HotelRateAmountNotif
    HotelResNotif

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

For additional testing using the real soap client, you will need to update your credentials in ./phpunit.xml

    <php>
        <const name="PHPUNIT_TG_USERNAME" value="" />
        <const name="PHPUNIT_TG_PASSWORD" value="" />
        <const name="PHPUNIT_TG_CLIENT_CODE" value="" />
        <const name="PHPUNIT_TG_REQUESTOR_ID" value="" />
        <const name="PHPUNIT_TG_HOTEL_CODE" value="" />
    </php>

then run
    
    ./vendor/bin/phpunit 
    
or run for individual files

    ./vendor/bin/phpunit tests/src/PHPUnit/HotelRatePlanInventoryRetrieveTest.php
