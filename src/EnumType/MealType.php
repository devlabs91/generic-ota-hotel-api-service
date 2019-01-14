<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for MealType EnumType
 * @subpackage Enumerations
 */
class MealType
{
    /**
     * Constant for value 'AVML'
     * @return string 'AVML'
     */
    const VALUE_AVML = 'AVML';
    /**
     * Constant for value 'BBML'
     * @return string 'BBML'
     */
    const VALUE_BBML = 'BBML';
    /**
     * Constant for value 'BLML'
     * @return string 'BLML'
     */
    const VALUE_BLML = 'BLML';
    /**
     * Constant for value 'CHML'
     * @return string 'CHML'
     */
    const VALUE_CHML = 'CHML';
    /**
     * Constant for value 'DBML'
     * @return string 'DBML'
     */
    const VALUE_DBML = 'DBML';
    /**
     * Constant for value 'FPML'
     * @return string 'FPML'
     */
    const VALUE_FPML = 'FPML';
    /**
     * Constant for value 'GFML'
     * @return string 'GFML'
     */
    const VALUE_GFML = 'GFML';
    /**
     * Constant for value 'HFML'
     * @return string 'HFML'
     */
    const VALUE_HFML = 'HFML';
    /**
     * Constant for value 'HNML'
     * @return string 'HNML'
     */
    const VALUE_HNML = 'HNML';
    /**
     * Constant for value 'KSML'
     * @return string 'KSML'
     */
    const VALUE_KSML = 'KSML';
    /**
     * Constant for value 'LCML'
     * @return string 'LCML'
     */
    const VALUE_LCML = 'LCML';
    /**
     * Constant for value 'LFML'
     * @return string 'LFML'
     */
    const VALUE_LFML = 'LFML';
    /**
     * Constant for value 'LPML'
     * @return string 'LPML'
     */
    const VALUE_LPML = 'LPML';
    /**
     * Constant for value 'LSML'
     * @return string 'LSML'
     */
    const VALUE_LSML = 'LSML';
    /**
     * Constant for value 'MOML'
     * @return string 'MOML'
     */
    const VALUE_MOML = 'MOML';
    /**
     * Constant for value 'NLML'
     * @return string 'NLML'
     */
    const VALUE_NLML = 'NLML';
    /**
     * Constant for value 'ORML'
     * @return string 'ORML'
     */
    const VALUE_ORML = 'ORML';
    /**
     * Constant for value 'PRML'
     * @return string 'PRML'
     */
    const VALUE_PRML = 'PRML';
    /**
     * Constant for value 'RVML'
     * @return string 'RVML'
     */
    const VALUE_RVML = 'RVML';
    /**
     * Constant for value 'SFML'
     * @return string 'SFML'
     */
    const VALUE_SFML = 'SFML';
    /**
     * Constant for value 'SPML'
     * @return string 'SPML'
     */
    const VALUE_SPML = 'SPML';
    /**
     * Constant for value 'VGML'
     * @return string 'VGML'
     */
    const VALUE_VGML = 'VGML';
    /**
     * Constant for value 'VLML'
     * @return string 'VLML'
     */
    const VALUE_VLML = 'VLML';
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
     * @uses self::VALUE_AVML
     * @uses self::VALUE_BBML
     * @uses self::VALUE_BLML
     * @uses self::VALUE_CHML
     * @uses self::VALUE_DBML
     * @uses self::VALUE_FPML
     * @uses self::VALUE_GFML
     * @uses self::VALUE_HFML
     * @uses self::VALUE_HNML
     * @uses self::VALUE_KSML
     * @uses self::VALUE_LCML
     * @uses self::VALUE_LFML
     * @uses self::VALUE_LPML
     * @uses self::VALUE_LSML
     * @uses self::VALUE_MOML
     * @uses self::VALUE_NLML
     * @uses self::VALUE_ORML
     * @uses self::VALUE_PRML
     * @uses self::VALUE_RVML
     * @uses self::VALUE_SFML
     * @uses self::VALUE_SPML
     * @uses self::VALUE_VGML
     * @uses self::VALUE_VLML
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AVML,
            self::VALUE_BBML,
            self::VALUE_BLML,
            self::VALUE_CHML,
            self::VALUE_DBML,
            self::VALUE_FPML,
            self::VALUE_GFML,
            self::VALUE_HFML,
            self::VALUE_HNML,
            self::VALUE_KSML,
            self::VALUE_LCML,
            self::VALUE_LFML,
            self::VALUE_LPML,
            self::VALUE_LSML,
            self::VALUE_MOML,
            self::VALUE_NLML,
            self::VALUE_ORML,
            self::VALUE_PRML,
            self::VALUE_RVML,
            self::VALUE_SFML,
            self::VALUE_SPML,
            self::VALUE_VGML,
            self::VALUE_VLML,
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
