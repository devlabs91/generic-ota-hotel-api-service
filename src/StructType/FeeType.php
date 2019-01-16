<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used for non-tax fees and charges (e.g. service charges) . | Provides details of the fee. | Provides the effective and expiry dates for the fee. | Specifies charge information by unit (e.g., room, person, item) and frequency (e.g.,
 * daily, weekly, stay).
 * @subpackage Structs
 */
class FeeType extends AbstractStructBase
{
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - documentation: Used for taxes on the associated fee.
     * - minOccurs: 0
     * @var mixed
     */
    public $Taxes;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Text description of the fees in a given language.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Description;
    /**
     * The TaxInclusive
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether taxes are included when figuring the fees.
     * @var bool
     */
    public $TaxInclusive;
    /**
     * The MandatoryIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates the fee is mandatory. When false, the fee is not mandatory.
     * - use: optional
     * @var bool
     */
    public $MandatoryIndicator;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: An index code to identify an instance in a collection of like items.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The TaxableIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates that the fee is subject to tax.
     * - use: optional
     * @var bool
     */
    public $TaxableIndicator;
    /**
     * Constructor method for FeeType
     * @uses FeeType::setTaxes()
     * @uses FeeType::setDescription()
     * @uses FeeType::setTaxInclusive()
     * @uses FeeType::setMandatoryIndicator()
     * @uses FeeType::setRPH()
     * @uses FeeType::setTaxableIndicator()
     * @param mixed $taxes
     * @param mixed[] $description
     * @param bool $taxInclusive
     * @param bool $mandatoryIndicator
     * @param string $rPH
     * @param bool $taxableIndicator
     */
    public function __construct($taxes = null, array $description = array(), $taxInclusive = null, $mandatoryIndicator = null, $rPH = null, $taxableIndicator = null)
    {
        $this
            ->setTaxes($taxes)
            ->setDescription($description)
            ->setTaxInclusive($taxInclusive)
            ->setMandatoryIndicator($mandatoryIndicator)
            ->setRPH($rPH)
            ->setTaxableIndicator($taxableIndicator);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeeType
     */
    public function setTaxes($taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get Description value
     * @return mixed[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param mixed[] $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeeType
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $feeTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($feeTypeDescriptionItem) ? get_class($feeTypeDescriptionItem) : gettype($feeTypeDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeeType
     */
    public function addToDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
    }
    /**
     * Get TaxInclusive value
     * @return bool|null
     */
    public function getTaxInclusive()
    {
        return $this->TaxInclusive;
    }
    /**
     * Set TaxInclusive value
     * @param bool $taxInclusive
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeeType
     */
    public function setTaxInclusive($taxInclusive = null)
    {
        // validation for constraint: boolean
        if (!is_null($taxInclusive) && !is_bool($taxInclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($taxInclusive)), __LINE__);
        }
        $this->TaxInclusive = $taxInclusive;
        return $this;
    }
    /**
     * Get MandatoryIndicator value
     * @return bool|null
     */
    public function getMandatoryIndicator()
    {
        return $this->MandatoryIndicator;
    }
    /**
     * Set MandatoryIndicator value
     * @param bool $mandatoryIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeeType
     */
    public function setMandatoryIndicator($mandatoryIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($mandatoryIndicator) && !is_bool($mandatoryIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($mandatoryIndicator)), __LINE__);
        }
        $this->MandatoryIndicator = $mandatoryIndicator;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeeType
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
     * Get TaxableIndicator value
     * @return bool|null
     */
    public function getTaxableIndicator()
    {
        return $this->TaxableIndicator;
    }
    /**
     * Set TaxableIndicator value
     * @param bool $taxableIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeeType
     */
    public function setTaxableIndicator($taxableIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($taxableIndicator) && !is_bool($taxableIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($taxableIndicator)), __LINE__);
        }
        $this->TaxableIndicator = $taxableIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeeType
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
