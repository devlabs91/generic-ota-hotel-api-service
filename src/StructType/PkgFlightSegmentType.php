<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PkgFlightSegmentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides details for an air segment in a response message.
 * @subpackage Structs
 */
class PkgFlightSegmentType extends PkgFlightSegmentBaseType
{
    /**
     * The CabinAvailability
     * Meta informations extracted from the WSDL
     * - documentation: Identifies a section of an aircraft, possibly providing extra services.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $CabinAvailability;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The DepartureDay
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the day on which the flight departs.
     * - use: optional
     * @var string
     */
    public $DepartureDay;
    /**
     * The TravelCode
     * Meta informations extracted from the WSDL
     * - documentation: The supplier's code to identify the travel arrangement for the package
     * - use: optional
     * @var string
     */
    public $TravelCode;
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - documentation: A length of time.
     * - use: optional
     * @var string
     */
    public $Duration;
    /**
     * The DirectionInd
     * Meta informations extracted from the WSDL
     * - documentation: Identifies whether travel is: one way, return trip, circle trip, open jaw, other
     * - use: optional
     * @var string
     */
    public $DirectionInd;
    /**
     * The CheckInDate
     * Meta informations extracted from the WSDL
     * - documentation: Provides the recommended date and time of passenger check-in.
     * - use: optional
     * @var string
     */
    public $CheckInDate;
    /**
     * The CheckInDesk
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the desk or desks at which the customer will check-in and optionally the handling company operating the check-in service.
     * - use: optional
     * @var string
     */
    public $CheckInDesk;
    /**
     * The TOD_Indicator
     * Meta informations extracted from the WSDL
     * - documentation: When 'true', the ticket(s) must be picked up at the airport, usually on the date of departure. When 'false', the tickets will be delivered according to the normal fulfilment arrangements e.g. by post or as an e-ticket.
     * - use: optional
     * @var bool
     */
    public $TOD_Indicator;
    /**
     * The TicketType
     * Meta informations extracted from the WSDL
     * - documentation: Paper or e-ticket
     * - use: optional
     * @var string
     */
    public $TicketType;
    /**
     * Constructor method for PkgFlightSegmentType
     * @uses PkgFlightSegmentType::setCabinAvailability()
     * @uses PkgFlightSegmentType::setType()
     * @uses PkgFlightSegmentType::setDepartureDay()
     * @uses PkgFlightSegmentType::setTravelCode()
     * @uses PkgFlightSegmentType::setDuration()
     * @uses PkgFlightSegmentType::setDirectionInd()
     * @uses PkgFlightSegmentType::setCheckInDate()
     * @uses PkgFlightSegmentType::setCheckInDesk()
     * @uses PkgFlightSegmentType::setTOD_Indicator()
     * @uses PkgFlightSegmentType::setTicketType()
     * @param mixed[] $cabinAvailability
     * @param string $type
     * @param string $departureDay
     * @param string $travelCode
     * @param string $duration
     * @param string $directionInd
     * @param string $checkInDate
     * @param string $checkInDesk
     * @param bool $tOD_Indicator
     * @param string $ticketType
     */
    public function __construct(array $cabinAvailability = array(), $type = null, $departureDay = null, $travelCode = null, $duration = null, $directionInd = null, $checkInDate = null, $checkInDesk = null, $tOD_Indicator = null, $ticketType = null)
    {
        $this
            ->setCabinAvailability($cabinAvailability)
            ->setType($type)
            ->setDepartureDay($departureDay)
            ->setTravelCode($travelCode)
            ->setDuration($duration)
            ->setDirectionInd($directionInd)
            ->setCheckInDate($checkInDate)
            ->setCheckInDesk($checkInDesk)
            ->setTOD_Indicator($tOD_Indicator)
            ->setTicketType($ticketType);
    }
    /**
     * Get CabinAvailability value
     * @return mixed[]|null
     */
    public function getCabinAvailability()
    {
        return $this->CabinAvailability;
    }
    /**
     * Set CabinAvailability value
     * @throws \InvalidArgumentException
     * @param mixed[] $cabinAvailability
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgFlightSegmentType
     */
    public function setCabinAvailability(array $cabinAvailability = array())
    {
        foreach ($cabinAvailability as $pkgFlightSegmentTypeCabinAvailabilityItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CabinAvailability property can only contain items of anyType, "%s" given', is_object($pkgFlightSegmentTypeCabinAvailabilityItem) ? get_class($pkgFlightSegmentTypeCabinAvailabilityItem) : gettype($pkgFlightSegmentTypeCabinAvailabilityItem)), __LINE__);
            }
        }
        $this->CabinAvailability = $cabinAvailability;
        return $this;
    }
    /**
     * Add item to CabinAvailability value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgFlightSegmentType
     */
    public function addToCabinAvailability($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The CabinAvailability property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CabinAvailability[] = $item;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgFlightSegmentType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgFlightSegmentType
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
     * Get TravelCode value
     * @return string|null
     */
    public function getTravelCode()
    {
        return $this->TravelCode;
    }
    /**
     * Set TravelCode value
     * @param string $travelCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgFlightSegmentType
     */
    public function setTravelCode($travelCode = null)
    {
        // validation for constraint: string
        if (!is_null($travelCode) && !is_string($travelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelCode)), __LINE__);
        }
        $this->TravelCode = $travelCode;
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param string $duration
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgFlightSegmentType
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get DirectionInd value
     * @return string|null
     */
    public function getDirectionInd()
    {
        return $this->DirectionInd;
    }
    /**
     * Set DirectionInd value
     * @param string $directionInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgFlightSegmentType
     */
    public function setDirectionInd($directionInd = null)
    {
        // validation for constraint: string
        if (!is_null($directionInd) && !is_string($directionInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($directionInd)), __LINE__);
        }
        $this->DirectionInd = $directionInd;
        return $this;
    }
    /**
     * Get CheckInDate value
     * @return string|null
     */
    public function getCheckInDate()
    {
        return $this->CheckInDate;
    }
    /**
     * Set CheckInDate value
     * @param string $checkInDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgFlightSegmentType
     */
    public function setCheckInDate($checkInDate = null)
    {
        // validation for constraint: string
        if (!is_null($checkInDate) && !is_string($checkInDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkInDate)), __LINE__);
        }
        $this->CheckInDate = $checkInDate;
        return $this;
    }
    /**
     * Get CheckInDesk value
     * @return string|null
     */
    public function getCheckInDesk()
    {
        return $this->CheckInDesk;
    }
    /**
     * Set CheckInDesk value
     * @param string $checkInDesk
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgFlightSegmentType
     */
    public function setCheckInDesk($checkInDesk = null)
    {
        // validation for constraint: string
        if (!is_null($checkInDesk) && !is_string($checkInDesk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkInDesk)), __LINE__);
        }
        $this->CheckInDesk = $checkInDesk;
        return $this;
    }
    /**
     * Get TOD_Indicator value
     * @return bool|null
     */
    public function getTOD_Indicator()
    {
        return $this->TOD_Indicator;
    }
    /**
     * Set TOD_Indicator value
     * @param bool $tOD_Indicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgFlightSegmentType
     */
    public function setTOD_Indicator($tOD_Indicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($tOD_Indicator) && !is_bool($tOD_Indicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($tOD_Indicator)), __LINE__);
        }
        $this->TOD_Indicator = $tOD_Indicator;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgFlightSegmentType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgFlightSegmentType
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
