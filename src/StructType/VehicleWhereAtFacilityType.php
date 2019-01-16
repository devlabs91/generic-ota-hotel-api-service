<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleWhereAtFacilityType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleWhereAtFacilityType complex type defines the information needed to describe the location of the associated item at a rental facility. Example of the items that may make use of this type include Rental Counter, Vehicle
 * Parking Locations, etc. | Used for Character Strings, length 0 to 255.
 * - maxLength: 255
 * - minLength: 0
 * @subpackage Structs
 */
class VehicleWhereAtFacilityType extends AbstractStructBase
{
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - documentation: The Location attribute identifies the location of an item at an airport. Refer to OpenTravel Code List Vehicle Where At Facility (VWF) (e.g., shuttle on airport).
     * - use: required
     * @var string
     */
    public $Location;
    /**
     * Constructor method for VehicleWhereAtFacilityType
     * @uses VehicleWhereAtFacilityType::setLocation()
     * @param string $location
     */
    public function __construct($location = null)
    {
        $this
            ->setLocation($location);
    }
    /**
     * Get Location value
     * @return string
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleWhereAtFacilityType
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleWhereAtFacilityType
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
