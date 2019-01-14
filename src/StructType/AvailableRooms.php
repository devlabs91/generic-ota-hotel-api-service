<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableRooms StructType
 * @subpackage Structs
 */
class AvailableRooms extends AbstractStructBase
{
    /**
     * The Room
     * Meta informations extracted from the WSDL
     * - documentation: Describes a type of room/cabin/apartment etc
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $Room;
    /**
     * Constructor method for AvailableRooms
     * @uses AvailableRooms::setRoom()
     * @param mixed[] $room
     */
    public function __construct(array $room = array())
    {
        $this
            ->setRoom($room);
    }
    /**
     * Get Room value
     * @return mixed[]|null
     */
    public function getRoom()
    {
        return $this->Room;
    }
    /**
     * Set Room value
     * @throws \InvalidArgumentException
     * @param mixed[] $room
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableRooms
     */
    public function setRoom(array $room = array())
    {
        foreach ($room as $availableRoomsRoomItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Room property can only contain items of anyType, "%s" given', is_object($availableRoomsRoomItem) ? get_class($availableRoomsRoomItem) : gettype($availableRoomsRoomItem)), __LINE__);
            }
        }
        $this->Room = $room;
        return $this;
    }
    /**
     * Add item to Room value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableRooms
     */
    public function addToRoom($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Room property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Room[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableRooms
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
