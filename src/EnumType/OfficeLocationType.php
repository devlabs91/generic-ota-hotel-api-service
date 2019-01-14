<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for OfficeLocationType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates main office, field office, or division of the organization.
 * @subpackage Enumerations
 */
class OfficeLocationType
{
    /**
     * Constant for value 'Main'
     * @return string 'Main'
     */
    const VALUE_MAIN = 'Main';
    /**
     * Constant for value 'Field'
     * @return string 'Field'
     */
    const VALUE_FIELD = 'Field';
    /**
     * Constant for value 'Division'
     * @return string 'Division'
     */
    const VALUE_DIVISION = 'Division';
    /**
     * Constant for value 'Regional'
     * @return string 'Regional'
     */
    const VALUE_REGIONAL = 'Regional';
    /**
     * Constant for value 'Remote'
     * @return string 'Remote'
     */
    const VALUE_REMOTE = 'Remote';
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
     * @uses self::VALUE_MAIN
     * @uses self::VALUE_FIELD
     * @uses self::VALUE_DIVISION
     * @uses self::VALUE_REGIONAL
     * @uses self::VALUE_REMOTE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MAIN,
            self::VALUE_FIELD,
            self::VALUE_DIVISION,
            self::VALUE_REGIONAL,
            self::VALUE_REMOTE,
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
