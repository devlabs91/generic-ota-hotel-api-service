<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevenueCategoriesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of RevenueCategory classes that detail the categories of revenue data associated with the StayInfo report.
 * @subpackage Structs
 */
class RevenueCategoriesType extends AbstractStructBase
{
    /**
     * The RevenueCategory
     * Meta informations extracted from the WSDL
     * - documentation: The classifications of revenue data associated with the StayInfo report. A RevenueCategory provide a way to classify guest financial stay data and analyze guest spending for a certain category (e.g., food and beverage, room, etc.)
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $RevenueCategory;
    /**
     * Constructor method for RevenueCategoriesType
     * @uses RevenueCategoriesType::setRevenueCategory()
     * @param mixed[] $revenueCategory
     */
    public function __construct(array $revenueCategory = array())
    {
        $this
            ->setRevenueCategory($revenueCategory);
    }
    /**
     * Get RevenueCategory value
     * @return mixed[]|null
     */
    public function getRevenueCategory()
    {
        return $this->RevenueCategory;
    }
    /**
     * Set RevenueCategory value
     * @throws \InvalidArgumentException
     * @param mixed[] $revenueCategory
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategoriesType
     */
    public function setRevenueCategory(array $revenueCategory = array())
    {
        foreach ($revenueCategory as $revenueCategoriesTypeRevenueCategoryItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RevenueCategory property can only contain items of anyType, "%s" given', is_object($revenueCategoriesTypeRevenueCategoryItem) ? get_class($revenueCategoriesTypeRevenueCategoryItem) : gettype($revenueCategoriesTypeRevenueCategoryItem)), __LINE__);
            }
        }
        $this->RevenueCategory = $revenueCategory;
        return $this;
    }
    /**
     * Add item to RevenueCategory value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategoriesType
     */
    public function addToRevenueCategory($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RevenueCategory property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RevenueCategory[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategoriesType
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
