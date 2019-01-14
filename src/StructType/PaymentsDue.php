<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentsDue StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of payments due.
 * @subpackage Structs
 */
class PaymentsDue extends AbstractStructBase
{
    /**
     * The PaymentDue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDue[]
     */
    public $PaymentDue;
    /**
     * Constructor method for PaymentsDue
     * @uses PaymentsDue::setPaymentDue()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDue[] $paymentDue
     */
    public function __construct(array $paymentDue = array())
    {
        $this
            ->setPaymentDue($paymentDue);
    }
    /**
     * Get PaymentDue value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDue[]|null
     */
    public function getPaymentDue()
    {
        return $this->PaymentDue;
    }
    /**
     * Set PaymentDue value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDue[] $paymentDue
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentsDue
     */
    public function setPaymentDue(array $paymentDue = array())
    {
        foreach ($paymentDue as $paymentsDuePaymentDueItem) {
            // validation for constraint: itemType
            if (!$paymentsDuePaymentDueItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDue) {
                throw new \InvalidArgumentException(sprintf('The PaymentDue property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDue, "%s" given', is_object($paymentsDuePaymentDueItem) ? get_class($paymentsDuePaymentDueItem) : gettype($paymentsDuePaymentDueItem)), __LINE__);
            }
        }
        $this->PaymentDue = $paymentDue;
        return $this;
    }
    /**
     * Add item to PaymentDue value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDue $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentsDue
     */
    public function addToPaymentDue(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentDue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDue) {
            throw new \InvalidArgumentException(sprintf('The PaymentDue property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDue, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentDue[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentsDue
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
