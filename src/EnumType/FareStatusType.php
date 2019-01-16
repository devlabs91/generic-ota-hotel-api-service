<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for FareStatusType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies whether the fare was constructed, published, created, etc.
 * @subpackage Enumerations
 */
class FareStatusType
{
    /**
     * Constant for value 'constructed'
     * @return string 'constructed'
     */
    const VALUE_CONSTRUCTED = 'constructed';
    /**
     * Constant for value 'published'
     * @return string 'published'
     */
    const VALUE_PUBLISHED = 'published';
    /**
     * Constant for value 'created'
     * @return string 'created'
     */
    const VALUE_CREATED = 'created';
    /**
     * Constant for value 'fareByRule'
     * @return string 'fareByRule'
     */
    const VALUE_FARE_BY_RULE = 'fareByRule';
    /**
     * Constant for value 'fareByRulePrivate'
     * @return string 'fareByRulePrivate'
     */
    const VALUE_FARE_BY_RULE_PRIVATE = 'fareByRulePrivate';
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
     * @uses self::VALUE_CONSTRUCTED
     * @uses self::VALUE_PUBLISHED
     * @uses self::VALUE_CREATED
     * @uses self::VALUE_FARE_BY_RULE
     * @uses self::VALUE_FARE_BY_RULE_PRIVATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CONSTRUCTED,
            self::VALUE_PUBLISHED,
            self::VALUE_CREATED,
            self::VALUE_FARE_BY_RULE,
            self::VALUE_FARE_BY_RULE_PRIVATE,
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
