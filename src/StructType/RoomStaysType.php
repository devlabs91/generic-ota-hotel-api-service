<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomStaysType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of RoomStay objects. Room stays associated with this reservation.
 * @subpackage Structs
 */
class RoomStaysType extends AbstractStructBase
{
    /**
     * The RoomStay
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay[]
     */
    public $RoomStay;
    /**
     * Constructor method for RoomStaysType
     * @uses RoomStaysType::setRoomStay()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay[] $roomStay
     */
    public function __construct(array $roomStay = array())
    {
        $this
            ->setRoomStay($roomStay);
    }
    /**
     * Get RoomStay value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay[]|null
     */
    public function getRoomStay()
    {
        return $this->RoomStay;
    }
    /**
     * Set RoomStay value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay[] $roomStay
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStaysType
     */
    public function setRoomStay(array $roomStay = array())
    {
        foreach ($roomStay as $roomStaysTypeRoomStayItem) {
            // validation for constraint: itemType
            if (!$roomStaysTypeRoomStayItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay) {
                throw new \InvalidArgumentException(sprintf('The RoomStay property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay, "%s" given', is_object($roomStaysTypeRoomStayItem) ? get_class($roomStaysTypeRoomStayItem) : gettype($roomStaysTypeRoomStayItem)), __LINE__);
            }
        }
        $this->RoomStay = $roomStay;
        return $this;
    }
    /**
     * Add item to RoomStay value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStaysType
     */
    public function addToRoomStay(\Devlabs91\GenericOtaHotelApiService\StructType\RoomStay $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay) {
            throw new \InvalidArgumentException(sprintf('The RoomStay property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomStay[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStaysType
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
