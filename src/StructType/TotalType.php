<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The total amount charged for the service including additional amounts and fees.
 * @subpackage Structs
 */
class TotalType extends AbstractStructBase
{
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - documentation: A collection of taxes.
     * - minOccurs: 0
     * @var mixed
     */
    public $Taxes;
    /**
     * The AmountBeforeTax
     * Meta informations extracted from the WSDL
     * - documentation: The total amount not including any associated tax (e.g., sales tax, VAT, GST or any associated tax).
     * - use: optional
     * @var string
     */
    public $AmountBeforeTax;
    /**
     * The AmountAfterTax
     * Meta informations extracted from the WSDL
     * - documentation: The total amount including all associated taxes (e.g., sales tax, VAT, GST or any associated tax).
     * - use: optional
     * @var string
     */
    public $AmountAfterTax;
    /**
     * The AdditionalFeesExcludedIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, amounts do not contain additional fees or charges.
     * - use: optional
     * @var bool
     */
    public $AdditionalFeesExcludedIndicator;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Type of charge. Refer to OpenTravel Code List Charge Type (CHG).
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The ServiceOverrideIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true indicates that the service amount has been overridden.
     * - use: optional
     * @var bool
     */
    public $ServiceOverrideIndicator;
    /**
     * The RateOverrideIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true indicates that the rate amount has been overridden.
     * - use: optional
     * @var bool
     */
    public $RateOverrideIndicator;
    /**
     * The AmountIncludingMarkup
     * Meta informations extracted from the WSDL
     * - documentation: This amount includes markup and taxes.
     * - use: optional
     * @var string
     */
    public $AmountIncludingMarkup;
    /**
     * Constructor method for TotalType
     * @uses TotalType::setTaxes()
     * @uses TotalType::setAmountBeforeTax()
     * @uses TotalType::setAmountAfterTax()
     * @uses TotalType::setAdditionalFeesExcludedIndicator()
     * @uses TotalType::setType()
     * @uses TotalType::setServiceOverrideIndicator()
     * @uses TotalType::setRateOverrideIndicator()
     * @uses TotalType::setAmountIncludingMarkup()
     * @param mixed $taxes
     * @param string $amountBeforeTax
     * @param string $amountAfterTax
     * @param bool $additionalFeesExcludedIndicator
     * @param string $type
     * @param bool $serviceOverrideIndicator
     * @param bool $rateOverrideIndicator
     * @param string $amountIncludingMarkup
     */
    public function __construct($taxes = null, $amountBeforeTax = null, $amountAfterTax = null, $additionalFeesExcludedIndicator = null, $type = null, $serviceOverrideIndicator = null, $rateOverrideIndicator = null, $amountIncludingMarkup = null)
    {
        $this
            ->setTaxes($taxes)
            ->setAmountBeforeTax($amountBeforeTax)
            ->setAmountAfterTax($amountAfterTax)
            ->setAdditionalFeesExcludedIndicator($additionalFeesExcludedIndicator)
            ->setType($type)
            ->setServiceOverrideIndicator($serviceOverrideIndicator)
            ->setRateOverrideIndicator($rateOverrideIndicator)
            ->setAmountIncludingMarkup($amountIncludingMarkup);
    }
    /**
     * Get Taxes value
     * @return mixed|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param mixed $taxes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TotalType
     */
    public function setTaxes($taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get AmountBeforeTax value
     * @return string|null
     */
    public function getAmountBeforeTax()
    {
        return $this->AmountBeforeTax;
    }
    /**
     * Set AmountBeforeTax value
     * @param string $amountBeforeTax
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TotalType
     */
    public function setAmountBeforeTax($amountBeforeTax = null)
    {
        // validation for constraint: string
        if (!is_null($amountBeforeTax) && !is_string($amountBeforeTax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amountBeforeTax)), __LINE__);
        }
        $this->AmountBeforeTax = $amountBeforeTax;
        return $this;
    }
    /**
     * Get AmountAfterTax value
     * @return string|null
     */
    public function getAmountAfterTax()
    {
        return $this->AmountAfterTax;
    }
    /**
     * Set AmountAfterTax value
     * @param string $amountAfterTax
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TotalType
     */
    public function setAmountAfterTax($amountAfterTax = null)
    {
        // validation for constraint: string
        if (!is_null($amountAfterTax) && !is_string($amountAfterTax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amountAfterTax)), __LINE__);
        }
        $this->AmountAfterTax = $amountAfterTax;
        return $this;
    }
    /**
     * Get AdditionalFeesExcludedIndicator value
     * @return bool|null
     */
    public function getAdditionalFeesExcludedIndicator()
    {
        return $this->AdditionalFeesExcludedIndicator;
    }
    /**
     * Set AdditionalFeesExcludedIndicator value
     * @param bool $additionalFeesExcludedIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TotalType
     */
    public function setAdditionalFeesExcludedIndicator($additionalFeesExcludedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($additionalFeesExcludedIndicator) && !is_bool($additionalFeesExcludedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($additionalFeesExcludedIndicator)), __LINE__);
        }
        $this->AdditionalFeesExcludedIndicator = $additionalFeesExcludedIndicator;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TotalType
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
     * Get ServiceOverrideIndicator value
     * @return bool|null
     */
    public function getServiceOverrideIndicator()
    {
        return $this->ServiceOverrideIndicator;
    }
    /**
     * Set ServiceOverrideIndicator value
     * @param bool $serviceOverrideIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TotalType
     */
    public function setServiceOverrideIndicator($serviceOverrideIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($serviceOverrideIndicator) && !is_bool($serviceOverrideIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($serviceOverrideIndicator)), __LINE__);
        }
        $this->ServiceOverrideIndicator = $serviceOverrideIndicator;
        return $this;
    }
    /**
     * Get RateOverrideIndicator value
     * @return bool|null
     */
    public function getRateOverrideIndicator()
    {
        return $this->RateOverrideIndicator;
    }
    /**
     * Set RateOverrideIndicator value
     * @param bool $rateOverrideIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TotalType
     */
    public function setRateOverrideIndicator($rateOverrideIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($rateOverrideIndicator) && !is_bool($rateOverrideIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rateOverrideIndicator)), __LINE__);
        }
        $this->RateOverrideIndicator = $rateOverrideIndicator;
        return $this;
    }
    /**
     * Get AmountIncludingMarkup value
     * @return string|null
     */
    public function getAmountIncludingMarkup()
    {
        return $this->AmountIncludingMarkup;
    }
    /**
     * Set AmountIncludingMarkup value
     * @param string $amountIncludingMarkup
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TotalType
     */
    public function setAmountIncludingMarkup($amountIncludingMarkup = null)
    {
        // validation for constraint: string
        if (!is_null($amountIncludingMarkup) && !is_string($amountIncludingMarkup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amountIncludingMarkup)), __LINE__);
        }
        $this->AmountIncludingMarkup = $amountIncludingMarkup;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TotalType
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
