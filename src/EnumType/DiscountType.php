<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for DiscountType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies and provides details about the discount. | Indicates whether the Rate is a percentage (P) or a value (V).
 * @subpackage Enumerations
 */
class DiscountType extends TotalType
{
    /**
     * Constant for value 'P'
     * @return string 'P'
     */
    const VALUE_P = 'P';
    /**
     * Constant for value 'V'
     * @return string 'V'
     */
    const VALUE_V = 'V';
    /**
     * The DiscountReason
     * @var mixed
     */
    public $DiscountReason;
    /**
     * The TaxInclusive
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $TaxInclusive;
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Percent;
    /**
     * The DiscountCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $DiscountCode;
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
     * @uses self::VALUE_P
     * @uses self::VALUE_V
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_P,
            self::VALUE_V,
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
