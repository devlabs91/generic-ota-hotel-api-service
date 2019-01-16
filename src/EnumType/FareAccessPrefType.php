<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for FareAccessPrefType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Fare calculation type (e.g. PointToPoint, Through, Joint, Private.)
 * @subpackage Enumerations
 */
class FareAccessPrefType
{
    /**
     * Constant for value 'PointToPoint'
     * @return string 'PointToPoint'
     */
    const VALUE_POINT_TO_POINT = 'PointToPoint';
    /**
     * Constant for value 'Through'
     * @return string 'Through'
     */
    const VALUE_THROUGH = 'Through';
    /**
     * Constant for value 'Joint'
     * @return string 'Joint'
     */
    const VALUE_JOINT = 'Joint';
    /**
     * Constant for value 'Private'
     * @return string 'Private'
     */
    const VALUE_PRIVATE = 'Private';
    /**
     * Constant for value 'Negotiated'
     * @return string 'Negotiated'
     */
    const VALUE_NEGOTIATED = 'Negotiated';
    /**
     * Constant for value 'Net'
     * @return string 'Net'
     */
    const VALUE_NET = 'Net';
    /**
     * Constant for value 'Historical'
     * @return string 'Historical'
     */
    const VALUE_HISTORICAL = 'Historical';
    /**
     * Constant for value 'SecurateAir'
     * @return string 'SecurateAir'
     */
    const VALUE_SECURATE_AIR = 'SecurateAir';
    /**
     * Constant for value 'Moneysaver'
     * @return string 'Moneysaver'
     */
    const VALUE_MONEYSAVER = 'Moneysaver';
    /**
     * Constant for value 'MoneysaverRoundtrip'
     * @return string 'MoneysaverRoundtrip'
     */
    const VALUE_MONEYSAVER_ROUNDTRIP = 'MoneysaverRoundtrip';
    /**
     * Constant for value 'MoneysaverNoOneWay'
     * @return string 'MoneysaverNoOneWay'
     */
    const VALUE_MONEYSAVER_NO_ONE_WAY = 'MoneysaverNoOneWay';
    /**
     * Constant for value 'MoneysaverOneWayOnly'
     * @return string 'MoneysaverOneWayOnly'
     */
    const VALUE_MONEYSAVER_ONE_WAY_ONLY = 'MoneysaverOneWayOnly';
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
     * @uses self::VALUE_POINT_TO_POINT
     * @uses self::VALUE_THROUGH
     * @uses self::VALUE_JOINT
     * @uses self::VALUE_PRIVATE
     * @uses self::VALUE_NEGOTIATED
     * @uses self::VALUE_NET
     * @uses self::VALUE_HISTORICAL
     * @uses self::VALUE_SECURATE_AIR
     * @uses self::VALUE_MONEYSAVER
     * @uses self::VALUE_MONEYSAVER_ROUNDTRIP
     * @uses self::VALUE_MONEYSAVER_NO_ONE_WAY
     * @uses self::VALUE_MONEYSAVER_ONE_WAY_ONLY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_POINT_TO_POINT,
            self::VALUE_THROUGH,
            self::VALUE_JOINT,
            self::VALUE_PRIVATE,
            self::VALUE_NEGOTIATED,
            self::VALUE_NET,
            self::VALUE_HISTORICAL,
            self::VALUE_SECURATE_AIR,
            self::VALUE_MONEYSAVER,
            self::VALUE_MONEYSAVER_ROUNDTRIP,
            self::VALUE_MONEYSAVER_NO_ONE_WAY,
            self::VALUE_MONEYSAVER_ONE_WAY_ONLY,
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
