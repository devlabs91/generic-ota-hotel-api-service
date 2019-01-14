<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultimediaObject StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to pass multimedia objects such as an image, and the details associated with them. | May be used to give further detail on the code or to remove an obsolete item.
 * @subpackage Structs
 */
class MultimediaObject extends ParagraphType
{
    /**
     * The ContentCode
     * Meta informations extracted from the WSDL
     * - documentation: A code that defines the category type for the multimedia object, e.g.: Image, Sound Clip, Movie File, Audio Sound, Animated .GIF, etc. at a hotel facility. Refer to OTA Code List Content Code (CNT).
     * - use: required
     * @var string
     */
    public $ContentCode;
    /**
     * The ContentData
     * Meta informations extracted from the WSDL
     * - documentation: Vendor-specific format that contains the content data for the multimedia object.
     * - use: required
     * @var string
     */
    public $ContentData;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation: The version of the multimedia object used by the hotel facility.
     * - use: required
     * @var string
     */
    public $Version;
    /**
     * The ContentTitle
     * Meta informations extracted from the WSDL
     * - documentation: The title for the multimedia object used by the hotel facility.
     * - use: required
     * @var string
     */
    public $ContentTitle;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * The PictureCategoryCode
     * Meta informations extracted from the WSDL
     * - documentation: A code defining the type of picture used by the hotel facility (e.g. Exterior, Lobby, Reception area, RoomTypes, Facilities, Dining areas, Meeting Rooms, Logo). Refer to OTA Code List Picture Category Code (PIC).
     * - use: optional
     * @var string
     */
    public $PictureCategoryCode;
    /**
     * The ContentCaption
     * Meta informations extracted from the WSDL
     * - documentation: The caption to be published with the multimedia file.
     * - use: optional
     * @var string
     */
    public $ContentCaption;
    /**
     * The CopyrightNotice
     * Meta informations extracted from the WSDL
     * - documentation: The information describing the copyright notice for the multimedia object at a hotel facility. If this field is filled in, this copyright notice must be printed with the multimedia object.
     * - use: optional
     * @var string
     */
    public $CopyrightNotice;
    /**
     * Constructor method for MultimediaObject
     * @uses MultimediaObject::setContentCode()
     * @uses MultimediaObject::setContentData()
     * @uses MultimediaObject::setVersion()
     * @uses MultimediaObject::setContentTitle()
     * @uses MultimediaObject::setDescription()
     * @uses MultimediaObject::setPictureCategoryCode()
     * @uses MultimediaObject::setContentCaption()
     * @uses MultimediaObject::setCopyrightNotice()
     * @param string $contentCode
     * @param string $contentData
     * @param string $version
     * @param string $contentTitle
     * @param string $description
     * @param string $pictureCategoryCode
     * @param string $contentCaption
     * @param string $copyrightNotice
     */
    public function __construct($contentCode = null, $contentData = null, $version = null, $contentTitle = null, $description = null, $pictureCategoryCode = null, $contentCaption = null, $copyrightNotice = null)
    {
        $this
            ->setContentCode($contentCode)
            ->setContentData($contentData)
            ->setVersion($version)
            ->setContentTitle($contentTitle)
            ->setDescription($description)
            ->setPictureCategoryCode($pictureCategoryCode)
            ->setContentCaption($contentCaption)
            ->setCopyrightNotice($copyrightNotice);
    }
    /**
     * Get ContentCode value
     * @return string
     */
    public function getContentCode()
    {
        return $this->ContentCode;
    }
    /**
     * Set ContentCode value
     * @param string $contentCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject
     */
    public function setContentCode($contentCode = null)
    {
        // validation for constraint: string
        if (!is_null($contentCode) && !is_string($contentCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contentCode)), __LINE__);
        }
        $this->ContentCode = $contentCode;
        return $this;
    }
    /**
     * Get ContentData value
     * @return string
     */
    public function getContentData()
    {
        return $this->ContentData;
    }
    /**
     * Set ContentData value
     * @param string $contentData
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject
     */
    public function setContentData($contentData = null)
    {
        // validation for constraint: string
        if (!is_null($contentData) && !is_string($contentData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contentData)), __LINE__);
        }
        $this->ContentData = $contentData;
        return $this;
    }
    /**
     * Get Version value
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject
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
     * Get ContentTitle value
     * @return string
     */
    public function getContentTitle()
    {
        return $this->ContentTitle;
    }
    /**
     * Set ContentTitle value
     * @param string $contentTitle
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject
     */
    public function setContentTitle($contentTitle = null)
    {
        // validation for constraint: string
        if (!is_null($contentTitle) && !is_string($contentTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contentTitle)), __LINE__);
        }
        $this->ContentTitle = $contentTitle;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get PictureCategoryCode value
     * @return string|null
     */
    public function getPictureCategoryCode()
    {
        return $this->PictureCategoryCode;
    }
    /**
     * Set PictureCategoryCode value
     * @param string $pictureCategoryCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject
     */
    public function setPictureCategoryCode($pictureCategoryCode = null)
    {
        // validation for constraint: string
        if (!is_null($pictureCategoryCode) && !is_string($pictureCategoryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pictureCategoryCode)), __LINE__);
        }
        $this->PictureCategoryCode = $pictureCategoryCode;
        return $this;
    }
    /**
     * Get ContentCaption value
     * @return string|null
     */
    public function getContentCaption()
    {
        return $this->ContentCaption;
    }
    /**
     * Set ContentCaption value
     * @param string $contentCaption
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject
     */
    public function setContentCaption($contentCaption = null)
    {
        // validation for constraint: string
        if (!is_null($contentCaption) && !is_string($contentCaption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contentCaption)), __LINE__);
        }
        $this->ContentCaption = $contentCaption;
        return $this;
    }
    /**
     * Get CopyrightNotice value
     * @return string|null
     */
    public function getCopyrightNotice()
    {
        return $this->CopyrightNotice;
    }
    /**
     * Set CopyrightNotice value
     * @param string $copyrightNotice
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject
     */
    public function setCopyrightNotice($copyrightNotice = null)
    {
        // validation for constraint: string
        if (!is_null($copyrightNotice) && !is_string($copyrightNotice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($copyrightNotice)), __LINE__);
        }
        $this->CopyrightNotice = $copyrightNotice;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MultimediaObject
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
