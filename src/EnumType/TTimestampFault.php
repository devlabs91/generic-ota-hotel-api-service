<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for tTimestampFault EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This type defines the fault code value for Timestamp message expiration.
 * @subpackage Enumerations
 */
class TTimestampFault
{
    /**
     * Constant for value 'wsu:MessageExpired'
     * @return string 'wsu:MessageExpired'
     */
    const VALUE_WSU_MESSAGE_EXPIRED = 'wsu:MessageExpired';
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
     * @uses self::VALUE_WSU_MESSAGE_EXPIRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WSU_MESSAGE_EXPIRED,
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
