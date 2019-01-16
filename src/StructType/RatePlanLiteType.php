<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlanLiteType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Summary version of the RoomPlanType, initially created for the Travel Itinerary Message set.
 * @subpackage Structs
 */
class RatePlanLiteType extends AbstractStructBase
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
     * The RatePlanDescription
     * Meta informations extracted from the WSDL
     * - documentation: Describes the rate plan.
     * - minOccurs: 0
     * @var mixed
     */
    public $RatePlanDescription;
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
     * - use: optional
     * @var string
     */
    public $RateIndicator;
    /**
     * The RatePlanType
     * Meta informations extracted from the WSDL
     * - documentation: An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT).
     * - use: optional
     * @var string
     */
    public $RatePlanType;
    /**
     * The RatePlanID
     * Meta informations extracted from the WSDL
     * - documentation: A text field used to indicate a special ID code that is associated with the rate and is required in the reservation request in order to obtain the rate. Examples are Corporate ID and Promotion Code.
     * - use: optional
     * @var string
     */
    public $RatePlanID;
    /**
     * Constructor method for RatePlanLiteType
     * @uses RatePlanLiteType::setGuarantee()
     * @uses RatePlanLiteType::setRatePlanDescription()
     * @uses RatePlanLiteType::setRatePlanCode()
     * @uses RatePlanLiteType::setRateIndicator()
     * @uses RatePlanLiteType::setRatePlanType()
     * @uses RatePlanLiteType::setRatePlanID()
     * @param mixed[] $guarantee
     * @param mixed $ratePlanDescription
     * @param string $ratePlanCode
     * @param string $rateIndicator
     * @param string $ratePlanType
     * @param string $ratePlanID
     */
    public function __construct(array $guarantee = array(), $ratePlanDescription = null, $ratePlanCode = null, $rateIndicator = null, $ratePlanType = null, $ratePlanID = null)
    {
        $this
            ->setGuarantee($guarantee)
            ->setRatePlanDescription($ratePlanDescription)
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanLiteType
     */
    public function setGuarantee(array $guarantee = array())
    {
        foreach ($guarantee as $ratePlanLiteTypeGuaranteeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Guarantee property can only contain items of anyType, "%s" given', is_object($ratePlanLiteTypeGuaranteeItem) ? get_class($ratePlanLiteTypeGuaranteeItem) : gettype($ratePlanLiteTypeGuaranteeItem)), __LINE__);
            }
        }
        $this->Guarantee = $guarantee;
        return $this;
    }
    /**
     * Add item to Guarantee value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanLiteType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanLiteType
     */
    public function setRatePlanDescription($ratePlanDescription = null)
    {
        $this->RatePlanDescription = $ratePlanDescription;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanLiteType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanLiteType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanLiteType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanLiteType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanLiteType
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
