<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for LocationDetailRequirementAddlDriverInfoType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The LocationDetailRequirementAddlDriverInfoType defines a set of valid values for the textual information about the requirements concerning additional drivers when renting from a rental facility.
 * @subpackage Enumerations
 */
class LocationDetailRequirementAddlDriverInfoType
{
    /**
     * Constant for value 'IncludedAuthorized'
     * @return string 'IncludedAuthorized'
     */
    const VALUE_INCLUDED_AUTHORIZED = 'IncludedAuthorized';
    /**
     * Constant for value 'AdditionalAuthorized'
     * @return string 'AdditionalAuthorized'
     */
    const VALUE_ADDITIONAL_AUTHORIZED = 'AdditionalAuthorized';
    /**
     * Constant for value 'Fees'
     * @return string 'Fees'
     */
    const VALUE_FEES = 'Fees';
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
     * @uses self::VALUE_INCLUDED_AUTHORIZED
     * @uses self::VALUE_ADDITIONAL_AUTHORIZED
     * @uses self::VALUE_FEES
     * @uses self::VALUE_MISCELLANEOUS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INCLUDED_AUTHORIZED,
            self::VALUE_ADDITIONAL_AUTHORIZED,
            self::VALUE_FEES,
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
