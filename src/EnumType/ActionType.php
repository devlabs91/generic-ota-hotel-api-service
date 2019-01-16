<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for ActionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: An enumerated type. 'Adjustment' is the offset up or down to the inventoried item (day to day business); 'Used' means the Inv value is how much of this inventoried item has been used/sold at this point in time; 'Remaining' means that
 * the Inv value shows what is left for the inventoried item at this point in time; 'Allocation' means this is how much of the inventoried item is going to be allocated to the receiver for them to pull from inventory. | Type of action taken on the
 * profile. | Identifes an action to take place.
 * @subpackage Enumerations
 */
class ActionType
{
    /**
     * Constant for value 'Adjustment'
     * @return string 'Adjustment'
     */
    const VALUE_ADJUSTMENT = 'Adjustment';
    /**
     * Constant for value 'Used'
     * @return string 'Used'
     */
    const VALUE_USED = 'Used';
    /**
     * Constant for value 'Remaining'
     * @return string 'Remaining'
     */
    const VALUE_REMAINING = 'Remaining';
    /**
     * Constant for value 'Allocation'
     * @return string 'Allocation'
     */
    const VALUE_ALLOCATION = 'Allocation';
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
     * Constant for value 'Add'
     * @return string 'Add'
     */
    const VALUE_ADD = 'Add';
    /**
     * Constant for value 'Replace'
     * @return string 'Replace'
     */
    const VALUE_REPLACE = 'Replace';
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
     * @uses self::VALUE_ADJUSTMENT
     * @uses self::VALUE_USED
     * @uses self::VALUE_REMAINING
     * @uses self::VALUE_ALLOCATION
     * @uses self::VALUE_CREATE
     * @uses self::VALUE_READ
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_DELETE
     * @uses self::VALUE_ADD_UPDATE
     * @uses self::VALUE_CANCEL
     * @uses self::VALUE_ADD
     * @uses self::VALUE_REPLACE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADJUSTMENT,
            self::VALUE_USED,
            self::VALUE_REMAINING,
            self::VALUE_ALLOCATION,
            self::VALUE_CREATE,
            self::VALUE_READ,
            self::VALUE_UPDATE,
            self::VALUE_DELETE,
            self::VALUE_ADD_UPDATE,
            self::VALUE_CANCEL,
            self::VALUE_ADD,
            self::VALUE_REPLACE,
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
