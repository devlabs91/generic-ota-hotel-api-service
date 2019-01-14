<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestCountType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of GuestCount by age group.
 * @subpackage Structs
 */
class GuestCountType extends AbstractStructBase
{
    /**
     * The GuestCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount[]
     */
    public $GuestCount;
    /**
     * The IsPerRoom
     * Meta informations extracted from the WSDL
     * - documentation: IsPerRoom means that the guests defined in the GuestCounts object apply to each room in the NumberOfRooms for the RoomStay. Value of "false" means that the guests defined in the GuestCounts object apply to all rooms combined in the
     * NumberOfRooms for the RoomStay.
     * - use: optional
     * @var bool
     */
    public $IsPerRoom;
    /**
     * Constructor method for GuestCountType
     * @uses GuestCountType::setGuestCount()
     * @uses GuestCountType::setIsPerRoom()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount[] $guestCount
     * @param bool $isPerRoom
     */
    public function __construct(array $guestCount = array(), $isPerRoom = null)
    {
        $this
            ->setGuestCount($guestCount)
            ->setIsPerRoom($isPerRoom);
    }
    /**
     * Get GuestCount value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount[]|null
     */
    public function getGuestCount()
    {
        return $this->GuestCount;
    }
    /**
     * Set GuestCount value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount[] $guestCount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestCountType
     */
    public function setGuestCount(array $guestCount = array())
    {
        foreach ($guestCount as $guestCountTypeGuestCountItem) {
            // validation for constraint: itemType
            if (!$guestCountTypeGuestCountItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount) {
                throw new \InvalidArgumentException(sprintf('The GuestCount property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount, "%s" given', is_object($guestCountTypeGuestCountItem) ? get_class($guestCountTypeGuestCountItem) : gettype($guestCountTypeGuestCountItem)), __LINE__);
            }
        }
        $this->GuestCount = $guestCount;
        return $this;
    }
    /**
     * Add item to GuestCount value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestCountType
     */
    public function addToGuestCount(\Devlabs91\GenericOtaHotelApiService\StructType\GuestCount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount) {
            throw new \InvalidArgumentException(sprintf('The GuestCount property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuestCount[] = $item;
        return $this;
    }
    /**
     * Get IsPerRoom value
     * @return bool|null
     */
    public function getIsPerRoom()
    {
        return $this->IsPerRoom;
    }
    /**
     * Set IsPerRoom value
     * @param bool $isPerRoom
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestCountType
     */
    public function setIsPerRoom($isPerRoom = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPerRoom) && !is_bool($isPerRoom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPerRoom)), __LINE__);
        }
        $this->IsPerRoom = $isPerRoom;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestCountType
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
