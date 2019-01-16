<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImageFormat StructType
 * Meta informations extracted from the WSDL
 * - documentation: A set of images for a given category which may be provided in multiple formats. | Detailed information about an image.
 * @subpackage Structs
 */
class ImageFormat extends ImageItemType
{
    /**
     * The Language
     * Meta informations extracted from the WSDL
     * - documentation: The language in which the image text is provided.
     * - use: optional
     * @var string
     */
    public $Language;
    /**
     * The Format
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the format of an image. Refer to OpenTravel Code List Content Format Code (CFC).
     * - use: optional
     * @var string
     */
    public $Format;
    /**
     * The FileName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the image file.
     * - use: optional
     * @var string
     */
    public $FileName;
    /**
     * The FileSize
     * Meta informations extracted from the WSDL
     * - documentation: The size of the image file.
     * - use: optional
     * @var int
     */
    public $FileSize;
    /**
     * The DimensionCategory
     * Meta informations extracted from the WSDL
     * - documentation: Associates the image size to a given category (e.g., 70x70, 100x100, 480x480, thumbnail). For example, if an image with a dimension of 72x73 is sent, it may be categorized as a 70x70 image.
     * - use: optional
     * @var string
     */
    public $DimensionCategory;
    /**
     * The IsOriginalIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, the image is the original file and format. When false, the image is not the original file and format.
     * - use: optional
     * @var bool
     */
    public $IsOriginalIndicator;
    /**
     * Constructor method for ImageFormat
     * @uses ImageFormat::setLanguage()
     * @uses ImageFormat::setFormat()
     * @uses ImageFormat::setFileName()
     * @uses ImageFormat::setFileSize()
     * @uses ImageFormat::setDimensionCategory()
     * @uses ImageFormat::setIsOriginalIndicator()
     * @param string $language
     * @param string $format
     * @param string $fileName
     * @param int $fileSize
     * @param string $dimensionCategory
     * @param bool $isOriginalIndicator
     */
    public function __construct($language = null, $format = null, $fileName = null, $fileSize = null, $dimensionCategory = null, $isOriginalIndicator = null)
    {
        $this
            ->setLanguage($language)
            ->setFormat($format)
            ->setFileName($fileName)
            ->setFileSize($fileSize)
            ->setDimensionCategory($dimensionCategory)
            ->setIsOriginalIndicator($isOriginalIndicator);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageFormat
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
     * Get Format value
     * @return string|null
     */
    public function getFormat()
    {
        return $this->Format;
    }
    /**
     * Set Format value
     * @param string $format
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageFormat
     */
    public function setFormat($format = null)
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($format)), __LINE__);
        }
        $this->Format = $format;
        return $this;
    }
    /**
     * Get FileName value
     * @return string|null
     */
    public function getFileName()
    {
        return $this->FileName;
    }
    /**
     * Set FileName value
     * @param string $fileName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageFormat
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fileName)), __LINE__);
        }
        $this->FileName = $fileName;
        return $this;
    }
    /**
     * Get FileSize value
     * @return int|null
     */
    public function getFileSize()
    {
        return $this->FileSize;
    }
    /**
     * Set FileSize value
     * @param int $fileSize
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageFormat
     */
    public function setFileSize($fileSize = null)
    {
        // validation for constraint: int
        if (!is_null($fileSize) && !is_numeric($fileSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fileSize)), __LINE__);
        }
        $this->FileSize = $fileSize;
        return $this;
    }
    /**
     * Get DimensionCategory value
     * @return string|null
     */
    public function getDimensionCategory()
    {
        return $this->DimensionCategory;
    }
    /**
     * Set DimensionCategory value
     * @param string $dimensionCategory
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageFormat
     */
    public function setDimensionCategory($dimensionCategory = null)
    {
        // validation for constraint: string
        if (!is_null($dimensionCategory) && !is_string($dimensionCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dimensionCategory)), __LINE__);
        }
        $this->DimensionCategory = $dimensionCategory;
        return $this;
    }
    /**
     * Get IsOriginalIndicator value
     * @return bool|null
     */
    public function getIsOriginalIndicator()
    {
        return $this->IsOriginalIndicator;
    }
    /**
     * Set IsOriginalIndicator value
     * @param bool $isOriginalIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageFormat
     */
    public function setIsOriginalIndicator($isOriginalIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOriginalIndicator) && !is_bool($isOriginalIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOriginalIndicator)), __LINE__);
        }
        $this->IsOriginalIndicator = $isOriginalIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageFormat
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
