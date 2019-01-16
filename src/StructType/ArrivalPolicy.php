<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrivalPolicy StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines policy types for this rate plan.
 * @subpackage Structs
 */
class ArrivalPolicy extends AbstractStructBase
{
    /**
     * The GuaranteePolicyIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, return rates with a guarantee policy.
     * - use: optional
     * @var bool
     */
    public $GuaranteePolicyIndicator;
    /**
     * The DepositPolicyIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, return rates with a deposit policy.
     * - use: optional
     * @var bool
     */
    public $DepositPolicyIndicator;
    /**
     * The HoldTimePolicyIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, return rates with a hold time policy.
     * - use: optional
     * @var bool
     */
    public $HoldTimePolicyIndicator;
    /**
     * Constructor method for ArrivalPolicy
     * @uses ArrivalPolicy::setGuaranteePolicyIndicator()
     * @uses ArrivalPolicy::setDepositPolicyIndicator()
     * @uses ArrivalPolicy::setHoldTimePolicyIndicator()
     * @param bool $guaranteePolicyIndicator
     * @param bool $depositPolicyIndicator
     * @param bool $holdTimePolicyIndicator
     */
    public function __construct($guaranteePolicyIndicator = null, $depositPolicyIndicator = null, $holdTimePolicyIndicator = null)
    {
        $this
            ->setGuaranteePolicyIndicator($guaranteePolicyIndicator)
            ->setDepositPolicyIndicator($depositPolicyIndicator)
            ->setHoldTimePolicyIndicator($holdTimePolicyIndicator);
    }
    /**
     * Get GuaranteePolicyIndicator value
     * @return bool|null
     */
    public function getGuaranteePolicyIndicator()
    {
        return $this->GuaranteePolicyIndicator;
    }
    /**
     * Set GuaranteePolicyIndicator value
     * @param bool $guaranteePolicyIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPolicy
     */
    public function setGuaranteePolicyIndicator($guaranteePolicyIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($guaranteePolicyIndicator) && !is_bool($guaranteePolicyIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($guaranteePolicyIndicator)), __LINE__);
        }
        $this->GuaranteePolicyIndicator = $guaranteePolicyIndicator;
        return $this;
    }
    /**
     * Get DepositPolicyIndicator value
     * @return bool|null
     */
    public function getDepositPolicyIndicator()
    {
        return $this->DepositPolicyIndicator;
    }
    /**
     * Set DepositPolicyIndicator value
     * @param bool $depositPolicyIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPolicy
     */
    public function setDepositPolicyIndicator($depositPolicyIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($depositPolicyIndicator) && !is_bool($depositPolicyIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($depositPolicyIndicator)), __LINE__);
        }
        $this->DepositPolicyIndicator = $depositPolicyIndicator;
        return $this;
    }
    /**
     * Get HoldTimePolicyIndicator value
     * @return bool|null
     */
    public function getHoldTimePolicyIndicator()
    {
        return $this->HoldTimePolicyIndicator;
    }
    /**
     * Set HoldTimePolicyIndicator value
     * @param bool $holdTimePolicyIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPolicy
     */
    public function setHoldTimePolicyIndicator($holdTimePolicyIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($holdTimePolicyIndicator) && !is_bool($holdTimePolicyIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($holdTimePolicyIndicator)), __LINE__);
        }
        $this->HoldTimePolicyIndicator = $holdTimePolicyIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPolicy
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
