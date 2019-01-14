<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for FlightTypeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a particular type of flight - Direct, Stopover etc.
 * @subpackage Enumerations
 */
class FlightTypeType
{
    /**
     * Constant for value 'Nonstop'
     * @return string 'Nonstop'
     */
    const VALUE_NONSTOP = 'Nonstop';
    /**
     * Constant for value 'Direct'
     * @return string 'Direct'
     */
    const VALUE_DIRECT = 'Direct';
    /**
     * Constant for value 'Connection'
     * @return string 'Connection'
     */
    const VALUE_CONNECTION = 'Connection';
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
     * @uses self::VALUE_NONSTOP
     * @uses self::VALUE_DIRECT
     * @uses self::VALUE_CONNECTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONSTOP,
            self::VALUE_DIRECT,
            self::VALUE_CONNECTION,
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
