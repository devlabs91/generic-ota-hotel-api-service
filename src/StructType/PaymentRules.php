<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentRules StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of payment rules associated with this reservation.
 * @subpackage Structs
 */
class PaymentRules extends AbstractStructBase
{
    /**
     * The PaymentRule
     * Meta informations extracted from the WSDL
     * - documentation: One specific payment rule associated with this reservation. For example, a date by which a deposit must be received.
     * - maxOccurs: 9
     * @var mixed[]
     */
    public $PaymentRule;
    /**
     * Constructor method for PaymentRules
     * @uses PaymentRules::setPaymentRule()
     * @param mixed[] $paymentRule
     */
    public function __construct(array $paymentRule = array())
    {
        $this
            ->setPaymentRule($paymentRule);
    }
    /**
     * Get PaymentRule value
     * @return mixed[]|null
     */
    public function getPaymentRule()
    {
        return $this->PaymentRule;
    }
    /**
     * Set PaymentRule value
     * @throws \InvalidArgumentException
     * @param mixed[] $paymentRule
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentRules
     */
    public function setPaymentRule(array $paymentRule = array())
    {
        foreach ($paymentRule as $paymentRulesPaymentRuleItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PaymentRule property can only contain items of anyType, "%s" given', is_object($paymentRulesPaymentRuleItem) ? get_class($paymentRulesPaymentRuleItem) : gettype($paymentRulesPaymentRuleItem)), __LINE__);
            }
        }
        $this->PaymentRule = $paymentRule;
        return $this;
    }
    /**
     * Add item to PaymentRule value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentRules
     */
    public function addToPaymentRule($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PaymentRule property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentRule[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentRules
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
