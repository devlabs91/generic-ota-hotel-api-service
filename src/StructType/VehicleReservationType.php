<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleReservationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleReservationType complex type identifies the data that describes a vehicle reservation. This data includes information on the customer(s) associated with the rental and details on the vehicle that is being rented. | Used to
 * specify the date a reservation was created and last modified.
 * @subpackage Structs
 */
class VehicleReservationType extends AbstractStructBase
{
    /**
     * The Customer
     * Meta informations extracted from the WSDL
     * - documentation: Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     * - minOccurs: 0
     * @var mixed
     */
    public $Customer;
    /**
     * The VehSegmentCore
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehSegmentCore
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
     * The ReservationStatus
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ReservationStatus;
    /**
     * Constructor method for VehicleReservationType
     * @uses VehicleReservationType::setCustomer()
     * @uses VehicleReservationType::setVehSegmentCore()
     * @uses VehicleReservationType::setVehSegmentInfo()
     * @uses VehicleReservationType::setReservationStatus()
     * @param mixed $customer
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehSegmentCore $vehSegmentCore
     * @param mixed $vehSegmentInfo
     * @param string $reservationStatus
     */
    public function __construct($customer = null, \Devlabs91\GenericOtaHotelApiService\StructType\VehSegmentCore $vehSegmentCore = null, $vehSegmentInfo = null, $reservationStatus = null)
    {
        $this
            ->setCustomer($customer)
            ->setVehSegmentCore($vehSegmentCore)
            ->setVehSegmentInfo($vehSegmentInfo)
            ->setReservationStatus($reservationStatus);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehSegmentCore|null
     */
    public function getVehSegmentCore()
    {
        return $this->VehSegmentCore;
    }
    /**
     * Set VehSegmentCore value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehSegmentCore $vehSegmentCore
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationType
     */
    public function setVehSegmentCore(\Devlabs91\GenericOtaHotelApiService\StructType\VehSegmentCore $vehSegmentCore = null)
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
     * Get ReservationStatus value
     * @return string|null
     */
    public function getReservationStatus()
    {
        return $this->ReservationStatus;
    }
    /**
     * Set ReservationStatus value
     * @param string $reservationStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleReservationType
     */
    public function setReservationStatus($reservationStatus = null)
    {
        // validation for constraint: string
        if (!is_null($reservationStatus) && !is_string($reservationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reservationStatus)), __LINE__);
        }
        $this->ReservationStatus = $reservationStatus;
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
