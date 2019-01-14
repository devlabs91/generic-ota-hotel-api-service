<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleClassType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleClassType complex type defines what is referred to as the class of vehicle. Within a type of vehicle (for example, within the type "Car") there is still a wide range of different vehicles. A class of vehicle is used to
 * define that specific vehicle within the broader range of the vehicle in that same vehicle type. Use of vehicle class in conjunction with a vehicle type aids in clarifying a request and aids in describing a specific vehicle. A vehicle class is
 * currently defined as just the size of the vehicle.
 * @subpackage Structs
 */
class VehicleClassType extends AbstractStructBase
{
    /**
     * The Size
     * Meta informations extracted from the WSDL
     * - documentation: The Size attribute identifies the size of a vehicle. Refer to OTA Code List Size (SIZ).
     * - use: required
     * @var string
     */
    public $Size;
    /**
     * Constructor method for VehicleClassType
     * @uses VehicleClassType::setSize()
     * @param string $size
     */
    public function __construct($size = null)
    {
        $this
            ->setSize($size);
    }
    /**
     * Get Size value
     * @return string
     */
    public function getSize()
    {
        return $this->Size;
    }
    /**
     * Set Size value
     * @param string $size
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleClassType
     */
    public function setSize($size = null)
    {
        // validation for constraint: string
        if (!is_null($size) && !is_string($size)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($size)), __LINE__);
        }
        $this->Size = $size;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleClassType
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
