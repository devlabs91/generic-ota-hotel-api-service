<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for TransferActionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Used to indicate the transfer action status.
 * @subpackage Enumerations
 */
class TransferActionType
{
    /**
     * Constant for value 'Automatic'
     * @return string 'Automatic'
     */
    const VALUE_AUTOMATIC = 'Automatic';
    /**
     * Constant for value 'Mandatory'
     * @return string 'Mandatory'
     */
    const VALUE_MANDATORY = 'Mandatory';
    /**
     * Constant for value 'Selectable'
     * @return string 'Selectable'
     */
    const VALUE_SELECTABLE = 'Selectable';
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
     * @uses self::VALUE_AUTOMATIC
     * @uses self::VALUE_MANDATORY
     * @uses self::VALUE_SELECTABLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AUTOMATIC,
            self::VALUE_MANDATORY,
            self::VALUE_SELECTABLE,
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
