<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for RateIndicatorType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: An enumerated type indicating special conditions with the rate Valid values: ChangeDuringStay, MultipleNights, Exclusive, OnRequest, LimitedAvailability.
 * @subpackage Enumerations
 */
class RateIndicatorType
{
    /**
     * Constant for value 'ChangeDuringStay'
     * @return string 'ChangeDuringStay'
     */
    const VALUE_CHANGE_DURING_STAY = 'ChangeDuringStay';
    /**
     * Constant for value 'MultipleNights'
     * @return string 'MultipleNights'
     */
    const VALUE_MULTIPLE_NIGHTS = 'MultipleNights';
    /**
     * Constant for value 'Exclusive'
     * @return string 'Exclusive'
     */
    const VALUE_EXCLUSIVE = 'Exclusive';
    /**
     * Constant for value 'OnRequest'
     * @return string 'OnRequest'
     */
    const VALUE_ON_REQUEST = 'OnRequest';
    /**
     * Constant for value 'LimitedAvailability'
     * @return string 'LimitedAvailability'
     */
    const VALUE_LIMITED_AVAILABILITY = 'LimitedAvailability';
    /**
     * Constant for value 'AvailableForSale'
     * @return string 'AvailableForSale'
     */
    const VALUE_AVAILABLE_FOR_SALE = 'AvailableForSale';
    /**
     * Constant for value 'ClosedOut'
     * @return string 'ClosedOut'
     */
    const VALUE_CLOSED_OUT = 'ClosedOut';
    /**
     * Constant for value 'OtherAvailable'
     * @return string 'OtherAvailable'
     */
    const VALUE_OTHER_AVAILABLE = 'OtherAvailable';
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
     * @uses self::VALUE_CHANGE_DURING_STAY
     * @uses self::VALUE_MULTIPLE_NIGHTS
     * @uses self::VALUE_EXCLUSIVE
     * @uses self::VALUE_ON_REQUEST
     * @uses self::VALUE_LIMITED_AVAILABILITY
     * @uses self::VALUE_AVAILABLE_FOR_SALE
     * @uses self::VALUE_CLOSED_OUT
     * @uses self::VALUE_OTHER_AVAILABLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CHANGE_DURING_STAY,
            self::VALUE_MULTIPLE_NIGHTS,
            self::VALUE_EXCLUSIVE,
            self::VALUE_ON_REQUEST,
            self::VALUE_LIMITED_AVAILABILITY,
            self::VALUE_AVAILABLE_FOR_SALE,
            self::VALUE_CLOSED_OUT,
            self::VALUE_OTHER_AVAILABLE,
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
