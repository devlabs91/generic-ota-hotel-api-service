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
     * - documentation: Type of vehicle, for example, truck, car
     * - minOccurs: 0
     * @var mixed
     */
    public $VehType;
    /**
     * The VehClass
     * Meta informations extracted from the WSDL
     * - documentation: Class of vehicle, for example, intermediate, compact
     * - minOccurs: 0
     * @var mixed
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
     * Constructor method for VehicleCoreType
     * @uses VehicleCoreType::setVehType()
     * @uses VehicleCoreType::setVehClass()
     * @uses VehicleCoreType::setAirConditionInd()
     * @uses VehicleCoreType::setTransmissionType()
     * @param mixed $vehType
     * @param mixed $vehClass
     * @param bool $airConditionInd
     * @param string $transmissionType
     */
    public function __construct($vehType = null, $vehClass = null, $airConditionInd = null, $transmissionType = null)
    {
        $this
            ->setVehType($vehType)
            ->setVehClass($vehClass)
            ->setAirConditionInd($airConditionInd)
            ->setTransmissionType($transmissionType);
    }
    /**
     * Get VehType value
     * @return mixed|null
     */
    public function getVehType()
    {
        return $this->VehType;
    }
    /**
     * Set VehType value
     * @param mixed $vehType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCoreType
     */
    public function setVehType($vehType = null)
    {
        $this->VehType = $vehType;
        return $this;
    }
    /**
     * Get VehClass value
     * @return mixed|null
     */
    public function getVehClass()
    {
        return $this->VehClass;
    }
    /**
     * Set VehClass value
     * @param mixed $vehClass
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCoreType
     */
    public function setVehClass($vehClass = null)
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
