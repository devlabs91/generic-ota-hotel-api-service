<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleCharges StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information on the charges associated with this vehicle. Such charges may include the base rental amount, additional mileage amounts, fuel costs, etc. | Information on the charges associated with this vehicle. Such charges may
 * include the base rental amount, additional mileage amounts, fuel costs, etc.
 * @subpackage Structs
 */
class VehicleCharges extends AbstractStructBase
{
    /**
     * The VehicleCharge
     * Meta informations extracted from the WSDL
     * - documentation: Detailed information on one specific charge including an indication of the type of charge. | Detailed information on one specific charge including an indication of the type of charge.
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $VehicleCharge;
    /**
     * Constructor method for VehicleCharges
     * @uses VehicleCharges::setVehicleCharge()
     * @param mixed[] $vehicleCharge
     */
    public function __construct(array $vehicleCharge = array())
    {
        $this
            ->setVehicleCharge($vehicleCharge);
    }
    /**
     * Get VehicleCharge value
     * @return mixed[]|null
     */
    public function getVehicleCharge()
    {
        return $this->VehicleCharge;
    }
    /**
     * Set VehicleCharge value
     * @throws \InvalidArgumentException
     * @param mixed[] $vehicleCharge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCharges
     */
    public function setVehicleCharge(array $vehicleCharge = array())
    {
        foreach ($vehicleCharge as $vehicleChargesVehicleChargeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The VehicleCharge property can only contain items of anyType, "%s" given', is_object($vehicleChargesVehicleChargeItem) ? get_class($vehicleChargesVehicleChargeItem) : gettype($vehicleChargesVehicleChargeItem)), __LINE__);
            }
        }
        $this->VehicleCharge = $vehicleCharge;
        return $this;
    }
    /**
     * Add item to VehicleCharge value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCharges
     */
    public function addToVehicleCharge($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The VehicleCharge property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehicleCharge[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCharges
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
