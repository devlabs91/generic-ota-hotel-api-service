<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationCode StructType
 * Meta informations extracted from the WSDL
 * - type: StringLength1to16
 * - use: optional
 * @subpackage Structs
 */
class LocationCode extends AbstractStructBase
{
    /**
     * The CityCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CityCode;
    /**
     * The StateProvinceCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $StateProvinceCode;
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CountryCode;
    /**
     * Constructor method for LocationCode
     * @uses LocationCode::setCityCode()
     * @uses LocationCode::setStateProvinceCode()
     * @uses LocationCode::setCountryCode()
     * @param string $cityCode
     * @param string $stateProvinceCode
     * @param string $countryCode
     */
    public function __construct($cityCode = null, $stateProvinceCode = null, $countryCode = null)
    {
        $this
            ->setCityCode($cityCode)
            ->setStateProvinceCode($stateProvinceCode)
            ->setCountryCode($countryCode);
    }
    /**
     * Get CityCode value
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->CityCode;
    }
    /**
     * Set CityCode value
     * @param string $cityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationCode
     */
    public function setCityCode($cityCode = null)
    {
        // validation for constraint: string
        if (!is_null($cityCode) && !is_string($cityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cityCode)), __LINE__);
        }
        $this->CityCode = $cityCode;
        return $this;
    }
    /**
     * Get StateProvinceCode value
     * @return string|null
     */
    public function getStateProvinceCode()
    {
        return $this->StateProvinceCode;
    }
    /**
     * Set StateProvinceCode value
     * @param string $stateProvinceCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationCode
     */
    public function setStateProvinceCode($stateProvinceCode = null)
    {
        // validation for constraint: string
        if (!is_null($stateProvinceCode) && !is_string($stateProvinceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stateProvinceCode)), __LINE__);
        }
        $this->StateProvinceCode = $stateProvinceCode;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationCode
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationCode
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
