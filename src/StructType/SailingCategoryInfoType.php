<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SailingCategoryInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides category information for the specified sailing.
 * @subpackage Structs
 */
class SailingCategoryInfoType extends SailingInfoType
{
    /**
     * The SelectedCategory
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCategory[]
     */
    public $SelectedCategory;
    /**
     * Constructor method for SailingCategoryInfoType
     * @uses SailingCategoryInfoType::setSelectedCategory()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCategory[] $selectedCategory
     */
    public function __construct(array $selectedCategory = array())
    {
        $this
            ->setSelectedCategory($selectedCategory);
    }
    /**
     * Get SelectedCategory value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCategory[]|null
     */
    public function getSelectedCategory()
    {
        return $this->SelectedCategory;
    }
    /**
     * Set SelectedCategory value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCategory[] $selectedCategory
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingCategoryInfoType
     */
    public function setSelectedCategory(array $selectedCategory = array())
    {
        foreach ($selectedCategory as $sailingCategoryInfoTypeSelectedCategoryItem) {
            // validation for constraint: itemType
            if (!$sailingCategoryInfoTypeSelectedCategoryItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCategory) {
                throw new \InvalidArgumentException(sprintf('The SelectedCategory property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCategory, "%s" given', is_object($sailingCategoryInfoTypeSelectedCategoryItem) ? get_class($sailingCategoryInfoTypeSelectedCategoryItem) : gettype($sailingCategoryInfoTypeSelectedCategoryItem)), __LINE__);
            }
        }
        $this->SelectedCategory = $selectedCategory;
        return $this;
    }
    /**
     * Add item to SelectedCategory value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCategory $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingCategoryInfoType
     */
    public function addToSelectedCategory(\Devlabs91\GenericOtaHotelApiService\StructType\SelectedCategory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCategory) {
            throw new \InvalidArgumentException(sprintf('The SelectedCategory property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCategory, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SelectedCategory[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SailingCategoryInfoType
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
