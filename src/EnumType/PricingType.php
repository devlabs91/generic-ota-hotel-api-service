<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for PricingType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: An enumerated type that defines how a service is priced. Values: Per stay, Per person, Per night, Per person per night, Per use.
 * @subpackage Enumerations
 */
class PricingType
{
    /**
     * Constant for value 'Per stay'
     * @return string 'Per stay'
     */
    const VALUE_PER_STAY = 'Per stay';
    /**
     * Constant for value 'Per person'
     * @return string 'Per person'
     */
    const VALUE_PER_PERSON = 'Per person';
    /**
     * Constant for value 'Per night'
     * @return string 'Per night'
     */
    const VALUE_PER_NIGHT = 'Per night';
    /**
     * Constant for value 'Per person per night'
     * @return string 'Per person per night'
     */
    const VALUE_PER_PERSON_PER_NIGHT = 'Per person per night';
    /**
     * Constant for value 'Per use'
     * @return string 'Per use'
     */
    const VALUE_PER_USE = 'Per use';
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
     * @uses self::VALUE_PER_STAY
     * @uses self::VALUE_PER_PERSON
     * @uses self::VALUE_PER_NIGHT
     * @uses self::VALUE_PER_PERSON_PER_NIGHT
     * @uses self::VALUE_PER_USE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PER_STAY,
            self::VALUE_PER_PERSON,
            self::VALUE_PER_NIGHT,
            self::VALUE_PER_PERSON_PER_NIGHT,
            self::VALUE_PER_USE,
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
