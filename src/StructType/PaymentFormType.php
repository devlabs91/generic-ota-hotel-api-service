<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentFormType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Ways of providing funds and guarantees for travel by the individual. | Allows for control of the sharing of payment form data between parties.
 * @subpackage Structs
 */
class PaymentFormType extends AbstractStructBase
{
    /**
     * The PaymentCard
     * Meta informations extracted from the WSDL
     * - documentation: Details of a debit or credit card.
     * @var mixed
     */
    public $PaymentCard;
    /**
     * The BankAcct
     * Meta informations extracted from the WSDL
     * - documentation: Details of a bank account.
     * @var mixed
     */
    public $BankAcct;
    /**
     * The DirectBill
     * Meta informations extracted from the WSDL
     * - documentation: Details of a direct billing arrangement.
     * @var mixed
     */
    public $DirectBill;
    /**
     * The Voucher
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Voucher
     */
    public $Voucher;
    /**
     * The LoyaltyRedemption
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyRedemption
     */
    public $LoyaltyRedemption;
    /**
     * The MiscChargeOrder
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MiscChargeOrder
     */
    public $MiscChargeOrder;
    /**
     * The Ticket
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Ticket
     */
    public $Ticket;
    /**
     * The Cash
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Cash
     */
    public $Cash;
    /**
     * The CostCenterID
     * Meta informations extracted from the WSDL
     * - documentation: A reference to identify the billing department for allocating cost of travel to company account.
     * - use: optional
     * @var string
     */
    public $CostCenterID;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: Provides a reference to a specific form of payment.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The PaymentTransactionTypeCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PaymentTransactionTypeCode;
    /**
     * The GuaranteeIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates this represents a guarantee rather than a payment form.
     * - use: optional
     * @var bool
     */
    public $GuaranteeIndicator;
    /**
     * The GuaranteeTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify the method of guarantee. Refer to OpenTravel Code List Payment Type (PMT).
     * - use: optional
     * @var string
     */
    public $GuaranteeTypeCode;
    /**
     * The GuaranteeID
     * Meta informations extracted from the WSDL
     * - documentation: Provides the identifier as specified by the GuaranteeTypeCode (e.g., Corporate ID or IATA number).
     * - use: optional
     * @var string
     */
    public $GuaranteeID;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - documentation: A remark associated with the payment form.
     * - use: optional
     * @var string
     */
    public $Remark;
    /**
     * Constructor method for PaymentFormType
     * @uses PaymentFormType::setPaymentCard()
     * @uses PaymentFormType::setBankAcct()
     * @uses PaymentFormType::setDirectBill()
     * @uses PaymentFormType::setVoucher()
     * @uses PaymentFormType::setLoyaltyRedemption()
     * @uses PaymentFormType::setMiscChargeOrder()
     * @uses PaymentFormType::setTicket()
     * @uses PaymentFormType::setCash()
     * @uses PaymentFormType::setCostCenterID()
     * @uses PaymentFormType::setRPH()
     * @uses PaymentFormType::setPaymentTransactionTypeCode()
     * @uses PaymentFormType::setGuaranteeIndicator()
     * @uses PaymentFormType::setGuaranteeTypeCode()
     * @uses PaymentFormType::setGuaranteeID()
     * @uses PaymentFormType::setRemark()
     * @param mixed $paymentCard
     * @param mixed $bankAcct
     * @param mixed $directBill
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Voucher $voucher
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyRedemption $loyaltyRedemption
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MiscChargeOrder $miscChargeOrder
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Ticket $ticket
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Cash $cash
     * @param string $costCenterID
     * @param string $rPH
     * @param string $paymentTransactionTypeCode
     * @param bool $guaranteeIndicator
     * @param string $guaranteeTypeCode
     * @param string $guaranteeID
     * @param string $remark
     */
    public function __construct($paymentCard = null, $bankAcct = null, $directBill = null, \Devlabs91\GenericOtaHotelApiService\StructType\Voucher $voucher = null, \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyRedemption $loyaltyRedemption = null, \Devlabs91\GenericOtaHotelApiService\StructType\MiscChargeOrder $miscChargeOrder = null, \Devlabs91\GenericOtaHotelApiService\StructType\Ticket $ticket = null, \Devlabs91\GenericOtaHotelApiService\StructType\Cash $cash = null, $costCenterID = null, $rPH = null, $paymentTransactionTypeCode = null, $guaranteeIndicator = null, $guaranteeTypeCode = null, $guaranteeID = null, $remark = null)
    {
        $this
            ->setPaymentCard($paymentCard)
            ->setBankAcct($bankAcct)
            ->setDirectBill($directBill)
            ->setVoucher($voucher)
            ->setLoyaltyRedemption($loyaltyRedemption)
            ->setMiscChargeOrder($miscChargeOrder)
            ->setTicket($ticket)
            ->setCash($cash)
            ->setCostCenterID($costCenterID)
            ->setRPH($rPH)
            ->setPaymentTransactionTypeCode($paymentTransactionTypeCode)
            ->setGuaranteeIndicator($guaranteeIndicator)
            ->setGuaranteeTypeCode($guaranteeTypeCode)
            ->setGuaranteeID($guaranteeID)
            ->setRemark($remark);
    }
    /**
     * Get PaymentCard value
     * @return mixed|null
     */
    public function getPaymentCard()
    {
        return $this->PaymentCard;
    }
    /**
     * Set PaymentCard value
     * @param mixed $paymentCard
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
     */
    public function setPaymentCard($paymentCard = null)
    {
        $this->PaymentCard = $paymentCard;
        return $this;
    }
    /**
     * Get BankAcct value
     * @return mixed|null
     */
    public function getBankAcct()
    {
        return $this->BankAcct;
    }
    /**
     * Set BankAcct value
     * @param mixed $bankAcct
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
     */
    public function setBankAcct($bankAcct = null)
    {
        $this->BankAcct = $bankAcct;
        return $this;
    }
    /**
     * Get DirectBill value
     * @return mixed|null
     */
    public function getDirectBill()
    {
        return $this->DirectBill;
    }
    /**
     * Set DirectBill value
     * @param mixed $directBill
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
     */
    public function setDirectBill($directBill = null)
    {
        $this->DirectBill = $directBill;
        return $this;
    }
    /**
     * Get Voucher value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Voucher|null
     */
    public function getVoucher()
    {
        return $this->Voucher;
    }
    /**
     * Set Voucher value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Voucher $voucher
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
     */
    public function setVoucher(\Devlabs91\GenericOtaHotelApiService\StructType\Voucher $voucher = null)
    {
        $this->Voucher = $voucher;
        return $this;
    }
    /**
     * Get LoyaltyRedemption value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyRedemption|null
     */
    public function getLoyaltyRedemption()
    {
        return $this->LoyaltyRedemption;
    }
    /**
     * Set LoyaltyRedemption value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyRedemption $loyaltyRedemption
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
     */
    public function setLoyaltyRedemption(\Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyRedemption $loyaltyRedemption = null)
    {
        $this->LoyaltyRedemption = $loyaltyRedemption;
        return $this;
    }
    /**
     * Get MiscChargeOrder value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MiscChargeOrder|null
     */
    public function getMiscChargeOrder()
    {
        return $this->MiscChargeOrder;
    }
    /**
     * Set MiscChargeOrder value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MiscChargeOrder $miscChargeOrder
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
     */
    public function setMiscChargeOrder(\Devlabs91\GenericOtaHotelApiService\StructType\MiscChargeOrder $miscChargeOrder = null)
    {
        $this->MiscChargeOrder = $miscChargeOrder;
        return $this;
    }
    /**
     * Get Ticket value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ticket|null
     */
    public function getTicket()
    {
        return $this->Ticket;
    }
    /**
     * Set Ticket value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Ticket $ticket
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
     */
    public function setTicket(\Devlabs91\GenericOtaHotelApiService\StructType\Ticket $ticket = null)
    {
        $this->Ticket = $ticket;
        return $this;
    }
    /**
     * Get Cash value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Cash|null
     */
    public function getCash()
    {
        return $this->Cash;
    }
    /**
     * Set Cash value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Cash $cash
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
     */
    public function setCash(\Devlabs91\GenericOtaHotelApiService\StructType\Cash $cash = null)
    {
        $this->Cash = $cash;
        return $this;
    }
    /**
     * Get CostCenterID value
     * @return string|null
     */
    public function getCostCenterID()
    {
        return $this->CostCenterID;
    }
    /**
     * Set CostCenterID value
     * @param string $costCenterID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
     */
    public function setCostCenterID($costCenterID = null)
    {
        // validation for constraint: string
        if (!is_null($costCenterID) && !is_string($costCenterID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($costCenterID)), __LINE__);
        }
        $this->CostCenterID = $costCenterID;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get PaymentTransactionTypeCode value
     * @return string|null
     */
    public function getPaymentTransactionTypeCode()
    {
        return $this->PaymentTransactionTypeCode;
    }
    /**
     * Set PaymentTransactionTypeCode value
     * @param string $paymentTransactionTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
     */
    public function setPaymentTransactionTypeCode($paymentTransactionTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($paymentTransactionTypeCode) && !is_string($paymentTransactionTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentTransactionTypeCode)), __LINE__);
        }
        $this->PaymentTransactionTypeCode = $paymentTransactionTypeCode;
        return $this;
    }
    /**
     * Get GuaranteeIndicator value
     * @return bool|null
     */
    public function getGuaranteeIndicator()
    {
        return $this->GuaranteeIndicator;
    }
    /**
     * Set GuaranteeIndicator value
     * @param bool $guaranteeIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
     */
    public function setGuaranteeIndicator($guaranteeIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($guaranteeIndicator) && !is_bool($guaranteeIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($guaranteeIndicator)), __LINE__);
        }
        $this->GuaranteeIndicator = $guaranteeIndicator;
        return $this;
    }
    /**
     * Get GuaranteeTypeCode value
     * @return string|null
     */
    public function getGuaranteeTypeCode()
    {
        return $this->GuaranteeTypeCode;
    }
    /**
     * Set GuaranteeTypeCode value
     * @param string $guaranteeTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
     */
    public function setGuaranteeTypeCode($guaranteeTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($guaranteeTypeCode) && !is_string($guaranteeTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($guaranteeTypeCode)), __LINE__);
        }
        $this->GuaranteeTypeCode = $guaranteeTypeCode;
        return $this;
    }
    /**
     * Get GuaranteeID value
     * @return string|null
     */
    public function getGuaranteeID()
    {
        return $this->GuaranteeID;
    }
    /**
     * Set GuaranteeID value
     * @param string $guaranteeID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
     */
    public function setGuaranteeID($guaranteeID = null)
    {
        // validation for constraint: string
        if (!is_null($guaranteeID) && !is_string($guaranteeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($guaranteeID)), __LINE__);
        }
        $this->GuaranteeID = $guaranteeID;
        return $this;
    }
    /**
     * Get Remark value
     * @return string|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param string $remark
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
     */
    public function setRemark($remark = null)
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remark)), __LINE__);
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
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
