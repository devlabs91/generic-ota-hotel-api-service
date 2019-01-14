<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxPolicies StructType
 * @subpackage Structs
 */
class TaxPolicies extends AbstractStructBase
{
    /**
     * The TaxPolicy
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicy[]
     */
    public $TaxPolicy;
    /**
     * Constructor method for TaxPolicies
     * @uses TaxPolicies::setTaxPolicy()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicy[] $taxPolicy
     */
    public function __construct(array $taxPolicy = array())
    {
        $this
            ->setTaxPolicy($taxPolicy);
    }
    /**
     * Get TaxPolicy value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicy[]|null
     */
    public function getTaxPolicy()
    {
        return $this->TaxPolicy;
    }
    /**
     * Set TaxPolicy value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicy[] $taxPolicy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicies
     */
    public function setTaxPolicy(array $taxPolicy = array())
    {
        foreach ($taxPolicy as $taxPoliciesTaxPolicyItem) {
            // validation for constraint: itemType
            if (!$taxPoliciesTaxPolicyItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicy) {
                throw new \InvalidArgumentException(sprintf('The TaxPolicy property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicy, "%s" given', is_object($taxPoliciesTaxPolicyItem) ? get_class($taxPoliciesTaxPolicyItem) : gettype($taxPoliciesTaxPolicyItem)), __LINE__);
            }
        }
        $this->TaxPolicy = $taxPolicy;
        return $this;
    }
    /**
     * Add item to TaxPolicy value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicy $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicies
     */
    public function addToTaxPolicy(\Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicy $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicy) {
            throw new \InvalidArgumentException(sprintf('The TaxPolicy property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicy, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxPolicy[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicies
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
