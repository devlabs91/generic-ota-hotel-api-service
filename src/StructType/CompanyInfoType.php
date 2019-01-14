<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompanyInfoType StructType
 * @subpackage Structs
 */
class CompanyInfoType extends AbstractStructBase
{
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $CompanyName;
    /**
     * The AddressInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $AddressInfo;
    /**
     * The TelephoneInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $TelephoneInfo;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Email;
    /**
     * The URL
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $URL;
    /**
     * The BusinessLocale
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $BusinessLocale;
    /**
     * The PaymentForm
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PaymentForm;
    /**
     * The ContactPerson
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $ContactPerson;
    /**
     * The TravelArranger
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $TravelArranger;
    /**
     * The LoyaltyProgram
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $LoyaltyProgram;
    /**
     * Constructor method for CompanyInfoType
     * @uses CompanyInfoType::setCompanyName()
     * @uses CompanyInfoType::setAddressInfo()
     * @uses CompanyInfoType::setTelephoneInfo()
     * @uses CompanyInfoType::setEmail()
     * @uses CompanyInfoType::setURL()
     * @uses CompanyInfoType::setBusinessLocale()
     * @uses CompanyInfoType::setPaymentForm()
     * @uses CompanyInfoType::setContactPerson()
     * @uses CompanyInfoType::setTravelArranger()
     * @uses CompanyInfoType::setLoyaltyProgram()
     * @param mixed[] $companyName
     * @param mixed[] $addressInfo
     * @param mixed[] $telephoneInfo
     * @param mixed[] $email
     * @param mixed[] $uRL
     * @param mixed[] $businessLocale
     * @param mixed[] $paymentForm
     * @param mixed[] $contactPerson
     * @param mixed[] $travelArranger
     * @param mixed[] $loyaltyProgram
     */
    public function __construct(array $companyName = array(), array $addressInfo = array(), array $telephoneInfo = array(), array $email = array(), array $uRL = array(), array $businessLocale = array(), array $paymentForm = array(), array $contactPerson = array(), array $travelArranger = array(), array $loyaltyProgram = array())
    {
        $this
            ->setCompanyName($companyName)
            ->setAddressInfo($addressInfo)
            ->setTelephoneInfo($telephoneInfo)
            ->setEmail($email)
            ->setURL($uRL)
            ->setBusinessLocale($businessLocale)
            ->setPaymentForm($paymentForm)
            ->setContactPerson($contactPerson)
            ->setTravelArranger($travelArranger)
            ->setLoyaltyProgram($loyaltyProgram);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
     */
    public function setCompanyName(array $companyName = array())
    {
        foreach ($companyName as $companyInfoTypeCompanyNameItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CompanyName property can only contain items of anyType, "%s" given', is_object($companyInfoTypeCompanyNameItem) ? get_class($companyInfoTypeCompanyNameItem) : gettype($companyInfoTypeCompanyNameItem)), __LINE__);
            }
        }
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Add item to CompanyName value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
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
     * Get AddressInfo value
     * @return mixed[]|null
     */
    public function getAddressInfo()
    {
        return $this->AddressInfo;
    }
    /**
     * Set AddressInfo value
     * @throws \InvalidArgumentException
     * @param mixed[] $addressInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
     */
    public function setAddressInfo(array $addressInfo = array())
    {
        foreach ($addressInfo as $companyInfoTypeAddressInfoItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AddressInfo property can only contain items of anyType, "%s" given', is_object($companyInfoTypeAddressInfoItem) ? get_class($companyInfoTypeAddressInfoItem) : gettype($companyInfoTypeAddressInfoItem)), __LINE__);
            }
        }
        $this->AddressInfo = $addressInfo;
        return $this;
    }
    /**
     * Add item to AddressInfo value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
     */
    public function addToAddressInfo($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AddressInfo property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AddressInfo[] = $item;
        return $this;
    }
    /**
     * Get TelephoneInfo value
     * @return mixed[]|null
     */
    public function getTelephoneInfo()
    {
        return $this->TelephoneInfo;
    }
    /**
     * Set TelephoneInfo value
     * @throws \InvalidArgumentException
     * @param mixed[] $telephoneInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
     */
    public function setTelephoneInfo(array $telephoneInfo = array())
    {
        foreach ($telephoneInfo as $companyInfoTypeTelephoneInfoItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The TelephoneInfo property can only contain items of anyType, "%s" given', is_object($companyInfoTypeTelephoneInfoItem) ? get_class($companyInfoTypeTelephoneInfoItem) : gettype($companyInfoTypeTelephoneInfoItem)), __LINE__);
            }
        }
        $this->TelephoneInfo = $telephoneInfo;
        return $this;
    }
    /**
     * Add item to TelephoneInfo value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
     */
    public function addToTelephoneInfo($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The TelephoneInfo property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TelephoneInfo[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
     */
    public function setEmail(array $email = array())
    {
        foreach ($email as $companyInfoTypeEmailItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Email property can only contain items of anyType, "%s" given', is_object($companyInfoTypeEmailItem) ? get_class($companyInfoTypeEmailItem) : gettype($companyInfoTypeEmailItem)), __LINE__);
            }
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Add item to Email value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
     */
    public function setURL(array $uRL = array())
    {
        foreach ($uRL as $companyInfoTypeURLItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The URL property can only contain items of anyType, "%s" given', is_object($companyInfoTypeURLItem) ? get_class($companyInfoTypeURLItem) : gettype($companyInfoTypeURLItem)), __LINE__);
            }
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Add item to URL value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
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
     * Get BusinessLocale value
     * @return mixed[]|null
     */
    public function getBusinessLocale()
    {
        return $this->BusinessLocale;
    }
    /**
     * Set BusinessLocale value
     * @throws \InvalidArgumentException
     * @param mixed[] $businessLocale
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
     */
    public function setBusinessLocale(array $businessLocale = array())
    {
        foreach ($businessLocale as $companyInfoTypeBusinessLocaleItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The BusinessLocale property can only contain items of anyType, "%s" given', is_object($companyInfoTypeBusinessLocaleItem) ? get_class($companyInfoTypeBusinessLocaleItem) : gettype($companyInfoTypeBusinessLocaleItem)), __LINE__);
            }
        }
        $this->BusinessLocale = $businessLocale;
        return $this;
    }
    /**
     * Add item to BusinessLocale value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
     */
    public function addToBusinessLocale($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The BusinessLocale property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BusinessLocale[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
     */
    public function setPaymentForm(array $paymentForm = array())
    {
        foreach ($paymentForm as $companyInfoTypePaymentFormItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PaymentForm property can only contain items of anyType, "%s" given', is_object($companyInfoTypePaymentFormItem) ? get_class($companyInfoTypePaymentFormItem) : gettype($companyInfoTypePaymentFormItem)), __LINE__);
            }
        }
        $this->PaymentForm = $paymentForm;
        return $this;
    }
    /**
     * Add item to PaymentForm value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
     */
    public function setContactPerson(array $contactPerson = array())
    {
        foreach ($contactPerson as $companyInfoTypeContactPersonItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The ContactPerson property can only contain items of anyType, "%s" given', is_object($companyInfoTypeContactPersonItem) ? get_class($companyInfoTypeContactPersonItem) : gettype($companyInfoTypeContactPersonItem)), __LINE__);
            }
        }
        $this->ContactPerson = $contactPerson;
        return $this;
    }
    /**
     * Add item to ContactPerson value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
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
     * Get TravelArranger value
     * @return mixed[]|null
     */
    public function getTravelArranger()
    {
        return $this->TravelArranger;
    }
    /**
     * Set TravelArranger value
     * @throws \InvalidArgumentException
     * @param mixed[] $travelArranger
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
     */
    public function setTravelArranger(array $travelArranger = array())
    {
        foreach ($travelArranger as $companyInfoTypeTravelArrangerItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The TravelArranger property can only contain items of anyType, "%s" given', is_object($companyInfoTypeTravelArrangerItem) ? get_class($companyInfoTypeTravelArrangerItem) : gettype($companyInfoTypeTravelArrangerItem)), __LINE__);
            }
        }
        $this->TravelArranger = $travelArranger;
        return $this;
    }
    /**
     * Add item to TravelArranger value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
     */
    public function addToTravelArranger($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The TravelArranger property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TravelArranger[] = $item;
        return $this;
    }
    /**
     * Get LoyaltyProgram value
     * @return mixed[]|null
     */
    public function getLoyaltyProgram()
    {
        return $this->LoyaltyProgram;
    }
    /**
     * Set LoyaltyProgram value
     * @throws \InvalidArgumentException
     * @param mixed[] $loyaltyProgram
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
     */
    public function setLoyaltyProgram(array $loyaltyProgram = array())
    {
        foreach ($loyaltyProgram as $companyInfoTypeLoyaltyProgramItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The LoyaltyProgram property can only contain items of anyType, "%s" given', is_object($companyInfoTypeLoyaltyProgramItem) ? get_class($companyInfoTypeLoyaltyProgramItem) : gettype($companyInfoTypeLoyaltyProgramItem)), __LINE__);
            }
        }
        $this->LoyaltyProgram = $loyaltyProgram;
        return $this;
    }
    /**
     * Add item to LoyaltyProgram value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
     */
    public function addToLoyaltyProgram($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The LoyaltyProgram property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LoyaltyProgram[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CompanyInfoType
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
