<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevenueCategorySummaryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A revenue category class that reports the total amount of revenue in a certain category. Categories provide a way to classify hotel financial statistics to show all spending in a specific category (e.g., food and beverage, room,
 * etc.).
 * @subpackage Structs
 */
class RevenueCategorySummaryType extends AbstractStructBase
{
    /**
     * The SummaryAmount
     * @var mixed
     */
    public $SummaryAmount;
    /**
     * The RevenueCategoryCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RevenueCategoryCode;
    /**
     * Constructor method for RevenueCategorySummaryType
     * @uses RevenueCategorySummaryType::setSummaryAmount()
     * @uses RevenueCategorySummaryType::setRevenueCategoryCode()
     * @param mixed $summaryAmount
     * @param string $revenueCategoryCode
     */
    public function __construct($summaryAmount = null, $revenueCategoryCode = null)
    {
        $this
            ->setSummaryAmount($summaryAmount)
            ->setRevenueCategoryCode($revenueCategoryCode);
    }
    /**
     * Get SummaryAmount value
     * @return mixed|null
     */
    public function getSummaryAmount()
    {
        return $this->SummaryAmount;
    }
    /**
     * Set SummaryAmount value
     * @param mixed $summaryAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummaryType
     */
    public function setSummaryAmount($summaryAmount = null)
    {
        $this->SummaryAmount = $summaryAmount;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummaryType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummaryType
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
