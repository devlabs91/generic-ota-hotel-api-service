<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableCapacities StructType
 * Meta informations extracted from the WSDL
 * - documentation: The amount of usable meeting space available at a property.
 * @subpackage Structs
 */
class AvailableCapacities extends AbstractStructBase
{
    /**
     * The MeetingRoomCapacity
     * Meta informations extracted from the WSDL
     * - documentation: The measureable dimensions and capacities of a meeting room.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $MeetingRoomCapacity;
    /**
     * Constructor method for AvailableCapacities
     * @uses AvailableCapacities::setMeetingRoomCapacity()
     * @param mixed[] $meetingRoomCapacity
     */
    public function __construct(array $meetingRoomCapacity = array())
    {
        $this
            ->setMeetingRoomCapacity($meetingRoomCapacity);
    }
    /**
     * Get MeetingRoomCapacity value
     * @return mixed[]|null
     */
    public function getMeetingRoomCapacity()
    {
        return $this->MeetingRoomCapacity;
    }
    /**
     * Set MeetingRoomCapacity value
     * @throws \InvalidArgumentException
     * @param mixed[] $meetingRoomCapacity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableCapacities
     */
    public function setMeetingRoomCapacity(array $meetingRoomCapacity = array())
    {
        foreach ($meetingRoomCapacity as $availableCapacitiesMeetingRoomCapacityItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The MeetingRoomCapacity property can only contain items of anyType, "%s" given', is_object($availableCapacitiesMeetingRoomCapacityItem) ? get_class($availableCapacitiesMeetingRoomCapacityItem) : gettype($availableCapacitiesMeetingRoomCapacityItem)), __LINE__);
            }
        }
        $this->MeetingRoomCapacity = $meetingRoomCapacity;
        return $this;
    }
    /**
     * Add item to MeetingRoomCapacity value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableCapacities
     */
    public function addToMeetingRoomCapacity($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The MeetingRoomCapacity property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MeetingRoomCapacity[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableCapacities
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
