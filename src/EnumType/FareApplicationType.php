<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for FareApplicationType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates how the fare may be applied, such as one way or roundtrip.
 * @subpackage Enumerations
 */
class FareApplicationType
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
     * Constant for value 'HalfReturn'
     * @return string 'HalfReturn'
     */
    const VALUE_HALF_RETURN = 'HalfReturn';
    /**
     * Constant for value 'Roundtrip'
     * @return string 'Roundtrip'
     */
    const VALUE_ROUNDTRIP = 'Roundtrip';
    /**
     * Constant for value 'OneWayOnly'
     * @return string 'OneWayOnly'
     */
    const VALUE_ONE_WAY_ONLY = 'OneWayOnly';
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
     * @uses self::VALUE_HALF_RETURN
     * @uses self::VALUE_ROUNDTRIP
     * @uses self::VALUE_ONE_WAY_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ONE_WAY,
            self::VALUE_RETURN,
            self::VALUE_HALF_RETURN,
            self::VALUE_ROUNDTRIP,
            self::VALUE_ONE_WAY_ONLY,
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
