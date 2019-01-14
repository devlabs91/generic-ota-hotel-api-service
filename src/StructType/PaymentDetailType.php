<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of payment.
 * @subpackage Structs
 */
class PaymentDetailType extends PaymentFormType
{
    /**
     * The PaymentAmount
     * @var mixed
     */
    public $PaymentAmount;
    /**
     * Constructor method for PaymentDetailType
     * @uses PaymentDetailType::setPaymentAmount()
     * @param mixed $paymentAmount
     */
    public function __construct($paymentAmount = null)
    {
        $this
            ->setPaymentAmount($paymentAmount);
    }
    /**
     * Get PaymentAmount value
     * @return mixed|null
     */
    public function getPaymentAmount()
    {
        return $this->PaymentAmount;
    }
    /**
     * Set PaymentAmount value
     * @param mixed $paymentAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetailType
     */
    public function setPaymentAmount($paymentAmount = null)
    {
        $this->PaymentAmount = $paymentAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetailType
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
