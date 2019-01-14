<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RowDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the Row details in a seat map
 * @subpackage Structs
 */
class RowDetailsType extends AbstractStructBase
{
    /**
     * The RowNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the actual row number in the seat map.
     * - use: required
     * @var int
     */
    public $RowNumber;
    /**
     * The AirSeats
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AirSeats
     */
    public $AirSeats;
    /**
     * The AirRowCharacteristics
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AirRowCharacteristics
     */
    public $AirRowCharacteristics;
    /**
     * The MaxNumberOfSeats
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of seats per row.
     * @var string
     */
    public $MaxNumberOfSeats;
    /**
     * The AirBookDesigCode
     * Meta informations extracted from the WSDL
     * - documentation: Allows that a seat may be assigned a class code.
     * - use: optional
     * @var string
     */
    public $AirBookDesigCode;
    /**
     * Constructor method for RowDetailsType
     * @uses RowDetailsType::setRowNumber()
     * @uses RowDetailsType::setAirSeats()
     * @uses RowDetailsType::setAirRowCharacteristics()
     * @uses RowDetailsType::setMaxNumberOfSeats()
     * @uses RowDetailsType::setAirBookDesigCode()
     * @param int $rowNumber
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AirSeats $airSeats
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AirRowCharacteristics $airRowCharacteristics
     * @param string $maxNumberOfSeats
     * @param string $airBookDesigCode
     */
    public function __construct($rowNumber = null, \Devlabs91\GenericOtaHotelApiService\StructType\AirSeats $airSeats = null, \Devlabs91\GenericOtaHotelApiService\StructType\AirRowCharacteristics $airRowCharacteristics = null, $maxNumberOfSeats = null, $airBookDesigCode = null)
    {
        $this
            ->setRowNumber($rowNumber)
            ->setAirSeats($airSeats)
            ->setAirRowCharacteristics($airRowCharacteristics)
            ->setMaxNumberOfSeats($maxNumberOfSeats)
            ->setAirBookDesigCode($airBookDesigCode);
    }
    /**
     * Get RowNumber value
     * @return int
     */
    public function getRowNumber()
    {
        return $this->RowNumber;
    }
    /**
     * Set RowNumber value
     * @param int $rowNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RowDetailsType
     */
    public function setRowNumber($rowNumber = null)
    {
        // validation for constraint: int
        if (!is_null($rowNumber) && !is_numeric($rowNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rowNumber)), __LINE__);
        }
        $this->RowNumber = $rowNumber;
        return $this;
    }
    /**
     * Get AirSeats value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSeats|null
     */
    public function getAirSeats()
    {
        return $this->AirSeats;
    }
    /**
     * Set AirSeats value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AirSeats $airSeats
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RowDetailsType
     */
    public function setAirSeats(\Devlabs91\GenericOtaHotelApiService\StructType\AirSeats $airSeats = null)
    {
        $this->AirSeats = $airSeats;
        return $this;
    }
    /**
     * Get AirRowCharacteristics value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirRowCharacteristics|null
     */
    public function getAirRowCharacteristics()
    {
        return $this->AirRowCharacteristics;
    }
    /**
     * Set AirRowCharacteristics value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AirRowCharacteristics $airRowCharacteristics
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RowDetailsType
     */
    public function setAirRowCharacteristics(\Devlabs91\GenericOtaHotelApiService\StructType\AirRowCharacteristics $airRowCharacteristics = null)
    {
        $this->AirRowCharacteristics = $airRowCharacteristics;
        return $this;
    }
    /**
     * Get MaxNumberOfSeats value
     * @return string|null
     */
    public function getMaxNumberOfSeats()
    {
        return $this->MaxNumberOfSeats;
    }
    /**
     * Set MaxNumberOfSeats value
     * @param string $maxNumberOfSeats
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RowDetailsType
     */
    public function setMaxNumberOfSeats($maxNumberOfSeats = null)
    {
        // validation for constraint: string
        if (!is_null($maxNumberOfSeats) && !is_string($maxNumberOfSeats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxNumberOfSeats)), __LINE__);
        }
        $this->MaxNumberOfSeats = $maxNumberOfSeats;
        return $this;
    }
    /**
     * Get AirBookDesigCode value
     * @return string|null
     */
    public function getAirBookDesigCode()
    {
        return $this->AirBookDesigCode;
    }
    /**
     * Set AirBookDesigCode value
     * @param string $airBookDesigCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RowDetailsType
     */
    public function setAirBookDesigCode($airBookDesigCode = null)
    {
        // validation for constraint: string
        if (!is_null($airBookDesigCode) && !is_string($airBookDesigCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airBookDesigCode)), __LINE__);
        }
        $this->AirBookDesigCode = $airBookDesigCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RowDetailsType
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
