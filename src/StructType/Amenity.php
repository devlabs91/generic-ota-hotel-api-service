<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Amenity StructType
 * Meta informations extracted from the WSDL
 * - documentation: AmenitityCode Attribute is used to hold actual amenity code. | This provides an area to pass amenity information. | Tangible room item(s) available to the guest such as newspaper, | May be used to give further detail on the code
 * (e.g. if bathroom amenities is selected additional information about what amenities are available in the guest room can be passed here) or to remove an obsolete item.
 * @subpackage Structs
 */
class Amenity extends RoomAmenityPrefType
{
    /**
     * The AmenityCode
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Room Amenity Type (RMA).
     * @var string
     */
    public $AmenityCode;
    /**
     * The PropertyAmenityType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the amenities offered by the hotel. Refer to OTA Code List Hotel Amenity Code (HAC).
     * - use: optional
     * @var string
     */
    public $PropertyAmenityType;
    /**
     * The OperationSchedules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules
     */
    public $OperationSchedules;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: This will allow for text descriptions to be sent with items such as kitchenette.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Description;
    /**
     * The RoomAmenityCode
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Room Amenity Type (RMA).
     * - use: optional
     * @var string
     */
    public $RoomAmenityCode;
    /**
     * Constructor method for Amenity
     * @uses Amenity::setAmenityCode()
     * @uses Amenity::setPropertyAmenityType()
     * @uses Amenity::setOperationSchedules()
     * @uses Amenity::setDescription()
     * @uses Amenity::setRoomAmenityCode()
     * @param string $amenityCode
     * @param string $propertyAmenityType
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules $operationSchedules
     * @param mixed[] $description
     * @param string $roomAmenityCode
     */
    public function __construct($amenityCode = null, $propertyAmenityType = null, \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules $operationSchedules = null, array $description = array(), $roomAmenityCode = null)
    {
        $this
            ->setAmenityCode($amenityCode)
            ->setPropertyAmenityType($propertyAmenityType)
            ->setOperationSchedules($operationSchedules)
            ->setDescription($description)
            ->setRoomAmenityCode($roomAmenityCode);
    }
    /**
     * Get AmenityCode value
     * @return string|null
     */
    public function getAmenityCode()
    {
        return $this->AmenityCode;
    }
    /**
     * Set AmenityCode value
     * @param string $amenityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
     */
    public function setAmenityCode($amenityCode = null)
    {
        // validation for constraint: string
        if (!is_null($amenityCode) && !is_string($amenityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amenityCode)), __LINE__);
        }
        $this->AmenityCode = $amenityCode;
        return $this;
    }
    /**
     * Get PropertyAmenityType value
     * @return string|null
     */
    public function getPropertyAmenityType()
    {
        return $this->PropertyAmenityType;
    }
    /**
     * Set PropertyAmenityType value
     * @param string $propertyAmenityType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
     */
    public function setPropertyAmenityType($propertyAmenityType = null)
    {
        // validation for constraint: string
        if (!is_null($propertyAmenityType) && !is_string($propertyAmenityType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($propertyAmenityType)), __LINE__);
        }
        $this->PropertyAmenityType = $propertyAmenityType;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules $operationSchedules
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
     */
    public function setOperationSchedules(\Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules $operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get Description value
     * @return mixed[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param mixed[] $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $amenityDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($amenityDescriptionItem) ? get_class($amenityDescriptionItem) : gettype($amenityDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
     */
    public function addToDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
    }
    /**
     * Get RoomAmenityCode value
     * @return string|null
     */
    public function getRoomAmenityCode()
    {
        return $this->RoomAmenityCode;
    }
    /**
     * Set RoomAmenityCode value
     * @param string $roomAmenityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
     */
    public function setRoomAmenityCode($roomAmenityCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomAmenityCode) && !is_string($roomAmenityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomAmenityCode)), __LINE__);
        }
        $this->RoomAmenityCode = $roomAmenityCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity
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
