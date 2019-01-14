<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomAmenityPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for hotel room amenities. | Identifies the customer's level of preference for the hotel room amenity identified. | Used for Character Strings, length 0 to 128
 * - maxLength: 128
 * - minLength: 0
 * @subpackage Structs
 */
class RoomAmenityPrefType extends AbstractStructBase
{
    /**
     * The RoomAmenity
     * Meta informations extracted from the WSDL
     * - documentation: Identifes the types of room amenities offered by the property. Refer to OTA Code List Room Amenity Type (RMA).
     * - use: optional
     * @var string
     */
    public $RoomAmenity;
    /**
     * Constructor method for RoomAmenityPrefType
     * @uses RoomAmenityPrefType::setRoomAmenity()
     * @param string $roomAmenity
     */
    public function __construct($roomAmenity = null)
    {
        $this
            ->setRoomAmenity($roomAmenity);
    }
    /**
     * Get RoomAmenity value
     * @return string|null
     */
    public function getRoomAmenity()
    {
        return $this->RoomAmenity;
    }
    /**
     * Set RoomAmenity value
     * @param string $roomAmenity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomAmenityPrefType
     */
    public function setRoomAmenity($roomAmenity = null)
    {
        // validation for constraint: string
        if (!is_null($roomAmenity) && !is_string($roomAmenity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomAmenity)), __LINE__);
        }
        $this->RoomAmenity = $roomAmenity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomAmenityPrefType
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
