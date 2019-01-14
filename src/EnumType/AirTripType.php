<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for AirTripType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the trip type - one way, return, circle trip, open jaw
 * @subpackage Enumerations
 */
class AirTripType
{
    /**
     * Constant for value 'OneWay'
     * @return string 'OneWay'
     */
    const VALUE_ONE_WAY = 'OneWay';
    /**
     * Constant for value 'Return'
     * @return string 'Return'
     */
    const VALUE_RETURN = 'Return';
    /**
     * Constant for value 'Circle'
     * @return string 'Circle'
     */
    const VALUE_CIRCLE = 'Circle';
    /**
     * Constant for value 'OpenJaw'
     * @return string 'OpenJaw'
     */
    const VALUE_OPEN_JAW = 'OpenJaw';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
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
     * @uses self::VALUE_ONE_WAY
     * @uses self::VALUE_RETURN
     * @uses self::VALUE_CIRCLE
     * @uses self::VALUE_OPEN_JAW
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ONE_WAY,
            self::VALUE_RETURN,
            self::VALUE_CIRCLE,
            self::VALUE_OPEN_JAW,
            self::VALUE_OTHER,
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
