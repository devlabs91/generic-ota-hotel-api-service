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
     * Constructor method for SeatRequestType
     * @uses SeatRequestType::setDepartureAirport()
     * @uses SeatRequestType::setArrivalAirport()
     * @param mixed $departureAirport
     * @param mixed $arrivalAirport
     */
    public function __construct($departureAirport = null, $arrivalAirport = null)
    {
        $this
            ->setDepartureAirport($departureAirport)
            ->setArrivalAirport($arrivalAirport);
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
