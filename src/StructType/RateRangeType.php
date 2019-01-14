<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateRangeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A range of monetary values within which the cost of the available products are requested.
 * @subpackage Structs
 */
class RateRangeType extends AbstractStructBase
{
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - documentation: The currency that the monetary value is expressed in, as defined by ISO 4217 - Codes for the representation of currencies and funds. | Used for Alphabetic Strings, length exactly 3
     * - pattern: [a-zA-Z]{3}
     * @var string
     */
    public $CurrencyCode;
    /**
     * The MinRate
     * Meta informations extracted from the WSDL
     * - documentation: A decimal value that indicates the minimum monetary value to be considered in a request for an available product. | Used for amounts, max 3 decimals
     * - fractionDigits: 3
     * @var float
     */
    public $MinRate;
    /**
     * The MaxRate
     * Meta informations extracted from the WSDL
     * - documentation: A decimal value that indicates the maximum monetary value to be considered in a request for an available product. | Used for amounts, max 3 decimals
     * - fractionDigits: 3
     * @var float
     */
    public $MaxRate;
    /**
     * Constructor method for RateRangeType
     * @uses RateRangeType::setCurrencyCode()
     * @uses RateRangeType::setMinRate()
     * @uses RateRangeType::setMaxRate()
     * @param string $currencyCode
     * @param float $minRate
     * @param float $maxRate
     */
    public function __construct($currencyCode = null, $minRate = null, $maxRate = null)
    {
        $this
            ->setCurrencyCode($currencyCode)
            ->setMinRate($minRate)
            ->setMaxRate($maxRate);
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRangeType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($currencyCode) && !preg_match('/[a-zA-Z]{3}/', $currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z]{3}", "%s" given', var_export($currencyCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get MinRate value
     * @return float|null
     */
    public function getMinRate()
    {
        return $this->MinRate;
    }
    /**
     * Set MinRate value
     * @param float $minRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRangeType
     */
    public function setMinRate($minRate = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($minRate) && strlen(substr($minRate, strpos($minRate, '.') + 1)) !== 3) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 3 fraction digits, "%d" given', strlen(substr($minRate, strpos($minRate, '.') + 1))), __LINE__);
        }
        $this->MinRate = $minRate;
        return $this;
    }
    /**
     * Get MaxRate value
     * @return float|null
     */
    public function getMaxRate()
    {
        return $this->MaxRate;
    }
    /**
     * Set MaxRate value
     * @param float $maxRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRangeType
     */
    public function setMaxRate($maxRate = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($maxRate) && strlen(substr($maxRate, strpos($maxRate, '.') + 1)) !== 3) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 3 fraction digits, "%d" given', strlen(substr($maxRate, strpos($maxRate, '.') + 1))), __LINE__);
        }
        $this->MaxRate = $maxRate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRangeType
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
