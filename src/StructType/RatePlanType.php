<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlanType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Combination of the rate plan core type and rate plan additional information to define the details of the rate plan. | Policies and descriptions that apply to a rate plan. | Information significant to defining a rate plan.
 * - type: OTA_CodeType
 * - use: optional
 * @subpackage Structs
 */
class RatePlanType extends AbstractStructBase
{
    /**
     * The Guarantee
     * Meta informations extracted from the WSDL
     * - documentation: Guarantee information that applies to the rate plan. A maximum of 5 occurances are available for use depending on the context.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Guarantee;
    /**
     * The CancelPenalties
     * Meta informations extracted from the WSDL
     * - documentation: Collection of cancellation penalties.
     * - minOccurs: 0
     * @var mixed
     */
    public $CancelPenalties;
    /**
     * The RatePlanDescription
     * Meta informations extracted from the WSDL
     * - documentation: Describes the rate plan.
     * - minOccurs: 0
     * @var mixed
     */
    public $RatePlanDescription;
    /**
     * The RatePlanInclusions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanInclusions
     */
    public $RatePlanInclusions;
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - documentation: Commission assoiciated with the RatePlan. This can be a percentage or a flat amount.
     * - minOccurs: 0
     * @var mixed
     */
    public $Commission;
    /**
     * The MealsIncluded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded
     */
    public $MealsIncluded;
    /**
     * The RestrictionStatus
     * Meta informations extracted from the WSDL
     * - documentation: Used to indicate whether the rate is on request or available.
     * - minOccurs: 0
     * @var mixed
     */
    public $RestrictionStatus;
    /**
     * The AdditionalDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $AdditionalDetails;
    /**
     * The BookingCode
     * Meta informations extracted from the WSDL
     * - documentation: This is used to indicate the item booked and is primarily used to exchange information with GDSs.
     * - use: optional
     * @var string
     */
    public $BookingCode;
    /**
     * The RatePlanCode
     * Meta informations extracted from the WSDL
     * - documentation: The RatePlanCode assigned by the receiving system for the inventory item in response to a new rate plan notification. (Implementation Notes: This would only be returned when the notification is of type New and the sender is
     * translating RatePlanCode values. On subsequent transactions for this rate plan, the sender would populate the RatePlanCode attribute with this value returned by the receiver.)
     * @var string
     */
    public $RatePlanCode;
    /**
     * The RateIndicator
     * Meta informations extracted from the WSDL
     * - documentation: Information pertaining to the availability of the rate plan.
     * @var string
     */
    public $RateIndicator;
    /**
     * The RatePlanType
     * Meta informations extracted from the WSDL
     * - documentation: An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OTA Code List Rate Plan Type (RPT).
     * @var string
     */
    public $RatePlanType;
    /**
     * The RatePlanID
     * Meta informations extracted from the WSDL
     * - documentation: A text field used to indicate a special ID code that is associated with the rate and is required in the reservation request in order to obtain the rate. Examples are Corporate ID and Promotion Code.
     * @var string
     */
    public $RatePlanID;
    /**
     * Constructor method for RatePlanType
     * @uses RatePlanType::setGuarantee()
     * @uses RatePlanType::setCancelPenalties()
     * @uses RatePlanType::setRatePlanDescription()
     * @uses RatePlanType::setRatePlanInclusions()
     * @uses RatePlanType::setCommission()
     * @uses RatePlanType::setMealsIncluded()
     * @uses RatePlanType::setRestrictionStatus()
     * @uses RatePlanType::setAdditionalDetails()
     * @uses RatePlanType::setBookingCode()
     * @uses RatePlanType::setRatePlanCode()
     * @uses RatePlanType::setRateIndicator()
     * @uses RatePlanType::setRatePlanType()
     * @uses RatePlanType::setRatePlanID()
     * @param mixed[] $guarantee
     * @param mixed $cancelPenalties
     * @param mixed $ratePlanDescription
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanInclusions $ratePlanInclusions
     * @param mixed $commission
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded $mealsIncluded
     * @param mixed $restrictionStatus
     * @param mixed $additionalDetails
     * @param string $bookingCode
     * @param string $ratePlanCode
     * @param string $rateIndicator
     * @param string $ratePlanType
     * @param string $ratePlanID
     */
    public function __construct(array $guarantee = array(), $cancelPenalties = null, $ratePlanDescription = null, \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanInclusions $ratePlanInclusions = null, $commission = null, \Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded $mealsIncluded = null, $restrictionStatus = null, $additionalDetails = null, $bookingCode = null, $ratePlanCode = null, $rateIndicator = null, $ratePlanType = null, $ratePlanID = null)
    {
        $this
            ->setGuarantee($guarantee)
            ->setCancelPenalties($cancelPenalties)
            ->setRatePlanDescription($ratePlanDescription)
            ->setRatePlanInclusions($ratePlanInclusions)
            ->setCommission($commission)
            ->setMealsIncluded($mealsIncluded)
            ->setRestrictionStatus($restrictionStatus)
            ->setAdditionalDetails($additionalDetails)
            ->setBookingCode($bookingCode)
            ->setRatePlanCode($ratePlanCode)
            ->setRateIndicator($rateIndicator)
            ->setRatePlanType($ratePlanType)
            ->setRatePlanID($ratePlanID);
    }
    /**
     * Get Guarantee value
     * @return mixed[]|null
     */
    public function getGuarantee()
    {
        return $this->Guarantee;
    }
    /**
     * Set Guarantee value
     * @throws \InvalidArgumentException
     * @param mixed[] $guarantee
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanType
     */
    public function setGuarantee(array $guarantee = array())
    {
        foreach ($guarantee as $ratePlanTypeGuaranteeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Guarantee property can only contain items of anyType, "%s" given', is_object($ratePlanTypeGuaranteeItem) ? get_class($ratePlanTypeGuaranteeItem) : gettype($ratePlanTypeGuaranteeItem)), __LINE__);
            }
        }
        $this->Guarantee = $guarantee;
        return $this;
    }
    /**
     * Add item to Guarantee value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanType
     */
    public function addToGuarantee($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Guarantee property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Guarantee[] = $item;
        return $this;
    }
    /**
     * Get CancelPenalties value
     * @return mixed|null
     */
    public function getCancelPenalties()
    {
        return $this->CancelPenalties;
    }
    /**
     * Set CancelPenalties value
     * @param mixed $cancelPenalties
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanType
     */
    public function setCancelPenalties($cancelPenalties = null)
    {
        $this->CancelPenalties = $cancelPenalties;
        return $this;
    }
    /**
     * Get RatePlanDescription value
     * @return mixed|null
     */
    public function getRatePlanDescription()
    {
        return $this->RatePlanDescription;
    }
    /**
     * Set RatePlanDescription value
     * @param mixed $ratePlanDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanType
     */
    public function setRatePlanDescription($ratePlanDescription = null)
    {
        $this->RatePlanDescription = $ratePlanDescription;
        return $this;
    }
    /**
     * Get RatePlanInclusions value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanInclusions|null
     */
    public function getRatePlanInclusions()
    {
        return $this->RatePlanInclusions;
    }
    /**
     * Set RatePlanInclusions value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanInclusions $ratePlanInclusions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanType
     */
    public function setRatePlanInclusions(\Devlabs91\GenericOtaHotelApiService\StructType\RatePlanInclusions $ratePlanInclusions = null)
    {
        $this->RatePlanInclusions = $ratePlanInclusions;
        return $this;
    }
    /**
     * Get Commission value
     * @return mixed|null
     */
    public function getCommission()
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param mixed $commission
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanType
     */
    public function setCommission($commission = null)
    {
        $this->Commission = $commission;
        return $this;
    }
    /**
     * Get MealsIncluded value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded|null
     */
    public function getMealsIncluded()
    {
        return $this->MealsIncluded;
    }
    /**
     * Set MealsIncluded value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded $mealsIncluded
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanType
     */
    public function setMealsIncluded(\Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded $mealsIncluded = null)
    {
        $this->MealsIncluded = $mealsIncluded;
        return $this;
    }
    /**
     * Get RestrictionStatus value
     * @return mixed|null
     */
    public function getRestrictionStatus()
    {
        return $this->RestrictionStatus;
    }
    /**
     * Set RestrictionStatus value
     * @param mixed $restrictionStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanType
     */
    public function setRestrictionStatus($restrictionStatus = null)
    {
        $this->RestrictionStatus = $restrictionStatus;
        return $this;
    }
    /**
     * Get AdditionalDetails value
     * @return mixed|null
     */
    public function getAdditionalDetails()
    {
        return $this->AdditionalDetails;
    }
    /**
     * Set AdditionalDetails value
     * @param mixed $additionalDetails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanType
     */
    public function setAdditionalDetails($additionalDetails = null)
    {
        $this->AdditionalDetails = $additionalDetails;
        return $this;
    }
    /**
     * Get BookingCode value
     * @return string|null
     */
    public function getBookingCode()
    {
        return $this->BookingCode;
    }
    /**
     * Set BookingCode value
     * @param string $bookingCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanType
     */
    public function setBookingCode($bookingCode = null)
    {
        // validation for constraint: string
        if (!is_null($bookingCode) && !is_string($bookingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingCode)), __LINE__);
        }
        $this->BookingCode = $bookingCode;
        return $this;
    }
    /**
     * Get RatePlanCode value
     * @return string|null
     */
    public function getRatePlanCode()
    {
        return $this->RatePlanCode;
    }
    /**
     * Set RatePlanCode value
     * @param string $ratePlanCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanType
     */
    public function setRatePlanCode($ratePlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanCode) && !is_string($ratePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanCode)), __LINE__);
        }
        $this->RatePlanCode = $ratePlanCode;
        return $this;
    }
    /**
     * Get RateIndicator value
     * @return string|null
     */
    public function getRateIndicator()
    {
        return $this->RateIndicator;
    }
    /**
     * Set RateIndicator value
     * @param string $rateIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanType
     */
    public function setRateIndicator($rateIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($rateIndicator) && !is_string($rateIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateIndicator)), __LINE__);
        }
        $this->RateIndicator = $rateIndicator;
        return $this;
    }
    /**
     * Get RatePlanType value
     * @return string|null
     */
    public function getRatePlanType()
    {
        return $this->RatePlanType;
    }
    /**
     * Set RatePlanType value
     * @param string $ratePlanType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanType
     */
    public function setRatePlanType($ratePlanType = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanType) && !is_string($ratePlanType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanType)), __LINE__);
        }
        $this->RatePlanType = $ratePlanType;
        return $this;
    }
    /**
     * Get RatePlanID value
     * @return string|null
     */
    public function getRatePlanID()
    {
        return $this->RatePlanID;
    }
    /**
     * Set RatePlanID value
     * @param string $ratePlanID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanType
     */
    public function setRatePlanID($ratePlanID = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanID) && !is_string($ratePlanID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanID)), __LINE__);
        }
        $this->RatePlanID = $ratePlanID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanType
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
