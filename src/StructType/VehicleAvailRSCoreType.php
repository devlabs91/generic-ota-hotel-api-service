<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAvailRSCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleAvailRSType complex type identifies the data that is considered common when describing the availability and rates of rental vehicles.
 * @subpackage Structs
 */
class VehicleAvailRSCoreType extends AbstractStructBase
{
    /**
     * The VehRentalCore
     * Meta informations extracted from the WSDL
     * - documentation: Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     * @var mixed
     */
    public $VehRentalCore;
    /**
     * The VehVendorAvails
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehVendorAvails
     */
    public $VehVendorAvails;
    /**
     * Constructor method for VehicleAvailRSCoreType
     * @uses VehicleAvailRSCoreType::setVehRentalCore()
     * @uses VehicleAvailRSCoreType::setVehVendorAvails()
     * @param mixed $vehRentalCore
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehVendorAvails $vehVendorAvails
     */
    public function __construct($vehRentalCore = null, \Devlabs91\GenericOtaHotelApiService\StructType\VehVendorAvails $vehVendorAvails = null)
    {
        $this
            ->setVehRentalCore($vehRentalCore)
            ->setVehVendorAvails($vehVendorAvails);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRSCoreType
     */
    public function setVehRentalCore($vehRentalCore = null)
    {
        $this->VehRentalCore = $vehRentalCore;
        return $this;
    }
    /**
     * Get VehVendorAvails value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehVendorAvails|null
     */
    public function getVehVendorAvails()
    {
        return $this->VehVendorAvails;
    }
    /**
     * Set VehVendorAvails value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehVendorAvails $vehVendorAvails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRSCoreType
     */
    public function setVehVendorAvails(\Devlabs91\GenericOtaHotelApiService\StructType\VehVendorAvails $vehVendorAvails = null)
    {
        $this->VehVendorAvails = $vehVendorAvails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailRSCoreType
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
