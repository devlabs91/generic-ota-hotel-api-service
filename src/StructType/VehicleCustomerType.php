<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleCustomerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleCustomerType complex type contains basic data on the customer's identity, location, relationships, finances, memberships, etc, in relation to the renting of a vehicle. | Type of funds preferred for reviewing monetary
 * values, in ISO 4217 codes.
 * @subpackage Structs
 */
class VehicleCustomerType extends AbstractStructBase
{
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $PersonName;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Telephone;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Email;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Address;
    /**
     * The CitizenCountryName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $CitizenCountryName;
    /**
     * The Document
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Document;
    /**
     * The CustLoyalty
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $CustLoyalty;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleCustomerType
     * @uses VehicleCustomerType::setPersonName()
     * @uses VehicleCustomerType::setTelephone()
     * @uses VehicleCustomerType::setEmail()
     * @uses VehicleCustomerType::setAddress()
     * @uses VehicleCustomerType::setCitizenCountryName()
     * @uses VehicleCustomerType::setDocument()
     * @uses VehicleCustomerType::setCustLoyalty()
     * @uses VehicleCustomerType::setTPA_Extensions()
     * @param mixed $personName
     * @param mixed[] $telephone
     * @param mixed[] $email
     * @param mixed[] $address
     * @param mixed[] $citizenCountryName
     * @param mixed[] $document
     * @param mixed[] $custLoyalty
     * @param mixed $tPA_Extensions
     */
    public function __construct($personName = null, array $telephone = array(), array $email = array(), array $address = array(), array $citizenCountryName = array(), array $document = array(), array $custLoyalty = array(), $tPA_Extensions = null)
    {
        $this
            ->setPersonName($personName)
            ->setTelephone($telephone)
            ->setEmail($email)
            ->setAddress($address)
            ->setCitizenCountryName($citizenCountryName)
            ->setDocument($document)
            ->setCustLoyalty($custLoyalty)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get PersonName value
     * @return mixed|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param mixed $personName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCustomerType
     */
    public function setPersonName($personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get Telephone value
     * @return mixed[]|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @throws \InvalidArgumentException
     * @param mixed[] $telephone
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCustomerType
     */
    public function setTelephone(array $telephone = array())
    {
        foreach ($telephone as $vehicleCustomerTypeTelephoneItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of anyType, "%s" given', is_object($vehicleCustomerTypeTelephoneItem) ? get_class($vehicleCustomerTypeTelephoneItem) : gettype($vehicleCustomerTypeTelephoneItem)), __LINE__);
            }
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Add item to Telephone value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCustomerType
     */
    public function addToTelephone($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Telephone[] = $item;
        return $this;
    }
    /**
     * Get Email value
     * @return mixed[]|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @throws \InvalidArgumentException
     * @param mixed[] $email
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCustomerType
     */
    public function setEmail(array $email = array())
    {
        foreach ($email as $vehicleCustomerTypeEmailItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Email property can only contain items of anyType, "%s" given', is_object($vehicleCustomerTypeEmailItem) ? get_class($vehicleCustomerTypeEmailItem) : gettype($vehicleCustomerTypeEmailItem)), __LINE__);
            }
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Add item to Email value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCustomerType
     */
    public function addToEmail($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Email property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Email[] = $item;
        return $this;
    }
    /**
     * Get Address value
     * @return mixed[]|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @throws \InvalidArgumentException
     * @param mixed[] $address
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCustomerType
     */
    public function setAddress(array $address = array())
    {
        foreach ($address as $vehicleCustomerTypeAddressItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Address property can only contain items of anyType, "%s" given', is_object($vehicleCustomerTypeAddressItem) ? get_class($vehicleCustomerTypeAddressItem) : gettype($vehicleCustomerTypeAddressItem)), __LINE__);
            }
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Add item to Address value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCustomerType
     */
    public function addToAddress($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Address property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Address[] = $item;
        return $this;
    }
    /**
     * Get CitizenCountryName value
     * @return mixed[]|null
     */
    public function getCitizenCountryName()
    {
        return $this->CitizenCountryName;
    }
    /**
     * Set CitizenCountryName value
     * @throws \InvalidArgumentException
     * @param mixed[] $citizenCountryName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCustomerType
     */
    public function setCitizenCountryName(array $citizenCountryName = array())
    {
        foreach ($citizenCountryName as $vehicleCustomerTypeCitizenCountryNameItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CitizenCountryName property can only contain items of anyType, "%s" given', is_object($vehicleCustomerTypeCitizenCountryNameItem) ? get_class($vehicleCustomerTypeCitizenCountryNameItem) : gettype($vehicleCustomerTypeCitizenCountryNameItem)), __LINE__);
            }
        }
        $this->CitizenCountryName = $citizenCountryName;
        return $this;
    }
    /**
     * Add item to CitizenCountryName value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCustomerType
     */
    public function addToCitizenCountryName($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The CitizenCountryName property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CitizenCountryName[] = $item;
        return $this;
    }
    /**
     * Get Document value
     * @return mixed[]|null
     */
    public function getDocument()
    {
        return $this->Document;
    }
    /**
     * Set Document value
     * @throws \InvalidArgumentException
     * @param mixed[] $document
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCustomerType
     */
    public function setDocument(array $document = array())
    {
        foreach ($document as $vehicleCustomerTypeDocumentItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Document property can only contain items of anyType, "%s" given', is_object($vehicleCustomerTypeDocumentItem) ? get_class($vehicleCustomerTypeDocumentItem) : gettype($vehicleCustomerTypeDocumentItem)), __LINE__);
            }
        }
        $this->Document = $document;
        return $this;
    }
    /**
     * Add item to Document value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCustomerType
     */
    public function addToDocument($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Document property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Document[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCustomerType
     */
    public function setCustLoyalty(array $custLoyalty = array())
    {
        foreach ($custLoyalty as $vehicleCustomerTypeCustLoyaltyItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CustLoyalty property can only contain items of anyType, "%s" given', is_object($vehicleCustomerTypeCustLoyaltyItem) ? get_class($vehicleCustomerTypeCustLoyaltyItem) : gettype($vehicleCustomerTypeCustLoyaltyItem)), __LINE__);
            }
        }
        $this->CustLoyalty = $custLoyalty;
        return $this;
    }
    /**
     * Add item to CustLoyalty value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCustomerType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCustomerType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCustomerType
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
