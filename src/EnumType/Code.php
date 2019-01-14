<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for Code EnumType
 * Meta informations extracted from the WSDL
 * - documentation: May be used to give further detail on the code or to remove an obsolete item. | A code identifying the taxable status of an item e.g. E (Exempt), S (Standard) etc..
 * - type: MealPlanCode
 * - union: StringLength1to8 | OTA_CodeType
 * - use: required
 * @subpackage Enumerations
 */
class Code
{
    /**
     * Constant for value 'E'
     * @return string 'E'
     */
    const VALUE_E = 'E';
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'Z'
     * @return string 'Z'
     */
    const VALUE_Z = 'Z';
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - documentation: The minimum charge for this meeting room code. | The minimum charge for this meeting room code.
     * - minOccurs: 0
     * @var mixed
     */
    public $Charge;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: This will allow for text descriptions to be sent with items such as catered breakfast. | This will allow for text descriptions to be sent with items such as catered breakfast.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Description;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Meeting Room Code (MRC). | This is used to define items that may be available for any of the meeting rooms. Refer to OTA Code List Meeting Room Code (MRC).
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The DiscountsAvailableCode
     * Meta informations extracted from the WSDL
     * - documentation: This is used for discounts that apply to meetings (eg. corporate, military). Refer to OTA Code List Discounts Available (DIS).
     * - use: optional
     * @var string
     */
    public $DiscountsAvailableCode;
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
     * @uses self::VALUE_E
     * @uses self::VALUE_S
     * @uses self::VALUE_Z
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_E,
            self::VALUE_S,
            self::VALUE_Z,
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
