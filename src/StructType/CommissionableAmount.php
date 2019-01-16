<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommissionableAmount StructType
 * Meta informations extracted from the WSDL
 * - documentation: The amount on which commission is calculated. | Provides the currency amount on which the commission is applied.
 * @subpackage Structs
 */
class CommissionableAmount extends AbstractStructBase
{
    /**
     * The TaxInclusiveIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates that the commission is calculated using the rate including tax. When false, indicates that the commission is calculated using the net rate.
     * - use: optional
     * @var bool
     */
    public $TaxInclusiveIndicator;
    /**
     * Constructor method for CommissionableAmount
     * @uses CommissionableAmount::setTaxInclusiveIndicator()
     * @param bool $taxInclusiveIndicator
     */
    public function __construct($taxInclusiveIndicator = null)
    {
        $this
            ->setTaxInclusiveIndicator($taxInclusiveIndicator);
    }
    /**
     * Get TaxInclusiveIndicator value
     * @return bool|null
     */
    public function getTaxInclusiveIndicator()
    {
        return $this->TaxInclusiveIndicator;
    }
    /**
     * Set TaxInclusiveIndicator value
     * @param bool $taxInclusiveIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionableAmount
     */
    public function setTaxInclusiveIndicator($taxInclusiveIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($taxInclusiveIndicator) && !is_bool($taxInclusiveIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($taxInclusiveIndicator)), __LINE__);
        }
        $this->TaxInclusiveIndicator = $taxInclusiveIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CommissionableAmount
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
