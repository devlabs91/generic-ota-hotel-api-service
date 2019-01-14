<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleTypeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleTypeType complex type defines what is referred to as the type of vehicle. The range of vehicles is divided into types to aid in clarifying a request and to aid in describing a specific vehicle. A vehicle type is defined to
 * be the combination of the vehicle category (Car, Truck, etc) and the number of doors on that vehicle.
 * @subpackage Structs
 */
class VehicleTypeType extends AbstractStructBase
{
    /**
     * The VehicleCategory
     * Meta informations extracted from the WSDL
     * - documentation: The VehicleCategory attribute provides the catgeory of a vehicle. Refer to OTA Code List Vehicle Category (VEC).
     * - use: required
     * @var string
     */
    public $VehicleCategory;
    /**
     * The DoorCount
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $DoorCount;
    /**
     * Constructor method for VehicleTypeType
     * @uses VehicleTypeType::setVehicleCategory()
     * @uses VehicleTypeType::setDoorCount()
     * @param string $vehicleCategory
     * @param string $doorCount
     */
    public function __construct($vehicleCategory = null, $doorCount = null)
    {
        $this
            ->setVehicleCategory($vehicleCategory)
            ->setDoorCount($doorCount);
    }
    /**
     * Get VehicleCategory value
     * @return string
     */
    public function getVehicleCategory()
    {
        return $this->VehicleCategory;
    }
    /**
     * Set VehicleCategory value
     * @param string $vehicleCategory
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleTypeType
     */
    public function setVehicleCategory($vehicleCategory = null)
    {
        // validation for constraint: string
        if (!is_null($vehicleCategory) && !is_string($vehicleCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vehicleCategory)), __LINE__);
        }
        $this->VehicleCategory = $vehicleCategory;
        return $this;
    }
    /**
     * Get DoorCount value
     * @return string|null
     */
    public function getDoorCount()
    {
        return $this->DoorCount;
    }
    /**
     * Set DoorCount value
     * @param string $doorCount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleTypeType
     */
    public function setDoorCount($doorCount = null)
    {
        // validation for constraint: string
        if (!is_null($doorCount) && !is_string($doorCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($doorCount)), __LINE__);
        }
        $this->DoorCount = $doorCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleTypeType
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
