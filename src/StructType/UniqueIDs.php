<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniqueIDs StructType
 * Meta informations extracted from the WSDL
 * - documentation: This identifies the master account number and related information.
 * @subpackage Structs
 */
class UniqueIDs extends AbstractStructBase
{
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifiers for the Event Planner or Coordinator. Can include EP IATA# and other unique IDs such as an Event Planner ID assigned by the receiving system.
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var mixed[]
     */
    public $UniqueID;
    /**
     * Constructor method for UniqueIDs
     * @uses UniqueIDs::setUniqueID()
     * @param mixed[] $uniqueID
     */
    public function __construct(array $uniqueID = array())
    {
        $this
            ->setUniqueID($uniqueID);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UniqueIDs
     */
    public function setUniqueID(array $uniqueID = array())
    {
        foreach ($uniqueID as $uniqueIDsUniqueIDItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The UniqueID property can only contain items of anyType, "%s" given', is_object($uniqueIDsUniqueIDItem) ? get_class($uniqueIDsUniqueIDItem) : gettype($uniqueIDsUniqueIDItem)), __LINE__);
            }
        }
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Add item to UniqueID value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UniqueIDs
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UniqueIDs
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
