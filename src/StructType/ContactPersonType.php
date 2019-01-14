<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactPersonType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Name of an individual and appropriate contact information. May be contact information for the customer or someone affiliated with the customer.
 * @subpackage Structs
 */
class ContactPersonType extends AbstractStructBase
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
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Address;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Email;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $URL;
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var mixed[]
     */
    public $CompanyName;
    /**
     * The EmployeeInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var mixed[]
     */
    public $EmployeeInfo;
    /**
     * The ContactType
     * Meta informations extracted from the WSDL
     * - documentation: Type of contact in the context of use for the travel experience; such as permanent, temporary, affiliation, travel arranger, etc.
     * @var string
     */
    public $ContactType;
    /**
     * The Relation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of relationship with the person or company in the profile, such as Spouse, Child, Family, Business Associate, Interest Group, Medical, Security,Other, etc.
     * @var string
     */
    public $Relation;
    /**
     * The EmergencyFlag
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: Indicates if this contact should be used in the case of an emergency.
     * - use: optional
     * @var bool
     */
    public $EmergencyFlag;
    /**
     * The RPH
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for ContactPersonType
     * @uses ContactPersonType::setPersonName()
     * @uses ContactPersonType::setTelephone()
     * @uses ContactPersonType::setAddress()
     * @uses ContactPersonType::setEmail()
     * @uses ContactPersonType::setURL()
     * @uses ContactPersonType::setCompanyName()
     * @uses ContactPersonType::setEmployeeInfo()
     * @uses ContactPersonType::setContactType()
     * @uses ContactPersonType::setRelation()
     * @uses ContactPersonType::setEmergencyFlag()
     * @uses ContactPersonType::setRPH()
     * @param mixed $personName
     * @param mixed[] $telephone
     * @param mixed[] $address
     * @param mixed[] $email
     * @param mixed[] $uRL
     * @param mixed[] $companyName
     * @param mixed[] $employeeInfo
     * @param string $contactType
     * @param string $relation
     * @param bool $emergencyFlag
     * @param string $rPH
     */
    public function __construct($personName = null, array $telephone = array(), array $address = array(), array $email = array(), array $uRL = array(), array $companyName = array(), array $employeeInfo = array(), $contactType = null, $relation = null, $emergencyFlag = false, $rPH = null)
    {
        $this
            ->setPersonName($personName)
            ->setTelephone($telephone)
            ->setAddress($address)
            ->setEmail($email)
            ->setURL($uRL)
            ->setCompanyName($companyName)
            ->setEmployeeInfo($employeeInfo)
            ->setContactType($contactType)
            ->setRelation($relation)
            ->setEmergencyFlag($emergencyFlag)
            ->setRPH($rPH);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
     */
    public function setTelephone(array $telephone = array())
    {
        foreach ($telephone as $contactPersonTypeTelephoneItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Telephone property can only contain items of anyType, "%s" given', is_object($contactPersonTypeTelephoneItem) ? get_class($contactPersonTypeTelephoneItem) : gettype($contactPersonTypeTelephoneItem)), __LINE__);
            }
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Add item to Telephone value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
     */
    public function setAddress(array $address = array())
    {
        foreach ($address as $contactPersonTypeAddressItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Address property can only contain items of anyType, "%s" given', is_object($contactPersonTypeAddressItem) ? get_class($contactPersonTypeAddressItem) : gettype($contactPersonTypeAddressItem)), __LINE__);
            }
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Add item to Address value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
     */
    public function setEmail(array $email = array())
    {
        foreach ($email as $contactPersonTypeEmailItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Email property can only contain items of anyType, "%s" given', is_object($contactPersonTypeEmailItem) ? get_class($contactPersonTypeEmailItem) : gettype($contactPersonTypeEmailItem)), __LINE__);
            }
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Add item to Email value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
     */
    public function setURL(array $uRL = array())
    {
        foreach ($uRL as $contactPersonTypeURLItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The URL property can only contain items of anyType, "%s" given', is_object($contactPersonTypeURLItem) ? get_class($contactPersonTypeURLItem) : gettype($contactPersonTypeURLItem)), __LINE__);
            }
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Add item to URL value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
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
     * Get CompanyName value
     * @return mixed[]|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @throws \InvalidArgumentException
     * @param mixed[] $companyName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
     */
    public function setCompanyName(array $companyName = array())
    {
        foreach ($companyName as $contactPersonTypeCompanyNameItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CompanyName property can only contain items of anyType, "%s" given', is_object($contactPersonTypeCompanyNameItem) ? get_class($contactPersonTypeCompanyNameItem) : gettype($contactPersonTypeCompanyNameItem)), __LINE__);
            }
        }
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Add item to CompanyName value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
     */
    public function addToCompanyName($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The CompanyName property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CompanyName[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
     */
    public function setEmployeeInfo(array $employeeInfo = array())
    {
        foreach ($employeeInfo as $contactPersonTypeEmployeeInfoItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The EmployeeInfo property can only contain items of anyType, "%s" given', is_object($contactPersonTypeEmployeeInfoItem) ? get_class($contactPersonTypeEmployeeInfoItem) : gettype($contactPersonTypeEmployeeInfoItem)), __LINE__);
            }
        }
        $this->EmployeeInfo = $employeeInfo;
        return $this;
    }
    /**
     * Add item to EmployeeInfo value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
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
     * Get ContactType value
     * @return string|null
     */
    public function getContactType()
    {
        return $this->ContactType;
    }
    /**
     * Set ContactType value
     * @param string $contactType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
     */
    public function setContactType($contactType = null)
    {
        // validation for constraint: string
        if (!is_null($contactType) && !is_string($contactType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contactType)), __LINE__);
        }
        $this->ContactType = $contactType;
        return $this;
    }
    /**
     * Get Relation value
     * @return string|null
     */
    public function getRelation()
    {
        return $this->Relation;
    }
    /**
     * Set Relation value
     * @param string $relation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
     */
    public function setRelation($relation = null)
    {
        // validation for constraint: string
        if (!is_null($relation) && !is_string($relation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relation)), __LINE__);
        }
        $this->Relation = $relation;
        return $this;
    }
    /**
     * Get EmergencyFlag value
     * @return bool|null
     */
    public function getEmergencyFlag()
    {
        return $this->EmergencyFlag;
    }
    /**
     * Set EmergencyFlag value
     * @param bool $emergencyFlag
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
     */
    public function setEmergencyFlag($emergencyFlag = false)
    {
        // validation for constraint: boolean
        if (!is_null($emergencyFlag) && !is_bool($emergencyFlag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($emergencyFlag)), __LINE__);
        }
        $this->EmergencyFlag = $emergencyFlag;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactPersonType
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
