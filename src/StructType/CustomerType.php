<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains basic data on the customer's identity, location, relationships, finances, memberships, etc. | Identifies the gender of the customer. | Identifies the birth date of the customer. | Type of funds preferred for reviewing
 * monetary values, in ISO 4217 codes. | The primary language of the customer.
 * - type: StringLength1to8
 * - use: optional
 * @subpackage Structs
 */
class CustomerType extends AbstractStructBase
{
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - documentation: Detailed name information for the customer.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PersonName;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Telephone[]
     */
    public $Telephone;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Email[]
     */
    public $Email;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Address[]
     */
    public $Address;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\URL[]
     */
    public $URL;
    /**
     * The CitizenCountryName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CitizenCountryName[]
     */
    public $CitizenCountryName;
    /**
     * The PhysChallName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PhysChallName[]
     */
    public $PhysChallName;
    /**
     * The PetInfo
     * Meta informations extracted from the WSDL
     * - documentation: Describes the customer's pet.
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PetInfo;
    /**
     * The PaymentForm
     * Meta informations extracted from the WSDL
     * - maxOccurs: 100
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PaymentForm[]
     */
    public $PaymentForm;
    /**
     * The RelatedTraveler
     * Meta informations extracted from the WSDL
     * - documentation: Identifies a traveler associated with the customer.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var mixed[]
     */
    public $RelatedTraveler;
    /**
     * The ContactPerson
     * Meta informations extracted from the WSDL
     * - documentation: Information on a contact person for the customer.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $ContactPerson;
    /**
     * The Document
     * Meta informations extracted from the WSDL
     * - documentation: Detailed document information for the customer (e.g., driver license, passport, visa).
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Document;
    /**
     * The CustLoyalty
     * Meta informations extracted from the WSDL
     * - maxOccurs: 25
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty[]
     */
    public $CustLoyalty;
    /**
     * The EmployeeInfo
     * Meta informations extracted from the WSDL
     * - documentation: Employment information for the customer.
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var mixed[]
     */
    public $EmployeeInfo;
    /**
     * The EmployerInfo
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the customer's employer.
     * - minOccurs: 0
     * @var mixed
     */
    public $EmployerInfo;
    /**
     * The AdditionalLanguage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalLanguage[]
     */
    public $AdditionalLanguage;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The Deceased
     * Meta informations extracted from the WSDL
     * - documentation: When true the customer is deceased.
     * - use: optional
     * @var bool
     */
    public $Deceased;
    /**
     * The LockoutType
     * Meta informations extracted from the WSDL
     * - documentation: Indicates reason for locking out record, such as Emergency, Incident, etc.
     * - use: optional
     * @var string
     */
    public $LockoutType;
    /**
     * The VIP_Indicator
     * Meta informations extracted from the WSDL
     * - documentation: If true, indicates a very important person.
     * - use: optional
     * @var bool
     */
    public $VIP_Indicator;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify textual information about the customer.
     * - use: optional
     * @var string
     */
    public $Text;
    /**
     * The CustomerValue
     * Meta informations extracted from the WSDL
     * - documentation: The supplier's ranking of the customer (e.g., VIP, numerical ranking).
     * - use: optional
     * @var string
     */
    public $CustomerValue;
    /**
     * The MaritalStatus
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MaritalStatus;
    /**
     * The PreviouslyMarriedIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates the customer was previously married. When false, indicates the customer was not previously married.
     * - use: optional
     * @var bool
     */
    public $PreviouslyMarriedIndicator;
    /**
     * The ChildQuantity
     * Meta informations extracted from the WSDL
     * - documentation: The number of children of the customer.
     * - use: optional
     * @var string
     */
    public $ChildQuantity;
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
     * @uses CustomerType::setEmployerInfo()
     * @uses CustomerType::setAdditionalLanguage()
     * @uses CustomerType::setTPA_Extensions()
     * @uses CustomerType::setDeceased()
     * @uses CustomerType::setLockoutType()
     * @uses CustomerType::setVIP_Indicator()
     * @uses CustomerType::setText()
     * @uses CustomerType::setCustomerValue()
     * @uses CustomerType::setMaritalStatus()
     * @uses CustomerType::setPreviouslyMarriedIndicator()
     * @uses CustomerType::setChildQuantity()
     * @param mixed[] $personName
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone[] $telephone
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Email[] $email
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Address[] $address
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\URL[] $uRL
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CitizenCountryName[] $citizenCountryName
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PhysChallName[] $physChallName
     * @param mixed[] $petInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentForm[] $paymentForm
     * @param mixed[] $relatedTraveler
     * @param mixed[] $contactPerson
     * @param mixed[] $document
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty[] $custLoyalty
     * @param mixed[] $employeeInfo
     * @param mixed $employerInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalLanguage[] $additionalLanguage
     * @param mixed $tPA_Extensions
     * @param bool $deceased
     * @param string $lockoutType
     * @param bool $vIP_Indicator
     * @param string $text
     * @param string $customerValue
     * @param string $maritalStatus
     * @param bool $previouslyMarriedIndicator
     * @param string $childQuantity
     */
    public function __construct(array $personName = array(), array $telephone = array(), array $email = array(), array $address = array(), array $uRL = array(), array $citizenCountryName = array(), array $physChallName = array(), array $petInfo = array(), array $paymentForm = array(), array $relatedTraveler = array(), array $contactPerson = array(), array $document = array(), array $custLoyalty = array(), array $employeeInfo = array(), $employerInfo = null, array $additionalLanguage = array(), $tPA_Extensions = null, $deceased = null, $lockoutType = null, $vIP_Indicator = null, $text = null, $customerValue = null, $maritalStatus = null, $previouslyMarriedIndicator = null, $childQuantity = null)
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
            ->setEmployerInfo($employerInfo)
            ->setAdditionalLanguage($additionalLanguage)
            ->setTPA_Extensions($tPA_Extensions)
            ->setDeceased($deceased)
            ->setLockoutType($lockoutType)
            ->setVIP_Indicator($vIP_Indicator)
            ->setText($text)
            ->setCustomerValue($customerValue)
            ->setMaritalStatus($maritalStatus)
            ->setPreviouslyMarriedIndicator($previouslyMarriedIndicator)
            ->setChildQuantity($childQuantity);
    }
    /**
     * Get PersonName value
     * @return mixed[]|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @throws \InvalidArgumentException
     * @param mixed[] $personName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setPersonName(array $personName = array())
    {
        foreach ($personName as $customerTypePersonNameItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PersonName property can only contain items of anyType, "%s" given', is_object($customerTypePersonNameItem) ? get_class($customerTypePersonNameItem) : gettype($customerTypePersonNameItem)), __LINE__);
            }
        }
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Add item to PersonName value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToPersonName($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PersonName property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PersonName[] = $item;
        return $this;
    }
    /**
     * Get Telephone value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Telephone[]|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone[] $telephone
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setTelephone(array $telephone = array())
    {
        foreach ($telephone as $customerTypeTelephoneItem) {
            // validation for constraint: itemType
            if (!$customerTypeTelephoneItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Telephone) {
                throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Telephone, "%s" given', is_object($customerTypeTelephoneItem) ? get_class($customerTypeTelephoneItem) : gettype($customerTypeTelephoneItem)), __LINE__);
            }
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Add item to Telephone value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Telephone $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToTelephone(\Devlabs91\GenericOtaHotelApiService\StructType\Telephone $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Telephone) {
            throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Telephone, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Telephone[] = $item;
        return $this;
    }
    /**
     * Get Email value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Email[]|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Email[] $email
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setEmail(array $email = array())
    {
        foreach ($email as $customerTypeEmailItem) {
            // validation for constraint: itemType
            if (!$customerTypeEmailItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Email) {
                throw new \InvalidArgumentException(sprintf('The Email property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Email, "%s" given', is_object($customerTypeEmailItem) ? get_class($customerTypeEmailItem) : gettype($customerTypeEmailItem)), __LINE__);
            }
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Add item to Email value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Email $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToEmail(\Devlabs91\GenericOtaHotelApiService\StructType\Email $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Email) {
            throw new \InvalidArgumentException(sprintf('The Email property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Email, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\URL[]|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\URL[] $uRL
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setURL(array $uRL = array())
    {
        foreach ($uRL as $customerTypeURLItem) {
            // validation for constraint: itemType
            if (!$customerTypeURLItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\URL) {
                throw new \InvalidArgumentException(sprintf('The URL property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\URL, "%s" given', is_object($customerTypeURLItem) ? get_class($customerTypeURLItem) : gettype($customerTypeURLItem)), __LINE__);
            }
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Add item to URL value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\URL $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToURL(\Devlabs91\GenericOtaHotelApiService\StructType\URL $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\URL) {
            throw new \InvalidArgumentException(sprintf('The URL property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\URL, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->URL[] = $item;
        return $this;
    }
    /**
     * Get CitizenCountryName value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CitizenCountryName[]|null
     */
    public function getCitizenCountryName()
    {
        return $this->CitizenCountryName;
    }
    /**
     * Set CitizenCountryName value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CitizenCountryName[] $citizenCountryName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setCitizenCountryName(array $citizenCountryName = array())
    {
        foreach ($citizenCountryName as $customerTypeCitizenCountryNameItem) {
            // validation for constraint: itemType
            if (!$customerTypeCitizenCountryNameItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CitizenCountryName) {
                throw new \InvalidArgumentException(sprintf('The CitizenCountryName property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CitizenCountryName, "%s" given', is_object($customerTypeCitizenCountryNameItem) ? get_class($customerTypeCitizenCountryNameItem) : gettype($customerTypeCitizenCountryNameItem)), __LINE__);
            }
        }
        $this->CitizenCountryName = $citizenCountryName;
        return $this;
    }
    /**
     * Add item to CitizenCountryName value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CitizenCountryName $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToCitizenCountryName(\Devlabs91\GenericOtaHotelApiService\StructType\CitizenCountryName $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CitizenCountryName) {
            throw new \InvalidArgumentException(sprintf('The CitizenCountryName property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CitizenCountryName, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CitizenCountryName[] = $item;
        return $this;
    }
    /**
     * Get PhysChallName value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PhysChallName[]|null
     */
    public function getPhysChallName()
    {
        return $this->PhysChallName;
    }
    /**
     * Set PhysChallName value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PhysChallName[] $physChallName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setPhysChallName(array $physChallName = array())
    {
        foreach ($physChallName as $customerTypePhysChallNameItem) {
            // validation for constraint: itemType
            if (!$customerTypePhysChallNameItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PhysChallName) {
                throw new \InvalidArgumentException(sprintf('The PhysChallName property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PhysChallName, "%s" given', is_object($customerTypePhysChallNameItem) ? get_class($customerTypePhysChallNameItem) : gettype($customerTypePhysChallNameItem)), __LINE__);
            }
        }
        $this->PhysChallName = $physChallName;
        return $this;
    }
    /**
     * Add item to PhysChallName value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PhysChallName $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToPhysChallName(\Devlabs91\GenericOtaHotelApiService\StructType\PhysChallName $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PhysChallName) {
            throw new \InvalidArgumentException(sprintf('The PhysChallName property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PhysChallName, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentForm[]|null
     */
    public function getPaymentForm()
    {
        return $this->PaymentForm;
    }
    /**
     * Set PaymentForm value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentForm[] $paymentForm
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setPaymentForm(array $paymentForm = array())
    {
        foreach ($paymentForm as $customerTypePaymentFormItem) {
            // validation for constraint: itemType
            if (!$customerTypePaymentFormItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PaymentForm) {
                throw new \InvalidArgumentException(sprintf('The PaymentForm property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PaymentForm, "%s" given', is_object($customerTypePaymentFormItem) ? get_class($customerTypePaymentFormItem) : gettype($customerTypePaymentFormItem)), __LINE__);
            }
        }
        $this->PaymentForm = $paymentForm;
        return $this;
    }
    /**
     * Add item to PaymentForm value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentForm $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToPaymentForm(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentForm $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PaymentForm) {
            throw new \InvalidArgumentException(sprintf('The PaymentForm property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PaymentForm, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty[]|null
     */
    public function getCustLoyalty()
    {
        return $this->CustLoyalty;
    }
    /**
     * Set CustLoyalty value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty[] $custLoyalty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setCustLoyalty(array $custLoyalty = array())
    {
        foreach ($custLoyalty as $customerTypeCustLoyaltyItem) {
            // validation for constraint: itemType
            if (!$customerTypeCustLoyaltyItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty) {
                throw new \InvalidArgumentException(sprintf('The CustLoyalty property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty, "%s" given', is_object($customerTypeCustLoyaltyItem) ? get_class($customerTypeCustLoyaltyItem) : gettype($customerTypeCustLoyaltyItem)), __LINE__);
            }
        }
        $this->CustLoyalty = $custLoyalty;
        return $this;
    }
    /**
     * Add item to CustLoyalty value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToCustLoyalty(\Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty) {
            throw new \InvalidArgumentException(sprintf('The CustLoyalty property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CustLoyalty, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * Get EmployerInfo value
     * @return mixed|null
     */
    public function getEmployerInfo()
    {
        return $this->EmployerInfo;
    }
    /**
     * Set EmployerInfo value
     * @param mixed $employerInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setEmployerInfo($employerInfo = null)
    {
        $this->EmployerInfo = $employerInfo;
        return $this;
    }
    /**
     * Get AdditionalLanguage value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalLanguage[]|null
     */
    public function getAdditionalLanguage()
    {
        return $this->AdditionalLanguage;
    }
    /**
     * Set AdditionalLanguage value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalLanguage[] $additionalLanguage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setAdditionalLanguage(array $additionalLanguage = array())
    {
        foreach ($additionalLanguage as $customerTypeAdditionalLanguageItem) {
            // validation for constraint: itemType
            if (!$customerTypeAdditionalLanguageItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalLanguage) {
                throw new \InvalidArgumentException(sprintf('The AdditionalLanguage property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalLanguage, "%s" given', is_object($customerTypeAdditionalLanguageItem) ? get_class($customerTypeAdditionalLanguageItem) : gettype($customerTypeAdditionalLanguageItem)), __LINE__);
            }
        }
        $this->AdditionalLanguage = $additionalLanguage;
        return $this;
    }
    /**
     * Add item to AdditionalLanguage value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalLanguage $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function addToAdditionalLanguage(\Devlabs91\GenericOtaHotelApiService\StructType\AdditionalLanguage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalLanguage) {
            throw new \InvalidArgumentException(sprintf('The AdditionalLanguage property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AdditionalLanguage, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalLanguage[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
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
     * Get VIP_Indicator value
     * @return bool|null
     */
    public function getVIP_Indicator()
    {
        return $this->VIP_Indicator;
    }
    /**
     * Set VIP_Indicator value
     * @param bool $vIP_Indicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setVIP_Indicator($vIP_Indicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($vIP_Indicator) && !is_bool($vIP_Indicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($vIP_Indicator)), __LINE__);
        }
        $this->VIP_Indicator = $vIP_Indicator;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get CustomerValue value
     * @return string|null
     */
    public function getCustomerValue()
    {
        return $this->CustomerValue;
    }
    /**
     * Set CustomerValue value
     * @param string $customerValue
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setCustomerValue($customerValue = null)
    {
        // validation for constraint: string
        if (!is_null($customerValue) && !is_string($customerValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerValue)), __LINE__);
        }
        $this->CustomerValue = $customerValue;
        return $this;
    }
    /**
     * Get MaritalStatus value
     * @return string|null
     */
    public function getMaritalStatus()
    {
        return $this->MaritalStatus;
    }
    /**
     * Set MaritalStatus value
     * @param string $maritalStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setMaritalStatus($maritalStatus = null)
    {
        // validation for constraint: string
        if (!is_null($maritalStatus) && !is_string($maritalStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maritalStatus)), __LINE__);
        }
        $this->MaritalStatus = $maritalStatus;
        return $this;
    }
    /**
     * Get PreviouslyMarriedIndicator value
     * @return bool|null
     */
    public function getPreviouslyMarriedIndicator()
    {
        return $this->PreviouslyMarriedIndicator;
    }
    /**
     * Set PreviouslyMarriedIndicator value
     * @param bool $previouslyMarriedIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setPreviouslyMarriedIndicator($previouslyMarriedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($previouslyMarriedIndicator) && !is_bool($previouslyMarriedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($previouslyMarriedIndicator)), __LINE__);
        }
        $this->PreviouslyMarriedIndicator = $previouslyMarriedIndicator;
        return $this;
    }
    /**
     * Get ChildQuantity value
     * @return string|null
     */
    public function getChildQuantity()
    {
        return $this->ChildQuantity;
    }
    /**
     * Set ChildQuantity value
     * @param string $childQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CustomerType
     */
    public function setChildQuantity($childQuantity = null)
    {
        // validation for constraint: string
        if (!is_null($childQuantity) && !is_string($childQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($childQuantity)), __LINE__);
        }
        $this->ChildQuantity = $childQuantity;
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
