<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the Air Deviation Request information.
 * @subpackage Structs
 */
class AirInfoType extends AbstractStructBase
{
    /**
     * The DepartureCity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the requested departure city.
     * - minOccurs: 0
     * @var mixed
     */
    public $DepartureCity;
    /**
     * The ArrivalCity
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the requested arrival city.
     * - minOccurs: 0
     * @var mixed
     */
    public $ArrivalCity;
    /**
     * The Airline
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the requested Airline.
     * - minOccurs: 0
     * @var mixed
     */
    public $Airline;
    /**
     * The DepartureDateTime
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the requested departure date of the flight.
     * - use: optional
     * @var string
     */
    public $DepartureDateTime;
    /**
     * The ArrivalDateTime
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the requested arrival date of the flight.
     * - use: optional
     * @var string
     */
    public $ArrivalDateTime;
    /**
     * The AirlineCabinClass
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the Cabin Class such as, BUSINESS, ECONOMY, FIRST etc.
     * - use: optional
     * @var string
     */
    public $AirlineCabinClass;
    /**
     * Constructor method for AirInfoType
     * @uses AirInfoType::setDepartureCity()
     * @uses AirInfoType::setArrivalCity()
     * @uses AirInfoType::setAirline()
     * @uses AirInfoType::setDepartureDateTime()
     * @uses AirInfoType::setArrivalDateTime()
     * @uses AirInfoType::setAirlineCabinClass()
     * @param mixed $departureCity
     * @param mixed $arrivalCity
     * @param mixed $airline
     * @param string $departureDateTime
     * @param string $arrivalDateTime
     * @param string $airlineCabinClass
     */
    public function __construct($departureCity = null, $arrivalCity = null, $airline = null, $departureDateTime = null, $arrivalDateTime = null, $airlineCabinClass = null)
    {
        $this
            ->setDepartureCity($departureCity)
            ->setArrivalCity($arrivalCity)
            ->setAirline($airline)
            ->setDepartureDateTime($departureDateTime)
            ->setArrivalDateTime($arrivalDateTime)
            ->setAirlineCabinClass($airlineCabinClass);
    }
    /**
     * Get DepartureCity value
     * @return mixed|null
     */
    public function getDepartureCity()
    {
        return $this->DepartureCity;
    }
    /**
     * Set DepartureCity value
     * @param mixed $departureCity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirInfoType
     */
    public function setDepartureCity($departureCity = null)
    {
        $this->DepartureCity = $departureCity;
        return $this;
    }
    /**
     * Get ArrivalCity value
     * @return mixed|null
     */
    public function getArrivalCity()
    {
        return $this->ArrivalCity;
    }
    /**
     * Set ArrivalCity value
     * @param mixed $arrivalCity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirInfoType
     */
    public function setArrivalCity($arrivalCity = null)
    {
        $this->ArrivalCity = $arrivalCity;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirInfoType
     */
    public function setAirline($airline = null)
    {
        $this->Airline = $airline;
        return $this;
    }
    /**
     * Get DepartureDateTime value
     * @return string|null
     */
    public function getDepartureDateTime()
    {
        return $this->DepartureDateTime;
    }
    /**
     * Set DepartureDateTime value
     * @param string $departureDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirInfoType
     */
    public function setDepartureDateTime($departureDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($departureDateTime) && !is_string($departureDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDateTime)), __LINE__);
        }
        $this->DepartureDateTime = $departureDateTime;
        return $this;
    }
    /**
     * Get ArrivalDateTime value
     * @return string|null
     */
    public function getArrivalDateTime()
    {
        return $this->ArrivalDateTime;
    }
    /**
     * Set ArrivalDateTime value
     * @param string $arrivalDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirInfoType
     */
    public function setArrivalDateTime($arrivalDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalDateTime) && !is_string($arrivalDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalDateTime)), __LINE__);
        }
        $this->ArrivalDateTime = $arrivalDateTime;
        return $this;
    }
    /**
     * Get AirlineCabinClass value
     * @return string|null
     */
    public function getAirlineCabinClass()
    {
        return $this->AirlineCabinClass;
    }
    /**
     * Set AirlineCabinClass value
     * @param string $airlineCabinClass
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirInfoType
     */
    public function setAirlineCabinClass($airlineCabinClass = null)
    {
        // validation for constraint: string
        if (!is_null($airlineCabinClass) && !is_string($airlineCabinClass)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineCabinClass)), __LINE__);
        }
        $this->AirlineCabinClass = $airlineCabinClass;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirInfoType
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
