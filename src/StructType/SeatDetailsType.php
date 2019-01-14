<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the seat attributes.
 * @subpackage Structs
 */
class SeatDetailsType extends AbstractStructBase
{
    /**
     * The SeatNumber
     * Meta informations extracted from the WSDL
     * - documentation: Actual seat number within a particular row, typically A, B etc.
     * - use: required
     * @var string
     */
    public $SeatNumber;
    /**
     * The SeatCharacteristics
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int[]
     */
    public $SeatCharacteristics;
    /**
     * The SeatAvailability
     * Meta informations extracted from the WSDL
     * - documentation: Availability status of the particular seat. Refer to OTA Code List Seat Availability (SAV).
     * - use: optional
     * @var string
     */
    public $SeatAvailability;
    /**
     * The AirBookDesigCode
     * Meta informations extracted from the WSDL
     * - documentation: Allows that a seat may be assigned a class code.
     * - use: optional
     * @var string
     */
    public $AirBookDesigCode;
    /**
     * Constructor method for SeatDetailsType
     * @uses SeatDetailsType::setSeatNumber()
     * @uses SeatDetailsType::setSeatCharacteristics()
     * @uses SeatDetailsType::setSeatAvailability()
     * @uses SeatDetailsType::setAirBookDesigCode()
     * @param string $seatNumber
     * @param int[] $seatCharacteristics
     * @param string $seatAvailability
     * @param string $airBookDesigCode
     */
    public function __construct($seatNumber = null, array $seatCharacteristics = array(), $seatAvailability = null, $airBookDesigCode = null)
    {
        $this
            ->setSeatNumber($seatNumber)
            ->setSeatCharacteristics($seatCharacteristics)
            ->setSeatAvailability($seatAvailability)
            ->setAirBookDesigCode($airBookDesigCode);
    }
    /**
     * Get SeatNumber value
     * @return string
     */
    public function getSeatNumber()
    {
        return $this->SeatNumber;
    }
    /**
     * Set SeatNumber value
     * @param string $seatNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatDetailsType
     */
    public function setSeatNumber($seatNumber = null)
    {
        // validation for constraint: string
        if (!is_null($seatNumber) && !is_string($seatNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatNumber)), __LINE__);
        }
        $this->SeatNumber = $seatNumber;
        return $this;
    }
    /**
     * Get SeatCharacteristics value
     * @return int[]
     */
    public function getSeatCharacteristics()
    {
        return $this->SeatCharacteristics;
    }
    /**
     * Set SeatCharacteristics value
     * @throws \InvalidArgumentException
     * @param int[] $seatCharacteristics
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatDetailsType
     */
    public function setSeatCharacteristics(array $seatCharacteristics = array())
    {
        foreach ($seatCharacteristics as $seatDetailsTypeSeatCharacteristicsItem) {
            // validation for constraint: itemType
            if (!is_numeric($seatDetailsTypeSeatCharacteristicsItem)) {
                throw new \InvalidArgumentException(sprintf('The SeatCharacteristics property can only contain items of integer, "%s" given', is_object($seatDetailsTypeSeatCharacteristicsItem) ? get_class($seatDetailsTypeSeatCharacteristicsItem) : gettype($seatDetailsTypeSeatCharacteristicsItem)), __LINE__);
            }
        }
        $this->SeatCharacteristics = $seatCharacteristics;
        return $this;
    }
    /**
     * Add item to SeatCharacteristics value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatDetailsType
     */
    public function addToSeatCharacteristics($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The SeatCharacteristics property can only contain items of integer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatCharacteristics[] = $item;
        return $this;
    }
    /**
     * Get SeatAvailability value
     * @return string|null
     */
    public function getSeatAvailability()
    {
        return $this->SeatAvailability;
    }
    /**
     * Set SeatAvailability value
     * @param string $seatAvailability
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatDetailsType
     */
    public function setSeatAvailability($seatAvailability = null)
    {
        // validation for constraint: string
        if (!is_null($seatAvailability) && !is_string($seatAvailability)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($seatAvailability)), __LINE__);
        }
        $this->SeatAvailability = $seatAvailability;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatDetailsType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatDetailsType
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
