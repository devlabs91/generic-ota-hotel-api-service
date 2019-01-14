<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerificationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of data used to ensure the correct reservation is canceled or modified (e.g. in the case of a hotel reservation modification, a CustLoyalty/ MembershipID would be verified as part of the reservation that you plan to modify
 * to ensure the correct reservation is being modified).
 * @subpackage Structs
 */
class VerificationType extends AbstractStructBase
{
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PersonName
     */
    public $PersonName;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Email;
    /**
     * The TelephoneInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $TelephoneInfo;
    /**
     * The PaymentCard
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $PaymentCard;
    /**
     * The AddressInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $AddressInfo;
    /**
     * The CustLoyalty
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $CustLoyalty;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - documentation: Vendor or Vendors associated with the Reservation
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Vendor;
    /**
     * The ReservationTimeSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ReservationTimeSpan
     */
    public $ReservationTimeSpan;
    /**
     * The AssociatedQuantity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AssociatedQuantity[]
     */
    public $AssociatedQuantity;
    /**
     * The StartLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\StartLocation
     */
    public $StartLocation;
    /**
     * The EndLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\EndLocation
     */
    public $EndLocation;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VerificationType
     * @uses VerificationType::setPersonName()
     * @uses VerificationType::setEmail()
     * @uses VerificationType::setTelephoneInfo()
     * @uses VerificationType::setPaymentCard()
     * @uses VerificationType::setAddressInfo()
     * @uses VerificationType::setCustLoyalty()
     * @uses VerificationType::setVendor()
     * @uses VerificationType::setReservationTimeSpan()
     * @uses VerificationType::setAssociatedQuantity()
     * @uses VerificationType::setStartLocation()
     * @uses VerificationType::setEndLocation()
     * @uses VerificationType::setTPA_Extensions()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PersonName $personName
     * @param mixed $email
     * @param mixed $telephoneInfo
     * @param mixed $paymentCard
     * @param mixed $addressInfo
     * @param mixed[] $custLoyalty
     * @param mixed[] $vendor
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ReservationTimeSpan $reservationTimeSpan
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AssociatedQuantity[] $associatedQuantity
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\StartLocation $startLocation
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\EndLocation $endLocation
     * @param mixed $tPA_Extensions
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\PersonName $personName = null, $email = null, $telephoneInfo = null, $paymentCard = null, $addressInfo = null, array $custLoyalty = array(), array $vendor = array(), \Devlabs91\GenericOtaHotelApiService\StructType\ReservationTimeSpan $reservationTimeSpan = null, array $associatedQuantity = array(), \Devlabs91\GenericOtaHotelApiService\StructType\StartLocation $startLocation = null, \Devlabs91\GenericOtaHotelApiService\StructType\EndLocation $endLocation = null, $tPA_Extensions = null)
    {
        $this
            ->setPersonName($personName)
            ->setEmail($email)
            ->setTelephoneInfo($telephoneInfo)
            ->setPaymentCard($paymentCard)
            ->setAddressInfo($addressInfo)
            ->setCustLoyalty($custLoyalty)
            ->setVendor($vendor)
            ->setReservationTimeSpan($reservationTimeSpan)
            ->setAssociatedQuantity($associatedQuantity)
            ->setStartLocation($startLocation)
            ->setEndLocation($endLocation)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get PersonName value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonName|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PersonName $personName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VerificationType
     */
    public function setPersonName(\Devlabs91\GenericOtaHotelApiService\StructType\PersonName $personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get Email value
     * @return mixed|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param mixed $email
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VerificationType
     */
    public function setEmail($email = null)
    {
        $this->Email = $email;
        return $this;
    }
    /**
     * Get TelephoneInfo value
     * @return mixed|null
     */
    public function getTelephoneInfo()
    {
        return $this->TelephoneInfo;
    }
    /**
     * Set TelephoneInfo value
     * @param mixed $telephoneInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VerificationType
     */
    public function setTelephoneInfo($telephoneInfo = null)
    {
        $this->TelephoneInfo = $telephoneInfo;
        return $this;
    }
    /**
     * Get PaymentCard value
     * @return mixed|null
     */
    public function getPaymentCard()
    {
        return $this->PaymentCard;
    }
    /**
     * Set PaymentCard value
     * @param mixed $paymentCard
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VerificationType
     */
    public function setPaymentCard($paymentCard = null)
    {
        $this->PaymentCard = $paymentCard;
        return $this;
    }
    /**
     * Get AddressInfo value
     * @return mixed|null
     */
    public function getAddressInfo()
    {
        return $this->AddressInfo;
    }
    /**
     * Set AddressInfo value
     * @param mixed $addressInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VerificationType
     */
    public function setAddressInfo($addressInfo = null)
    {
        $this->AddressInfo = $addressInfo;
        return $this;
    }
    /**
     * Get CustLoyalty value
     * @return mixed[]|null
     */
    public function getCustLoyalty()
    {
        return $this->CustLoyalty;
    }
    /**
     * Set CustLoyalty value
     * @throws \InvalidArgumentException
     * @param mixed[] $custLoyalty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VerificationType
     */
    public function setCustLoyalty(array $custLoyalty = array())
    {
        foreach ($custLoyalty as $verificationTypeCustLoyaltyItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CustLoyalty property can only contain items of anyType, "%s" given', is_object($verificationTypeCustLoyaltyItem) ? get_class($verificationTypeCustLoyaltyItem) : gettype($verificationTypeCustLoyaltyItem)), __LINE__);
            }
        }
        $this->CustLoyalty = $custLoyalty;
        return $this;
    }
    /**
     * Add item to CustLoyalty value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VerificationType
     */
    public function addToCustLoyalty($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The CustLoyalty property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustLoyalty[] = $item;
        return $this;
    }
    /**
     * Get Vendor value
     * @return mixed[]|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @throws \InvalidArgumentException
     * @param mixed[] $vendor
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VerificationType
     */
    public function setVendor(array $vendor = array())
    {
        foreach ($vendor as $verificationTypeVendorItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Vendor property can only contain items of anyType, "%s" given', is_object($verificationTypeVendorItem) ? get_class($verificationTypeVendorItem) : gettype($verificationTypeVendorItem)), __LINE__);
            }
        }
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Add item to Vendor value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VerificationType
     */
    public function addToVendor($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Vendor property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Vendor[] = $item;
        return $this;
    }
    /**
     * Get ReservationTimeSpan value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ReservationTimeSpan|null
     */
    public function getReservationTimeSpan()
    {
        return $this->ReservationTimeSpan;
    }
    /**
     * Set ReservationTimeSpan value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ReservationTimeSpan $reservationTimeSpan
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VerificationType
     */
    public function setReservationTimeSpan(\Devlabs91\GenericOtaHotelApiService\StructType\ReservationTimeSpan $reservationTimeSpan = null)
    {
        $this->ReservationTimeSpan = $reservationTimeSpan;
        return $this;
    }
    /**
     * Get AssociatedQuantity value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AssociatedQuantity[]|null
     */
    public function getAssociatedQuantity()
    {
        return $this->AssociatedQuantity;
    }
    /**
     * Set AssociatedQuantity value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AssociatedQuantity[] $associatedQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VerificationType
     */
    public function setAssociatedQuantity(array $associatedQuantity = array())
    {
        foreach ($associatedQuantity as $verificationTypeAssociatedQuantityItem) {
            // validation for constraint: itemType
            if (!$verificationTypeAssociatedQuantityItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AssociatedQuantity) {
                throw new \InvalidArgumentException(sprintf('The AssociatedQuantity property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AssociatedQuantity, "%s" given', is_object($verificationTypeAssociatedQuantityItem) ? get_class($verificationTypeAssociatedQuantityItem) : gettype($verificationTypeAssociatedQuantityItem)), __LINE__);
            }
        }
        $this->AssociatedQuantity = $associatedQuantity;
        return $this;
    }
    /**
     * Add item to AssociatedQuantity value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AssociatedQuantity $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VerificationType
     */
    public function addToAssociatedQuantity(\Devlabs91\GenericOtaHotelApiService\StructType\AssociatedQuantity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AssociatedQuantity) {
            throw new \InvalidArgumentException(sprintf('The AssociatedQuantity property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AssociatedQuantity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AssociatedQuantity[] = $item;
        return $this;
    }
    /**
     * Get StartLocation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StartLocation|null
     */
    public function getStartLocation()
    {
        return $this->StartLocation;
    }
    /**
     * Set StartLocation value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\StartLocation $startLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VerificationType
     */
    public function setStartLocation(\Devlabs91\GenericOtaHotelApiService\StructType\StartLocation $startLocation = null)
    {
        $this->StartLocation = $startLocation;
        return $this;
    }
    /**
     * Get EndLocation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EndLocation|null
     */
    public function getEndLocation()
    {
        return $this->EndLocation;
    }
    /**
     * Set EndLocation value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\EndLocation $endLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VerificationType
     */
    public function setEndLocation(\Devlabs91\GenericOtaHotelApiService\StructType\EndLocation $endLocation = null)
    {
        $this->EndLocation = $endLocation;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VerificationType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VerificationType
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
