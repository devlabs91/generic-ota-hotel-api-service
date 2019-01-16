<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for PMS_ResStatusType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Statuses that exist in a property management system (PMS).
 * @subpackage Enumerations
 */
class PMS_ResStatusType
{
    /**
     * Constant for value 'Reserved'
     * @return string 'Reserved'
     */
    const VALUE_RESERVED = 'Reserved';
    /**
     * Constant for value 'Requested'
     * @return string 'Requested'
     */
    const VALUE_REQUESTED = 'Requested';
    /**
     * Constant for value 'Request denied'
     * @return string 'Request denied'
     */
    const VALUE_REQUEST_DENIED = 'Request denied';
    /**
     * Constant for value 'No-show'
     * @return string 'No-show'
     */
    const VALUE_NO_SHOW = 'No-show';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'In-house'
     * @return string 'In-house'
     */
    const VALUE_IN_HOUSE = 'In-house';
    /**
     * Constant for value 'Checked out'
     * @return string 'Checked out'
     */
    const VALUE_CHECKED_OUT = 'Checked out';
    /**
     * Constant for value 'Waitlisted'
     * @return string 'Waitlisted'
     */
    const VALUE_WAITLISTED = 'Waitlisted';
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
     * @uses self::VALUE_RESERVED
     * @uses self::VALUE_REQUESTED
     * @uses self::VALUE_REQUEST_DENIED
     * @uses self::VALUE_NO_SHOW
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_IN_HOUSE
     * @uses self::VALUE_CHECKED_OUT
     * @uses self::VALUE_WAITLISTED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RESERVED,
            self::VALUE_REQUESTED,
            self::VALUE_REQUEST_DENIED,
            self::VALUE_NO_SHOW,
            self::VALUE_CANCELLED,
            self::VALUE_IN_HOUSE,
            self::VALUE_CHECKED_OUT,
            self::VALUE_WAITLISTED,
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
