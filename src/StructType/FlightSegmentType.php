<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightSegmentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: FlightSegmentType extends FlightSegmentBaseType to provide additional functionality.
 * @subpackage Structs
 */
class FlightSegmentType extends FlightSegmentBaseType
{
    /**
     * The MarketingAirline
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MarketingAirline
     */
    public $MarketingAirline;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - documentation: The flight number of the flight. This is required for use with scheduled airline messages but may be omitted for requests by tour operators.
     * - use: optional
     * @var string
     */
    public $FlightNumber;
    /**
     * The TourOperatorFlightID
     * Meta informations extracted from the WSDL
     * - documentation: ID of a flight in the Tour Operator's inventory. This flight is not necessarily in the inventory of an airline. Rather, it is a code created by tour operators.
     * - use: optional
     * @var string
     */
    public $TourOperatorFlightID;
    /**
     * The GovernmentApprovalInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates that the flight is subject to government approval.
     * - use: optional
     * @var bool
     */
    public $GovernmentApprovalInd;
    /**
     * The GovernmentApprovalText
     * Meta informations extracted from the WSDL
     * - documentation: Provides additional information concerning the flight being subject to government approval.
     * - use: optional
     * @var string
     */
    public $GovernmentApprovalText;
    /**
     * Constructor method for FlightSegmentType
     * @uses FlightSegmentType::setMarketingAirline()
     * @uses FlightSegmentType::setFlightNumber()
     * @uses FlightSegmentType::setTourOperatorFlightID()
     * @uses FlightSegmentType::setGovernmentApprovalInd()
     * @uses FlightSegmentType::setGovernmentApprovalText()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MarketingAirline $marketingAirline
     * @param string $flightNumber
     * @param string $tourOperatorFlightID
     * @param bool $governmentApprovalInd
     * @param string $governmentApprovalText
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\MarketingAirline $marketingAirline = null, $flightNumber = null, $tourOperatorFlightID = null, $governmentApprovalInd = null, $governmentApprovalText = null)
    {
        $this
            ->setMarketingAirline($marketingAirline)
            ->setFlightNumber($flightNumber)
            ->setTourOperatorFlightID($tourOperatorFlightID)
            ->setGovernmentApprovalInd($governmentApprovalInd)
            ->setGovernmentApprovalText($governmentApprovalText);
    }
    /**
     * Get MarketingAirline value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MarketingAirline|null
     */
    public function getMarketingAirline()
    {
        return $this->MarketingAirline;
    }
    /**
     * Set MarketingAirline value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MarketingAirline $marketingAirline
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightSegmentType
     */
    public function setMarketingAirline(\Devlabs91\GenericOtaHotelApiService\StructType\MarketingAirline $marketingAirline = null)
    {
        $this->MarketingAirline = $marketingAirline;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightSegmentType
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
     * Get TourOperatorFlightID value
     * @return string|null
     */
    public function getTourOperatorFlightID()
    {
        return $this->TourOperatorFlightID;
    }
    /**
     * Set TourOperatorFlightID value
     * @param string $tourOperatorFlightID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightSegmentType
     */
    public function setTourOperatorFlightID($tourOperatorFlightID = null)
    {
        // validation for constraint: string
        if (!is_null($tourOperatorFlightID) && !is_string($tourOperatorFlightID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tourOperatorFlightID)), __LINE__);
        }
        $this->TourOperatorFlightID = $tourOperatorFlightID;
        return $this;
    }
    /**
     * Get GovernmentApprovalInd value
     * @return bool|null
     */
    public function getGovernmentApprovalInd()
    {
        return $this->GovernmentApprovalInd;
    }
    /**
     * Set GovernmentApprovalInd value
     * @param bool $governmentApprovalInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightSegmentType
     */
    public function setGovernmentApprovalInd($governmentApprovalInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($governmentApprovalInd) && !is_bool($governmentApprovalInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($governmentApprovalInd)), __LINE__);
        }
        $this->GovernmentApprovalInd = $governmentApprovalInd;
        return $this;
    }
    /**
     * Get GovernmentApprovalText value
     * @return string|null
     */
    public function getGovernmentApprovalText()
    {
        return $this->GovernmentApprovalText;
    }
    /**
     * Set GovernmentApprovalText value
     * @param string $governmentApprovalText
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightSegmentType
     */
    public function setGovernmentApprovalText($governmentApprovalText = null)
    {
        // validation for constraint: string
        if (!is_null($governmentApprovalText) && !is_string($governmentApprovalText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($governmentApprovalText)), __LINE__);
        }
        $this->GovernmentApprovalText = $governmentApprovalText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightSegmentType
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
