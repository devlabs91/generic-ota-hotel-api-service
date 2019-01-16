<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for AirTripType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the trip type - one way, return, circle trip, open jaw.
 * @subpackage Enumerations
 */
class AirTripType
{
    /**
     * Constant for value 'OneWay'
     * @return string 'OneWay'
     */
    const VALUE_ONE_WAY = 'OneWay';
    /**
     * Constant for value 'OneWayOnly'
     * @return string 'OneWayOnly'
     */
    const VALUE_ONE_WAY_ONLY = 'OneWayOnly';
    /**
     * Constant for value 'Return'
     * @return string 'Return'
     */
    const VALUE_RETURN = 'Return';
    /**
     * Constant for value 'Circle'
     * @return string 'Circle'
     */
    const VALUE_CIRCLE = 'Circle';
    /**
     * Constant for value 'OpenJaw'
     * @return string 'OpenJaw'
     */
    const VALUE_OPEN_JAW = 'OpenJaw';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'Outbound'
     * @return string 'Outbound'
     */
    const VALUE_OUTBOUND = 'Outbound';
    /**
     * Constant for value 'OutboundSeasonRoundtrip'
     * @return string 'OutboundSeasonRoundtrip'
     */
    const VALUE_OUTBOUND_SEASON_ROUNDTRIP = 'OutboundSeasonRoundtrip';
    /**
     * Constant for value 'Non-directional'
     * @return string 'Non-directional'
     */
    const VALUE_NON_DIRECTIONAL = 'Non-directional';
    /**
     * Constant for value 'Inbound'
     * @return string 'Inbound'
     */
    const VALUE_INBOUND = 'Inbound';
    /**
     * Constant for value 'Roundtrip'
     * @return string 'Roundtrip'
     */
    const VALUE_ROUNDTRIP = 'Roundtrip';
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
     * @uses self::VALUE_ONE_WAY
     * @uses self::VALUE_ONE_WAY_ONLY
     * @uses self::VALUE_RETURN
     * @uses self::VALUE_CIRCLE
     * @uses self::VALUE_OPEN_JAW
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_OUTBOUND
     * @uses self::VALUE_OUTBOUND_SEASON_ROUNDTRIP
     * @uses self::VALUE_NON_DIRECTIONAL
     * @uses self::VALUE_INBOUND
     * @uses self::VALUE_ROUNDTRIP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ONE_WAY,
            self::VALUE_ONE_WAY_ONLY,
            self::VALUE_RETURN,
            self::VALUE_CIRCLE,
            self::VALUE_OPEN_JAW,
            self::VALUE_OTHER,
            self::VALUE_OUTBOUND,
            self::VALUE_OUTBOUND_SEASON_ROUNDTRIP,
            self::VALUE_NON_DIRECTIONAL,
            self::VALUE_INBOUND,
            self::VALUE_ROUNDTRIP,
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
