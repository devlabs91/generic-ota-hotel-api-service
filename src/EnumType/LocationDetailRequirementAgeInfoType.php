<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for LocationDetailRequirementAgeInfoType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The LocationDetailRequirementAgeInfoType defines a set of valid values for the textual information about the requirements concerning the age of a renter when renting from a rental facility.
 * @subpackage Enumerations
 */
class LocationDetailRequirementAgeInfoType
{
    /**
     * Constant for value 'MinimumAge'
     * @return string 'MinimumAge'
     */
    const VALUE_MINIMUM_AGE = 'MinimumAge';
    /**
     * Constant for value 'MinimumAgeExceptions'
     * @return string 'MinimumAgeExceptions'
     */
    const VALUE_MINIMUM_AGE_EXCEPTIONS = 'MinimumAgeExceptions';
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
     * @uses self::VALUE_MINIMUM_AGE
     * @uses self::VALUE_MINIMUM_AGE_EXCEPTIONS
     * @uses self::VALUE_MISCELLANEOUS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MINIMUM_AGE,
            self::VALUE_MINIMUM_AGE_EXCEPTIONS,
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
