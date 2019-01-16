<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for AvailabilityStatusType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the availability status of an item.
 * @subpackage Enumerations
 */
class AvailabilityStatusType
{
    /**
     * Constant for value 'Open'
     * @return string 'Open'
     */
    const VALUE_OPEN = 'Open';
    /**
     * Constant for value 'Close'
     * @return string 'Close'
     */
    const VALUE_CLOSE = 'Close';
    /**
     * Constant for value 'ClosedOnArrival'
     * @return string 'ClosedOnArrival'
     */
    const VALUE_CLOSED_ON_ARRIVAL = 'ClosedOnArrival';
    /**
     * Constant for value 'ClosedOnArrivalOnRequest'
     * @return string 'ClosedOnArrivalOnRequest'
     */
    const VALUE_CLOSED_ON_ARRIVAL_ON_REQUEST = 'ClosedOnArrivalOnRequest';
    /**
     * Constant for value 'OnRequest'
     * @return string 'OnRequest'
     */
    const VALUE_ON_REQUEST = 'OnRequest';
    /**
     * Constant for value 'RemoveCloseOnly'
     * @return string 'RemoveCloseOnly'
     */
    const VALUE_REMOVE_CLOSE_ONLY = 'RemoveCloseOnly';
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
     * @uses self::VALUE_OPEN
     * @uses self::VALUE_CLOSE
     * @uses self::VALUE_CLOSED_ON_ARRIVAL
     * @uses self::VALUE_CLOSED_ON_ARRIVAL_ON_REQUEST
     * @uses self::VALUE_ON_REQUEST
     * @uses self::VALUE_REMOVE_CLOSE_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OPEN,
            self::VALUE_CLOSE,
            self::VALUE_CLOSED_ON_ARRIVAL,
            self::VALUE_CLOSED_ON_ARRIVAL_ON_REQUEST,
            self::VALUE_ON_REQUEST,
            self::VALUE_REMOVE_CLOSE_ONLY,
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
