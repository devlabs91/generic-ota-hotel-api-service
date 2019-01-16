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
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassPref[]
     */
    public $BookingClassPref;
    /**
     * Constructor method for SpecificFlightInfoType
     * @uses SpecificFlightInfoType::setFlightNumber()
     * @uses SpecificFlightInfoType::setAirline()
     * @uses SpecificFlightInfoType::setBookingClassPref()
     * @param mixed $flightNumber
     * @param mixed $airline
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassPref[] $bookingClassPref
     */
    public function __construct($flightNumber = null, $airline = null, array $bookingClassPref = array())
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassPref[]|null
     */
    public function getBookingClassPref()
    {
        return $this->BookingClassPref;
    }
    /**
     * Set BookingClassPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassPref[] $bookingClassPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecificFlightInfoType
     */
    public function setBookingClassPref(array $bookingClassPref = array())
    {
        foreach ($bookingClassPref as $specificFlightInfoTypeBookingClassPrefItem) {
            // validation for constraint: itemType
            if (!$specificFlightInfoTypeBookingClassPrefItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassPref) {
                throw new \InvalidArgumentException(sprintf('The BookingClassPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassPref, "%s" given', is_object($specificFlightInfoTypeBookingClassPrefItem) ? get_class($specificFlightInfoTypeBookingClassPrefItem) : gettype($specificFlightInfoTypeBookingClassPrefItem)), __LINE__);
            }
        }
        $this->BookingClassPref = $bookingClassPref;
        return $this;
    }
    /**
     * Add item to BookingClassPref value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassPref $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecificFlightInfoType
     */
    public function addToBookingClassPref(\Devlabs91\GenericOtaHotelApiService\StructType\BookingClassPref $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassPref) {
            throw new \InvalidArgumentException(sprintf('The BookingClassPref property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassPref, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookingClassPref[] = $item;
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
