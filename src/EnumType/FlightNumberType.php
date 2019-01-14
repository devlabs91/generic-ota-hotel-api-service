<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for FlightNumberType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a flight number (1 to 4 numbers followed by optional uppercase A - Z, which specifies an operational suffix) or OPEN or ARNK.
 * - pattern: [0-9]{1,4}[A-Z]?
 * @subpackage Enumerations
 */
class FlightNumberType
{
    /**
     * Constant for value 'OPEN'
     * @return string 'OPEN'
     */
    const VALUE_OPEN = 'OPEN';
    /**
     * Constant for value 'ARNK'
     * @return string 'ARNK'
     */
    const VALUE_ARNK = 'ARNK';
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
     * @uses self::VALUE_OPEN
     * @uses self::VALUE_ARNK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OPEN,
            self::VALUE_ARNK,
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
