<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for DestinationLevelType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the geopolitical level of a destination (e.g., Country, Resort).
 * @subpackage Enumerations
 */
class DestinationLevelType
{
    /**
     * Constant for value 'Continent'
     * @return string 'Continent'
     */
    const VALUE_CONTINENT = 'Continent';
    /**
     * Constant for value 'Country'
     * @return string 'Country'
     */
    const VALUE_COUNTRY = 'Country';
    /**
     * Constant for value 'State'
     * @return string 'State'
     */
    const VALUE_STATE = 'State';
    /**
     * Constant for value 'Area'
     * @return string 'Area'
     */
    const VALUE_AREA = 'Area';
    /**
     * Constant for value 'SubArea'
     * @return string 'SubArea'
     */
    const VALUE_SUB_AREA = 'SubArea';
    /**
     * Constant for value 'Resort'
     * @return string 'Resort'
     */
    const VALUE_RESORT = 'Resort';
    /**
     * Constant for value 'District'
     * @return string 'District'
     */
    const VALUE_DISTRICT = 'District';
    /**
     * Constant for value 'Region'
     * @return string 'Region'
     */
    const VALUE_REGION = 'Region';
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
     * @uses self::VALUE_CONTINENT
     * @uses self::VALUE_COUNTRY
     * @uses self::VALUE_STATE
     * @uses self::VALUE_AREA
     * @uses self::VALUE_SUB_AREA
     * @uses self::VALUE_RESORT
     * @uses self::VALUE_DISTRICT
     * @uses self::VALUE_REGION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONTINENT,
            self::VALUE_COUNTRY,
            self::VALUE_STATE,
            self::VALUE_AREA,
            self::VALUE_SUB_AREA,
            self::VALUE_RESORT,
            self::VALUE_DISTRICT,
            self::VALUE_REGION,
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
