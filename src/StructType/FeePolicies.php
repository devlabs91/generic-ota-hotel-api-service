<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeePolicies StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of fees that may apply to a reservation.
 * @subpackage Structs
 */
class FeePolicies extends AbstractStructBase
{
    /**
     * The FeePolicy
     * Meta informations extracted from the WSDL
     * - documentation: A fee that may apply to a reservation. Fees are used for non tax amounts like service charges.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $FeePolicy;
    /**
     * Constructor method for FeePolicies
     * @uses FeePolicies::setFeePolicy()
     * @param mixed[] $feePolicy
     */
    public function __construct(array $feePolicy = array())
    {
        $this
            ->setFeePolicy($feePolicy);
    }
    /**
     * Get FeePolicy value
     * @return mixed[]|null
     */
    public function getFeePolicy()
    {
        return $this->FeePolicy;
    }
    /**
     * Set FeePolicy value
     * @throws \InvalidArgumentException
     * @param mixed[] $feePolicy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeePolicies
     */
    public function setFeePolicy(array $feePolicy = array())
    {
        foreach ($feePolicy as $feePoliciesFeePolicyItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The FeePolicy property can only contain items of anyType, "%s" given', is_object($feePoliciesFeePolicyItem) ? get_class($feePoliciesFeePolicyItem) : gettype($feePoliciesFeePolicyItem)), __LINE__);
            }
        }
        $this->FeePolicy = $feePolicy;
        return $this;
    }
    /**
     * Add item to FeePolicy value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeePolicies
     */
    public function addToFeePolicy($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The FeePolicy property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FeePolicy[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeePolicies
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
