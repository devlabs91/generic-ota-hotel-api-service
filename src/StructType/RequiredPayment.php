<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequiredPayment StructType
 * Meta informations extracted from the WSDL
 * - documentation: A required payment, such as a deposit due or payment in the event of cancellation.
 * @subpackage Structs
 */
class RequiredPayment extends AbstractStructBase
{
    /**
     * The AcceptedPayments
     * Meta informations extracted from the WSDL
     * - documentation: Collection of forms of payment accepted for payment.
     * - minOccurs: 0
     * @var mixed
     */
    public $AcceptedPayments;
    /**
     * The AmountPercent
     * Meta informations extracted from the WSDL
     * - documentation: Payment expressed as a fixed amount, or a percentage of/or room nights.
     * - minOccurs: 0
     * @var mixed
     */
    public $AmountPercent;
    /**
     * The Deadline
     * Meta informations extracted from the WSDL
     * - documentation: Payment deadline, absolute or relative
     * - minOccurs: 0
     * @var mixed
     */
    public $Deadline;
    /**
     * The PaymentDescription
     * Meta informations extracted from the WSDL
     * - documentation: Text description of the Payment in a given language.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $PaymentDescription;
    /**
     * The RetributionType
     * @var string
     */
    public $RetributionType;
    /**
     * The PaymentCode
     * Meta informations extracted from the WSDL
     * - documentation: This defines the form of payment. Recommended usage of this is with the Payment Type in OTA Code List, this datatype will be updated in the future.In order to maintain forward compatability a change is not being made in this
     * publication. This will be corrected in a future version, when a major update is released.
     * - use: optional
     * @var string
     */
    public $PaymentCode;
    /**
     * Constructor method for RequiredPayment
     * @uses RequiredPayment::setAcceptedPayments()
     * @uses RequiredPayment::setAmountPercent()
     * @uses RequiredPayment::setDeadline()
     * @uses RequiredPayment::setPaymentDescription()
     * @uses RequiredPayment::setRetributionType()
     * @uses RequiredPayment::setPaymentCode()
     * @param mixed $acceptedPayments
     * @param mixed $amountPercent
     * @param mixed $deadline
     * @param mixed[] $paymentDescription
     * @param string $retributionType
     * @param string $paymentCode
     */
    public function __construct($acceptedPayments = null, $amountPercent = null, $deadline = null, array $paymentDescription = array(), $retributionType = null, $paymentCode = null)
    {
        $this
            ->setAcceptedPayments($acceptedPayments)
            ->setAmountPercent($amountPercent)
            ->setDeadline($deadline)
            ->setPaymentDescription($paymentDescription)
            ->setRetributionType($retributionType)
            ->setPaymentCode($paymentCode);
    }
    /**
     * Get AcceptedPayments value
     * @return mixed|null
     */
    public function getAcceptedPayments()
    {
        return $this->AcceptedPayments;
    }
    /**
     * Set AcceptedPayments value
     * @param mixed $acceptedPayments
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment
     */
    public function setAcceptedPayments($acceptedPayments = null)
    {
        $this->AcceptedPayments = $acceptedPayments;
        return $this;
    }
    /**
     * Get AmountPercent value
     * @return mixed|null
     */
    public function getAmountPercent()
    {
        return $this->AmountPercent;
    }
    /**
     * Set AmountPercent value
     * @param mixed $amountPercent
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment
     */
    public function setAmountPercent($amountPercent = null)
    {
        $this->AmountPercent = $amountPercent;
        return $this;
    }
    /**
     * Get Deadline value
     * @return mixed|null
     */
    public function getDeadline()
    {
        return $this->Deadline;
    }
    /**
     * Set Deadline value
     * @param mixed $deadline
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment
     */
    public function setDeadline($deadline = null)
    {
        $this->Deadline = $deadline;
        return $this;
    }
    /**
     * Get PaymentDescription value
     * @return mixed[]|null
     */
    public function getPaymentDescription()
    {
        return $this->PaymentDescription;
    }
    /**
     * Set PaymentDescription value
     * @throws \InvalidArgumentException
     * @param mixed[] $paymentDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment
     */
    public function setPaymentDescription(array $paymentDescription = array())
    {
        foreach ($paymentDescription as $requiredPaymentPaymentDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PaymentDescription property can only contain items of anyType, "%s" given', is_object($requiredPaymentPaymentDescriptionItem) ? get_class($requiredPaymentPaymentDescriptionItem) : gettype($requiredPaymentPaymentDescriptionItem)), __LINE__);
            }
        }
        $this->PaymentDescription = $paymentDescription;
        return $this;
    }
    /**
     * Add item to PaymentDescription value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment
     */
    public function addToPaymentDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PaymentDescription property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentDescription[] = $item;
        return $this;
    }
    /**
     * Get RetributionType value
     * @return string|null
     */
    public function getRetributionType()
    {
        return $this->RetributionType;
    }
    /**
     * Set RetributionType value
     * @param string $retributionType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment
     */
    public function setRetributionType($retributionType = null)
    {
        // validation for constraint: string
        if (!is_null($retributionType) && !is_string($retributionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($retributionType)), __LINE__);
        }
        $this->RetributionType = $retributionType;
        return $this;
    }
    /**
     * Get PaymentCode value
     * @return string|null
     */
    public function getPaymentCode()
    {
        return $this->PaymentCode;
    }
    /**
     * Set PaymentCode value
     * @param string $paymentCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment
     */
    public function setPaymentCode($paymentCode = null)
    {
        // validation for constraint: string
        if (!is_null($paymentCode) && !is_string($paymentCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentCode)), __LINE__);
        }
        $this->PaymentCode = $paymentCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment
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
