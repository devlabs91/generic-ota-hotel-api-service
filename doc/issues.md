Issues
======

Fix needed after generation, if not fixed the following notice appears :

    Declaration of Devlabs91\TravelgatePushApi\StructType\ErrorType::set_(?Devlabs91\TravelgatePushApi\StructType\FreeTextType $_ = NULL) should be compatible with Devlabs91\TravelgatePushApi\StructType\FreeTextType::set_($_ = NULL)


    diff --git a/src/StructType/ErrorType.php b/src/StructType/ErrorType.php
    index ed71e46..663eb31 100644
    --- a/src/StructType/ErrorType.php
    +++ b/src/StructType/ErrorType.php
    @@ -62,7 +62,7 @@ class ErrorType extends FreeTextType
          * @param \Devlabs91\TravelgatePushApi\StructType\FreeTextType $_
          * @return \Devlabs91\TravelgatePushApi\StructType\ErrorType
          */
    -    public function set_(\Devlabs91\TravelgatePushApi\StructType\FreeTextType $_ = null)
    +    public function set_($_ = null)
         {
             $this->_ = $_;
             return $this;

Another issue, if not fixed the following notice appears :

    Declaration of Devlabs91\TravelgatePushApi\StructType\Email::set_(?Devlabs91\TravelgatePushApi\StructType\EmailType $_ = NULL) should be compatible with Devlabs91\TravelgatePushApi\StructType\EmailType::set_($_ = NULL)

    diff --git a/src/StructType/Email.php b/src/StructType/Email.php
    index 66f08e4..b2e1f8a 100644
    --- a/src/StructType/Email.php
    +++ b/src/StructType/Email.php
    @@ -38,7 +38,7 @@ class Email extends EmailType
          * @param \Devlabs91\TravelgatePushApi\StructType\EmailType $_
          * @return \Devlabs91\TravelgatePushApi\StructType\Email
          */
    -    public function set_(\Devlabs91\TravelgatePushApi\StructType\EmailType $_ = null)
    +    public function set_($_ = null)
         {
             $this->_ = $_;
             return $this;

Schema Changes
==============

Schema changes from the original schemas, due to API call not compatible,

    <RestrictionStatus MinAdvancedBookingOffset = "3" MaxAdvancedBookingOffset = "50"/>
    
    Original schema location :  https://pushprovider.xmltravelgate.com/Service/Hotel/Provider/ProviderGEN.svc?wsdl
    
    xsd4.xsd
    
        <xs:element minOccurs="0" maxOccurs="1"
            name="RestrictionStatus">
            <xs:complexType>
                ...
                <xs:attribute name="MaxAdvancedBookingOffset"
                    type="xs:duration" />
                <xs:attribute name="MinAdvancedBookingOffset"
                    type="xs:duration" />
            </xs:complexType>
        </xs:element>
    
    xsd1.xsd
    
        <xs:simpleType name="duration">
            <xs:restriction base="xs:duration">
                <xs:pattern
                    value="\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?" />
                <xs:minInclusive value="-P10675199DT2H48M5.4775808S" />
                <xs:maxInclusive value="P10675199DT2H48M5.4775807S" />
            </xs:restriction>
        </xs:simpleType>
    
Schemas is expecting "P3D" / "P50D", and not "3" or "50", but the system is throwin an error when sending for example "P3D".

Request Example
---------------

    <ns1:AvailStatusMessage>
        <ns1:StatusApplicationControl Start="2019-01-07" End="2019-01-07" RatePlanCode="RC1" InvCode="STD" InvType="ROOM" Mon="true" Tue="true" Weds="true" Thur="true" Fri="true" Sat="true" Sun="true"/>
        <ns1:RestrictionStatus MinAdvancedBookingOffset="P2D"/>
    </ns1:AvailStatusMessage>

Request Response
----------------

    <HotelAvailNotifResponse
        xmlns="http://schemas.xmltravelgate.com/hubpush/provider/2012/10">
        <HotelAvailNotifResult TransactionIdentifier="4ae5254d-e526-42fd-b373-99a9d922b25d">
            <Errors
                xmlns="http://www.opentravel.org/OTA/2003/05">
                <Error Language="en" ShortText="Unexpected error" Code="-1">Input string was not in a correct format.</Error>
            </Errors>
        </HotelAvailNotifResult>
    </HotelAvailNotifResponse>


Changes to fix issue
--------------------

    diff --git a/src/Schemas/xsd4.xsd b/src/Schemas/xsd4.xsd
    index f718d84..42c65e6 100644
    --- a/src/Schemas/xsd4.xsd
    +++ b/src/Schemas/xsd4.xsd
    @@ -1683,9 +1683,9 @@
                                            <xs:attribute name="SellThroughOpenIndicator"
                                                    type="xs:boolean" />
                                            <xs:attribute name="MaxAdvancedBookingOffset"
    -                                               type="xs:duration" />
    +                                               type="xs:nonNegativeInteger" />
                                            <xs:attribute name="MinAdvancedBookingOffset"
    -                                               type="xs:duration" />
    +                                               type="xs:nonNegativeInteger" />
                                    </xs:complexType>
                            </xs:element>
                    </xs:sequence>
