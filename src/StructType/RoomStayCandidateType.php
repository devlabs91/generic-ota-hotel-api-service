<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomStayCandidateType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to identify available room products.
 * @subpackage Structs
 */
class RoomStayCandidateType extends AbstractStructBase
{
    /**
     * The GuestCounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $GuestCounts;
    /**
     * The RoomAmenity
     * Meta informations extracted from the WSDL
     * - documentation: This element is used to pass room attributes. Typical attributes are smoking, non-smoking, wheelchair access, room location (low floor, high floor, close to elevator, etc) and view (garden, pool, ocean, etc)
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $RoomAmenity;
    /**
     * Constructor method for RoomStayCandidateType
     * @uses RoomStayCandidateType::setGuestCounts()
     * @uses RoomStayCandidateType::setRoomAmenity()
     * @param mixed $guestCounts
     * @param mixed[] $roomAmenity
     */
    public function __construct($guestCounts = null, array $roomAmenity = array())
    {
        $this
            ->setGuestCounts($guestCounts)
            ->setRoomAmenity($roomAmenity);
    }
    /**
     * Get GuestCounts value
     * @return mixed|null
     */
    public function getGuestCounts()
    {
        return $this->GuestCounts;
    }
    /**
     * Set GuestCounts value
     * @param mixed $guestCounts
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType
     */
    public function setGuestCounts($guestCounts = null)
    {
        $this->GuestCounts = $guestCounts;
        return $this;
    }
    /**
     * Get RoomAmenity value
     * @return mixed[]|null
     */
    public function getRoomAmenity()
    {
        return $this->RoomAmenity;
    }
    /**
     * Set RoomAmenity value
     * @throws \InvalidArgumentException
     * @param mixed[] $roomAmenity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType
     */
    public function setRoomAmenity(array $roomAmenity = array())
    {
        foreach ($roomAmenity as $roomStayCandidateTypeRoomAmenityItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RoomAmenity property can only contain items of anyType, "%s" given', is_object($roomStayCandidateTypeRoomAmenityItem) ? get_class($roomStayCandidateTypeRoomAmenityItem) : gettype($roomStayCandidateTypeRoomAmenityItem)), __LINE__);
            }
        }
        $this->RoomAmenity = $roomAmenity;
        return $this;
    }
    /**
     * Add item to RoomAmenity value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType
     */
    public function addToRoomAmenity($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RoomAmenity property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomAmenity[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType
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
