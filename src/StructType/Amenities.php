<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Amenities StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of room level amenities. | A collection of available amenities. | A collection of amenity information. | Collection of room amenity items available to the guest.
 * @subpackage Structs
 */
class Amenities extends AbstractStructBase
{
    /**
     * The Amenity
     * Meta informations extracted from the WSDL
     * - documentation: Used to provide room amenity information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Amenity[]
     */
    public $Amenity;
    /**
     * Constructor method for Amenities
     * @uses Amenities::setAmenity()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Amenity[] $amenity
     */
    public function __construct(array $amenity = array())
    {
        $this
            ->setAmenity($amenity);
    }
    /**
     * Get Amenity value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenity[]|null
     */
    public function getAmenity()
    {
        return $this->Amenity;
    }
    /**
     * Set Amenity value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Amenity[] $amenity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenities
     */
    public function setAmenity(array $amenity = array())
    {
        foreach ($amenity as $amenitiesAmenityItem) {
            // validation for constraint: itemType
            if (!$amenitiesAmenityItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Amenity) {
                throw new \InvalidArgumentException(sprintf('The Amenity property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Amenity, "%s" given', is_object($amenitiesAmenityItem) ? get_class($amenitiesAmenityItem) : gettype($amenitiesAmenityItem)), __LINE__);
            }
        }
        $this->Amenity = $amenity;
        return $this;
    }
    /**
     * Add item to Amenity value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Amenity $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenities
     */
    public function addToAmenity(\Devlabs91\GenericOtaHotelApiService\StructType\Amenity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Amenity) {
            throw new \InvalidArgumentException(sprintf('The Amenity property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Amenity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Amenity[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Amenities
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
