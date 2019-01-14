<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for ActionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Type of action taken on the profile.
 * @subpackage Enumerations
 */
class ActionType
{
    /**
     * Constant for value 'Create'
     * @return string 'Create'
     */
    const VALUE_CREATE = 'Create';
    /**
     * Constant for value 'Read'
     * @return string 'Read'
     */
    const VALUE_READ = 'Read';
    /**
     * Constant for value 'Update'
     * @return string 'Update'
     */
    const VALUE_UPDATE = 'Update';
    /**
     * Constant for value 'Delete'
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Constant for value 'Add-Update'
     * @return string 'Add-Update'
     */
    const VALUE_ADD_UPDATE = 'Add-Update';
    /**
     * Constant for value 'Cancel'
     * @return string 'Cancel'
     */
    const VALUE_CANCEL = 'Cancel';
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
     * @uses self::VALUE_CREATE
     * @uses self::VALUE_READ
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_ADD_UPDATE
     * @uses self::VALUE_CANCEL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CREATE,
            self::VALUE_READ,
            self::VALUE_UPDATE,
            self::VALUE_DELETE,
            self::VALUE_ADD_UPDATE,
            self::VALUE_CANCEL,
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
