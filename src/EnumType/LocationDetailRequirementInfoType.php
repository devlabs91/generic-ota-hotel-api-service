<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for LocationDetailRequirementInfoType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The LocationDetailRequirementInfoType simple type defines a set of valid values for the textual information about the requirements when renting from a rental facility.
 * @subpackage Enumerations
 */
class LocationDetailRequirementInfoType
{
    /**
     * Constant for value 'OneWayRental'
     * @return string 'OneWayRental'
     */
    const VALUE_ONE_WAY_RENTAL = 'OneWayRental';
    /**
     * Constant for value 'Geographic'
     * @return string 'Geographic'
     */
    const VALUE_GEOGRAPHIC = 'Geographic';
    /**
     * Constant for value 'DropOff'
     * @return string 'DropOff'
     */
    const VALUE_DROP_OFF = 'DropOff';
    /**
     * Constant for value 'License'
     * @return string 'License'
     */
    const VALUE_LICENSE = 'License';
    /**
     * Constant for value 'Insurance'
     * @return string 'Insurance'
     */
    const VALUE_INSURANCE = 'Insurance';
    /**
     * Constant for value 'Eligibility'
     * @return string 'Eligibility'
     */
    const VALUE_ELIGIBILITY = 'Eligibility';
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
     * @uses self::VALUE_ONE_WAY_RENTAL
     * @uses self::VALUE_GEOGRAPHIC
     * @uses self::VALUE_DROP_OFF
     * @uses self::VALUE_LICENSE
     * @uses self::VALUE_INSURANCE
     * @uses self::VALUE_ELIGIBILITY
     * @uses self::VALUE_MISCELLANEOUS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ONE_WAY_RENTAL,
            self::VALUE_GEOGRAPHIC,
            self::VALUE_DROP_OFF,
            self::VALUE_LICENSE,
            self::VALUE_INSURANCE,
            self::VALUE_ELIGIBILITY,
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
