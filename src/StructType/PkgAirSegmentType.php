<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PkgAirSegmentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides details of an air segment
 * @subpackage Structs
 */
class PkgAirSegmentType extends FlightSegmentBaseType
{
    /**
     * The SupplementCharges
     * Meta informations extracted from the WSDL
     * - documentation: A value representing a supplement for this journey (e.g. Aberdeen to Palma) over the cost of the journey on which package basic price is calculated (e.g. Gatwick to Palma). The element repeats to allow for charges in an alternative
     * currency to be shown.
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SupplementCharges;
    /**
     * The AvailableSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AvailableSeats
     */
    public $AvailableSeats;
    /**
     * The Passengers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Passengers
     */
    public $Passengers;
    /**
     * The CheckInDate
     * Meta informations extracted from the WSDL
     * - documentation: Provides the recommended date and time of passenger check-in.
     * - use: optional
     * @var string
     */
    public $CheckInDate;
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
     * Constructor method for PkgAirSegmentType
     * @uses PkgAirSegmentType::setSupplementCharges()
     * @uses PkgAirSegmentType::setAvailableSeats()
     * @uses PkgAirSegmentType::setPassengers()
     * @uses PkgAirSegmentType::setCheckInDate()
     * @uses PkgAirSegmentType::setType()
     * @uses PkgAirSegmentType::setDepartureDay()
     * @uses PkgAirSegmentType::setTravelCode()
     * @uses PkgAirSegmentType::setDuration()
     * @param mixed[] $supplementCharges
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailableSeats $availableSeats
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Passengers $passengers
     * @param string $checkInDate
     * @param string $type
     * @param string $departureDay
     * @param string $travelCode
     * @param string $duration
     */
    public function __construct(array $supplementCharges = array(), \Devlabs91\GenericOtaHotelApiService\StructType\AvailableSeats $availableSeats = null, \Devlabs91\GenericOtaHotelApiService\StructType\Passengers $passengers = null, $checkInDate = null, $type = null, $departureDay = null, $travelCode = null, $duration = null)
    {
        $this
            ->setSupplementCharges($supplementCharges)
            ->setAvailableSeats($availableSeats)
            ->setPassengers($passengers)
            ->setCheckInDate($checkInDate)
            ->setType($type)
            ->setDepartureDay($departureDay)
            ->setTravelCode($travelCode)
            ->setDuration($duration);
    }
    /**
     * Get SupplementCharges value
     * @return mixed[]|null
     */
    public function getSupplementCharges()
    {
        return $this->SupplementCharges;
    }
    /**
     * Set SupplementCharges value
     * @throws \InvalidArgumentException
     * @param mixed[] $supplementCharges
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgAirSegmentType
     */
    public function setSupplementCharges(array $supplementCharges = array())
    {
        foreach ($supplementCharges as $pkgAirSegmentTypeSupplementChargesItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SupplementCharges property can only contain items of anyType, "%s" given', is_object($pkgAirSegmentTypeSupplementChargesItem) ? get_class($pkgAirSegmentTypeSupplementChargesItem) : gettype($pkgAirSegmentTypeSupplementChargesItem)), __LINE__);
            }
        }
        $this->SupplementCharges = $supplementCharges;
        return $this;
    }
    /**
     * Add item to SupplementCharges value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgAirSegmentType
     */
    public function addToSupplementCharges($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SupplementCharges property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SupplementCharges[] = $item;
        return $this;
    }
    /**
     * Get AvailableSeats value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableSeats|null
     */
    public function getAvailableSeats()
    {
        return $this->AvailableSeats;
    }
    /**
     * Set AvailableSeats value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailableSeats $availableSeats
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgAirSegmentType
     */
    public function setAvailableSeats(\Devlabs91\GenericOtaHotelApiService\StructType\AvailableSeats $availableSeats = null)
    {
        $this->AvailableSeats = $availableSeats;
        return $this;
    }
    /**
     * Get Passengers value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Passengers|null
     */
    public function getPassengers()
    {
        return $this->Passengers;
    }
    /**
     * Set Passengers value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Passengers $passengers
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgAirSegmentType
     */
    public function setPassengers(\Devlabs91\GenericOtaHotelApiService\StructType\Passengers $passengers = null)
    {
        $this->Passengers = $passengers;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgAirSegmentType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgAirSegmentType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgAirSegmentType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgAirSegmentType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgAirSegmentType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgAirSegmentType
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
