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
     * The RentalPaymentAmount
     * Meta informations extracted from the WSDL
     * - documentation: Used for payment information, may be prepayment, actual, etc.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $RentalPaymentAmount;
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
     * The SpecialReqPref
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the preference associated with special needs or requirements of the customer, described using free text.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SpecialReqPref;
    /**
     * The ArrivalDetails
     * Meta informations extracted from the WSDL
     * - documentation: Details of the arrival transportation, if applicable.
     * - minOccurs: 0
     * @var mixed
     */
    public $ArrivalDetails;
    /**
     * The WrittenConfInst
     * Meta informations extracted from the WSDL
     * - documentation: Used to provide instructions regarding cusotmer preferences for receiving confirmation information.
     * - minOccurs: 0
     * @var mixed
     */
    public $WrittenConfInst;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - documentation: Free text description regarding the rental (e.g. vehicle is being rented because of an accident).
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Remark;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The WrittenConfInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, a written confirmation may be requested.
     * - use: optional
     * @var bool
     */
    public $WrittenConfInd;
    /**
     * Constructor method for VehicleSegmentAdditionalInfoType
     * @uses VehicleSegmentAdditionalInfoType::setPaymentRules()
     * @uses VehicleSegmentAdditionalInfoType::setRentalPaymentAmount()
     * @uses VehicleSegmentAdditionalInfoType::setPricedCoverages()
     * @uses VehicleSegmentAdditionalInfoType::setPricedOffLocService()
     * @uses VehicleSegmentAdditionalInfoType::setVendorMessages()
     * @uses VehicleSegmentAdditionalInfoType::setLocationDetails()
     * @uses VehicleSegmentAdditionalInfoType::setTourInfo()
     * @uses VehicleSegmentAdditionalInfoType::setSpecialReqPref()
     * @uses VehicleSegmentAdditionalInfoType::setArrivalDetails()
     * @uses VehicleSegmentAdditionalInfoType::setWrittenConfInst()
     * @uses VehicleSegmentAdditionalInfoType::setRemark()
     * @uses VehicleSegmentAdditionalInfoType::setTPA_Extensions()
     * @uses VehicleSegmentAdditionalInfoType::setWrittenConfInd()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentRules $paymentRules
     * @param mixed[] $rentalPaymentAmount
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages $pricedCoverages
     * @param mixed[] $pricedOffLocService
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VendorMessages $vendorMessages
     * @param mixed[] $locationDetails
     * @param mixed $tourInfo
     * @param mixed[] $specialReqPref
     * @param mixed $arrivalDetails
     * @param mixed $writtenConfInst
     * @param mixed[] $remark
     * @param mixed $tPA_Extensions
     * @param bool $writtenConfInd
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentRules $paymentRules = null, array $rentalPaymentAmount = array(), \Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages $pricedCoverages = null, array $pricedOffLocService = array(), \Devlabs91\GenericOtaHotelApiService\StructType\VendorMessages $vendorMessages = null, array $locationDetails = array(), $tourInfo = null, array $specialReqPref = array(), $arrivalDetails = null, $writtenConfInst = null, array $remark = array(), $tPA_Extensions = null, $writtenConfInd = null)
    {
        $this
            ->setPaymentRules($paymentRules)
            ->setRentalPaymentAmount($rentalPaymentAmount)
            ->setPricedCoverages($pricedCoverages)
            ->setPricedOffLocService($pricedOffLocService)
            ->setVendorMessages($vendorMessages)
            ->setLocationDetails($locationDetails)
            ->setTourInfo($tourInfo)
            ->setSpecialReqPref($specialReqPref)
            ->setArrivalDetails($arrivalDetails)
            ->setWrittenConfInst($writtenConfInst)
            ->setRemark($remark)
            ->setTPA_Extensions($tPA_Extensions)
            ->setWrittenConfInd($writtenConfInd);
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
     * Get RentalPaymentAmount value
     * @return mixed[]|null
     */
    public function getRentalPaymentAmount()
    {
        return $this->RentalPaymentAmount;
    }
    /**
     * Set RentalPaymentAmount value
     * @throws \InvalidArgumentException
     * @param mixed[] $rentalPaymentAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setRentalPaymentAmount(array $rentalPaymentAmount = array())
    {
        foreach ($rentalPaymentAmount as $vehicleSegmentAdditionalInfoTypeRentalPaymentAmountItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RentalPaymentAmount property can only contain items of anyType, "%s" given', is_object($vehicleSegmentAdditionalInfoTypeRentalPaymentAmountItem) ? get_class($vehicleSegmentAdditionalInfoTypeRentalPaymentAmountItem) : gettype($vehicleSegmentAdditionalInfoTypeRentalPaymentAmountItem)), __LINE__);
            }
        }
        $this->RentalPaymentAmount = $rentalPaymentAmount;
        return $this;
    }
    /**
     * Add item to RentalPaymentAmount value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
     */
    public function addToRentalPaymentAmount($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RentalPaymentAmount property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RentalPaymentAmount[] = $item;
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
     * Get SpecialReqPref value
     * @return mixed[]|null
     */
    public function getSpecialReqPref()
    {
        return $this->SpecialReqPref;
    }
    /**
     * Set SpecialReqPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $specialReqPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setSpecialReqPref(array $specialReqPref = array())
    {
        foreach ($specialReqPref as $vehicleSegmentAdditionalInfoTypeSpecialReqPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SpecialReqPref property can only contain items of anyType, "%s" given', is_object($vehicleSegmentAdditionalInfoTypeSpecialReqPrefItem) ? get_class($vehicleSegmentAdditionalInfoTypeSpecialReqPrefItem) : gettype($vehicleSegmentAdditionalInfoTypeSpecialReqPrefItem)), __LINE__);
            }
        }
        $this->SpecialReqPref = $specialReqPref;
        return $this;
    }
    /**
     * Add item to SpecialReqPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
     */
    public function addToSpecialReqPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SpecialReqPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialReqPref[] = $item;
        return $this;
    }
    /**
     * Get ArrivalDetails value
     * @return mixed|null
     */
    public function getArrivalDetails()
    {
        return $this->ArrivalDetails;
    }
    /**
     * Set ArrivalDetails value
     * @param mixed $arrivalDetails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setArrivalDetails($arrivalDetails = null)
    {
        $this->ArrivalDetails = $arrivalDetails;
        return $this;
    }
    /**
     * Get WrittenConfInst value
     * @return mixed|null
     */
    public function getWrittenConfInst()
    {
        return $this->WrittenConfInst;
    }
    /**
     * Set WrittenConfInst value
     * @param mixed $writtenConfInst
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setWrittenConfInst($writtenConfInst = null)
    {
        $this->WrittenConfInst = $writtenConfInst;
        return $this;
    }
    /**
     * Get Remark value
     * @return mixed[]|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @throws \InvalidArgumentException
     * @param mixed[] $remark
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setRemark(array $remark = array())
    {
        foreach ($remark as $vehicleSegmentAdditionalInfoTypeRemarkItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of anyType, "%s" given', is_object($vehicleSegmentAdditionalInfoTypeRemarkItem) ? get_class($vehicleSegmentAdditionalInfoTypeRemarkItem) : gettype($vehicleSegmentAdditionalInfoTypeRemarkItem)), __LINE__);
            }
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
     */
    public function addToRemark($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Remark[] = $item;
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
     * Get WrittenConfInd value
     * @return bool|null
     */
    public function getWrittenConfInd()
    {
        return $this->WrittenConfInd;
    }
    /**
     * Set WrittenConfInd value
     * @param bool $writtenConfInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSegmentAdditionalInfoType
     */
    public function setWrittenConfInd($writtenConfInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($writtenConfInd) && !is_bool($writtenConfInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($writtenConfInd)), __LINE__);
        }
        $this->WrittenConfInd = $writtenConfInd;
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
