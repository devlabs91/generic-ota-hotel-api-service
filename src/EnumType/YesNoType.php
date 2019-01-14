<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for YesNoType EnumType
 * @subpackage Enumerations
 */
class YesNoType
{
    /**
     * Constant for value 'Yes'
     * @return string 'Yes'
     */
    const VALUE_YES = 'Yes';
    /**
     * Constant for value 'No'
     * @return string 'No'
     */
    const VALUE_NO = 'No';
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
     * @uses self::VALUE_YES
     * @uses self::VALUE_NO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_YES,
            self::VALUE_NO,
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
