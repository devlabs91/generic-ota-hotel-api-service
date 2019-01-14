<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Allows multiple pieces of information to be repeated for a single contact (e.g. one employee has mutliple e-mail addresses) and also allows multiple contacts to be associated to a single or multiple piece of information (e.g. all
 * employees working in a restaurant can be reached at the same phone number).
 * @subpackage Structs
 */
class ContactInfoType extends AbstractStructBase
{
    /**
     * The Names
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Name elements.
     * - minOccurs: 0
     * @var mixed
     */
    public $Names;
    /**
     * The Addresses
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Address elements.
     * - minOccurs: 0
     * @var mixed
     */
    public $Addresses;
    /**
     * The Phones
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Phone elements.
     * - minOccurs: 0
     * @var mixed
     */
    public $Phones;
    /**
     * The Emails
     * Meta informations extracted from the WSDL
     * - documentation: A collection of email elements.
     * - minOccurs: 0
     * @var mixed
     */
    public $Emails;
    /**
     * The URLs
     * Meta informations extracted from the WSDL
     * - documentation: A collection of URL elements. Used to pass detailed URL information
     * - minOccurs: 0
     * @var mixed
     */
    public $URLs;
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - documentation: The name of the company with which this contact is associated.
     * - minOccurs: 0
     * @var mixed
     */
    public $CompanyName;
    /**
     * Constructor method for ContactInfoType
     * @uses ContactInfoType::setNames()
     * @uses ContactInfoType::setAddresses()
     * @uses ContactInfoType::setPhones()
     * @uses ContactInfoType::setEmails()
     * @uses ContactInfoType::setURLs()
     * @uses ContactInfoType::setCompanyName()
     * @param mixed $names
     * @param mixed $addresses
     * @param mixed $phones
     * @param mixed $emails
     * @param mixed $uRLs
     * @param mixed $companyName
     */
    public function __construct($names = null, $addresses = null, $phones = null, $emails = null, $uRLs = null, $companyName = null)
    {
        $this
            ->setNames($names)
            ->setAddresses($addresses)
            ->setPhones($phones)
            ->setEmails($emails)
            ->setURLs($uRLs)
            ->setCompanyName($companyName);
    }
    /**
     * Get Names value
     * @return mixed|null
     */
    public function getNames()
    {
        return $this->Names;
    }
    /**
     * Set Names value
     * @param mixed $names
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfoType
     */
    public function setNames($names = null)
    {
        $this->Names = $names;
        return $this;
    }
    /**
     * Get Addresses value
     * @return mixed|null
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }
    /**
     * Set Addresses value
     * @param mixed $addresses
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfoType
     */
    public function setAddresses($addresses = null)
    {
        $this->Addresses = $addresses;
        return $this;
    }
    /**
     * Get Phones value
     * @return mixed|null
     */
    public function getPhones()
    {
        return $this->Phones;
    }
    /**
     * Set Phones value
     * @param mixed $phones
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfoType
     */
    public function setPhones($phones = null)
    {
        $this->Phones = $phones;
        return $this;
    }
    /**
     * Get Emails value
     * @return mixed|null
     */
    public function getEmails()
    {
        return $this->Emails;
    }
    /**
     * Set Emails value
     * @param mixed $emails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfoType
     */
    public function setEmails($emails = null)
    {
        $this->Emails = $emails;
        return $this;
    }
    /**
     * Get URLs value
     * @return mixed|null
     */
    public function getURLs()
    {
        return $this->URLs;
    }
    /**
     * Set URLs value
     * @param mixed $uRLs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfoType
     */
    public function setURLs($uRLs = null)
    {
        $this->URLs = $uRLs;
        return $this;
    }
    /**
     * Get CompanyName value
     * @return mixed|null
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    /**
     * Set CompanyName value
     * @param mixed $companyName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfoType
     */
    public function setCompanyName($companyName = null)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ContactInfoType
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
