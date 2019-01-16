<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for SpecialRemarkOptionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the type of special remark used.
 * @subpackage Enumerations
 */
class SpecialRemarkOptionType
{
    /**
     * Constant for value 'Itinerary'
     * @return string 'Itinerary'
     */
    const VALUE_ITINERARY = 'Itinerary';
    /**
     * Constant for value 'Invoice'
     * @return string 'Invoice'
     */
    const VALUE_INVOICE = 'Invoice';
    /**
     * Constant for value 'Endorsement'
     * @return string 'Endorsement'
     */
    const VALUE_ENDORSEMENT = 'Endorsement';
    /**
     * Constant for value 'Save'
     * @return string 'Save'
     */
    const VALUE_SAVE = 'Save';
    /**
     * Constant for value 'Confidential'
     * @return string 'Confidential'
     */
    const VALUE_CONFIDENTIAL = 'Confidential';
    /**
     * Constant for value 'Free'
     * @return string 'Free'
     */
    const VALUE_FREE = 'Free';
    /**
     * Constant for value 'GRMS'
     * @return string 'GRMS'
     */
    const VALUE_GRMS = 'GRMS';
    /**
     * Constant for value 'Split'
     * @return string 'Split'
     */
    const VALUE_SPLIT = 'Split';
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
     * @uses self::VALUE_ITINERARY
     * @uses self::VALUE_INVOICE
     * @uses self::VALUE_ENDORSEMENT
     * @uses self::VALUE_SAVE
     * @uses self::VALUE_CONFIDENTIAL
     * @uses self::VALUE_FREE
     * @uses self::VALUE_GRMS
     * @uses self::VALUE_SPLIT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ITINERARY,
            self::VALUE_INVOICE,
            self::VALUE_ENDORSEMENT,
            self::VALUE_SAVE,
            self::VALUE_CONFIDENTIAL,
            self::VALUE_FREE,
            self::VALUE_GRMS,
            self::VALUE_SPLIT,
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
