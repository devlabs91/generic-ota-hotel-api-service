<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MonetaryRuleType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This defines the information pertaining to rules and amounts associated with these rules. | Provides the currency amount pertaining to the rule. | Used for Character Strings, length 0 to 255.
 * - maxLength: 255
 * - minLength: 0
 * @subpackage Structs
 */
class MonetaryRuleType extends AbstractStructBase
{
    /**
     * The RuleType
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code List Rule Type (RUL).
     * - use: required
     * @var string
     */
    public $RuleType;
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - documentation: The percent applicable to the monetary rule.
     * - use: optional
     * @var string
     */
    public $Percent;
    /**
     * The DateTime
     * Meta informations extracted from the WSDL
     * - documentation: The date and time applicable to this monetary rule.
     * - use: optional
     * @var string
     */
    public $DateTime;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OpenTravel Code List Payment Type (PMT).
     * - use: optional
     * @var string
     */
    public $PaymentType;
    /**
     * Constructor method for MonetaryRuleType
     * @uses MonetaryRuleType::setRuleType()
     * @uses MonetaryRuleType::setPercent()
     * @uses MonetaryRuleType::setDateTime()
     * @uses MonetaryRuleType::setPaymentType()
     * @param string $ruleType
     * @param string $percent
     * @param string $dateTime
     * @param string $paymentType
     */
    public function __construct($ruleType = null, $percent = null, $dateTime = null, $paymentType = null)
    {
        $this
            ->setRuleType($ruleType)
            ->setPercent($percent)
            ->setDateTime($dateTime)
            ->setPaymentType($paymentType);
    }
    /**
     * Get RuleType value
     * @return string
     */
    public function getRuleType()
    {
        return $this->RuleType;
    }
    /**
     * Set RuleType value
     * @param string $ruleType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MonetaryRuleType
     */
    public function setRuleType($ruleType = null)
    {
        // validation for constraint: string
        if (!is_null($ruleType) && !is_string($ruleType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ruleType)), __LINE__);
        }
        $this->RuleType = $ruleType;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MonetaryRuleType
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
     * Get DateTime value
     * @return string|null
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param string $dateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MonetaryRuleType
     */
    public function setDateTime($dateTime = null)
    {
        // validation for constraint: string
        if (!is_null($dateTime) && !is_string($dateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateTime)), __LINE__);
        }
        $this->DateTime = $dateTime;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MonetaryRuleType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MonetaryRuleType
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
