<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomTypes StructType
 * Meta informations extracted from the WSDL
 * - documentation: This allows for multiple room types to be defined within an inventory block. | Room type for reservation. | A collection of Room Types associated with a particular Room Stay. | The RoomType element is used to contain all the room
 * type information for a single RateType Code (ex A1K) for a given date range.
 * @subpackage Structs
 */
class RoomTypes extends AbstractStructBase
{
    /**
     * The RoomType
     * Meta informations extracted from the WSDL
     * - documentation: This is a specific room type defined within an inventory block.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $RoomType;
    /**
     * Constructor method for RoomTypes
     * @uses RoomTypes::setRoomType()
     * @param mixed[] $roomType
     */
    public function __construct(array $roomType = array())
    {
        $this
            ->setRoomType($roomType);
    }
    /**
     * Get RoomType value
     * @return mixed[]|null
     */
    public function getRoomType()
    {
        return $this->RoomType;
    }
    /**
     * Set RoomType value
     * @throws \InvalidArgumentException
     * @param mixed[] $roomType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypes
     */
    public function setRoomType(array $roomType = array())
    {
        foreach ($roomType as $roomTypesRoomTypeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RoomType property can only contain items of anyType, "%s" given', is_object($roomTypesRoomTypeItem) ? get_class($roomTypesRoomTypeItem) : gettype($roomTypesRoomTypeItem)), __LINE__);
            }
        }
        $this->RoomType = $roomType;
        return $this;
    }
    /**
     * Add item to RoomType value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypes
     */
    public function addToRoomType($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RoomType property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomType[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypes
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
