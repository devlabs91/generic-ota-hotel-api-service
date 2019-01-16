<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImageItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details for an image of a given category.
 * @subpackage Structs
 */
class ImageItemType extends AbstractStructBase
{
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - documentation: URL of the multimedia item for a specific format.
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The UnitOfMeasureCode
     * Meta informations extracted from the WSDL
     * - documentation: The unit of measure for the image item. Refer to OpenTravel Code list Unit of Measure (UOM).
     * - use: optional
     * @var string
     */
    public $UnitOfMeasureCode;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - documentation: The width of the image item (unit specified by unit of measure).
     * - use: optional
     * @var int
     */
    public $Width;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - documentation: The height of the image item (unit specified by unit of measure).
     * - use: optional
     * @var int
     */
    public $Height;
    /**
     * Constructor method for ImageItemType
     * @uses ImageItemType::setURL()
     * @uses ImageItemType::setUnitOfMeasureCode()
     * @uses ImageItemType::setWidth()
     * @uses ImageItemType::setHeight()
     * @param string $uRL
     * @param string $unitOfMeasureCode
     * @param int $width
     * @param int $height
     */
    public function __construct($uRL = null, $unitOfMeasureCode = null, $width = null, $height = null)
    {
        $this
            ->setURL($uRL)
            ->setUnitOfMeasureCode($unitOfMeasureCode)
            ->setWidth($width)
            ->setHeight($height);
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageItemType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get UnitOfMeasureCode value
     * @return string|null
     */
    public function getUnitOfMeasureCode()
    {
        return $this->UnitOfMeasureCode;
    }
    /**
     * Set UnitOfMeasureCode value
     * @param string $unitOfMeasureCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageItemType
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode = null)
    {
        // validation for constraint: string
        if (!is_null($unitOfMeasureCode) && !is_string($unitOfMeasureCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitOfMeasureCode)), __LINE__);
        }
        $this->UnitOfMeasureCode = $unitOfMeasureCode;
        return $this;
    }
    /**
     * Get Width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param int $width
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageItemType
     */
    public function setWidth($width = null)
    {
        // validation for constraint: int
        if (!is_null($width) && !is_numeric($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($width)), __LINE__);
        }
        $this->Width = $width;
        return $this;
    }
    /**
     * Get Height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param int $height
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageItemType
     */
    public function setHeight($height = null)
    {
        // validation for constraint: int
        if (!is_null($height) && !is_numeric($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($height)), __LINE__);
        }
        $this->Height = $height;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ImageItemType
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
