<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address StructType
 * Meta informations extracted from the WSDL
 * - documentation: Address information of the person traveling. | Detailed information on an address for the customer. | The first and last dates between which this address is in effect. | Uses any part of address information, such as street name,
 * postal code, or country code. | This is used to indicate that an item is obsolete. | The ID attribute in this group is a unique identifying value assigned by the creating system and may be used to reference a primary-key value within a database or in
 * a particular implementation. | The address to which a deposit may be sent. | The address for vehicle delivery or collection, or for customer pickup or drop-off.
 * @subpackage Structs
 */
class Address extends AddressType
{
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - documentation: Identifies a company.
     * - minOccurs: 0
     * @var mixed
     */
    public $CompanyName;
    /**
     * The AddresseeName
     * Meta informations extracted from the WSDL
     * - documentation: Name of the person to whom this address relates. | The name of the reciever of the payment.
     * - minOccurs: 0
     * - use: optional
     * @var mixed
     */
    public $AddresseeName;
    /**
     * The ValidationStatus
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ValidationStatus;
    /**
     * The TransferAction
     * Meta informations extracted from the WSDL
     * - documentation: Indicates under what conditions the element will be transfered to the booking.
     * - use: optional
     * @var string
     */
    public $TransferAction;
    /**
     * The ParentCompanyRef
     * Meta informations extracted from the WSDL
     * - documentation: A reference to the company from which this element has been inherited.
     * - use: optional
     * @var string
     */
    public $ParentCompanyRef;
    /**
     * The SameCountryInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, only locations in the same country as the specified city's country should be selected.
     * - use: optional
     * @var bool
     */
    public $SameCountryInd;
    /**
     * The AddressSearchScope
     * @var string
     */
    public $AddressSearchScope;
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the required modification to the element.
     * - use: optional
     * @var string
     */
    public $Operation;
    /**
     * The SiteID
     * Meta informations extracted from the WSDL
     * - documentation: An identifier of a particular location used in place of address details.
     * - use: optional
     * @var string
     */
    public $SiteID;
    /**
     * The SiteName
     * Meta informations extracted from the WSDL
     * - documentation: This field is to provide a name for the site reference of the off location service.
     * - use: optional
     * @var string
     */
    public $SiteName;
    /**
     * Constructor method for Address
     * @uses Address::setCompanyName()
     * @uses Address::setAddresseeName()
     * @uses Address::setValidationStatus()
     * @uses Address::setTransferAction()
     * @uses Address::setParentCompanyRef()
     * @uses Address::setSameCountryInd()
     * @uses Address::setAddressSearchScope()
     * @uses Address::setOperation()
     * @uses Address::setSiteID()
     * @uses Address::setSiteName()
     * @param mixed $companyName
     * @param mixed $addresseeName
     * @param string $validationStatus
     * @param string $transferAction
     * @param string $parentCompanyRef
     * @param bool $sameCountryInd
     * @param string $addressSearchScope
     * @param string $operation
     * @param string $siteID
     * @param string $siteName
     */
    public function __construct($companyName = null, $addresseeName = null, $validationStatus = null, $transferAction = null, $parentCompanyRef = null, $sameCountryInd = null, $addressSearchScope = null, $operation = null, $siteID = null, $siteName = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setAddresseeName($addresseeName)
            ->setValidationStatus($validationStatus)
            ->setTransferAction($transferAction)
            ->setParentCompanyRef($parentCompanyRef)
            ->setSameCountryInd($sameCountryInd)
            ->setAddressSearchScope($addressSearchScope)
            ->setOperation($operation)
            ->setSiteID($siteID)
            ->setSiteName($siteName);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Address
     */
    public function setCompanyName($companyName = null)
    {
        $this->CompanyName = $companyName;
        return $this;
    }
    /**
     * Get AddresseeName value
     * @return mixed|null
     */
    public function getAddresseeName()
    {
        return $this->AddresseeName;
    }
    /**
     * Set AddresseeName value
     * @param mixed $addresseeName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Address
     */
    public function setAddresseeName($addresseeName = null)
    {
        $this->AddresseeName = $addresseeName;
        return $this;
    }
    /**
     * Get ValidationStatus value
     * @return string|null
     */
    public function getValidationStatus()
    {
        return $this->ValidationStatus;
    }
    /**
     * Set ValidationStatus value
     * @param string $validationStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Address
     */
    public function setValidationStatus($validationStatus = null)
    {
        // validation for constraint: string
        if (!is_null($validationStatus) && !is_string($validationStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validationStatus)), __LINE__);
        }
        $this->ValidationStatus = $validationStatus;
        return $this;
    }
    /**
     * Get TransferAction value
     * @return string|null
     */
    public function getTransferAction()
    {
        return $this->TransferAction;
    }
    /**
     * Set TransferAction value
     * @param string $transferAction
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Address
     */
    public function setTransferAction($transferAction = null)
    {
        // validation for constraint: string
        if (!is_null($transferAction) && !is_string($transferAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transferAction)), __LINE__);
        }
        $this->TransferAction = $transferAction;
        return $this;
    }
    /**
     * Get ParentCompanyRef value
     * @return string|null
     */
    public function getParentCompanyRef()
    {
        return $this->ParentCompanyRef;
    }
    /**
     * Set ParentCompanyRef value
     * @param string $parentCompanyRef
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Address
     */
    public function setParentCompanyRef($parentCompanyRef = null)
    {
        // validation for constraint: string
        if (!is_null($parentCompanyRef) && !is_string($parentCompanyRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($parentCompanyRef)), __LINE__);
        }
        $this->ParentCompanyRef = $parentCompanyRef;
        return $this;
    }
    /**
     * Get SameCountryInd value
     * @return bool|null
     */
    public function getSameCountryInd()
    {
        return $this->SameCountryInd;
    }
    /**
     * Set SameCountryInd value
     * @param bool $sameCountryInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Address
     */
    public function setSameCountryInd($sameCountryInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($sameCountryInd) && !is_bool($sameCountryInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($sameCountryInd)), __LINE__);
        }
        $this->SameCountryInd = $sameCountryInd;
        return $this;
    }
    /**
     * Get AddressSearchScope value
     * @return string|null
     */
    public function getAddressSearchScope()
    {
        return $this->AddressSearchScope;
    }
    /**
     * Set AddressSearchScope value
     * @param string $addressSearchScope
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Address
     */
    public function setAddressSearchScope($addressSearchScope = null)
    {
        // validation for constraint: string
        if (!is_null($addressSearchScope) && !is_string($addressSearchScope)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressSearchScope)), __LINE__);
        }
        $this->AddressSearchScope = $addressSearchScope;
        return $this;
    }
    /**
     * Get Operation value
     * @return string|null
     */
    public function getOperation()
    {
        return $this->Operation;
    }
    /**
     * Set Operation value
     * @param string $operation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Address
     */
    public function setOperation($operation = null)
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operation)), __LINE__);
        }
        $this->Operation = $operation;
        return $this;
    }
    /**
     * Get SiteID value
     * @return string|null
     */
    public function getSiteID()
    {
        return $this->SiteID;
    }
    /**
     * Set SiteID value
     * @param string $siteID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Address
     */
    public function setSiteID($siteID = null)
    {
        // validation for constraint: string
        if (!is_null($siteID) && !is_string($siteID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($siteID)), __LINE__);
        }
        $this->SiteID = $siteID;
        return $this;
    }
    /**
     * Get SiteName value
     * @return string|null
     */
    public function getSiteName()
    {
        return $this->SiteName;
    }
    /**
     * Set SiteName value
     * @param string $siteName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Address
     */
    public function setSiteName($siteName = null)
    {
        // validation for constraint: string
        if (!is_null($siteName) && !is_string($siteName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($siteName)), __LINE__);
        }
        $this->SiteName = $siteName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Address
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
