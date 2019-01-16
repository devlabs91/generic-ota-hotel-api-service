<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirTaxType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the data fields available for air tax. The element text of this type may contain a description of the tax. | A textual description.
 * - maxLength: 64
 * - minLength: 0
 * @subpackage Structs
 */
class AirTaxType extends AbstractStructBase
{
    /**
     * The TaxCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the code for the tax.
     * - use: optional
     * @var string
     */
    public $TaxCode;
    /**
     * The TaxCountry
     * Meta informations extracted from the WSDL
     * - documentation: Used to identify the country imposing the tax.
     * - use: optional
     * @var string
     */
    public $TaxCountry;
    /**
     * The TaxName
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the tax code by name.
     * - use: optional
     * @var string
     */
    public $TaxName;
    /**
     * The TaxExemptInd
     * Meta informations extracted from the WSDL
     * - documentation: This attribute is a candidate for deprecation. Its use is not recommended. Please instead use the new TaxTransactionType attribute which has taken its place. Deprecation warning added in 2009A. | When true, the fare is exempt from
     * the tax specified by the tax code.
     * - use: optional
     * @var bool
     */
    public $TaxExemptInd;
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the required modification to the element.
     * - use: optional
     * @var string
     */
    public $Operation;
    /**
     * The TaxTransactionType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $TaxTransactionType;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: A unique reference for the tax type (commonly used for modification.)
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for AirTaxType
     * @uses AirTaxType::setTaxCode()
     * @uses AirTaxType::setTaxCountry()
     * @uses AirTaxType::setTaxName()
     * @uses AirTaxType::setTaxExemptInd()
     * @uses AirTaxType::setOperation()
     * @uses AirTaxType::setTaxTransactionType()
     * @uses AirTaxType::setRPH()
     * @param string $taxCode
     * @param string $taxCountry
     * @param string $taxName
     * @param bool $taxExemptInd
     * @param string $operation
     * @param string $taxTransactionType
     * @param string $rPH
     */
    public function __construct($taxCode = null, $taxCountry = null, $taxName = null, $taxExemptInd = null, $operation = null, $taxTransactionType = null, $rPH = null)
    {
        $this
            ->setTaxCode($taxCode)
            ->setTaxCountry($taxCountry)
            ->setTaxName($taxName)
            ->setTaxExemptInd($taxExemptInd)
            ->setOperation($operation)
            ->setTaxTransactionType($taxTransactionType)
            ->setRPH($rPH);
    }
    /**
     * Get TaxCode value
     * @return string|null
     */
    public function getTaxCode()
    {
        return $this->TaxCode;
    }
    /**
     * Set TaxCode value
     * @param string $taxCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTaxType
     */
    public function setTaxCode($taxCode = null)
    {
        // validation for constraint: string
        if (!is_null($taxCode) && !is_string($taxCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxCode)), __LINE__);
        }
        $this->TaxCode = $taxCode;
        return $this;
    }
    /**
     * Get TaxCountry value
     * @return string|null
     */
    public function getTaxCountry()
    {
        return $this->TaxCountry;
    }
    /**
     * Set TaxCountry value
     * @param string $taxCountry
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTaxType
     */
    public function setTaxCountry($taxCountry = null)
    {
        // validation for constraint: string
        if (!is_null($taxCountry) && !is_string($taxCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxCountry)), __LINE__);
        }
        $this->TaxCountry = $taxCountry;
        return $this;
    }
    /**
     * Get TaxName value
     * @return string|null
     */
    public function getTaxName()
    {
        return $this->TaxName;
    }
    /**
     * Set TaxName value
     * @param string $taxName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTaxType
     */
    public function setTaxName($taxName = null)
    {
        // validation for constraint: string
        if (!is_null($taxName) && !is_string($taxName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxName)), __LINE__);
        }
        $this->TaxName = $taxName;
        return $this;
    }
    /**
     * Get TaxExemptInd value
     * @return bool|null
     */
    public function getTaxExemptInd()
    {
        return $this->TaxExemptInd;
    }
    /**
     * Set TaxExemptInd value
     * @param bool $taxExemptInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTaxType
     */
    public function setTaxExemptInd($taxExemptInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($taxExemptInd) && !is_bool($taxExemptInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($taxExemptInd)), __LINE__);
        }
        $this->TaxExemptInd = $taxExemptInd;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTaxType
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
     * Get TaxTransactionType value
     * @return string|null
     */
    public function getTaxTransactionType()
    {
        return $this->TaxTransactionType;
    }
    /**
     * Set TaxTransactionType value
     * @param string $taxTransactionType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTaxType
     */
    public function setTaxTransactionType($taxTransactionType = null)
    {
        // validation for constraint: string
        if (!is_null($taxTransactionType) && !is_string($taxTransactionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxTransactionType)), __LINE__);
        }
        $this->TaxTransactionType = $taxTransactionType;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTaxType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirTaxType
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
