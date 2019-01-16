<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for AdditionalRule EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates an additional rule for the reservation (e.g., cancelable, modifiable or refundable). | Provides additional rules for the reservation.
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
     * Constant for value 'NotCancelable'
     * @return string 'NotCancelable'
     */
    const VALUE_NOT_CANCELABLE = 'NotCancelable';
    /**
     * Constant for value 'NotModifiable'
     * @return string 'NotModifiable'
     */
    const VALUE_NOT_MODIFIABLE = 'NotModifiable';
    /**
     * Constant for value 'NotRefundable'
     * @return string 'NotRefundable'
     */
    const VALUE_NOT_REFUNDABLE = 'NotRefundable';
    /**
     * Constant for value 'IsCommissionable'
     * @return string 'IsCommissionable'
     */
    const VALUE_IS_COMMISSIONABLE = 'IsCommissionable';
    /**
     * Constant for value 'NotCommissionable'
     * @return string 'NotCommissionable'
     */
    const VALUE_NOT_COMMISSIONABLE = 'NotCommissionable';
    /**
     * Constant for value 'CertificateRequired'
     * @return string 'CertificateRequired'
     */
    const VALUE_CERTIFICATE_REQUIRED = 'CertificateRequired';
    /**
     * Constant for value 'ID_Required'
     * @return string 'ID_Required'
     */
    const VALUE_ID_REQUIRED = 'ID_Required';
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
     * @uses self::VALUE_NOT_CANCELABLE
     * @uses self::VALUE_NOT_MODIFIABLE
     * @uses self::VALUE_NOT_REFUNDABLE
     * @uses self::VALUE_IS_COMMISSIONABLE
     * @uses self::VALUE_NOT_COMMISSIONABLE
     * @uses self::VALUE_CERTIFICATE_REQUIRED
     * @uses self::VALUE_ID_REQUIRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IS_CANCELABLE,
            self::VALUE_IS_MODIFIABLE,
            self::VALUE_IS_REFUNDABLE,
            self::VALUE_NOT_CANCELABLE,
            self::VALUE_NOT_MODIFIABLE,
            self::VALUE_NOT_REFUNDABLE,
            self::VALUE_IS_COMMISSIONABLE,
            self::VALUE_NOT_COMMISSIONABLE,
            self::VALUE_CERTIFICATE_REQUIRED,
            self::VALUE_ID_REQUIRED,
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
