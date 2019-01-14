<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentSchedule StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the payment schedule information.
 * @subpackage Structs
 */
class PaymentSchedule extends AbstractStructBase
{
    /**
     * The Payment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Payment[]
     */
    public $Payment;
    /**
     * Constructor method for PaymentSchedule
     * @uses PaymentSchedule::setPayment()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Payment[] $payment
     */
    public function __construct(array $payment = array())
    {
        $this
            ->setPayment($payment);
    }
    /**
     * Get Payment value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Payment[]|null
     */
    public function getPayment()
    {
        return $this->Payment;
    }
    /**
     * Set Payment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Payment[] $payment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentSchedule
     */
    public function setPayment(array $payment = array())
    {
        foreach ($payment as $paymentSchedulePaymentItem) {
            // validation for constraint: itemType
            if (!$paymentSchedulePaymentItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Payment) {
                throw new \InvalidArgumentException(sprintf('The Payment property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Payment, "%s" given', is_object($paymentSchedulePaymentItem) ? get_class($paymentSchedulePaymentItem) : gettype($paymentSchedulePaymentItem)), __LINE__);
            }
        }
        $this->Payment = $payment;
        return $this;
    }
    /**
     * Add item to Payment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Payment $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentSchedule
     */
    public function addToPayment(\Devlabs91\GenericOtaHotelApiService\StructType\Payment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Payment) {
            throw new \InvalidArgumentException(sprintf('The Payment property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Payment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Payment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentSchedule
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
