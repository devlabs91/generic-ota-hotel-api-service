<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for ActionCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the action code for a booking - OK, Waitlist etc.
 * @subpackage Enumerations
 */
class ActionCodeType
{
    /**
     * Constant for value 'OK'
     * @return string 'OK'
     */
    const VALUE_OK = 'OK';
    /**
     * Constant for value 'Waitlist'
     * @return string 'Waitlist'
     */
    const VALUE_WAITLIST = 'Waitlist';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'Cancel'
     * @return string 'Cancel'
     */
    const VALUE_CANCEL = 'Cancel';
    /**
     * Constant for value 'Need'
     * @return string 'Need'
     */
    const VALUE_NEED = 'Need';
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
     * @uses self::VALUE_OK
     * @uses self::VALUE_WAITLIST
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_CANCEL
     * @uses self::VALUE_NEED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OK,
            self::VALUE_WAITLIST,
            self::VALUE_OTHER,
            self::VALUE_CANCEL,
            self::VALUE_NEED,
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
