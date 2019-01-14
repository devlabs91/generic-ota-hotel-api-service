<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for USTimeZoneType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a time zone within the United States
 * @subpackage Enumerations
 */
class USTimeZoneType
{
    /**
     * Constant for value 'P'
     * @return string 'P'
     */
    const VALUE_P = 'P';
    /**
     * Constant for value 'M'
     * @return string 'M'
     */
    const VALUE_M = 'M';
    /**
     * Constant for value 'C'
     * @return string 'C'
     */
    const VALUE_C = 'C';
    /**
     * Constant for value 'E'
     * @return string 'E'
     */
    const VALUE_E = 'E';
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
     * @uses self::VALUE_P
     * @uses self::VALUE_M
     * @uses self::VALUE_C
     * @uses self::VALUE_E
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_P,
            self::VALUE_M,
            self::VALUE_C,
            self::VALUE_E,
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
