<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommissionPolicy StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to define the property's high-level commission policy.
 * @subpackage Structs
 */
class CommissionPolicy extends FeeType
{
    /**
     * The PaymentCompany
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCompany[]
     */
    public $PaymentCompany;
    /**
     * The CommissionApplicability
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CommissionApplicability;
    /**
     * Constructor method for CommissionPolicy
     * @uses CommissionPolicy::setPaymentCompany()
     * @uses CommissionPolicy::setCommissionApplicability()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCompany[] $paymentCompany
     * @param string $commissionApplicability
     */
    public function __construct(array $paymentCompany = array(), $commissionApplicability = null)
    {
        $this
            ->setPaymentCompany($paymentCompany)
            ->setCommissionApplicability($commissionApplicability);
    }
    /**
     * Get PaymentCompany value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCompany[]|null
     */
    public function getPaymentCompany()
    {
        return $this->PaymentCompany;
    }
    /**
     * Set PaymentCompany value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCompany[] $paymentCompany
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionPolicy
     */
    public function setPaymentCompany(array $paymentCompany = array())
    {
        foreach ($paymentCompany as $commissionPolicyPaymentCompanyItem) {
            // validation for constraint: itemType
            if (!$commissionPolicyPaymentCompanyItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCompany) {
                throw new \InvalidArgumentException(sprintf('The PaymentCompany property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCompany, "%s" given', is_object($commissionPolicyPaymentCompanyItem) ? get_class($commissionPolicyPaymentCompanyItem) : gettype($commissionPolicyPaymentCompanyItem)), __LINE__);
            }
        }
        $this->PaymentCompany = $paymentCompany;
        return $this;
    }
    /**
     * Add item to PaymentCompany value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCompany $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionPolicy
     */
    public function addToPaymentCompany(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentCompany $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCompany) {
            throw new \InvalidArgumentException(sprintf('The PaymentCompany property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PaymentCompany, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentCompany[] = $item;
        return $this;
    }
    /**
     * Get CommissionApplicability value
     * @return string|null
     */
    public function getCommissionApplicability()
    {
        return $this->CommissionApplicability;
    }
    /**
     * Set CommissionApplicability value
     * @param string $commissionApplicability
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionPolicy
     */
    public function setCommissionApplicability($commissionApplicability = null)
    {
        // validation for constraint: string
        if (!is_null($commissionApplicability) && !is_string($commissionApplicability)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commissionApplicability)), __LINE__);
        }
        $this->CommissionApplicability = $commissionApplicability;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionPolicy
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
