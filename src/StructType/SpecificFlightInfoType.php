<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecificFlightInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specify actual airline, flight number, or booking class
 * @subpackage Structs
 */
class SpecificFlightInfoType extends AbstractStructBase
{
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specific flight number to request availability for. Requires that Airline is also supplied.
     * - minOccurs: 0
     * @var mixed
     */
    public $FlightNumber;
    /**
     * The Airline
     * Meta informations extracted from the WSDL
     * - documentation: Specify airline to request availability for.
     * - minOccurs: 0
     * @var mixed
     */
    public $Airline;
    /**
     * The BookingClassPref
     * Meta informations extracted from the WSDL
     * - documentation: Specify specific booking classes to include and exclude in the response
     * - minOccurs: 0
     * @var mixed
     */
    public $BookingClassPref;
    /**
     * Constructor method for SpecificFlightInfoType
     * @uses SpecificFlightInfoType::setFlightNumber()
     * @uses SpecificFlightInfoType::setAirline()
     * @uses SpecificFlightInfoType::setBookingClassPref()
     * @param mixed $flightNumber
     * @param mixed $airline
     * @param mixed $bookingClassPref
     */
    public function __construct($flightNumber = null, $airline = null, $bookingClassPref = null)
    {
        $this
            ->setFlightNumber($flightNumber)
            ->setAirline($airline)
            ->setBookingClassPref($bookingClassPref);
    }
    /**
     * Get FlightNumber value
     * @return mixed|null
     */
    public function getFlightNumber()
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param mixed $flightNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecificFlightInfoType
     */
    public function setFlightNumber($flightNumber = null)
    {
        $this->FlightNumber = $flightNumber;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecificFlightInfoType
     */
    public function setAirline($airline = null)
    {
        $this->Airline = $airline;
        return $this;
    }
    /**
     * Get BookingClassPref value
     * @return mixed|null
     */
    public function getBookingClassPref()
    {
        return $this->BookingClassPref;
    }
    /**
     * Set BookingClassPref value
     * @param mixed $bookingClassPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecificFlightInfoType
     */
    public function setBookingClassPref($bookingClassPref = null)
    {
        $this->BookingClassPref = $bookingClassPref;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecificFlightInfoType
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
