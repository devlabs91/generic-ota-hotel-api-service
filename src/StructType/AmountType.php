<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmountType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base charge and additional charges related to a room that includes such things as additional guest amounts, cancel fees, etc. Also includes Discount percentages, total amount, and the rate description. | The effective date range for
 * a charge. The EffectiveDate is used by Dynamic Packaging as the date the service is offered at the specified rate (used in conjunction with RateTimeUnit and UnitMultiplier attributes to denote a rate for a duration.)
 * @subpackage Structs
 */
class AmountType extends AbstractStructBase
{
    /**
     * The Base
     * Meta informations extracted from the WSDL
     * - documentation: The base amount charged for the accommodation or service per unit of time (ex: Nightly, Weekly, etc). If TaxInclusive is set to True, then taxes are included in the base amount. Note that any additional charges should itemized in the
     * other elements.
     * - minOccurs: 0
     * @var mixed
     */
    public $Base;
    /**
     * The AdditionalGuestAmounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmounts
     */
    public $AdditionalGuestAmounts;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Fees.
     * - minOccurs: 0
     * @var mixed
     */
    public $Fees;
    /**
     * The CancelPolicies
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Cancellation Policies.
     * - minOccurs: 0
     * @var mixed
     */
    public $CancelPolicies;
    /**
     * The PaymentPolicies
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Payment Policies.
     * - minOccurs: 0
     * @var mixed
     */
    public $PaymentPolicies;
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Discount[]
     */
    public $Discount;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - documentation: The total amount charged for this rate including additional occupant amounts and fees.
     * - minOccurs: 0
     * @var mixed
     */
    public $Total;
    /**
     * The RateDescription
     * Meta informations extracted from the WSDL
     * - documentation: Description of the rate associated with the various monetary amounts and policies.
     * - minOccurs: 0
     * @var mixed
     */
    public $RateDescription;
    /**
     * The AdditionalCharges
     * Meta informations extracted from the WSDL
     * - documentation: Collection of additional charges.
     * - minOccurs: 0
     * @var mixed
     */
    public $AdditionalCharges;
    /**
     * The GuaranteedInd
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $GuaranteedInd;
    /**
     * The NumberOfUnits
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $NumberOfUnits;
    /**
     * The RateTimeUnit
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the time unit for the rate.
     * - use: optional
     * @var string
     */
    public $RateTimeUnit;
    /**
     * The UnitMultiplier
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the number of rate time units such as "3 Days".
     * - use: optional
     * @var int
     */
    public $UnitMultiplier;
    /**
     * The MinGuestApplicable
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the minimum number of guests at this rate.
     * - use: optional
     * @var int
     */
    public $MinGuestApplicable;
    /**
     * The MaxGuestApplicable
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the maximum number of guests at this rate.
     * - use: optional
     * @var int
     */
    public $MaxGuestApplicable;
    /**
     * The MinLOS
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the minimum length of stay.
     * - use: optional
     * @var int
     */
    public $MinLOS;
    /**
     * The MaxLOS
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the maximum length of stay.
     * - use: optional
     * @var int
     */
    public $MaxLOS;
    /**
     * The StayOverDate
     * Meta informations extracted from the WSDL
     * - documentation: Day of week guest is required to stay over in order to be eligible for this rate.
     * - use: optional
     * @var string
     */
    public $StayOverDate;
    /**
     * The AlternateCurrencyInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates the amounts are provided in an alternate currency. When false, indicates the amounts are provided in the primary currency. This may be used to indicate that the currency provided is different from the requested
     * or stored currency.
     * - use: optional
     * @var bool
     */
    public $AlternateCurrencyInd;
    /**
     * The ChargeType
     * Meta informations extracted from the WSDL
     * - documentation: The type of the amount being charged, e.g. per night. Refer to OpenTravel Code List Charge Type Code (CHG).
     * @var string
     */
    public $ChargeType;
    /**
     * The QuoteID
     * Meta informations extracted from the WSDL
     * - documentation: A reference string used to match a query, with rates, to a given time. This is useful for matching prices within a given quote period.
     * @var string
     */
    public $QuoteID;
    /**
     * Constructor method for AmountType
     * @uses AmountType::setBase()
     * @uses AmountType::setAdditionalGuestAmounts()
     * @uses AmountType::setFees()
     * @uses AmountType::setCancelPolicies()
     * @uses AmountType::setPaymentPolicies()
     * @uses AmountType::setDiscount()
     * @uses AmountType::setTotal()
     * @uses AmountType::setRateDescription()
     * @uses AmountType::setAdditionalCharges()
     * @uses AmountType::setGuaranteedInd()
     * @uses AmountType::setNumberOfUnits()
     * @uses AmountType::setRateTimeUnit()
     * @uses AmountType::setUnitMultiplier()
     * @uses AmountType::setMinGuestApplicable()
     * @uses AmountType::setMaxGuestApplicable()
     * @uses AmountType::setMinLOS()
     * @uses AmountType::setMaxLOS()
     * @uses AmountType::setStayOverDate()
     * @uses AmountType::setAlternateCurrencyInd()
     * @uses AmountType::setChargeType()
     * @uses AmountType::setQuoteID()
     * @param mixed $base
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmounts $additionalGuestAmounts
     * @param mixed $fees
     * @param mixed $cancelPolicies
     * @param mixed $paymentPolicies
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Discount[] $discount
     * @param mixed $total
     * @param mixed $rateDescription
     * @param mixed $additionalCharges
     * @param bool $guaranteedInd
     * @param int $numberOfUnits
     * @param string $rateTimeUnit
     * @param int $unitMultiplier
     * @param int $minGuestApplicable
     * @param int $maxGuestApplicable
     * @param int $minLOS
     * @param int $maxLOS
     * @param string $stayOverDate
     * @param bool $alternateCurrencyInd
     * @param string $chargeType
     * @param string $quoteID
     */
    public function __construct($base = null, \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmounts $additionalGuestAmounts = null, $fees = null, $cancelPolicies = null, $paymentPolicies = null, array $discount = array(), $total = null, $rateDescription = null, $additionalCharges = null, $guaranteedInd = null, $numberOfUnits = null, $rateTimeUnit = null, $unitMultiplier = null, $minGuestApplicable = null, $maxGuestApplicable = null, $minLOS = null, $maxLOS = null, $stayOverDate = null, $alternateCurrencyInd = null, $chargeType = null, $quoteID = null)
    {
        $this
            ->setBase($base)
            ->setAdditionalGuestAmounts($additionalGuestAmounts)
            ->setFees($fees)
            ->setCancelPolicies($cancelPolicies)
            ->setPaymentPolicies($paymentPolicies)
            ->setDiscount($discount)
            ->setTotal($total)
            ->setRateDescription($rateDescription)
            ->setAdditionalCharges($additionalCharges)
            ->setGuaranteedInd($guaranteedInd)
            ->setNumberOfUnits($numberOfUnits)
            ->setRateTimeUnit($rateTimeUnit)
            ->setUnitMultiplier($unitMultiplier)
            ->setMinGuestApplicable($minGuestApplicable)
            ->setMaxGuestApplicable($maxGuestApplicable)
            ->setMinLOS($minLOS)
            ->setMaxLOS($maxLOS)
            ->setStayOverDate($stayOverDate)
            ->setAlternateCurrencyInd($alternateCurrencyInd)
            ->setChargeType($chargeType)
            ->setQuoteID($quoteID);
    }
    /**
     * Get Base value
     * @return mixed|null
     */
    public function getBase()
    {
        return $this->Base;
    }
    /**
     * Set Base value
     * @param mixed $base
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setBase($base = null)
    {
        $this->Base = $base;
        return $this;
    }
    /**
     * Get AdditionalGuestAmounts value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmounts|null
     */
    public function getAdditionalGuestAmounts()
    {
        return $this->AdditionalGuestAmounts;
    }
    /**
     * Set AdditionalGuestAmounts value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmounts $additionalGuestAmounts
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setAdditionalGuestAmounts(\Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmounts $additionalGuestAmounts = null)
    {
        $this->AdditionalGuestAmounts = $additionalGuestAmounts;
        return $this;
    }
    /**
     * Get Fees value
     * @return mixed|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param mixed $fees
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setFees($fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get CancelPolicies value
     * @return mixed|null
     */
    public function getCancelPolicies()
    {
        return $this->CancelPolicies;
    }
    /**
     * Set CancelPolicies value
     * @param mixed $cancelPolicies
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setCancelPolicies($cancelPolicies = null)
    {
        $this->CancelPolicies = $cancelPolicies;
        return $this;
    }
    /**
     * Get PaymentPolicies value
     * @return mixed|null
     */
    public function getPaymentPolicies()
    {
        return $this->PaymentPolicies;
    }
    /**
     * Set PaymentPolicies value
     * @param mixed $paymentPolicies
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setPaymentPolicies($paymentPolicies = null)
    {
        $this->PaymentPolicies = $paymentPolicies;
        return $this;
    }
    /**
     * Get Discount value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Discount[]|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Discount[] $discount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setDiscount(array $discount = array())
    {
        foreach ($discount as $amountTypeDiscountItem) {
            // validation for constraint: itemType
            if (!$amountTypeDiscountItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Discount) {
                throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Discount, "%s" given', is_object($amountTypeDiscountItem) ? get_class($amountTypeDiscountItem) : gettype($amountTypeDiscountItem)), __LINE__);
            }
        }
        $this->Discount = $discount;
        return $this;
    }
    /**
     * Add item to Discount value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Discount $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function addToDiscount(\Devlabs91\GenericOtaHotelApiService\StructType\Discount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Discount) {
            throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Discount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Discount[] = $item;
        return $this;
    }
    /**
     * Get Total value
     * @return mixed|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param mixed $total
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setTotal($total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get RateDescription value
     * @return mixed|null
     */
    public function getRateDescription()
    {
        return $this->RateDescription;
    }
    /**
     * Set RateDescription value
     * @param mixed $rateDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setRateDescription($rateDescription = null)
    {
        $this->RateDescription = $rateDescription;
        return $this;
    }
    /**
     * Get AdditionalCharges value
     * @return mixed|null
     */
    public function getAdditionalCharges()
    {
        return $this->AdditionalCharges;
    }
    /**
     * Set AdditionalCharges value
     * @param mixed $additionalCharges
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setAdditionalCharges($additionalCharges = null)
    {
        $this->AdditionalCharges = $additionalCharges;
        return $this;
    }
    /**
     * Get GuaranteedInd value
     * @return bool|null
     */
    public function getGuaranteedInd()
    {
        return $this->GuaranteedInd;
    }
    /**
     * Set GuaranteedInd value
     * @param bool $guaranteedInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setGuaranteedInd($guaranteedInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($guaranteedInd) && !is_bool($guaranteedInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($guaranteedInd)), __LINE__);
        }
        $this->GuaranteedInd = $guaranteedInd;
        return $this;
    }
    /**
     * Get NumberOfUnits value
     * @return int|null
     */
    public function getNumberOfUnits()
    {
        return $this->NumberOfUnits;
    }
    /**
     * Set NumberOfUnits value
     * @param int $numberOfUnits
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setNumberOfUnits($numberOfUnits = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfUnits) && !is_numeric($numberOfUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfUnits)), __LINE__);
        }
        $this->NumberOfUnits = $numberOfUnits;
        return $this;
    }
    /**
     * Get RateTimeUnit value
     * @return string|null
     */
    public function getRateTimeUnit()
    {
        return $this->RateTimeUnit;
    }
    /**
     * Set RateTimeUnit value
     * @param string $rateTimeUnit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setRateTimeUnit($rateTimeUnit = null)
    {
        // validation for constraint: string
        if (!is_null($rateTimeUnit) && !is_string($rateTimeUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateTimeUnit)), __LINE__);
        }
        $this->RateTimeUnit = $rateTimeUnit;
        return $this;
    }
    /**
     * Get UnitMultiplier value
     * @return int|null
     */
    public function getUnitMultiplier()
    {
        return $this->UnitMultiplier;
    }
    /**
     * Set UnitMultiplier value
     * @param int $unitMultiplier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setUnitMultiplier($unitMultiplier = null)
    {
        // validation for constraint: int
        if (!is_null($unitMultiplier) && !is_numeric($unitMultiplier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($unitMultiplier)), __LINE__);
        }
        $this->UnitMultiplier = $unitMultiplier;
        return $this;
    }
    /**
     * Get MinGuestApplicable value
     * @return int|null
     */
    public function getMinGuestApplicable()
    {
        return $this->MinGuestApplicable;
    }
    /**
     * Set MinGuestApplicable value
     * @param int $minGuestApplicable
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setMinGuestApplicable($minGuestApplicable = null)
    {
        // validation for constraint: int
        if (!is_null($minGuestApplicable) && !is_numeric($minGuestApplicable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minGuestApplicable)), __LINE__);
        }
        $this->MinGuestApplicable = $minGuestApplicable;
        return $this;
    }
    /**
     * Get MaxGuestApplicable value
     * @return int|null
     */
    public function getMaxGuestApplicable()
    {
        return $this->MaxGuestApplicable;
    }
    /**
     * Set MaxGuestApplicable value
     * @param int $maxGuestApplicable
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setMaxGuestApplicable($maxGuestApplicable = null)
    {
        // validation for constraint: int
        if (!is_null($maxGuestApplicable) && !is_numeric($maxGuestApplicable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxGuestApplicable)), __LINE__);
        }
        $this->MaxGuestApplicable = $maxGuestApplicable;
        return $this;
    }
    /**
     * Get MinLOS value
     * @return int|null
     */
    public function getMinLOS()
    {
        return $this->MinLOS;
    }
    /**
     * Set MinLOS value
     * @param int $minLOS
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setMinLOS($minLOS = null)
    {
        // validation for constraint: int
        if (!is_null($minLOS) && !is_numeric($minLOS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minLOS)), __LINE__);
        }
        $this->MinLOS = $minLOS;
        return $this;
    }
    /**
     * Get MaxLOS value
     * @return int|null
     */
    public function getMaxLOS()
    {
        return $this->MaxLOS;
    }
    /**
     * Set MaxLOS value
     * @param int $maxLOS
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setMaxLOS($maxLOS = null)
    {
        // validation for constraint: int
        if (!is_null($maxLOS) && !is_numeric($maxLOS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxLOS)), __LINE__);
        }
        $this->MaxLOS = $maxLOS;
        return $this;
    }
    /**
     * Get StayOverDate value
     * @return string|null
     */
    public function getStayOverDate()
    {
        return $this->StayOverDate;
    }
    /**
     * Set StayOverDate value
     * @param string $stayOverDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setStayOverDate($stayOverDate = null)
    {
        // validation for constraint: string
        if (!is_null($stayOverDate) && !is_string($stayOverDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stayOverDate)), __LINE__);
        }
        $this->StayOverDate = $stayOverDate;
        return $this;
    }
    /**
     * Get AlternateCurrencyInd value
     * @return bool|null
     */
    public function getAlternateCurrencyInd()
    {
        return $this->AlternateCurrencyInd;
    }
    /**
     * Set AlternateCurrencyInd value
     * @param bool $alternateCurrencyInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setAlternateCurrencyInd($alternateCurrencyInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($alternateCurrencyInd) && !is_bool($alternateCurrencyInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($alternateCurrencyInd)), __LINE__);
        }
        $this->AlternateCurrencyInd = $alternateCurrencyInd;
        return $this;
    }
    /**
     * Get ChargeType value
     * @return string|null
     */
    public function getChargeType()
    {
        return $this->ChargeType;
    }
    /**
     * Set ChargeType value
     * @param string $chargeType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setChargeType($chargeType = null)
    {
        // validation for constraint: string
        if (!is_null($chargeType) && !is_string($chargeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeType)), __LINE__);
        }
        $this->ChargeType = $chargeType;
        return $this;
    }
    /**
     * Get QuoteID value
     * @return string|null
     */
    public function getQuoteID()
    {
        return $this->QuoteID;
    }
    /**
     * Set QuoteID value
     * @param string $quoteID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setQuoteID($quoteID = null)
    {
        // validation for constraint: string
        if (!is_null($quoteID) && !is_string($quoteID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($quoteID)), __LINE__);
        }
        $this->QuoteID = $quoteID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
