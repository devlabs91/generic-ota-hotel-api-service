<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRowCharacteristics StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains a list of characteristics of an Air Row.
 * @subpackage Structs
 */
class AirRowCharacteristics extends AbstractStructBase
{
    /**
     * The CharacteristicList
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int[]
     */
    public $CharacteristicList;
    /**
     * Constructor method for AirRowCharacteristics
     * @uses AirRowCharacteristics::setCharacteristicList()
     * @param int[] $characteristicList
     */
    public function __construct(array $characteristicList = array())
    {
        $this
            ->setCharacteristicList($characteristicList);
    }
    /**
     * Get CharacteristicList value
     * @return int[]
     */
    public function getCharacteristicList()
    {
        return $this->CharacteristicList;
    }
    /**
     * Set CharacteristicList value
     * @throws \InvalidArgumentException
     * @param int[] $characteristicList
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirRowCharacteristics
     */
    public function setCharacteristicList(array $characteristicList = array())
    {
        foreach ($characteristicList as $airRowCharacteristicsCharacteristicListItem) {
            // validation for constraint: itemType
            if (!is_numeric($airRowCharacteristicsCharacteristicListItem)) {
                throw new \InvalidArgumentException(sprintf('The CharacteristicList property can only contain items of integer, "%s" given', is_object($airRowCharacteristicsCharacteristicListItem) ? get_class($airRowCharacteristicsCharacteristicListItem) : gettype($airRowCharacteristicsCharacteristicListItem)), __LINE__);
            }
        }
        $this->CharacteristicList = $characteristicList;
        return $this;
    }
    /**
     * Add item to CharacteristicList value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirRowCharacteristics
     */
    public function addToCharacteristicList($item)
    {
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The CharacteristicList property can only contain items of integer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CharacteristicList[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirRowCharacteristics
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
