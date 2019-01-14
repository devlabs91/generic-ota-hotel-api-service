<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentFormType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Ways of providing funds for travel by the individual.
 * @subpackage Structs
 */
class PaymentFormType extends AbstractStructBase
{
    /**
     * The PaymentCard
     * @var mixed
     */
    public $PaymentCard;
    /**
     * The BankAcct
     * @var mixed
     */
    public $BankAcct;
    /**
     * The DirectBill
     * @var mixed
     */
    public $DirectBill;
    /**
     * The Voucher
     * @var mixed
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
     * The CostCenterID
     * Meta informations extracted from the WSDL
     * - documentation: A reference to identify the billing department for allocating cost of travel to company account.
     * @var string
     */
    public $CostCenterID;
    /**
     * The RPH
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for PaymentFormType
     * @uses PaymentFormType::setPaymentCard()
     * @uses PaymentFormType::setBankAcct()
     * @uses PaymentFormType::setDirectBill()
     * @uses PaymentFormType::setVoucher()
     * @uses PaymentFormType::setLoyaltyRedemption()
     * @uses PaymentFormType::setMiscChargeOrder()
     * @uses PaymentFormType::setCostCenterID()
     * @uses PaymentFormType::setRPH()
     * @param mixed $paymentCard
     * @param mixed $bankAcct
     * @param mixed $directBill
     * @param mixed $voucher
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyRedemption $loyaltyRedemption
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MiscChargeOrder $miscChargeOrder
     * @param string $costCenterID
     * @param string $rPH
     */
    public function __construct($paymentCard = null, $bankAcct = null, $directBill = null, $voucher = null, \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyRedemption $loyaltyRedemption = null, \Devlabs91\GenericOtaHotelApiService\StructType\MiscChargeOrder $miscChargeOrder = null, $costCenterID = null, $rPH = null)
    {
        $this
            ->setPaymentCard($paymentCard)
            ->setBankAcct($bankAcct)
            ->setDirectBill($directBill)
            ->setVoucher($voucher)
            ->setLoyaltyRedemption($loyaltyRedemption)
            ->setMiscChargeOrder($miscChargeOrder)
            ->setCostCenterID($costCenterID)
            ->setRPH($rPH);
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
     * @return mixed|null
     */
    public function getVoucher()
    {
        return $this->Voucher;
    }
    /**
     * Set Voucher value
     * @param mixed $voucher
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormType
     */
    public function setVoucher($voucher = null)
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
