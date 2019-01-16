<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingRoom StructType
 * Meta informations extracted from the WSDL
 * - documentation: Dedicated or non-dedicated space or area in which to hold a meeting. | This may be used to uniquely identify a meeting room.
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
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Dimension
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
     * - documentation: Collection of features.
     * - minOccurs: 0
     * @var mixed
     */
    public $Features;
    /**
     * The MultimediaDescriptions
     * Meta informations extracted from the WSDL
     * - documentation: Information describing the meeting room.
     * - minOccurs: 0
     * @var mixed
     */
    public $MultimediaDescriptions;
    /**
     * The Irregular
     * Meta informations extracted from the WSDL
     * - documentation: This provides information as to whether the room has an irregular shape, if true the room would not be of a traditional square or rectangular style.
     * - use: optional
     * @var bool
     */
    public $Irregular;
    /**
     * The PropertySystemName
     * Meta informations extracted from the WSDL
     * - documentation: This is the room name as it is defined by the system. The name used internally may differ from the name used by guests.
     * - use: optional
     * @var string
     */
    public $PropertySystemName;
    /**
     * The RoomName
     * Meta informations extracted from the WSDL
     * - documentation: This is the meeting room name as provided to the guests.
     * - use: optional
     * @var string
     */
    public $RoomName;
    /**
     * The Sort
     * Meta informations extracted from the WSDL
     * - documentation: This is a number assigned to rooms, usually used to define the display order.
     * - use: optional
     * @var int
     */
    public $Sort;
    /**
     * The MeetingRoomCapacity
     * Meta informations extracted from the WSDL
     * - documentation: The total number of people permitted in the meeting room.
     * - use: optional
     * @var int
     */
    public $MeetingRoomCapacity;
    /**
     * The Access
     * Meta informations extracted from the WSDL
     * - documentation: Used to imply the type of access to the meeting space (e.g. private access, public access, etc.)
     * - use: optional
     * @var string
     */
    public $Access;
    /**
     * The MeetingRoomTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines the type of the meeting room being described (eg. boardroom, ballroom, exhibit space). Refer to OpenTravel Codelist Meeting Room Format Code (MRF).
     * - use: optional
     * @var string
     */
    public $MeetingRoomTypeCode;
    /**
     * The MeetingRoomLevel
     * Meta informations extracted from the WSDL
     * - documentation: Defines the level in the facility where the meeting room is located (i.e., lobby, mezzanine, first floor, ground, outdoor, etc.)
     * - use: optional
     * @var string
     */
    public $MeetingRoomLevel;
    /**
     * The DedicatedIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, the room is used for a single purpose as indicated by the MeetingRoomTypeCode attribute.
     * - use: optional
     * @var bool
     */
    public $DedicatedIndicator;
    /**
     * Constructor method for MeetingRoom
     * @uses MeetingRoom::setCodes()
     * @uses MeetingRoom::setDimension()
     * @uses MeetingRoom::setAvailableCapacities()
     * @uses MeetingRoom::setFeatures()
     * @uses MeetingRoom::setMultimediaDescriptions()
     * @uses MeetingRoom::setIrregular()
     * @uses MeetingRoom::setPropertySystemName()
     * @uses MeetingRoom::setRoomName()
     * @uses MeetingRoom::setSort()
     * @uses MeetingRoom::setMeetingRoomCapacity()
     * @uses MeetingRoom::setAccess()
     * @uses MeetingRoom::setMeetingRoomTypeCode()
     * @uses MeetingRoom::setMeetingRoomLevel()
     * @uses MeetingRoom::setDedicatedIndicator()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Codes $codes
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Dimension $dimension
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailableCapacities $availableCapacities
     * @param mixed $features
     * @param mixed $multimediaDescriptions
     * @param bool $irregular
     * @param string $propertySystemName
     * @param string $roomName
     * @param int $sort
     * @param int $meetingRoomCapacity
     * @param string $access
     * @param string $meetingRoomTypeCode
     * @param string $meetingRoomLevel
     * @param bool $dedicatedIndicator
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Codes $codes = null, \Devlabs91\GenericOtaHotelApiService\StructType\Dimension $dimension = null, \Devlabs91\GenericOtaHotelApiService\StructType\AvailableCapacities $availableCapacities = null, $features = null, $multimediaDescriptions = null, $irregular = null, $propertySystemName = null, $roomName = null, $sort = null, $meetingRoomCapacity = null, $access = null, $meetingRoomTypeCode = null, $meetingRoomLevel = null, $dedicatedIndicator = null)
    {
        $this
            ->setCodes($codes)
            ->setDimension($dimension)
            ->setAvailableCapacities($availableCapacities)
            ->setFeatures($features)
            ->setMultimediaDescriptions($multimediaDescriptions)
            ->setIrregular($irregular)
            ->setPropertySystemName($propertySystemName)
            ->setRoomName($roomName)
            ->setSort($sort)
            ->setMeetingRoomCapacity($meetingRoomCapacity)
            ->setAccess($access)
            ->setMeetingRoomTypeCode($meetingRoomTypeCode)
            ->setMeetingRoomLevel($meetingRoomLevel)
            ->setDedicatedIndicator($dedicatedIndicator);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Dimension|null
     */
    public function getDimension()
    {
        return $this->Dimension;
    }
    /**
     * Set Dimension value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Dimension $dimension
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
     */
    public function setDimension(\Devlabs91\GenericOtaHotelApiService\StructType\Dimension $dimension = null)
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
     * Get MultimediaDescriptions value
     * @return mixed|null
     */
    public function getMultimediaDescriptions()
    {
        return $this->MultimediaDescriptions;
    }
    /**
     * Set MultimediaDescriptions value
     * @param mixed $multimediaDescriptions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
     */
    public function setMultimediaDescriptions($multimediaDescriptions = null)
    {
        $this->MultimediaDescriptions = $multimediaDescriptions;
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
     * Get MeetingRoomTypeCode value
     * @return string|null
     */
    public function getMeetingRoomTypeCode()
    {
        return $this->MeetingRoomTypeCode;
    }
    /**
     * Set MeetingRoomTypeCode value
     * @param string $meetingRoomTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
     */
    public function setMeetingRoomTypeCode($meetingRoomTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($meetingRoomTypeCode) && !is_string($meetingRoomTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($meetingRoomTypeCode)), __LINE__);
        }
        $this->MeetingRoomTypeCode = $meetingRoomTypeCode;
        return $this;
    }
    /**
     * Get MeetingRoomLevel value
     * @return string|null
     */
    public function getMeetingRoomLevel()
    {
        return $this->MeetingRoomLevel;
    }
    /**
     * Set MeetingRoomLevel value
     * @param string $meetingRoomLevel
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
     */
    public function setMeetingRoomLevel($meetingRoomLevel = null)
    {
        // validation for constraint: string
        if (!is_null($meetingRoomLevel) && !is_string($meetingRoomLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($meetingRoomLevel)), __LINE__);
        }
        $this->MeetingRoomLevel = $meetingRoomLevel;
        return $this;
    }
    /**
     * Get DedicatedIndicator value
     * @return bool|null
     */
    public function getDedicatedIndicator()
    {
        return $this->DedicatedIndicator;
    }
    /**
     * Set DedicatedIndicator value
     * @param bool $dedicatedIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MeetingRoom
     */
    public function setDedicatedIndicator($dedicatedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($dedicatedIndicator) && !is_bool($dedicatedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dedicatedIndicator)), __LINE__);
        }
        $this->DedicatedIndicator = $dedicatedIndicator;
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
