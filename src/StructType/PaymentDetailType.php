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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount[]
     */
    public $PaymentAmount;
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify the commission details when paid to a third or internal party.
     * - minOccurs: 0
     * @var mixed
     */
    public $Commission;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify the form of payment. Refer to OpenTravel Code List Payment Type (PMT).
     * - use: optional
     * @var string
     */
    public $PaymentType;
    /**
     * The SplitPaymentInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates that more than one form of payment will be used.
     * - use: optional
     * @var bool
     */
    public $SplitPaymentInd;
    /**
     * The AuthorizedDays
     * Meta informations extracted from the WSDL
     * - documentation: Number of days being charged to this payment method.
     * - use: optional
     * @var string
     */
    public $AuthorizedDays;
    /**
     * The PrimaryPaymentInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates this is the primary method of payment.
     * - use: optional
     * @var bool
     */
    public $PrimaryPaymentInd;
    /**
     * Constructor method for PaymentDetailType
     * @uses PaymentDetailType::setPaymentAmount()
     * @uses PaymentDetailType::setCommission()
     * @uses PaymentDetailType::setPaymentType()
     * @uses PaymentDetailType::setSplitPaymentInd()
     * @uses PaymentDetailType::setAuthorizedDays()
     * @uses PaymentDetailType::setPrimaryPaymentInd()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount[] $paymentAmount
     * @param mixed $commission
     * @param string $paymentType
     * @param bool $splitPaymentInd
     * @param string $authorizedDays
     * @param bool $primaryPaymentInd
     */
    public function __construct(array $paymentAmount = array(), $commission = null, $paymentType = null, $splitPaymentInd = null, $authorizedDays = null, $primaryPaymentInd = null)
    {
        $this
            ->setPaymentAmount($paymentAmount)
            ->setCommission($commission)
            ->setPaymentType($paymentType)
            ->setSplitPaymentInd($splitPaymentInd)
            ->setAuthorizedDays($authorizedDays)
            ->setPrimaryPaymentInd($primaryPaymentInd);
    }
    /**
     * Get PaymentAmount value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount[]|null
     */
    public function getPaymentAmount()
    {
        return $this->PaymentAmount;
    }
    /**
     * Set PaymentAmount value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount[] $paymentAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetailType
     */
    public function setPaymentAmount(array $paymentAmount = array())
    {
        foreach ($paymentAmount as $paymentDetailTypePaymentAmountItem) {
            // validation for constraint: itemType
            if (!$paymentDetailTypePaymentAmountItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount) {
                throw new \InvalidArgumentException(sprintf('The PaymentAmount property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount, "%s" given', is_object($paymentDetailTypePaymentAmountItem) ? get_class($paymentDetailTypePaymentAmountItem) : gettype($paymentDetailTypePaymentAmountItem)), __LINE__);
            }
        }
        $this->PaymentAmount = $paymentAmount;
        return $this;
    }
    /**
     * Add item to PaymentAmount value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetailType
     */
    public function addToPaymentAmount(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount) {
            throw new \InvalidArgumentException(sprintf('The PaymentAmount property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentAmount[] = $item;
        return $this;
    }
    /**
     * Get Commission value
     * @return mixed|null
     */
    public function getCommission()
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param mixed $commission
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetailType
     */
    public function setCommission($commission = null)
    {
        $this->Commission = $commission;
        return $this;
    }
    /**
     * Get PaymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @param string $paymentType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetailType
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentType)), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get SplitPaymentInd value
     * @return bool|null
     */
    public function getSplitPaymentInd()
    {
        return $this->SplitPaymentInd;
    }
    /**
     * Set SplitPaymentInd value
     * @param bool $splitPaymentInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetailType
     */
    public function setSplitPaymentInd($splitPaymentInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($splitPaymentInd) && !is_bool($splitPaymentInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($splitPaymentInd)), __LINE__);
        }
        $this->SplitPaymentInd = $splitPaymentInd;
        return $this;
    }
    /**
     * Get AuthorizedDays value
     * @return string|null
     */
    public function getAuthorizedDays()
    {
        return $this->AuthorizedDays;
    }
    /**
     * Set AuthorizedDays value
     * @param string $authorizedDays
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetailType
     */
    public function setAuthorizedDays($authorizedDays = null)
    {
        // validation for constraint: string
        if (!is_null($authorizedDays) && !is_string($authorizedDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authorizedDays)), __LINE__);
        }
        $this->AuthorizedDays = $authorizedDays;
        return $this;
    }
    /**
     * Get PrimaryPaymentInd value
     * @return bool|null
     */
    public function getPrimaryPaymentInd()
    {
        return $this->PrimaryPaymentInd;
    }
    /**
     * Set PrimaryPaymentInd value
     * @param bool $primaryPaymentInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetailType
     */
    public function setPrimaryPaymentInd($primaryPaymentInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($primaryPaymentInd) && !is_bool($primaryPaymentInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($primaryPaymentInd)), __LINE__);
        }
        $this->PrimaryPaymentInd = $primaryPaymentInd;
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
