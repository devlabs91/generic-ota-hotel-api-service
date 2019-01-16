<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for CommissionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Contains details pertaining to commissions. | Indicates the currency to be applied to the amounts located in the child elements. | Indicates whether the Rate is a percentage (P) or a value (V).
 * - use: optional
 * @subpackage Enumerations
 */
class CommissionType
{
    /**
     * Constant for value 'Percentage'
     * @return string 'Percentage'
     */
    const VALUE_PERCENTAGE = 'Percentage';
    /**
     * Constant for value 'Value'
     * @return string 'Value'
     */
    const VALUE_VALUE = 'Value';
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the recipient of the commission.
     * - minOccurs: 0
     * @var mixed
     */
    public $UniqueID;
    /**
     * The CommissionableAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CommissionableAmount
     */
    public $CommissionableAmount;
    /**
     * The PrepaidAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PrepaidAmount
     */
    public $PrepaidAmount;
    /**
     * The FlatCommission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FlatCommission
     */
    public $FlatCommission;
    /**
     * The CommissionPayableAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CommissionPayableAmount
     */
    public $CommissionPayableAmount;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - documentation: Text related to the commission.
     * - minOccurs: 0
     * @var mixed
     */
    public $Comment;
    /**
     * The StatusType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $StatusType;
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - documentation: The percent applied to the commissionable amount to determine the commission payable amount.
     * - use: optional
     * @var string
     */
    public $Percent;
    /**
     * The ReasonCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the reason why a commission is not paid or not paid in full.
     * - use: optional
     * @var string
     */
    public $ReasonCode;
    /**
     * The BillToID
     * Meta informations extracted from the WSDL
     * - documentation: Identifies who should be billed for the commission amount.
     * - use: optional
     * @var string
     */
    public $BillToID;
    /**
     * The Frequency
     * Meta informations extracted from the WSDL
     * - documentation: This is the frequency at which the commission is applied (e.g. per stay, daily). Refer to OpenTravel Code List Charge Type (CHG).
     * - use: optional
     * @var string
     */
    public $Frequency;
    /**
     * The MaxCommissionUnitApplies
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of units for which the commission will be applied. This may be used in conjunction with the frequency attribute.
     * - use: optional
     * @var int
     */
    public $MaxCommissionUnitApplies;
    /**
     * The CapAmount
     * Meta informations extracted from the WSDL
     * - documentation: The highest monetary value that may be paid for the commission.
     * - use: optional
     * @var string
     */
    public $CapAmount;
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
     * @uses self::VALUE_PERCENTAGE
     * @uses self::VALUE_VALUE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PERCENTAGE,
            self::VALUE_VALUE,
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
