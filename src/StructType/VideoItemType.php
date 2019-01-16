<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VideoItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details for a video of a given category. | Multimedia information for the video item.
 * @subpackage Structs
 */
class VideoItemType extends AbstractStructBase
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
     * - documentation: The unit of measure associated with all the dimensions of the multimedia item. Refer to OpenTravel Code list Unit of Measure (UOM).
     * - use: optional
     * @var string
     */
    public $UnitOfMeasureCode;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - documentation: The width of the video item (unit specified by unit of measure).
     * - use: optional
     * @var int
     */
    public $Width;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - documentation: The height of the video item (unit specified by unit of measure).
     * - use: optional
     * @var int
     */
    public $Height;
    /**
     * The BitRate
     * Meta informations extracted from the WSDL
     * - documentation: The bit rate of the video item.
     * - use: optional
     * @var int
     */
    public $BitRate;
    /**
     * The Length
     * Meta informations extracted from the WSDL
     * - documentation: The length of the video item (unit specified by unit of measure).
     * - use: optional
     * @var int
     */
    public $Length;
    /**
     * Constructor method for VideoItemType
     * @uses VideoItemType::setURL()
     * @uses VideoItemType::setUnitOfMeasureCode()
     * @uses VideoItemType::setWidth()
     * @uses VideoItemType::setHeight()
     * @uses VideoItemType::setBitRate()
     * @uses VideoItemType::setLength()
     * @param string $uRL
     * @param string $unitOfMeasureCode
     * @param int $width
     * @param int $height
     * @param int $bitRate
     * @param int $length
     */
    public function __construct($uRL = null, $unitOfMeasureCode = null, $width = null, $height = null, $bitRate = null, $length = null)
    {
        $this
            ->setURL($uRL)
            ->setUnitOfMeasureCode($unitOfMeasureCode)
            ->setWidth($width)
            ->setHeight($height)
            ->setBitRate($bitRate)
            ->setLength($length);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoItemType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoItemType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoItemType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoItemType
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
     * Get BitRate value
     * @return int|null
     */
    public function getBitRate()
    {
        return $this->BitRate;
    }
    /**
     * Set BitRate value
     * @param int $bitRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoItemType
     */
    public function setBitRate($bitRate = null)
    {
        // validation for constraint: int
        if (!is_null($bitRate) && !is_numeric($bitRate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bitRate)), __LINE__);
        }
        $this->BitRate = $bitRate;
        return $this;
    }
    /**
     * Get Length value
     * @return int|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param int $length
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoItemType
     */
    public function setLength($length = null)
    {
        // validation for constraint: int
        if (!is_null($length) && !is_numeric($length)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($length)), __LINE__);
        }
        $this->Length = $length;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VideoItemType
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
