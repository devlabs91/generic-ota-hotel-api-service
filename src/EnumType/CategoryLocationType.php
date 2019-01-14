<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for CategoryLocationType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the category location preference.
 * @subpackage Enumerations
 */
class CategoryLocationType
{
    /**
     * Constant for value 'Inside'
     * @return string 'Inside'
     */
    const VALUE_INSIDE = 'Inside';
    /**
     * Constant for value 'Outside'
     * @return string 'Outside'
     */
    const VALUE_OUTSIDE = 'Outside';
    /**
     * Constant for value 'Both'
     * @return string 'Both'
     */
    const VALUE_BOTH = 'Both';
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
     * @uses self::VALUE_INSIDE
     * @uses self::VALUE_OUTSIDE
     * @uses self::VALUE_BOTH
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INSIDE,
            self::VALUE_OUTSIDE,
            self::VALUE_BOTH,
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
