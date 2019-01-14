<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for SeatDirectionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the orientation of a seat relative to the direction of travel.
 * @subpackage Enumerations
 */
class SeatDirectionType
{
    /**
     * Constant for value 'Facing'
     * @return string 'Facing'
     */
    const VALUE_FACING = 'Facing';
    /**
     * Constant for value 'Back'
     * @return string 'Back'
     */
    const VALUE_BACK = 'Back';
    /**
     * Constant for value 'Airline'
     * @return string 'Airline'
     */
    const VALUE_AIRLINE = 'Airline';
    /**
     * Constant for value 'Lateral'
     * @return string 'Lateral'
     */
    const VALUE_LATERAL = 'Lateral';
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
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
     * @uses self::VALUE_FACING
     * @uses self::VALUE_BACK
     * @uses self::VALUE_AIRLINE
     * @uses self::VALUE_LATERAL
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FACING,
            self::VALUE_BACK,
            self::VALUE_AIRLINE,
            self::VALUE_LATERAL,
            self::VALUE_UNKNOWN,
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
