<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelRoomListType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides the details of a rooming list.
 * @subpackage Structs
 */
class HotelRoomListType extends AbstractStructBase
{
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: The unique indicator for the group rooming list or tour operator booking reference.
     * - minOccurs: 0
     * @var mixed
     */
    public $UniqueID;
    /**
     * The Guests
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Guests
     */
    public $Guests;
    /**
     * The MasterContact
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MasterContact
     */
    public $MasterContact;
    /**
     * The MasterAccount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MasterAccount
     */
    public $MasterAccount;
    /**
     * The RoomStays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RoomStays
     */
    public $RoomStays;
    /**
     * The Event
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Event
     */
    public $Event;
    /**
     * The GroupBlockCode
     * Meta informations extracted from the WSDL
     * - documentation: The code that identifies which group within a specific hotel for which this room list has been provided.
     * - use: optional
     * @var string
     */
    public $GroupBlockCode;
    /**
     * The CreationDate
     * Meta informations extracted from the WSDL
     * - documentation: Date this room list was initially created.
     * - use: optional
     * @var string
     */
    public $CreationDate;
    /**
     * Constructor method for HotelRoomListType
     * @uses HotelRoomListType::setUniqueID()
     * @uses HotelRoomListType::setGuests()
     * @uses HotelRoomListType::setMasterContact()
     * @uses HotelRoomListType::setMasterAccount()
     * @uses HotelRoomListType::setRoomStays()
     * @uses HotelRoomListType::setEvent()
     * @uses HotelRoomListType::setGroupBlockCode()
     * @uses HotelRoomListType::setCreationDate()
     * @param mixed $uniqueID
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Guests $guests
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MasterContact $masterContact
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MasterAccount $masterAccount
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomStays $roomStays
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Event $event
     * @param string $groupBlockCode
     * @param string $creationDate
     */
    public function __construct($uniqueID = null, \Devlabs91\GenericOtaHotelApiService\StructType\Guests $guests = null, \Devlabs91\GenericOtaHotelApiService\StructType\MasterContact $masterContact = null, \Devlabs91\GenericOtaHotelApiService\StructType\MasterAccount $masterAccount = null, \Devlabs91\GenericOtaHotelApiService\StructType\RoomStays $roomStays = null, \Devlabs91\GenericOtaHotelApiService\StructType\Event $event = null, $groupBlockCode = null, $creationDate = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setGuests($guests)
            ->setMasterContact($masterContact)
            ->setMasterAccount($masterAccount)
            ->setRoomStays($roomStays)
            ->setEvent($event)
            ->setGroupBlockCode($groupBlockCode)
            ->setCreationDate($creationDate);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRoomListType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get Guests value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Guests|null
     */
    public function getGuests()
    {
        return $this->Guests;
    }
    /**
     * Set Guests value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Guests $guests
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRoomListType
     */
    public function setGuests(\Devlabs91\GenericOtaHotelApiService\StructType\Guests $guests = null)
    {
        $this->Guests = $guests;
        return $this;
    }
    /**
     * Get MasterContact value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MasterContact|null
     */
    public function getMasterContact()
    {
        return $this->MasterContact;
    }
    /**
     * Set MasterContact value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MasterContact $masterContact
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRoomListType
     */
    public function setMasterContact(\Devlabs91\GenericOtaHotelApiService\StructType\MasterContact $masterContact = null)
    {
        $this->MasterContact = $masterContact;
        return $this;
    }
    /**
     * Get MasterAccount value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MasterAccount|null
     */
    public function getMasterAccount()
    {
        return $this->MasterAccount;
    }
    /**
     * Set MasterAccount value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MasterAccount $masterAccount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRoomListType
     */
    public function setMasterAccount(\Devlabs91\GenericOtaHotelApiService\StructType\MasterAccount $masterAccount = null)
    {
        $this->MasterAccount = $masterAccount;
        return $this;
    }
    /**
     * Get RoomStays value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStays|null
     */
    public function getRoomStays()
    {
        return $this->RoomStays;
    }
    /**
     * Set RoomStays value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomStays $roomStays
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRoomListType
     */
    public function setRoomStays(\Devlabs91\GenericOtaHotelApiService\StructType\RoomStays $roomStays = null)
    {
        $this->RoomStays = $roomStays;
        return $this;
    }
    /**
     * Get Event value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Event|null
     */
    public function getEvent()
    {
        return $this->Event;
    }
    /**
     * Set Event value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Event $event
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRoomListType
     */
    public function setEvent(\Devlabs91\GenericOtaHotelApiService\StructType\Event $event = null)
    {
        $this->Event = $event;
        return $this;
    }
    /**
     * Get GroupBlockCode value
     * @return string|null
     */
    public function getGroupBlockCode()
    {
        return $this->GroupBlockCode;
    }
    /**
     * Set GroupBlockCode value
     * @param string $groupBlockCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRoomListType
     */
    public function setGroupBlockCode($groupBlockCode = null)
    {
        // validation for constraint: string
        if (!is_null($groupBlockCode) && !is_string($groupBlockCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupBlockCode)), __LINE__);
        }
        $this->GroupBlockCode = $groupBlockCode;
        return $this;
    }
    /**
     * Get CreationDate value
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRoomListType
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRoomListType
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
