<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OtherSrvcPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Other travel service preferences.
 * @subpackage Structs
 */
class OtherSrvcPrefType extends AbstractStructBase
{
    /**
     * The OtherSrvcName
     * Meta informations extracted from the WSDL
     * - documentation: Name of other travel services identified in this collection of preferences.
     * @var mixed
     */
    public $OtherSrvcName;
    /**
     * The VendorPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $VendorPref;
    /**
     * The LoyaltyPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $LoyaltyPref;
    /**
     * The PaymentFormPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PaymentFormPref;
    /**
     * The SpecRequestPref
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SpecRequestPref;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The TravelPurpose
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Travel Purpose (TVP).
     * - use: optional
     * @var string
     */
    public $TravelPurpose;
    /**
     * Constructor method for OtherSrvcPrefType
     * @uses OtherSrvcPrefType::setOtherSrvcName()
     * @uses OtherSrvcPrefType::setVendorPref()
     * @uses OtherSrvcPrefType::setLoyaltyPref()
     * @uses OtherSrvcPrefType::setPaymentFormPref()
     * @uses OtherSrvcPrefType::setSpecRequestPref()
     * @uses OtherSrvcPrefType::setTPA_Extensions()
     * @uses OtherSrvcPrefType::setTravelPurpose()
     * @param mixed $otherSrvcName
     * @param mixed[] $vendorPref
     * @param mixed[] $loyaltyPref
     * @param mixed[] $paymentFormPref
     * @param mixed[] $specRequestPref
     * @param mixed $tPA_Extensions
     * @param string $travelPurpose
     */
    public function __construct($otherSrvcName = null, array $vendorPref = array(), array $loyaltyPref = array(), array $paymentFormPref = array(), array $specRequestPref = array(), $tPA_Extensions = null, $travelPurpose = null)
    {
        $this
            ->setOtherSrvcName($otherSrvcName)
            ->setVendorPref($vendorPref)
            ->setLoyaltyPref($loyaltyPref)
            ->setPaymentFormPref($paymentFormPref)
            ->setSpecRequestPref($specRequestPref)
            ->setTPA_Extensions($tPA_Extensions)
            ->setTravelPurpose($travelPurpose);
    }
    /**
     * Get OtherSrvcName value
     * @return mixed|null
     */
    public function getOtherSrvcName()
    {
        return $this->OtherSrvcName;
    }
    /**
     * Set OtherSrvcName value
     * @param mixed $otherSrvcName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherSrvcPrefType
     */
    public function setOtherSrvcName($otherSrvcName = null)
    {
        $this->OtherSrvcName = $otherSrvcName;
        return $this;
    }
    /**
     * Get VendorPref value
     * @return mixed[]|null
     */
    public function getVendorPref()
    {
        return $this->VendorPref;
    }
    /**
     * Set VendorPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $vendorPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherSrvcPrefType
     */
    public function setVendorPref(array $vendorPref = array())
    {
        foreach ($vendorPref as $otherSrvcPrefTypeVendorPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The VendorPref property can only contain items of anyType, "%s" given', is_object($otherSrvcPrefTypeVendorPrefItem) ? get_class($otherSrvcPrefTypeVendorPrefItem) : gettype($otherSrvcPrefTypeVendorPrefItem)), __LINE__);
            }
        }
        $this->VendorPref = $vendorPref;
        return $this;
    }
    /**
     * Add item to VendorPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherSrvcPrefType
     */
    public function addToVendorPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The VendorPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VendorPref[] = $item;
        return $this;
    }
    /**
     * Get LoyaltyPref value
     * @return mixed[]|null
     */
    public function getLoyaltyPref()
    {
        return $this->LoyaltyPref;
    }
    /**
     * Set LoyaltyPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $loyaltyPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherSrvcPrefType
     */
    public function setLoyaltyPref(array $loyaltyPref = array())
    {
        foreach ($loyaltyPref as $otherSrvcPrefTypeLoyaltyPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The LoyaltyPref property can only contain items of anyType, "%s" given', is_object($otherSrvcPrefTypeLoyaltyPrefItem) ? get_class($otherSrvcPrefTypeLoyaltyPrefItem) : gettype($otherSrvcPrefTypeLoyaltyPrefItem)), __LINE__);
            }
        }
        $this->LoyaltyPref = $loyaltyPref;
        return $this;
    }
    /**
     * Add item to LoyaltyPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherSrvcPrefType
     */
    public function addToLoyaltyPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The LoyaltyPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LoyaltyPref[] = $item;
        return $this;
    }
    /**
     * Get PaymentFormPref value
     * @return mixed[]|null
     */
    public function getPaymentFormPref()
    {
        return $this->PaymentFormPref;
    }
    /**
     * Set PaymentFormPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $paymentFormPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherSrvcPrefType
     */
    public function setPaymentFormPref(array $paymentFormPref = array())
    {
        foreach ($paymentFormPref as $otherSrvcPrefTypePaymentFormPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PaymentFormPref property can only contain items of anyType, "%s" given', is_object($otherSrvcPrefTypePaymentFormPrefItem) ? get_class($otherSrvcPrefTypePaymentFormPrefItem) : gettype($otherSrvcPrefTypePaymentFormPrefItem)), __LINE__);
            }
        }
        $this->PaymentFormPref = $paymentFormPref;
        return $this;
    }
    /**
     * Add item to PaymentFormPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherSrvcPrefType
     */
    public function addToPaymentFormPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PaymentFormPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentFormPref[] = $item;
        return $this;
    }
    /**
     * Get SpecRequestPref value
     * @return mixed[]|null
     */
    public function getSpecRequestPref()
    {
        return $this->SpecRequestPref;
    }
    /**
     * Set SpecRequestPref value
     * @throws \InvalidArgumentException
     * @param mixed[] $specRequestPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherSrvcPrefType
     */
    public function setSpecRequestPref(array $specRequestPref = array())
    {
        foreach ($specRequestPref as $otherSrvcPrefTypeSpecRequestPrefItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SpecRequestPref property can only contain items of anyType, "%s" given', is_object($otherSrvcPrefTypeSpecRequestPrefItem) ? get_class($otherSrvcPrefTypeSpecRequestPrefItem) : gettype($otherSrvcPrefTypeSpecRequestPrefItem)), __LINE__);
            }
        }
        $this->SpecRequestPref = $specRequestPref;
        return $this;
    }
    /**
     * Add item to SpecRequestPref value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherSrvcPrefType
     */
    public function addToSpecRequestPref($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SpecRequestPref property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecRequestPref[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherSrvcPrefType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get TravelPurpose value
     * @return string|null
     */
    public function getTravelPurpose()
    {
        return $this->TravelPurpose;
    }
    /**
     * Set TravelPurpose value
     * @param string $travelPurpose
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherSrvcPrefType
     */
    public function setTravelPurpose($travelPurpose = null)
    {
        // validation for constraint: string
        if (!is_null($travelPurpose) && !is_string($travelPurpose)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelPurpose)), __LINE__);
        }
        $this->TravelPurpose = $travelPurpose;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherSrvcPrefType
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
