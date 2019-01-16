<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FuelLevelDetails StructType
 * Meta informations extracted from the WSDL
 * - documentation: This provides values based on the amount of fuel present. | This provides a specifc amount of fuel (e.g. 10 gallons).
 * @subpackage Structs
 */
class FuelLevelDetails extends AbstractStructBase
{
    /**
     * The FuelLevelValue
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $FuelLevelValue;
    /**
     * Constructor method for FuelLevelDetails
     * @uses FuelLevelDetails::setFuelLevelValue()
     * @param string $fuelLevelValue
     */
    public function __construct($fuelLevelValue = null)
    {
        $this
            ->setFuelLevelValue($fuelLevelValue);
    }
    /**
     * Get FuelLevelValue value
     * @return string|null
     */
    public function getFuelLevelValue()
    {
        return $this->FuelLevelValue;
    }
    /**
     * Set FuelLevelValue value
     * @param string $fuelLevelValue
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FuelLevelDetails
     */
    public function setFuelLevelValue($fuelLevelValue = null)
    {
        // validation for constraint: string
        if (!is_null($fuelLevelValue) && !is_string($fuelLevelValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fuelLevelValue)), __LINE__);
        }
        $this->FuelLevelValue = $fuelLevelValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FuelLevelDetails
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
