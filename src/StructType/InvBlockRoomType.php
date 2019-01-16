<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvBlockRoomType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to define the room types and all of their supporting data within a room block. | This is the date range to which rooms are assigned to the inventory block.
 * @subpackage Structs
 */
class InvBlockRoomType extends AbstractStructBase
{
    /**
     * The RoomTypeAllocations
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocations[]
     */
    public $RoomTypeAllocations;
    /**
     * The RatePlans
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RatePlans
     */
    public $RatePlans;
    /**
     * The DaysOfWeeks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\DaysOfWeeks
     */
    public $DaysOfWeeks;
    /**
     * The RoomTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Specfic system room type code (e.g. GENR, CONC, SUIT).
     * - use: optional
     * @var string
     */
    public $RoomTypeCode;
    /**
     * Constructor method for InvBlockRoomType
     * @uses InvBlockRoomType::setRoomTypeAllocations()
     * @uses InvBlockRoomType::setRatePlans()
     * @uses InvBlockRoomType::setDaysOfWeeks()
     * @uses InvBlockRoomType::setRoomTypeCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocations[] $roomTypeAllocations
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RatePlans $ratePlans
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DaysOfWeeks $daysOfWeeks
     * @param string $roomTypeCode
     */
    public function __construct(array $roomTypeAllocations = array(), \Devlabs91\GenericOtaHotelApiService\StructType\RatePlans $ratePlans = null, \Devlabs91\GenericOtaHotelApiService\StructType\DaysOfWeeks $daysOfWeeks = null, $roomTypeCode = null)
    {
        $this
            ->setRoomTypeAllocations($roomTypeAllocations)
            ->setRatePlans($ratePlans)
            ->setDaysOfWeeks($daysOfWeeks)
            ->setRoomTypeCode($roomTypeCode);
    }
    /**
     * Get RoomTypeAllocations value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocations[]|null
     */
    public function getRoomTypeAllocations()
    {
        return $this->RoomTypeAllocations;
    }
    /**
     * Set RoomTypeAllocations value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocations[] $roomTypeAllocations
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockRoomType
     */
    public function setRoomTypeAllocations(array $roomTypeAllocations = array())
    {
        foreach ($roomTypeAllocations as $invBlockRoomTypeRoomTypeAllocationsItem) {
            // validation for constraint: itemType
            if (!$invBlockRoomTypeRoomTypeAllocationsItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocations) {
                throw new \InvalidArgumentException(sprintf('The RoomTypeAllocations property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocations, "%s" given', is_object($invBlockRoomTypeRoomTypeAllocationsItem) ? get_class($invBlockRoomTypeRoomTypeAllocationsItem) : gettype($invBlockRoomTypeRoomTypeAllocationsItem)), __LINE__);
            }
        }
        $this->RoomTypeAllocations = $roomTypeAllocations;
        return $this;
    }
    /**
     * Add item to RoomTypeAllocations value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocations $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockRoomType
     */
    public function addToRoomTypeAllocations(\Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocations $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocations) {
            throw new \InvalidArgumentException(sprintf('The RoomTypeAllocations property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocations, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomTypeAllocations[] = $item;
        return $this;
    }
    /**
     * Get RatePlans value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlans|null
     */
    public function getRatePlans()
    {
        return $this->RatePlans;
    }
    /**
     * Set RatePlans value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RatePlans $ratePlans
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockRoomType
     */
    public function setRatePlans(\Devlabs91\GenericOtaHotelApiService\StructType\RatePlans $ratePlans = null)
    {
        $this->RatePlans = $ratePlans;
        return $this;
    }
    /**
     * Get DaysOfWeeks value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DaysOfWeeks|null
     */
    public function getDaysOfWeeks()
    {
        return $this->DaysOfWeeks;
    }
    /**
     * Set DaysOfWeeks value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DaysOfWeeks $daysOfWeeks
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockRoomType
     */
    public function setDaysOfWeeks(\Devlabs91\GenericOtaHotelApiService\StructType\DaysOfWeeks $daysOfWeeks = null)
    {
        $this->DaysOfWeeks = $daysOfWeeks;
        return $this;
    }
    /**
     * Get RoomTypeCode value
     * @return string|null
     */
    public function getRoomTypeCode()
    {
        return $this->RoomTypeCode;
    }
    /**
     * Set RoomTypeCode value
     * @param string $roomTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockRoomType
     */
    public function setRoomTypeCode($roomTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomTypeCode) && !is_string($roomTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomTypeCode)), __LINE__);
        }
        $this->RoomTypeCode = $roomTypeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockRoomType
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
