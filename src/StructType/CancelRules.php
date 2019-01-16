<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelRules StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of cancellation rules.
 * @subpackage Structs
 */
class CancelRules extends AbstractStructBase
{
    /**
     * The CancelRule
     * Meta informations extracted from the WSDL
     * - documentation: Details of a cancellation rule.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $CancelRule;
    /**
     * Constructor method for CancelRules
     * @uses CancelRules::setCancelRule()
     * @param mixed[] $cancelRule
     */
    public function __construct(array $cancelRule = array())
    {
        $this
            ->setCancelRule($cancelRule);
    }
    /**
     * Get CancelRule value
     * @return mixed[]|null
     */
    public function getCancelRule()
    {
        return $this->CancelRule;
    }
    /**
     * Set CancelRule value
     * @throws \InvalidArgumentException
     * @param mixed[] $cancelRule
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelRules
     */
    public function setCancelRule(array $cancelRule = array())
    {
        foreach ($cancelRule as $cancelRulesCancelRuleItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CancelRule property can only contain items of anyType, "%s" given', is_object($cancelRulesCancelRuleItem) ? get_class($cancelRulesCancelRuleItem) : gettype($cancelRulesCancelRuleItem)), __LINE__);
            }
        }
        $this->CancelRule = $cancelRule;
        return $this;
    }
    /**
     * Add item to CancelRule value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelRules
     */
    public function addToCancelRule($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The CancelRule property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CancelRule[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelRules
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
