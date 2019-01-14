<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FacilityChoicesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides the available facilities for the enquiror's chosen property and stay.
 * @subpackage Structs
 */
class FacilityChoicesType extends AbstractStructBase
{
    /**
     * The AvailableRooms
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AvailableRooms
     */
    public $AvailableRooms;
    /**
     * The AvailableMealPlans
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AvailableMealPlans
     */
    public $AvailableMealPlans;
    /**
     * The RoomPrices
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RoomPrices[]
     */
    public $RoomPrices;
    /**
     * Constructor method for FacilityChoicesType
     * @uses FacilityChoicesType::setAvailableRooms()
     * @uses FacilityChoicesType::setAvailableMealPlans()
     * @uses FacilityChoicesType::setRoomPrices()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailableRooms $availableRooms
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailableMealPlans $availableMealPlans
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomPrices[] $roomPrices
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\AvailableRooms $availableRooms = null, \Devlabs91\GenericOtaHotelApiService\StructType\AvailableMealPlans $availableMealPlans = null, array $roomPrices = array())
    {
        $this
            ->setAvailableRooms($availableRooms)
            ->setAvailableMealPlans($availableMealPlans)
            ->setRoomPrices($roomPrices);
    }
    /**
     * Get AvailableRooms value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableRooms|null
     */
    public function getAvailableRooms()
    {
        return $this->AvailableRooms;
    }
    /**
     * Set AvailableRooms value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailableRooms $availableRooms
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FacilityChoicesType
     */
    public function setAvailableRooms(\Devlabs91\GenericOtaHotelApiService\StructType\AvailableRooms $availableRooms = null)
    {
        $this->AvailableRooms = $availableRooms;
        return $this;
    }
    /**
     * Get AvailableMealPlans value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableMealPlans|null
     */
    public function getAvailableMealPlans()
    {
        return $this->AvailableMealPlans;
    }
    /**
     * Set AvailableMealPlans value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailableMealPlans $availableMealPlans
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FacilityChoicesType
     */
    public function setAvailableMealPlans(\Devlabs91\GenericOtaHotelApiService\StructType\AvailableMealPlans $availableMealPlans = null)
    {
        $this->AvailableMealPlans = $availableMealPlans;
        return $this;
    }
    /**
     * Get RoomPrices value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomPrices[]|null
     */
    public function getRoomPrices()
    {
        return $this->RoomPrices;
    }
    /**
     * Set RoomPrices value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomPrices[] $roomPrices
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FacilityChoicesType
     */
    public function setRoomPrices(array $roomPrices = array())
    {
        foreach ($roomPrices as $facilityChoicesTypeRoomPricesItem) {
            // validation for constraint: itemType
            if (!$facilityChoicesTypeRoomPricesItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RoomPrices) {
                throw new \InvalidArgumentException(sprintf('The RoomPrices property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RoomPrices, "%s" given', is_object($facilityChoicesTypeRoomPricesItem) ? get_class($facilityChoicesTypeRoomPricesItem) : gettype($facilityChoicesTypeRoomPricesItem)), __LINE__);
            }
        }
        $this->RoomPrices = $roomPrices;
        return $this;
    }
    /**
     * Add item to RoomPrices value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomPrices $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FacilityChoicesType
     */
    public function addToRoomPrices(\Devlabs91\GenericOtaHotelApiService\StructType\RoomPrices $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RoomPrices) {
            throw new \InvalidArgumentException(sprintf('The RoomPrices property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RoomPrices, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomPrices[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FacilityChoicesType
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
