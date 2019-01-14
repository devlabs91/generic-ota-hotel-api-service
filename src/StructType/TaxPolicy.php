<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxPolicy StructType
 * @subpackage Structs
 */
class TaxPolicy extends TaxType
{
    /**
     * The NightsForTaxExemptionQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Length of stay required for tax exemption.
     * - use: optional
     * @var int
     */
    public $NightsForTaxExemptionQuantity;
    /**
     * The TaxableNightsQuantity
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $TaxableNightsQuantity;
    /**
     * Constructor method for TaxPolicy
     * @uses TaxPolicy::setNightsForTaxExemptionQuantity()
     * @uses TaxPolicy::setTaxableNightsQuantity()
     * @param int $nightsForTaxExemptionQuantity
     * @param int $taxableNightsQuantity
     */
    public function __construct($nightsForTaxExemptionQuantity = null, $taxableNightsQuantity = null)
    {
        $this
            ->setNightsForTaxExemptionQuantity($nightsForTaxExemptionQuantity)
            ->setTaxableNightsQuantity($taxableNightsQuantity);
    }
    /**
     * Get NightsForTaxExemptionQuantity value
     * @return int|null
     */
    public function getNightsForTaxExemptionQuantity()
    {
        return $this->NightsForTaxExemptionQuantity;
    }
    /**
     * Set NightsForTaxExemptionQuantity value
     * @param int $nightsForTaxExemptionQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicy
     */
    public function setNightsForTaxExemptionQuantity($nightsForTaxExemptionQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($nightsForTaxExemptionQuantity) && !is_numeric($nightsForTaxExemptionQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nightsForTaxExemptionQuantity)), __LINE__);
        }
        $this->NightsForTaxExemptionQuantity = $nightsForTaxExemptionQuantity;
        return $this;
    }
    /**
     * Get TaxableNightsQuantity value
     * @return int|null
     */
    public function getTaxableNightsQuantity()
    {
        return $this->TaxableNightsQuantity;
    }
    /**
     * Set TaxableNightsQuantity value
     * @param int $taxableNightsQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicy
     */
    public function setTaxableNightsQuantity($taxableNightsQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($taxableNightsQuantity) && !is_numeric($taxableNightsQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($taxableNightsQuantity)), __LINE__);
        }
        $this->TaxableNightsQuantity = $taxableNightsQuantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicy
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
