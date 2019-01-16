<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehiclePrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehiclePrefType complex type defines the information that is used when defining a preference of a vehicle. | Code used to identify the vehicle. May be used in place of VehicleCoreType. Typically a SIPP code would be passed here.
 * CodeContext Identifies the source authority for the code (e.g., SIPP).
 * @subpackage Structs
 */
class VehiclePrefType extends VehicleCoreType
{
    /**
     * The VehMakeModel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehMakeModel
     */
    public $VehMakeModel;
    /**
     * The TypePref
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $TypePref;
    /**
     * The ClassPref
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ClassPref;
    /**
     * The AirConditionPref
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AirConditionPref;
    /**
     * The TransmissionPref
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $TransmissionPref;
    /**
     * The VendorCarType
     * Meta informations extracted from the WSDL
     * - documentation: An internal car type assigned by the vendor. This is not the SIPP code.
     * - use: optional
     * @var string
     */
    public $VendorCarType;
    /**
     * The VehicleQty
     * Meta informations extracted from the WSDL
     * - documentation: The total number of cars a customer is eventually interested in reserving. This is not used by suppliers and is in no way intended to imply that multiple cars may be booked in a single reservation.
     * - use: optional
     * @var int
     */
    public $VehicleQty;
    /**
     * Constructor method for VehiclePrefType
     * @uses VehiclePrefType::setVehMakeModel()
     * @uses VehiclePrefType::setTypePref()
     * @uses VehiclePrefType::setClassPref()
     * @uses VehiclePrefType::setAirConditionPref()
     * @uses VehiclePrefType::setTransmissionPref()
     * @uses VehiclePrefType::setVendorCarType()
     * @uses VehiclePrefType::setVehicleQty()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehMakeModel $vehMakeModel
     * @param string $typePref
     * @param string $classPref
     * @param string $airConditionPref
     * @param string $transmissionPref
     * @param string $vendorCarType
     * @param int $vehicleQty
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\VehMakeModel $vehMakeModel = null, $typePref = null, $classPref = null, $airConditionPref = null, $transmissionPref = null, $vendorCarType = null, $vehicleQty = null)
    {
        $this
            ->setVehMakeModel($vehMakeModel)
            ->setTypePref($typePref)
            ->setClassPref($classPref)
            ->setAirConditionPref($airConditionPref)
            ->setTransmissionPref($transmissionPref)
            ->setVendorCarType($vendorCarType)
            ->setVehicleQty($vehicleQty);
    }
    /**
     * Get VehMakeModel value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehMakeModel|null
     */
    public function getVehMakeModel()
    {
        return $this->VehMakeModel;
    }
    /**
     * Set VehMakeModel value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehMakeModel $vehMakeModel
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType
     */
    public function setVehMakeModel(\Devlabs91\GenericOtaHotelApiService\StructType\VehMakeModel $vehMakeModel = null)
    {
        $this->VehMakeModel = $vehMakeModel;
        return $this;
    }
    /**
     * Get TypePref value
     * @return string|null
     */
    public function getTypePref()
    {
        return $this->TypePref;
    }
    /**
     * Set TypePref value
     * @param string $typePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType
     */
    public function setTypePref($typePref = null)
    {
        // validation for constraint: string
        if (!is_null($typePref) && !is_string($typePref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typePref)), __LINE__);
        }
        $this->TypePref = $typePref;
        return $this;
    }
    /**
     * Get ClassPref value
     * @return string|null
     */
    public function getClassPref()
    {
        return $this->ClassPref;
    }
    /**
     * Set ClassPref value
     * @param string $classPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType
     */
    public function setClassPref($classPref = null)
    {
        // validation for constraint: string
        if (!is_null($classPref) && !is_string($classPref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($classPref)), __LINE__);
        }
        $this->ClassPref = $classPref;
        return $this;
    }
    /**
     * Get AirConditionPref value
     * @return string|null
     */
    public function getAirConditionPref()
    {
        return $this->AirConditionPref;
    }
    /**
     * Set AirConditionPref value
     * @param string $airConditionPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType
     */
    public function setAirConditionPref($airConditionPref = null)
    {
        // validation for constraint: string
        if (!is_null($airConditionPref) && !is_string($airConditionPref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airConditionPref)), __LINE__);
        }
        $this->AirConditionPref = $airConditionPref;
        return $this;
    }
    /**
     * Get TransmissionPref value
     * @return string|null
     */
    public function getTransmissionPref()
    {
        return $this->TransmissionPref;
    }
    /**
     * Set TransmissionPref value
     * @param string $transmissionPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType
     */
    public function setTransmissionPref($transmissionPref = null)
    {
        // validation for constraint: string
        if (!is_null($transmissionPref) && !is_string($transmissionPref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transmissionPref)), __LINE__);
        }
        $this->TransmissionPref = $transmissionPref;
        return $this;
    }
    /**
     * Get VendorCarType value
     * @return string|null
     */
    public function getVendorCarType()
    {
        return $this->VendorCarType;
    }
    /**
     * Set VendorCarType value
     * @param string $vendorCarType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType
     */
    public function setVendorCarType($vendorCarType = null)
    {
        // validation for constraint: string
        if (!is_null($vendorCarType) && !is_string($vendorCarType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorCarType)), __LINE__);
        }
        $this->VendorCarType = $vendorCarType;
        return $this;
    }
    /**
     * Get VehicleQty value
     * @return int|null
     */
    public function getVehicleQty()
    {
        return $this->VehicleQty;
    }
    /**
     * Set VehicleQty value
     * @param int $vehicleQty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType
     */
    public function setVehicleQty($vehicleQty = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleQty) && !is_numeric($vehicleQty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleQty)), __LINE__);
        }
        $this->VehicleQty = $vehicleQty;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType
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
