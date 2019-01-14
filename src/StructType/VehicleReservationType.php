<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleReservationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleReservationType complex type identifies the data that describes a vehicle reservation. This data includes information on the customer(s) associated with the rental and details on the vehicle that is being rented.
 * @subpackage Structs
 */
class VehicleReservationType extends AbstractStructBase
{
    /**
     * The Customer
     * @var mixed
     */
    public $Customer;
    /**
     * The VehSegmentCore
     * Meta informations extracted from the WSDL
     * - documentation: Common, or core, information associated with a reservation period and a reserved vehicle.
     * @var mixed
     */
    public $VehSegmentCore;
    /**
     * The VehSegmentInfo
     * Meta informations extracted from the WSDL
     * - documentation: Supplemental information associated with a reservation period and a reserved vehicle.
     * - minOccurs: 0
     * @var mixed
     */
    public $VehSegmentInfo;
    /**
     * Constructor method for VehicleReservationType
     * @uses VehicleReservationType::setCustomer()
     * @uses VehicleReservationType::setVehSegmentCore()
     * @uses VehicleReservationType::setVehSegmentInfo()
     * @param mixed $customer
     * @param mixed $vehSegmentCore
     * @param mixed $vehSegmentInfo
     */
    public function __construct($customer = null, $vehSegmentCore = null, $vehSegmentInfo = null)
    {
        $this
            ->setCustomer($customer)
            ->setVehSegmentCore($vehSegmentCore)
            ->setVehSegmentInfo($vehSegmentInfo);
    }
    /**
     * Get Customer value
     * @return mixed|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param mixed $customer
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationType
     */
    public function setCustomer($customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get VehSegmentCore value
     * @return mixed|null
     */
    public function getVehSegmentCore()
    {
        return $this->VehSegmentCore;
    }
    /**
     * Set VehSegmentCore value
     * @param mixed $vehSegmentCore
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationType
     */
    public function setVehSegmentCore($vehSegmentCore = null)
    {
        $this->VehSegmentCore = $vehSegmentCore;
        return $this;
    }
    /**
     * Get VehSegmentInfo value
     * @return mixed|null
     */
    public function getVehSegmentInfo()
    {
        return $this->VehSegmentInfo;
    }
    /**
     * Set VehSegmentInfo value
     * @param mixed $vehSegmentInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationType
     */
    public function setVehSegmentInfo($vehSegmentInfo = null)
    {
        $this->VehSegmentInfo = $vehSegmentInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationType
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
