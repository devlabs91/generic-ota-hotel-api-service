<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for TransactionStatusType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: To specify a status to the transaction, usually in the response message, of the action specifed in the request message.
 * @subpackage Enumerations
 */
class TransactionStatusType
{
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'Modified'
     * @return string 'Modified'
     */
    const VALUE_MODIFIED = 'Modified';
    /**
     * Constant for value 'Committed'
     * @return string 'Committed'
     */
    const VALUE_COMMITTED = 'Committed';
    /**
     * Constant for value 'Ignored'
     * @return string 'Ignored'
     */
    const VALUE_IGNORED = 'Ignored';
    /**
     * Constant for value 'On Hold'
     * @return string 'On Hold'
     */
    const VALUE_ON_HOLD = 'On Hold';
    /**
     * Constant for value 'Unsuccessful'
     * @return string 'Unsuccessful'
     */
    const VALUE_UNSUCCESSFUL = 'Unsuccessful';
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
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_MODIFIED
     * @uses self::VALUE_COMMITTED
     * @uses self::VALUE_IGNORED
     * @uses self::VALUE_ON_HOLD
     * @uses self::VALUE_UNSUCCESSFUL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PENDING,
            self::VALUE_CANCELLED,
            self::VALUE_MODIFIED,
            self::VALUE_COMMITTED,
            self::VALUE_IGNORED,
            self::VALUE_ON_HOLD,
            self::VALUE_UNSUCCESSFUL,
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
