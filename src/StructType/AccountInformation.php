<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountInformation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information related to back office accounting information for the travel agency.
 * @subpackage Structs
 */
class AccountInformation extends AbstractStructBase
{
    /**
     * The TaxRegistrationDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TaxRegistrationDetails
     */
    public $TaxRegistrationDetails;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - documentation: Ticketing account number.
     * - use: optional
     * @var string
     */
    public $Number;
    /**
     * The CostCenter
     * Meta informations extracted from the WSDL
     * - documentation: Ticketing cost center.
     * - use: optional
     * @var string
     */
    public $CostCenter;
    /**
     * The CompanyNumber
     * Meta informations extracted from the WSDL
     * - documentation: Ticketing company number.
     * - use: optional
     * @var string
     */
    public $CompanyNumber;
    /**
     * The ClientReference
     * Meta informations extracted from the WSDL
     * - documentation: Ticketing client reference.
     * - use: optional
     * @var string
     */
    public $ClientReference;
    /**
     * Constructor method for AccountInformation
     * @uses AccountInformation::setTaxRegistrationDetails()
     * @uses AccountInformation::setNumber()
     * @uses AccountInformation::setCostCenter()
     * @uses AccountInformation::setCompanyNumber()
     * @uses AccountInformation::setClientReference()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TaxRegistrationDetails $taxRegistrationDetails
     * @param string $number
     * @param string $costCenter
     * @param string $companyNumber
     * @param string $clientReference
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\TaxRegistrationDetails $taxRegistrationDetails = null, $number = null, $costCenter = null, $companyNumber = null, $clientReference = null)
    {
        $this
            ->setTaxRegistrationDetails($taxRegistrationDetails)
            ->setNumber($number)
            ->setCostCenter($costCenter)
            ->setCompanyNumber($companyNumber)
            ->setClientReference($clientReference);
    }
    /**
     * Get TaxRegistrationDetails value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxRegistrationDetails|null
     */
    public function getTaxRegistrationDetails()
    {
        return $this->TaxRegistrationDetails;
    }
    /**
     * Set TaxRegistrationDetails value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TaxRegistrationDetails $taxRegistrationDetails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountInformation
     */
    public function setTaxRegistrationDetails(\Devlabs91\GenericOtaHotelApiService\StructType\TaxRegistrationDetails $taxRegistrationDetails = null)
    {
        $this->TaxRegistrationDetails = $taxRegistrationDetails;
        return $this;
    }
    /**
     * Get Number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountInformation
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get CostCenter value
     * @return string|null
     */
    public function getCostCenter()
    {
        return $this->CostCenter;
    }
    /**
     * Set CostCenter value
     * @param string $costCenter
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountInformation
     */
    public function setCostCenter($costCenter = null)
    {
        // validation for constraint: string
        if (!is_null($costCenter) && !is_string($costCenter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($costCenter)), __LINE__);
        }
        $this->CostCenter = $costCenter;
        return $this;
    }
    /**
     * Get CompanyNumber value
     * @return string|null
     */
    public function getCompanyNumber()
    {
        return $this->CompanyNumber;
    }
    /**
     * Set CompanyNumber value
     * @param string $companyNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountInformation
     */
    public function setCompanyNumber($companyNumber = null)
    {
        // validation for constraint: string
        if (!is_null($companyNumber) && !is_string($companyNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyNumber)), __LINE__);
        }
        $this->CompanyNumber = $companyNumber;
        return $this;
    }
    /**
     * Get ClientReference value
     * @return string|null
     */
    public function getClientReference()
    {
        return $this->ClientReference;
    }
    /**
     * Set ClientReference value
     * @param string $clientReference
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountInformation
     */
    public function setClientReference($clientReference = null)
    {
        // validation for constraint: string
        if (!is_null($clientReference) && !is_string($clientReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clientReference)), __LINE__);
        }
        $this->ClientReference = $clientReference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AccountInformation
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
