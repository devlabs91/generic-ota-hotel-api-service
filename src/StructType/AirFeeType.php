<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirFeeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the data fields available for the fees. | Provides a monetary amount and the currency code to reflect the currency in which this amount is expressed. | Defines a fee in terms of its amount, currency and decimal places. | A
 * textual description.
 * - maxLength: 64
 * - minLength: 0
 * @subpackage Structs
 */
class AirFeeType extends AbstractStructBase
{
    /**
     * The FeeCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the code for the fee.
     * - use: required
     * @var string
     */
    public $FeeCode;
    /**
     * The TaxPercentage
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the tax percentage included in this fee (e.g., the Value Added Tax (VAT) percentage).
     * - use: optional
     * @var string
     */
    public $TaxPercentage;
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the required modification to the element.
     * - use: optional
     * @var string
     */
    public $Operation;
    /**
     * The FeeTransactionType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $FeeTransactionType;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: A unique reference for the fee type (commonly used for modification.)
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for AirFeeType
     * @uses AirFeeType::setFeeCode()
     * @uses AirFeeType::setTaxPercentage()
     * @uses AirFeeType::setOperation()
     * @uses AirFeeType::setFeeTransactionType()
     * @uses AirFeeType::setRPH()
     * @param string $feeCode
     * @param string $taxPercentage
     * @param string $operation
     * @param string $feeTransactionType
     * @param string $rPH
     */
    public function __construct($feeCode = null, $taxPercentage = null, $operation = null, $feeTransactionType = null, $rPH = null)
    {
        $this
            ->setFeeCode($feeCode)
            ->setTaxPercentage($taxPercentage)
            ->setOperation($operation)
            ->setFeeTransactionType($feeTransactionType)
            ->setRPH($rPH);
    }
    /**
     * Get FeeCode value
     * @return string
     */
    public function getFeeCode()
    {
        return $this->FeeCode;
    }
    /**
     * Set FeeCode value
     * @param string $feeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirFeeType
     */
    public function setFeeCode($feeCode = null)
    {
        // validation for constraint: string
        if (!is_null($feeCode) && !is_string($feeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($feeCode)), __LINE__);
        }
        $this->FeeCode = $feeCode;
        return $this;
    }
    /**
     * Get TaxPercentage value
     * @return string|null
     */
    public function getTaxPercentage()
    {
        return $this->TaxPercentage;
    }
    /**
     * Set TaxPercentage value
     * @param string $taxPercentage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirFeeType
     */
    public function setTaxPercentage($taxPercentage = null)
    {
        // validation for constraint: string
        if (!is_null($taxPercentage) && !is_string($taxPercentage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxPercentage)), __LINE__);
        }
        $this->TaxPercentage = $taxPercentage;
        return $this;
    }
    /**
     * Get Operation value
     * @return string|null
     */
    public function getOperation()
    {
        return $this->Operation;
    }
    /**
     * Set Operation value
     * @param string $operation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirFeeType
     */
    public function setOperation($operation = null)
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operation)), __LINE__);
        }
        $this->Operation = $operation;
        return $this;
    }
    /**
     * Get FeeTransactionType value
     * @return string|null
     */
    public function getFeeTransactionType()
    {
        return $this->FeeTransactionType;
    }
    /**
     * Set FeeTransactionType value
     * @param string $feeTransactionType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirFeeType
     */
    public function setFeeTransactionType($feeTransactionType = null)
    {
        // validation for constraint: string
        if (!is_null($feeTransactionType) && !is_string($feeTransactionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($feeTransactionType)), __LINE__);
        }
        $this->FeeTransactionType = $feeTransactionType;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirFeeType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirFeeType
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
