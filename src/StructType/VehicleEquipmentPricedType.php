<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleEquipmentPricedType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleEquipmentPricedType complex type identifies the data that describes a priced piece of special equipment in association with the rental of a vehicle. The data consists of the equipment and the correspondinng charge.
 * @subpackage Structs
 */
class VehicleEquipmentPricedType extends AbstractStructBase
{
    /**
     * The Equipment
     * Meta informations extracted from the WSDL
     * - documentation: Details about a equipment, such as text or description.
     * @var mixed
     */
    public $Equipment;
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - documentation: The charges as they relate to a single piece of equipment, such as minimum or maximum amounts, taxes, or information on how the charge was calculated.
     * @var mixed
     */
    public $Charge;
    /**
     * The Required
     * Meta informations extracted from the WSDL
     * - documentation: An indication if this particular equipment is required in the vehicle reservation, or is optional, based upon renter preference. | false
     * - use: optional
     * @var bool
     */
    public $Required;
    /**
     * Constructor method for VehicleEquipmentPricedType
     * @uses VehicleEquipmentPricedType::setEquipment()
     * @uses VehicleEquipmentPricedType::setCharge()
     * @uses VehicleEquipmentPricedType::setRequired()
     * @param mixed $equipment
     * @param mixed $charge
     * @param bool $required
     */
    public function __construct($equipment = null, $charge = null, $required = null)
    {
        $this
            ->setEquipment($equipment)
            ->setCharge($charge)
            ->setRequired($required);
    }
    /**
     * Get Equipment value
     * @return mixed|null
     */
    public function getEquipment()
    {
        return $this->Equipment;
    }
    /**
     * Set Equipment value
     * @param mixed $equipment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleEquipmentPricedType
     */
    public function setEquipment($equipment = null)
    {
        $this->Equipment = $equipment;
        return $this;
    }
    /**
     * Get Charge value
     * @return mixed|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param mixed $charge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleEquipmentPricedType
     */
    public function setCharge($charge = null)
    {
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Get Required value
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->Required;
    }
    /**
     * Set Required value
     * @param bool $required
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleEquipmentPricedType
     */
    public function setRequired($required = null)
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($required)), __LINE__);
        }
        $this->Required = $required;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleEquipmentPricedType
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
