<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptablePayments StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of acceptable methods of payment.
 * @subpackage Structs
 */
class AcceptablePayments extends AbstractStructBase
{
    /**
     * The AcceptablePayment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 20
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePayment[]
     */
    public $AcceptablePayment;
    /**
     * The PaymentTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of payemt (i.e., guarantee, deposit). Refer to OpenTravel Code List Payment Type (PMT).
     * - use: optional
     * @var string
     */
    public $PaymentTypeCode;
    /**
     * Constructor method for AcceptablePayments
     * @uses AcceptablePayments::setAcceptablePayment()
     * @uses AcceptablePayments::setPaymentTypeCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePayment[] $acceptablePayment
     * @param string $paymentTypeCode
     */
    public function __construct(array $acceptablePayment = array(), $paymentTypeCode = null)
    {
        $this
            ->setAcceptablePayment($acceptablePayment)
            ->setPaymentTypeCode($paymentTypeCode);
    }
    /**
     * Get AcceptablePayment value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePayment[]|null
     */
    public function getAcceptablePayment()
    {
        return $this->AcceptablePayment;
    }
    /**
     * Set AcceptablePayment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePayment[] $acceptablePayment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePayments
     */
    public function setAcceptablePayment(array $acceptablePayment = array())
    {
        foreach ($acceptablePayment as $acceptablePaymentsAcceptablePaymentItem) {
            // validation for constraint: itemType
            if (!$acceptablePaymentsAcceptablePaymentItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePayment) {
                throw new \InvalidArgumentException(sprintf('The AcceptablePayment property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePayment, "%s" given', is_object($acceptablePaymentsAcceptablePaymentItem) ? get_class($acceptablePaymentsAcceptablePaymentItem) : gettype($acceptablePaymentsAcceptablePaymentItem)), __LINE__);
            }
        }
        $this->AcceptablePayment = $acceptablePayment;
        return $this;
    }
    /**
     * Add item to AcceptablePayment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePayment $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePayments
     */
    public function addToAcceptablePayment(\Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePayment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePayment) {
            throw new \InvalidArgumentException(sprintf('The AcceptablePayment property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePayment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AcceptablePayment[] = $item;
        return $this;
    }
    /**
     * Get PaymentTypeCode value
     * @return string|null
     */
    public function getPaymentTypeCode()
    {
        return $this->PaymentTypeCode;
    }
    /**
     * Set PaymentTypeCode value
     * @param string $paymentTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePayments
     */
    public function setPaymentTypeCode($paymentTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($paymentTypeCode) && !is_string($paymentTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentTypeCode)), __LINE__);
        }
        $this->PaymentTypeCode = $paymentTypeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePayments
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
