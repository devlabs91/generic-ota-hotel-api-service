<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmountType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Base charge and additional charges related to a room that includes such things as additional guest amounts, cancel fees, etc. Also includes Discount percentages, total amount, and the rate description.
 * @subpackage Structs
 */
class AmountType extends AbstractStructBase
{
    /**
     * The Base
     * Meta informations extracted from the WSDL
     * - documentation: The base amount charged for the accommodation or service per unit of time (ex: Nightly, Weekly, etc). If TaxInclusive is set to True, then taxes are included in the base amount. Note that any additional charges should itemized in the
     * other elements.
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
     * - documentation: A collection of Cancellation Policies
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
     * - documentation: Discount percentage and/or Amount, code and textual reason for discount
     * - minOccurs: 0
     * @var mixed
     */
    public $Discount;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - documentation: The total amount charged for this rate including additional occupant amounts and fees. If TaxInclusive is set to True, then taxes are included in the total amount.
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
     * @var string
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
     * Constructor method for AmountType
     * @uses AmountType::setBase()
     * @uses AmountType::setAdditionalGuestAmounts()
     * @uses AmountType::setFees()
     * @uses AmountType::setCancelPolicies()
     * @uses AmountType::setPaymentPolicies()
     * @uses AmountType::setDiscount()
     * @uses AmountType::setTotal()
     * @uses AmountType::setRateDescription()
     * @uses AmountType::setGuaranteedInd()
     * @uses AmountType::setNumberOfUnits()
     * @uses AmountType::setRateTimeUnit()
     * @uses AmountType::setUnitMultiplier()
     * @uses AmountType::setMinGuestApplicable()
     * @uses AmountType::setMaxGuestApplicable()
     * @uses AmountType::setMinLOS()
     * @uses AmountType::setMaxLOS()
     * @uses AmountType::setStayOverDate()
     * @param mixed $base
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmounts $additionalGuestAmounts
     * @param mixed $fees
     * @param mixed $cancelPolicies
     * @param mixed $paymentPolicies
     * @param mixed $discount
     * @param mixed $total
     * @param mixed $rateDescription
     * @param bool $guaranteedInd
     * @param string $numberOfUnits
     * @param string $rateTimeUnit
     * @param int $unitMultiplier
     * @param int $minGuestApplicable
     * @param int $maxGuestApplicable
     * @param int $minLOS
     * @param int $maxLOS
     * @param string $stayOverDate
     */
    public function __construct($base = null, \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalGuestAmounts $additionalGuestAmounts = null, $fees = null, $cancelPolicies = null, $paymentPolicies = null, $discount = null, $total = null, $rateDescription = null, $guaranteedInd = null, $numberOfUnits = null, $rateTimeUnit = null, $unitMultiplier = null, $minGuestApplicable = null, $maxGuestApplicable = null, $minLOS = null, $maxLOS = null, $stayOverDate = null)
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
            ->setGuaranteedInd($guaranteedInd)
            ->setNumberOfUnits($numberOfUnits)
            ->setRateTimeUnit($rateTimeUnit)
            ->setUnitMultiplier($unitMultiplier)
            ->setMinGuestApplicable($minGuestApplicable)
            ->setMaxGuestApplicable($maxGuestApplicable)
            ->setMinLOS($minLOS)
            ->setMaxLOS($maxLOS)
            ->setStayOverDate($stayOverDate);
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
     * @return mixed|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @param mixed $discount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setDiscount($discount = null)
    {
        $this->Discount = $discount;
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
     * @return string|null
     */
    public function getNumberOfUnits()
    {
        return $this->NumberOfUnits;
    }
    /**
     * Set NumberOfUnits value
     * @param string $numberOfUnits
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountType
     */
    public function setNumberOfUnits($numberOfUnits = null)
    {
        // validation for constraint: string
        if (!is_null($numberOfUnits) && !is_string($numberOfUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberOfUnits)), __LINE__);
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
