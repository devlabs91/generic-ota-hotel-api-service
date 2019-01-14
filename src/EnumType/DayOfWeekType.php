<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for DayOfWeekType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: A three letter abbreviation for the days of the week (e.g. may be the starting date for the availability requested, days of operation, rate effective day, etc.).
 * @subpackage Enumerations
 */
class DayOfWeekType
{
    /**
     * Constant for value 'Mon'
     * @return string 'Mon'
     */
    const VALUE_MON = 'Mon';
    /**
     * Constant for value 'Tue'
     * @return string 'Tue'
     */
    const VALUE_TUE = 'Tue';
    /**
     * Constant for value 'Wed'
     * @return string 'Wed'
     */
    const VALUE_WED = 'Wed';
    /**
     * Constant for value 'Thu'
     * @return string 'Thu'
     */
    const VALUE_THU = 'Thu';
    /**
     * Constant for value 'Fri'
     * @return string 'Fri'
     */
    const VALUE_FRI = 'Fri';
    /**
     * Constant for value 'Sat'
     * @return string 'Sat'
     */
    const VALUE_SAT = 'Sat';
    /**
     * Constant for value 'Sun'
     * @return string 'Sun'
     */
    const VALUE_SUN = 'Sun';
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
     * @uses self::VALUE_MON
     * @uses self::VALUE_TUE
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
            self::VALUE_MON,
            self::VALUE_TUE,
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
