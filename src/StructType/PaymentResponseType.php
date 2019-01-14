<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentResponseType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of payment.
 * @subpackage Structs
 */
class PaymentResponseType extends PaymentFormType
{
    /**
     * The PaymentAmount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount
     */
    public $PaymentAmount;
    /**
     * The PaymentReferenceID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $PaymentReferenceID;
    /**
     * The Error
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Error;
    /**
     * Constructor method for PaymentResponseType
     * @uses PaymentResponseType::setPaymentAmount()
     * @uses PaymentResponseType::setPaymentReferenceID()
     * @uses PaymentResponseType::setError()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount $paymentAmount
     * @param mixed $paymentReferenceID
     * @param mixed $error
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount $paymentAmount = null, $paymentReferenceID = null, $error = null)
    {
        $this
            ->setPaymentAmount($paymentAmount)
            ->setPaymentReferenceID($paymentReferenceID)
            ->setError($error);
    }
    /**
     * Get PaymentAmount value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount|null
     */
    public function getPaymentAmount()
    {
        return $this->PaymentAmount;
    }
    /**
     * Set PaymentAmount value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount $paymentAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentResponseType
     */
    public function setPaymentAmount(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount $paymentAmount = null)
    {
        $this->PaymentAmount = $paymentAmount;
        return $this;
    }
    /**
     * Get PaymentReferenceID value
     * @return mixed|null
     */
    public function getPaymentReferenceID()
    {
        return $this->PaymentReferenceID;
    }
    /**
     * Set PaymentReferenceID value
     * @param mixed $paymentReferenceID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentResponseType
     */
    public function setPaymentReferenceID($paymentReferenceID = null)
    {
        $this->PaymentReferenceID = $paymentReferenceID;
        return $this;
    }
    /**
     * Get Error value
     * @return mixed|null
     */
    public function getError()
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @param mixed $error
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentResponseType
     */
    public function setError($error = null)
    {
        $this->Error = $error;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentResponseType
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
