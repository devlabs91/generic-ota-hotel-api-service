<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultimediaDescriptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes multimedia item(s). | A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
 * @subpackage Structs
 */
class MultimediaDescriptionType extends AbstractStructBase
{
    /**
     * The VideoItems
     * Meta informations extracted from the WSDL
     * - documentation: A collection of video items.
     * - minOccurs: 0
     * @var mixed
     */
    public $VideoItems;
    /**
     * The ImageItems
     * Meta informations extracted from the WSDL
     * - documentation: A collection of image items.
     * - minOccurs: 0
     * @var mixed
     */
    public $ImageItems;
    /**
     * The TextItems
     * Meta informations extracted from the WSDL
     * - documentation: A collection of text items.
     * - minOccurs: 0
     * @var mixed
     */
    public $TextItems;
    /**
     * The InfoCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to designate a particular type of description such as marketing. Refer to OpenTravel Code List Information Type (INF).
     * - use: optional
     * @var string
     */
    public $InfoCode;
    /**
     * The AdditionalDetailCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to designate a particular type of additional information. Refer to OpenTravel Code List Additional Detail Type (ADT).
     * - use: optional
     * @var string
     */
    public $AdditionalDetailCode;
    /**
     * The LastUpdated
     * Meta informations extracted from the WSDL
     * - documentation: The date and time when the multimedia information was last updated.
     * - use: optional
     * @var string
     */
    public $LastUpdated;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: The version of the content, typically in the form of "1" or "2.3."
     * - use: optional
     * @var string
     */
    public $Version;
    /**
     * Constructor method for MultimediaDescriptionType
     * @uses MultimediaDescriptionType::setVideoItems()
     * @uses MultimediaDescriptionType::setImageItems()
     * @uses MultimediaDescriptionType::setTextItems()
     * @uses MultimediaDescriptionType::setInfoCode()
     * @uses MultimediaDescriptionType::setAdditionalDetailCode()
     * @uses MultimediaDescriptionType::setLastUpdated()
     * @uses MultimediaDescriptionType::setVersion()
     * @param mixed $videoItems
     * @param mixed $imageItems
     * @param mixed $textItems
     * @param string $infoCode
     * @param string $additionalDetailCode
     * @param string $lastUpdated
     * @param string $version
     */
    public function __construct($videoItems = null, $imageItems = null, $textItems = null, $infoCode = null, $additionalDetailCode = null, $lastUpdated = null, $version = null)
    {
        $this
            ->setVideoItems($videoItems)
            ->setImageItems($imageItems)
            ->setTextItems($textItems)
            ->setInfoCode($infoCode)
            ->setAdditionalDetailCode($additionalDetailCode)
            ->setLastUpdated($lastUpdated)
            ->setVersion($version);
    }
    /**
     * Get VideoItems value
     * @return mixed|null
     */
    public function getVideoItems()
    {
        return $this->VideoItems;
    }
    /**
     * Set VideoItems value
     * @param mixed $videoItems
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptionType
     */
    public function setVideoItems($videoItems = null)
    {
        $this->VideoItems = $videoItems;
        return $this;
    }
    /**
     * Get ImageItems value
     * @return mixed|null
     */
    public function getImageItems()
    {
        return $this->ImageItems;
    }
    /**
     * Set ImageItems value
     * @param mixed $imageItems
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptionType
     */
    public function setImageItems($imageItems = null)
    {
        $this->ImageItems = $imageItems;
        return $this;
    }
    /**
     * Get TextItems value
     * @return mixed|null
     */
    public function getTextItems()
    {
        return $this->TextItems;
    }
    /**
     * Set TextItems value
     * @param mixed $textItems
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptionType
     */
    public function setTextItems($textItems = null)
    {
        $this->TextItems = $textItems;
        return $this;
    }
    /**
     * Get InfoCode value
     * @return string|null
     */
    public function getInfoCode()
    {
        return $this->InfoCode;
    }
    /**
     * Set InfoCode value
     * @param string $infoCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptionType
     */
    public function setInfoCode($infoCode = null)
    {
        // validation for constraint: string
        if (!is_null($infoCode) && !is_string($infoCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($infoCode)), __LINE__);
        }
        $this->InfoCode = $infoCode;
        return $this;
    }
    /**
     * Get AdditionalDetailCode value
     * @return string|null
     */
    public function getAdditionalDetailCode()
    {
        return $this->AdditionalDetailCode;
    }
    /**
     * Set AdditionalDetailCode value
     * @param string $additionalDetailCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptionType
     */
    public function setAdditionalDetailCode($additionalDetailCode = null)
    {
        // validation for constraint: string
        if (!is_null($additionalDetailCode) && !is_string($additionalDetailCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($additionalDetailCode)), __LINE__);
        }
        $this->AdditionalDetailCode = $additionalDetailCode;
        return $this;
    }
    /**
     * Get LastUpdated value
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptionType
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptionType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaDescriptionType
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
