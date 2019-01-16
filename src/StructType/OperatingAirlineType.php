<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperatingAirlineType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the operating carrier and flight number.
 * @subpackage Structs
 */
class OperatingAirlineType extends CompanyNameType
{
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - documentation: The flight number as assigned by the operating carrier.
     * - use: optional
     * @var string
     */
    public $FlightNumber;
    /**
     * The ResBookDesigCode
     * Meta informations extracted from the WSDL
     * - documentation: The reservation booking designator of the operating carrier when different from the marketing carrier.
     * - use: optional
     * @var string
     */
    public $ResBookDesigCode;
    /**
     * Constructor method for OperatingAirlineType
     * @uses OperatingAirlineType::setFlightNumber()
     * @uses OperatingAirlineType::setResBookDesigCode()
     * @param string $flightNumber
     * @param string $resBookDesigCode
     */
    public function __construct($flightNumber = null, $resBookDesigCode = null)
    {
        $this
            ->setFlightNumber($flightNumber)
            ->setResBookDesigCode($resBookDesigCode);
    }
    /**
     * Get FlightNumber value
     * @return string|null
     */
    public function getFlightNumber()
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperatingAirlineType
     */
    public function setFlightNumber($flightNumber = null)
    {
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
        return $this;
    }
    /**
     * Get ResBookDesigCode value
     * @return string|null
     */
    public function getResBookDesigCode()
    {
        return $this->ResBookDesigCode;
    }
    /**
     * Set ResBookDesigCode value
     * @param string $resBookDesigCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperatingAirlineType
     */
    public function setResBookDesigCode($resBookDesigCode = null)
    {
        // validation for constraint: string
        if (!is_null($resBookDesigCode) && !is_string($resBookDesigCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resBookDesigCode)), __LINE__);
        }
        $this->ResBookDesigCode = $resBookDesigCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperatingAirlineType
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
