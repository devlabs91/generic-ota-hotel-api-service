<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Residency StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines where the passenger resides for fare calculation purposes.
 * @subpackage Structs
 */
class Residency extends AbstractStructBase
{
    /**
     * The StateProvCode
     * Meta informations extracted from the WSDL
     * - documentation: The standard code or abbreviation for the state, province, or region.
     * - use: optional
     * @var string
     */
    public $StateProvCode;
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - documentation: 2 character country code as defined in ISO3166.
     * - use: optional
     * @var string
     */
    public $CountryCode;
    /**
     * Constructor method for Residency
     * @uses Residency::setStateProvCode()
     * @uses Residency::setCountryCode()
     * @param string $stateProvCode
     * @param string $countryCode
     */
    public function __construct($stateProvCode = null, $countryCode = null)
    {
        $this
            ->setStateProvCode($stateProvCode)
            ->setCountryCode($countryCode);
    }
    /**
     * Get StateProvCode value
     * @return string|null
     */
    public function getStateProvCode()
    {
        return $this->StateProvCode;
    }
    /**
     * Set StateProvCode value
     * @param string $stateProvCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Residency
     */
    public function setStateProvCode($stateProvCode = null)
    {
        // validation for constraint: string
        if (!is_null($stateProvCode) && !is_string($stateProvCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stateProvCode)), __LINE__);
        }
        $this->StateProvCode = $stateProvCode;
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Residency
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Residency
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
