<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OwnInsuranceChoiceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of the customer's own insurance policy.
 * @subpackage Structs
 */
class OwnInsuranceChoiceType extends AbstractStructBase
{
    /**
     * The InsuranceCompany
     * Meta informations extracted from the WSDL
     * - documentation: The name of the customer's chosen insurance company.
     * - use: required
     * @var string
     */
    public $InsuranceCompany;
    /**
     * The CustomerCounts
     * Meta informations extracted from the WSDL
     * - documentation: Counts of the number of passengers in age categories. Used when individual passenger identification is not required.
     * - minOccurs: 0
     * @var mixed
     */
    public $CustomerCounts;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: (Reference Place Holder) - an index code to identify an instance in a collection of like items. For example, used to assign individual passengers or clients to particular itinerary items.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The PolicyNmbr
     * Meta informations extracted from the WSDL
     * - documentation: A reference by which an issued policy is recognised.
     * - use: optional
     * @var string
     */
    public $PolicyNmbr;
    /**
     * Constructor method for OwnInsuranceChoiceType
     * @uses OwnInsuranceChoiceType::setInsuranceCompany()
     * @uses OwnInsuranceChoiceType::setCustomerCounts()
     * @uses OwnInsuranceChoiceType::setRPH()
     * @uses OwnInsuranceChoiceType::setPolicyNmbr()
     * @param string $insuranceCompany
     * @param mixed $customerCounts
     * @param string $rPH
     * @param string $policyNmbr
     */
    public function __construct($insuranceCompany = null, $customerCounts = null, $rPH = null, $policyNmbr = null)
    {
        $this
            ->setInsuranceCompany($insuranceCompany)
            ->setCustomerCounts($customerCounts)
            ->setRPH($rPH)
            ->setPolicyNmbr($policyNmbr);
    }
    /**
     * Get InsuranceCompany value
     * @return string
     */
    public function getInsuranceCompany()
    {
        return $this->InsuranceCompany;
    }
    /**
     * Set InsuranceCompany value
     * @param string $insuranceCompany
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OwnInsuranceChoiceType
     */
    public function setInsuranceCompany($insuranceCompany = null)
    {
        // validation for constraint: string
        if (!is_null($insuranceCompany) && !is_string($insuranceCompany)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insuranceCompany)), __LINE__);
        }
        $this->InsuranceCompany = $insuranceCompany;
        return $this;
    }
    /**
     * Get CustomerCounts value
     * @return mixed|null
     */
    public function getCustomerCounts()
    {
        return $this->CustomerCounts;
    }
    /**
     * Set CustomerCounts value
     * @param mixed $customerCounts
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OwnInsuranceChoiceType
     */
    public function setCustomerCounts($customerCounts = null)
    {
        $this->CustomerCounts = $customerCounts;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OwnInsuranceChoiceType
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
     * Get PolicyNmbr value
     * @return string|null
     */
    public function getPolicyNmbr()
    {
        return $this->PolicyNmbr;
    }
    /**
     * Set PolicyNmbr value
     * @param string $policyNmbr
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OwnInsuranceChoiceType
     */
    public function setPolicyNmbr($policyNmbr = null)
    {
        // validation for constraint: string
        if (!is_null($policyNmbr) && !is_string($policyNmbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyNmbr)), __LINE__);
        }
        $this->PolicyNmbr = $policyNmbr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OwnInsuranceChoiceType
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
