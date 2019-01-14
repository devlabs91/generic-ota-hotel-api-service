<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingRoomsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of MeetingRoom objects that provide the codes and description of the meeting rooms in the hotel.
 * @subpackage Structs
 */
class MeetingRoomsType extends AbstractStructBase
{
    /**
     * The MeetingRoom
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom[]
     */
    public $MeetingRoom;
    /**
     * The MeetingRoomCount
     * Meta informations extracted from the WSDL
     * - documentation: The total number of unique meeting rooms provided at the hotel facility. For example, if the hotel has a grand ballroom that breaks into Salon A, B, and C -the total number of unique meeting rooms is three.
     * - use: optional
     * @var int
     */
    public $MeetingRoomCount;
    /**
     * The SmallestRoomSpace
     * Meta informations extracted from the WSDL
     * - documentation: The amount of room space for the smallest unique meeting room at the hotel facility.
     * - use: optional
     * @var int
     */
    public $SmallestRoomSpace;
    /**
     * The LargestRoomSpace
     * Meta informations extracted from the WSDL
     * - documentation: The amount of room space for the largest unique meeting room at the hotel facility.
     * - use: optional
     * @var int
     */
    public $LargestRoomSpace;
    /**
     * The TotalRoomSpace
     * Meta informations extracted from the WSDL
     * - documentation: The total amount of unique room space provided at the hotel facility. Note: when counting space, if there is grand ballroom that is comprised of Salon A, B, and C - count the total measurement of the ballroom only.
     * - use: optional
     * @var int
     */
    public $TotalRoomSpace;
    /**
     * The LargestSeatingCapacity
     * Meta informations extracted from the WSDL
     * - documentation: The largest seating capacity available in the largest meeting room - generally this is for theatre-style room setup.
     * - use: optional
     * @var int
     */
    public $LargestSeatingCapacity;
    /**
     * The SecondLargestSeatingCapacity
     * Meta informations extracted from the WSDL
     * - documentation: The second largest seating capacity available in the second largest meeting room - generally this is for theatre-style room setup. This is excluding any space within the largest meeting room.
     * - use: optional
     * @var int
     */
    public $SecondLargestSeatingCapacity;
    /**
     * The SmallestSeatingCapacity
     * Meta informations extracted from the WSDL
     * - documentation: The smallest seating capacity available in a meeting room - generally this is for theatre-style room setup.
     * - use: optional
     * @var int
     */
    public $SmallestSeatingCapacity;
    /**
     * Constructor method for MeetingRoomsType
     * @uses MeetingRoomsType::setMeetingRoom()
     * @uses MeetingRoomsType::setMeetingRoomCount()
     * @uses MeetingRoomsType::setSmallestRoomSpace()
     * @uses MeetingRoomsType::setLargestRoomSpace()
     * @uses MeetingRoomsType::setTotalRoomSpace()
     * @uses MeetingRoomsType::setLargestSeatingCapacity()
     * @uses MeetingRoomsType::setSecondLargestSeatingCapacity()
     * @uses MeetingRoomsType::setSmallestSeatingCapacity()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom[] $meetingRoom
     * @param int $meetingRoomCount
     * @param int $smallestRoomSpace
     * @param int $largestRoomSpace
     * @param int $totalRoomSpace
     * @param int $largestSeatingCapacity
     * @param int $secondLargestSeatingCapacity
     * @param int $smallestSeatingCapacity
     */
    public function __construct(array $meetingRoom = array(), $meetingRoomCount = null, $smallestRoomSpace = null, $largestRoomSpace = null, $totalRoomSpace = null, $largestSeatingCapacity = null, $secondLargestSeatingCapacity = null, $smallestSeatingCapacity = null)
    {
        $this
            ->setMeetingRoom($meetingRoom)
            ->setMeetingRoomCount($meetingRoomCount)
            ->setSmallestRoomSpace($smallestRoomSpace)
            ->setLargestRoomSpace($largestRoomSpace)
            ->setTotalRoomSpace($totalRoomSpace)
            ->setLargestSeatingCapacity($largestSeatingCapacity)
            ->setSecondLargestSeatingCapacity($secondLargestSeatingCapacity)
            ->setSmallestSeatingCapacity($smallestSeatingCapacity);
    }
    /**
     * Get MeetingRoom value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom[]|null
     */
    public function getMeetingRoom()
    {
        return $this->MeetingRoom;
    }
    /**
     * Set MeetingRoom value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom[] $meetingRoom
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoomsType
     */
    public function setMeetingRoom(array $meetingRoom = array())
    {
        foreach ($meetingRoom as $meetingRoomsTypeMeetingRoomItem) {
            // validation for constraint: itemType
            if (!$meetingRoomsTypeMeetingRoomItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom) {
                throw new \InvalidArgumentException(sprintf('The MeetingRoom property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom, "%s" given', is_object($meetingRoomsTypeMeetingRoomItem) ? get_class($meetingRoomsTypeMeetingRoomItem) : gettype($meetingRoomsTypeMeetingRoomItem)), __LINE__);
            }
        }
        $this->MeetingRoom = $meetingRoom;
        return $this;
    }
    /**
     * Add item to MeetingRoom value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoomsType
     */
    public function addToMeetingRoom(\Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom) {
            throw new \InvalidArgumentException(sprintf('The MeetingRoom property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MeetingRoom[] = $item;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoomsType
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
     * Get SmallestRoomSpace value
     * @return int|null
     */
    public function getSmallestRoomSpace()
    {
        return $this->SmallestRoomSpace;
    }
    /**
     * Set SmallestRoomSpace value
     * @param int $smallestRoomSpace
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoomsType
     */
    public function setSmallestRoomSpace($smallestRoomSpace = null)
    {
        // validation for constraint: int
        if (!is_null($smallestRoomSpace) && !is_numeric($smallestRoomSpace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($smallestRoomSpace)), __LINE__);
        }
        $this->SmallestRoomSpace = $smallestRoomSpace;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoomsType
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
     * Get TotalRoomSpace value
     * @return int|null
     */
    public function getTotalRoomSpace()
    {
        return $this->TotalRoomSpace;
    }
    /**
     * Set TotalRoomSpace value
     * @param int $totalRoomSpace
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoomsType
     */
    public function setTotalRoomSpace($totalRoomSpace = null)
    {
        // validation for constraint: int
        if (!is_null($totalRoomSpace) && !is_numeric($totalRoomSpace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalRoomSpace)), __LINE__);
        }
        $this->TotalRoomSpace = $totalRoomSpace;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoomsType
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
     * Get SecondLargestSeatingCapacity value
     * @return int|null
     */
    public function getSecondLargestSeatingCapacity()
    {
        return $this->SecondLargestSeatingCapacity;
    }
    /**
     * Set SecondLargestSeatingCapacity value
     * @param int $secondLargestSeatingCapacity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoomsType
     */
    public function setSecondLargestSeatingCapacity($secondLargestSeatingCapacity = null)
    {
        // validation for constraint: int
        if (!is_null($secondLargestSeatingCapacity) && !is_numeric($secondLargestSeatingCapacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($secondLargestSeatingCapacity)), __LINE__);
        }
        $this->SecondLargestSeatingCapacity = $secondLargestSeatingCapacity;
        return $this;
    }
    /**
     * Get SmallestSeatingCapacity value
     * @return int|null
     */
    public function getSmallestSeatingCapacity()
    {
        return $this->SmallestSeatingCapacity;
    }
    /**
     * Set SmallestSeatingCapacity value
     * @param int $smallestSeatingCapacity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoomsType
     */
    public function setSmallestSeatingCapacity($smallestSeatingCapacity = null)
    {
        // validation for constraint: int
        if (!is_null($smallestSeatingCapacity) && !is_numeric($smallestSeatingCapacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($smallestSeatingCapacity)), __LINE__);
        }
        $this->SmallestSeatingCapacity = $smallestSeatingCapacity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoomsType
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
