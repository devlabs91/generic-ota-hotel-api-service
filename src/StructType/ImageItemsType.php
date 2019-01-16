<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImageItemsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of image items.
 * @subpackage Structs
 */
class ImageItemsType extends AbstractStructBase
{
    /**
     * The ImageItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ImageItem[]
     */
    public $ImageItem;
    /**
     * Constructor method for ImageItemsType
     * @uses ImageItemsType::setImageItem()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ImageItem[] $imageItem
     */
    public function __construct(array $imageItem = array())
    {
        $this
            ->setImageItem($imageItem);
    }
    /**
     * Get ImageItem value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageItem[]|null
     */
    public function getImageItem()
    {
        return $this->ImageItem;
    }
    /**
     * Set ImageItem value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ImageItem[] $imageItem
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageItemsType
     */
    public function setImageItem(array $imageItem = array())
    {
        foreach ($imageItem as $imageItemsTypeImageItemItem) {
            // validation for constraint: itemType
            if (!$imageItemsTypeImageItemItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ImageItem) {
                throw new \InvalidArgumentException(sprintf('The ImageItem property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ImageItem, "%s" given', is_object($imageItemsTypeImageItemItem) ? get_class($imageItemsTypeImageItemItem) : gettype($imageItemsTypeImageItemItem)), __LINE__);
            }
        }
        $this->ImageItem = $imageItem;
        return $this;
    }
    /**
     * Add item to ImageItem value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ImageItem $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageItemsType
     */
    public function addToImageItem(\Devlabs91\GenericOtaHotelApiService\StructType\ImageItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ImageItem) {
            throw new \InvalidArgumentException(sprintf('The ImageItem property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ImageItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ImageItem[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageItemsType
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
