<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxItemType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines a tax item on an invoice
 * @subpackage Structs
 */
class TaxItemType extends AbstractStructBase
{
    /**
     * The TaxAmount
     * Meta informations extracted from the WSDL
     * - documentation: An amount of tax payable; may be repeated for multiple currencies e.g. GBP and Euros..
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $TaxAmount;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Description;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The Rate
     * Meta informations extracted from the WSDL
     * - documentation: A percentage rate of tax.
     * - use: optional
     * @var string
     */
    public $Rate;
    /**
     * Constructor method for TaxItemType
     * @uses TaxItemType::setTaxAmount()
     * @uses TaxItemType::setDescription()
     * @uses TaxItemType::setCode()
     * @uses TaxItemType::setRate()
     * @param mixed[] $taxAmount
     * @param string $description
     * @param string $code
     * @param string $rate
     */
    public function __construct(array $taxAmount = array(), $description = null, $code = null, $rate = null)
    {
        $this
            ->setTaxAmount($taxAmount)
            ->setDescription($description)
            ->setCode($code)
            ->setRate($rate);
    }
    /**
     * Get TaxAmount value
     * @return mixed[]|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @throws \InvalidArgumentException
     * @param mixed[] $taxAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxItemType
     */
    public function setTaxAmount(array $taxAmount = array())
    {
        foreach ($taxAmount as $taxItemTypeTaxAmountItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The TaxAmount property can only contain items of anyType, "%s" given', is_object($taxItemTypeTaxAmountItem) ? get_class($taxItemTypeTaxAmountItem) : gettype($taxItemTypeTaxAmountItem)), __LINE__);
            }
        }
        $this->TaxAmount = $taxAmount;
        return $this;
    }
    /**
     * Add item to TaxAmount value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxItemType
     */
    public function addToTaxAmount($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The TaxAmount property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxAmount[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxItemType
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
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxItemType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Rate value
     * @return string|null
     */
    public function getRate()
    {
        return $this->Rate;
    }
    /**
     * Set Rate value
     * @param string $rate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxItemType
     */
    public function setRate($rate = null)
    {
        // validation for constraint: string
        if (!is_null($rate) && !is_string($rate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rate)), __LINE__);
        }
        $this->Rate = $rate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxItemType
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
