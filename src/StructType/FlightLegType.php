<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightLegType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies minimal information about a flight.
 * @subpackage Structs
 */
class FlightLegType extends AbstractStructBase
{
    /**
     * The DepartureAirport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\DepartureAirport
     */
    public $DepartureAirport;
    /**
     * The ArrivalAirport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalAirport
     */
    public $ArrivalAirport;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - documentation: A flight number.
     * - use: optional
     * @var string
     */
    public $FlightNumber;
    /**
     * The ResBookDesigCode
     * Meta informations extracted from the WSDL
     * - documentation: The reservation booking designator for a flight.
     * - use: optional
     * @var string
     */
    public $ResBookDesigCode;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - documentation: A date for the flight.
     * - use: optional
     * @var string
     */
    public $Date;
    /**
     * Constructor method for FlightLegType
     * @uses FlightLegType::setDepartureAirport()
     * @uses FlightLegType::setArrivalAirport()
     * @uses FlightLegType::setFlightNumber()
     * @uses FlightLegType::setResBookDesigCode()
     * @uses FlightLegType::setDate()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DepartureAirport $departureAirport
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalAirport $arrivalAirport
     * @param string $flightNumber
     * @param string $resBookDesigCode
     * @param string $date
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\DepartureAirport $departureAirport = null, \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalAirport $arrivalAirport = null, $flightNumber = null, $resBookDesigCode = null, $date = null)
    {
        $this
            ->setDepartureAirport($departureAirport)
            ->setArrivalAirport($arrivalAirport)
            ->setFlightNumber($flightNumber)
            ->setResBookDesigCode($resBookDesigCode)
            ->setDate($date);
    }
    /**
     * Get DepartureAirport value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DepartureAirport|null
     */
    public function getDepartureAirport()
    {
        return $this->DepartureAirport;
    }
    /**
     * Set DepartureAirport value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DepartureAirport $departureAirport
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightLegType
     */
    public function setDepartureAirport(\Devlabs91\GenericOtaHotelApiService\StructType\DepartureAirport $departureAirport = null)
    {
        $this->DepartureAirport = $departureAirport;
        return $this;
    }
    /**
     * Get ArrivalAirport value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalAirport|null
     */
    public function getArrivalAirport()
    {
        return $this->ArrivalAirport;
    }
    /**
     * Set ArrivalAirport value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalAirport $arrivalAirport
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightLegType
     */
    public function setArrivalAirport(\Devlabs91\GenericOtaHotelApiService\StructType\ArrivalAirport $arrivalAirport = null)
    {
        $this->ArrivalAirport = $arrivalAirport;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightLegType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightLegType
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
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightLegType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightLegType
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
