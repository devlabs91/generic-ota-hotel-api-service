<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReservationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Reservation class contains the current reservation being created or altered.
 * @subpackage Structs
 */
class HotelReservationType extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - documentation: Identifies who made the original reservation.
     * - minOccurs: 0
     * @var mixed
     */
    public $POS;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: Used to provide PMS and/or CRS identifiers.
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $UniqueID;
    /**
     * The RoomStays
     * Meta informations extracted from the WSDL
     * - documentation: Collection of room stays.
     * - minOccurs: 0
     * @var mixed
     */
    public $RoomStays;
    /**
     * The Services
     * Meta informations extracted from the WSDL
     * - documentation: Collection of services.
     * - minOccurs: 0
     * @var mixed
     */
    public $Services;
    /**
     * The ResGuests
     * Meta informations extracted from the WSDL
     * - documentation: Collection of guests associated with the reservation.
     * - minOccurs: 0
     * @var mixed
     */
    public $ResGuests;
    /**
     * The ResGlobalInfo
     * Meta informations extracted from the WSDL
     * - documentation: ResGlobalInfo is a container for various information that affects the Reservation as a whole. These include global comments, counts, reservation IDs, loyalty programs, and payment methods.
     * - minOccurs: 0
     * @var mixed
     */
    public $ResGlobalInfo;
    /**
     * The WrittenConfInst
     * Meta informations extracted from the WSDL
     * - documentation: To indicate a confirmation is to be sent for this reservation.
     * - minOccurs: 0
     * @var mixed
     */
    public $WrittenConfInst;
    /**
     * The Queue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Queue
     */
    public $Queue;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The RoomStayReservation
     * Meta informations extracted from the WSDL
     * - documentation: Boolean True if this reservation is reserving rooms. False if it is only reserving services.
     * - use: optional
     * @var bool
     */
    public $RoomStayReservation;
    /**
     * The ResStatus
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the status of the reservation.
     * - use: optional
     * @var string
     */
    public $ResStatus;
    /**
     * The ForcedSellIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates a sell was forced even if there are restrictions or no availability.
     * - use: optional
     * @var bool
     */
    public $ForcedSellIndicator;
    /**
     * The ServiceOverrideIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates a service has been overridden.
     * - use: optional
     * @var bool
     */
    public $ServiceOverrideIndicator;
    /**
     * The RateOverrideIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates a rate has been overridden.
     * - use: optional
     * @var bool
     */
    public $RateOverrideIndicator;
    /**
     * The WalkInIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates the reservation is for a guest that walks-in without a reservation. When false, the reservation is not a walk-in.
     * - use: optional
     * @var bool
     */
    public $WalkInIndicator;
    /**
     * The RoomNumberLockedIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates a room number cannot be changed. When false, indicates a room number may be changed.
     * - use: optional
     * @var bool
     */
    public $RoomNumberLockedIndicator;
    /**
     * The OriginalDeliveryMethodCode
     * Meta informations extracted from the WSDL
     * - documentation: The method by which the original reservation was delivered. Refer to OpenTravel Code list Distribution Type (DTB).
     * - use: optional
     * @var string
     */
    public $OriginalDeliveryMethodCode;
    /**
     * The PassiveIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates that this item is included for information only and no action should be taken.
     * - use: optional
     * @var bool
     */
    public $PassiveIndicator;
    /**
     * Constructor method for HotelReservationType
     * @uses HotelReservationType::setPOS()
     * @uses HotelReservationType::setUniqueID()
     * @uses HotelReservationType::setRoomStays()
     * @uses HotelReservationType::setServices()
     * @uses HotelReservationType::setResGuests()
     * @uses HotelReservationType::setResGlobalInfo()
     * @uses HotelReservationType::setWrittenConfInst()
     * @uses HotelReservationType::setQueue()
     * @uses HotelReservationType::setTPA_Extensions()
     * @uses HotelReservationType::setRoomStayReservation()
     * @uses HotelReservationType::setResStatus()
     * @uses HotelReservationType::setForcedSellIndicator()
     * @uses HotelReservationType::setServiceOverrideIndicator()
     * @uses HotelReservationType::setRateOverrideIndicator()
     * @uses HotelReservationType::setWalkInIndicator()
     * @uses HotelReservationType::setRoomNumberLockedIndicator()
     * @uses HotelReservationType::setOriginalDeliveryMethodCode()
     * @uses HotelReservationType::setPassiveIndicator()
     * @param mixed $pOS
     * @param mixed[] $uniqueID
     * @param mixed $roomStays
     * @param mixed $services
     * @param mixed $resGuests
     * @param mixed $resGlobalInfo
     * @param mixed $writtenConfInst
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Queue $queue
     * @param mixed $tPA_Extensions
     * @param bool $roomStayReservation
     * @param string $resStatus
     * @param bool $forcedSellIndicator
     * @param bool $serviceOverrideIndicator
     * @param bool $rateOverrideIndicator
     * @param bool $walkInIndicator
     * @param bool $roomNumberLockedIndicator
     * @param string $originalDeliveryMethodCode
     * @param bool $passiveIndicator
     */
    public function __construct($pOS = null, array $uniqueID = array(), $roomStays = null, $services = null, $resGuests = null, $resGlobalInfo = null, $writtenConfInst = null, \Devlabs91\GenericOtaHotelApiService\StructType\Queue $queue = null, $tPA_Extensions = null, $roomStayReservation = null, $resStatus = null, $forcedSellIndicator = null, $serviceOverrideIndicator = null, $rateOverrideIndicator = null, $walkInIndicator = null, $roomNumberLockedIndicator = null, $originalDeliveryMethodCode = null, $passiveIndicator = null)
    {
        $this
            ->setPOS($pOS)
            ->setUniqueID($uniqueID)
            ->setRoomStays($roomStays)
            ->setServices($services)
            ->setResGuests($resGuests)
            ->setResGlobalInfo($resGlobalInfo)
            ->setWrittenConfInst($writtenConfInst)
            ->setQueue($queue)
            ->setTPA_Extensions($tPA_Extensions)
            ->setRoomStayReservation($roomStayReservation)
            ->setResStatus($resStatus)
            ->setForcedSellIndicator($forcedSellIndicator)
            ->setServiceOverrideIndicator($serviceOverrideIndicator)
            ->setRateOverrideIndicator($rateOverrideIndicator)
            ->setWalkInIndicator($walkInIndicator)
            ->setRoomNumberLockedIndicator($roomNumberLockedIndicator)
            ->setOriginalDeliveryMethodCode($originalDeliveryMethodCode)
            ->setPassiveIndicator($passiveIndicator);
    }
    /**
     * Get POS value
     * @return mixed|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param mixed $pOS
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setPOS($pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return mixed[]|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @throws \InvalidArgumentException
     * @param mixed[] $uniqueID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setUniqueID(array $uniqueID = array())
    {
        foreach ($uniqueID as $hotelReservationTypeUniqueIDItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The UniqueID property can only contain items of anyType, "%s" given', is_object($hotelReservationTypeUniqueIDItem) ? get_class($hotelReservationTypeUniqueIDItem) : gettype($hotelReservationTypeUniqueIDItem)), __LINE__);
            }
        }
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Add item to UniqueID value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function addToUniqueID($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The UniqueID property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UniqueID[] = $item;
        return $this;
    }
    /**
     * Get RoomStays value
     * @return mixed|null
     */
    public function getRoomStays()
    {
        return $this->RoomStays;
    }
    /**
     * Set RoomStays value
     * @param mixed $roomStays
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setRoomStays($roomStays = null)
    {
        $this->RoomStays = $roomStays;
        return $this;
    }
    /**
     * Get Services value
     * @return mixed|null
     */
    public function getServices()
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param mixed $services
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setServices($services = null)
    {
        $this->Services = $services;
        return $this;
    }
    /**
     * Get ResGuests value
     * @return mixed|null
     */
    public function getResGuests()
    {
        return $this->ResGuests;
    }
    /**
     * Set ResGuests value
     * @param mixed $resGuests
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setResGuests($resGuests = null)
    {
        $this->ResGuests = $resGuests;
        return $this;
    }
    /**
     * Get ResGlobalInfo value
     * @return mixed|null
     */
    public function getResGlobalInfo()
    {
        return $this->ResGlobalInfo;
    }
    /**
     * Set ResGlobalInfo value
     * @param mixed $resGlobalInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setResGlobalInfo($resGlobalInfo = null)
    {
        $this->ResGlobalInfo = $resGlobalInfo;
        return $this;
    }
    /**
     * Get WrittenConfInst value
     * @return mixed|null
     */
    public function getWrittenConfInst()
    {
        return $this->WrittenConfInst;
    }
    /**
     * Set WrittenConfInst value
     * @param mixed $writtenConfInst
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setWrittenConfInst($writtenConfInst = null)
    {
        $this->WrittenConfInst = $writtenConfInst;
        return $this;
    }
    /**
     * Get Queue value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Queue|null
     */
    public function getQueue()
    {
        return $this->Queue;
    }
    /**
     * Set Queue value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Queue $queue
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setQueue(\Devlabs91\GenericOtaHotelApiService\StructType\Queue $queue = null)
    {
        $this->Queue = $queue;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get RoomStayReservation value
     * @return bool|null
     */
    public function getRoomStayReservation()
    {
        return $this->RoomStayReservation;
    }
    /**
     * Set RoomStayReservation value
     * @param bool $roomStayReservation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setRoomStayReservation($roomStayReservation = null)
    {
        // validation for constraint: boolean
        if (!is_null($roomStayReservation) && !is_bool($roomStayReservation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($roomStayReservation)), __LINE__);
        }
        $this->RoomStayReservation = $roomStayReservation;
        return $this;
    }
    /**
     * Get ResStatus value
     * @return string|null
     */
    public function getResStatus()
    {
        return $this->ResStatus;
    }
    /**
     * Set ResStatus value
     * @param string $resStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setResStatus($resStatus = null)
    {
        // validation for constraint: string
        if (!is_null($resStatus) && !is_string($resStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resStatus)), __LINE__);
        }
        $this->ResStatus = $resStatus;
        return $this;
    }
    /**
     * Get ForcedSellIndicator value
     * @return bool|null
     */
    public function getForcedSellIndicator()
    {
        return $this->ForcedSellIndicator;
    }
    /**
     * Set ForcedSellIndicator value
     * @param bool $forcedSellIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setForcedSellIndicator($forcedSellIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($forcedSellIndicator) && !is_bool($forcedSellIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($forcedSellIndicator)), __LINE__);
        }
        $this->ForcedSellIndicator = $forcedSellIndicator;
        return $this;
    }
    /**
     * Get ServiceOverrideIndicator value
     * @return bool|null
     */
    public function getServiceOverrideIndicator()
    {
        return $this->ServiceOverrideIndicator;
    }
    /**
     * Set ServiceOverrideIndicator value
     * @param bool $serviceOverrideIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setServiceOverrideIndicator($serviceOverrideIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($serviceOverrideIndicator) && !is_bool($serviceOverrideIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($serviceOverrideIndicator)), __LINE__);
        }
        $this->ServiceOverrideIndicator = $serviceOverrideIndicator;
        return $this;
    }
    /**
     * Get RateOverrideIndicator value
     * @return bool|null
     */
    public function getRateOverrideIndicator()
    {
        return $this->RateOverrideIndicator;
    }
    /**
     * Set RateOverrideIndicator value
     * @param bool $rateOverrideIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setRateOverrideIndicator($rateOverrideIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($rateOverrideIndicator) && !is_bool($rateOverrideIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rateOverrideIndicator)), __LINE__);
        }
        $this->RateOverrideIndicator = $rateOverrideIndicator;
        return $this;
    }
    /**
     * Get WalkInIndicator value
     * @return bool|null
     */
    public function getWalkInIndicator()
    {
        return $this->WalkInIndicator;
    }
    /**
     * Set WalkInIndicator value
     * @param bool $walkInIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setWalkInIndicator($walkInIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($walkInIndicator) && !is_bool($walkInIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($walkInIndicator)), __LINE__);
        }
        $this->WalkInIndicator = $walkInIndicator;
        return $this;
    }
    /**
     * Get RoomNumberLockedIndicator value
     * @return bool|null
     */
    public function getRoomNumberLockedIndicator()
    {
        return $this->RoomNumberLockedIndicator;
    }
    /**
     * Set RoomNumberLockedIndicator value
     * @param bool $roomNumberLockedIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setRoomNumberLockedIndicator($roomNumberLockedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($roomNumberLockedIndicator) && !is_bool($roomNumberLockedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($roomNumberLockedIndicator)), __LINE__);
        }
        $this->RoomNumberLockedIndicator = $roomNumberLockedIndicator;
        return $this;
    }
    /**
     * Get OriginalDeliveryMethodCode value
     * @return string|null
     */
    public function getOriginalDeliveryMethodCode()
    {
        return $this->OriginalDeliveryMethodCode;
    }
    /**
     * Set OriginalDeliveryMethodCode value
     * @param string $originalDeliveryMethodCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setOriginalDeliveryMethodCode($originalDeliveryMethodCode = null)
    {
        // validation for constraint: string
        if (!is_null($originalDeliveryMethodCode) && !is_string($originalDeliveryMethodCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originalDeliveryMethodCode)), __LINE__);
        }
        $this->OriginalDeliveryMethodCode = $originalDeliveryMethodCode;
        return $this;
    }
    /**
     * Get PassiveIndicator value
     * @return bool|null
     */
    public function getPassiveIndicator()
    {
        return $this->PassiveIndicator;
    }
    /**
     * Set PassiveIndicator value
     * @param bool $passiveIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setPassiveIndicator($passiveIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($passiveIndicator) && !is_bool($passiveIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($passiveIndicator)), __LINE__);
        }
        $this->PassiveIndicator = $passiveIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
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
