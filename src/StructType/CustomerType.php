<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains basic data on the customer's identity, location, relationships, finances, memberships, etc. | Type of funds preferred for reviewing monetary values, in ISO 4217 codes.
 * @subpackage Structs
 */
class CustomerType extends AbstractStructBase
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
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Address[]
     */
    public $Address;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $URL;
    /**
     * The CitizenCountryName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $CitizenCountryName;
    /**
     * The PhysChallName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PhysChallName;
    /**
     * The PetInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PetInfo;
    /**
     * The PaymentForm
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PaymentForm;
    /**
     * The RelatedTraveler
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var mixed[]
     */
    public $RelatedTraveler;
    /**
     * The ContactPerson
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $ContactPerson;
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
     * The EmployeeInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var mixed[]
     */
    public $EmployeeInfo;
    /**
     * The Deceased
     * @var bool
     */
    public $Deceased;
    /**
     * The LockoutType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates reason for locking out record, such as Emergency, Incident, etc.
     * @var string
     */
    public $LockoutType;
    /**
     * Constructor method for CustomerType
     * @uses CustomerType::setPersonName()
     * @uses CustomerType::setTelephone()
     * @uses CustomerType::setEmail()
     * @uses CustomerType::setAddress()
     * @uses CustomerType::setURL()
     * @uses CustomerType::setCitizenCountryName()
     * @uses CustomerType::setPhysChallName()
     * @uses CustomerType::setPetInfo()
     * @uses CustomerType::setPaymentForm()
     * @uses CustomerType::setRelatedTraveler()
     * @uses CustomerType::setContactPerson()
     * @uses CustomerType::setDocument()
     * @uses CustomerType::setCustLoyalty()
     * @uses CustomerType::setEmployeeInfo()
     * @uses CustomerType::setDeceased()
     * @uses CustomerType::setLockoutType()
     * @param mixed $personName
     * @param mixed[] $telephone
     * @param mixed[] $email
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Address[] $address
     * @param mixed[] $uRL
     * @param mixed[] $citizenCountryName
     * @param mixed[] $physChallName
     * @param mixed[] $petInfo
     * @param mixed[] $paymentForm
     * @param mixed[] $relatedTraveler
     * @param mixed[] $contactPerson
     * @param mixed[] $document
     * @param mixed[] $custLoyalty
     * @param mixed[] $employeeInfo
     * @param bool $deceased
     * @param string $lockoutType
     */
    public function __construct($personName = null, array $telephone = array(), array $email = array(), array $address = array(), array $uRL = array(), array $citizenCountryName = array(), array $physChallName = array(), array $petInfo = array(), array $paymentForm = array(), array $relatedTraveler = array(), array $contactPerson = array(), array $document = array(), array $custLoyalty = array(), array $employeeInfo = array(), $deceased = null, $lockoutType = null)
    {
        $this
            ->setPersonName($personName)
            ->setTelephone($telephone)
            ->setEmail($email)
            ->setAddress($address)
            ->setURL($uRL)
            ->setCitizenCountryName($citizenCountryName)
            ->setPhysChallName($physChallName)
            ->setPetInfo($petInfo)
            ->setPaymentForm($paymentForm)
            ->setRelatedTraveler($relatedTraveler)
            ->setContactPerson($contactPerson)
            ->setDocument($document)
            ->setCustLoyalty($custLoyalty)
            ->setEmployeeInfo($employeeInfo)
            ->setDeceased($deceased)
            ->setLockoutType($lockoutType);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setTelephone(array $telephone = array())
    {
        foreach ($telephone as $customerTypeTelephoneItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of anyType, "%s" given', is_object($customerTypeTelephoneItem) ? get_class($customerTypeTelephoneItem) : gettype($customerTypeTelephoneItem)), __LINE__);
            }
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Add item to Telephone value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setEmail(array $email = array())
    {
        foreach ($email as $customerTypeEmailItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Email property can only contain items of anyType, "%s" given', is_object($customerTypeEmailItem) ? get_class($customerTypeEmailItem) : gettype($customerTypeEmailItem)), __LINE__);
            }
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Add item to Email value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Address[]|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Address[] $address
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setAddress(array $address = array())
    {
        foreach ($address as $customerTypeAddressItem) {
            // validation for constraint: itemType
            if (!$customerTypeAddressItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Address) {
                throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Address, "%s" given', is_object($customerTypeAddressItem) ? get_class($customerTypeAddressItem) : gettype($customerTypeAddressItem)), __LINE__);
            }
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Add item to Address value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Address $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToAddress(\Devlabs91\GenericOtaHotelApiService\StructType\Address $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Address) {
            throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Address, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Address[] = $item;
        return $this;
    }
    /**
     * Get URL value
     * @return mixed[]|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @throws \InvalidArgumentException
     * @param mixed[] $uRL
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setURL(array $uRL = array())
    {
        foreach ($uRL as $customerTypeURLItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The URL property can only contain items of anyType, "%s" given', is_object($customerTypeURLItem) ? get_class($customerTypeURLItem) : gettype($customerTypeURLItem)), __LINE__);
            }
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Add item to URL value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToURL($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The URL property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->URL[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setCitizenCountryName(array $citizenCountryName = array())
    {
        foreach ($citizenCountryName as $customerTypeCitizenCountryNameItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CitizenCountryName property can only contain items of anyType, "%s" given', is_object($customerTypeCitizenCountryNameItem) ? get_class($customerTypeCitizenCountryNameItem) : gettype($customerTypeCitizenCountryNameItem)), __LINE__);
            }
        }
        $this->CitizenCountryName = $citizenCountryName;
        return $this;
    }
    /**
     * Add item to CitizenCountryName value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
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
     * Get PhysChallName value
     * @return mixed[]|null
     */
    public function getPhysChallName()
    {
        return $this->PhysChallName;
    }
    /**
     * Set PhysChallName value
     * @throws \InvalidArgumentException
     * @param mixed[] $physChallName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setPhysChallName(array $physChallName = array())
    {
        foreach ($physChallName as $customerTypePhysChallNameItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PhysChallName property can only contain items of anyType, "%s" given', is_object($customerTypePhysChallNameItem) ? get_class($customerTypePhysChallNameItem) : gettype($customerTypePhysChallNameItem)), __LINE__);
            }
        }
        $this->PhysChallName = $physChallName;
        return $this;
    }
    /**
     * Add item to PhysChallName value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToPhysChallName($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PhysChallName property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PhysChallName[] = $item;
        return $this;
    }
    /**
     * Get PetInfo value
     * @return mixed[]|null
     */
    public function getPetInfo()
    {
        return $this->PetInfo;
    }
    /**
     * Set PetInfo value
     * @throws \InvalidArgumentException
     * @param mixed[] $petInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setPetInfo(array $petInfo = array())
    {
        foreach ($petInfo as $customerTypePetInfoItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PetInfo property can only contain items of anyType, "%s" given', is_object($customerTypePetInfoItem) ? get_class($customerTypePetInfoItem) : gettype($customerTypePetInfoItem)), __LINE__);
            }
        }
        $this->PetInfo = $petInfo;
        return $this;
    }
    /**
     * Add item to PetInfo value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToPetInfo($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PetInfo property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PetInfo[] = $item;
        return $this;
    }
    /**
     * Get PaymentForm value
     * @return mixed[]|null
     */
    public function getPaymentForm()
    {
        return $this->PaymentForm;
    }
    /**
     * Set PaymentForm value
     * @throws \InvalidArgumentException
     * @param mixed[] $paymentForm
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setPaymentForm(array $paymentForm = array())
    {
        foreach ($paymentForm as $customerTypePaymentFormItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PaymentForm property can only contain items of anyType, "%s" given', is_object($customerTypePaymentFormItem) ? get_class($customerTypePaymentFormItem) : gettype($customerTypePaymentFormItem)), __LINE__);
            }
        }
        $this->PaymentForm = $paymentForm;
        return $this;
    }
    /**
     * Add item to PaymentForm value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToPaymentForm($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PaymentForm property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentForm[] = $item;
        return $this;
    }
    /**
     * Get RelatedTraveler value
     * @return mixed[]|null
     */
    public function getRelatedTraveler()
    {
        return $this->RelatedTraveler;
    }
    /**
     * Set RelatedTraveler value
     * @throws \InvalidArgumentException
     * @param mixed[] $relatedTraveler
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setRelatedTraveler(array $relatedTraveler = array())
    {
        foreach ($relatedTraveler as $customerTypeRelatedTravelerItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RelatedTraveler property can only contain items of anyType, "%s" given', is_object($customerTypeRelatedTravelerItem) ? get_class($customerTypeRelatedTravelerItem) : gettype($customerTypeRelatedTravelerItem)), __LINE__);
            }
        }
        $this->RelatedTraveler = $relatedTraveler;
        return $this;
    }
    /**
     * Add item to RelatedTraveler value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToRelatedTraveler($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RelatedTraveler property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RelatedTraveler[] = $item;
        return $this;
    }
    /**
     * Get ContactPerson value
     * @return mixed[]|null
     */
    public function getContactPerson()
    {
        return $this->ContactPerson;
    }
    /**
     * Set ContactPerson value
     * @throws \InvalidArgumentException
     * @param mixed[] $contactPerson
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setContactPerson(array $contactPerson = array())
    {
        foreach ($contactPerson as $customerTypeContactPersonItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The ContactPerson property can only contain items of anyType, "%s" given', is_object($customerTypeContactPersonItem) ? get_class($customerTypeContactPersonItem) : gettype($customerTypeContactPersonItem)), __LINE__);
            }
        }
        $this->ContactPerson = $contactPerson;
        return $this;
    }
    /**
     * Add item to ContactPerson value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToContactPerson($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The ContactPerson property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ContactPerson[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setDocument(array $document = array())
    {
        foreach ($document as $customerTypeDocumentItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Document property can only contain items of anyType, "%s" given', is_object($customerTypeDocumentItem) ? get_class($customerTypeDocumentItem) : gettype($customerTypeDocumentItem)), __LINE__);
            }
        }
        $this->Document = $document;
        return $this;
    }
    /**
     * Add item to Document value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setCustLoyalty(array $custLoyalty = array())
    {
        foreach ($custLoyalty as $customerTypeCustLoyaltyItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CustLoyalty property can only contain items of anyType, "%s" given', is_object($customerTypeCustLoyaltyItem) ? get_class($customerTypeCustLoyaltyItem) : gettype($customerTypeCustLoyaltyItem)), __LINE__);
            }
        }
        $this->CustLoyalty = $custLoyalty;
        return $this;
    }
    /**
     * Add item to CustLoyalty value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
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
     * Get EmployeeInfo value
     * @return mixed[]|null
     */
    public function getEmployeeInfo()
    {
        return $this->EmployeeInfo;
    }
    /**
     * Set EmployeeInfo value
     * @throws \InvalidArgumentException
     * @param mixed[] $employeeInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setEmployeeInfo(array $employeeInfo = array())
    {
        foreach ($employeeInfo as $customerTypeEmployeeInfoItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The EmployeeInfo property can only contain items of anyType, "%s" given', is_object($customerTypeEmployeeInfoItem) ? get_class($customerTypeEmployeeInfoItem) : gettype($customerTypeEmployeeInfoItem)), __LINE__);
            }
        }
        $this->EmployeeInfo = $employeeInfo;
        return $this;
    }
    /**
     * Add item to EmployeeInfo value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToEmployeeInfo($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The EmployeeInfo property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EmployeeInfo[] = $item;
        return $this;
    }
    /**
     * Get Deceased value
     * @return bool|null
     */
    public function getDeceased()
    {
        return $this->Deceased;
    }
    /**
     * Set Deceased value
     * @param bool $deceased
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setDeceased($deceased = null)
    {
        // validation for constraint: boolean
        if (!is_null($deceased) && !is_bool($deceased)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($deceased)), __LINE__);
        }
        $this->Deceased = $deceased;
        return $this;
    }
    /**
     * Get LockoutType value
     * @return string|null
     */
    public function getLockoutType()
    {
        return $this->LockoutType;
    }
    /**
     * Set LockoutType value
     * @param string $lockoutType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setLockoutType($lockoutType = null)
    {
        // validation for constraint: string
        if (!is_null($lockoutType) && !is_string($lockoutType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lockoutType)), __LINE__);
        }
        $this->LockoutType = $lockoutType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
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
