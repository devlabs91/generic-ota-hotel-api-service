<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for PricingSourceType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: It can be used to indicate whether the fare is public or private.
 * @subpackage Enumerations
 */
class PricingSourceType
{
    /**
     * Constant for value 'Published'
     * @return string 'Published'
     */
    const VALUE_PUBLISHED = 'Published';
    /**
     * Constant for value 'Private'
     * @return string 'Private'
     */
    const VALUE_PRIVATE = 'Private';
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
     * @uses self::VALUE_PUBLISHED
     * @uses self::VALUE_PRIVATE
     * @uses self::VALUE_BOTH
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PUBLISHED,
            self::VALUE_PRIVATE,
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
