<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleEquipmentCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleEquipmentCoreType complex type identifies the core data that descrbes a piece of special equipment in association with the renting of a vehicle.
 * @subpackage Structs
 */
class VehicleEquipmentCoreType extends AbstractStructBase
{
    /**
     * The EquipType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the specific type of special equipment. Refer to OTA Code List Equipment Type (EQP).
     * - use: required
     * @var string
     */
    public $EquipType;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $Quantity;
    /**
     * Constructor method for VehicleEquipmentCoreType
     * @uses VehicleEquipmentCoreType::setEquipType()
     * @uses VehicleEquipmentCoreType::setQuantity()
     * @param string $equipType
     * @param int $quantity
     */
    public function __construct($equipType = null, $quantity = null)
    {
        $this
            ->setEquipType($equipType)
            ->setQuantity($quantity);
    }
    /**
     * Get EquipType value
     * @return string
     */
    public function getEquipType()
    {
        return $this->EquipType;
    }
    /**
     * Set EquipType value
     * @param string $equipType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleEquipmentCoreType
     */
    public function setEquipType($equipType = null)
    {
        // validation for constraint: string
        if (!is_null($equipType) && !is_string($equipType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($equipType)), __LINE__);
        }
        $this->EquipType = $equipType;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleEquipmentCoreType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleEquipmentCoreType
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
