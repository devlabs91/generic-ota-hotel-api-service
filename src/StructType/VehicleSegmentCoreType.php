<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleSegmentCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleSegmentCoreType complex type identifies the core, or common, data that descibes the information assocated with a vehicle segment. Such information is typically provided in a reservation.
 * @subpackage Structs
 */
class VehicleSegmentCoreType extends AbstractStructBase
{
    /**
     * The ConfID
     * Meta informations extracted from the WSDL
     * - documentation: A confirmation number by which this reservation can be uniquely identified
     * @var mixed
     */
    public $ConfID;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the vendor associated with this information
     * - minOccurs: 0
     * @var mixed
     */
    public $Vendor;
    /**
     * The VehRentalCore
     * Meta informations extracted from the WSDL
     * - documentation: Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     * @var mixed
     */
    public $VehRentalCore;
    /**
     * The Vehicle
     * Meta informations extracted from the WSDL
     * - documentation: Information on one specific vehicle along with detailed information on the charges associated with this vehicle.
     * @var mixed
     */
    public $Vehicle;
    /**
     * The RentalRate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate
     */
    public $RentalRate;
    /**
     * The PricedEquips
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips
     */
    public $PricedEquips;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Fees
     */
    public $Fees;
    /**
     * The TotalCharge
     * Meta informations extracted from the WSDL
     * - documentation: The total cost of this reservation, the sum of the individual charges, optional charges and associated fees.
     * - minOccurs: 0
     * @var mixed
     */
    public $TotalCharge;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleSegmentCoreType
     * @uses VehicleSegmentCoreType::setConfID()
     * @uses VehicleSegmentCoreType::setVendor()
     * @uses VehicleSegmentCoreType::setVehRentalCore()
     * @uses VehicleSegmentCoreType::setVehicle()
     * @uses VehicleSegmentCoreType::setRentalRate()
     * @uses VehicleSegmentCoreType::setPricedEquips()
     * @uses VehicleSegmentCoreType::setFees()
     * @uses VehicleSegmentCoreType::setTotalCharge()
     * @uses VehicleSegmentCoreType::setTPA_Extensions()
     * @param mixed $confID
     * @param mixed $vendor
     * @param mixed $vehRentalCore
     * @param mixed $vehicle
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate $rentalRate
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips $pricedEquips
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees
     * @param mixed $totalCharge
     * @param mixed $tPA_Extensions
     */
    public function __construct($confID = null, $vendor = null, $vehRentalCore = null, $vehicle = null, \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate $rentalRate = null, \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips $pricedEquips = null, \Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees = null, $totalCharge = null, $tPA_Extensions = null)
    {
        $this
            ->setConfID($confID)
            ->setVendor($vendor)
            ->setVehRentalCore($vehRentalCore)
            ->setVehicle($vehicle)
            ->setRentalRate($rentalRate)
            ->setPricedEquips($pricedEquips)
            ->setFees($fees)
            ->setTotalCharge($totalCharge)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get ConfID value
     * @return mixed|null
     */
    public function getConfID()
    {
        return $this->ConfID;
    }
    /**
     * Set ConfID value
     * @param mixed $confID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentCoreType
     */
    public function setConfID($confID = null)
    {
        $this->ConfID = $confID;
        return $this;
    }
    /**
     * Get Vendor value
     * @return mixed|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param mixed $vendor
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentCoreType
     */
    public function setVendor($vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get VehRentalCore value
     * @return mixed|null
     */
    public function getVehRentalCore()
    {
        return $this->VehRentalCore;
    }
    /**
     * Set VehRentalCore value
     * @param mixed $vehRentalCore
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentCoreType
     */
    public function setVehRentalCore($vehRentalCore = null)
    {
        $this->VehRentalCore = $vehRentalCore;
        return $this;
    }
    /**
     * Get Vehicle value
     * @return mixed|null
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }
    /**
     * Set Vehicle value
     * @param mixed $vehicle
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentCoreType
     */
    public function setVehicle($vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get RentalRate value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate|null
     */
    public function getRentalRate()
    {
        return $this->RentalRate;
    }
    /**
     * Set RentalRate value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate $rentalRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentCoreType
     */
    public function setRentalRate(\Devlabs91\GenericOtaHotelApiService\StructType\RentalRate $rentalRate = null)
    {
        $this->RentalRate = $rentalRate;
        return $this;
    }
    /**
     * Get PricedEquips value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips|null
     */
    public function getPricedEquips()
    {
        return $this->PricedEquips;
    }
    /**
     * Set PricedEquips value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips $pricedEquips
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentCoreType
     */
    public function setPricedEquips(\Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips $pricedEquips = null)
    {
        $this->PricedEquips = $pricedEquips;
        return $this;
    }
    /**
     * Get Fees value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fees|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentCoreType
     */
    public function setFees(\Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get TotalCharge value
     * @return mixed|null
     */
    public function getTotalCharge()
    {
        return $this->TotalCharge;
    }
    /**
     * Set TotalCharge value
     * @param mixed $totalCharge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentCoreType
     */
    public function setTotalCharge($totalCharge = null)
    {
        $this->TotalCharge = $totalCharge;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentCoreType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentCoreType
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
