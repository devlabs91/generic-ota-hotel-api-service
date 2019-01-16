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
     * - documentation: Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate. This element may repeat to allow
     * different distances to be made available for different charges. For example, $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $RentalRate;
    /**
     * The TotalCharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge[]
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
     * The Vendor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Vendor
     */
    public $Vendor;
    /**
     * The VendorLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VendorLocation
     */
    public $VendorLocation;
    /**
     * The DropOffLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\DropOffLocation
     */
    public $DropOffLocation;
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Discount[]
     */
    public $Discount;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The IsAlternateInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, this vehicle is an alternate to what was requested.
     * - use: optional
     * @var bool
     */
    public $IsAlternateInd;
    /**
     * Constructor method for VehicleAvailCoreType
     * @uses VehicleAvailCoreType::setStatus()
     * @uses VehicleAvailCoreType::setVehicle()
     * @uses VehicleAvailCoreType::setRentalRate()
     * @uses VehicleAvailCoreType::setTotalCharge()
     * @uses VehicleAvailCoreType::setPricedEquips()
     * @uses VehicleAvailCoreType::setFees()
     * @uses VehicleAvailCoreType::setReference()
     * @uses VehicleAvailCoreType::setVendor()
     * @uses VehicleAvailCoreType::setVendorLocation()
     * @uses VehicleAvailCoreType::setDropOffLocation()
     * @uses VehicleAvailCoreType::setDiscount()
     * @uses VehicleAvailCoreType::setTPA_Extensions()
     * @uses VehicleAvailCoreType::setIsAlternateInd()
     * @param string $status
     * @param mixed $vehicle
     * @param mixed[] $rentalRate
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge[] $totalCharge
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips $pricedEquips
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Reference $reference
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Vendor $vendor
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VendorLocation $vendorLocation
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DropOffLocation $dropOffLocation
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Discount[] $discount
     * @param mixed $tPA_Extensions
     * @param bool $isAlternateInd
     */
    public function __construct($status = null, $vehicle = null, array $rentalRate = array(), array $totalCharge = array(), \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips $pricedEquips = null, \Devlabs91\GenericOtaHotelApiService\StructType\Fees $fees = null, \Devlabs91\GenericOtaHotelApiService\StructType\Reference $reference = null, \Devlabs91\GenericOtaHotelApiService\StructType\Vendor $vendor = null, \Devlabs91\GenericOtaHotelApiService\StructType\VendorLocation $vendorLocation = null, \Devlabs91\GenericOtaHotelApiService\StructType\DropOffLocation $dropOffLocation = null, array $discount = array(), $tPA_Extensions = null, $isAlternateInd = null)
    {
        $this
            ->setStatus($status)
            ->setVehicle($vehicle)
            ->setRentalRate($rentalRate)
            ->setTotalCharge($totalCharge)
            ->setPricedEquips($pricedEquips)
            ->setFees($fees)
            ->setReference($reference)
            ->setVendor($vendor)
            ->setVendorLocation($vendorLocation)
            ->setDropOffLocation($dropOffLocation)
            ->setDiscount($discount)
            ->setTPA_Extensions($tPA_Extensions)
            ->setIsAlternateInd($isAlternateInd);
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
     * @return mixed[]|null
     */
    public function getRentalRate()
    {
        return $this->RentalRate;
    }
    /**
     * Set RentalRate value
     * @throws \InvalidArgumentException
     * @param mixed[] $rentalRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function setRentalRate(array $rentalRate = array())
    {
        foreach ($rentalRate as $vehicleAvailCoreTypeRentalRateItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RentalRate property can only contain items of anyType, "%s" given', is_object($vehicleAvailCoreTypeRentalRateItem) ? get_class($vehicleAvailCoreTypeRentalRateItem) : gettype($vehicleAvailCoreTypeRentalRateItem)), __LINE__);
            }
        }
        $this->RentalRate = $rentalRate;
        return $this;
    }
    /**
     * Add item to RentalRate value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function addToRentalRate($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RentalRate property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RentalRate[] = $item;
        return $this;
    }
    /**
     * Get TotalCharge value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge[]|null
     */
    public function getTotalCharge()
    {
        return $this->TotalCharge;
    }
    /**
     * Set TotalCharge value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge[] $totalCharge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function setTotalCharge(array $totalCharge = array())
    {
        foreach ($totalCharge as $vehicleAvailCoreTypeTotalChargeItem) {
            // validation for constraint: itemType
            if (!$vehicleAvailCoreTypeTotalChargeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge) {
                throw new \InvalidArgumentException(sprintf('The TotalCharge property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge, "%s" given', is_object($vehicleAvailCoreTypeTotalChargeItem) ? get_class($vehicleAvailCoreTypeTotalChargeItem) : gettype($vehicleAvailCoreTypeTotalChargeItem)), __LINE__);
            }
        }
        $this->TotalCharge = $totalCharge;
        return $this;
    }
    /**
     * Add item to TotalCharge value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function addToTotalCharge(\Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge) {
            throw new \InvalidArgumentException(sprintf('The TotalCharge property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TotalCharge[] = $item;
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
     * Get Vendor value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Vendor|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Vendor $vendor
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function setVendor(\Devlabs91\GenericOtaHotelApiService\StructType\Vendor $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get VendorLocation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorLocation|null
     */
    public function getVendorLocation()
    {
        return $this->VendorLocation;
    }
    /**
     * Set VendorLocation value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VendorLocation $vendorLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function setVendorLocation(\Devlabs91\GenericOtaHotelApiService\StructType\VendorLocation $vendorLocation = null)
    {
        $this->VendorLocation = $vendorLocation;
        return $this;
    }
    /**
     * Get DropOffLocation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DropOffLocation|null
     */
    public function getDropOffLocation()
    {
        return $this->DropOffLocation;
    }
    /**
     * Set DropOffLocation value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DropOffLocation $dropOffLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function setDropOffLocation(\Devlabs91\GenericOtaHotelApiService\StructType\DropOffLocation $dropOffLocation = null)
    {
        $this->DropOffLocation = $dropOffLocation;
        return $this;
    }
    /**
     * Get Discount value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Discount[]|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Discount[] $discount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function setDiscount(array $discount = array())
    {
        foreach ($discount as $vehicleAvailCoreTypeDiscountItem) {
            // validation for constraint: itemType
            if (!$vehicleAvailCoreTypeDiscountItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Discount) {
                throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Discount, "%s" given', is_object($vehicleAvailCoreTypeDiscountItem) ? get_class($vehicleAvailCoreTypeDiscountItem) : gettype($vehicleAvailCoreTypeDiscountItem)), __LINE__);
            }
        }
        $this->Discount = $discount;
        return $this;
    }
    /**
     * Add item to Discount value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Discount $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function addToDiscount(\Devlabs91\GenericOtaHotelApiService\StructType\Discount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Discount) {
            throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Discount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Discount[] = $item;
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
     * Get IsAlternateInd value
     * @return bool|null
     */
    public function getIsAlternateInd()
    {
        return $this->IsAlternateInd;
    }
    /**
     * Set IsAlternateInd value
     * @param bool $isAlternateInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailCoreType
     */
    public function setIsAlternateInd($isAlternateInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAlternateInd) && !is_bool($isAlternateInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAlternateInd)), __LINE__);
        }
        $this->IsAlternateInd = $isAlternateInd;
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
