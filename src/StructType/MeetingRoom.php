<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingRoom StructType
 * Meta informations extracted from the WSDL
 * - documentation: Dedicated or non-dedicated space or area in which to hold a meeting.
 * @subpackage Structs
 */
class MeetingRoom extends AbstractStructBase
{
    /**
     * The Codes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Codes
     */
    public $Codes;
    /**
     * The Dimension
     * Meta informations extracted from the WSDL
     * - documentation: Dimensions of the meeting room.
     * - minOccurs: 0
     * @var mixed
     */
    public $Dimension;
    /**
     * The AvailableCapacities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AvailableCapacities
     */
    public $AvailableCapacities;
    /**
     * The Features
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Features;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Information describing the restaurant.
     * - minOccurs: 0
     * @var mixed
     */
    public $Description;
    /**
     * The Irregular
     * Meta informations extracted from the WSDL
     * - documentation: This provides information as to whether the room has an irregular shape, if true the room would not be of a traditional square or rectangular style.
     * @var bool
     */
    public $Irregular;
    /**
     * The PropertySystemName
     * Meta informations extracted from the WSDL
     * - documentation: This is the room name as it is defined by the system. The name used internally may differ from the name used by guests.
     * @var string
     */
    public $PropertySystemName;
    /**
     * The RoomName
     * Meta informations extracted from the WSDL
     * - documentation: This is the meeting room name as provided to the guests.
     * @var string
     */
    public $RoomName;
    /**
     * The Sort
     * Meta informations extracted from the WSDL
     * - documentation: This is a number assigned to rooms, usually used to define the display order.
     * @var int
     */
    public $Sort;
    /**
     * The MeetingRoomCapacity
     * Meta informations extracted from the WSDL
     * - documentation: The total number of people permitted in the meeting room.
     * @var int
     */
    public $MeetingRoomCapacity;
    /**
     * The Access
     * Meta informations extracted from the WSDL
     * - documentation: Used to imply the type of access to the meeting space (e.g. private access, public access, etc.).
     * - use: optional
     * @var string
     */
    public $Access;
    /**
     * Constructor method for MeetingRoom
     * @uses MeetingRoom::setCodes()
     * @uses MeetingRoom::setDimension()
     * @uses MeetingRoom::setAvailableCapacities()
     * @uses MeetingRoom::setFeatures()
     * @uses MeetingRoom::setDescription()
     * @uses MeetingRoom::setIrregular()
     * @uses MeetingRoom::setPropertySystemName()
     * @uses MeetingRoom::setRoomName()
     * @uses MeetingRoom::setSort()
     * @uses MeetingRoom::setMeetingRoomCapacity()
     * @uses MeetingRoom::setAccess()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Codes $codes
     * @param mixed $dimension
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailableCapacities $availableCapacities
     * @param mixed $features
     * @param mixed $description
     * @param bool $irregular
     * @param string $propertySystemName
     * @param string $roomName
     * @param int $sort
     * @param int $meetingRoomCapacity
     * @param string $access
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Codes $codes = null, $dimension = null, \Devlabs91\GenericOtaHotelApiService\StructType\AvailableCapacities $availableCapacities = null, $features = null, $description = null, $irregular = null, $propertySystemName = null, $roomName = null, $sort = null, $meetingRoomCapacity = null, $access = null)
    {
        $this
            ->setCodes($codes)
            ->setDimension($dimension)
            ->setAvailableCapacities($availableCapacities)
            ->setFeatures($features)
            ->setDescription($description)
            ->setIrregular($irregular)
            ->setPropertySystemName($propertySystemName)
            ->setRoomName($roomName)
            ->setSort($sort)
            ->setMeetingRoomCapacity($meetingRoomCapacity)
            ->setAccess($access);
    }
    /**
     * Get Codes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Codes|null
     */
    public function getCodes()
    {
        return $this->Codes;
    }
    /**
     * Set Codes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Codes $codes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
     */
    public function setCodes(\Devlabs91\GenericOtaHotelApiService\StructType\Codes $codes = null)
    {
        $this->Codes = $codes;
        return $this;
    }
    /**
     * Get Dimension value
     * @return mixed|null
     */
    public function getDimension()
    {
        return $this->Dimension;
    }
    /**
     * Set Dimension value
     * @param mixed $dimension
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
     */
    public function setDimension($dimension = null)
    {
        $this->Dimension = $dimension;
        return $this;
    }
    /**
     * Get AvailableCapacities value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableCapacities|null
     */
    public function getAvailableCapacities()
    {
        return $this->AvailableCapacities;
    }
    /**
     * Set AvailableCapacities value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailableCapacities $availableCapacities
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
     */
    public function setAvailableCapacities(\Devlabs91\GenericOtaHotelApiService\StructType\AvailableCapacities $availableCapacities = null)
    {
        $this->AvailableCapacities = $availableCapacities;
        return $this;
    }
    /**
     * Get Features value
     * @return mixed|null
     */
    public function getFeatures()
    {
        return $this->Features;
    }
    /**
     * Set Features value
     * @param mixed $features
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
     */
    public function setFeatures($features = null)
    {
        $this->Features = $features;
        return $this;
    }
    /**
     * Get Description value
     * @return mixed|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param mixed $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Irregular value
     * @return bool|null
     */
    public function getIrregular()
    {
        return $this->Irregular;
    }
    /**
     * Set Irregular value
     * @param bool $irregular
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
     */
    public function setIrregular($irregular = null)
    {
        // validation for constraint: boolean
        if (!is_null($irregular) && !is_bool($irregular)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($irregular)), __LINE__);
        }
        $this->Irregular = $irregular;
        return $this;
    }
    /**
     * Get PropertySystemName value
     * @return string|null
     */
    public function getPropertySystemName()
    {
        return $this->PropertySystemName;
    }
    /**
     * Set PropertySystemName value
     * @param string $propertySystemName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
     */
    public function setPropertySystemName($propertySystemName = null)
    {
        // validation for constraint: string
        if (!is_null($propertySystemName) && !is_string($propertySystemName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($propertySystemName)), __LINE__);
        }
        $this->PropertySystemName = $propertySystemName;
        return $this;
    }
    /**
     * Get RoomName value
     * @return string|null
     */
    public function getRoomName()
    {
        return $this->RoomName;
    }
    /**
     * Set RoomName value
     * @param string $roomName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
     */
    public function setRoomName($roomName = null)
    {
        // validation for constraint: string
        if (!is_null($roomName) && !is_string($roomName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomName)), __LINE__);
        }
        $this->RoomName = $roomName;
        return $this;
    }
    /**
     * Get Sort value
     * @return int|null
     */
    public function getSort()
    {
        return $this->Sort;
    }
    /**
     * Set Sort value
     * @param int $sort
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
     */
    public function setSort($sort = null)
    {
        // validation for constraint: int
        if (!is_null($sort) && !is_numeric($sort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sort)), __LINE__);
        }
        $this->Sort = $sort;
        return $this;
    }
    /**
     * Get MeetingRoomCapacity value
     * @return int|null
     */
    public function getMeetingRoomCapacity()
    {
        return $this->MeetingRoomCapacity;
    }
    /**
     * Set MeetingRoomCapacity value
     * @param int $meetingRoomCapacity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
     */
    public function setMeetingRoomCapacity($meetingRoomCapacity = null)
    {
        // validation for constraint: int
        if (!is_null($meetingRoomCapacity) && !is_numeric($meetingRoomCapacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($meetingRoomCapacity)), __LINE__);
        }
        $this->MeetingRoomCapacity = $meetingRoomCapacity;
        return $this;
    }
    /**
     * Get Access value
     * @return string|null
     */
    public function getAccess()
    {
        return $this->Access;
    }
    /**
     * Set Access value
     * @param string $access
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
     */
    public function setAccess($access = null)
    {
        // validation for constraint: string
        if (!is_null($access) && !is_string($access)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($access)), __LINE__);
        }
        $this->Access = $access;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
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
