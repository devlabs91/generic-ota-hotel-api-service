<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for PickUpDropOffType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Where an extra may be collected from and returned to.
 * @subpackage Enumerations
 */
class PickUpDropOffType
{
    /**
     * Constant for value 'Airport'
     * @return string 'Airport'
     */
    const VALUE_AIRPORT = 'Airport';
    /**
     * Constant for value 'Property'
     * @return string 'Property'
     */
    const VALUE_PROPERTY = 'Property';
    /**
     * Constant for value 'Resort'
     * @return string 'Resort'
     */
    const VALUE_RESORT = 'Resort';
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
     * @uses self::VALUE_AIRPORT
     * @uses self::VALUE_PROPERTY
     * @uses self::VALUE_RESORT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AIRPORT,
            self::VALUE_PROPERTY,
            self::VALUE_RESORT,
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
