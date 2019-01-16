<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResGuestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of ResGuest objects, identifying the guests associated with this reservation. Which guests are in which room is determined by each RoomStays ResGuestRPHs collection. | The city of origin for this traveler's trip.
 * @subpackage Structs
 */
class ResGuestType extends AbstractStructBase
{
    /**
     * The Profiles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Profiles;
    /**
     * The SpecialRequests
     * Meta informations extracted from the WSDL
     * - documentation: The SpecialRequest object indicates special requests for a particular guest.
     * - minOccurs: 0
     * @var mixed
     */
    public $SpecialRequests;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Comment objects. Comments which apply to one or more guests.
     * - minOccurs: 0
     * @var mixed
     */
    public $Comments;
    /**
     * The ServiceRPHs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $ServiceRPHs;
    /**
     * The ProfileRPHs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ProfileRPHs
     */
    public $ProfileRPHs;
    /**
     * The ArrivalTransport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $ArrivalTransport;
    /**
     * The DepartureTransport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $DepartureTransport;
    /**
     * The GuestCounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $GuestCounts;
    /**
     * The InHouseTimeSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $InHouseTimeSpan;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The ResGuestRPH
     * Meta informations extracted from the WSDL
     * - documentation: This is a reference placeholder, used as an index for this guest in this reservation. In the ResGuest object it is used like all other RPH attributes to send the delta of a reservation. It is used by the RoomStay and Service objects
     * to indicate which guests are associated with that room stay or service.
     * - use: optional
     * @var string
     */
    public $ResGuestRPH;
    /**
     * The AgeQualifyingCode
     * Meta informations extracted from the WSDL
     * - documentation: A code representing a business rule that determines the charges for a guest based upon age rannge (e.g. Adult, Child, Senior, Child With Adult, Child Without Adult). This attribute allows for an increase in rate by occupant class.
     * Refer to OpenTravel Code List Age Qualifying Code (AQC).
     * - use: optional
     * @var string
     */
    public $AgeQualifyingCode;
    /**
     * The ArrivalTime
     * Meta informations extracted from the WSDL
     * - documentation: This represents the date and time of the guest's arrival at the hotel. For example, this could be used to indicate a late arrival.
     * - use: optional
     * @var string
     */
    public $ArrivalTime;
    /**
     * The DepartureTime
     * Meta informations extracted from the WSDL
     * - documentation: This represents the date and time of the guest's departure from the hotel.
     * - use: optional
     * @var string
     */
    public $DepartureTime;
    /**
     * The GroupEventCode
     * Meta informations extracted from the WSDL
     * - documentation: The identification of a group meeting or convention. Used to track a guest who is part of an inventory block (e.g.: group), and can be used for a pick-up when the guest calls in to reserve a room as part of the block. Whether this is
     * taken from inventory depends upon the InventoryBlockCode in the Room Stay class. This code is associated with a group or event as agreed between two parties.
     * - use: optional
     * @var string
     */
    public $GroupEventCode;
    /**
     * The VIP
     * Meta informations extracted from the WSDL
     * - documentation: Guest is VIP indicator.
     * - use: optional
     * @var bool
     */
    public $VIP;
    /**
     * The PrimaryIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true indicates this is the primary guest.
     * - use: optional
     * @var bool
     */
    public $PrimaryIndicator;
    /**
     * The Age
     * Meta informations extracted from the WSDL
     * - documentation: The age of the guest.
     * - use: optional
     * @var string
     */
    public $Age;
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - documentation: The action being taken on the guest entry.
     * - use: optional
     * @var string
     */
    public $Action;
    /**
     * Constructor method for ResGuestType
     * @uses ResGuestType::setProfiles()
     * @uses ResGuestType::setSpecialRequests()
     * @uses ResGuestType::setComments()
     * @uses ResGuestType::setServiceRPHs()
     * @uses ResGuestType::setProfileRPHs()
     * @uses ResGuestType::setArrivalTransport()
     * @uses ResGuestType::setDepartureTransport()
     * @uses ResGuestType::setGuestCounts()
     * @uses ResGuestType::setInHouseTimeSpan()
     * @uses ResGuestType::setTPA_Extensions()
     * @uses ResGuestType::setResGuestRPH()
     * @uses ResGuestType::setAgeQualifyingCode()
     * @uses ResGuestType::setArrivalTime()
     * @uses ResGuestType::setDepartureTime()
     * @uses ResGuestType::setGroupEventCode()
     * @uses ResGuestType::setVIP()
     * @uses ResGuestType::setPrimaryIndicator()
     * @uses ResGuestType::setAge()
     * @uses ResGuestType::setAction()
     * @param mixed $profiles
     * @param mixed $specialRequests
     * @param mixed $comments
     * @param mixed $serviceRPHs
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProfileRPHs $profileRPHs
     * @param mixed $arrivalTransport
     * @param mixed $departureTransport
     * @param mixed $guestCounts
     * @param mixed $inHouseTimeSpan
     * @param mixed $tPA_Extensions
     * @param string $resGuestRPH
     * @param string $ageQualifyingCode
     * @param string $arrivalTime
     * @param string $departureTime
     * @param string $groupEventCode
     * @param bool $vIP
     * @param bool $primaryIndicator
     * @param string $age
     * @param string $action
     */
    public function __construct($profiles = null, $specialRequests = null, $comments = null, $serviceRPHs = null, \Devlabs91\GenericOtaHotelApiService\StructType\ProfileRPHs $profileRPHs = null, $arrivalTransport = null, $departureTransport = null, $guestCounts = null, $inHouseTimeSpan = null, $tPA_Extensions = null, $resGuestRPH = null, $ageQualifyingCode = null, $arrivalTime = null, $departureTime = null, $groupEventCode = null, $vIP = null, $primaryIndicator = null, $age = null, $action = null)
    {
        $this
            ->setProfiles($profiles)
            ->setSpecialRequests($specialRequests)
            ->setComments($comments)
            ->setServiceRPHs($serviceRPHs)
            ->setProfileRPHs($profileRPHs)
            ->setArrivalTransport($arrivalTransport)
            ->setDepartureTransport($departureTransport)
            ->setGuestCounts($guestCounts)
            ->setInHouseTimeSpan($inHouseTimeSpan)
            ->setTPA_Extensions($tPA_Extensions)
            ->setResGuestRPH($resGuestRPH)
            ->setAgeQualifyingCode($ageQualifyingCode)
            ->setArrivalTime($arrivalTime)
            ->setDepartureTime($departureTime)
            ->setGroupEventCode($groupEventCode)
            ->setVIP($vIP)
            ->setPrimaryIndicator($primaryIndicator)
            ->setAge($age)
            ->setAction($action);
    }
    /**
     * Get Profiles value
     * @return mixed|null
     */
    public function getProfiles()
    {
        return $this->Profiles;
    }
    /**
     * Set Profiles value
     * @param mixed $profiles
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setProfiles($profiles = null)
    {
        $this->Profiles = $profiles;
        return $this;
    }
    /**
     * Get SpecialRequests value
     * @return mixed|null
     */
    public function getSpecialRequests()
    {
        return $this->SpecialRequests;
    }
    /**
     * Set SpecialRequests value
     * @param mixed $specialRequests
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setSpecialRequests($specialRequests = null)
    {
        $this->SpecialRequests = $specialRequests;
        return $this;
    }
    /**
     * Get Comments value
     * @return mixed|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param mixed $comments
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setComments($comments = null)
    {
        $this->Comments = $comments;
        return $this;
    }
    /**
     * Get ServiceRPHs value
     * @return mixed|null
     */
    public function getServiceRPHs()
    {
        return $this->ServiceRPHs;
    }
    /**
     * Set ServiceRPHs value
     * @param mixed $serviceRPHs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setServiceRPHs($serviceRPHs = null)
    {
        $this->ServiceRPHs = $serviceRPHs;
        return $this;
    }
    /**
     * Get ProfileRPHs value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileRPHs|null
     */
    public function getProfileRPHs()
    {
        return $this->ProfileRPHs;
    }
    /**
     * Set ProfileRPHs value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProfileRPHs $profileRPHs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setProfileRPHs(\Devlabs91\GenericOtaHotelApiService\StructType\ProfileRPHs $profileRPHs = null)
    {
        $this->ProfileRPHs = $profileRPHs;
        return $this;
    }
    /**
     * Get ArrivalTransport value
     * @return mixed|null
     */
    public function getArrivalTransport()
    {
        return $this->ArrivalTransport;
    }
    /**
     * Set ArrivalTransport value
     * @param mixed $arrivalTransport
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setArrivalTransport($arrivalTransport = null)
    {
        $this->ArrivalTransport = $arrivalTransport;
        return $this;
    }
    /**
     * Get DepartureTransport value
     * @return mixed|null
     */
    public function getDepartureTransport()
    {
        return $this->DepartureTransport;
    }
    /**
     * Set DepartureTransport value
     * @param mixed $departureTransport
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setDepartureTransport($departureTransport = null)
    {
        $this->DepartureTransport = $departureTransport;
        return $this;
    }
    /**
     * Get GuestCounts value
     * @return mixed|null
     */
    public function getGuestCounts()
    {
        return $this->GuestCounts;
    }
    /**
     * Set GuestCounts value
     * @param mixed $guestCounts
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setGuestCounts($guestCounts = null)
    {
        $this->GuestCounts = $guestCounts;
        return $this;
    }
    /**
     * Get InHouseTimeSpan value
     * @return mixed|null
     */
    public function getInHouseTimeSpan()
    {
        return $this->InHouseTimeSpan;
    }
    /**
     * Set InHouseTimeSpan value
     * @param mixed $inHouseTimeSpan
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setInHouseTimeSpan($inHouseTimeSpan = null)
    {
        $this->InHouseTimeSpan = $inHouseTimeSpan;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get ResGuestRPH value
     * @return string|null
     */
    public function getResGuestRPH()
    {
        return $this->ResGuestRPH;
    }
    /**
     * Set ResGuestRPH value
     * @param string $resGuestRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setResGuestRPH($resGuestRPH = null)
    {
        // validation for constraint: string
        if (!is_null($resGuestRPH) && !is_string($resGuestRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resGuestRPH)), __LINE__);
        }
        $this->ResGuestRPH = $resGuestRPH;
        return $this;
    }
    /**
     * Get AgeQualifyingCode value
     * @return string|null
     */
    public function getAgeQualifyingCode()
    {
        return $this->AgeQualifyingCode;
    }
    /**
     * Set AgeQualifyingCode value
     * @param string $ageQualifyingCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setAgeQualifyingCode($ageQualifyingCode = null)
    {
        // validation for constraint: string
        if (!is_null($ageQualifyingCode) && !is_string($ageQualifyingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ageQualifyingCode)), __LINE__);
        }
        $this->AgeQualifyingCode = $ageQualifyingCode;
        return $this;
    }
    /**
     * Get ArrivalTime value
     * @return string|null
     */
    public function getArrivalTime()
    {
        return $this->ArrivalTime;
    }
    /**
     * Set ArrivalTime value
     * @param string $arrivalTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setArrivalTime($arrivalTime = null)
    {
        // validation for constraint: string
        if (!is_null($arrivalTime) && !is_string($arrivalTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($arrivalTime)), __LINE__);
        }
        $this->ArrivalTime = $arrivalTime;
        return $this;
    }
    /**
     * Get DepartureTime value
     * @return string|null
     */
    public function getDepartureTime()
    {
        return $this->DepartureTime;
    }
    /**
     * Set DepartureTime value
     * @param string $departureTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setDepartureTime($departureTime = null)
    {
        // validation for constraint: string
        if (!is_null($departureTime) && !is_string($departureTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureTime)), __LINE__);
        }
        $this->DepartureTime = $departureTime;
        return $this;
    }
    /**
     * Get GroupEventCode value
     * @return string|null
     */
    public function getGroupEventCode()
    {
        return $this->GroupEventCode;
    }
    /**
     * Set GroupEventCode value
     * @param string $groupEventCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setGroupEventCode($groupEventCode = null)
    {
        // validation for constraint: string
        if (!is_null($groupEventCode) && !is_string($groupEventCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupEventCode)), __LINE__);
        }
        $this->GroupEventCode = $groupEventCode;
        return $this;
    }
    /**
     * Get VIP value
     * @return bool|null
     */
    public function getVIP()
    {
        return $this->VIP;
    }
    /**
     * Set VIP value
     * @param bool $vIP
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setVIP($vIP = null)
    {
        // validation for constraint: boolean
        if (!is_null($vIP) && !is_bool($vIP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($vIP)), __LINE__);
        }
        $this->VIP = $vIP;
        return $this;
    }
    /**
     * Get PrimaryIndicator value
     * @return bool|null
     */
    public function getPrimaryIndicator()
    {
        return $this->PrimaryIndicator;
    }
    /**
     * Set PrimaryIndicator value
     * @param bool $primaryIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setPrimaryIndicator($primaryIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($primaryIndicator) && !is_bool($primaryIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($primaryIndicator)), __LINE__);
        }
        $this->PrimaryIndicator = $primaryIndicator;
        return $this;
    }
    /**
     * Get Age value
     * @return string|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param string $age
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setAge($age = null)
    {
        // validation for constraint: string
        if (!is_null($age) && !is_string($age)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($age)), __LINE__);
        }
        $this->Age = $age;
        return $this;
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param string $action
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
     */
    public function setAction($action = null)
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($action)), __LINE__);
        }
        $this->Action = $action;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestType
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
