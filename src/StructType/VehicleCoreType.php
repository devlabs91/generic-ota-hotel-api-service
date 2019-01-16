<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleCoreType complex type identifies the core data that is used to describe a vehicle.
 * @subpackage Structs
 */
class VehicleCoreType extends AbstractStructBase
{
    /**
     * The VehType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehType
     */
    public $VehType;
    /**
     * The VehClass
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehClass
     */
    public $VehClass;
    /**
     * The AirConditionInd
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $AirConditionInd;
    /**
     * The TransmissionType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $TransmissionType;
    /**
     * The FuelType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $FuelType;
    /**
     * The DriveType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $DriveType;
    /**
     * Constructor method for VehicleCoreType
     * @uses VehicleCoreType::setVehType()
     * @uses VehicleCoreType::setVehClass()
     * @uses VehicleCoreType::setAirConditionInd()
     * @uses VehicleCoreType::setTransmissionType()
     * @uses VehicleCoreType::setFuelType()
     * @uses VehicleCoreType::setDriveType()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehType $vehType
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehClass $vehClass
     * @param bool $airConditionInd
     * @param string $transmissionType
     * @param string $fuelType
     * @param string $driveType
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\VehType $vehType = null, \Devlabs91\GenericOtaHotelApiService\StructType\VehClass $vehClass = null, $airConditionInd = null, $transmissionType = null, $fuelType = null, $driveType = null)
    {
        $this
            ->setVehType($vehType)
            ->setVehClass($vehClass)
            ->setAirConditionInd($airConditionInd)
            ->setTransmissionType($transmissionType)
            ->setFuelType($fuelType)
            ->setDriveType($driveType);
    }
    /**
     * Get VehType value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehType|null
     */
    public function getVehType()
    {
        return $this->VehType;
    }
    /**
     * Set VehType value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehType $vehType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCoreType
     */
    public function setVehType(\Devlabs91\GenericOtaHotelApiService\StructType\VehType $vehType = null)
    {
        $this->VehType = $vehType;
        return $this;
    }
    /**
     * Get VehClass value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehClass|null
     */
    public function getVehClass()
    {
        return $this->VehClass;
    }
    /**
     * Set VehClass value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehClass $vehClass
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCoreType
     */
    public function setVehClass(\Devlabs91\GenericOtaHotelApiService\StructType\VehClass $vehClass = null)
    {
        $this->VehClass = $vehClass;
        return $this;
    }
    /**
     * Get AirConditionInd value
     * @return bool|null
     */
    public function getAirConditionInd()
    {
        return $this->AirConditionInd;
    }
    /**
     * Set AirConditionInd value
     * @param bool $airConditionInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCoreType
     */
    public function setAirConditionInd($airConditionInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($airConditionInd) && !is_bool($airConditionInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($airConditionInd)), __LINE__);
        }
        $this->AirConditionInd = $airConditionInd;
        return $this;
    }
    /**
     * Get TransmissionType value
     * @return string|null
     */
    public function getTransmissionType()
    {
        return $this->TransmissionType;
    }
    /**
     * Set TransmissionType value
     * @param string $transmissionType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCoreType
     */
    public function setTransmissionType($transmissionType = null)
    {
        // validation for constraint: string
        if (!is_null($transmissionType) && !is_string($transmissionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transmissionType)), __LINE__);
        }
        $this->TransmissionType = $transmissionType;
        return $this;
    }
    /**
     * Get FuelType value
     * @return string|null
     */
    public function getFuelType()
    {
        return $this->FuelType;
    }
    /**
     * Set FuelType value
     * @param string $fuelType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCoreType
     */
    public function setFuelType($fuelType = null)
    {
        // validation for constraint: string
        if (!is_null($fuelType) && !is_string($fuelType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fuelType)), __LINE__);
        }
        $this->FuelType = $fuelType;
        return $this;
    }
    /**
     * Get DriveType value
     * @return string|null
     */
    public function getDriveType()
    {
        return $this->DriveType;
    }
    /**
     * Set DriveType value
     * @param string $driveType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCoreType
     */
    public function setDriveType($driveType = null)
    {
        // validation for constraint: string
        if (!is_null($driveType) && !is_string($driveType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($driveType)), __LINE__);
        }
        $this->DriveType = $driveType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCoreType
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
