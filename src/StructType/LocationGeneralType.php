<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationGeneralType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides high-level information regarding a location.
 * @subpackage Structs
 */
class LocationGeneralType extends AbstractStructBase
{
    /**
     * The CityName
     * Meta informations extracted from the WSDL
     * - documentation: City (e.g., Dublin), town, or postal station (i.e., a postal service territory, often used in a military address).
     * - minOccurs: 0
     * @var mixed
     */
    public $CityName;
    /**
     * The StateProv
     * Meta informations extracted from the WSDL
     * - documentation: State or Province name (e.g., Texas).
     * - minOccurs: 0
     * @var mixed
     */
    public $StateProv;
    /**
     * The CountryName
     * Meta informations extracted from the WSDL
     * - documentation: Country name (e.g., Ireland).
     * - minOccurs: 0
     * @var mixed
     */
    public $CountryName;
    /**
     * Constructor method for LocationGeneralType
     * @uses LocationGeneralType::setCityName()
     * @uses LocationGeneralType::setStateProv()
     * @uses LocationGeneralType::setCountryName()
     * @param mixed $cityName
     * @param mixed $stateProv
     * @param mixed $countryName
     */
    public function __construct($cityName = null, $stateProv = null, $countryName = null)
    {
        $this
            ->setCityName($cityName)
            ->setStateProv($stateProv)
            ->setCountryName($countryName);
    }
    /**
     * Get CityName value
     * @return mixed|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }
    /**
     * Set CityName value
     * @param mixed $cityName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationGeneralType
     */
    public function setCityName($cityName = null)
    {
        $this->CityName = $cityName;
        return $this;
    }
    /**
     * Get StateProv value
     * @return mixed|null
     */
    public function getStateProv()
    {
        return $this->StateProv;
    }
    /**
     * Set StateProv value
     * @param mixed $stateProv
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationGeneralType
     */
    public function setStateProv($stateProv = null)
    {
        $this->StateProv = $stateProv;
        return $this;
    }
    /**
     * Get CountryName value
     * @return mixed|null
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }
    /**
     * Set CountryName value
     * @param mixed $countryName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationGeneralType
     */
    public function setCountryName($countryName = null)
    {
        $this->CountryName = $countryName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationGeneralType
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
