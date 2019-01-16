<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationLocation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Travel Destination Location - for example, air uses the IATA 3 letter code.
 * @subpackage Structs
 */
class DestinationLocation extends LocationType
{
    /**
     * The MultiAirportCityInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, other airports within this city may be considered (i.e., EWR, JFK when origin location is LGA.)
     * - use: optional
     * @var bool
     */
    public $MultiAirportCityInd;
    /**
     * The AlternateLocationInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, alternate locations may be considered.
     * - use: optional
     * @var bool
     */
    public $AlternateLocationInd;
    /**
     * Constructor method for DestinationLocation
     * @uses DestinationLocation::setMultiAirportCityInd()
     * @uses DestinationLocation::setAlternateLocationInd()
     * @param bool $multiAirportCityInd
     * @param bool $alternateLocationInd
     */
    public function __construct($multiAirportCityInd = null, $alternateLocationInd = null)
    {
        $this
            ->setMultiAirportCityInd($multiAirportCityInd)
            ->setAlternateLocationInd($alternateLocationInd);
    }
    /**
     * Get MultiAirportCityInd value
     * @return bool|null
     */
    public function getMultiAirportCityInd()
    {
        return $this->MultiAirportCityInd;
    }
    /**
     * Set MultiAirportCityInd value
     * @param bool $multiAirportCityInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DestinationLocation
     */
    public function setMultiAirportCityInd($multiAirportCityInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($multiAirportCityInd) && !is_bool($multiAirportCityInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($multiAirportCityInd)), __LINE__);
        }
        $this->MultiAirportCityInd = $multiAirportCityInd;
        return $this;
    }
    /**
     * Get AlternateLocationInd value
     * @return bool|null
     */
    public function getAlternateLocationInd()
    {
        return $this->AlternateLocationInd;
    }
    /**
     * Set AlternateLocationInd value
     * @param bool $alternateLocationInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DestinationLocation
     */
    public function setAlternateLocationInd($alternateLocationInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($alternateLocationInd) && !is_bool($alternateLocationInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($alternateLocationInd)), __LINE__);
        }
        $this->AlternateLocationInd = $alternateLocationInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DestinationLocation
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
