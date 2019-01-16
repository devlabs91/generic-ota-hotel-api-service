<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountCategorySummaries StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of CountCategorySummary elements. Used if count values reported. | A collection of CountCategorySummaryType elements.
 * @subpackage Structs
 */
class CountCategorySummaries extends AbstractStructBase
{
    /**
     * The CountCategorySummary
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummary[]
     */
    public $CountCategorySummary;
    /**
     * Constructor method for CountCategorySummaries
     * @uses CountCategorySummaries::setCountCategorySummary()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummary[] $countCategorySummary
     */
    public function __construct(array $countCategorySummary = array())
    {
        $this
            ->setCountCategorySummary($countCategorySummary);
    }
    /**
     * Get CountCategorySummary value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummary[]|null
     */
    public function getCountCategorySummary()
    {
        return $this->CountCategorySummary;
    }
    /**
     * Set CountCategorySummary value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummary[] $countCategorySummary
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummaries
     */
    public function setCountCategorySummary(array $countCategorySummary = array())
    {
        foreach ($countCategorySummary as $countCategorySummariesCountCategorySummaryItem) {
            // validation for constraint: itemType
            if (!$countCategorySummariesCountCategorySummaryItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummary) {
                throw new \InvalidArgumentException(sprintf('The CountCategorySummary property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummary, "%s" given', is_object($countCategorySummariesCountCategorySummaryItem) ? get_class($countCategorySummariesCountCategorySummaryItem) : gettype($countCategorySummariesCountCategorySummaryItem)), __LINE__);
            }
        }
        $this->CountCategorySummary = $countCategorySummary;
        return $this;
    }
    /**
     * Add item to CountCategorySummary value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummary $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummaries
     */
    public function addToCountCategorySummary(\Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummary $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummary) {
            throw new \InvalidArgumentException(sprintf('The CountCategorySummary property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummary, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CountCategorySummary[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummaries
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
