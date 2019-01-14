<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestRoomType StructType
 * Meta informations extracted from the WSDL
 * - documentation: GuestRoomType is used to contain all the information on a guest room
 * @subpackage Structs
 */
class GuestRoomType extends AbstractStructBase
{
    /**
     * The Quantities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Quantities
     */
    public $Quantities;
    /**
     * The Room
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Room
     */
    public $Room;
    /**
     * The Amenities
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Amenities
     */
    public $Amenities;
    /**
     * The RoomLevelFees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RoomLevelFees
     */
    public $RoomLevelFees;
    /**
     * The AdditionalGuestAmount
     * Meta informations extracted from the WSDL
     * - documentation: Additional guest amounts which are attached to room, not rate.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $AdditionalGuestAmount;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Description of the Room.
     * - minOccurs: 0
     * @var mixed
     */
    public $Description;
    /**
     * Constructor method for GuestRoomType
     * @uses GuestRoomType::setQuantities()
     * @uses GuestRoomType::setRoom()
     * @uses GuestRoomType::setAmenities()
     * @uses GuestRoomType::setRoomLevelFees()
     * @uses GuestRoomType::setAdditionalGuestAmount()
     * @uses GuestRoomType::setDescription()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Quantities $quantities
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Room $room
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomLevelFees $roomLevelFees
     * @param mixed[] $additionalGuestAmount
     * @param mixed $description
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Quantities $quantities = null, \Devlabs91\GenericOtaHotelApiService\StructType\Room $room = null, \Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities = null, \Devlabs91\GenericOtaHotelApiService\StructType\RoomLevelFees $roomLevelFees = null, array $additionalGuestAmount = array(), $description = null)
    {
        $this
            ->setQuantities($quantities)
            ->setRoom($room)
            ->setAmenities($amenities)
            ->setRoomLevelFees($roomLevelFees)
            ->setAdditionalGuestAmount($additionalGuestAmount)
            ->setDescription($description);
    }
    /**
     * Get Quantities value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Quantities|null
     */
    public function getQuantities()
    {
        return $this->Quantities;
    }
    /**
     * Set Quantities value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Quantities $quantities
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomType
     */
    public function setQuantities(\Devlabs91\GenericOtaHotelApiService\StructType\Quantities $quantities = null)
    {
        $this->Quantities = $quantities;
        return $this;
    }
    /**
     * Get Room value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Room|null
     */
    public function getRoom()
    {
        return $this->Room;
    }
    /**
     * Set Room value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Room $room
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomType
     */
    public function setRoom(\Devlabs91\GenericOtaHotelApiService\StructType\Room $room = null)
    {
        $this->Room = $room;
        return $this;
    }
    /**
     * Get Amenities value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenities|null
     */
    public function getAmenities()
    {
        return $this->Amenities;
    }
    /**
     * Set Amenities value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomType
     */
    public function setAmenities(\Devlabs91\GenericOtaHotelApiService\StructType\Amenities $amenities = null)
    {
        $this->Amenities = $amenities;
        return $this;
    }
    /**
     * Get RoomLevelFees value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomLevelFees|null
     */
    public function getRoomLevelFees()
    {
        return $this->RoomLevelFees;
    }
    /**
     * Set RoomLevelFees value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomLevelFees $roomLevelFees
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomType
     */
    public function setRoomLevelFees(\Devlabs91\GenericOtaHotelApiService\StructType\RoomLevelFees $roomLevelFees = null)
    {
        $this->RoomLevelFees = $roomLevelFees;
        return $this;
    }
    /**
     * Get AdditionalGuestAmount value
     * @return mixed[]|null
     */
    public function getAdditionalGuestAmount()
    {
        return $this->AdditionalGuestAmount;
    }
    /**
     * Set AdditionalGuestAmount value
     * @throws \InvalidArgumentException
     * @param mixed[] $additionalGuestAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomType
     */
    public function setAdditionalGuestAmount(array $additionalGuestAmount = array())
    {
        foreach ($additionalGuestAmount as $guestRoomTypeAdditionalGuestAmountItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AdditionalGuestAmount property can only contain items of anyType, "%s" given', is_object($guestRoomTypeAdditionalGuestAmountItem) ? get_class($guestRoomTypeAdditionalGuestAmountItem) : gettype($guestRoomTypeAdditionalGuestAmountItem)), __LINE__);
            }
        }
        $this->AdditionalGuestAmount = $additionalGuestAmount;
        return $this;
    }
    /**
     * Add item to AdditionalGuestAmount value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomType
     */
    public function addToAdditionalGuestAmount($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AdditionalGuestAmount property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalGuestAmount[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomType
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomType
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
