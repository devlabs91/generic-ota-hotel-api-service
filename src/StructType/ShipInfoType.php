<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the ship details. | Specifies a vendor and ship.
 * @subpackage Structs
 */
class ShipInfoType extends AbstractStructBase
{
    /**
     * The Ship
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Ship
     */
    public $Ship;
    /**
     * The ShipLength
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ShipLength
     */
    public $ShipLength;
    /**
     * The ShipVoltage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ShipVoltage
     */
    public $ShipVoltage;
    /**
     * Constructor method for ShipInfoType
     * @uses ShipInfoType::setShip()
     * @uses ShipInfoType::setShipLength()
     * @uses ShipInfoType::setShipVoltage()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Ship $ship
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ShipLength $shipLength
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ShipVoltage $shipVoltage
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\Ship $ship = null, \Devlabs91\GenericOtaHotelApiService\StructType\ShipLength $shipLength = null, \Devlabs91\GenericOtaHotelApiService\StructType\ShipVoltage $shipVoltage = null)
    {
        $this
            ->setShip($ship)
            ->setShipLength($shipLength)
            ->setShipVoltage($shipVoltage);
    }
    /**
     * Get Ship value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Ship|null
     */
    public function getShip()
    {
        return $this->Ship;
    }
    /**
     * Set Ship value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Ship $ship
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ShipInfoType
     */
    public function setShip(\Devlabs91\GenericOtaHotelApiService\StructType\Ship $ship = null)
    {
        $this->Ship = $ship;
        return $this;
    }
    /**
     * Get ShipLength value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ShipLength|null
     */
    public function getShipLength()
    {
        return $this->ShipLength;
    }
    /**
     * Set ShipLength value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ShipLength $shipLength
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ShipInfoType
     */
    public function setShipLength(\Devlabs91\GenericOtaHotelApiService\StructType\ShipLength $shipLength = null)
    {
        $this->ShipLength = $shipLength;
        return $this;
    }
    /**
     * Get ShipVoltage value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ShipVoltage|null
     */
    public function getShipVoltage()
    {
        return $this->ShipVoltage;
    }
    /**
     * Set ShipVoltage value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ShipVoltage $shipVoltage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ShipInfoType
     */
    public function setShipVoltage(\Devlabs91\GenericOtaHotelApiService\StructType\ShipVoltage $shipVoltage = null)
    {
        $this->ShipVoltage = $shipVoltage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ShipInfoType
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
