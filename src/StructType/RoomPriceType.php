<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomPriceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Gives a total price and prices by traveler type for a room occupancy combination e.g. 2 adults and 2 children
 * @subpackage Structs
 */
class RoomPriceType extends AbstractStructBase
{
    /**
     * The GuestCounts
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $GuestCounts;
    /**
     * The ItemPrice
     * Meta informations extracted from the WSDL
     * - documentation: Price for a traveler type in the room.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $ItemPrice;
    /**
     * The ProfilePrice
     * Meta informations extracted from the WSDL
     * - documentation: Total price for this room.
     * - minOccurs: 0
     * @var mixed
     */
    public $ProfilePrice;
    /**
     * The RoomRPH
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RoomRPH;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * Constructor method for RoomPriceType
     * @uses RoomPriceType::setGuestCounts()
     * @uses RoomPriceType::setItemPrice()
     * @uses RoomPriceType::setProfilePrice()
     * @uses RoomPriceType::setRoomRPH()
     * @uses RoomPriceType::setCode()
     * @param mixed[] $guestCounts
     * @param mixed[] $itemPrice
     * @param mixed $profilePrice
     * @param string $roomRPH
     * @param string $code
     */
    public function __construct(array $guestCounts = array(), array $itemPrice = array(), $profilePrice = null, $roomRPH = null, $code = null)
    {
        $this
            ->setGuestCounts($guestCounts)
            ->setItemPrice($itemPrice)
            ->setProfilePrice($profilePrice)
            ->setRoomRPH($roomRPH)
            ->setCode($code);
    }
    /**
     * Get GuestCounts value
     * @return mixed[]|null
     */
    public function getGuestCounts()
    {
        return $this->GuestCounts;
    }
    /**
     * Set GuestCounts value
     * @throws \InvalidArgumentException
     * @param mixed[] $guestCounts
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomPriceType
     */
    public function setGuestCounts(array $guestCounts = array())
    {
        foreach ($guestCounts as $roomPriceTypeGuestCountsItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The GuestCounts property can only contain items of anyType, "%s" given', is_object($roomPriceTypeGuestCountsItem) ? get_class($roomPriceTypeGuestCountsItem) : gettype($roomPriceTypeGuestCountsItem)), __LINE__);
            }
        }
        $this->GuestCounts = $guestCounts;
        return $this;
    }
    /**
     * Add item to GuestCounts value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomPriceType
     */
    public function addToGuestCounts($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The GuestCounts property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuestCounts[] = $item;
        return $this;
    }
    /**
     * Get ItemPrice value
     * @return mixed[]|null
     */
    public function getItemPrice()
    {
        return $this->ItemPrice;
    }
    /**
     * Set ItemPrice value
     * @throws \InvalidArgumentException
     * @param mixed[] $itemPrice
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomPriceType
     */
    public function setItemPrice(array $itemPrice = array())
    {
        foreach ($itemPrice as $roomPriceTypeItemPriceItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The ItemPrice property can only contain items of anyType, "%s" given', is_object($roomPriceTypeItemPriceItem) ? get_class($roomPriceTypeItemPriceItem) : gettype($roomPriceTypeItemPriceItem)), __LINE__);
            }
        }
        $this->ItemPrice = $itemPrice;
        return $this;
    }
    /**
     * Add item to ItemPrice value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomPriceType
     */
    public function addToItemPrice($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The ItemPrice property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemPrice[] = $item;
        return $this;
    }
    /**
     * Get ProfilePrice value
     * @return mixed|null
     */
    public function getProfilePrice()
    {
        return $this->ProfilePrice;
    }
    /**
     * Set ProfilePrice value
     * @param mixed $profilePrice
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomPriceType
     */
    public function setProfilePrice($profilePrice = null)
    {
        $this->ProfilePrice = $profilePrice;
        return $this;
    }
    /**
     * Get RoomRPH value
     * @return string|null
     */
    public function getRoomRPH()
    {
        return $this->RoomRPH;
    }
    /**
     * Set RoomRPH value
     * @param string $roomRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomPriceType
     */
    public function setRoomRPH($roomRPH = null)
    {
        // validation for constraint: string
        if (!is_null($roomRPH) && !is_string($roomRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomRPH)), __LINE__);
        }
        $this->RoomRPH = $roomRPH;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomPriceType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomPriceType
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
