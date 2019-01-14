<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestRoomInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: The types and quantities of guest rooms at a hotel. | May be used to give further detail on the code (e.g. if the code refers to the number of free standing units, information about the free standing units may be passed such as
 * cabins, cottages, etc.) or to remove an obsolete item.
 * @subpackage Structs
 */
class GuestRoomInfo extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: This will allow for multiple text descriptions to be sent with items such as concierge and allow for each description to be labeled as to the type of data being sent.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Description;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Guest Room Info (GRI).
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $Quantity;
    /**
     * Constructor method for GuestRoomInfo
     * @uses GuestRoomInfo::setDescription()
     * @uses GuestRoomInfo::setCode()
     * @uses GuestRoomInfo::setQuantity()
     * @param mixed[] $description
     * @param string $code
     * @param int $quantity
     */
    public function __construct(array $description = array(), $code = null, $quantity = null)
    {
        $this
            ->setDescription($description)
            ->setCode($code)
            ->setQuantity($quantity);
    }
    /**
     * Get Description value
     * @return mixed[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param mixed[] $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $guestRoomInfoDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($guestRoomInfoDescriptionItem) ? get_class($guestRoomInfoDescriptionItem) : gettype($guestRoomInfoDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo
     */
    public function addToDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !is_numeric($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRoomInfo
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
