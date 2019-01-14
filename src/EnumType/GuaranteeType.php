<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for GuaranteeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: The guarantee information to hold a reservation | GuaranteeType : GuaranteeType An enumerated type defining the guarantee to be applied to this reservation.
 * @subpackage Enumerations
 */
class GuaranteeType
{
    /**
     * Constant for value 'GuaranteeRequired'
     * @return string 'GuaranteeRequired'
     */
    const VALUE_GUARANTEE_REQUIRED = 'GuaranteeRequired';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'CC/DC/Voucher'
     * @return string 'CC/DC/Voucher'
     */
    const VALUE_CC_DC_VOUCHER = 'CC/DC/Voucher';
    /**
     * Constant for value 'Profile'
     * @return string 'Profile'
     */
    const VALUE_PROFILE = 'Profile';
    /**
     * Constant for value 'Deposit'
     * @return string 'Deposit'
     */
    const VALUE_DEPOSIT = 'Deposit';
    /**
     * The GuaranteesAccepted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteesAccepted
     */
    public $GuaranteesAccepted;
    /**
     * The Deadline
     * Meta informations extracted from the WSDL
     * - documentation: Guarantee deadline, absolute or relative
     * - minOccurs: 0
     * @var mixed
     */
    public $Deadline;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Comments;
    /**
     * The GuaranteeDescription
     * Meta informations extracted from the WSDL
     * - documentation: Text description of the Guarantee in a given language.
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var mixed[]
     */
    public $GuaranteeDescription;
    /**
     * The RetributionType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RetributionType;
    /**
     * The GuaranteeCode
     * Meta informations extracted from the WSDL
     * - documentation: Guarantee Code
     * - use: optional
     * @var string
     */
    public $GuaranteeCode;
    /**
     * The GuaranteeType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $GuaranteeType;
    /**
     * The HoldTime
     * Meta informations extracted from the WSDL
     * - documentation: The room will held up until this time without a guarantee.
     * - use: optional
     * @var string
     */
    public $HoldTime;
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
     * @uses self::VALUE_GUARANTEE_REQUIRED
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CC_DC_VOUCHER
     * @uses self::VALUE_PROFILE
     * @uses self::VALUE_DEPOSIT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GUARANTEE_REQUIRED,
            self::VALUE_NONE,
            self::VALUE_CC_DC_VOUCHER,
            self::VALUE_PROFILE,
            self::VALUE_DEPOSIT,
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
