<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CountCategorySummariesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of CountCategorySummary information sets that report categories of hotel numerical count statistics.
 * @subpackage Structs
 */
class CountCategorySummariesType extends AbstractStructBase
{
    /**
     * The CountCategorySummary
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $CountCategorySummary;
    /**
     * Constructor method for CountCategorySummariesType
     * @uses CountCategorySummariesType::setCountCategorySummary()
     * @param mixed[] $countCategorySummary
     */
    public function __construct(array $countCategorySummary = array())
    {
        $this
            ->setCountCategorySummary($countCategorySummary);
    }
    /**
     * Get CountCategorySummary value
     * @return mixed[]|null
     */
    public function getCountCategorySummary()
    {
        return $this->CountCategorySummary;
    }
    /**
     * Set CountCategorySummary value
     * @throws \InvalidArgumentException
     * @param mixed[] $countCategorySummary
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummariesType
     */
    public function setCountCategorySummary(array $countCategorySummary = array())
    {
        foreach ($countCategorySummary as $countCategorySummariesTypeCountCategorySummaryItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CountCategorySummary property can only contain items of anyType, "%s" given', is_object($countCategorySummariesTypeCountCategorySummaryItem) ? get_class($countCategorySummariesTypeCountCategorySummaryItem) : gettype($countCategorySummariesTypeCountCategorySummaryItem)), __LINE__);
            }
        }
        $this->CountCategorySummary = $countCategorySummary;
        return $this;
    }
    /**
     * Add item to CountCategorySummary value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummariesType
     */
    public function addToCountCategorySummary($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The CountCategorySummary property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummariesType
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
