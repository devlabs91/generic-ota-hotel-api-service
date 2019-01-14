<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EquipmentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the aircraft equipment type. | Used for Character Strings, length 0 to 64
 * - maxLength: 64
 * - minLength: 0
 * @subpackage Structs
 */
class EquipmentType extends AbstractStructBase
{
    /**
     * The AirEquipType
     * Meta informations extracted from the WSDL
     * - documentation: This is the 3 character IATA code.
     * - use: required
     * @var string
     */
    public $AirEquipType;
    /**
     * The ChangeofGauge
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: Indicates there is an equipment change.
     * - use: optional
     * @var bool
     */
    public $ChangeofGauge;
    /**
     * Constructor method for EquipmentType
     * @uses EquipmentType::setAirEquipType()
     * @uses EquipmentType::setChangeofGauge()
     * @param string $airEquipType
     * @param bool $changeofGauge
     */
    public function __construct($airEquipType = null, $changeofGauge = false)
    {
        $this
            ->setAirEquipType($airEquipType)
            ->setChangeofGauge($changeofGauge);
    }
    /**
     * Get AirEquipType value
     * @return string
     */
    public function getAirEquipType()
    {
        return $this->AirEquipType;
    }
    /**
     * Set AirEquipType value
     * @param string $airEquipType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EquipmentType
     */
    public function setAirEquipType($airEquipType = null)
    {
        // validation for constraint: string
        if (!is_null($airEquipType) && !is_string($airEquipType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airEquipType)), __LINE__);
        }
        $this->AirEquipType = $airEquipType;
        return $this;
    }
    /**
     * Get ChangeofGauge value
     * @return bool|null
     */
    public function getChangeofGauge()
    {
        return $this->ChangeofGauge;
    }
    /**
     * Set ChangeofGauge value
     * @param bool $changeofGauge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EquipmentType
     */
    public function setChangeofGauge($changeofGauge = false)
    {
        // validation for constraint: boolean
        if (!is_null($changeofGauge) && !is_bool($changeofGauge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($changeofGauge)), __LINE__);
        }
        $this->ChangeofGauge = $changeofGauge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EquipmentType
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
