<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for AmountDeterminationType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Used to indicate if an amount is inclusive or exclusive of other charges, such as taxes, or is cumulative (amounts have been added to each other
 * @subpackage Enumerations
 */
class AmountDeterminationType
{
    /**
     * Constant for value 'Inclusive'
     * @return string 'Inclusive'
     */
    const VALUE_INCLUSIVE = 'Inclusive';
    /**
     * Constant for value 'Exclusive'
     * @return string 'Exclusive'
     */
    const VALUE_EXCLUSIVE = 'Exclusive';
    /**
     * Constant for value 'Cumulative'
     * @return string 'Cumulative'
     */
    const VALUE_CUMULATIVE = 'Cumulative';
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
     * @uses self::VALUE_INCLUSIVE
     * @uses self::VALUE_EXCLUSIVE
     * @uses self::VALUE_CUMULATIVE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INCLUSIVE,
            self::VALUE_EXCLUSIVE,
            self::VALUE_CUMULATIVE,
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
