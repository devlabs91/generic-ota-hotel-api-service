<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAvailRQCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleAvailRQCoreType complex type identifies the data that is common in a request for vehicle availability and rates.
 * @subpackage Structs
 */
class VehicleAvailRQCoreType extends AbstractStructBase
{
    /**
     * The VehRentalCore
     * Meta informations extracted from the WSDL
     * - documentation: Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     * @var mixed
     */
    public $VehRentalCore;
    /**
     * The VendorPrefs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VendorPrefs
     */
    public $VendorPrefs;
    /**
     * The VehPrefs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehPrefs
     */
    public $VehPrefs;
    /**
     * The DriverType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\DriverType[]
     */
    public $DriverType;
    /**
     * The RateQualifier
     * Meta informations extracted from the WSDL
     * - maxOccurs: 13
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier[]
     */
    public $RateQualifier;
    /**
     * The RateRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RateRange
     */
    public $RateRange;
    /**
     * The SpecialEquipPrefs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPrefs
     */
    public $SpecialEquipPrefs;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Status;
    /**
     * The TargetSource
     * Meta informations extracted from the WSDL
     * - documentation: To specify from which source the information being requested should be obtained, e.g., vendor, GDS system, etc.
     * - use: optional
     * @var string
     */
    public $TargetSource;
    /**
     * Constructor method for VehicleAvailRQCoreType
     * @uses VehicleAvailRQCoreType::setVehRentalCore()
     * @uses VehicleAvailRQCoreType::setVendorPrefs()
     * @uses VehicleAvailRQCoreType::setVehPrefs()
     * @uses VehicleAvailRQCoreType::setDriverType()
     * @uses VehicleAvailRQCoreType::setRateQualifier()
     * @uses VehicleAvailRQCoreType::setRateRange()
     * @uses VehicleAvailRQCoreType::setSpecialEquipPrefs()
     * @uses VehicleAvailRQCoreType::setTPA_Extensions()
     * @uses VehicleAvailRQCoreType::setStatus()
     * @uses VehicleAvailRQCoreType::setTargetSource()
     * @param mixed $vehRentalCore
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VendorPrefs $vendorPrefs
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehPrefs $vehPrefs
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DriverType[] $driverType
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier[] $rateQualifier
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateRange $rateRange
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPrefs $specialEquipPrefs
     * @param mixed $tPA_Extensions
     * @param string $status
     * @param string $targetSource
     */
    public function __construct($vehRentalCore = null, \Devlabs91\GenericOtaHotelApiService\StructType\VendorPrefs $vendorPrefs = null, \Devlabs91\GenericOtaHotelApiService\StructType\VehPrefs $vehPrefs = null, array $driverType = array(), array $rateQualifier = array(), \Devlabs91\GenericOtaHotelApiService\StructType\RateRange $rateRange = null, \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPrefs $specialEquipPrefs = null, $tPA_Extensions = null, $status = null, $targetSource = null)
    {
        $this
            ->setVehRentalCore($vehRentalCore)
            ->setVendorPrefs($vendorPrefs)
            ->setVehPrefs($vehPrefs)
            ->setDriverType($driverType)
            ->setRateQualifier($rateQualifier)
            ->setRateRange($rateRange)
            ->setSpecialEquipPrefs($specialEquipPrefs)
            ->setTPA_Extensions($tPA_Extensions)
            ->setStatus($status)
            ->setTargetSource($targetSource);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQCoreType
     */
    public function setVehRentalCore($vehRentalCore = null)
    {
        $this->VehRentalCore = $vehRentalCore;
        return $this;
    }
    /**
     * Get VendorPrefs value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorPrefs|null
     */
    public function getVendorPrefs()
    {
        return $this->VendorPrefs;
    }
    /**
     * Set VendorPrefs value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VendorPrefs $vendorPrefs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQCoreType
     */
    public function setVendorPrefs(\Devlabs91\GenericOtaHotelApiService\StructType\VendorPrefs $vendorPrefs = null)
    {
        $this->VendorPrefs = $vendorPrefs;
        return $this;
    }
    /**
     * Get VehPrefs value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehPrefs|null
     */
    public function getVehPrefs()
    {
        return $this->VehPrefs;
    }
    /**
     * Set VehPrefs value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehPrefs $vehPrefs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQCoreType
     */
    public function setVehPrefs(\Devlabs91\GenericOtaHotelApiService\StructType\VehPrefs $vehPrefs = null)
    {
        $this->VehPrefs = $vehPrefs;
        return $this;
    }
    /**
     * Get DriverType value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DriverType[]|null
     */
    public function getDriverType()
    {
        return $this->DriverType;
    }
    /**
     * Set DriverType value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DriverType[] $driverType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQCoreType
     */
    public function setDriverType(array $driverType = array())
    {
        foreach ($driverType as $vehicleAvailRQCoreTypeDriverTypeItem) {
            // validation for constraint: itemType
            if (!$vehicleAvailRQCoreTypeDriverTypeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\DriverType) {
                throw new \InvalidArgumentException(sprintf('The DriverType property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\DriverType, "%s" given', is_object($vehicleAvailRQCoreTypeDriverTypeItem) ? get_class($vehicleAvailRQCoreTypeDriverTypeItem) : gettype($vehicleAvailRQCoreTypeDriverTypeItem)), __LINE__);
            }
        }
        $this->DriverType = $driverType;
        return $this;
    }
    /**
     * Add item to DriverType value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DriverType $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQCoreType
     */
    public function addToDriverType(\Devlabs91\GenericOtaHotelApiService\StructType\DriverType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\DriverType) {
            throw new \InvalidArgumentException(sprintf('The DriverType property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\DriverType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DriverType[] = $item;
        return $this;
    }
    /**
     * Get RateQualifier value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier[]|null
     */
    public function getRateQualifier()
    {
        return $this->RateQualifier;
    }
    /**
     * Set RateQualifier value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier[] $rateQualifier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQCoreType
     */
    public function setRateQualifier(array $rateQualifier = array())
    {
        foreach ($rateQualifier as $vehicleAvailRQCoreTypeRateQualifierItem) {
            // validation for constraint: itemType
            if (!$vehicleAvailRQCoreTypeRateQualifierItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier) {
                throw new \InvalidArgumentException(sprintf('The RateQualifier property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier, "%s" given', is_object($vehicleAvailRQCoreTypeRateQualifierItem) ? get_class($vehicleAvailRQCoreTypeRateQualifierItem) : gettype($vehicleAvailRQCoreTypeRateQualifierItem)), __LINE__);
            }
        }
        $this->RateQualifier = $rateQualifier;
        return $this;
    }
    /**
     * Add item to RateQualifier value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQCoreType
     */
    public function addToRateQualifier(\Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier) {
            throw new \InvalidArgumentException(sprintf('The RateQualifier property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RateQualifier, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RateQualifier[] = $item;
        return $this;
    }
    /**
     * Get RateRange value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRange|null
     */
    public function getRateRange()
    {
        return $this->RateRange;
    }
    /**
     * Set RateRange value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateRange $rateRange
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQCoreType
     */
    public function setRateRange(\Devlabs91\GenericOtaHotelApiService\StructType\RateRange $rateRange = null)
    {
        $this->RateRange = $rateRange;
        return $this;
    }
    /**
     * Get SpecialEquipPrefs value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPrefs|null
     */
    public function getSpecialEquipPrefs()
    {
        return $this->SpecialEquipPrefs;
    }
    /**
     * Set SpecialEquipPrefs value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPrefs $specialEquipPrefs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQCoreType
     */
    public function setSpecialEquipPrefs(\Devlabs91\GenericOtaHotelApiService\StructType\SpecialEquipPrefs $specialEquipPrefs = null)
    {
        $this->SpecialEquipPrefs = $specialEquipPrefs;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQCoreType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQCoreType
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
     * Get TargetSource value
     * @return string|null
     */
    public function getTargetSource()
    {
        return $this->TargetSource;
    }
    /**
     * Set TargetSource value
     * @param string $targetSource
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQCoreType
     */
    public function setTargetSource($targetSource = null)
    {
        // validation for constraint: string
        if (!is_null($targetSource) && !is_string($targetSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($targetSource)), __LINE__);
        }
        $this->TargetSource = $targetSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRQCoreType
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
