<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for AirTripDirectionType EnumType
 * @subpackage Enumerations
 */
class AirTripDirectionType
{
    /**
     * Constant for value 'Outbound'
     * @return string 'Outbound'
     */
    const VALUE_OUTBOUND = 'Outbound';
    /**
     * Constant for value 'Return'
     * @return string 'Return'
     */
    const VALUE_RETURN = 'Return';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
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
     * @uses self::VALUE_OUTBOUND
     * @uses self::VALUE_RETURN
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OUTBOUND,
            self::VALUE_RETURN,
            self::VALUE_ALL,
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
