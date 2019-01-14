<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleSegmentAdditionalInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleSegmentAdditionalInfoType complex type identifies the data that descibes the supplemental information assocated with a vehicle segment. Such information may be associated with the reservation of a vehicle, but is not
 * normally included.
 * @subpackage Structs
 */
class VehicleSegmentAdditionalInfoType extends AbstractStructBase
{
    /**
     * The PaymentRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PaymentRules
     */
    public $PaymentRules;
    /**
     * The PricedCoverages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages
     */
    public $PricedCoverages;
    /**
     * The PricedOffLocService
     * Meta informations extracted from the WSDL
     * - documentation: Information on an off-location service associated with this reservation, along with the associated charge.
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PricedOffLocService;
    /**
     * The VendorMessages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VendorMessages
     */
    public $VendorMessages;
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
     * - documentation: Details of a tour associated with which this reservation information is associated. Rate information may vary if associated with a tour.
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
     * Constructor method for VehicleSegmentAdditionalInfoType
     * @uses VehicleSegmentAdditionalInfoType::setPaymentRules()
     * @uses VehicleSegmentAdditionalInfoType::setPricedCoverages()
     * @uses VehicleSegmentAdditionalInfoType::setPricedOffLocService()
     * @uses VehicleSegmentAdditionalInfoType::setVendorMessages()
     * @uses VehicleSegmentAdditionalInfoType::setLocationDetails()
     * @uses VehicleSegmentAdditionalInfoType::setTourInfo()
     * @uses VehicleSegmentAdditionalInfoType::setTPA_Extensions()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentRules $paymentRules
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages $pricedCoverages
     * @param mixed[] $pricedOffLocService
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VendorMessages $vendorMessages
     * @param mixed[] $locationDetails
     * @param mixed $tourInfo
     * @param mixed $tPA_Extensions
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentRules $paymentRules = null, \Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages $pricedCoverages = null, array $pricedOffLocService = array(), \Devlabs91\GenericOtaHotelApiService\StructType\VendorMessages $vendorMessages = null, array $locationDetails = array(), $tourInfo = null, $tPA_Extensions = null)
    {
        $this
            ->setPaymentRules($paymentRules)
            ->setPricedCoverages($pricedCoverages)
            ->setPricedOffLocService($pricedOffLocService)
            ->setVendorMessages($vendorMessages)
            ->setLocationDetails($locationDetails)
            ->setTourInfo($tourInfo)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get PaymentRules value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentRules|null
     */
    public function getPaymentRules()
    {
        return $this->PaymentRules;
    }
    /**
     * Set PaymentRules value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentRules $paymentRules
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setPaymentRules(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentRules $paymentRules = null)
    {
        $this->PaymentRules = $paymentRules;
        return $this;
    }
    /**
     * Get PricedCoverages value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages|null
     */
    public function getPricedCoverages()
    {
        return $this->PricedCoverages;
    }
    /**
     * Set PricedCoverages value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages $pricedCoverages
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setPricedCoverages(\Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages $pricedCoverages = null)
    {
        $this->PricedCoverages = $pricedCoverages;
        return $this;
    }
    /**
     * Get PricedOffLocService value
     * @return mixed[]|null
     */
    public function getPricedOffLocService()
    {
        return $this->PricedOffLocService;
    }
    /**
     * Set PricedOffLocService value
     * @throws \InvalidArgumentException
     * @param mixed[] $pricedOffLocService
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setPricedOffLocService(array $pricedOffLocService = array())
    {
        foreach ($pricedOffLocService as $vehicleSegmentAdditionalInfoTypePricedOffLocServiceItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PricedOffLocService property can only contain items of anyType, "%s" given', is_object($vehicleSegmentAdditionalInfoTypePricedOffLocServiceItem) ? get_class($vehicleSegmentAdditionalInfoTypePricedOffLocServiceItem) : gettype($vehicleSegmentAdditionalInfoTypePricedOffLocServiceItem)), __LINE__);
            }
        }
        $this->PricedOffLocService = $pricedOffLocService;
        return $this;
    }
    /**
     * Add item to PricedOffLocService value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
     */
    public function addToPricedOffLocService($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PricedOffLocService property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PricedOffLocService[] = $item;
        return $this;
    }
    /**
     * Get VendorMessages value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorMessages|null
     */
    public function getVendorMessages()
    {
        return $this->VendorMessages;
    }
    /**
     * Set VendorMessages value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VendorMessages $vendorMessages
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setVendorMessages(\Devlabs91\GenericOtaHotelApiService\StructType\VendorMessages $vendorMessages = null)
    {
        $this->VendorMessages = $vendorMessages;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setLocationDetails(array $locationDetails = array())
    {
        foreach ($locationDetails as $vehicleSegmentAdditionalInfoTypeLocationDetailsItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The LocationDetails property can only contain items of anyType, "%s" given', is_object($vehicleSegmentAdditionalInfoTypeLocationDetailsItem) ? get_class($vehicleSegmentAdditionalInfoTypeLocationDetailsItem) : gettype($vehicleSegmentAdditionalInfoTypeLocationDetailsItem)), __LINE__);
            }
        }
        $this->LocationDetails = $locationDetails;
        return $this;
    }
    /**
     * Add item to LocationDetails value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
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
