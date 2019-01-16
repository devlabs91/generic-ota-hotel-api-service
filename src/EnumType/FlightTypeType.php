<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for FlightTypeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies a particular type of flight (e.g. direct, stopover).
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
     * Constant for value 'SingleConnection'
     * @return string 'SingleConnection'
     */
    const VALUE_SINGLE_CONNECTION = 'SingleConnection';
    /**
     * Constant for value 'DoubleConnection'
     * @return string 'DoubleConnection'
     */
    const VALUE_DOUBLE_CONNECTION = 'DoubleConnection';
    /**
     * Constant for value 'OneStopOnly'
     * @return string 'OneStopOnly'
     */
    const VALUE_ONE_STOP_ONLY = 'OneStopOnly';
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
     * @uses self::VALUE_SINGLE_CONNECTION
     * @uses self::VALUE_DOUBLE_CONNECTION
     * @uses self::VALUE_ONE_STOP_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONSTOP,
            self::VALUE_DIRECT,
            self::VALUE_CONNECTION,
            self::VALUE_SINGLE_CONNECTION,
            self::VALUE_DOUBLE_CONNECTION,
            self::VALUE_ONE_STOP_ONLY,
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
