<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirRowCharacteristics StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains a list of characteristics of an air row.
 * @subpackage Structs
 */
class AirRowCharacteristics extends AbstractStructBase
{
    /**
     * The CharacteristicList
     * Meta informations extracted from the WSDL
     * - documentation: Describes the characteristics of a specific seat row. Refer to OpenTravel Code List Air Row Type (ROW).
     * - use: required
     * @var string
     */
    public $CharacteristicList;
    /**
     * Constructor method for AirRowCharacteristics
     * @uses AirRowCharacteristics::setCharacteristicList()
     * @param string $characteristicList
     */
    public function __construct($characteristicList = null)
    {
        $this
            ->setCharacteristicList($characteristicList);
    }
    /**
     * Get CharacteristicList value
     * @return string
     */
    public function getCharacteristicList()
    {
        return $this->CharacteristicList;
    }
    /**
     * Set CharacteristicList value
     * @param string $characteristicList
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirRowCharacteristics
     */
    public function setCharacteristicList($characteristicList = null)
    {
        // validation for constraint: string
        if (!is_null($characteristicList) && !is_string($characteristicList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($characteristicList)), __LINE__);
        }
        $this->CharacteristicList = $characteristicList;
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
