<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelInfoRQType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the common, or core, information associated with the request for cancellation of a reservation or other type of record.
 * @subpackage Structs
 */
class CancelInfoRQType extends AbstractStructBase
{
    /**
     * The CancelType
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify if this is to initiate a cancellation or to commit the cancellation.
     * - use: required
     * @var string
     */
    public $CancelType;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: Sending own UniqueID and partner UniqueID - the receiving system needs to know which one - UniqueID acts as a reference for each system.
     * - maxOccurs: 2
     * @var mixed[]
     */
    public $UniqueID;
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - documentation: The person's name in a reservation.
     * - minOccurs: 0
     * @var mixed
     */
    public $PersonName;
    /**
     * Constructor method for CancelInfoRQType
     * @uses CancelInfoRQType::setCancelType()
     * @uses CancelInfoRQType::setUniqueID()
     * @uses CancelInfoRQType::setPersonName()
     * @param string $cancelType
     * @param mixed[] $uniqueID
     * @param mixed $personName
     */
    public function __construct($cancelType = null, array $uniqueID = array(), $personName = null)
    {
        $this
            ->setCancelType($cancelType)
            ->setUniqueID($uniqueID)
            ->setPersonName($personName);
    }
    /**
     * Get CancelType value
     * @return string
     */
    public function getCancelType()
    {
        return $this->CancelType;
    }
    /**
     * Set CancelType value
     * @param string $cancelType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelInfoRQType
     */
    public function setCancelType($cancelType = null)
    {
        // validation for constraint: string
        if (!is_null($cancelType) && !is_string($cancelType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelType)), __LINE__);
        }
        $this->CancelType = $cancelType;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelInfoRQType
     */
    public function setUniqueID(array $uniqueID = array())
    {
        foreach ($uniqueID as $cancelInfoRQTypeUniqueIDItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The UniqueID property can only contain items of anyType, "%s" given', is_object($cancelInfoRQTypeUniqueIDItem) ? get_class($cancelInfoRQTypeUniqueIDItem) : gettype($cancelInfoRQTypeUniqueIDItem)), __LINE__);
            }
        }
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Add item to UniqueID value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelInfoRQType
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
     * Get PersonName value
     * @return mixed|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param mixed $personName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelInfoRQType
     */
    public function setPersonName($personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancelInfoRQType
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
