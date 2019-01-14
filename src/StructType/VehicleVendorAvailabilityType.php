<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleVendorAvailabilityType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleVendorAvailabilityType complex type identifies the data that describes the availability of one or more vehicles for a specific vendor, along with supplemental information about the vendor and the facilities of that vendor.
 * @subpackage Structs
 */
class VehicleVendorAvailabilityType extends AbstractStructBase
{
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - documentation: Information on the vendor associated with this availability of vehicles
     * - minOccurs: 0
     * @var mixed
     */
    public $Vendor;
    /**
     * The VehAvails
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehAvails
     */
    public $VehAvails;
    /**
     * The Info
     * Meta informations extracted from the WSDL
     * - documentation: Supplemental information associated with the vendor and the availability of the vehicles.
     * - minOccurs: 0
     * @var mixed
     */
    public $Info;
    /**
     * Constructor method for VehicleVendorAvailabilityType
     * @uses VehicleVendorAvailabilityType::setVendor()
     * @uses VehicleVendorAvailabilityType::setVehAvails()
     * @uses VehicleVendorAvailabilityType::setInfo()
     * @param mixed $vendor
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehAvails $vehAvails
     * @param mixed $info
     */
    public function __construct($vendor = null, \Devlabs91\GenericOtaHotelApiService\StructType\VehAvails $vehAvails = null, $info = null)
    {
        $this
            ->setVendor($vendor)
            ->setVehAvails($vehAvails)
            ->setInfo($info);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleVendorAvailabilityType
     */
    public function setVendor($vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get VehAvails value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehAvails|null
     */
    public function getVehAvails()
    {
        return $this->VehAvails;
    }
    /**
     * Set VehAvails value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehAvails $vehAvails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleVendorAvailabilityType
     */
    public function setVehAvails(\Devlabs91\GenericOtaHotelApiService\StructType\VehAvails $vehAvails = null)
    {
        $this->VehAvails = $vehAvails;
        return $this;
    }
    /**
     * Get Info value
     * @return mixed|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param mixed $info
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleVendorAvailabilityType
     */
    public function setInfo($info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleVendorAvailabilityType
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
