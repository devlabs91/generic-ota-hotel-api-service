<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VideoItemsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of video items.
 * @subpackage Structs
 */
class VideoItemsType extends AbstractStructBase
{
    /**
     * The VideoItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VideoItem[]
     */
    public $VideoItem;
    /**
     * Constructor method for VideoItemsType
     * @uses VideoItemsType::setVideoItem()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VideoItem[] $videoItem
     */
    public function __construct(array $videoItem = array())
    {
        $this
            ->setVideoItem($videoItem);
    }
    /**
     * Get VideoItem value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoItem[]|null
     */
    public function getVideoItem()
    {
        return $this->VideoItem;
    }
    /**
     * Set VideoItem value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VideoItem[] $videoItem
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoItemsType
     */
    public function setVideoItem(array $videoItem = array())
    {
        foreach ($videoItem as $videoItemsTypeVideoItemItem) {
            // validation for constraint: itemType
            if (!$videoItemsTypeVideoItemItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\VideoItem) {
                throw new \InvalidArgumentException(sprintf('The VideoItem property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\VideoItem, "%s" given', is_object($videoItemsTypeVideoItemItem) ? get_class($videoItemsTypeVideoItemItem) : gettype($videoItemsTypeVideoItemItem)), __LINE__);
            }
        }
        $this->VideoItem = $videoItem;
        return $this;
    }
    /**
     * Add item to VideoItem value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VideoItem $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoItemsType
     */
    public function addToVideoItem(\Devlabs91\GenericOtaHotelApiService\StructType\VideoItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\VideoItem) {
            throw new \InvalidArgumentException(sprintf('The VideoItem property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\VideoItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VideoItem[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoItemsType
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
