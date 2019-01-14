<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleTaxAmountType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleTaxAmountType complex type defines information specific to one tax amount that is applicable to the cost of an item.
 * @subpackage Structs
 */
class VehicleTaxAmountType extends AbstractStructBase
{
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Total;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $CurrencyCode;
    /**
     * The TaxCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $TaxCode;
    /**
     * The Percentage
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Percentage;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * Constructor method for VehicleTaxAmountType
     * @uses VehicleTaxAmountType::setTotal()
     * @uses VehicleTaxAmountType::setCurrencyCode()
     * @uses VehicleTaxAmountType::setTaxCode()
     * @uses VehicleTaxAmountType::setPercentage()
     * @uses VehicleTaxAmountType::setDescription()
     * @param string $total
     * @param string $currencyCode
     * @param string $taxCode
     * @param string $percentage
     * @param string $description
     */
    public function __construct($total = null, $currencyCode = null, $taxCode = null, $percentage = null, $description = null)
    {
        $this
            ->setTotal($total)
            ->setCurrencyCode($currencyCode)
            ->setTaxCode($taxCode)
            ->setPercentage($percentage)
            ->setDescription($description);
    }
    /**
     * Get Total value
     * @return string
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param string $total
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleTaxAmountType
     */
    public function setTotal($total = null)
    {
        // validation for constraint: string
        if (!is_null($total) && !is_string($total)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($total)), __LINE__);
        }
        $this->Total = $total;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleTaxAmountType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleTaxAmountType
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
     * Get Percentage value
     * @return string|null
     */
    public function getPercentage()
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param string $percentage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleTaxAmountType
     */
    public function setPercentage($percentage = null)
    {
        // validation for constraint: string
        if (!is_null($percentage) && !is_string($percentage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percentage)), __LINE__);
        }
        $this->Percentage = $percentage;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleTaxAmountType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleTaxAmountType
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
