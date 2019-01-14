<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginDestinationInformationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Origin and Destination location, and time information for the request. Also includes the ability to specify a connection location for the search.
 * @subpackage Structs
 */
class OriginDestinationInformationType extends TravelDateTimeType
{
    /**
     * The OriginLocation
     * Meta informations extracted from the WSDL
     * - documentation: Travel Origin Location - for example, air uses the IATA 3 letter code.
     * @var mixed
     */
    public $OriginLocation;
    /**
     * The DestinationLocation
     * Meta informations extracted from the WSDL
     * - documentation: Travel Destination Location - for example, air uses the IATA 3 letter code.
     * @var mixed
     */
    public $DestinationLocation;
    /**
     * The ConnectionLocations
     * Meta informations extracted from the WSDL
     * - documentation: Travel Connection Location - for example, air uses the IATA 3 letter code.
     * - minOccurs: 0
     * @var mixed
     */
    public $ConnectionLocations;
    /**
     * Constructor method for OriginDestinationInformationType
     * @uses OriginDestinationInformationType::setOriginLocation()
     * @uses OriginDestinationInformationType::setDestinationLocation()
     * @uses OriginDestinationInformationType::setConnectionLocations()
     * @param mixed $originLocation
     * @param mixed $destinationLocation
     * @param mixed $connectionLocations
     */
    public function __construct($originLocation = null, $destinationLocation = null, $connectionLocations = null)
    {
        $this
            ->setOriginLocation($originLocation)
            ->setDestinationLocation($destinationLocation)
            ->setConnectionLocations($connectionLocations);
    }
    /**
     * Get OriginLocation value
     * @return mixed|null
     */
    public function getOriginLocation()
    {
        return $this->OriginLocation;
    }
    /**
     * Set OriginLocation value
     * @param mixed $originLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationInformationType
     */
    public function setOriginLocation($originLocation = null)
    {
        $this->OriginLocation = $originLocation;
        return $this;
    }
    /**
     * Get DestinationLocation value
     * @return mixed|null
     */
    public function getDestinationLocation()
    {
        return $this->DestinationLocation;
    }
    /**
     * Set DestinationLocation value
     * @param mixed $destinationLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationInformationType
     */
    public function setDestinationLocation($destinationLocation = null)
    {
        $this->DestinationLocation = $destinationLocation;
        return $this;
    }
    /**
     * Get ConnectionLocations value
     * @return mixed|null
     */
    public function getConnectionLocations()
    {
        return $this->ConnectionLocations;
    }
    /**
     * Set ConnectionLocations value
     * @param mixed $connectionLocations
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationInformationType
     */
    public function setConnectionLocations($connectionLocations = null)
    {
        $this->ConnectionLocations = $connectionLocations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationInformationType
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
