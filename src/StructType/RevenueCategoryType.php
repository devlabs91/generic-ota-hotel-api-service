<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevenueCategoryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The classifications of revenue data associated with the StayInfo report. A RevenueCategory provide a way to classify guest financial stay data and analyze guest spending for a certain category (e.g., food and beverage, room, etc.)
 * @subpackage Structs
 */
class RevenueCategoryType extends AbstractStructBase
{
    /**
     * The SummaryAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SummaryAmount
     */
    public $SummaryAmount;
    /**
     * The RevenueDetails
     * Meta informations extracted from the WSDL
     * - documentation: A collection of revenue details.
     * - minOccurs: 0
     * @var mixed
     */
    public $RevenueDetails;
    /**
     * The RevenueCategoryCode
     * Meta informations extracted from the WSDL
     * - documentation: Describes the type of revenue generated. Refer to OpenTravel Code List Revenue Category Code (RCC).
     * - use: optional
     * @var string
     */
    public $RevenueCategoryCode;
    /**
     * Constructor method for RevenueCategoryType
     * @uses RevenueCategoryType::setSummaryAmount()
     * @uses RevenueCategoryType::setRevenueDetails()
     * @uses RevenueCategoryType::setRevenueCategoryCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SummaryAmount $summaryAmount
     * @param mixed $revenueDetails
     * @param string $revenueCategoryCode
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\SummaryAmount $summaryAmount = null, $revenueDetails = null, $revenueCategoryCode = null)
    {
        $this
            ->setSummaryAmount($summaryAmount)
            ->setRevenueDetails($revenueDetails)
            ->setRevenueCategoryCode($revenueCategoryCode);
    }
    /**
     * Get SummaryAmount value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SummaryAmount|null
     */
    public function getSummaryAmount()
    {
        return $this->SummaryAmount;
    }
    /**
     * Set SummaryAmount value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SummaryAmount $summaryAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategoryType
     */
    public function setSummaryAmount(\Devlabs91\GenericOtaHotelApiService\StructType\SummaryAmount $summaryAmount = null)
    {
        $this->SummaryAmount = $summaryAmount;
        return $this;
    }
    /**
     * Get RevenueDetails value
     * @return mixed|null
     */
    public function getRevenueDetails()
    {
        return $this->RevenueDetails;
    }
    /**
     * Set RevenueDetails value
     * @param mixed $revenueDetails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategoryType
     */
    public function setRevenueDetails($revenueDetails = null)
    {
        $this->RevenueDetails = $revenueDetails;
        return $this;
    }
    /**
     * Get RevenueCategoryCode value
     * @return string|null
     */
    public function getRevenueCategoryCode()
    {
        return $this->RevenueCategoryCode;
    }
    /**
     * Set RevenueCategoryCode value
     * @param string $revenueCategoryCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategoryType
     */
    public function setRevenueCategoryCode($revenueCategoryCode = null)
    {
        // validation for constraint: string
        if (!is_null($revenueCategoryCode) && !is_string($revenueCategoryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($revenueCategoryCode)), __LINE__);
        }
        $this->RevenueCategoryCode = $revenueCategoryCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategoryType
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
