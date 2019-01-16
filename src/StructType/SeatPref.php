<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatPref StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferred seat characteristics. Refer to OpenTravel Code List Seat Preference (STP) for codes.
 * @subpackage Structs
 */
class SeatPref extends AbstractStructBase
{
    /**
     * The FlightDistanceQualifier
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $FlightDistanceQualifier;
    /**
     * The InternationalIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates an international flight.
     * - use: optional
     * @var bool
     */
    public $InternationalIndicator;
    /**
     * The AirlineVendorPrefRPH
     * Meta informations extracted from the WSDL
     * - documentation: Reference to one or more airlines in VendorPref.
     * - use: optional
     * @var string
     */
    public $AirlineVendorPrefRPH;
    /**
     * The PassengerTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Code used to indicate the type of traveler (e.g., ADT, CHD, INF, GRP).
     * - use: optional
     * @var string
     */
    public $PassengerTypeCode;
    /**
     * The TransferAction
     * Meta informations extracted from the WSDL
     * - documentation: Indicates under what conditions this element will be transfered to the booking.
     * - use: optional
     * @var string
     */
    public $TransferAction;
    /**
     * Constructor method for SeatPref
     * @uses SeatPref::setFlightDistanceQualifier()
     * @uses SeatPref::setInternationalIndicator()
     * @uses SeatPref::setAirlineVendorPrefRPH()
     * @uses SeatPref::setPassengerTypeCode()
     * @uses SeatPref::setTransferAction()
     * @param string $flightDistanceQualifier
     * @param bool $internationalIndicator
     * @param string $airlineVendorPrefRPH
     * @param string $passengerTypeCode
     * @param string $transferAction
     */
    public function __construct($flightDistanceQualifier = null, $internationalIndicator = null, $airlineVendorPrefRPH = null, $passengerTypeCode = null, $transferAction = null)
    {
        $this
            ->setFlightDistanceQualifier($flightDistanceQualifier)
            ->setInternationalIndicator($internationalIndicator)
            ->setAirlineVendorPrefRPH($airlineVendorPrefRPH)
            ->setPassengerTypeCode($passengerTypeCode)
            ->setTransferAction($transferAction);
    }
    /**
     * Get FlightDistanceQualifier value
     * @return string|null
     */
    public function getFlightDistanceQualifier()
    {
        return $this->FlightDistanceQualifier;
    }
    /**
     * Set FlightDistanceQualifier value
     * @param string $flightDistanceQualifier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatPref
     */
    public function setFlightDistanceQualifier($flightDistanceQualifier = null)
    {
        // validation for constraint: string
        if (!is_null($flightDistanceQualifier) && !is_string($flightDistanceQualifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightDistanceQualifier)), __LINE__);
        }
        $this->FlightDistanceQualifier = $flightDistanceQualifier;
        return $this;
    }
    /**
     * Get InternationalIndicator value
     * @return bool|null
     */
    public function getInternationalIndicator()
    {
        return $this->InternationalIndicator;
    }
    /**
     * Set InternationalIndicator value
     * @param bool $internationalIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatPref
     */
    public function setInternationalIndicator($internationalIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($internationalIndicator) && !is_bool($internationalIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($internationalIndicator)), __LINE__);
        }
        $this->InternationalIndicator = $internationalIndicator;
        return $this;
    }
    /**
     * Get AirlineVendorPrefRPH value
     * @return string|null
     */
    public function getAirlineVendorPrefRPH()
    {
        return $this->AirlineVendorPrefRPH;
    }
    /**
     * Set AirlineVendorPrefRPH value
     * @param string $airlineVendorPrefRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatPref
     */
    public function setAirlineVendorPrefRPH($airlineVendorPrefRPH = null)
    {
        // validation for constraint: string
        if (!is_null($airlineVendorPrefRPH) && !is_string($airlineVendorPrefRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineVendorPrefRPH)), __LINE__);
        }
        $this->AirlineVendorPrefRPH = $airlineVendorPrefRPH;
        return $this;
    }
    /**
     * Get PassengerTypeCode value
     * @return string|null
     */
    public function getPassengerTypeCode()
    {
        return $this->PassengerTypeCode;
    }
    /**
     * Set PassengerTypeCode value
     * @param string $passengerTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatPref
     */
    public function setPassengerTypeCode($passengerTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($passengerTypeCode) && !is_string($passengerTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerTypeCode)), __LINE__);
        }
        $this->PassengerTypeCode = $passengerTypeCode;
        return $this;
    }
    /**
     * Get TransferAction value
     * @return string|null
     */
    public function getTransferAction()
    {
        return $this->TransferAction;
    }
    /**
     * Set TransferAction value
     * @param string $transferAction
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatPref
     */
    public function setTransferAction($transferAction = null)
    {
        // validation for constraint: string
        if (!is_null($transferAction) && !is_string($transferAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transferAction)), __LINE__);
        }
        $this->TransferAction = $transferAction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatPref
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
