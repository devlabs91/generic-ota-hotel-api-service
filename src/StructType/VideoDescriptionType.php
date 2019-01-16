<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VideoDescriptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes a video item.
 * @subpackage Structs
 */
class VideoDescriptionType extends AbstractStructBase
{
    /**
     * The VideoFormat
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VideoFormat[]
     */
    public $VideoFormat;
    /**
     * The Category
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the video category. Refer to OpenTravel Code list Picture Category Code (PIC).
     * - use: optional
     * @var string
     */
    public $Category;
    /**
     * Constructor method for VideoDescriptionType
     * @uses VideoDescriptionType::setVideoFormat()
     * @uses VideoDescriptionType::setCategory()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VideoFormat[] $videoFormat
     * @param string $category
     */
    public function __construct(array $videoFormat = array(), $category = null)
    {
        $this
            ->setVideoFormat($videoFormat)
            ->setCategory($category);
    }
    /**
     * Get VideoFormat value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoFormat[]|null
     */
    public function getVideoFormat()
    {
        return $this->VideoFormat;
    }
    /**
     * Set VideoFormat value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VideoFormat[] $videoFormat
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoDescriptionType
     */
    public function setVideoFormat(array $videoFormat = array())
    {
        foreach ($videoFormat as $videoDescriptionTypeVideoFormatItem) {
            // validation for constraint: itemType
            if (!$videoDescriptionTypeVideoFormatItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\VideoFormat) {
                throw new \InvalidArgumentException(sprintf('The VideoFormat property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\VideoFormat, "%s" given', is_object($videoDescriptionTypeVideoFormatItem) ? get_class($videoDescriptionTypeVideoFormatItem) : gettype($videoDescriptionTypeVideoFormatItem)), __LINE__);
            }
        }
        $this->VideoFormat = $videoFormat;
        return $this;
    }
    /**
     * Add item to VideoFormat value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VideoFormat $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoDescriptionType
     */
    public function addToVideoFormat(\Devlabs91\GenericOtaHotelApiService\StructType\VideoFormat $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\VideoFormat) {
            throw new \InvalidArgumentException(sprintf('The VideoFormat property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\VideoFormat, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VideoFormat[] = $item;
        return $this;
    }
    /**
     * Get Category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->Category;
    }
    /**
     * Set Category value
     * @param string $category
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoDescriptionType
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category)), __LINE__);
        }
        $this->Category = $category;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoDescriptionType
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
