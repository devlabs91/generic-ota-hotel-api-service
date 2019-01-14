<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for SpecialRemarkOptionType EnumType
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
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ITINERARY,
            self::VALUE_INVOICE,
            self::VALUE_ENDORSEMENT,
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
