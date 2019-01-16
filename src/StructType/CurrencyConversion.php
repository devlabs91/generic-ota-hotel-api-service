<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CurrencyConversion StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides a rate conversion from one currency to another.
 * @subpackage Structs
 */
class CurrencyConversion extends AbstractStructBase
{
    /**
     * The RateConversion
     * Meta informations extracted from the WSDL
     * - documentation: The conversion factor to apply against the source currency to obtain the requested currency.
     * - use: optional
     * @var float
     */
    public $RateConversion;
    /**
     * The SourceCurrencyCode
     * Meta informations extracted from the WSDL
     * - documentation: The code specifying the source currency (use ISO 4217, three alpha code). | Used for an Alpha String, length exactly 3.
     * - use: optional
     * - pattern: [a-zA-Z]{3}
     * @var string
     */
    public $SourceCurrencyCode;
    /**
     * The RequestedCurrencyCode
     * Meta informations extracted from the WSDL
     * - documentation: The code specifying the requested currency (use ISO 4217, three alpha code). | Used for an Alpha String, length exactly 3.
     * - use: optional
     * - pattern: [a-zA-Z]{3}
     * @var string
     */
    public $RequestedCurrencyCode;
    /**
     * The DecimalPlaces
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the number of decimal places for the requested currency. This is equivalent to the ISO 4217 standard "minor unit".
     * - use: optional
     * @var int
     */
    public $DecimalPlaces;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - documentation: The source of the rate conversion information. | Used for Character Strings, length 1 to 64.
     * - use: optional
     * - maxLength: 64
     * - minLength: 1
     * @var string
     */
    public $Source;
    /**
     * Constructor method for CurrencyConversion
     * @uses CurrencyConversion::setRateConversion()
     * @uses CurrencyConversion::setSourceCurrencyCode()
     * @uses CurrencyConversion::setRequestedCurrencyCode()
     * @uses CurrencyConversion::setDecimalPlaces()
     * @uses CurrencyConversion::setSource()
     * @param float $rateConversion
     * @param string $sourceCurrencyCode
     * @param string $requestedCurrencyCode
     * @param int $decimalPlaces
     * @param string $source
     */
    public function __construct($rateConversion = null, $sourceCurrencyCode = null, $requestedCurrencyCode = null, $decimalPlaces = null, $source = null)
    {
        $this
            ->setRateConversion($rateConversion)
            ->setSourceCurrencyCode($sourceCurrencyCode)
            ->setRequestedCurrencyCode($requestedCurrencyCode)
            ->setDecimalPlaces($decimalPlaces)
            ->setSource($source);
    }
    /**
     * Get RateConversion value
     * @return float|null
     */
    public function getRateConversion()
    {
        return $this->RateConversion;
    }
    /**
     * Set RateConversion value
     * @param float $rateConversion
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversion
     */
    public function setRateConversion($rateConversion = null)
    {
        $this->RateConversion = $rateConversion;
        return $this;
    }
    /**
     * Get SourceCurrencyCode value
     * @return string|null
     */
    public function getSourceCurrencyCode()
    {
        return $this->SourceCurrencyCode;
    }
    /**
     * Set SourceCurrencyCode value
     * @param string $sourceCurrencyCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversion
     */
    public function setSourceCurrencyCode($sourceCurrencyCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($sourceCurrencyCode) && !preg_match('/[a-zA-Z]{3}/', $sourceCurrencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z]{3}", "%s" given', var_export($sourceCurrencyCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($sourceCurrencyCode) && !is_string($sourceCurrencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceCurrencyCode)), __LINE__);
        }
        $this->SourceCurrencyCode = $sourceCurrencyCode;
        return $this;
    }
    /**
     * Get RequestedCurrencyCode value
     * @return string|null
     */
    public function getRequestedCurrencyCode()
    {
        return $this->RequestedCurrencyCode;
    }
    /**
     * Set RequestedCurrencyCode value
     * @param string $requestedCurrencyCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversion
     */
    public function setRequestedCurrencyCode($requestedCurrencyCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($requestedCurrencyCode) && !preg_match('/[a-zA-Z]{3}/', $requestedCurrencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z]{3}", "%s" given', var_export($requestedCurrencyCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($requestedCurrencyCode) && !is_string($requestedCurrencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestedCurrencyCode)), __LINE__);
        }
        $this->RequestedCurrencyCode = $requestedCurrencyCode;
        return $this;
    }
    /**
     * Get DecimalPlaces value
     * @return int|null
     */
    public function getDecimalPlaces()
    {
        return $this->DecimalPlaces;
    }
    /**
     * Set DecimalPlaces value
     * @param int $decimalPlaces
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversion
     */
    public function setDecimalPlaces($decimalPlaces = null)
    {
        // validation for constraint: int
        if (!is_null($decimalPlaces) && !is_numeric($decimalPlaces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($decimalPlaces)), __LINE__);
        }
        $this->DecimalPlaces = $decimalPlaces;
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $source
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversion
     */
    public function setSource($source = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($source) && strlen($source) > 64) || (is_array($source) && count($source) > 64)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 64 element(s) or a scalar of 64 character(s) at most, "%d" length given', is_scalar($source) ? strlen($source) : count($source)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($source) && strlen($source) < 1) || (is_array($source) && count($source) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($source)), __LINE__);
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyConversion
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
