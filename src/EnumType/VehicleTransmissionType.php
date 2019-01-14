<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for VehicleTransmissionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleTransmissionSimpleType simple type defines a set of valid values for the transmission type of a vehicle. The valid values are automatic and manual. Use of this attribute can help in describing a vehicle.
 * @subpackage Enumerations
 */
class VehicleTransmissionType
{
    /**
     * Constant for value 'Automatic'
     * @return string 'Automatic'
     */
    const VALUE_AUTOMATIC = 'Automatic';
    /**
     * Constant for value 'Manual'
     * @return string 'Manual'
     */
    const VALUE_MANUAL = 'Manual';
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
     * @uses self::VALUE_AUTOMATIC
     * @uses self::VALUE_MANUAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AUTOMATIC,
            self::VALUE_MANUAL,
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
