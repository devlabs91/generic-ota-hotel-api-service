<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomProfiles StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of RoomProfile elements | A collection of RoomProfile elements
 * @subpackage Structs
 */
class RoomProfiles extends AbstractStructBase
{
    /**
     * The RoomProfile
     * Meta informations extracted from the WSDL
     * - documentation: Details of passengers and amenities for a room.
     * - maxOccurs: 9
     * @var mixed[]
     */
    public $RoomProfile;
    /**
     * Constructor method for RoomProfiles
     * @uses RoomProfiles::setRoomProfile()
     * @param mixed[] $roomProfile
     */
    public function __construct(array $roomProfile = array())
    {
        $this
            ->setRoomProfile($roomProfile);
    }
    /**
     * Get RoomProfile value
     * @return mixed[]|null
     */
    public function getRoomProfile()
    {
        return $this->RoomProfile;
    }
    /**
     * Set RoomProfile value
     * @throws \InvalidArgumentException
     * @param mixed[] $roomProfile
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfiles
     */
    public function setRoomProfile(array $roomProfile = array())
    {
        foreach ($roomProfile as $roomProfilesRoomProfileItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RoomProfile property can only contain items of anyType, "%s" given', is_object($roomProfilesRoomProfileItem) ? get_class($roomProfilesRoomProfileItem) : gettype($roomProfilesRoomProfileItem)), __LINE__);
            }
        }
        $this->RoomProfile = $roomProfile;
        return $this;
    }
    /**
     * Add item to RoomProfile value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfiles
     */
    public function addToRoomProfile($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RoomProfile property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomProfile[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomProfiles
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
