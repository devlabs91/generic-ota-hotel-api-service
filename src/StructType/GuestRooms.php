<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestRooms StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of guest room types that are comprised within the hotel.
 * @subpackage Structs
 */
class GuestRooms extends AbstractStructBase
{
    /**
     * The GuestRoom
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom[]
     */
    public $GuestRoom;
    /**
     * Constructor method for GuestRooms
     * @uses GuestRooms::setGuestRoom()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom[] $guestRoom
     */
    public function __construct(array $guestRoom = array())
    {
        $this
            ->setGuestRoom($guestRoom);
    }
    /**
     * Get GuestRoom value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom[]|null
     */
    public function getGuestRoom()
    {
        return $this->GuestRoom;
    }
    /**
     * Set GuestRoom value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom[] $guestRoom
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRooms
     */
    public function setGuestRoom(array $guestRoom = array())
    {
        foreach ($guestRoom as $guestRoomsGuestRoomItem) {
            // validation for constraint: itemType
            if (!$guestRoomsGuestRoomItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom) {
                throw new \InvalidArgumentException(sprintf('The GuestRoom property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom, "%s" given', is_object($guestRoomsGuestRoomItem) ? get_class($guestRoomsGuestRoomItem) : gettype($guestRoomsGuestRoomItem)), __LINE__);
            }
        }
        $this->GuestRoom = $guestRoom;
        return $this;
    }
    /**
     * Add item to GuestRoom value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRooms
     */
    public function addToGuestRoom(\Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom) {
            throw new \InvalidArgumentException(sprintf('The GuestRoom property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoom, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuestRoom[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRooms
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
