<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleAvailVendorInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleAvailVendorInfoType complex type identifies the data that describes supplemental information relevant to a vendor and made available at the time that availability and rates are checked.
 * @subpackage Structs
 */
class VehicleAvailVendorInfoType extends AbstractStructBase
{
    /**
     * The VendorMessages
     * Meta informations extracted from the WSDL
     * - documentation: A collection of free-format messages associated with this vendor.
     * - minOccurs: 0
     * @var mixed
     */
    public $VendorMessages;
    /**
     * The OffLocServices
     * Meta informations extracted from the WSDL
     * - documentation: Information on off-airport location services, for example, vehicle delivery, customer pickup, along with the associated price.
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var mixed[]
     */
    public $OffLocServices;
    /**
     * The PaymentRules
     * Meta informations extracted from the WSDL
     * - documentation: A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable, regardless of the vehicle.
     * - minOccurs: 0
     * @var mixed
     */
    public $PaymentRules;
    /**
     * The LocationDetails
     * Meta informations extracted from the WSDL
     * - documentation: Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $LocationDetails;
    /**
     * The TourInfo
     * Meta informations extracted from the WSDL
     * - documentation: Details of a tour with which this availability information is associated. Availability and rate information may vary if associated with a tour.
     * - minOccurs: 0
     * @var mixed
     */
    public $TourInfo;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleAvailVendorInfoType
     * @uses VehicleAvailVendorInfoType::setVendorMessages()
     * @uses VehicleAvailVendorInfoType::setOffLocServices()
     * @uses VehicleAvailVendorInfoType::setPaymentRules()
     * @uses VehicleAvailVendorInfoType::setLocationDetails()
     * @uses VehicleAvailVendorInfoType::setTourInfo()
     * @uses VehicleAvailVendorInfoType::setTPA_Extensions()
     * @param mixed $vendorMessages
     * @param mixed[] $offLocServices
     * @param mixed $paymentRules
     * @param mixed[] $locationDetails
     * @param mixed $tourInfo
     * @param mixed $tPA_Extensions
     */
    public function __construct($vendorMessages = null, array $offLocServices = array(), $paymentRules = null, array $locationDetails = array(), $tourInfo = null, $tPA_Extensions = null)
    {
        $this
            ->setVendorMessages($vendorMessages)
            ->setOffLocServices($offLocServices)
            ->setPaymentRules($paymentRules)
            ->setLocationDetails($locationDetails)
            ->setTourInfo($tourInfo)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get VendorMessages value
     * @return mixed|null
     */
    public function getVendorMessages()
    {
        return $this->VendorMessages;
    }
    /**
     * Set VendorMessages value
     * @param mixed $vendorMessages
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailVendorInfoType
     */
    public function setVendorMessages($vendorMessages = null)
    {
        $this->VendorMessages = $vendorMessages;
        return $this;
    }
    /**
     * Get OffLocServices value
     * @return mixed[]|null
     */
    public function getOffLocServices()
    {
        return $this->OffLocServices;
    }
    /**
     * Set OffLocServices value
     * @throws \InvalidArgumentException
     * @param mixed[] $offLocServices
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailVendorInfoType
     */
    public function setOffLocServices(array $offLocServices = array())
    {
        foreach ($offLocServices as $vehicleAvailVendorInfoTypeOffLocServicesItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The OffLocServices property can only contain items of anyType, "%s" given', is_object($vehicleAvailVendorInfoTypeOffLocServicesItem) ? get_class($vehicleAvailVendorInfoTypeOffLocServicesItem) : gettype($vehicleAvailVendorInfoTypeOffLocServicesItem)), __LINE__);
            }
        }
        $this->OffLocServices = $offLocServices;
        return $this;
    }
    /**
     * Add item to OffLocServices value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailVendorInfoType
     */
    public function addToOffLocServices($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The OffLocServices property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OffLocServices[] = $item;
        return $this;
    }
    /**
     * Get PaymentRules value
     * @return mixed|null
     */
    public function getPaymentRules()
    {
        return $this->PaymentRules;
    }
    /**
     * Set PaymentRules value
     * @param mixed $paymentRules
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailVendorInfoType
     */
    public function setPaymentRules($paymentRules = null)
    {
        $this->PaymentRules = $paymentRules;
        return $this;
    }
    /**
     * Get LocationDetails value
     * @return mixed[]|null
     */
    public function getLocationDetails()
    {
        return $this->LocationDetails;
    }
    /**
     * Set LocationDetails value
     * @throws \InvalidArgumentException
     * @param mixed[] $locationDetails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailVendorInfoType
     */
    public function setLocationDetails(array $locationDetails = array())
    {
        foreach ($locationDetails as $vehicleAvailVendorInfoTypeLocationDetailsItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The LocationDetails property can only contain items of anyType, "%s" given', is_object($vehicleAvailVendorInfoTypeLocationDetailsItem) ? get_class($vehicleAvailVendorInfoTypeLocationDetailsItem) : gettype($vehicleAvailVendorInfoTypeLocationDetailsItem)), __LINE__);
            }
        }
        $this->LocationDetails = $locationDetails;
        return $this;
    }
    /**
     * Add item to LocationDetails value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailVendorInfoType
     */
    public function addToLocationDetails($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The LocationDetails property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LocationDetails[] = $item;
        return $this;
    }
    /**
     * Get TourInfo value
     * @return mixed|null
     */
    public function getTourInfo()
    {
        return $this->TourInfo;
    }
    /**
     * Set TourInfo value
     * @param mixed $tourInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailVendorInfoType
     */
    public function setTourInfo($tourInfo = null)
    {
        $this->TourInfo = $tourInfo;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailVendorInfoType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleAvailVendorInfoType
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
