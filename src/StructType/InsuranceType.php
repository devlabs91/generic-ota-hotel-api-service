<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Travel insurance carried by the customer or company.
 * @subpackage Structs
 */
class InsuranceType extends AbstractStructBase
{
    /**
     * The PolicyNumber
     * Meta informations extracted from the WSDL
     * - documentation: Identifier assigned by insurance company to the insurance policy.
     * - use: required
     * @var string
     */
    public $PolicyNumber;
    /**
     * The InsuredName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $InsuredName;
    /**
     * The InsuranceCompany
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $InsuranceCompany;
    /**
     * The Underwriter
     * Meta informations extracted from the WSDL
     * - documentation: Underwriting company providing coverage.
     * - minOccurs: 0
     * @var mixed
     */
    public $Underwriter;
    /**
     * The InsuranceType
     * Meta informations extracted from the WSDL
     * - documentation: Type of insurance policy carried by the individual or company.
     * @var string
     */
    public $InsuranceType;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for InsuranceType
     * @uses InsuranceType::setPolicyNumber()
     * @uses InsuranceType::setInsuredName()
     * @uses InsuranceType::setInsuranceCompany()
     * @uses InsuranceType::setUnderwriter()
     * @uses InsuranceType::setInsuranceType()
     * @uses InsuranceType::setRPH()
     * @param string $policyNumber
     * @param mixed $insuredName
     * @param mixed $insuranceCompany
     * @param mixed $underwriter
     * @param string $insuranceType
     * @param string $rPH
     */
    public function __construct($policyNumber = null, $insuredName = null, $insuranceCompany = null, $underwriter = null, $insuranceType = null, $rPH = null)
    {
        $this
            ->setPolicyNumber($policyNumber)
            ->setInsuredName($insuredName)
            ->setInsuranceCompany($insuranceCompany)
            ->setUnderwriter($underwriter)
            ->setInsuranceType($insuranceType)
            ->setRPH($rPH);
    }
    /**
     * Get PolicyNumber value
     * @return string
     */
    public function getPolicyNumber()
    {
        return $this->PolicyNumber;
    }
    /**
     * Set PolicyNumber value
     * @param string $policyNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InsuranceType
     */
    public function setPolicyNumber($policyNumber = null)
    {
        // validation for constraint: string
        if (!is_null($policyNumber) && !is_string($policyNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyNumber)), __LINE__);
        }
        $this->PolicyNumber = $policyNumber;
        return $this;
    }
    /**
     * Get InsuredName value
     * @return mixed|null
     */
    public function getInsuredName()
    {
        return $this->InsuredName;
    }
    /**
     * Set InsuredName value
     * @param mixed $insuredName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InsuranceType
     */
    public function setInsuredName($insuredName = null)
    {
        $this->InsuredName = $insuredName;
        return $this;
    }
    /**
     * Get InsuranceCompany value
     * @return mixed|null
     */
    public function getInsuranceCompany()
    {
        return $this->InsuranceCompany;
    }
    /**
     * Set InsuranceCompany value
     * @param mixed $insuranceCompany
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InsuranceType
     */
    public function setInsuranceCompany($insuranceCompany = null)
    {
        $this->InsuranceCompany = $insuranceCompany;
        return $this;
    }
    /**
     * Get Underwriter value
     * @return mixed|null
     */
    public function getUnderwriter()
    {
        return $this->Underwriter;
    }
    /**
     * Set Underwriter value
     * @param mixed $underwriter
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InsuranceType
     */
    public function setUnderwriter($underwriter = null)
    {
        $this->Underwriter = $underwriter;
        return $this;
    }
    /**
     * Get InsuranceType value
     * @return string|null
     */
    public function getInsuranceType()
    {
        return $this->InsuranceType;
    }
    /**
     * Set InsuranceType value
     * @param string $insuranceType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InsuranceType
     */
    public function setInsuranceType($insuranceType = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceType) && !is_string($insuranceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insuranceType)), __LINE__);
        }
        $this->InsuranceType = $insuranceType;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InsuranceType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InsuranceType
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
