<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRateDistanceType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleRateDistanceType complex type defines information on a distance associated with a particular rate For example, the distance may be expressed as Unlimited miles per rental period, or, 200 miles per day.
 * @subpackage Structs
 */
class VehicleRateDistanceType extends AbstractStructBase
{
    /**
     * The Unlimited
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $Unlimited;
    /**
     * The DistUnitName
     * Meta informations extracted from the WSDL
     * - documentation: The DistUnitName attribute provides the unit in which distance is measured, when applied to the rental of a vehicle. The rental of a vehicle may include per mile or per kilometer charges.
     * - use: required
     * @var string
     */
    public $DistUnitName;
    /**
     * The VehiclePeriodUnitName
     * Meta informations extracted from the WSDL
     * - documentation: The VehiclePeriodUnitName attribute provides the period of time associated with the reservation of a vehicle. Examples of these valid values include day, hour, rental period for expressing the entire duration of the rental, etc.
     * - use: required
     * @var string
     */
    public $VehiclePeriodUnitName;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $Quantity;
    /**
     * Constructor method for VehicleRateDistanceType
     * @uses VehicleRateDistanceType::setUnlimited()
     * @uses VehicleRateDistanceType::setDistUnitName()
     * @uses VehicleRateDistanceType::setVehiclePeriodUnitName()
     * @uses VehicleRateDistanceType::setQuantity()
     * @param bool $unlimited
     * @param string $distUnitName
     * @param string $vehiclePeriodUnitName
     * @param int $quantity
     */
    public function __construct($unlimited = null, $distUnitName = null, $vehiclePeriodUnitName = null, $quantity = null)
    {
        $this
            ->setUnlimited($unlimited)
            ->setDistUnitName($distUnitName)
            ->setVehiclePeriodUnitName($vehiclePeriodUnitName)
            ->setQuantity($quantity);
    }
    /**
     * Get Unlimited value
     * @return bool
     */
    public function getUnlimited()
    {
        return $this->Unlimited;
    }
    /**
     * Set Unlimited value
     * @param bool $unlimited
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRateDistanceType
     */
    public function setUnlimited($unlimited = null)
    {
        // validation for constraint: boolean
        if (!is_null($unlimited) && !is_bool($unlimited)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($unlimited)), __LINE__);
        }
        $this->Unlimited = $unlimited;
        return $this;
    }
    /**
     * Get DistUnitName value
     * @return string
     */
    public function getDistUnitName()
    {
        return $this->DistUnitName;
    }
    /**
     * Set DistUnitName value
     * @param string $distUnitName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRateDistanceType
     */
    public function setDistUnitName($distUnitName = null)
    {
        // validation for constraint: string
        if (!is_null($distUnitName) && !is_string($distUnitName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distUnitName)), __LINE__);
        }
        $this->DistUnitName = $distUnitName;
        return $this;
    }
    /**
     * Get VehiclePeriodUnitName value
     * @return string
     */
    public function getVehiclePeriodUnitName()
    {
        return $this->VehiclePeriodUnitName;
    }
    /**
     * Set VehiclePeriodUnitName value
     * @param string $vehiclePeriodUnitName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRateDistanceType
     */
    public function setVehiclePeriodUnitName($vehiclePeriodUnitName = null)
    {
        // validation for constraint: string
        if (!is_null($vehiclePeriodUnitName) && !is_string($vehiclePeriodUnitName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vehiclePeriodUnitName)), __LINE__);
        }
        $this->VehiclePeriodUnitName = $vehiclePeriodUnitName;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRateDistanceType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRateDistanceType
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
