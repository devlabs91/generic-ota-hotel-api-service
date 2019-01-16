<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for TicketType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the type of ticket document (e.g. electronic, paper).
 * @subpackage Enumerations
 */
class TicketType
{
    /**
     * Constant for value 'eTicket'
     * @return string 'eTicket'
     */
    const VALUE_E_TICKET = 'eTicket';
    /**
     * Constant for value 'Paper'
     * @return string 'Paper'
     */
    const VALUE_PAPER = 'Paper';
    /**
     * Constant for value 'MCO'
     * @return string 'MCO'
     */
    const VALUE_MCO = 'MCO';
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
     * @uses self::VALUE_E_TICKET
     * @uses self::VALUE_PAPER
     * @uses self::VALUE_MCO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_E_TICKET,
            self::VALUE_PAPER,
            self::VALUE_MCO,
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
