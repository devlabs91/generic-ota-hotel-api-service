<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketingInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Minimum information about ticketing required to complete the booking transaction.
 * @subpackage Structs
 */
class TicketingInfoType extends AbstractStructBase
{
    /**
     * The TicketAdvisory
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TicketAdvisory[]
     */
    public $TicketAdvisory;
    /**
     * The TicketingVendor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TicketingVendor
     */
    public $TicketingVendor;
    /**
     * The PricingSystem
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PricingSystem
     */
    public $PricingSystem;
    /**
     * The TotalFare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TotalFare
     */
    public $TotalFare;
    /**
     * The TicketTimeLimit
     * Meta informations extracted from the WSDL
     * - documentation: TicketTimeLimit - Indicates the ticketing arrangement, and allows for the requirement that an itinerary must be ticketed by a certain date and time.
     * - use: optional
     * @var string
     */
    public $TicketTimeLimit;
    /**
     * The CancelOnExpiryInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, unticketed bookings should be cancelled when the TicketTimeLimit has expired.
     * - use: optional
     * @var bool
     */
    public $CancelOnExpiryInd;
    /**
     * The TicketType
     * Meta informations extracted from the WSDL
     * - documentation: TicketType - Indicates the type of ticket (Paper, eTicket)
     * - use: optional
     * @var string
     */
    public $TicketType;
    /**
     * The TicketingStatus
     * Meta informations extracted from the WSDL
     * - documentation: Code for setting and displaying detailed ticketing information. Refer to OpenTravel Code List Ticketing Status (TST).
     * - use: optional
     * @var string
     */
    public $TicketingStatus;
    /**
     * The FlightSegmentRefNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specifies one or more segment numbers for ticketing purposes. This RPH is associated with the RPH contained in the FlightSegment element in AirBookRQ.
     * - use: optional
     * @var string
     */
    public $FlightSegmentRefNumber;
    /**
     * The TravelerRefNumber
     * Meta informations extracted from the WSDL
     * - documentation: Specifies one or more traveler names for ticketing purposes. This RPH is associated with the RPH contained in the TravelerRefNumber element in AirBookRQ.
     * - use: optional
     * @var string
     */
    public $TravelerRefNumber;
    /**
     * The ReverseTktgSegmentsInd
     * Meta informations extracted from the WSDL
     * - documentation: Applies a reverse sequence of the outbound travel to the inbound travel.
     * - use: optional
     * @var bool
     */
    public $ReverseTktgSegmentsInd;
    /**
     * The PseudoCityCode
     * Meta informations extracted from the WSDL
     * - documentation: An identification code assigned to an office/agency by a reservation system.
     * - use: optional
     * @var string
     */
    public $PseudoCityCode;
    /**
     * The RequestedTicketingDate
     * Meta informations extracted from the WSDL
     * - documentation: The date on which ticketing should occur.
     * - use: optional
     * @var string
     */
    public $RequestedTicketingDate;
    /**
     * The TimeLimitMinutes
     * Meta informations extracted from the WSDL
     * - documentation: The number of minutes until the ticket must be issued for the itinerary.
     * - use: optional
     * @var string
     */
    public $TimeLimitMinutes;
    /**
     * The BookingChangeType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $BookingChangeType;
    /**
     * The TicketDocumentNbr
     * Meta informations extracted from the WSDL
     * - documentation: The ticket document number including the airline code, the form code, and the serial number.
     * - use: optional
     * @var string
     */
    public $TicketDocumentNbr;
    /**
     * The PassengerTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Code used to indicate the ticketing-relevant type of traveler that has been quoted (e.g., MIL, CHD, INF, SEN).
     * - use: optional
     * @var string
     */
    public $PassengerTypeCode;
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the required modification to the element.
     * - use: optional
     * @var string
     */
    public $Operation;
    /**
     * The MiscTicketingCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies one or more ticketing relevant codes. Refer to OpenTravel code list Misc Ticketing Code (MTC).
     * - use: optional
     * @var string
     */
    public $MiscTicketingCode;
    /**
     * Constructor method for TicketingInfoType
     * @uses TicketingInfoType::setTicketAdvisory()
     * @uses TicketingInfoType::setTicketingVendor()
     * @uses TicketingInfoType::setPricingSystem()
     * @uses TicketingInfoType::setTotalFare()
     * @uses TicketingInfoType::setTicketTimeLimit()
     * @uses TicketingInfoType::setCancelOnExpiryInd()
     * @uses TicketingInfoType::setTicketType()
     * @uses TicketingInfoType::setTicketingStatus()
     * @uses TicketingInfoType::setFlightSegmentRefNumber()
     * @uses TicketingInfoType::setTravelerRefNumber()
     * @uses TicketingInfoType::setReverseTktgSegmentsInd()
     * @uses TicketingInfoType::setPseudoCityCode()
     * @uses TicketingInfoType::setRequestedTicketingDate()
     * @uses TicketingInfoType::setTimeLimitMinutes()
     * @uses TicketingInfoType::setBookingChangeType()
     * @uses TicketingInfoType::setTicketDocumentNbr()
     * @uses TicketingInfoType::setPassengerTypeCode()
     * @uses TicketingInfoType::setOperation()
     * @uses TicketingInfoType::setMiscTicketingCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TicketAdvisory[] $ticketAdvisory
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TicketingVendor $ticketingVendor
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricingSystem $pricingSystem
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TotalFare $totalFare
     * @param string $ticketTimeLimit
     * @param bool $cancelOnExpiryInd
     * @param string $ticketType
     * @param string $ticketingStatus
     * @param string $flightSegmentRefNumber
     * @param string $travelerRefNumber
     * @param bool $reverseTktgSegmentsInd
     * @param string $pseudoCityCode
     * @param string $requestedTicketingDate
     * @param string $timeLimitMinutes
     * @param string $bookingChangeType
     * @param string $ticketDocumentNbr
     * @param string $passengerTypeCode
     * @param string $operation
     * @param string $miscTicketingCode
     */
    public function __construct(array $ticketAdvisory = array(), \Devlabs91\GenericOtaHotelApiService\StructType\TicketingVendor $ticketingVendor = null, \Devlabs91\GenericOtaHotelApiService\StructType\PricingSystem $pricingSystem = null, \Devlabs91\GenericOtaHotelApiService\StructType\TotalFare $totalFare = null, $ticketTimeLimit = null, $cancelOnExpiryInd = null, $ticketType = null, $ticketingStatus = null, $flightSegmentRefNumber = null, $travelerRefNumber = null, $reverseTktgSegmentsInd = null, $pseudoCityCode = null, $requestedTicketingDate = null, $timeLimitMinutes = null, $bookingChangeType = null, $ticketDocumentNbr = null, $passengerTypeCode = null, $operation = null, $miscTicketingCode = null)
    {
        $this
            ->setTicketAdvisory($ticketAdvisory)
            ->setTicketingVendor($ticketingVendor)
            ->setPricingSystem($pricingSystem)
            ->setTotalFare($totalFare)
            ->setTicketTimeLimit($ticketTimeLimit)
            ->setCancelOnExpiryInd($cancelOnExpiryInd)
            ->setTicketType($ticketType)
            ->setTicketingStatus($ticketingStatus)
            ->setFlightSegmentRefNumber($flightSegmentRefNumber)
            ->setTravelerRefNumber($travelerRefNumber)
            ->setReverseTktgSegmentsInd($reverseTktgSegmentsInd)
            ->setPseudoCityCode($pseudoCityCode)
            ->setRequestedTicketingDate($requestedTicketingDate)
            ->setTimeLimitMinutes($timeLimitMinutes)
            ->setBookingChangeType($bookingChangeType)
            ->setTicketDocumentNbr($ticketDocumentNbr)
            ->setPassengerTypeCode($passengerTypeCode)
            ->setOperation($operation)
            ->setMiscTicketingCode($miscTicketingCode);
    }
    /**
     * Get TicketAdvisory value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketAdvisory[]|null
     */
    public function getTicketAdvisory()
    {
        return $this->TicketAdvisory;
    }
    /**
     * Set TicketAdvisory value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TicketAdvisory[] $ticketAdvisory
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setTicketAdvisory(array $ticketAdvisory = array())
    {
        foreach ($ticketAdvisory as $ticketingInfoTypeTicketAdvisoryItem) {
            // validation for constraint: itemType
            if (!$ticketingInfoTypeTicketAdvisoryItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\TicketAdvisory) {
                throw new \InvalidArgumentException(sprintf('The TicketAdvisory property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\TicketAdvisory, "%s" given', is_object($ticketingInfoTypeTicketAdvisoryItem) ? get_class($ticketingInfoTypeTicketAdvisoryItem) : gettype($ticketingInfoTypeTicketAdvisoryItem)), __LINE__);
            }
        }
        $this->TicketAdvisory = $ticketAdvisory;
        return $this;
    }
    /**
     * Add item to TicketAdvisory value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TicketAdvisory $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function addToTicketAdvisory(\Devlabs91\GenericOtaHotelApiService\StructType\TicketAdvisory $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\TicketAdvisory) {
            throw new \InvalidArgumentException(sprintf('The TicketAdvisory property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\TicketAdvisory, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TicketAdvisory[] = $item;
        return $this;
    }
    /**
     * Get TicketingVendor value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingVendor|null
     */
    public function getTicketingVendor()
    {
        return $this->TicketingVendor;
    }
    /**
     * Set TicketingVendor value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TicketingVendor $ticketingVendor
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setTicketingVendor(\Devlabs91\GenericOtaHotelApiService\StructType\TicketingVendor $ticketingVendor = null)
    {
        $this->TicketingVendor = $ticketingVendor;
        return $this;
    }
    /**
     * Get PricingSystem value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingSystem|null
     */
    public function getPricingSystem()
    {
        return $this->PricingSystem;
    }
    /**
     * Set PricingSystem value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricingSystem $pricingSystem
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setPricingSystem(\Devlabs91\GenericOtaHotelApiService\StructType\PricingSystem $pricingSystem = null)
    {
        $this->PricingSystem = $pricingSystem;
        return $this;
    }
    /**
     * Get TotalFare value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TotalFare|null
     */
    public function getTotalFare()
    {
        return $this->TotalFare;
    }
    /**
     * Set TotalFare value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TotalFare $totalFare
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setTotalFare(\Devlabs91\GenericOtaHotelApiService\StructType\TotalFare $totalFare = null)
    {
        $this->TotalFare = $totalFare;
        return $this;
    }
    /**
     * Get TicketTimeLimit value
     * @return string|null
     */
    public function getTicketTimeLimit()
    {
        return $this->TicketTimeLimit;
    }
    /**
     * Set TicketTimeLimit value
     * @param string $ticketTimeLimit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setTicketTimeLimit($ticketTimeLimit = null)
    {
        // validation for constraint: string
        if (!is_null($ticketTimeLimit) && !is_string($ticketTimeLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketTimeLimit)), __LINE__);
        }
        $this->TicketTimeLimit = $ticketTimeLimit;
        return $this;
    }
    /**
     * Get CancelOnExpiryInd value
     * @return bool|null
     */
    public function getCancelOnExpiryInd()
    {
        return $this->CancelOnExpiryInd;
    }
    /**
     * Set CancelOnExpiryInd value
     * @param bool $cancelOnExpiryInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setCancelOnExpiryInd($cancelOnExpiryInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($cancelOnExpiryInd) && !is_bool($cancelOnExpiryInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cancelOnExpiryInd)), __LINE__);
        }
        $this->CancelOnExpiryInd = $cancelOnExpiryInd;
        return $this;
    }
    /**
     * Get TicketType value
     * @return string|null
     */
    public function getTicketType()
    {
        return $this->TicketType;
    }
    /**
     * Set TicketType value
     * @param string $ticketType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setTicketType($ticketType = null)
    {
        // validation for constraint: string
        if (!is_null($ticketType) && !is_string($ticketType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketType)), __LINE__);
        }
        $this->TicketType = $ticketType;
        return $this;
    }
    /**
     * Get TicketingStatus value
     * @return string|null
     */
    public function getTicketingStatus()
    {
        return $this->TicketingStatus;
    }
    /**
     * Set TicketingStatus value
     * @param string $ticketingStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setTicketingStatus($ticketingStatus = null)
    {
        // validation for constraint: string
        if (!is_null($ticketingStatus) && !is_string($ticketingStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketingStatus)), __LINE__);
        }
        $this->TicketingStatus = $ticketingStatus;
        return $this;
    }
    /**
     * Get FlightSegmentRefNumber value
     * @return string|null
     */
    public function getFlightSegmentRefNumber()
    {
        return $this->FlightSegmentRefNumber;
    }
    /**
     * Set FlightSegmentRefNumber value
     * @param string $flightSegmentRefNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setFlightSegmentRefNumber($flightSegmentRefNumber = null)
    {
        // validation for constraint: string
        if (!is_null($flightSegmentRefNumber) && !is_string($flightSegmentRefNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightSegmentRefNumber)), __LINE__);
        }
        $this->FlightSegmentRefNumber = $flightSegmentRefNumber;
        return $this;
    }
    /**
     * Get TravelerRefNumber value
     * @return string|null
     */
    public function getTravelerRefNumber()
    {
        return $this->TravelerRefNumber;
    }
    /**
     * Set TravelerRefNumber value
     * @param string $travelerRefNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setTravelerRefNumber($travelerRefNumber = null)
    {
        // validation for constraint: string
        if (!is_null($travelerRefNumber) && !is_string($travelerRefNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelerRefNumber)), __LINE__);
        }
        $this->TravelerRefNumber = $travelerRefNumber;
        return $this;
    }
    /**
     * Get ReverseTktgSegmentsInd value
     * @return bool|null
     */
    public function getReverseTktgSegmentsInd()
    {
        return $this->ReverseTktgSegmentsInd;
    }
    /**
     * Set ReverseTktgSegmentsInd value
     * @param bool $reverseTktgSegmentsInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setReverseTktgSegmentsInd($reverseTktgSegmentsInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($reverseTktgSegmentsInd) && !is_bool($reverseTktgSegmentsInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($reverseTktgSegmentsInd)), __LINE__);
        }
        $this->ReverseTktgSegmentsInd = $reverseTktgSegmentsInd;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
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
     * Get RequestedTicketingDate value
     * @return string|null
     */
    public function getRequestedTicketingDate()
    {
        return $this->RequestedTicketingDate;
    }
    /**
     * Set RequestedTicketingDate value
     * @param string $requestedTicketingDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setRequestedTicketingDate($requestedTicketingDate = null)
    {
        // validation for constraint: string
        if (!is_null($requestedTicketingDate) && !is_string($requestedTicketingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestedTicketingDate)), __LINE__);
        }
        $this->RequestedTicketingDate = $requestedTicketingDate;
        return $this;
    }
    /**
     * Get TimeLimitMinutes value
     * @return string|null
     */
    public function getTimeLimitMinutes()
    {
        return $this->TimeLimitMinutes;
    }
    /**
     * Set TimeLimitMinutes value
     * @param string $timeLimitMinutes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setTimeLimitMinutes($timeLimitMinutes = null)
    {
        // validation for constraint: string
        if (!is_null($timeLimitMinutes) && !is_string($timeLimitMinutes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeLimitMinutes)), __LINE__);
        }
        $this->TimeLimitMinutes = $timeLimitMinutes;
        return $this;
    }
    /**
     * Get BookingChangeType value
     * @return string|null
     */
    public function getBookingChangeType()
    {
        return $this->BookingChangeType;
    }
    /**
     * Set BookingChangeType value
     * @param string $bookingChangeType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setBookingChangeType($bookingChangeType = null)
    {
        // validation for constraint: string
        if (!is_null($bookingChangeType) && !is_string($bookingChangeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingChangeType)), __LINE__);
        }
        $this->BookingChangeType = $bookingChangeType;
        return $this;
    }
    /**
     * Get TicketDocumentNbr value
     * @return string|null
     */
    public function getTicketDocumentNbr()
    {
        return $this->TicketDocumentNbr;
    }
    /**
     * Set TicketDocumentNbr value
     * @param string $ticketDocumentNbr
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setTicketDocumentNbr($ticketDocumentNbr = null)
    {
        // validation for constraint: string
        if (!is_null($ticketDocumentNbr) && !is_string($ticketDocumentNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketDocumentNbr)), __LINE__);
        }
        $this->TicketDocumentNbr = $ticketDocumentNbr;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
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
     * Get Operation value
     * @return string|null
     */
    public function getOperation()
    {
        return $this->Operation;
    }
    /**
     * Set Operation value
     * @param string $operation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setOperation($operation = null)
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operation)), __LINE__);
        }
        $this->Operation = $operation;
        return $this;
    }
    /**
     * Get MiscTicketingCode value
     * @return string|null
     */
    public function getMiscTicketingCode()
    {
        return $this->MiscTicketingCode;
    }
    /**
     * Set MiscTicketingCode value
     * @param string $miscTicketingCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
     */
    public function setMiscTicketingCode($miscTicketingCode = null)
    {
        // validation for constraint: string
        if (!is_null($miscTicketingCode) && !is_string($miscTicketingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($miscTicketingCode)), __LINE__);
        }
        $this->MiscTicketingCode = $miscTicketingCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfoType
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
