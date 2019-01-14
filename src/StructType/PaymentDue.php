<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentDue StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information on a due payment.
 * @subpackage Structs
 */
class PaymentDue extends AbstractStructBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the payment amount.
     * - use: optional
     * @var string
     */
    public $Amount;
    /**
     * The PaymentNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the payment number. Typically would be used to indicate the deposit as well as the final payments as determined by the backend system.
     * - use: optional
     * @var string
     */
    public $PaymentNumber;
    /**
     * The DueDate
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the payment due date/time.
     * - use: optional
     * @var string
     */
    public $DueDate;
    /**
     * Constructor method for PaymentDue
     * @uses PaymentDue::setAmount()
     * @uses PaymentDue::setPaymentNumber()
     * @uses PaymentDue::setDueDate()
     * @param string $amount
     * @param string $paymentNumber
     * @param string $dueDate
     */
    public function __construct($amount = null, $paymentNumber = null, $dueDate = null)
    {
        $this
            ->setAmount($amount)
            ->setPaymentNumber($paymentNumber)
            ->setDueDate($dueDate);
    }
    /**
     * Get Amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDue
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get PaymentNumber value
     * @return string|null
     */
    public function getPaymentNumber()
    {
        return $this->PaymentNumber;
    }
    /**
     * Set PaymentNumber value
     * @param string $paymentNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDue
     */
    public function setPaymentNumber($paymentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($paymentNumber) && !is_string($paymentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentNumber)), __LINE__);
        }
        $this->PaymentNumber = $paymentNumber;
        return $this;
    }
    /**
     * Get DueDate value
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }
    /**
     * Set DueDate value
     * @param string $dueDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDue
     */
    public function setDueDate($dueDate = null)
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dueDate)), __LINE__);
        }
        $this->DueDate = $dueDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDue
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
