<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OneWayDropLocations StructType
 * Meta informations extracted from the WSDL
 * - documentation: List of locations where one way drops are allowed based on pick-up location.
 * @subpackage Structs
 */
class OneWayDropLocations extends AbstractStructBase
{
    /**
     * The OneWayDropLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocation[]
     */
    public $OneWayDropLocation;
    /**
     * Constructor method for OneWayDropLocations
     * @uses OneWayDropLocations::setOneWayDropLocation()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocation[] $oneWayDropLocation
     */
    public function __construct(array $oneWayDropLocation = array())
    {
        $this
            ->setOneWayDropLocation($oneWayDropLocation);
    }
    /**
     * Get OneWayDropLocation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocation[]|null
     */
    public function getOneWayDropLocation()
    {
        return $this->OneWayDropLocation;
    }
    /**
     * Set OneWayDropLocation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocation[] $oneWayDropLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocations
     */
    public function setOneWayDropLocation(array $oneWayDropLocation = array())
    {
        foreach ($oneWayDropLocation as $oneWayDropLocationsOneWayDropLocationItem) {
            // validation for constraint: itemType
            if (!$oneWayDropLocationsOneWayDropLocationItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocation) {
                throw new \InvalidArgumentException(sprintf('The OneWayDropLocation property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocation, "%s" given', is_object($oneWayDropLocationsOneWayDropLocationItem) ? get_class($oneWayDropLocationsOneWayDropLocationItem) : gettype($oneWayDropLocationsOneWayDropLocationItem)), __LINE__);
            }
        }
        $this->OneWayDropLocation = $oneWayDropLocation;
        return $this;
    }
    /**
     * Add item to OneWayDropLocation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocation $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocations
     */
    public function addToOneWayDropLocation(\Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocation) {
            throw new \InvalidArgumentException(sprintf('The OneWayDropLocation property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OneWayDropLocation[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocations
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
