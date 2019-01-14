<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleLocationServicesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleLocationServicesType complex type defines the services that are offered by a vehicle rental location. Such services include shuttle information to transport the customer to the facility.
 * @subpackage Structs
 */
class VehicleLocationServicesType extends AbstractStructBase
{
    /**
     * The ShuttleProvided
     * @var bool
     */
    public $ShuttleProvided;
    /**
     * Constructor method for VehicleLocationServicesType
     * @uses VehicleLocationServicesType::setShuttleProvided()
     * @param bool $shuttleProvided
     */
    public function __construct($shuttleProvided = null)
    {
        $this
            ->setShuttleProvided($shuttleProvided);
    }
    /**
     * Get ShuttleProvided value
     * @return bool|null
     */
    public function getShuttleProvided()
    {
        return $this->ShuttleProvided;
    }
    /**
     * Set ShuttleProvided value
     * @param bool $shuttleProvided
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationServicesType
     */
    public function setShuttleProvided($shuttleProvided = null)
    {
        // validation for constraint: boolean
        if (!is_null($shuttleProvided) && !is_bool($shuttleProvided)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($shuttleProvided)), __LINE__);
        }
        $this->ShuttleProvided = $shuttleProvided;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleLocationServicesType
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
