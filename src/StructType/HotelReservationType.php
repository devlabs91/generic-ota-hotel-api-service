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
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $UniqueID;
    /**
     * The RoomStays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $RoomStays;
    /**
     * The Services
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Services;
    /**
     * The ResGuests
     * Meta informations extracted from the WSDL
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
     * Constructor method for HotelReservationType
     * @uses HotelReservationType::setUniqueID()
     * @uses HotelReservationType::setRoomStays()
     * @uses HotelReservationType::setServices()
     * @uses HotelReservationType::setResGuests()
     * @uses HotelReservationType::setResGlobalInfo()
     * @uses HotelReservationType::setWrittenConfInst()
     * @uses HotelReservationType::setTPA_Extensions()
     * @uses HotelReservationType::setRoomStayReservation()
     * @param mixed $uniqueID
     * @param mixed $roomStays
     * @param mixed $services
     * @param mixed $resGuests
     * @param mixed $resGlobalInfo
     * @param mixed $writtenConfInst
     * @param mixed $tPA_Extensions
     * @param bool $roomStayReservation
     */
    public function __construct($uniqueID = null, $roomStays = null, $services = null, $resGuests = null, $resGlobalInfo = null, $writtenConfInst = null, $tPA_Extensions = null, $roomStayReservation = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setRoomStays($roomStays)
            ->setServices($services)
            ->setResGuests($resGuests)
            ->setResGlobalInfo($resGlobalInfo)
            ->setWrittenConfInst($writtenConfInst)
            ->setTPA_Extensions($tPA_Extensions)
            ->setRoomStayReservation($roomStayReservation);
    }
    /**
     * Get UniqueID value
     * @return mixed|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param mixed $uniqueID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
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
