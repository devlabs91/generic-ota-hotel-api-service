<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for Restriction EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Information on the restriction associated with the RoomRate element. | The effective date range for which the restriction applies. | Restrictions pertaining to the availability.
 * - use: optional
 * @subpackage Enumerations
 */
class Restriction
{
    /**
     * Constant for value 'Master'
     * @return string 'Master'
     */
    const VALUE_MASTER = 'Master';
    /**
     * Constant for value 'Arrival'
     * @return string 'Arrival'
     */
    const VALUE_ARRIVAL = 'Arrival';
    /**
     * Constant for value 'Departure'
     * @return string 'Departure'
     */
    const VALUE_DEPARTURE = 'Departure';
    /**
     * Constant for value 'NonGuarantee'
     * @return string 'NonGuarantee'
     */
    const VALUE_NON_GUARANTEE = 'NonGuarantee';
    /**
     * Constant for value 'TravelAgent'
     * @return string 'TravelAgent'
     */
    const VALUE_TRAVEL_AGENT = 'TravelAgent';
    /**
     * The DOW_Restrictions
     * Meta informations extracted from the WSDL
     * - documentation: A collection of day of week restrictions.
     * @var mixed
     */
    public $DOW_Restrictions;
    /**
     * The RestrictionType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RestrictionType;
    /**
     * The Time
     * Meta informations extracted from the WSDL
     * - documentation: Used in conjunction with the RestrictionType and the TimeUnit to define the restriction length.
     * - use: optional
     * @var int
     */
    public $Time;
    /**
     * The TimeUnit
     * Meta informations extracted from the WSDL
     * - documentation: A time unit used to apply this status message to other inventory, and with more granularity than daily. Values: Year, Month, Week, Day, Hour, Minute, Second.
     * - use: optional
     * @var string
     */
    public $TimeUnit;
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
     * @uses self::VALUE_MASTER
     * @uses self::VALUE_ARRIVAL
     * @uses self::VALUE_DEPARTURE
     * @uses self::VALUE_NON_GUARANTEE
     * @uses self::VALUE_TRAVEL_AGENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MASTER,
            self::VALUE_ARRIVAL,
            self::VALUE_DEPARTURE,
            self::VALUE_NON_GUARANTEE,
            self::VALUE_TRAVEL_AGENT,
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
