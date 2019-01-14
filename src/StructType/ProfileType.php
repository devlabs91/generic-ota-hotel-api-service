<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Profile types associated with the viewership, i.e, the types of profiles allowed to view this information. Please refer the OTA Code tables. | Root element for profile content.
 * - type: OTA_CodeType
 * - use: optional
 * @subpackage Structs
 */
class ProfileType extends AbstractStructBase
{
    /**
     * The Accesses
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Accesses;
    /**
     * The Customer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Customer;
    /**
     * The PrefCollections
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $PrefCollections;
    /**
     * The CompanyInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $CompanyInfo;
    /**
     * The Affiliations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Affiliations;
    /**
     * The Agreements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Agreements;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for ProfileType
     * @uses ProfileType::setAccesses()
     * @uses ProfileType::setCustomer()
     * @uses ProfileType::setPrefCollections()
     * @uses ProfileType::setCompanyInfo()
     * @uses ProfileType::setAffiliations()
     * @uses ProfileType::setAgreements()
     * @uses ProfileType::setTPA_Extensions()
     * @param mixed $accesses
     * @param mixed $customer
     * @param mixed $prefCollections
     * @param mixed $companyInfo
     * @param mixed $affiliations
     * @param mixed $agreements
     * @param mixed $tPA_Extensions
     */
    public function __construct($accesses = null, $customer = null, $prefCollections = null, $companyInfo = null, $affiliations = null, $agreements = null, $tPA_Extensions = null)
    {
        $this
            ->setAccesses($accesses)
            ->setCustomer($customer)
            ->setPrefCollections($prefCollections)
            ->setCompanyInfo($companyInfo)
            ->setAffiliations($affiliations)
            ->setAgreements($agreements)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get Accesses value
     * @return mixed|null
     */
    public function getAccesses()
    {
        return $this->Accesses;
    }
    /**
     * Set Accesses value
     * @param mixed $accesses
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileType
     */
    public function setAccesses($accesses = null)
    {
        $this->Accesses = $accesses;
        return $this;
    }
    /**
     * Get Customer value
     * @return mixed|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param mixed $customer
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileType
     */
    public function setCustomer($customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get PrefCollections value
     * @return mixed|null
     */
    public function getPrefCollections()
    {
        return $this->PrefCollections;
    }
    /**
     * Set PrefCollections value
     * @param mixed $prefCollections
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileType
     */
    public function setPrefCollections($prefCollections = null)
    {
        $this->PrefCollections = $prefCollections;
        return $this;
    }
    /**
     * Get CompanyInfo value
     * @return mixed|null
     */
    public function getCompanyInfo()
    {
        return $this->CompanyInfo;
    }
    /**
     * Set CompanyInfo value
     * @param mixed $companyInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileType
     */
    public function setCompanyInfo($companyInfo = null)
    {
        $this->CompanyInfo = $companyInfo;
        return $this;
    }
    /**
     * Get Affiliations value
     * @return mixed|null
     */
    public function getAffiliations()
    {
        return $this->Affiliations;
    }
    /**
     * Set Affiliations value
     * @param mixed $affiliations
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileType
     */
    public function setAffiliations($affiliations = null)
    {
        $this->Affiliations = $affiliations;
        return $this;
    }
    /**
     * Get Agreements value
     * @return mixed|null
     */
    public function getAgreements()
    {
        return $this->Agreements;
    }
    /**
     * Set Agreements value
     * @param mixed $agreements
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileType
     */
    public function setAgreements($agreements = null)
    {
        $this->Agreements = $agreements;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileType
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
