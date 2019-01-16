<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for LocationDetailShuttleInfoType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The LocationDetailShuttleInfoType defines a set of valid values for the textual information about the shuttle services when renting from a rental facility.
 * @subpackage Enumerations
 */
class LocationDetailShuttleInfoType
{
    /**
     * Constant for value 'Transportation'
     * @return string 'Transportation'
     */
    const VALUE_TRANSPORTATION = 'Transportation';
    /**
     * Constant for value 'Frequency'
     * @return string 'Frequency'
     */
    const VALUE_FREQUENCY = 'Frequency';
    /**
     * Constant for value 'PickupInfo'
     * @return string 'PickupInfo'
     */
    const VALUE_PICKUP_INFO = 'PickupInfo';
    /**
     * Constant for value 'Distance'
     * @return string 'Distance'
     */
    const VALUE_DISTANCE = 'Distance';
    /**
     * Constant for value 'ElapsedTime'
     * @return string 'ElapsedTime'
     */
    const VALUE_ELAPSED_TIME = 'ElapsedTime';
    /**
     * Constant for value 'Fee'
     * @return string 'Fee'
     */
    const VALUE_FEE = 'Fee';
    /**
     * Constant for value 'Miscellaneous'
     * @return string 'Miscellaneous'
     */
    const VALUE_MISCELLANEOUS = 'Miscellaneous';
    /**
     * Constant for value 'Hours'
     * @return string 'Hours'
     */
    const VALUE_HOURS = 'Hours';
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
     * @uses self::VALUE_TRANSPORTATION
     * @uses self::VALUE_FREQUENCY
     * @uses self::VALUE_PICKUP_INFO
     * @uses self::VALUE_DISTANCE
     * @uses self::VALUE_ELAPSED_TIME
     * @uses self::VALUE_FEE
     * @uses self::VALUE_MISCELLANEOUS
     * @uses self::VALUE_HOURS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TRANSPORTATION,
            self::VALUE_FREQUENCY,
            self::VALUE_PICKUP_INFO,
            self::VALUE_DISTANCE,
            self::VALUE_ELAPSED_TIME,
            self::VALUE_FEE,
            self::VALUE_MISCELLANEOUS,
            self::VALUE_HOURS,
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
