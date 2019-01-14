<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptablePaymentCardType StructType
 * Meta informations extracted from the WSDL
 * - documentation: This complex type defines the information needed to describe a type of payment card that is acceptable as a form of payment. A usage fee (amount or percentage) may also be stated for this particular card type.
 * @subpackage Structs
 */
class AcceptablePaymentCardType extends AbstractStructBase
{
    /**
     * The CardType
     * Meta informations extracted from the WSDL
     * - documentation: A code used to identify this payment card. Refer to OTA Code List Card Type (CDT).
     * - use: optional
     * @var string
     */
    public $CardType;
    /**
     * The CardName
     * Meta informations extracted from the WSDL
     * - documentation: The name used to describe this type of payment card, for example, American Express
     * - use: optional
     * @var string
     */
    public $CardName;
    /**
     * The UsagePercentage
     * Meta informations extracted from the WSDL
     * - documentation: If applicable, defines the percentage of the total amount that is incurred as a usage fee.
     * - use: optional
     * @var string
     */
    public $UsagePercentage;
    /**
     * The UsageAmount
     * Meta informations extracted from the WSDL
     * - documentation: If applicable, defines the additonal amount that is incurred as a usage fee.
     * - use: optional
     * @var string
     */
    public $UsageAmount;
    /**
     * Constructor method for AcceptablePaymentCardType
     * @uses AcceptablePaymentCardType::setCardType()
     * @uses AcceptablePaymentCardType::setCardName()
     * @uses AcceptablePaymentCardType::setUsagePercentage()
     * @uses AcceptablePaymentCardType::setUsageAmount()
     * @param string $cardType
     * @param string $cardName
     * @param string $usagePercentage
     * @param string $usageAmount
     */
    public function __construct($cardType = null, $cardName = null, $usagePercentage = null, $usageAmount = null)
    {
        $this
            ->setCardType($cardType)
            ->setCardName($cardName)
            ->setUsagePercentage($usagePercentage)
            ->setUsageAmount($usageAmount);
    }
    /**
     * Get CardType value
     * @return string|null
     */
    public function getCardType()
    {
        return $this->CardType;
    }
    /**
     * Set CardType value
     * @param string $cardType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePaymentCardType
     */
    public function setCardType($cardType = null)
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardType)), __LINE__);
        }
        $this->CardType = $cardType;
        return $this;
    }
    /**
     * Get CardName value
     * @return string|null
     */
    public function getCardName()
    {
        return $this->CardName;
    }
    /**
     * Set CardName value
     * @param string $cardName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePaymentCardType
     */
    public function setCardName($cardName = null)
    {
        // validation for constraint: string
        if (!is_null($cardName) && !is_string($cardName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardName)), __LINE__);
        }
        $this->CardName = $cardName;
        return $this;
    }
    /**
     * Get UsagePercentage value
     * @return string|null
     */
    public function getUsagePercentage()
    {
        return $this->UsagePercentage;
    }
    /**
     * Set UsagePercentage value
     * @param string $usagePercentage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePaymentCardType
     */
    public function setUsagePercentage($usagePercentage = null)
    {
        // validation for constraint: string
        if (!is_null($usagePercentage) && !is_string($usagePercentage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($usagePercentage)), __LINE__);
        }
        $this->UsagePercentage = $usagePercentage;
        return $this;
    }
    /**
     * Get UsageAmount value
     * @return string|null
     */
    public function getUsageAmount()
    {
        return $this->UsageAmount;
    }
    /**
     * Set UsageAmount value
     * @param string $usageAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePaymentCardType
     */
    public function setUsageAmount($usageAmount = null)
    {
        // validation for constraint: string
        if (!is_null($usageAmount) && !is_string($usageAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($usageAmount)), __LINE__);
        }
        $this->UsageAmount = $usageAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePaymentCardType
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
