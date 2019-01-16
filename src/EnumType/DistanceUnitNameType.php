<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for DistanceUnitNameType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Defines a set of valid values for the units in which distance is measured (i.e. mile or kilometer).
 * @subpackage Enumerations
 */
class DistanceUnitNameType
{
    /**
     * Constant for value 'Mile'
     * @return string 'Mile'
     */
    const VALUE_MILE = 'Mile';
    /**
     * Constant for value 'Km'
     * @return string 'Km'
     */
    const VALUE_KM = 'Km';
    /**
     * Constant for value 'Block'
     * @return string 'Block'
     */
    const VALUE_BLOCK = 'Block';
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
     * @uses self::VALUE_MILE
     * @uses self::VALUE_KM
     * @uses self::VALUE_BLOCK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MILE,
            self::VALUE_KM,
            self::VALUE_BLOCK,
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
