<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SourceType StructType
 * @subpackage Structs
 */
class SourceType extends AbstractStructBase
{
    /**
     * The RequestorID
     * Meta informations extracted from the WSDL
     * - documentation: An identifier of the entity making the request (e.g. ATA/IATA/ID number, Electronic Reservation Service Provider (ERSP), Association of British Travel Agents (ABTA)).
     * @var mixed
     */
    public $RequestorID;
    /**
     * The Position
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Position;
    /**
     * The BookingChannel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\BookingChannel
     */
    public $BookingChannel;
    /**
     * The AgentSine
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the party within the requesting entity.
     * - use: optional
     * @var string
     */
    public $AgentSine;
    /**
     * The PseudoCityCode
     * Meta informations extracted from the WSDL
     * - documentation: An identification code assigned to an office/agency by a reservation system.
     * - use: optional
     * @var string
     */
    public $PseudoCityCode;
    /**
     * The ISOCountry
     * Meta informations extracted from the WSDL
     * - documentation: The country code of the requesting party.
     * - use: optional
     * @var string
     */
    public $ISOCountry;
    /**
     * The ISOCurrency
     * Meta informations extracted from the WSDL
     * - documentation: The currency code in which the reservation will be ticketed.
     * - use: optional
     * @var string
     */
    public $ISOCurrency;
    /**
     * The AgentDutyCode
     * Meta informations extracted from the WSDL
     * - documentation: An authority code assigned to a requestor.
     * - use: optional
     * @var string
     */
    public $AgentDutyCode;
    /**
     * The AirlineVendorID
     * Meta informations extracted from the WSDL
     * - documentation: The IATA assigned airline code.
     * - use: optional
     * @var string
     */
    public $AirlineVendorID;
    /**
     * The AirportCode
     * Meta informations extracted from the WSDL
     * - documentation: The IATA assigned airport code.
     * - use: optional
     * @var string
     */
    public $AirportCode;
    /**
     * The FirstDepartPoint
     * Meta informations extracted from the WSDL
     * - documentation: The point of first departure in a trip.
     * - use: optional
     * @var string
     */
    public $FirstDepartPoint;
    /**
     * The ERSP_UserID
     * Meta informations extracted from the WSDL
     * - documentation: Electronic Reservation Service Provider (ERSP) assigned identifier used to identify the individual using the ERSP system.
     * - use: optional
     * @var string
     */
    public $ERSP_UserID;
    /**
     * Constructor method for SourceType
     * @uses SourceType::setRequestorID()
     * @uses SourceType::setPosition()
     * @uses SourceType::setBookingChannel()
     * @uses SourceType::setAgentSine()
     * @uses SourceType::setPseudoCityCode()
     * @uses SourceType::setISOCountry()
     * @uses SourceType::setISOCurrency()
     * @uses SourceType::setAgentDutyCode()
     * @uses SourceType::setAirlineVendorID()
     * @uses SourceType::setAirportCode()
     * @uses SourceType::setFirstDepartPoint()
     * @uses SourceType::setERSP_UserID()
     * @param mixed $requestorID
     * @param mixed $position
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BookingChannel $bookingChannel
     * @param string $agentSine
     * @param string $pseudoCityCode
     * @param string $iSOCountry
     * @param string $iSOCurrency
     * @param string $agentDutyCode
     * @param string $airlineVendorID
     * @param string $airportCode
     * @param string $firstDepartPoint
     * @param string $eRSP_UserID
     */
    public function __construct($requestorID = null, $position = null, \Devlabs91\GenericOtaHotelApiService\StructType\BookingChannel $bookingChannel = null, $agentSine = null, $pseudoCityCode = null, $iSOCountry = null, $iSOCurrency = null, $agentDutyCode = null, $airlineVendorID = null, $airportCode = null, $firstDepartPoint = null, $eRSP_UserID = null)
    {
        $this
            ->setRequestorID($requestorID)
            ->setPosition($position)
            ->setBookingChannel($bookingChannel)
            ->setAgentSine($agentSine)
            ->setPseudoCityCode($pseudoCityCode)
            ->setISOCountry($iSOCountry)
            ->setISOCurrency($iSOCurrency)
            ->setAgentDutyCode($agentDutyCode)
            ->setAirlineVendorID($airlineVendorID)
            ->setAirportCode($airportCode)
            ->setFirstDepartPoint($firstDepartPoint)
            ->setERSP_UserID($eRSP_UserID);
    }
    /**
     * Get RequestorID value
     * @return mixed|null
     */
    public function getRequestorID()
    {
        return $this->RequestorID;
    }
    /**
     * Set RequestorID value
     * @param mixed $requestorID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceType
     */
    public function setRequestorID($requestorID = null)
    {
        $this->RequestorID = $requestorID;
        return $this;
    }
    /**
     * Get Position value
     * @return mixed|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param mixed $position
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceType
     */
    public function setPosition($position = null)
    {
        $this->Position = $position;
        return $this;
    }
    /**
     * Get BookingChannel value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingChannel|null
     */
    public function getBookingChannel()
    {
        return $this->BookingChannel;
    }
    /**
     * Set BookingChannel value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BookingChannel $bookingChannel
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceType
     */
    public function setBookingChannel(\Devlabs91\GenericOtaHotelApiService\StructType\BookingChannel $bookingChannel = null)
    {
        $this->BookingChannel = $bookingChannel;
        return $this;
    }
    /**
     * Get AgentSine value
     * @return string|null
     */
    public function getAgentSine()
    {
        return $this->AgentSine;
    }
    /**
     * Set AgentSine value
     * @param string $agentSine
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceType
     */
    public function setAgentSine($agentSine = null)
    {
        // validation for constraint: string
        if (!is_null($agentSine) && !is_string($agentSine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentSine)), __LINE__);
        }
        $this->AgentSine = $agentSine;
        return $this;
    }
    /**
     * Get PseudoCityCode value
     * @return string|null
     */
    public function getPseudoCityCode()
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceType
     */
    public function setPseudoCityCode($pseudoCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($pseudoCityCode) && !is_string($pseudoCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pseudoCityCode)), __LINE__);
        }
        $this->PseudoCityCode = $pseudoCityCode;
        return $this;
    }
    /**
     * Get ISOCountry value
     * @return string|null
     */
    public function getISOCountry()
    {
        return $this->ISOCountry;
    }
    /**
     * Set ISOCountry value
     * @param string $iSOCountry
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceType
     */
    public function setISOCountry($iSOCountry = null)
    {
        // validation for constraint: string
        if (!is_null($iSOCountry) && !is_string($iSOCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iSOCountry)), __LINE__);
        }
        $this->ISOCountry = $iSOCountry;
        return $this;
    }
    /**
     * Get ISOCurrency value
     * @return string|null
     */
    public function getISOCurrency()
    {
        return $this->ISOCurrency;
    }
    /**
     * Set ISOCurrency value
     * @param string $iSOCurrency
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceType
     */
    public function setISOCurrency($iSOCurrency = null)
    {
        // validation for constraint: string
        if (!is_null($iSOCurrency) && !is_string($iSOCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iSOCurrency)), __LINE__);
        }
        $this->ISOCurrency = $iSOCurrency;
        return $this;
    }
    /**
     * Get AgentDutyCode value
     * @return string|null
     */
    public function getAgentDutyCode()
    {
        return $this->AgentDutyCode;
    }
    /**
     * Set AgentDutyCode value
     * @param string $agentDutyCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceType
     */
    public function setAgentDutyCode($agentDutyCode = null)
    {
        // validation for constraint: string
        if (!is_null($agentDutyCode) && !is_string($agentDutyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agentDutyCode)), __LINE__);
        }
        $this->AgentDutyCode = $agentDutyCode;
        return $this;
    }
    /**
     * Get AirlineVendorID value
     * @return string|null
     */
    public function getAirlineVendorID()
    {
        return $this->AirlineVendorID;
    }
    /**
     * Set AirlineVendorID value
     * @param string $airlineVendorID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceType
     */
    public function setAirlineVendorID($airlineVendorID = null)
    {
        // validation for constraint: string
        if (!is_null($airlineVendorID) && !is_string($airlineVendorID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airlineVendorID)), __LINE__);
        }
        $this->AirlineVendorID = $airlineVendorID;
        return $this;
    }
    /**
     * Get AirportCode value
     * @return string|null
     */
    public function getAirportCode()
    {
        return $this->AirportCode;
    }
    /**
     * Set AirportCode value
     * @param string $airportCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceType
     */
    public function setAirportCode($airportCode = null)
    {
        // validation for constraint: string
        if (!is_null($airportCode) && !is_string($airportCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airportCode)), __LINE__);
        }
        $this->AirportCode = $airportCode;
        return $this;
    }
    /**
     * Get FirstDepartPoint value
     * @return string|null
     */
    public function getFirstDepartPoint()
    {
        return $this->FirstDepartPoint;
    }
    /**
     * Set FirstDepartPoint value
     * @param string $firstDepartPoint
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceType
     */
    public function setFirstDepartPoint($firstDepartPoint = null)
    {
        // validation for constraint: string
        if (!is_null($firstDepartPoint) && !is_string($firstDepartPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstDepartPoint)), __LINE__);
        }
        $this->FirstDepartPoint = $firstDepartPoint;
        return $this;
    }
    /**
     * Get ERSP_UserID value
     * @return string|null
     */
    public function getERSP_UserID()
    {
        return $this->ERSP_UserID;
    }
    /**
     * Set ERSP_UserID value
     * @param string $eRSP_UserID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceType
     */
    public function setERSP_UserID($eRSP_UserID = null)
    {
        // validation for constraint: string
        if (!is_null($eRSP_UserID) && !is_string($eRSP_UserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eRSP_UserID)), __LINE__);
        }
        $this->ERSP_UserID = $eRSP_UserID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SourceType
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
