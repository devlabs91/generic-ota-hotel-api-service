<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationAdditionalDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleLocationAdditionalDetailsType complex type defines the supplemental information that describes a vehicle rental facility. Such information may include the operation schedules and services offered.
 * @subpackage Structs
 */
class VehicleLocationAdditionalDetailsType extends AbstractStructBase
{
    /**
     * The VehRentLocInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehRentLocInfos
     */
    public $VehRentLocInfos;
    /**
     * The ParkLocation
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive information about where the vehicles are parked.
     * - minOccurs: 0
     * @var mixed
     */
    public $ParkLocation;
    /**
     * The CounterLocation
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive information about where the rental counter is located.
     * - minOccurs: 0
     * @var mixed
     */
    public $CounterLocation;
    /**
     * The OperationSchedules
     * Meta informations extracted from the WSDL
     * - documentation: A collection of operation schedules, used to define the hours of operation for this rental facility.
     * - minOccurs: 0
     * @var mixed
     */
    public $OperationSchedules;
    /**
     * The Shuttle
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Shuttle
     */
    public $Shuttle;
    /**
     * The OneWayDropLocations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocations
     */
    public $OneWayDropLocations;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleLocationAdditionalDetailsType
     * @uses VehicleLocationAdditionalDetailsType::setVehRentLocInfos()
     * @uses VehicleLocationAdditionalDetailsType::setParkLocation()
     * @uses VehicleLocationAdditionalDetailsType::setCounterLocation()
     * @uses VehicleLocationAdditionalDetailsType::setOperationSchedules()
     * @uses VehicleLocationAdditionalDetailsType::setShuttle()
     * @uses VehicleLocationAdditionalDetailsType::setOneWayDropLocations()
     * @uses VehicleLocationAdditionalDetailsType::setTPA_Extensions()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehRentLocInfos $vehRentLocInfos
     * @param mixed $parkLocation
     * @param mixed $counterLocation
     * @param mixed $operationSchedules
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Shuttle $shuttle
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocations $oneWayDropLocations
     * @param mixed $tPA_Extensions
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\VehRentLocInfos $vehRentLocInfos = null, $parkLocation = null, $counterLocation = null, $operationSchedules = null, \Devlabs91\GenericOtaHotelApiService\StructType\Shuttle $shuttle = null, \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocations $oneWayDropLocations = null, $tPA_Extensions = null)
    {
        $this
            ->setVehRentLocInfos($vehRentLocInfos)
            ->setParkLocation($parkLocation)
            ->setCounterLocation($counterLocation)
            ->setOperationSchedules($operationSchedules)
            ->setShuttle($shuttle)
            ->setOneWayDropLocations($oneWayDropLocations)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get VehRentLocInfos value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehRentLocInfos|null
     */
    public function getVehRentLocInfos()
    {
        return $this->VehRentLocInfos;
    }
    /**
     * Set VehRentLocInfos value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehRentLocInfos $vehRentLocInfos
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setVehRentLocInfos(\Devlabs91\GenericOtaHotelApiService\StructType\VehRentLocInfos $vehRentLocInfos = null)
    {
        $this->VehRentLocInfos = $vehRentLocInfos;
        return $this;
    }
    /**
     * Get ParkLocation value
     * @return mixed|null
     */
    public function getParkLocation()
    {
        return $this->ParkLocation;
    }
    /**
     * Set ParkLocation value
     * @param mixed $parkLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setParkLocation($parkLocation = null)
    {
        $this->ParkLocation = $parkLocation;
        return $this;
    }
    /**
     * Get CounterLocation value
     * @return mixed|null
     */
    public function getCounterLocation()
    {
        return $this->CounterLocation;
    }
    /**
     * Set CounterLocation value
     * @param mixed $counterLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setCounterLocation($counterLocation = null)
    {
        $this->CounterLocation = $counterLocation;
        return $this;
    }
    /**
     * Get OperationSchedules value
     * @return mixed|null
     */
    public function getOperationSchedules()
    {
        return $this->OperationSchedules;
    }
    /**
     * Set OperationSchedules value
     * @param mixed $operationSchedules
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setOperationSchedules($operationSchedules = null)
    {
        $this->OperationSchedules = $operationSchedules;
        return $this;
    }
    /**
     * Get Shuttle value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Shuttle|null
     */
    public function getShuttle()
    {
        return $this->Shuttle;
    }
    /**
     * Set Shuttle value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Shuttle $shuttle
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setShuttle(\Devlabs91\GenericOtaHotelApiService\StructType\Shuttle $shuttle = null)
    {
        $this->Shuttle = $shuttle;
        return $this;
    }
    /**
     * Get OneWayDropLocations value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocations|null
     */
    public function getOneWayDropLocations()
    {
        return $this->OneWayDropLocations;
    }
    /**
     * Set OneWayDropLocations value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocations $oneWayDropLocations
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setOneWayDropLocations(\Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocations $oneWayDropLocations = null)
    {
        $this->OneWayDropLocations = $oneWayDropLocations;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationAdditionalDetailsType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationAdditionalDetailsType
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
