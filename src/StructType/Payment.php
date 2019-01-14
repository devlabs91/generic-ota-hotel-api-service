<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Payment StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to specify multiple currency amounts as well as payment types (e.g., deposit, final).
 * @subpackage Structs
 */
class Payment extends AbstractStructBase
{
    /**
     * The PaymentNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the Payment Number. Typically would be used to indicate the deposit as well as the final payments as determined by the backend system.
     * - use: required
     * @var string
     */
    public $PaymentNumber;
    /**
     * The DueDate
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the Payment Due Date/Time.
     * - use: required
     * @var string
     */
    public $DueDate;
    /**
     * Constructor method for Payment
     * @uses Payment::setPaymentNumber()
     * @uses Payment::setDueDate()
     * @param string $paymentNumber
     * @param string $dueDate
     */
    public function __construct($paymentNumber = null, $dueDate = null)
    {
        $this
            ->setPaymentNumber($paymentNumber)
            ->setDueDate($dueDate);
    }
    /**
     * Get PaymentNumber value
     * @return string
     */
    public function getPaymentNumber()
    {
        return $this->PaymentNumber;
    }
    /**
     * Set PaymentNumber value
     * @param string $paymentNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Payment
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
     * @return string
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }
    /**
     * Set DueDate value
     * @param string $dueDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Payment
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Payment
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
