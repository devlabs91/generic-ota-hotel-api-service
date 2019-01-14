<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for PkgPersonalInsuranceCode EnumType
 * Meta informations extracted from the WSDL
 * - documentation: A coded identification of a type of insurance. This element could be equivalent to UN/EDIFACT 4497 Insurance cover type, coded)
 * @subpackage Enumerations
 */
class PkgPersonalInsuranceCode
{
    /**
     * Constant for value 'Ski'
     * @return string 'Ski'
     */
    const VALUE_SKI = 'Ski';
    /**
     * Constant for value 'Worldwide'
     * @return string 'Worldwide'
     */
    const VALUE_WORLDWIDE = 'Worldwide';
    /**
     * Constant for value 'Europe'
     * @return string 'Europe'
     */
    const VALUE_EUROPE = 'Europe';
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
     * @uses self::VALUE_SKI
     * @uses self::VALUE_WORLDWIDE
     * @uses self::VALUE_EUROPE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SKI,
            self::VALUE_WORLDWIDE,
            self::VALUE_EUROPE,
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
