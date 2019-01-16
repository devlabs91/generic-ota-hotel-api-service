<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for GlobalIndicatorType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the global travel area.
 * @subpackage Enumerations
 */
class GlobalIndicatorType
{
    /**
     * Constant for value 'AP'
     * @return string 'AP'
     */
    const VALUE_AP = 'AP';
    /**
     * Constant for value 'AT'
     * @return string 'AT'
     */
    const VALUE_AT = 'AT';
    /**
     * Constant for value 'CT'
     * @return string 'CT'
     */
    const VALUE_CT = 'CT';
    /**
     * Constant for value 'DO'
     * @return string 'DO'
     */
    const VALUE_DO = 'DO';
    /**
     * Constant for value 'EH'
     * @return string 'EH'
     */
    const VALUE_EH = 'EH';
    /**
     * Constant for value 'FE'
     * @return string 'FE'
     */
    const VALUE_FE = 'FE';
    /**
     * Constant for value 'PA'
     * @return string 'PA'
     */
    const VALUE_PA = 'PA';
    /**
     * Constant for value 'PN'
     * @return string 'PN'
     */
    const VALUE_PN = 'PN';
    /**
     * Constant for value 'PO'
     * @return string 'PO'
     */
    const VALUE_PO = 'PO';
    /**
     * Constant for value 'RU'
     * @return string 'RU'
     */
    const VALUE_RU = 'RU';
    /**
     * Constant for value 'RW'
     * @return string 'RW'
     */
    const VALUE_RW = 'RW';
    /**
     * Constant for value 'SA'
     * @return string 'SA'
     */
    const VALUE_SA = 'SA';
    /**
     * Constant for value 'TS'
     * @return string 'TS'
     */
    const VALUE_TS = 'TS';
    /**
     * Constant for value 'WH'
     * @return string 'WH'
     */
    const VALUE_WH = 'WH';
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
     * @uses self::VALUE_AP
     * @uses self::VALUE_AT
     * @uses self::VALUE_CT
     * @uses self::VALUE_DO
     * @uses self::VALUE_EH
     * @uses self::VALUE_FE
     * @uses self::VALUE_PA
     * @uses self::VALUE_PN
     * @uses self::VALUE_PO
     * @uses self::VALUE_RU
     * @uses self::VALUE_RW
     * @uses self::VALUE_SA
     * @uses self::VALUE_TS
     * @uses self::VALUE_WH
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AP,
            self::VALUE_AT,
            self::VALUE_CT,
            self::VALUE_DO,
            self::VALUE_EH,
            self::VALUE_FE,
            self::VALUE_PA,
            self::VALUE_PN,
            self::VALUE_PO,
            self::VALUE_RU,
            self::VALUE_RW,
            self::VALUE_SA,
            self::VALUE_TS,
            self::VALUE_WH,
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
