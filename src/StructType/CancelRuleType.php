<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelRuleType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides the cancellation amount due according to the time before the booking date that the cancellation occurs. The amount may be either an amount or a percentage (e.g. 50% within 30 days or $100 outside 30 days). | Provides the
 * amount of the cancellation charge.
 * @subpackage Structs
 */
class CancelRuleType extends AbstractStructBase
{
    /**
     * The PaymentCard
     * Meta informations extracted from the WSDL
     * - documentation: The card to be charged with the cancellation fee.
     * - minOccurs: 0
     * @var mixed
     */
    public $PaymentCard;
    /**
     * The CancelByDate
     * Meta informations extracted from the WSDL
     * - documentation: The date by which a cancellation must be made in order to avoid this cancellation penalty.
     * - use: optional
     * @var string
     */
    public $CancelByDate;
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - documentation: The percentage to be applied for a cancellation.
     * - use: optional
     * @var string
     */
    public $Percent;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * Constructor method for CancelRuleType
     * @uses CancelRuleType::setPaymentCard()
     * @uses CancelRuleType::setCancelByDate()
     * @uses CancelRuleType::setPercent()
     * @uses CancelRuleType::setType()
     * @param mixed $paymentCard
     * @param string $cancelByDate
     * @param string $percent
     * @param string $type
     */
    public function __construct($paymentCard = null, $cancelByDate = null, $percent = null, $type = null)
    {
        $this
            ->setPaymentCard($paymentCard)
            ->setCancelByDate($cancelByDate)
            ->setPercent($percent)
            ->setType($type);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelRuleType
     */
    public function setPaymentCard($paymentCard = null)
    {
        $this->PaymentCard = $paymentCard;
        return $this;
    }
    /**
     * Get CancelByDate value
     * @return string|null
     */
    public function getCancelByDate()
    {
        return $this->CancelByDate;
    }
    /**
     * Set CancelByDate value
     * @param string $cancelByDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelRuleType
     */
    public function setCancelByDate($cancelByDate = null)
    {
        // validation for constraint: string
        if (!is_null($cancelByDate) && !is_string($cancelByDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelByDate)), __LINE__);
        }
        $this->CancelByDate = $cancelByDate;
        return $this;
    }
    /**
     * Get Percent value
     * @return string|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param string $percent
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelRuleType
     */
    public function setPercent($percent = null)
    {
        // validation for constraint: string
        if (!is_null($percent) && !is_string($percent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percent)), __LINE__);
        }
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelRuleType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelRuleType
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
