<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelSearchCriterionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Profile objects or Unique IDs of Profiles.
 * @subpackage Structs
 */
class HotelSearchCriterionType extends ItemSearchCriterionType
{
    /**
     * The HotelAmenity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\HotelAmenity[]
     */
    public $HotelAmenity;
    /**
     * The Award
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Award[]
     */
    public $Award;
    /**
     * Constructor method for HotelSearchCriterionType
     * @uses HotelSearchCriterionType::setHotelAmenity()
     * @uses HotelSearchCriterionType::setAward()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelAmenity[] $hotelAmenity
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Award[] $award
     */
    public function __construct(array $hotelAmenity = array(), array $award = array())
    {
        $this
            ->setHotelAmenity($hotelAmenity)
            ->setAward($award);
    }
    /**
     * Get HotelAmenity value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelAmenity[]|null
     */
    public function getHotelAmenity()
    {
        return $this->HotelAmenity;
    }
    /**
     * Set HotelAmenity value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelAmenity[] $hotelAmenity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType
     */
    public function setHotelAmenity(array $hotelAmenity = array())
    {
        foreach ($hotelAmenity as $hotelSearchCriterionTypeHotelAmenityItem) {
            // validation for constraint: itemType
            if (!$hotelSearchCriterionTypeHotelAmenityItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\HotelAmenity) {
                throw new \InvalidArgumentException(sprintf('The HotelAmenity property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\HotelAmenity, "%s" given', is_object($hotelSearchCriterionTypeHotelAmenityItem) ? get_class($hotelSearchCriterionTypeHotelAmenityItem) : gettype($hotelSearchCriterionTypeHotelAmenityItem)), __LINE__);
            }
        }
        $this->HotelAmenity = $hotelAmenity;
        return $this;
    }
    /**
     * Add item to HotelAmenity value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelAmenity $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType
     */
    public function addToHotelAmenity(\Devlabs91\GenericOtaHotelApiService\StructType\HotelAmenity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\HotelAmenity) {
            throw new \InvalidArgumentException(sprintf('The HotelAmenity property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\HotelAmenity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelAmenity[] = $item;
        return $this;
    }
    /**
     * Get Award value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Award[]|null
     */
    public function getAward()
    {
        return $this->Award;
    }
    /**
     * Set Award value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Award[] $award
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType
     */
    public function setAward(array $award = array())
    {
        foreach ($award as $hotelSearchCriterionTypeAwardItem) {
            // validation for constraint: itemType
            if (!$hotelSearchCriterionTypeAwardItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Award) {
                throw new \InvalidArgumentException(sprintf('The Award property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Award, "%s" given', is_object($hotelSearchCriterionTypeAwardItem) ? get_class($hotelSearchCriterionTypeAwardItem) : gettype($hotelSearchCriterionTypeAwardItem)), __LINE__);
            }
        }
        $this->Award = $award;
        return $this;
    }
    /**
     * Add item to Award value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Award $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType
     */
    public function addToAward(\Devlabs91\GenericOtaHotelApiService\StructType\Award $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Award) {
            throw new \InvalidArgumentException(sprintf('The Award property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Award, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Award[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType
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
