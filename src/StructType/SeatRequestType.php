<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatRequestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Object to hold a passengers' seat request | Attributes for seat request. Note: you can choose a specific seat or just a general preference
 * @subpackage Structs
 */
class SeatRequestType extends AbstractStructBase
{
    /**
     * The DepartureAirport
     * Meta informations extracted from the WSDL
     * - documentation: Departure point of flight segment.
     * - minOccurs: 0
     * @var mixed
     */
    public $DepartureAirport;
    /**
     * The ArrivalAirport
     * Meta informations extracted from the WSDL
     * - documentation: Arrival point of flight segment.
     * - minOccurs: 0
     * @var mixed
     */
    public $ArrivalAirport;
    /**
     * The Airline
     * Meta informations extracted from the WSDL
     * - documentation: Specify the airline the seat was requested for.
     * - minOccurs: 0
     * @var mixed
     */
    public $Airline;
    /**
     * The DepartureDate
     * Meta informations extracted from the WSDL
     * - documentation: The departure date of the flight for the seat requested.
     * - use: optional
     * @var string
     */
    public $DepartureDate;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - documentation: The number of the flight for which this seat is requested.
     * - use: optional
     * @var string
     */
    public $FlightNumber;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Code providing status information for this seat request. Refer to OpenTravel Code List Status (STS).
     * - use: optional
     * @var string
     */
    public $Status;
    /**
     * Constructor method for SeatRequestType
     * @uses SeatRequestType::setDepartureAirport()
     * @uses SeatRequestType::setArrivalAirport()
     * @uses SeatRequestType::setAirline()
     * @uses SeatRequestType::setDepartureDate()
     * @uses SeatRequestType::setFlightNumber()
     * @uses SeatRequestType::setStatus()
     * @param mixed $departureAirport
     * @param mixed $arrivalAirport
     * @param mixed $airline
     * @param string $departureDate
     * @param string $flightNumber
     * @param string $status
     */
    public function __construct($departureAirport = null, $arrivalAirport = null, $airline = null, $departureDate = null, $flightNumber = null, $status = null)
    {
        $this
            ->setDepartureAirport($departureAirport)
            ->setArrivalAirport($arrivalAirport)
            ->setAirline($airline)
            ->setDepartureDate($departureDate)
            ->setFlightNumber($flightNumber)
            ->setStatus($status);
    }
    /**
     * Get DepartureAirport value
     * @return mixed|null
     */
    public function getDepartureAirport()
    {
        return $this->DepartureAirport;
    }
    /**
     * Set DepartureAirport value
     * @param mixed $departureAirport
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequestType
     */
    public function setDepartureAirport($departureAirport = null)
    {
        $this->DepartureAirport = $departureAirport;
        return $this;
    }
    /**
     * Get ArrivalAirport value
     * @return mixed|null
     */
    public function getArrivalAirport()
    {
        return $this->ArrivalAirport;
    }
    /**
     * Set ArrivalAirport value
     * @param mixed $arrivalAirport
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequestType
     */
    public function setArrivalAirport($arrivalAirport = null)
    {
        $this->ArrivalAirport = $arrivalAirport;
        return $this;
    }
    /**
     * Get Airline value
     * @return mixed|null
     */
    public function getAirline()
    {
        return $this->Airline;
    }
    /**
     * Set Airline value
     * @param mixed $airline
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequestType
     */
    public function setAirline($airline = null)
    {
        $this->Airline = $airline;
        return $this;
    }
    /**
     * Get DepartureDate value
     * @return string|null
     */
    public function getDepartureDate()
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param string $departureDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequestType
     */
    public function setDepartureDate($departureDate = null)
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDate)), __LINE__);
        }
        $this->DepartureDate = $departureDate;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequestType
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
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequestType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatRequestType
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
