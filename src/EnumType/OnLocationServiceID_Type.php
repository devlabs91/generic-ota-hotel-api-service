<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for OnLocationServiceID_Type EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The OnLocationServiceType simple type defines a set of valid values for the services that may be offered at the rental facility.
 * @subpackage Enumerations
 */
class OnLocationServiceID_Type
{
    /**
     * Constant for value 'ComputerDrivingDirections'
     * @return string 'ComputerDrivingDirections'
     */
    const VALUE_COMPUTER_DRIVING_DIRECTIONS = 'ComputerDrivingDirections';
    /**
     * Constant for value 'ExpressReturnService'
     * @return string 'ExpressReturnService'
     */
    const VALUE_EXPRESS_RETURN_SERVICE = 'ExpressReturnService';
    /**
     * Constant for value 'SpecialNeeds'
     * @return string 'SpecialNeeds'
     */
    const VALUE_SPECIAL_NEEDS = 'SpecialNeeds';
    /**
     * Constant for value 'FrequentRenter'
     * @return string 'FrequentRenter'
     */
    const VALUE_FREQUENT_RENTER = 'FrequentRenter';
    /**
     * Constant for value 'Miscellaneous'
     * @return string 'Miscellaneous'
     */
    const VALUE_MISCELLANEOUS = 'Miscellaneous';
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
     * @uses self::VALUE_COMPUTER_DRIVING_DIRECTIONS
     * @uses self::VALUE_EXPRESS_RETURN_SERVICE
     * @uses self::VALUE_SPECIAL_NEEDS
     * @uses self::VALUE_FREQUENT_RENTER
     * @uses self::VALUE_MISCELLANEOUS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_COMPUTER_DRIVING_DIRECTIONS,
            self::VALUE_EXPRESS_RETURN_SERVICE,
            self::VALUE_SPECIAL_NEEDS,
            self::VALUE_FREQUENT_RENTER,
            self::VALUE_MISCELLANEOUS,
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
