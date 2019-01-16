<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vehicles StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of vehicles associated with additional driver information. | A collection of vehicle information associated to the age requirements. | A collection of vehicles for which this charge applies. This is to be used when the
 * charge is not the same charge for all vehicle types.
 * @subpackage Structs
 */
class Vehicles extends AbstractStructBase
{
    /**
     * The Vehicle
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle[]
     */
    public $Vehicle;
    /**
     * Constructor method for Vehicles
     * @uses Vehicles::setVehicle()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle[] $vehicle
     */
    public function __construct(array $vehicle = array())
    {
        $this
            ->setVehicle($vehicle);
    }
    /**
     * Get Vehicle value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle[]|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle[] $vehicle
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vehicles
     */
    public function setVehicle(array $vehicle = array())
    {
        foreach ($vehicle as $vehiclesVehicleItem) {
            // validation for constraint: itemType
            if (!$vehiclesVehicleItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle) {
                throw new \InvalidArgumentException(sprintf('The Vehicle property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle, "%s" given', is_object($vehiclesVehicleItem) ? get_class($vehiclesVehicleItem) : gettype($vehiclesVehicleItem)), __LINE__);
            }
        }
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Add item to Vehicle value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vehicles
     */
    public function addToVehicle(\Devlabs91\GenericOtaHotelApiService\StructType\Vehicle $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle) {
            throw new \InvalidArgumentException(sprintf('The Vehicle property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Vehicle, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Vehicle[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vehicles
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
