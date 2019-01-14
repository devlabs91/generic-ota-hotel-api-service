<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for PaymentCardCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: This is intended to be used when the above enumeration list does not meet your needs. | Used for an Alpha String, length 2 (for letter codes)
 * - pattern: [A-Z]{1,2}
 * @subpackage Enumerations
 */
class PaymentCardCodeType
{
    /**
     * Constant for value 'AX'
     * @return string 'AX'
     */
    const VALUE_AX = 'AX';
    /**
     * Constant for value 'BC'
     * @return string 'BC'
     */
    const VALUE_BC = 'BC';
    /**
     * Constant for value 'BL'
     * @return string 'BL'
     */
    const VALUE_BL = 'BL';
    /**
     * Constant for value 'CB'
     * @return string 'CB'
     */
    const VALUE_CB = 'CB';
    /**
     * Constant for value 'DN'
     * @return string 'DN'
     */
    const VALUE_DN = 'DN';
    /**
     * Constant for value 'DS'
     * @return string 'DS'
     */
    const VALUE_DS = 'DS';
    /**
     * Constant for value 'EC'
     * @return string 'EC'
     */
    const VALUE_EC = 'EC';
    /**
     * Constant for value 'JC'
     * @return string 'JC'
     */
    const VALUE_JC = 'JC';
    /**
     * Constant for value 'MC'
     * @return string 'MC'
     */
    const VALUE_MC = 'MC';
    /**
     * Constant for value 'TP'
     * @return string 'TP'
     */
    const VALUE_TP = 'TP';
    /**
     * Constant for value 'VI'
     * @return string 'VI'
     */
    const VALUE_VI = 'VI';
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
     * @uses self::VALUE_AX
     * @uses self::VALUE_BC
     * @uses self::VALUE_BL
     * @uses self::VALUE_CB
     * @uses self::VALUE_DN
     * @uses self::VALUE_DS
     * @uses self::VALUE_EC
     * @uses self::VALUE_JC
     * @uses self::VALUE_MC
     * @uses self::VALUE_TP
     * @uses self::VALUE_VI
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AX,
            self::VALUE_BC,
            self::VALUE_BL,
            self::VALUE_CB,
            self::VALUE_DN,
            self::VALUE_DS,
            self::VALUE_EC,
            self::VALUE_JC,
            self::VALUE_MC,
            self::VALUE_TP,
            self::VALUE_VI,
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
