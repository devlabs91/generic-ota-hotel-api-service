<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for SourceType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Information describing the point of sale. | Provides information on the source of a request.
 * @subpackage Enumerations
 */
class SourceType
{
    /**
     * Constant for value 'NormalTransaction'
     * @return string 'NormalTransaction'
     */
    const VALUE_NORMAL_TRANSACTION = 'NormalTransaction';
    /**
     * Constant for value 'MailOrPhoneOrder'
     * @return string 'MailOrPhoneOrder'
     */
    const VALUE_MAIL_OR_PHONE_ORDER = 'MailOrPhoneOrder';
    /**
     * Constant for value 'UnattendedTerminal'
     * @return string 'UnattendedTerminal'
     */
    const VALUE_UNATTENDED_TERMINAL = 'UnattendedTerminal';
    /**
     * Constant for value 'MerchantIsSuspicious'
     * @return string 'MerchantIsSuspicious'
     */
    const VALUE_MERCHANT_IS_SUSPICIOUS = 'MerchantIsSuspicious';
    /**
     * Constant for value 'eCommerceSecuredTransaction'
     * @return string 'eCommerceSecuredTransaction'
     */
    const VALUE_E_COMMERCE_SECURED_TRANSACTION = 'eCommerceSecuredTransaction';
    /**
     * Constant for value 'eCommerceUnsecuredTransaction'
     * @return string 'eCommerceUnsecuredTransaction'
     */
    const VALUE_E_COMMERCE_UNSECURED_TRANSACTION = 'eCommerceUnsecuredTransaction';
    /**
     * Constant for value 'InFlightAirPhone'
     * @return string 'InFlightAirPhone'
     */
    const VALUE_IN_FLIGHT_AIR_PHONE = 'InFlightAirPhone';
    /**
     * Constant for value 'CID_NotLegible'
     * @return string 'CID_NotLegible'
     */
    const VALUE_CID_NOT_LEGIBLE = 'CID_NotLegible';
    /**
     * Constant for value 'CID_NotOnCard'
     * @return string 'CID_NotOnCard'
     */
    const VALUE_CID_NOT_ON_CARD = 'CID_NotOnCard';
    /**
     * The RequestorID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RequestorID
     */
    public $RequestorID;
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Position
     */
    public $Position;
    /**
     * The BookingChannel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\BookingChannel
     */
    public $BookingChannel;
    /**
     * The AgentSine
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the party within the requesting entity.
     * - use: optional
     * @var string
     */
    public $AgentSine;
    /**
     * The PseudoCityCode
     * Meta informations extracted from the WSDL
     * - documentation: An identification code assigned to an office/agency by a reservation system.
     * - use: optional
     * @var string
     */
    public $PseudoCityCode;
    /**
     * The ISOCountry
     * Meta informations extracted from the WSDL
     * - documentation: The country code of the requesting party.
     * - use: optional
     * @var string
     */
    public $ISOCountry;
    /**
     * The ISOCurrency
     * Meta informations extracted from the WSDL
     * - documentation: The currency code in which the reservation will be ticketed.
     * - use: optional
     * @var string
     */
    public $ISOCurrency;
    /**
     * The AgentDutyCode
     * Meta informations extracted from the WSDL
     * - documentation: An authority code assigned to a requestor.
     * - use: optional
     * @var string
     */
    public $AgentDutyCode;
    /**
     * The AirlineVendorID
     * Meta informations extracted from the WSDL
     * - documentation: The IATA assigned airline code.
     * - use: optional
     * @var string
     */
    public $AirlineVendorID;
    /**
     * The AirportCode
     * Meta informations extracted from the WSDL
     * - documentation: The IATA assigned airport code.
     * - use: optional
     * @var string
     */
    public $AirportCode;
    /**
     * The FirstDepartPoint
     * Meta informations extracted from the WSDL
     * - documentation: The point of first departure in a trip.
     * - use: optional
     * @var string
     */
    public $FirstDepartPoint;
    /**
     * The ERSP_UserID
     * Meta informations extracted from the WSDL
     * - documentation: Electronic Reservation Service Provider (ERSP) assigned identifier used to identify the individual using the ERSP system.
     * - use: optional
     * @var string
     */
    public $ERSP_UserID;
    /**
     * The TerminalID
     * Meta informations extracted from the WSDL
     * - documentation: This is the electronic address of the device from which information is entered.
     * - use: optional
     * @var string
     */
    public $TerminalID;
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NORMAL_TRANSACTION
     * @uses self::VALUE_MAIL_OR_PHONE_ORDER
     * @uses self::VALUE_UNATTENDED_TERMINAL
     * @uses self::VALUE_MERCHANT_IS_SUSPICIOUS
     * @uses self::VALUE_E_COMMERCE_SECURED_TRANSACTION
     * @uses self::VALUE_E_COMMERCE_UNSECURED_TRANSACTION
     * @uses self::VALUE_IN_FLIGHT_AIR_PHONE
     * @uses self::VALUE_CID_NOT_LEGIBLE
     * @uses self::VALUE_CID_NOT_ON_CARD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NORMAL_TRANSACTION,
            self::VALUE_MAIL_OR_PHONE_ORDER,
            self::VALUE_UNATTENDED_TERMINAL,
            self::VALUE_MERCHANT_IS_SUSPICIOUS,
            self::VALUE_E_COMMERCE_SECURED_TRANSACTION,
            self::VALUE_E_COMMERCE_UNSECURED_TRANSACTION,
            self::VALUE_IN_FLIGHT_AIR_PHONE,
            self::VALUE_CID_NOT_LEGIBLE,
            self::VALUE_CID_NOT_ON_CARD,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
