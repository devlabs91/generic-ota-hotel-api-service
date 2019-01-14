<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentOption StructType
 * Meta informations extracted from the WSDL
 * - documentation: Payment choice.
 * @subpackage Structs
 */
class PaymentOption extends PaymentDetailType
{
    /**
     * The ExtendedIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates payment will be made over an extended time. When false, the payment isn't extended.
     * - use: optional
     * @var bool
     */
    public $ExtendedIndicator;
    /**
     * The PaymentPurpose
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PaymentPurpose;
    /**
     * The ExtendedDepositDate
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the Extended Deposit Date for the check form of payment.
     * - use: optional
     * @var string
     */
    public $ExtendedDepositDate;
    /**
     * The ReferenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the Gift Order Reference/Form of Payment Number.
     * - use: optional
     * @var string
     */
    public $ReferenceNumber;
    /**
     * Constructor method for PaymentOption
     * @uses PaymentOption::setExtendedIndicator()
     * @uses PaymentOption::setPaymentPurpose()
     * @uses PaymentOption::setExtendedDepositDate()
     * @uses PaymentOption::setReferenceNumber()
     * @param bool $extendedIndicator
     * @param string $paymentPurpose
     * @param string $extendedDepositDate
     * @param string $referenceNumber
     */
    public function __construct($extendedIndicator = null, $paymentPurpose = null, $extendedDepositDate = null, $referenceNumber = null)
    {
        $this
            ->setExtendedIndicator($extendedIndicator)
            ->setPaymentPurpose($paymentPurpose)
            ->setExtendedDepositDate($extendedDepositDate)
            ->setReferenceNumber($referenceNumber);
    }
    /**
     * Get ExtendedIndicator value
     * @return bool|null
     */
    public function getExtendedIndicator()
    {
        return $this->ExtendedIndicator;
    }
    /**
     * Set ExtendedIndicator value
     * @param bool $extendedIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOption
     */
    public function setExtendedIndicator($extendedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($extendedIndicator) && !is_bool($extendedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($extendedIndicator)), __LINE__);
        }
        $this->ExtendedIndicator = $extendedIndicator;
        return $this;
    }
    /**
     * Get PaymentPurpose value
     * @return string|null
     */
    public function getPaymentPurpose()
    {
        return $this->PaymentPurpose;
    }
    /**
     * Set PaymentPurpose value
     * @param string $paymentPurpose
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOption
     */
    public function setPaymentPurpose($paymentPurpose = null)
    {
        // validation for constraint: string
        if (!is_null($paymentPurpose) && !is_string($paymentPurpose)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentPurpose)), __LINE__);
        }
        $this->PaymentPurpose = $paymentPurpose;
        return $this;
    }
    /**
     * Get ExtendedDepositDate value
     * @return string|null
     */
    public function getExtendedDepositDate()
    {
        return $this->ExtendedDepositDate;
    }
    /**
     * Set ExtendedDepositDate value
     * @param string $extendedDepositDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOption
     */
    public function setExtendedDepositDate($extendedDepositDate = null)
    {
        // validation for constraint: string
        if (!is_null($extendedDepositDate) && !is_string($extendedDepositDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extendedDepositDate)), __LINE__);
        }
        $this->ExtendedDepositDate = $extendedDepositDate;
        return $this;
    }
    /**
     * Get ReferenceNumber value
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->ReferenceNumber;
    }
    /**
     * Set ReferenceNumber value
     * @param string $referenceNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOption
     */
    public function setReferenceNumber($referenceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($referenceNumber) && !is_string($referenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($referenceNumber)), __LINE__);
        }
        $this->ReferenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOption
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
