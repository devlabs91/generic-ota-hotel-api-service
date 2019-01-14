<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WeatherInfos StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of WeatherInfo elements. This may be used to provide information for multiple time periods.
 * @subpackage Structs
 */
class WeatherInfos extends AbstractStructBase
{
    /**
     * The WeatherInfo
     * Meta informations extracted from the WSDL
     * - documentation: Provides detailed information regarding weather.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $WeatherInfo;
    /**
     * Constructor method for WeatherInfos
     * @uses WeatherInfos::setWeatherInfo()
     * @param mixed[] $weatherInfo
     */
    public function __construct(array $weatherInfo = array())
    {
        $this
            ->setWeatherInfo($weatherInfo);
    }
    /**
     * Get WeatherInfo value
     * @return mixed[]|null
     */
    public function getWeatherInfo()
    {
        return $this->WeatherInfo;
    }
    /**
     * Set WeatherInfo value
     * @throws \InvalidArgumentException
     * @param mixed[] $weatherInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WeatherInfos
     */
    public function setWeatherInfo(array $weatherInfo = array())
    {
        foreach ($weatherInfo as $weatherInfosWeatherInfoItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The WeatherInfo property can only contain items of anyType, "%s" given', is_object($weatherInfosWeatherInfoItem) ? get_class($weatherInfosWeatherInfoItem) : gettype($weatherInfosWeatherInfoItem)), __LINE__);
            }
        }
        $this->WeatherInfo = $weatherInfo;
        return $this;
    }
    /**
     * Add item to WeatherInfo value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WeatherInfos
     */
    public function addToWeatherInfo($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The WeatherInfo property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->WeatherInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WeatherInfos
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
