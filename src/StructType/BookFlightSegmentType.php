<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookFlightSegmentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for the flight segment data plus the MarriageGrp. | Construct for holding the booked flight segment information.
 * @subpackage Structs
 */
class BookFlightSegmentType extends FlightSegmentType
{
    /**
     * The MarriageGrp
     * Meta informations extracted from the WSDL
     * - documentation: Many airlines link connection flights together by terming them married segments. When two or more segments are married, they must be processed as one unit. The segments must be moved, cancelled, and/or priced together. The value of
     * the marriage group must be the same for all segments.
     * - minOccurs: 0
     * @var mixed
     */
    public $MarriageGrp;
    /**
     * The BookingClassAvails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvails[]
     */
    public $BookingClassAvails;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - documentation: Free text information that the marketing carrier may send about this flight.
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Comment;
    /**
     * The StopLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\StopLocation[]
     */
    public $StopLocation;
    /**
     * The ResBookDesigCode
     * Meta informations extracted from the WSDL
     * - documentation: Specific Booking Class for this segment.
     * - use: optional
     * @var string
     */
    public $ResBookDesigCode;
    /**
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - documentation: Number of travelers associated with this segment.
     * - use: optional
     * @var int
     */
    public $NumberInParty;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Code providing status information for this segment. Refer to OpenTravel Code List Status (STS).
     * - use: optional
     * @var string
     */
    public $Status;
    /**
     * The E_TicketEligibility
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $E_TicketEligibility;
    /**
     * The MealCode
     * Meta informations extracted from the WSDL
     * - documentation: The applicable meal service code for this flight.
     * - use: optional
     * @var string
     */
    public $MealCode;
    /**
     * The DepartureDay
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $DepartureDay;
    /**
     * The StopoverInd
     * Meta informations extracted from the WSDL
     * - documentation: When true a stopover is permitted (airline display "O"). When false a stopover is not permitted (airline display "X").
     * - use: optional
     * @var bool
     */
    public $StopoverInd;
    /**
     * The LineNumber
     * Meta informations extracted from the WSDL
     * - documentation: A number that corresponds to a line in a previous response of flight segments.
     * - use: optional
     * @var string
     */
    public $LineNumber;
    /**
     * The ConnectionType
     * Meta informations extracted from the WSDL
     * - documentation: Used to provide the type of connection for this flight segment.
     * - use: optional
     * @var string
     */
    public $ConnectionType;
    /**
     * The ParticipationLevelCode
     * Meta informations extracted from the WSDL
     * - documentation: To specify the level of participation by a vendor in another system. Refer to OpenTravel Code List Participation Level Code (PLC).
     * - use: optional
     * @var string
     */
    public $ParticipationLevelCode;
    /**
     * The Distance
     * Meta informations extracted from the WSDL
     * - documentation: Miles acquired per flight segment, usually used for earning of frequent flyer miles.
     * - use: optional
     * @var int
     */
    public $Distance;
    /**
     * The DateChangeNbr
     * Meta informations extracted from the WSDL
     * - documentation: The number of days by which the flight's arrival date differs from its departure date (e.g., +1, -1).
     * - use: optional
     * @var string
     */
    public $DateChangeNbr;
    /**
     * The ValidConnectionInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, this flight segment constitutes a valid connection.
     * - use: optional
     * @var bool
     */
    public $ValidConnectionInd;
    /**
     * Constructor method for BookFlightSegmentType
     * @uses BookFlightSegmentType::setMarriageGrp()
     * @uses BookFlightSegmentType::setBookingClassAvails()
     * @uses BookFlightSegmentType::setComment()
     * @uses BookFlightSegmentType::setStopLocation()
     * @uses BookFlightSegmentType::setResBookDesigCode()
     * @uses BookFlightSegmentType::setNumberInParty()
     * @uses BookFlightSegmentType::setStatus()
     * @uses BookFlightSegmentType::setE_TicketEligibility()
     * @uses BookFlightSegmentType::setMealCode()
     * @uses BookFlightSegmentType::setDepartureDay()
     * @uses BookFlightSegmentType::setStopoverInd()
     * @uses BookFlightSegmentType::setLineNumber()
     * @uses BookFlightSegmentType::setConnectionType()
     * @uses BookFlightSegmentType::setParticipationLevelCode()
     * @uses BookFlightSegmentType::setDistance()
     * @uses BookFlightSegmentType::setDateChangeNbr()
     * @uses BookFlightSegmentType::setValidConnectionInd()
     * @param mixed $marriageGrp
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvails[] $bookingClassAvails
     * @param mixed[] $comment
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\StopLocation[] $stopLocation
     * @param string $resBookDesigCode
     * @param int $numberInParty
     * @param string $status
     * @param string $e_TicketEligibility
     * @param string $mealCode
     * @param string $departureDay
     * @param bool $stopoverInd
     * @param string $lineNumber
     * @param string $connectionType
     * @param string $participationLevelCode
     * @param int $distance
     * @param string $dateChangeNbr
     * @param bool $validConnectionInd
     */
    public function __construct($marriageGrp = null, array $bookingClassAvails = array(), array $comment = array(), array $stopLocation = array(), $resBookDesigCode = null, $numberInParty = null, $status = null, $e_TicketEligibility = null, $mealCode = null, $departureDay = null, $stopoverInd = null, $lineNumber = null, $connectionType = null, $participationLevelCode = null, $distance = null, $dateChangeNbr = null, $validConnectionInd = null)
    {
        $this
            ->setMarriageGrp($marriageGrp)
            ->setBookingClassAvails($bookingClassAvails)
            ->setComment($comment)
            ->setStopLocation($stopLocation)
            ->setResBookDesigCode($resBookDesigCode)
            ->setNumberInParty($numberInParty)
            ->setStatus($status)
            ->setE_TicketEligibility($e_TicketEligibility)
            ->setMealCode($mealCode)
            ->setDepartureDay($departureDay)
            ->setStopoverInd($stopoverInd)
            ->setLineNumber($lineNumber)
            ->setConnectionType($connectionType)
            ->setParticipationLevelCode($participationLevelCode)
            ->setDistance($distance)
            ->setDateChangeNbr($dateChangeNbr)
            ->setValidConnectionInd($validConnectionInd);
    }
    /**
     * Get MarriageGrp value
     * @return mixed|null
     */
    public function getMarriageGrp()
    {
        return $this->MarriageGrp;
    }
    /**
     * Set MarriageGrp value
     * @param mixed $marriageGrp
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setMarriageGrp($marriageGrp = null)
    {
        $this->MarriageGrp = $marriageGrp;
        return $this;
    }
    /**
     * Get BookingClassAvails value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvails[]|null
     */
    public function getBookingClassAvails()
    {
        return $this->BookingClassAvails;
    }
    /**
     * Set BookingClassAvails value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvails[] $bookingClassAvails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setBookingClassAvails(array $bookingClassAvails = array())
    {
        foreach ($bookingClassAvails as $bookFlightSegmentTypeBookingClassAvailsItem) {
            // validation for constraint: itemType
            if (!$bookFlightSegmentTypeBookingClassAvailsItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvails) {
                throw new \InvalidArgumentException(sprintf('The BookingClassAvails property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvails, "%s" given', is_object($bookFlightSegmentTypeBookingClassAvailsItem) ? get_class($bookFlightSegmentTypeBookingClassAvailsItem) : gettype($bookFlightSegmentTypeBookingClassAvailsItem)), __LINE__);
            }
        }
        $this->BookingClassAvails = $bookingClassAvails;
        return $this;
    }
    /**
     * Add item to BookingClassAvails value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvails $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function addToBookingClassAvails(\Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvails $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvails) {
            throw new \InvalidArgumentException(sprintf('The BookingClassAvails property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvails, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookingClassAvails[] = $item;
        return $this;
    }
    /**
     * Get Comment value
     * @return mixed[]|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @throws \InvalidArgumentException
     * @param mixed[] $comment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setComment(array $comment = array())
    {
        foreach ($comment as $bookFlightSegmentTypeCommentItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Comment property can only contain items of anyType, "%s" given', is_object($bookFlightSegmentTypeCommentItem) ? get_class($bookFlightSegmentTypeCommentItem) : gettype($bookFlightSegmentTypeCommentItem)), __LINE__);
            }
        }
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Add item to Comment value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function addToComment($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Comment property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Comment[] = $item;
        return $this;
    }
    /**
     * Get StopLocation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StopLocation[]|null
     */
    public function getStopLocation()
    {
        return $this->StopLocation;
    }
    /**
     * Set StopLocation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\StopLocation[] $stopLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setStopLocation(array $stopLocation = array())
    {
        foreach ($stopLocation as $bookFlightSegmentTypeStopLocationItem) {
            // validation for constraint: itemType
            if (!$bookFlightSegmentTypeStopLocationItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\StopLocation) {
                throw new \InvalidArgumentException(sprintf('The StopLocation property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\StopLocation, "%s" given', is_object($bookFlightSegmentTypeStopLocationItem) ? get_class($bookFlightSegmentTypeStopLocationItem) : gettype($bookFlightSegmentTypeStopLocationItem)), __LINE__);
            }
        }
        $this->StopLocation = $stopLocation;
        return $this;
    }
    /**
     * Add item to StopLocation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\StopLocation $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function addToStopLocation(\Devlabs91\GenericOtaHotelApiService\StructType\StopLocation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\StopLocation) {
            throw new \InvalidArgumentException(sprintf('The StopLocation property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\StopLocation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->StopLocation[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
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
     * Get NumberInParty value
     * @return int|null
     */
    public function getNumberInParty()
    {
        return $this->NumberInParty;
    }
    /**
     * Set NumberInParty value
     * @param int $numberInParty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setNumberInParty($numberInParty = null)
    {
        // validation for constraint: int
        if (!is_null($numberInParty) && !is_numeric($numberInParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberInParty)), __LINE__);
        }
        $this->NumberInParty = $numberInParty;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
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
     * Get E_TicketEligibility value
     * @return string|null
     */
    public function getE_TicketEligibility()
    {
        return $this->E_TicketEligibility;
    }
    /**
     * Set E_TicketEligibility value
     * @param string $e_TicketEligibility
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setE_TicketEligibility($e_TicketEligibility = null)
    {
        // validation for constraint: string
        if (!is_null($e_TicketEligibility) && !is_string($e_TicketEligibility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($e_TicketEligibility)), __LINE__);
        }
        $this->E_TicketEligibility = $e_TicketEligibility;
        return $this;
    }
    /**
     * Get MealCode value
     * @return string|null
     */
    public function getMealCode()
    {
        return $this->MealCode;
    }
    /**
     * Set MealCode value
     * @param string $mealCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setMealCode($mealCode = null)
    {
        // validation for constraint: string
        if (!is_null($mealCode) && !is_string($mealCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mealCode)), __LINE__);
        }
        $this->MealCode = $mealCode;
        return $this;
    }
    /**
     * Get DepartureDay value
     * @return string|null
     */
    public function getDepartureDay()
    {
        return $this->DepartureDay;
    }
    /**
     * Set DepartureDay value
     * @param string $departureDay
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setDepartureDay($departureDay = null)
    {
        // validation for constraint: string
        if (!is_null($departureDay) && !is_string($departureDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDay)), __LINE__);
        }
        $this->DepartureDay = $departureDay;
        return $this;
    }
    /**
     * Get StopoverInd value
     * @return bool|null
     */
    public function getStopoverInd()
    {
        return $this->StopoverInd;
    }
    /**
     * Set StopoverInd value
     * @param bool $stopoverInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setStopoverInd($stopoverInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($stopoverInd) && !is_bool($stopoverInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($stopoverInd)), __LINE__);
        }
        $this->StopoverInd = $stopoverInd;
        return $this;
    }
    /**
     * Get LineNumber value
     * @return string|null
     */
    public function getLineNumber()
    {
        return $this->LineNumber;
    }
    /**
     * Set LineNumber value
     * @param string $lineNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setLineNumber($lineNumber = null)
    {
        // validation for constraint: string
        if (!is_null($lineNumber) && !is_string($lineNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lineNumber)), __LINE__);
        }
        $this->LineNumber = $lineNumber;
        return $this;
    }
    /**
     * Get ConnectionType value
     * @return string|null
     */
    public function getConnectionType()
    {
        return $this->ConnectionType;
    }
    /**
     * Set ConnectionType value
     * @param string $connectionType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setConnectionType($connectionType = null)
    {
        // validation for constraint: string
        if (!is_null($connectionType) && !is_string($connectionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($connectionType)), __LINE__);
        }
        $this->ConnectionType = $connectionType;
        return $this;
    }
    /**
     * Get ParticipationLevelCode value
     * @return string|null
     */
    public function getParticipationLevelCode()
    {
        return $this->ParticipationLevelCode;
    }
    /**
     * Set ParticipationLevelCode value
     * @param string $participationLevelCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setParticipationLevelCode($participationLevelCode = null)
    {
        // validation for constraint: string
        if (!is_null($participationLevelCode) && !is_string($participationLevelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($participationLevelCode)), __LINE__);
        }
        $this->ParticipationLevelCode = $participationLevelCode;
        return $this;
    }
    /**
     * Get Distance value
     * @return int|null
     */
    public function getDistance()
    {
        return $this->Distance;
    }
    /**
     * Set Distance value
     * @param int $distance
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setDistance($distance = null)
    {
        // validation for constraint: int
        if (!is_null($distance) && !is_numeric($distance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($distance)), __LINE__);
        }
        $this->Distance = $distance;
        return $this;
    }
    /**
     * Get DateChangeNbr value
     * @return string|null
     */
    public function getDateChangeNbr()
    {
        return $this->DateChangeNbr;
    }
    /**
     * Set DateChangeNbr value
     * @param string $dateChangeNbr
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setDateChangeNbr($dateChangeNbr = null)
    {
        // validation for constraint: string
        if (!is_null($dateChangeNbr) && !is_string($dateChangeNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateChangeNbr)), __LINE__);
        }
        $this->DateChangeNbr = $dateChangeNbr;
        return $this;
    }
    /**
     * Get ValidConnectionInd value
     * @return bool|null
     */
    public function getValidConnectionInd()
    {
        return $this->ValidConnectionInd;
    }
    /**
     * Set ValidConnectionInd value
     * @param bool $validConnectionInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
     */
    public function setValidConnectionInd($validConnectionInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($validConnectionInd) && !is_bool($validConnectionInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($validConnectionInd)), __LINE__);
        }
        $this->ValidConnectionInd = $validConnectionInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookFlightSegmentType
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
