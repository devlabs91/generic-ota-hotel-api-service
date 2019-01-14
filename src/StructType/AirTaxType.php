<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirTaxType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the data fields available for air tax. | A textual description.
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
     * - use: required
     * @var string
     */
    public $TaxCode;
    /**
     * Constructor method for AirTaxType
     * @uses AirTaxType::setTaxCode()
     * @param string $taxCode
     */
    public function __construct($taxCode = null)
    {
        $this
            ->setTaxCode($taxCode);
    }
    /**
     * Get TaxCode value
     * @return string
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
