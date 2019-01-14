<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for MealPlanCode EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The code for a meal plan e.g. AB- as brochure, AI- all inclusive, BB- bed and breakfast, FB- full board, HB- Half Board, RO- room only,SC- self catering
 * @subpackage Enumerations
 */
class MealPlanCode
{
    /**
     * Constant for value 'AB'
     * @return string 'AB'
     */
    const VALUE_AB = 'AB';
    /**
     * Constant for value 'AI'
     * @return string 'AI'
     */
    const VALUE_AI = 'AI';
    /**
     * Constant for value 'BB'
     * @return string 'BB'
     */
    const VALUE_BB = 'BB';
    /**
     * Constant for value 'FB'
     * @return string 'FB'
     */
    const VALUE_FB = 'FB';
    /**
     * Constant for value 'HB'
     * @return string 'HB'
     */
    const VALUE_HB = 'HB';
    /**
     * Constant for value 'RO'
     * @return string 'RO'
     */
    const VALUE_RO = 'RO';
    /**
     * Constant for value 'SC'
     * @return string 'SC'
     */
    const VALUE_SC = 'SC';
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
     * @uses self::VALUE_AB
     * @uses self::VALUE_AI
     * @uses self::VALUE_BB
     * @uses self::VALUE_FB
     * @uses self::VALUE_HB
     * @uses self::VALUE_RO
     * @uses self::VALUE_SC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AB,
            self::VALUE_AI,
            self::VALUE_BB,
            self::VALUE_FB,
            self::VALUE_HB,
            self::VALUE_RO,
            self::VALUE_SC,
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
