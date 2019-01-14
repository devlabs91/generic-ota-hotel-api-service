<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for CoverageTextType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The CoverageTextSimpleType simple type identifes the type of free text that is provided as part of coverage (insurance) information.
 * @subpackage Enumerations
 */
class CoverageTextType
{
    /**
     * Constant for value 'Supplement'
     * @return string 'Supplement'
     */
    const VALUE_SUPPLEMENT = 'Supplement';
    /**
     * Constant for value 'Description'
     * @return string 'Description'
     */
    const VALUE_DESCRIPTION = 'Description';
    /**
     * Constant for value 'Limits'
     * @return string 'Limits'
     */
    const VALUE_LIMITS = 'Limits';
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
     * @uses self::VALUE_SUPPLEMENT
     * @uses self::VALUE_DESCRIPTION
     * @uses self::VALUE_LIMITS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUPPLEMENT,
            self::VALUE_DESCRIPTION,
            self::VALUE_LIMITS,
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
