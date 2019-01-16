<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MapURL StructType
 * Meta informations extracted from the WSDL
 * - documentation: When requested, a link to a map is returned in the response which indicates the position of the matching hotel(s).
 * @subpackage Structs
 */
class MapURL extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The BottomRightLatitude
     * Meta informations extracted from the WSDL
     * - documentation: The bottom right latitude coordinate.
     * @var float
     */
    public $BottomRightLatitude;
    /**
     * The BottomRightLongitude
     * Meta informations extracted from the WSDL
     * - documentation: The bottom right longitude coordinate.
     * @var float
     */
    public $BottomRightLongitude;
    /**
     * The TopLeftLatitude
     * Meta informations extracted from the WSDL
     * - documentation: The top left latitude coordinate.
     * @var float
     */
    public $TopLeftLatitude;
    /**
     * The TopLeftLongitude
     * Meta informations extracted from the WSDL
     * - documentation: The top left longitude coordinate.
     * @var float
     */
    public $TopLeftLongitude;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Height;
    /**
     * The Width
     * @var string
     */
    public $Width;
    /**
     * The ZoomFactor
     * @var string
     */
    public $ZoomFactor;
    /**
     * Constructor method for MapURL
     * @uses MapURL::set_()
     * @uses MapURL::setBottomRightLatitude()
     * @uses MapURL::setBottomRightLongitude()
     * @uses MapURL::setTopLeftLatitude()
     * @uses MapURL::setTopLeftLongitude()
     * @uses MapURL::setHeight()
     * @uses MapURL::setWidth()
     * @uses MapURL::setZoomFactor()
     * @param string $_
     * @param float $bottomRightLatitude
     * @param float $bottomRightLongitude
     * @param float $topLeftLatitude
     * @param float $topLeftLongitude
     * @param string $height
     * @param string $width
     * @param string $zoomFactor
     */
    public function __construct($_ = null, $bottomRightLatitude = null, $bottomRightLongitude = null, $topLeftLatitude = null, $topLeftLongitude = null, $height = null, $width = null, $zoomFactor = null)
    {
        $this
            ->set_($_)
            ->setBottomRightLatitude($bottomRightLatitude)
            ->setBottomRightLongitude($bottomRightLongitude)
            ->setTopLeftLatitude($topLeftLatitude)
            ->setTopLeftLongitude($topLeftLongitude)
            ->setHeight($height)
            ->setWidth($width)
            ->setZoomFactor($zoomFactor);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MapURL
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get BottomRightLatitude value
     * @return float|null
     */
    public function getBottomRightLatitude()
    {
        return $this->BottomRightLatitude;
    }
    /**
     * Set BottomRightLatitude value
     * @param float $bottomRightLatitude
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MapURL
     */
    public function setBottomRightLatitude($bottomRightLatitude = null)
    {
        $this->BottomRightLatitude = $bottomRightLatitude;
        return $this;
    }
    /**
     * Get BottomRightLongitude value
     * @return float|null
     */
    public function getBottomRightLongitude()
    {
        return $this->BottomRightLongitude;
    }
    /**
     * Set BottomRightLongitude value
     * @param float $bottomRightLongitude
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MapURL
     */
    public function setBottomRightLongitude($bottomRightLongitude = null)
    {
        $this->BottomRightLongitude = $bottomRightLongitude;
        return $this;
    }
    /**
     * Get TopLeftLatitude value
     * @return float|null
     */
    public function getTopLeftLatitude()
    {
        return $this->TopLeftLatitude;
    }
    /**
     * Set TopLeftLatitude value
     * @param float $topLeftLatitude
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MapURL
     */
    public function setTopLeftLatitude($topLeftLatitude = null)
    {
        $this->TopLeftLatitude = $topLeftLatitude;
        return $this;
    }
    /**
     * Get TopLeftLongitude value
     * @return float|null
     */
    public function getTopLeftLongitude()
    {
        return $this->TopLeftLongitude;
    }
    /**
     * Set TopLeftLongitude value
     * @param float $topLeftLongitude
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MapURL
     */
    public function setTopLeftLongitude($topLeftLongitude = null)
    {
        $this->TopLeftLongitude = $topLeftLongitude;
        return $this;
    }
    /**
     * Get Height value
     * @return string|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param string $height
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MapURL
     */
    public function setHeight($height = null)
    {
        // validation for constraint: string
        if (!is_null($height) && !is_string($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($height)), __LINE__);
        }
        $this->Height = $height;
        return $this;
    }
    /**
     * Get Width value
     * @return string|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param string $width
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MapURL
     */
    public function setWidth($width = null)
    {
        // validation for constraint: string
        if (!is_null($width) && !is_string($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($width)), __LINE__);
        }
        $this->Width = $width;
        return $this;
    }
    /**
     * Get ZoomFactor value
     * @return string|null
     */
    public function getZoomFactor()
    {
        return $this->ZoomFactor;
    }
    /**
     * Set ZoomFactor value
     * @param string $zoomFactor
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MapURL
     */
    public function setZoomFactor($zoomFactor = null)
    {
        // validation for constraint: string
        if (!is_null($zoomFactor) && !is_string($zoomFactor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zoomFactor)), __LINE__);
        }
        $this->ZoomFactor = $zoomFactor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MapURL
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
