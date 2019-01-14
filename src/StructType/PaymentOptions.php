<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentOptions StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of payment choices.
 * @subpackage Structs
 */
class PaymentOptions extends AbstractStructBase
{
    /**
     * The PaymentOption
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOption[]
     */
    public $PaymentOption;
    /**
     * Constructor method for PaymentOptions
     * @uses PaymentOptions::setPaymentOption()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOption[] $paymentOption
     */
    public function __construct(array $paymentOption = array())
    {
        $this
            ->setPaymentOption($paymentOption);
    }
    /**
     * Get PaymentOption value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOption[]|null
     */
    public function getPaymentOption()
    {
        return $this->PaymentOption;
    }
    /**
     * Set PaymentOption value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOption[] $paymentOption
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOptions
     */
    public function setPaymentOption(array $paymentOption = array())
    {
        foreach ($paymentOption as $paymentOptionsPaymentOptionItem) {
            // validation for constraint: itemType
            if (!$paymentOptionsPaymentOptionItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOption) {
                throw new \InvalidArgumentException(sprintf('The PaymentOption property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOption, "%s" given', is_object($paymentOptionsPaymentOptionItem) ? get_class($paymentOptionsPaymentOptionItem) : gettype($paymentOptionsPaymentOptionItem)), __LINE__);
            }
        }
        $this->PaymentOption = $paymentOption;
        return $this;
    }
    /**
     * Add item to PaymentOption value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOption $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOptions
     */
    public function addToPaymentOption(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentOption $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOption) {
            throw new \InvalidArgumentException(sprintf('The PaymentOption property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOption, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentOption[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOptions
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
