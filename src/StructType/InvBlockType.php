<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvBlockType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to define the details of an inventory block.
 * @subpackage Structs
 */
class InvBlockType extends AbstractStructBase
{
    /**
     * The HotelRef
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef
     */
    public $HotelRef;
    /**
     * The InvBlockDates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockDates
     */
    public $InvBlockDates;
    /**
     * The RoomTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypes
     */
    public $RoomTypes;
    /**
     * The MethodInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo
     */
    public $MethodInfo;
    /**
     * The BlockDescriptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\BlockDescriptions
     */
    public $BlockDescriptions;
    /**
     * The Contacts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Contacts
     */
    public $Contacts;
    /**
     * The DestinationSystemCodes
     * Meta informations extracted from the WSDL
     * - documentation: A collection of destination system codes. These are systems for which this inventory block is targeted.
     * - minOccurs: 0
     * @var mixed
     */
    public $DestinationSystemCodes;
    /**
     * Constructor method for InvBlockType
     * @uses InvBlockType::setHotelRef()
     * @uses InvBlockType::setInvBlockDates()
     * @uses InvBlockType::setRoomTypes()
     * @uses InvBlockType::setMethodInfo()
     * @uses InvBlockType::setBlockDescriptions()
     * @uses InvBlockType::setContacts()
     * @uses InvBlockType::setDestinationSystemCodes()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef $hotelRef
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockDates $invBlockDates
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypes $roomTypes
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo $methodInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BlockDescriptions $blockDescriptions
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Contacts $contacts
     * @param mixed $destinationSystemCodes
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\HotelRef $hotelRef = null, \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockDates $invBlockDates = null, \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypes $roomTypes = null, \Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo $methodInfo = null, \Devlabs91\GenericOtaHotelApiService\StructType\BlockDescriptions $blockDescriptions = null, \Devlabs91\GenericOtaHotelApiService\StructType\Contacts $contacts = null, $destinationSystemCodes = null)
    {
        $this
            ->setHotelRef($hotelRef)
            ->setInvBlockDates($invBlockDates)
            ->setRoomTypes($roomTypes)
            ->setMethodInfo($methodInfo)
            ->setBlockDescriptions($blockDescriptions)
            ->setContacts($contacts)
            ->setDestinationSystemCodes($destinationSystemCodes);
    }
    /**
     * Get HotelRef value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef|null
     */
    public function getHotelRef()
    {
        return $this->HotelRef;
    }
    /**
     * Set HotelRef value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelRef $hotelRef
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockType
     */
    public function setHotelRef(\Devlabs91\GenericOtaHotelApiService\StructType\HotelRef $hotelRef = null)
    {
        $this->HotelRef = $hotelRef;
        return $this;
    }
    /**
     * Get InvBlockDates value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockDates|null
     */
    public function getInvBlockDates()
    {
        return $this->InvBlockDates;
    }
    /**
     * Set InvBlockDates value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockDates $invBlockDates
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockType
     */
    public function setInvBlockDates(\Devlabs91\GenericOtaHotelApiService\StructType\InvBlockDates $invBlockDates = null)
    {
        $this->InvBlockDates = $invBlockDates;
        return $this;
    }
    /**
     * Get RoomTypes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypes|null
     */
    public function getRoomTypes()
    {
        return $this->RoomTypes;
    }
    /**
     * Set RoomTypes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypes $roomTypes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockType
     */
    public function setRoomTypes(\Devlabs91\GenericOtaHotelApiService\StructType\RoomTypes $roomTypes = null)
    {
        $this->RoomTypes = $roomTypes;
        return $this;
    }
    /**
     * Get MethodInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo|null
     */
    public function getMethodInfo()
    {
        return $this->MethodInfo;
    }
    /**
     * Set MethodInfo value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo $methodInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockType
     */
    public function setMethodInfo(\Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo $methodInfo = null)
    {
        $this->MethodInfo = $methodInfo;
        return $this;
    }
    /**
     * Get BlockDescriptions value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BlockDescriptions|null
     */
    public function getBlockDescriptions()
    {
        return $this->BlockDescriptions;
    }
    /**
     * Set BlockDescriptions value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BlockDescriptions $blockDescriptions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockType
     */
    public function setBlockDescriptions(\Devlabs91\GenericOtaHotelApiService\StructType\BlockDescriptions $blockDescriptions = null)
    {
        $this->BlockDescriptions = $blockDescriptions;
        return $this;
    }
    /**
     * Get Contacts value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Contacts|null
     */
    public function getContacts()
    {
        return $this->Contacts;
    }
    /**
     * Set Contacts value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Contacts $contacts
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockType
     */
    public function setContacts(\Devlabs91\GenericOtaHotelApiService\StructType\Contacts $contacts = null)
    {
        $this->Contacts = $contacts;
        return $this;
    }
    /**
     * Get DestinationSystemCodes value
     * @return mixed|null
     */
    public function getDestinationSystemCodes()
    {
        return $this->DestinationSystemCodes;
    }
    /**
     * Set DestinationSystemCodes value
     * @param mixed $destinationSystemCodes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockType
     */
    public function setDestinationSystemCodes($destinationSystemCodes = null)
    {
        $this->DestinationSystemCodes = $destinationSystemCodes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvBlockType
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
