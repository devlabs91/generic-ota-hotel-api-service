<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvCountType StructType
 * @subpackage Structs
 */
class InvCountType extends AbstractStructBase
{
    /**
     * The Inventory
     * Meta informations extracted from the WSDL
     * - documentation: This is the inventory information for a given rate plan, room type, date, etc.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $Inventory;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier element allows the trading partners to uniquely identify each Inventory Count Message, for transaction tracability.
     * - minOccurs: 0
     * @var mixed
     */
    public $UniqueID;
    /**
     * Constructor method for InvCountType
     * @uses InvCountType::setInventory()
     * @uses InvCountType::setUniqueID()
     * @param mixed[] $inventory
     * @param mixed $uniqueID
     */
    public function __construct(array $inventory = array(), $uniqueID = null)
    {
        $this
            ->setInventory($inventory)
            ->setUniqueID($uniqueID);
    }
    /**
     * Get Inventory value
     * @return mixed[]|null
     */
    public function getInventory()
    {
        return $this->Inventory;
    }
    /**
     * Set Inventory value
     * @throws \InvalidArgumentException
     * @param mixed[] $inventory
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvCountType
     */
    public function setInventory(array $inventory = array())
    {
        foreach ($inventory as $invCountTypeInventoryItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Inventory property can only contain items of anyType, "%s" given', is_object($invCountTypeInventoryItem) ? get_class($invCountTypeInventoryItem) : gettype($invCountTypeInventoryItem)), __LINE__);
            }
        }
        $this->Inventory = $inventory;
        return $this;
    }
    /**
     * Add item to Inventory value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvCountType
     */
    public function addToInventory($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Inventory property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Inventory[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvCountType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvCountType
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
