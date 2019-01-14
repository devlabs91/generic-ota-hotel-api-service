<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for VehicleFuelUnitNameType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleFuelUnitNameSimpleType simple type defines a set of valid values for the units in which fuel is measured. The rental of a vehicle may include a charge to provide fuel for the vehicle, expressed in Gallons or Liters.
 * @subpackage Enumerations
 */
class VehicleFuelUnitNameType
{
    /**
     * Constant for value 'Gallon'
     * @return string 'Gallon'
     */
    const VALUE_GALLON = 'Gallon';
    /**
     * Constant for value 'Liter'
     * @return string 'Liter'
     */
    const VALUE_LITER = 'Liter';
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
     * @uses self::VALUE_GALLON
     * @uses self::VALUE_LITER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GALLON,
            self::VALUE_LITER,
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
