<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for EquipmentRestrictionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The EquipmentRestrictionSimpleType simple type defines a set of valid values for the restrictions that may be placed upon special equipment included as part of the rental of a vehicle. Some equipment is restricted to rentals that
 * return to the same place, some equipment is restricted to one-way rentals, and some equipment has no restrictions.
 * @subpackage Enumerations
 */
class EquipmentRestrictionType
{
    /**
     * Constant for value 'OneWayOnly'
     * @return string 'OneWayOnly'
     */
    const VALUE_ONE_WAY_ONLY = 'OneWayOnly';
    /**
     * Constant for value 'RoundTripOnly'
     * @return string 'RoundTripOnly'
     */
    const VALUE_ROUND_TRIP_ONLY = 'RoundTripOnly';
    /**
     * Constant for value 'AnyReservation'
     * @return string 'AnyReservation'
     */
    const VALUE_ANY_RESERVATION = 'AnyReservation';
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
     * @uses self::VALUE_ONE_WAY_ONLY
     * @uses self::VALUE_ROUND_TRIP_ONLY
     * @uses self::VALUE_ANY_RESERVATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ONE_WAY_ONLY,
            self::VALUE_ROUND_TRIP_ONLY,
            self::VALUE_ANY_RESERVATION,
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
