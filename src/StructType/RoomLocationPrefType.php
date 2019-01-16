<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomLocationPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for hotel room locations. | Identifies the customer's level of preference for the hotel room location identified. | Used for Character Strings, length 1 to 128.
 * - maxLength: 128
 * - minLength: 1
 * @subpackage Structs
 */
class RoomLocationPrefType extends AbstractStructBase
{
    /**
     * The RoomLocationType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the location of the room within the property. Refer to OpenTravel Code List Room Location Type (RLT).
     * @var string
     */
    public $RoomLocationType;
    /**
     * Constructor method for RoomLocationPrefType
     * @uses RoomLocationPrefType::setRoomLocationType()
     * @param string $roomLocationType
     */
    public function __construct($roomLocationType = null)
    {
        $this
            ->setRoomLocationType($roomLocationType);
    }
    /**
     * Get RoomLocationType value
     * @return string|null
     */
    public function getRoomLocationType()
    {
        return $this->RoomLocationType;
    }
    /**
     * Set RoomLocationType value
     * @param string $roomLocationType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomLocationPrefType
     */
    public function setRoomLocationType($roomLocationType = null)
    {
        // validation for constraint: string
        if (!is_null($roomLocationType) && !is_string($roomLocationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomLocationType)), __LINE__);
        }
        $this->RoomLocationType = $roomLocationType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomLocationPrefType
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
