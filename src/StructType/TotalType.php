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
     * - minOccurs: 0
     * @var mixed
     */
    public $Taxes;
    /**
     * The AmountBeforeTax
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AmountBeforeTax;
    /**
     * The AmountAfterTax
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AmountAfterTax;
    /**
     * Constructor method for TotalType
     * @uses TotalType::setTaxes()
     * @uses TotalType::setAmountBeforeTax()
     * @uses TotalType::setAmountAfterTax()
     * @param mixed $taxes
     * @param string $amountBeforeTax
     * @param string $amountAfterTax
     */
    public function __construct($taxes = null, $amountBeforeTax = null, $amountAfterTax = null)
    {
        $this
            ->setTaxes($taxes)
            ->setAmountBeforeTax($amountBeforeTax)
            ->setAmountAfterTax($amountAfterTax);
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
