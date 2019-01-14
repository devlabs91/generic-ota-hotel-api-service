<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for InventoryStatusType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This defines a set of valid status values, allowing the selection of a specific group based on availability, or allowing the reservation status to be made known. Examples of such values include Available, OnRequest, Confirmed, etc.
 * @subpackage Enumerations
 */
class InventoryStatusType
{
    /**
     * Constant for value 'Available'
     * @return string 'Available'
     */
    const VALUE_AVAILABLE = 'Available';
    /**
     * Constant for value 'Unavailable'
     * @return string 'Unavailable'
     */
    const VALUE_UNAVAILABLE = 'Unavailable';
    /**
     * Constant for value 'OnRequest'
     * @return string 'OnRequest'
     */
    const VALUE_ON_REQUEST = 'OnRequest';
    /**
     * Constant for value 'Confirmed'
     * @return string 'Confirmed'
     */
    const VALUE_CONFIRMED = 'Confirmed';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
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
     * @uses self::VALUE_AVAILABLE
     * @uses self::VALUE_UNAVAILABLE
     * @uses self::VALUE_ON_REQUEST
     * @uses self::VALUE_CONFIRMED
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AVAILABLE,
            self::VALUE_UNAVAILABLE,
            self::VALUE_ON_REQUEST,
            self::VALUE_CONFIRMED,
            self::VALUE_ALL,
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
