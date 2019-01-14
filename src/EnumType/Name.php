<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for Name EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Used to pass detailed name information regarding a contact. | The gender of the contact person in the ContactName attribute. This may be useful for purposes of correspondence to the hotel. | This name refers to an OTA Code List table
 * (e.g. RestaurantCategoryCode/InfoCode). The actual code is passed in the Code attribute.
 * - type: StringLength1to64
 * - use: optional
 * @subpackage Enumerations
 */
class Name extends PersonNameType
{
    /**
     * Constant for value 'AdditionalOversoldPolicy'
     * @return string 'AdditionalOversoldPolicy'
     */
    const VALUE_ADDITIONAL_OVERSOLD_POLICY = 'AdditionalOversoldPolicy';
    /**
     * Constant for value 'EarlyCheckinAvailable'
     * @return string 'EarlyCheckinAvailable'
     */
    const VALUE_EARLY_CHECKIN_AVAILABLE = 'EarlyCheckinAvailable';
    /**
     * Constant for value 'LateCheckoutAvailable'
     * @return string 'LateCheckoutAvailable'
     */
    const VALUE_LATE_CHECKOUT_AVAILABLE = 'LateCheckoutAvailable';
    /**
     * Constant for value 'OversoldArrangeAccomodations'
     * @return string 'OversoldArrangeAccomodations'
     */
    const VALUE_OVERSOLD_ARRANGE_ACCOMODATIONS = 'OversoldArrangeAccomodations';
    /**
     * Constant for value 'OversoldArrangeTransportation'
     * @return string 'OversoldArrangeTransportation'
     */
    const VALUE_OVERSOLD_ARRANGE_TRANSPORTATION = 'OversoldArrangeTransportation';
    /**
     * Constant for value 'OversoldNotifyContacts'
     * @return string 'OversoldNotifyContacts'
     */
    const VALUE_OVERSOLD_NOTIFY_CONTACTS = 'OversoldNotifyContacts';
    /**
     * Constant for value 'OversoldPayOneNightRoom'
     * @return string 'OversoldPayOneNightRoom'
     */
    const VALUE_OVERSOLD_PAY_ONE_NIGHT_ROOM = 'OversoldPayOneNightRoom';
    /**
     * Constant for value 'SrvcInfoCode'
     * @return string 'SrvcInfoCode'
     */
    const VALUE_SRVC_INFO_CODE = 'SrvcInfoCode';
    /**
     * Constant for value 'SrvcInfo'
     * @return string 'SrvcInfo'
     */
    const VALUE_SRVC_INFO = 'SrvcInfo';
    /**
     * Constant for value 'Beverage'
     * @return string 'Beverage'
     */
    const VALUE_BEVERAGE = 'Beverage';
    /**
     * Constant for value 'AvailableMealCategory'
     * @return string 'AvailableMealCategory'
     */
    const VALUE_AVAILABLE_MEAL_CATEGORY = 'AvailableMealCategory';
    /**
     * Constant for value 'RestaurantCategory'
     * @return string 'RestaurantCategory'
     */
    const VALUE_RESTAURANT_CATEGORY = 'RestaurantCategory';
    /**
     * Constant for value 'RestaurantPolicy'
     * @return string 'RestaurantPolicy'
     */
    const VALUE_RESTAURANT_POLICY = 'RestaurantPolicy';
    /**
     * The JobTitle
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\JobTitle[]
     */
    public $JobTitle;
    /**
     * The SrvcCode
     * Meta informations extracted from the WSDL
     * - documentation: The information describing the contact service code for a hotel facility. (e.g., who to contact about golf tours). Refer to OTA Code List Contact Srvc Code (CSC).
     * - use: optional
     * @var string
     */
    public $SrvcCode;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - documentation: The location of the hotel contact. e.g.: at the hotel property, at a central office, etc. Refer to OTA Code List Contact Location (CON).
     * - use: optional
     * @var string
     */
    public $Location;
    /**
     * The CorporatePosition
     * Meta informations extracted from the WSDL
     * - documentation: The corporate position of the contact.
     * - use: optional
     * @var string
     */
    public $CorporatePosition;
    /**
     * The OKToPublish
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the contact information can be published externally (on a web site for the general public) or whether this is strictly a contact to be used in conjunction with the data feed (limited use). | Values: 0 = No, Limited
     * Publication, or 1 = Yes, OK for External Publication.
     * - use: optional
     * @var bool
     */
    public $OKToPublish;
    /**
     * The NameOrdered
     * Meta informations extracted from the WSDL
     * - documentation: The proper name in the usual order (e.g. used for correspondance Mr. James Smith).
     * - use: optional
     * @var string
     */
    public $NameOrdered;
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
     * @uses self::VALUE_ADDITIONAL_OVERSOLD_POLICY
     * @uses self::VALUE_EARLY_CHECKIN_AVAILABLE
     * @uses self::VALUE_LATE_CHECKOUT_AVAILABLE
     * @uses self::VALUE_OVERSOLD_ARRANGE_ACCOMODATIONS
     * @uses self::VALUE_OVERSOLD_ARRANGE_TRANSPORTATION
     * @uses self::VALUE_OVERSOLD_NOTIFY_CONTACTS
     * @uses self::VALUE_OVERSOLD_PAY_ONE_NIGHT_ROOM
     * @uses self::VALUE_SRVC_INFO_CODE
     * @uses self::VALUE_SRVC_INFO
     * @uses self::VALUE_BEVERAGE
     * @uses self::VALUE_AVAILABLE_MEAL_CATEGORY
     * @uses self::VALUE_RESTAURANT_CATEGORY
     * @uses self::VALUE_RESTAURANT_POLICY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADDITIONAL_OVERSOLD_POLICY,
            self::VALUE_EARLY_CHECKIN_AVAILABLE,
            self::VALUE_LATE_CHECKOUT_AVAILABLE,
            self::VALUE_OVERSOLD_ARRANGE_ACCOMODATIONS,
            self::VALUE_OVERSOLD_ARRANGE_TRANSPORTATION,
            self::VALUE_OVERSOLD_NOTIFY_CONTACTS,
            self::VALUE_OVERSOLD_PAY_ONE_NIGHT_ROOM,
            self::VALUE_SRVC_INFO_CODE,
            self::VALUE_SRVC_INFO,
            self::VALUE_BEVERAGE,
            self::VALUE_AVAILABLE_MEAL_CATEGORY,
            self::VALUE_RESTAURANT_CATEGORY,
            self::VALUE_RESTAURANT_POLICY,
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
