<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevenueCategorySummaries StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of RevenueCategorySummary elements. Used if revenue values reported.
 * @subpackage Structs
 */
class RevenueCategorySummaries extends AbstractStructBase
{
    /**
     * The RevenueCategorySummary
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummary[]
     */
    public $RevenueCategorySummary;
    /**
     * Constructor method for RevenueCategorySummaries
     * @uses RevenueCategorySummaries::setRevenueCategorySummary()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummary[] $revenueCategorySummary
     */
    public function __construct(array $revenueCategorySummary = array())
    {
        $this
            ->setRevenueCategorySummary($revenueCategorySummary);
    }
    /**
     * Get RevenueCategorySummary value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummary[]|null
     */
    public function getRevenueCategorySummary()
    {
        return $this->RevenueCategorySummary;
    }
    /**
     * Set RevenueCategorySummary value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummary[] $revenueCategorySummary
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummaries
     */
    public function setRevenueCategorySummary(array $revenueCategorySummary = array())
    {
        foreach ($revenueCategorySummary as $revenueCategorySummariesRevenueCategorySummaryItem) {
            // validation for constraint: itemType
            if (!$revenueCategorySummariesRevenueCategorySummaryItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummary) {
                throw new \InvalidArgumentException(sprintf('The RevenueCategorySummary property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummary, "%s" given', is_object($revenueCategorySummariesRevenueCategorySummaryItem) ? get_class($revenueCategorySummariesRevenueCategorySummaryItem) : gettype($revenueCategorySummariesRevenueCategorySummaryItem)), __LINE__);
            }
        }
        $this->RevenueCategorySummary = $revenueCategorySummary;
        return $this;
    }
    /**
     * Add item to RevenueCategorySummary value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummary $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummaries
     */
    public function addToRevenueCategorySummary(\Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummary $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummary) {
            throw new \InvalidArgumentException(sprintf('The RevenueCategorySummary property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummary, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RevenueCategorySummary[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummaries
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
