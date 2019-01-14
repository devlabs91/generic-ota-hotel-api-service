<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for StayUnitType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the 'Units' that can be applied to Stay restrictions.
 * @subpackage Enumerations
 */
class StayUnitType
{
    /**
     * Constant for value 'Minutes'
     * @return string 'Minutes'
     */
    const VALUE_MINUTES = 'Minutes';
    /**
     * Constant for value 'Hours'
     * @return string 'Hours'
     */
    const VALUE_HOURS = 'Hours';
    /**
     * Constant for value 'Days'
     * @return string 'Days'
     */
    const VALUE_DAYS = 'Days';
    /**
     * Constant for value 'Months'
     * @return string 'Months'
     */
    const VALUE_MONTHS = 'Months';
    /**
     * Constant for value 'MON'
     * @return string 'MON'
     */
    const VALUE_MON = 'MON';
    /**
     * Constant for value 'TUES'
     * @return string 'TUES'
     */
    const VALUE_TUES = 'TUES';
    /**
     * Constant for value 'WED'
     * @return string 'WED'
     */
    const VALUE_WED = 'WED';
    /**
     * Constant for value 'THU'
     * @return string 'THU'
     */
    const VALUE_THU = 'THU';
    /**
     * Constant for value 'FRI'
     * @return string 'FRI'
     */
    const VALUE_FRI = 'FRI';
    /**
     * Constant for value 'SAT'
     * @return string 'SAT'
     */
    const VALUE_SAT = 'SAT';
    /**
     * Constant for value 'SUN'
     * @return string 'SUN'
     */
    const VALUE_SUN = 'SUN';
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
     * @uses self::VALUE_MINUTES
     * @uses self::VALUE_HOURS
     * @uses self::VALUE_DAYS
     * @uses self::VALUE_MONTHS
     * @uses self::VALUE_MON
     * @uses self::VALUE_TUES
     * @uses self::VALUE_WED
     * @uses self::VALUE_THU
     * @uses self::VALUE_FRI
     * @uses self::VALUE_SAT
     * @uses self::VALUE_SUN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MINUTES,
            self::VALUE_HOURS,
            self::VALUE_DAYS,
            self::VALUE_MONTHS,
            self::VALUE_MON,
            self::VALUE_TUES,
            self::VALUE_WED,
            self::VALUE_THU,
            self::VALUE_FRI,
            self::VALUE_SAT,
            self::VALUE_SUN,
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
