<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for SeatType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the position of a seat, e.g. Window, Aisle etc.
 * @subpackage Enumerations
 */
class SeatType
{
    /**
     * Constant for value 'Window'
     * @return string 'Window'
     */
    const VALUE_WINDOW = 'Window';
    /**
     * Constant for value 'Aisle'
     * @return string 'Aisle'
     */
    const VALUE_AISLE = 'Aisle';
    /**
     * Constant for value 'Table'
     * @return string 'Table'
     */
    const VALUE_TABLE = 'Table';
    /**
     * Constant for value 'Middle'
     * @return string 'Middle'
     */
    const VALUE_MIDDLE = 'Middle';
    /**
     * Constant for value 'Individual'
     * @return string 'Individual'
     */
    const VALUE_INDIVIDUAL = 'Individual';
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
     * @uses self::VALUE_WINDOW
     * @uses self::VALUE_AISLE
     * @uses self::VALUE_TABLE
     * @uses self::VALUE_MIDDLE
     * @uses self::VALUE_INDIVIDUAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WINDOW,
            self::VALUE_AISLE,
            self::VALUE_TABLE,
            self::VALUE_MIDDLE,
            self::VALUE_INDIVIDUAL,
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
