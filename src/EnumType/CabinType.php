<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for CabinType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: A cabin is either First, Business or Economy
 * @subpackage Enumerations
 */
class CabinType
{
    /**
     * Constant for value 'First'
     * @return string 'First'
     */
    const VALUE_FIRST = 'First';
    /**
     * Constant for value 'Business'
     * @return string 'Business'
     */
    const VALUE_BUSINESS = 'Business';
    /**
     * Constant for value 'Economy'
     * @return string 'Economy'
     */
    const VALUE_ECONOMY = 'Economy';
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
     * @uses self::VALUE_FIRST
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_ECONOMY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FIRST,
            self::VALUE_BUSINESS,
            self::VALUE_ECONOMY,
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
