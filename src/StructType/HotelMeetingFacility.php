<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelMeetingFacility StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to search for hotels based on meeting facility requirements.
 * @subpackage Structs
 */
class HotelMeetingFacility extends AbstractStructBase
{
    /**
     * The MeetingRoomCount
     * Meta informations extracted from the WSDL
     * - documentation: The total number of unique meeting rooms provided at the hotel facility. For example, if the hotel has a grand ballroom that breaks into Salon A, B, and C -the total number of unique meeting rooms is three.
     * - use: optional
     * @var int
     */
    public $MeetingRoomCount;
    /**
     * The LargestSeatingCapacity
     * Meta informations extracted from the WSDL
     * - documentation: The largest seating capacity available in the largest meeting room - generally this is for theatre-style room setup.
     * - use: optional
     * @var int
     */
    public $LargestSeatingCapacity;
    /**
     * The LargestRoomSpace
     * Meta informations extracted from the WSDL
     * - documentation: The amount of room space for the largest unique meeting room at the hotel facility.
     * - use: optional
     * @var int
     */
    public $LargestRoomSpace;
    /**
     * The UnitOfMeasureCode
     * Meta informations extracted from the WSDL
     * - documentation: The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     * - use: optional
     * @var string
     */
    public $UnitOfMeasureCode;
    /**
     * Constructor method for HotelMeetingFacility
     * @uses HotelMeetingFacility::setMeetingRoomCount()
     * @uses HotelMeetingFacility::setLargestSeatingCapacity()
     * @uses HotelMeetingFacility::setLargestRoomSpace()
     * @uses HotelMeetingFacility::setUnitOfMeasureCode()
     * @param int $meetingRoomCount
     * @param int $largestSeatingCapacity
     * @param int $largestRoomSpace
     * @param string $unitOfMeasureCode
     */
    public function __construct($meetingRoomCount = null, $largestSeatingCapacity = null, $largestRoomSpace = null, $unitOfMeasureCode = null)
    {
        $this
            ->setMeetingRoomCount($meetingRoomCount)
            ->setLargestSeatingCapacity($largestSeatingCapacity)
            ->setLargestRoomSpace($largestRoomSpace)
            ->setUnitOfMeasureCode($unitOfMeasureCode);
    }
    /**
     * Get MeetingRoomCount value
     * @return int|null
     */
    public function getMeetingRoomCount()
    {
        return $this->MeetingRoomCount;
    }
    /**
     * Set MeetingRoomCount value
     * @param int $meetingRoomCount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelMeetingFacility
     */
    public function setMeetingRoomCount($meetingRoomCount = null)
    {
        // validation for constraint: int
        if (!is_null($meetingRoomCount) && !is_numeric($meetingRoomCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($meetingRoomCount)), __LINE__);
        }
        $this->MeetingRoomCount = $meetingRoomCount;
        return $this;
    }
    /**
     * Get LargestSeatingCapacity value
     * @return int|null
     */
    public function getLargestSeatingCapacity()
    {
        return $this->LargestSeatingCapacity;
    }
    /**
     * Set LargestSeatingCapacity value
     * @param int $largestSeatingCapacity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelMeetingFacility
     */
    public function setLargestSeatingCapacity($largestSeatingCapacity = null)
    {
        // validation for constraint: int
        if (!is_null($largestSeatingCapacity) && !is_numeric($largestSeatingCapacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($largestSeatingCapacity)), __LINE__);
        }
        $this->LargestSeatingCapacity = $largestSeatingCapacity;
        return $this;
    }
    /**
     * Get LargestRoomSpace value
     * @return int|null
     */
    public function getLargestRoomSpace()
    {
        return $this->LargestRoomSpace;
    }
    /**
     * Set LargestRoomSpace value
     * @param int $largestRoomSpace
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelMeetingFacility
     */
    public function setLargestRoomSpace($largestRoomSpace = null)
    {
        // validation for constraint: int
        if (!is_null($largestRoomSpace) && !is_numeric($largestRoomSpace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($largestRoomSpace)), __LINE__);
        }
        $this->LargestRoomSpace = $largestRoomSpace;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelMeetingFacility
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelMeetingFacility
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
