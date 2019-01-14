<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightTypePrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for certain types of flights, such as connections or stopovers, when used for a specific travel situation.
 * @subpackage Structs
 */
class FlightTypePrefType extends AbstractStructBase
{
    /**
     * The FlightType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $FlightType;
    /**
     * The MaxConnections
     * Meta informations extracted from the WSDL
     * - documentation: Indicates that if connection is chosen, then this attribute defines the maximum number of connections preferred.
     * - use: optional
     * @var int
     */
    public $MaxConnections;
    /**
     * Constructor method for FlightTypePrefType
     * @uses FlightTypePrefType::setFlightType()
     * @uses FlightTypePrefType::setMaxConnections()
     * @param string $flightType
     * @param int $maxConnections
     */
    public function __construct($flightType = null, $maxConnections = null)
    {
        $this
            ->setFlightType($flightType)
            ->setMaxConnections($maxConnections);
    }
    /**
     * Get FlightType value
     * @return string|null
     */
    public function getFlightType()
    {
        return $this->FlightType;
    }
    /**
     * Set FlightType value
     * @param string $flightType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightTypePrefType
     */
    public function setFlightType($flightType = null)
    {
        // validation for constraint: string
        if (!is_null($flightType) && !is_string($flightType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightType)), __LINE__);
        }
        $this->FlightType = $flightType;
        return $this;
    }
    /**
     * Get MaxConnections value
     * @return int|null
     */
    public function getMaxConnections()
    {
        return $this->MaxConnections;
    }
    /**
     * Set MaxConnections value
     * @param int $maxConnections
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightTypePrefType
     */
    public function setMaxConnections($maxConnections = null)
    {
        // validation for constraint: int
        if (!is_null($maxConnections) && !is_numeric($maxConnections)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxConnections)), __LINE__);
        }
        $this->MaxConnections = $maxConnections;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightTypePrefType
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
