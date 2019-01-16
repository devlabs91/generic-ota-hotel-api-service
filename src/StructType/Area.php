<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Area StructType
 * Meta informations extracted from the WSDL
 * - documentation: An area determined by the hotel reservation system.
 * - type: xs:decimal
 * - use: optional
 * @subpackage Structs
 */
class Area extends AbstractStructBase
{
    /**
     * The AreaDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $AreaDescription;
    /**
     * The CityCode
     * Meta informations extracted from the WSDL
     * - documentation: The IATA city code; for example DCA, ORD.
     * - use: optional
     * @var string
     */
    public $CityCode;
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
     * - documentation: The country in which the area is located.
     * - use: optional
     * @var string
     */
    public $CountryCode;
    /**
     * Constructor method for Area
     * @uses Area::setAreaDescription()
     * @uses Area::setCityCode()
     * @uses Area::setStateProvCode()
     * @uses Area::setCountryCode()
     * @param mixed $areaDescription
     * @param string $cityCode
     * @param string $stateProvCode
     * @param string $countryCode
     */
    public function __construct($areaDescription = null, $cityCode = null, $stateProvCode = null, $countryCode = null)
    {
        $this
            ->setAreaDescription($areaDescription)
            ->setCityCode($cityCode)
            ->setStateProvCode($stateProvCode)
            ->setCountryCode($countryCode);
    }
    /**
     * Get AreaDescription value
     * @return mixed|null
     */
    public function getAreaDescription()
    {
        return $this->AreaDescription;
    }
    /**
     * Set AreaDescription value
     * @param mixed $areaDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Area
     */
    public function setAreaDescription($areaDescription = null)
    {
        $this->AreaDescription = $areaDescription;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Area
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Area
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Area
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Area
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
