<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuaranteePolicies StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Guarantee Policies
 * @subpackage Structs
 */
class GuaranteePolicies extends AbstractStructBase
{
    /**
     * The GuaranteePolicy
     * Meta informations extracted from the WSDL
     * - documentation: GuaranteePolicy
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $GuaranteePolicy;
    /**
     * Constructor method for GuaranteePolicies
     * @uses GuaranteePolicies::setGuaranteePolicy()
     * @param mixed[] $guaranteePolicy
     */
    public function __construct(array $guaranteePolicy = array())
    {
        $this
            ->setGuaranteePolicy($guaranteePolicy);
    }
    /**
     * Get GuaranteePolicy value
     * @return mixed[]|null
     */
    public function getGuaranteePolicy()
    {
        return $this->GuaranteePolicy;
    }
    /**
     * Set GuaranteePolicy value
     * @throws \InvalidArgumentException
     * @param mixed[] $guaranteePolicy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePolicies
     */
    public function setGuaranteePolicy(array $guaranteePolicy = array())
    {
        foreach ($guaranteePolicy as $guaranteePoliciesGuaranteePolicyItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The GuaranteePolicy property can only contain items of anyType, "%s" given', is_object($guaranteePoliciesGuaranteePolicyItem) ? get_class($guaranteePoliciesGuaranteePolicyItem) : gettype($guaranteePoliciesGuaranteePolicyItem)), __LINE__);
            }
        }
        $this->GuaranteePolicy = $guaranteePolicy;
        return $this;
    }
    /**
     * Add item to GuaranteePolicy value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePolicies
     */
    public function addToGuaranteePolicy($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The GuaranteePolicy property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuaranteePolicy[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePolicies
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
