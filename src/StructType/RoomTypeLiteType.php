<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomTypeLiteType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Summary version of the RoomTypeType, initially created for the Travel Itinerary Message set.
 * @subpackage Structs
 */
class RoomTypeLiteType extends AbstractStructBase
{
    /**
     * The RoomDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $RoomDescription;
    /**
     * The Amenity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Amenity;
    /**
     * The RoomTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Specfic system room type code, ex: A1K, A1Q etc.
     * - use: optional
     * @var string
     */
    public $RoomTypeCode;
    /**
     * The NumberOfUnits
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $NumberOfUnits;
    /**
     * Constructor method for RoomTypeLiteType
     * @uses RoomTypeLiteType::setRoomDescription()
     * @uses RoomTypeLiteType::setAmenity()
     * @uses RoomTypeLiteType::setRoomTypeCode()
     * @uses RoomTypeLiteType::setNumberOfUnits()
     * @param mixed $roomDescription
     * @param mixed[] $amenity
     * @param string $roomTypeCode
     * @param string $numberOfUnits
     */
    public function __construct($roomDescription = null, array $amenity = array(), $roomTypeCode = null, $numberOfUnits = null)
    {
        $this
            ->setRoomDescription($roomDescription)
            ->setAmenity($amenity)
            ->setRoomTypeCode($roomTypeCode)
            ->setNumberOfUnits($numberOfUnits);
    }
    /**
     * Get RoomDescription value
     * @return mixed|null
     */
    public function getRoomDescription()
    {
        return $this->RoomDescription;
    }
    /**
     * Set RoomDescription value
     * @param mixed $roomDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeLiteType
     */
    public function setRoomDescription($roomDescription = null)
    {
        $this->RoomDescription = $roomDescription;
        return $this;
    }
    /**
     * Get Amenity value
     * @return mixed[]|null
     */
    public function getAmenity()
    {
        return $this->Amenity;
    }
    /**
     * Set Amenity value
     * @throws \InvalidArgumentException
     * @param mixed[] $amenity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeLiteType
     */
    public function setAmenity(array $amenity = array())
    {
        foreach ($amenity as $roomTypeLiteTypeAmenityItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Amenity property can only contain items of anyType, "%s" given', is_object($roomTypeLiteTypeAmenityItem) ? get_class($roomTypeLiteTypeAmenityItem) : gettype($roomTypeLiteTypeAmenityItem)), __LINE__);
            }
        }
        $this->Amenity = $amenity;
        return $this;
    }
    /**
     * Add item to Amenity value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeLiteType
     */
    public function addToAmenity($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Amenity property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Amenity[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeLiteType
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
     * Get NumberOfUnits value
     * @return string|null
     */
    public function getNumberOfUnits()
    {
        return $this->NumberOfUnits;
    }
    /**
     * Set NumberOfUnits value
     * @param string $numberOfUnits
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeLiteType
     */
    public function setNumberOfUnits($numberOfUnits = null)
    {
        // validation for constraint: string
        if (!is_null($numberOfUnits) && !is_string($numberOfUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberOfUnits)), __LINE__);
        }
        $this->NumberOfUnits = $numberOfUnits;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypeLiteType
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
