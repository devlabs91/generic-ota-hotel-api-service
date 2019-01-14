<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SelectedCategory StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies a selected cabin category. | Specificies cruise category information. | The fare requested for this category.
 * @subpackage Structs
 */
class SelectedCategory extends AbstractStructBase
{
    /**
     * The CabinAttributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CabinAttributes
     */
    public $CabinAttributes;
    /**
     * The SelectedCabin
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCabin[]
     */
    public $SelectedCabin;
    /**
     * The WaitlistIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, this indicates the selected category is waitlisted.
     * - use: optional
     * @var bool
     */
    public $WaitlistIndicator;
    /**
     * Constructor method for SelectedCategory
     * @uses SelectedCategory::setCabinAttributes()
     * @uses SelectedCategory::setSelectedCabin()
     * @uses SelectedCategory::setWaitlistIndicator()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CabinAttributes $cabinAttributes
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCabin[] $selectedCabin
     * @param bool $waitlistIndicator
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\CabinAttributes $cabinAttributes = null, array $selectedCabin = array(), $waitlistIndicator = null)
    {
        $this
            ->setCabinAttributes($cabinAttributes)
            ->setSelectedCabin($selectedCabin)
            ->setWaitlistIndicator($waitlistIndicator);
    }
    /**
     * Get CabinAttributes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinAttributes|null
     */
    public function getCabinAttributes()
    {
        return $this->CabinAttributes;
    }
    /**
     * Set CabinAttributes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CabinAttributes $cabinAttributes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCategory
     */
    public function setCabinAttributes(\Devlabs91\GenericOtaHotelApiService\StructType\CabinAttributes $cabinAttributes = null)
    {
        $this->CabinAttributes = $cabinAttributes;
        return $this;
    }
    /**
     * Get SelectedCabin value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCabin[]|null
     */
    public function getSelectedCabin()
    {
        return $this->SelectedCabin;
    }
    /**
     * Set SelectedCabin value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCabin[] $selectedCabin
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCategory
     */
    public function setSelectedCabin(array $selectedCabin = array())
    {
        foreach ($selectedCabin as $selectedCategorySelectedCabinItem) {
            // validation for constraint: itemType
            if (!$selectedCategorySelectedCabinItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCabin) {
                throw new \InvalidArgumentException(sprintf('The SelectedCabin property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCabin, "%s" given', is_object($selectedCategorySelectedCabinItem) ? get_class($selectedCategorySelectedCabinItem) : gettype($selectedCategorySelectedCabinItem)), __LINE__);
            }
        }
        $this->SelectedCabin = $selectedCabin;
        return $this;
    }
    /**
     * Add item to SelectedCabin value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCabin $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCategory
     */
    public function addToSelectedCabin(\Devlabs91\GenericOtaHotelApiService\StructType\SelectedCabin $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCabin) {
            throw new \InvalidArgumentException(sprintf('The SelectedCabin property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCabin, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SelectedCabin[] = $item;
        return $this;
    }
    /**
     * Get WaitlistIndicator value
     * @return bool|null
     */
    public function getWaitlistIndicator()
    {
        return $this->WaitlistIndicator;
    }
    /**
     * Set WaitlistIndicator value
     * @param bool $waitlistIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCategory
     */
    public function setWaitlistIndicator($waitlistIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($waitlistIndicator) && !is_bool($waitlistIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($waitlistIndicator)), __LINE__);
        }
        $this->WaitlistIndicator = $waitlistIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SelectedCategory
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
