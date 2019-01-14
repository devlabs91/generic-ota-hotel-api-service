<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleRentalCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleRentalCoreType complex type identifies the data that is common, or core, to almost every transaction associated with the rental of a vehicle.
 * @subpackage Structs
 */
class VehicleRentalCoreType extends AbstractStructBase
{
    /**
     * The PickUpLocation
     * Meta informations extracted from the WSDL
     * - documentation: A code to identify the pick up location, along with an optional code context.
     * @var mixed
     */
    public $PickUpLocation;
    /**
     * The ReturnLocation
     * Meta informations extracted from the WSDL
     * - documentation: A code to identify the return location, along with an optional code context.
     * @var mixed
     */
    public $ReturnLocation;
    /**
     * The PickUpDateTime
     * @var string
     */
    public $PickUpDateTime;
    /**
     * The ReturnDateTime
     * @var string
     */
    public $ReturnDateTime;
    /**
     * Constructor method for VehicleRentalCoreType
     * @uses VehicleRentalCoreType::setPickUpLocation()
     * @uses VehicleRentalCoreType::setReturnLocation()
     * @uses VehicleRentalCoreType::setPickUpDateTime()
     * @uses VehicleRentalCoreType::setReturnDateTime()
     * @param mixed $pickUpLocation
     * @param mixed $returnLocation
     * @param string $pickUpDateTime
     * @param string $returnDateTime
     */
    public function __construct($pickUpLocation = null, $returnLocation = null, $pickUpDateTime = null, $returnDateTime = null)
    {
        $this
            ->setPickUpLocation($pickUpLocation)
            ->setReturnLocation($returnLocation)
            ->setPickUpDateTime($pickUpDateTime)
            ->setReturnDateTime($returnDateTime);
    }
    /**
     * Get PickUpLocation value
     * @return mixed|null
     */
    public function getPickUpLocation()
    {
        return $this->PickUpLocation;
    }
    /**
     * Set PickUpLocation value
     * @param mixed $pickUpLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
     */
    public function setPickUpLocation($pickUpLocation = null)
    {
        $this->PickUpLocation = $pickUpLocation;
        return $this;
    }
    /**
     * Get ReturnLocation value
     * @return mixed|null
     */
    public function getReturnLocation()
    {
        return $this->ReturnLocation;
    }
    /**
     * Set ReturnLocation value
     * @param mixed $returnLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
     */
    public function setReturnLocation($returnLocation = null)
    {
        $this->ReturnLocation = $returnLocation;
        return $this;
    }
    /**
     * Get PickUpDateTime value
     * @return string|null
     */
    public function getPickUpDateTime()
    {
        return $this->PickUpDateTime;
    }
    /**
     * Set PickUpDateTime value
     * @param string $pickUpDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
     */
    public function setPickUpDateTime($pickUpDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($pickUpDateTime) && !is_string($pickUpDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pickUpDateTime)), __LINE__);
        }
        $this->PickUpDateTime = $pickUpDateTime;
        return $this;
    }
    /**
     * Get ReturnDateTime value
     * @return string|null
     */
    public function getReturnDateTime()
    {
        return $this->ReturnDateTime;
    }
    /**
     * Set ReturnDateTime value
     * @param string $returnDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
     */
    public function setReturnDateTime($returnDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($returnDateTime) && !is_string($returnDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnDateTime)), __LINE__);
        }
        $this->ReturnDateTime = $returnDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRentalCoreType
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
