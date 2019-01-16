<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for IncludeExcludeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the applicability of the criteria to which it is related.
 * @subpackage Enumerations
 */
class IncludeExcludeType
{
    /**
     * Constant for value 'Include'
     * @return string 'Include'
     */
    const VALUE_INCLUDE = 'Include';
    /**
     * Constant for value 'Exclude'
     * @return string 'Exclude'
     */
    const VALUE_EXCLUDE = 'Exclude';
    /**
     * Constant for value 'Required'
     * @return string 'Required'
     */
    const VALUE_REQUIRED = 'Required';
    /**
     * Constant for value 'Allowed'
     * @return string 'Allowed'
     */
    const VALUE_ALLOWED = 'Allowed';
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
     * @uses self::VALUE_INCLUDE
     * @uses self::VALUE_EXCLUDE
     * @uses self::VALUE_REQUIRED
     * @uses self::VALUE_ALLOWED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INCLUDE,
            self::VALUE_EXCLUDE,
            self::VALUE_REQUIRED,
            self::VALUE_ALLOWED,
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
