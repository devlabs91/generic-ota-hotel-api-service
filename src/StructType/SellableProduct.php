<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellableProduct StructType
 * Meta informations extracted from the WSDL
 * - documentation: The individual sellable product. A sellable product is one of GuestRoom, MeetingRoom or InventoryBlock. Attributes of SellableProduct are the inventory codes, information on the use, application and sequencing of the inventory
 * information.
 * @subpackage Structs
 */
class SellableProduct extends AbstractStructBase
{
    /**
     * The DestinationSystemCodes
     * Meta informations extracted from the WSDL
     * - documentation: A collection of destination system codes. These are systems for which this Sellable product is targeted.
     * - minOccurs: 0
     * @var mixed
     */
    public $DestinationSystemCodes;
    /**
     * The GuestRoom
     * Meta informations extracted from the WSDL
     * - documentation: Guest room information if this sellable product is a guest room.
     * @var mixed
     */
    public $GuestRoom;
    /**
     * The MeetingRoom
     * Meta informations extracted from the WSDL
     * - documentation: Meeting room information if this sellable product is a meeting room.
     * @var mixed
     */
    public $MeetingRoom;
    /**
     * The InventoryBlock
     * Meta informations extracted from the WSDL
     * - documentation: Inventory block information if this sellable product is an inventory block.
     * @var mixed
     */
    public $InventoryBlock;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Description of the sellable product.
     * - minOccurs: 0
     * @var mixed
     */
    public $Description;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: The SellableProduct class defines the inventoriable item for this rate plan.
     * - minOccurs: 0
     * @var mixed
     */
    public $UniqueID;
    /**
     * The SellableProductRPH
     * Meta informations extracted from the WSDL
     * - documentation: This is a reference placeholder, used as an index for this object.
     * - use: optional
     * @var int
     */
    public $SellableProductRPH;
    /**
     * The InvNotifType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $InvNotifType;
    /**
     * The InvStatusType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $InvStatusType;
    /**
     * The InvGroupingCode
     * Meta informations extracted from the WSDL
     * - documentation: The identification of the inventory grouping. Whether to use the sending/querying or the receiving/responding system's identification depends on which system is doing the translating.
     * - use: optional
     * @var string
     */
    public $InvGroupingCode;
    /**
     * The OrderSequence
     * Meta informations extracted from the WSDL
     * - documentation: The order which the items should be acknowledged by the receiving entity.
     * - use: optional
     * @var string
     */
    public $OrderSequence;
    /**
     * Constructor method for SellableProduct
     * @uses SellableProduct::setDestinationSystemCodes()
     * @uses SellableProduct::setGuestRoom()
     * @uses SellableProduct::setMeetingRoom()
     * @uses SellableProduct::setInventoryBlock()
     * @uses SellableProduct::setDescription()
     * @uses SellableProduct::setUniqueID()
     * @uses SellableProduct::setSellableProductRPH()
     * @uses SellableProduct::setInvNotifType()
     * @uses SellableProduct::setInvStatusType()
     * @uses SellableProduct::setInvGroupingCode()
     * @uses SellableProduct::setOrderSequence()
     * @param mixed $destinationSystemCodes
     * @param mixed $guestRoom
     * @param mixed $meetingRoom
     * @param mixed $inventoryBlock
     * @param mixed $description
     * @param mixed $uniqueID
     * @param int $sellableProductRPH
     * @param string $invNotifType
     * @param string $invStatusType
     * @param string $invGroupingCode
     * @param string $orderSequence
     */
    public function __construct($destinationSystemCodes = null, $guestRoom = null, $meetingRoom = null, $inventoryBlock = null, $description = null, $uniqueID = null, $sellableProductRPH = null, $invNotifType = null, $invStatusType = null, $invGroupingCode = null, $orderSequence = null)
    {
        $this
            ->setDestinationSystemCodes($destinationSystemCodes)
            ->setGuestRoom($guestRoom)
            ->setMeetingRoom($meetingRoom)
            ->setInventoryBlock($inventoryBlock)
            ->setDescription($description)
            ->setUniqueID($uniqueID)
            ->setSellableProductRPH($sellableProductRPH)
            ->setInvNotifType($invNotifType)
            ->setInvStatusType($invStatusType)
            ->setInvGroupingCode($invGroupingCode)
            ->setOrderSequence($orderSequence);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct
     */
    public function setDestinationSystemCodes($destinationSystemCodes = null)
    {
        $this->DestinationSystemCodes = $destinationSystemCodes;
        return $this;
    }
    /**
     * Get GuestRoom value
     * @return mixed|null
     */
    public function getGuestRoom()
    {
        return $this->GuestRoom;
    }
    /**
     * Set GuestRoom value
     * @param mixed $guestRoom
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct
     */
    public function setGuestRoom($guestRoom = null)
    {
        $this->GuestRoom = $guestRoom;
        return $this;
    }
    /**
     * Get MeetingRoom value
     * @return mixed|null
     */
    public function getMeetingRoom()
    {
        return $this->MeetingRoom;
    }
    /**
     * Set MeetingRoom value
     * @param mixed $meetingRoom
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct
     */
    public function setMeetingRoom($meetingRoom = null)
    {
        $this->MeetingRoom = $meetingRoom;
        return $this;
    }
    /**
     * Get InventoryBlock value
     * @return mixed|null
     */
    public function getInventoryBlock()
    {
        return $this->InventoryBlock;
    }
    /**
     * Set InventoryBlock value
     * @param mixed $inventoryBlock
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct
     */
    public function setInventoryBlock($inventoryBlock = null)
    {
        $this->InventoryBlock = $inventoryBlock;
        return $this;
    }
    /**
     * Get Description value
     * @return mixed|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param mixed $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct
     */
    public function setDescription($description = null)
    {
        $this->Description = $description;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get SellableProductRPH value
     * @return int|null
     */
    public function getSellableProductRPH()
    {
        return $this->SellableProductRPH;
    }
    /**
     * Set SellableProductRPH value
     * @param int $sellableProductRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct
     */
    public function setSellableProductRPH($sellableProductRPH = null)
    {
        // validation for constraint: int
        if (!is_null($sellableProductRPH) && !is_numeric($sellableProductRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sellableProductRPH)), __LINE__);
        }
        $this->SellableProductRPH = $sellableProductRPH;
        return $this;
    }
    /**
     * Get InvNotifType value
     * @return string|null
     */
    public function getInvNotifType()
    {
        return $this->InvNotifType;
    }
    /**
     * Set InvNotifType value
     * @param string $invNotifType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct
     */
    public function setInvNotifType($invNotifType = null)
    {
        // validation for constraint: string
        if (!is_null($invNotifType) && !is_string($invNotifType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invNotifType)), __LINE__);
        }
        $this->InvNotifType = $invNotifType;
        return $this;
    }
    /**
     * Get InvStatusType value
     * @return string|null
     */
    public function getInvStatusType()
    {
        return $this->InvStatusType;
    }
    /**
     * Set InvStatusType value
     * @param string $invStatusType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct
     */
    public function setInvStatusType($invStatusType = null)
    {
        // validation for constraint: string
        if (!is_null($invStatusType) && !is_string($invStatusType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invStatusType)), __LINE__);
        }
        $this->InvStatusType = $invStatusType;
        return $this;
    }
    /**
     * Get InvGroupingCode value
     * @return string|null
     */
    public function getInvGroupingCode()
    {
        return $this->InvGroupingCode;
    }
    /**
     * Set InvGroupingCode value
     * @param string $invGroupingCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct
     */
    public function setInvGroupingCode($invGroupingCode = null)
    {
        // validation for constraint: string
        if (!is_null($invGroupingCode) && !is_string($invGroupingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invGroupingCode)), __LINE__);
        }
        $this->InvGroupingCode = $invGroupingCode;
        return $this;
    }
    /**
     * Get OrderSequence value
     * @return string|null
     */
    public function getOrderSequence()
    {
        return $this->OrderSequence;
    }
    /**
     * Set OrderSequence value
     * @param string $orderSequence
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct
     */
    public function setOrderSequence($orderSequence = null)
    {
        // validation for constraint: string
        if (!is_null($orderSequence) && !is_string($orderSequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($orderSequence)), __LINE__);
        }
        $this->OrderSequence = $orderSequence;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SellableProduct
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
