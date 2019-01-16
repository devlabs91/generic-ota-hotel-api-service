<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Fare StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base and total fare and tax amounts associated with the rule.
 * @subpackage Structs
 */
class Fare extends AbstractStructBase
{
    /**
     * The BaseAmount
     * Meta informations extracted from the WSDL
     * - documentation: The base amount of the fare.
     * - use: optional
     * @var string
     */
    public $BaseAmount;
    /**
     * The BaseNUC_Amount
     * Meta informations extracted from the WSDL
     * - documentation: The base neutral unit of construction amount.
     * - use: optional
     * @var string
     */
    public $BaseNUC_Amount;
    /**
     * The TaxAmount
     * Meta informations extracted from the WSDL
     * - documentation: The tax amount for the fare associated to the rule.
     * - use: optional
     * @var string
     */
    public $TaxAmount;
    /**
     * The TotalFare
     * Meta informations extracted from the WSDL
     * - documentation: The total fare associated to the rule.
     * - use: optional
     * @var string
     */
    public $TotalFare;
    /**
     * The FareDescription
     * Meta informations extracted from the WSDL
     * - documentation: A description of the fare.
     * - use: optional
     * @var string
     */
    public $FareDescription;
    /**
     * Constructor method for Fare
     * @uses Fare::setBaseAmount()
     * @uses Fare::setBaseNUC_Amount()
     * @uses Fare::setTaxAmount()
     * @uses Fare::setTotalFare()
     * @uses Fare::setFareDescription()
     * @param string $baseAmount
     * @param string $baseNUC_Amount
     * @param string $taxAmount
     * @param string $totalFare
     * @param string $fareDescription
     */
    public function __construct($baseAmount = null, $baseNUC_Amount = null, $taxAmount = null, $totalFare = null, $fareDescription = null)
    {
        $this
            ->setBaseAmount($baseAmount)
            ->setBaseNUC_Amount($baseNUC_Amount)
            ->setTaxAmount($taxAmount)
            ->setTotalFare($totalFare)
            ->setFareDescription($fareDescription);
    }
    /**
     * Get BaseAmount value
     * @return string|null
     */
    public function getBaseAmount()
    {
        return $this->BaseAmount;
    }
    /**
     * Set BaseAmount value
     * @param string $baseAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fare
     */
    public function setBaseAmount($baseAmount = null)
    {
        // validation for constraint: string
        if (!is_null($baseAmount) && !is_string($baseAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($baseAmount)), __LINE__);
        }
        $this->BaseAmount = $baseAmount;
        return $this;
    }
    /**
     * Get BaseNUC_Amount value
     * @return string|null
     */
    public function getBaseNUC_Amount()
    {
        return $this->BaseNUC_Amount;
    }
    /**
     * Set BaseNUC_Amount value
     * @param string $baseNUC_Amount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fare
     */
    public function setBaseNUC_Amount($baseNUC_Amount = null)
    {
        // validation for constraint: string
        if (!is_null($baseNUC_Amount) && !is_string($baseNUC_Amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($baseNUC_Amount)), __LINE__);
        }
        $this->BaseNUC_Amount = $baseNUC_Amount;
        return $this;
    }
    /**
     * Get TaxAmount value
     * @return string|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @param string $taxAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fare
     */
    public function setTaxAmount($taxAmount = null)
    {
        // validation for constraint: string
        if (!is_null($taxAmount) && !is_string($taxAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxAmount)), __LINE__);
        }
        $this->TaxAmount = $taxAmount;
        return $this;
    }
    /**
     * Get TotalFare value
     * @return string|null
     */
    public function getTotalFare()
    {
        return $this->TotalFare;
    }
    /**
     * Set TotalFare value
     * @param string $totalFare
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fare
     */
    public function setTotalFare($totalFare = null)
    {
        // validation for constraint: string
        if (!is_null($totalFare) && !is_string($totalFare)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($totalFare)), __LINE__);
        }
        $this->TotalFare = $totalFare;
        return $this;
    }
    /**
     * Get FareDescription value
     * @return string|null
     */
    public function getFareDescription()
    {
        return $this->FareDescription;
    }
    /**
     * Set FareDescription value
     * @param string $fareDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fare
     */
    public function setFareDescription($fareDescription = null)
    {
        // validation for constraint: string
        if (!is_null($fareDescription) && !is_string($fareDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareDescription)), __LINE__);
        }
        $this->FareDescription = $fareDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fare
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
