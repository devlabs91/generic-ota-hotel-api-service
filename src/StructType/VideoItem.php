<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VideoItem StructType
 * Meta informations extracted from the WSDL
 * - documentation: Each video item represents a specific category. | If true, this item is obsolete and should be removed from the receiving system. | Creation and modification information for this video item.
 * @subpackage Structs
 */
class VideoItem extends VideoDescriptionType
{
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - documentation: The language associated with the caption for the video.
     * - use: optional
     * @var string
     */
    public $Language;
    /**
     * The Caption
     * Meta informations extracted from the WSDL
     * - documentation: The caption associated to a specific video category which can be provided in different languages.
     * - use: optional
     * @var string
     */
    public $Caption;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: The version of the video item.
     * - use: optional
     * @var string
     */
    public $Version;
    /**
     * Constructor method for VideoItem
     * @uses VideoItem::setLanguage()
     * @uses VideoItem::setCaption()
     * @uses VideoItem::setVersion()
     * @param string $language
     * @param string $caption
     * @param string $version
     */
    public function __construct($language = null, $caption = null, $version = null)
    {
        $this
            ->setLanguage($language)
            ->setCaption($caption)
            ->setVersion($version);
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @param string $language
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoItem
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($language)), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Get Caption value
     * @return string|null
     */
    public function getCaption()
    {
        return $this->Caption;
    }
    /**
     * Set Caption value
     * @param string $caption
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoItem
     */
    public function setCaption($caption = null)
    {
        // validation for constraint: string
        if (!is_null($caption) && !is_string($caption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($caption)), __LINE__);
        }
        $this->Caption = $caption;
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoItem
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoItem
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
