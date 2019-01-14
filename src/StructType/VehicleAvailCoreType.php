<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAvailCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleAvailCoreType complex type identifies the data that describes common, or core, information made available as part of describing the availability and rate of one or more vehicles.
 * @subpackage Structs
 */
class VehicleAvailCoreType extends AbstractStructBase
{
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Status;
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
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate[]
     */
    public $RentalRate;
    /**
     * The TotalCharge
     * Meta informations extracted from the WSDL
     * - documentation: The anticipated total cost of a reservation, the sum of the individual charges, optional charges and associated fees.
     * - minOccurs: 0
     * @var mixed
     */
    public $TotalCharge;
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
     * The Reference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Reference
     */
    public $Reference;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleAvailCoreType
     * @uses VehicleAvailCoreType::setStatus()
     * @uses VehicleAvailCoreType::setVehicle()
     * @uses VehicleAvailCoreType::setRentalRate()
     * @uses VehicleAvailCoreType::setTotalCharge()
     * @uses VehicleAvailCoreType::setPricedEquips()
     * @uses VehicleAvailCoreType::setFees()
     * @uses VehicleAvailCoreType::setReference()
     * @uses VehicleAvailCoreType::setTPA_Extensions()
     * @param string $status
     * @param mixed $vehicle
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate[] $rentalRate
     * @param mixed $totalCharge
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips $pricedEquips
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Reference $reference
     * @param mixed $tPA_Extensions
     */
    public function __construct($status = null, $vehicle = null, array $rentalRate = array(), $totalCharge = null, \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips $pricedEquips = null, \Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees = null, \Devlabs91\GenericOtaHotelApiService\StructType\Reference $reference = null, $tPA_Extensions = null)
    {
        $this
            ->setStatus($status)
            ->setVehicle($vehicle)
            ->setRentalRate($rentalRate)
            ->setTotalCharge($totalCharge)
            ->setPricedEquips($pricedEquips)
            ->setFees($fees)
            ->setReference($reference)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function setVehicle($vehicle = null)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }
    /**
     * Get RentalRate value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate[]|null
     */
    public function getRentalRate()
    {
        return $this->RentalRate;
    }
    /**
     * Set RentalRate value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate[] $rentalRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function setRentalRate(array $rentalRate = array())
    {
        foreach ($rentalRate as $vehicleAvailCoreTypeRentalRateItem) {
            // validation for constraint: itemType
            if (!$vehicleAvailCoreTypeRentalRateItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate) {
                throw new \InvalidArgumentException(sprintf('The RentalRate property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate, "%s" given', is_object($vehicleAvailCoreTypeRentalRateItem) ? get_class($vehicleAvailCoreTypeRentalRateItem) : gettype($vehicleAvailCoreTypeRentalRateItem)), __LINE__);
            }
        }
        $this->RentalRate = $rentalRate;
        return $this;
    }
    /**
     * Add item to RentalRate value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function addToRentalRate(\Devlabs91\GenericOtaHotelApiService\StructType\RentalRate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate) {
            throw new \InvalidArgumentException(sprintf('The RentalRate property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RentalRate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RentalRate[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function setTotalCharge($totalCharge = null)
    {
        $this->TotalCharge = $totalCharge;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function setFees(\Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get Reference value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Reference|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Reference $reference
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function setReference(\Devlabs91\GenericOtaHotelApiService\StructType\Reference $reference = null)
    {
        $this->Reference = $reference;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
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
