<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomTypeAllocations StructType
 * Meta informations extracted from the WSDL
 * - documentation: This allows for multiple allocations to be blocked for a specific room type.
 * @subpackage Structs
 */
class RoomTypeAllocations extends AbstractStructBase
{
    /**
     * The RoomTypeAllocation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation[]
     */
    public $RoomTypeAllocation;
    /**
     * The RoomTypePickUpStatus
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code list (INV) Inventory Count Type.
     * - use: optional
     * @var string
     */
    public $RoomTypePickUpStatus;
    /**
     * Constructor method for RoomTypeAllocations
     * @uses RoomTypeAllocations::setRoomTypeAllocation()
     * @uses RoomTypeAllocations::setRoomTypePickUpStatus()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation[] $roomTypeAllocation
     * @param string $roomTypePickUpStatus
     */
    public function __construct(array $roomTypeAllocation = array(), $roomTypePickUpStatus = null)
    {
        $this
            ->setRoomTypeAllocation($roomTypeAllocation)
            ->setRoomTypePickUpStatus($roomTypePickUpStatus);
    }
    /**
     * Get RoomTypeAllocation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation[]|null
     */
    public function getRoomTypeAllocation()
    {
        return $this->RoomTypeAllocation;
    }
    /**
     * Set RoomTypeAllocation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation[] $roomTypeAllocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocations
     */
    public function setRoomTypeAllocation(array $roomTypeAllocation = array())
    {
        foreach ($roomTypeAllocation as $roomTypeAllocationsRoomTypeAllocationItem) {
            // validation for constraint: itemType
            if (!$roomTypeAllocationsRoomTypeAllocationItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation) {
                throw new \InvalidArgumentException(sprintf('The RoomTypeAllocation property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation, "%s" given', is_object($roomTypeAllocationsRoomTypeAllocationItem) ? get_class($roomTypeAllocationsRoomTypeAllocationItem) : gettype($roomTypeAllocationsRoomTypeAllocationItem)), __LINE__);
            }
        }
        $this->RoomTypeAllocation = $roomTypeAllocation;
        return $this;
    }
    /**
     * Add item to RoomTypeAllocation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocations
     */
    public function addToRoomTypeAllocation(\Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation) {
            throw new \InvalidArgumentException(sprintf('The RoomTypeAllocation property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomTypeAllocation[] = $item;
        return $this;
    }
    /**
     * Get RoomTypePickUpStatus value
     * @return string|null
     */
    public function getRoomTypePickUpStatus()
    {
        return $this->RoomTypePickUpStatus;
    }
    /**
     * Set RoomTypePickUpStatus value
     * @param string $roomTypePickUpStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocations
     */
    public function setRoomTypePickUpStatus($roomTypePickUpStatus = null)
    {
        // validation for constraint: string
        if (!is_null($roomTypePickUpStatus) && !is_string($roomTypePickUpStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomTypePickUpStatus)), __LINE__);
        }
        $this->RoomTypePickUpStatus = $roomTypePickUpStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeAllocations
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
