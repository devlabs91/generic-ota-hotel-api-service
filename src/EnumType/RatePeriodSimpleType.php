<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for RatePeriodSimpleType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The RatePeriodSimpleType simple type defines a set of valid values for the type of rate that may be applied. Typically rates differ based upon the duration, and the actual rate is then expressed in terms of the period of the rental.
 * @subpackage Enumerations
 */
class RatePeriodSimpleType
{
    /**
     * Constant for value 'Hourly'
     * @return string 'Hourly'
     */
    const VALUE_HOURLY = 'Hourly';
    /**
     * Constant for value 'Daily'
     * @return string 'Daily'
     */
    const VALUE_DAILY = 'Daily';
    /**
     * Constant for value 'Weekly'
     * @return string 'Weekly'
     */
    const VALUE_WEEKLY = 'Weekly';
    /**
     * Constant for value 'Monthly'
     * @return string 'Monthly'
     */
    const VALUE_MONTHLY = 'Monthly';
    /**
     * Constant for value 'WeekendDay'
     * @return string 'WeekendDay'
     */
    const VALUE_WEEKEND_DAY = 'WeekendDay';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'Package'
     * @return string 'Package'
     */
    const VALUE_PACKAGE = 'Package';
    /**
     * Constant for value 'Bundle'
     * @return string 'Bundle'
     */
    const VALUE_BUNDLE = 'Bundle';
    /**
     * Constant for value 'Total'
     * @return string 'Total'
     */
    const VALUE_TOTAL = 'Total';
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
     * @uses self::VALUE_HOURLY
     * @uses self::VALUE_DAILY
     * @uses self::VALUE_WEEKLY
     * @uses self::VALUE_MONTHLY
     * @uses self::VALUE_WEEKEND_DAY
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_PACKAGE
     * @uses self::VALUE_BUNDLE
     * @uses self::VALUE_TOTAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HOURLY,
            self::VALUE_DAILY,
            self::VALUE_WEEKLY,
            self::VALUE_MONTHLY,
            self::VALUE_WEEKEND_DAY,
            self::VALUE_OTHER,
            self::VALUE_PACKAGE,
            self::VALUE_BUNDLE,
            self::VALUE_TOTAL,
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
