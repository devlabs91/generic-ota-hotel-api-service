<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for TransactionActionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: To specify the type of action requested when more than one function could be handled by the message.
 * @subpackage Enumerations
 */
class TransactionActionType
{
    /**
     * Constant for value 'Book'
     * @return string 'Book'
     */
    const VALUE_BOOK = 'Book';
    /**
     * Constant for value 'Quote'
     * @return string 'Quote'
     */
    const VALUE_QUOTE = 'Quote';
    /**
     * Constant for value 'Hold'
     * @return string 'Hold'
     */
    const VALUE_HOLD = 'Hold';
    /**
     * Constant for value 'Initiate'
     * @return string 'Initiate'
     */
    const VALUE_INITIATE = 'Initiate';
    /**
     * Constant for value 'Ignore'
     * @return string 'Ignore'
     */
    const VALUE_IGNORE = 'Ignore';
    /**
     * Constant for value 'Modify'
     * @return string 'Modify'
     */
    const VALUE_MODIFY = 'Modify';
    /**
     * Constant for value 'Commit'
     * @return string 'Commit'
     */
    const VALUE_COMMIT = 'Commit';
    /**
     * Constant for value 'Cancel'
     * @return string 'Cancel'
     */
    const VALUE_CANCEL = 'Cancel';
    /**
     * Constant for value 'CommitOverrideEdits'
     * @return string 'CommitOverrideEdits'
     */
    const VALUE_COMMIT_OVERRIDE_EDITS = 'CommitOverrideEdits';
    /**
     * Constant for value 'VerifyPrice'
     * @return string 'VerifyPrice'
     */
    const VALUE_VERIFY_PRICE = 'VerifyPrice';
    /**
     * Constant for value 'Ticket'
     * @return string 'Ticket'
     */
    const VALUE_TICKET = 'Ticket';
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
     * @uses self::VALUE_BOOK
     * @uses self::VALUE_QUOTE
     * @uses self::VALUE_HOLD
     * @uses self::VALUE_INITIATE
     * @uses self::VALUE_IGNORE
     * @uses self::VALUE_MODIFY
     * @uses self::VALUE_COMMIT
     * @uses self::VALUE_CANCEL
     * @uses self::VALUE_COMMIT_OVERRIDE_EDITS
     * @uses self::VALUE_VERIFY_PRICE
     * @uses self::VALUE_TICKET
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BOOK,
            self::VALUE_QUOTE,
            self::VALUE_HOLD,
            self::VALUE_INITIATE,
            self::VALUE_IGNORE,
            self::VALUE_MODIFY,
            self::VALUE_COMMIT,
            self::VALUE_CANCEL,
            self::VALUE_COMMIT_OVERRIDE_EDITS,
            self::VALUE_VERIFY_PRICE,
            self::VALUE_TICKET,
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
