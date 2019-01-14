<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DimensionRoomType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides details on the size of the room.
 * @subpackage Structs
 */
class DimensionRoomType extends AbstractStructBase
{
    /**
     * The Area
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var float
     */
    public $Area;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var float
     */
    public $Height;
    /**
     * The Length
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var float
     */
    public $Length;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var float
     */
    public $Width;
    /**
     * The Units
     * Meta informations extracted from the WSDL
     * - documentation: This defines the unit in which the dimensions are expressed (e.g. it could be generic such as metric or imperial or specific such as inches, feet, yards, miles, millimeters, centimeters, meters, kilometers- according to usage).
     * - use: optional
     * @var string
     */
    public $Units;
    /**
     * Constructor method for DimensionRoomType
     * @uses DimensionRoomType::setArea()
     * @uses DimensionRoomType::setHeight()
     * @uses DimensionRoomType::setLength()
     * @uses DimensionRoomType::setWidth()
     * @uses DimensionRoomType::setUnits()
     * @param float $area
     * @param float $height
     * @param float $length
     * @param float $width
     * @param string $units
     */
    public function __construct($area = null, $height = null, $length = null, $width = null, $units = null)
    {
        $this
            ->setArea($area)
            ->setHeight($height)
            ->setLength($length)
            ->setWidth($width)
            ->setUnits($units);
    }
    /**
     * Get Area value
     * @return float|null
     */
    public function getArea()
    {
        return $this->Area;
    }
    /**
     * Set Area value
     * @param float $area
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DimensionRoomType
     */
    public function setArea($area = null)
    {
        $this->Area = $area;
        return $this;
    }
    /**
     * Get Height value
     * @return float|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param float $height
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DimensionRoomType
     */
    public function setHeight($height = null)
    {
        $this->Height = $height;
        return $this;
    }
    /**
     * Get Length value
     * @return float|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param float $length
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DimensionRoomType
     */
    public function setLength($length = null)
    {
        $this->Length = $length;
        return $this;
    }
    /**
     * Get Width value
     * @return float|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param float $width
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DimensionRoomType
     */
    public function setWidth($width = null)
    {
        $this->Width = $width;
        return $this;
    }
    /**
     * Get Units value
     * @return string|null
     */
    public function getUnits()
    {
        return $this->Units;
    }
    /**
     * Set Units value
     * @param string $units
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DimensionRoomType
     */
    public function setUnits($units = null)
    {
        // validation for constraint: string
        if (!is_null($units) && !is_string($units)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($units)), __LINE__);
        }
        $this->Units = $units;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DimensionRoomType
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
