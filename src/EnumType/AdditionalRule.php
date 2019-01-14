<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for AdditionalRule EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates whether the reservation made using this booking rule is cancelable, modifiable or refundable.
 * @subpackage Enumerations
 */
class AdditionalRule
{
    /**
     * Constant for value 'IsCancelable'
     * @return string 'IsCancelable'
     */
    const VALUE_IS_CANCELABLE = 'IsCancelable';
    /**
     * Constant for value 'IsModifiable'
     * @return string 'IsModifiable'
     */
    const VALUE_IS_MODIFIABLE = 'IsModifiable';
    /**
     * Constant for value 'IsRefundable'
     * @return string 'IsRefundable'
     */
    const VALUE_IS_REFUNDABLE = 'IsRefundable';
    /**
     * The AdditionalRule
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AdditionalRule;
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
     * @uses self::VALUE_IS_CANCELABLE
     * @uses self::VALUE_IS_MODIFIABLE
     * @uses self::VALUE_IS_REFUNDABLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IS_CANCELABLE,
            self::VALUE_IS_MODIFIABLE,
            self::VALUE_IS_REFUNDABLE,
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
