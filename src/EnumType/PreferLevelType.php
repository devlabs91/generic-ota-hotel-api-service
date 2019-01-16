<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for PreferLevelType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).
 * @subpackage Enumerations
 */
class PreferLevelType
{
    /**
     * Constant for value 'Only'
     * @return string 'Only'
     */
    const VALUE_ONLY = 'Only';
    /**
     * Constant for value 'Unacceptable'
     * @return string 'Unacceptable'
     */
    const VALUE_UNACCEPTABLE = 'Unacceptable';
    /**
     * Constant for value 'Preferred'
     * @return string 'Preferred'
     */
    const VALUE_PREFERRED = 'Preferred';
    /**
     * Constant for value 'Required'
     * @return string 'Required'
     */
    const VALUE_REQUIRED = 'Required';
    /**
     * Constant for value 'NoPreference'
     * @return string 'NoPreference'
     */
    const VALUE_NO_PREFERENCE = 'NoPreference';
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
     * @uses self::VALUE_ONLY
     * @uses self::VALUE_UNACCEPTABLE
     * @uses self::VALUE_PREFERRED
     * @uses self::VALUE_REQUIRED
     * @uses self::VALUE_NO_PREFERENCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ONLY,
            self::VALUE_UNACCEPTABLE,
            self::VALUE_PREFERRED,
            self::VALUE_REQUIRED,
            self::VALUE_NO_PREFERENCE,
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
