<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightReference StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies a flight to which the discount pricing applies.
 * @subpackage Structs
 */
class FlightReference extends AbstractStructBase
{
    /**
     * The FlightRefNumber
     * Meta informations extracted from the WSDL
     * - documentation: The flight segment to which the discount pricing should be applied.
     * - use: required
     * @var string
     */
    public $FlightRefNumber;
    /**
     * Constructor method for FlightReference
     * @uses FlightReference::setFlightRefNumber()
     * @param string $flightRefNumber
     */
    public function __construct($flightRefNumber = null)
    {
        $this
            ->setFlightRefNumber($flightRefNumber);
    }
    /**
     * Get FlightRefNumber value
     * @return string
     */
    public function getFlightRefNumber()
    {
        return $this->FlightRefNumber;
    }
    /**
     * Set FlightRefNumber value
     * @param string $flightRefNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightReference
     */
    public function setFlightRefNumber($flightRefNumber = null)
    {
        // validation for constraint: string
        if (!is_null($flightRefNumber) && !is_string($flightRefNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightRefNumber)), __LINE__);
        }
        $this->FlightRefNumber = $flightRefNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightReference
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
