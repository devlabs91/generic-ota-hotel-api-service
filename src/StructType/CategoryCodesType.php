<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryCodesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to define specific hotel information such as the type, location and architectural style.
 * @subpackage Structs
 */
class CategoryCodesType extends AbstractStructBase
{
    /**
     * The LocationCategory
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\LocationCategory[]
     */
    public $LocationCategory;
    /**
     * The SegmentCategory
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SegmentCategory[]
     */
    public $SegmentCategory;
    /**
     * The HotelCategory
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\HotelCategory[]
     */
    public $HotelCategory;
    /**
     * The ArchitecturalStyle
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ArchitecturalStyle[]
     */
    public $ArchitecturalStyle;
    /**
     * The GuestRoomInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo[]
     */
    public $GuestRoomInfo;
    /**
     * Constructor method for CategoryCodesType
     * @uses CategoryCodesType::setLocationCategory()
     * @uses CategoryCodesType::setSegmentCategory()
     * @uses CategoryCodesType::setHotelCategory()
     * @uses CategoryCodesType::setArchitecturalStyle()
     * @uses CategoryCodesType::setGuestRoomInfo()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LocationCategory[] $locationCategory
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SegmentCategory[] $segmentCategory
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelCategory[] $hotelCategory
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ArchitecturalStyle[] $architecturalStyle
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo[] $guestRoomInfo
     */
    public function __construct(array $locationCategory = array(), array $segmentCategory = array(), array $hotelCategory = array(), array $architecturalStyle = array(), array $guestRoomInfo = array())
    {
        $this
            ->setLocationCategory($locationCategory)
            ->setSegmentCategory($segmentCategory)
            ->setHotelCategory($hotelCategory)
            ->setArchitecturalStyle($architecturalStyle)
            ->setGuestRoomInfo($guestRoomInfo);
    }
    /**
     * Get LocationCategory value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationCategory[]|null
     */
    public function getLocationCategory()
    {
        return $this->LocationCategory;
    }
    /**
     * Set LocationCategory value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LocationCategory[] $locationCategory
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryCodesType
     */
    public function setLocationCategory(array $locationCategory = array())
    {
        foreach ($locationCategory as $categoryCodesTypeLocationCategoryItem) {
            // validation for constraint: itemType
            if (!$categoryCodesTypeLocationCategoryItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\LocationCategory) {
                throw new \InvalidArgumentException(sprintf('The LocationCategory property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\LocationCategory, "%s" given', is_object($categoryCodesTypeLocationCategoryItem) ? get_class($categoryCodesTypeLocationCategoryItem) : gettype($categoryCodesTypeLocationCategoryItem)), __LINE__);
            }
        }
        $this->LocationCategory = $locationCategory;
        return $this;
    }
    /**
     * Add item to LocationCategory value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LocationCategory $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryCodesType
     */
    public function addToLocationCategory(\Devlabs91\GenericOtaHotelApiService\StructType\LocationCategory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\LocationCategory) {
            throw new \InvalidArgumentException(sprintf('The LocationCategory property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\LocationCategory, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LocationCategory[] = $item;
        return $this;
    }
    /**
     * Get SegmentCategory value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SegmentCategory[]|null
     */
    public function getSegmentCategory()
    {
        return $this->SegmentCategory;
    }
    /**
     * Set SegmentCategory value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SegmentCategory[] $segmentCategory
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryCodesType
     */
    public function setSegmentCategory(array $segmentCategory = array())
    {
        foreach ($segmentCategory as $categoryCodesTypeSegmentCategoryItem) {
            // validation for constraint: itemType
            if (!$categoryCodesTypeSegmentCategoryItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SegmentCategory) {
                throw new \InvalidArgumentException(sprintf('The SegmentCategory property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SegmentCategory, "%s" given', is_object($categoryCodesTypeSegmentCategoryItem) ? get_class($categoryCodesTypeSegmentCategoryItem) : gettype($categoryCodesTypeSegmentCategoryItem)), __LINE__);
            }
        }
        $this->SegmentCategory = $segmentCategory;
        return $this;
    }
    /**
     * Add item to SegmentCategory value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SegmentCategory $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryCodesType
     */
    public function addToSegmentCategory(\Devlabs91\GenericOtaHotelApiService\StructType\SegmentCategory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SegmentCategory) {
            throw new \InvalidArgumentException(sprintf('The SegmentCategory property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SegmentCategory, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SegmentCategory[] = $item;
        return $this;
    }
    /**
     * Get HotelCategory value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelCategory[]|null
     */
    public function getHotelCategory()
    {
        return $this->HotelCategory;
    }
    /**
     * Set HotelCategory value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelCategory[] $hotelCategory
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryCodesType
     */
    public function setHotelCategory(array $hotelCategory = array())
    {
        foreach ($hotelCategory as $categoryCodesTypeHotelCategoryItem) {
            // validation for constraint: itemType
            if (!$categoryCodesTypeHotelCategoryItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\HotelCategory) {
                throw new \InvalidArgumentException(sprintf('The HotelCategory property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\HotelCategory, "%s" given', is_object($categoryCodesTypeHotelCategoryItem) ? get_class($categoryCodesTypeHotelCategoryItem) : gettype($categoryCodesTypeHotelCategoryItem)), __LINE__);
            }
        }
        $this->HotelCategory = $hotelCategory;
        return $this;
    }
    /**
     * Add item to HotelCategory value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelCategory $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryCodesType
     */
    public function addToHotelCategory(\Devlabs91\GenericOtaHotelApiService\StructType\HotelCategory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\HotelCategory) {
            throw new \InvalidArgumentException(sprintf('The HotelCategory property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\HotelCategory, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelCategory[] = $item;
        return $this;
    }
    /**
     * Get ArchitecturalStyle value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ArchitecturalStyle[]|null
     */
    public function getArchitecturalStyle()
    {
        return $this->ArchitecturalStyle;
    }
    /**
     * Set ArchitecturalStyle value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ArchitecturalStyle[] $architecturalStyle
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryCodesType
     */
    public function setArchitecturalStyle(array $architecturalStyle = array())
    {
        foreach ($architecturalStyle as $categoryCodesTypeArchitecturalStyleItem) {
            // validation for constraint: itemType
            if (!$categoryCodesTypeArchitecturalStyleItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ArchitecturalStyle) {
                throw new \InvalidArgumentException(sprintf('The ArchitecturalStyle property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ArchitecturalStyle, "%s" given', is_object($categoryCodesTypeArchitecturalStyleItem) ? get_class($categoryCodesTypeArchitecturalStyleItem) : gettype($categoryCodesTypeArchitecturalStyleItem)), __LINE__);
            }
        }
        $this->ArchitecturalStyle = $architecturalStyle;
        return $this;
    }
    /**
     * Add item to ArchitecturalStyle value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ArchitecturalStyle $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryCodesType
     */
    public function addToArchitecturalStyle(\Devlabs91\GenericOtaHotelApiService\StructType\ArchitecturalStyle $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ArchitecturalStyle) {
            throw new \InvalidArgumentException(sprintf('The ArchitecturalStyle property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ArchitecturalStyle, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ArchitecturalStyle[] = $item;
        return $this;
    }
    /**
     * Get GuestRoomInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo[]|null
     */
    public function getGuestRoomInfo()
    {
        return $this->GuestRoomInfo;
    }
    /**
     * Set GuestRoomInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo[] $guestRoomInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryCodesType
     */
    public function setGuestRoomInfo(array $guestRoomInfo = array())
    {
        foreach ($guestRoomInfo as $categoryCodesTypeGuestRoomInfoItem) {
            // validation for constraint: itemType
            if (!$categoryCodesTypeGuestRoomInfoItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo) {
                throw new \InvalidArgumentException(sprintf('The GuestRoomInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo, "%s" given', is_object($categoryCodesTypeGuestRoomInfoItem) ? get_class($categoryCodesTypeGuestRoomInfoItem) : gettype($categoryCodesTypeGuestRoomInfoItem)), __LINE__);
            }
        }
        $this->GuestRoomInfo = $guestRoomInfo;
        return $this;
    }
    /**
     * Add item to GuestRoomInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryCodesType
     */
    public function addToGuestRoomInfo(\Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo) {
            throw new \InvalidArgumentException(sprintf('The GuestRoomInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuestRoomInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CategoryCodesType
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
