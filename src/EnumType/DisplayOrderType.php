<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for DisplayOrderType EnumType
 * @subpackage Enumerations
 */
class DisplayOrderType
{
    /**
     * Constant for value 'ByDepartureTime'
     * @return string 'ByDepartureTime'
     */
    const VALUE_BY_DEPARTURE_TIME = 'ByDepartureTime';
    /**
     * Constant for value 'ByArrivalTime'
     * @return string 'ByArrivalTime'
     */
    const VALUE_BY_ARRIVAL_TIME = 'ByArrivalTime';
    /**
     * Constant for value 'ByJourneyTime'
     * @return string 'ByJourneyTime'
     */
    const VALUE_BY_JOURNEY_TIME = 'ByJourneyTime';
    /**
     * Constant for value 'ByPriceHighToLow'
     * @return string 'ByPriceHighToLow'
     */
    const VALUE_BY_PRICE_HIGH_TO_LOW = 'ByPriceHighToLow';
    /**
     * Constant for value 'ByPriceLowToHigh'
     * @return string 'ByPriceLowToHigh'
     */
    const VALUE_BY_PRICE_LOW_TO_HIGH = 'ByPriceLowToHigh';
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
     * @uses self::VALUE_BY_DEPARTURE_TIME
     * @uses self::VALUE_BY_ARRIVAL_TIME
     * @uses self::VALUE_BY_JOURNEY_TIME
     * @uses self::VALUE_BY_PRICE_HIGH_TO_LOW
     * @uses self::VALUE_BY_PRICE_LOW_TO_HIGH
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BY_DEPARTURE_TIME,
            self::VALUE_BY_ARRIVAL_TIME,
            self::VALUE_BY_JOURNEY_TIME,
            self::VALUE_BY_PRICE_HIGH_TO_LOW,
            self::VALUE_BY_PRICE_LOW_TO_HIGH,
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
