<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleCoveragePrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleCoveragePrefType complex type defines a preference for a particular type of insurance coverage for a rental vehicle. The preference is expressed using the attribute group PreferLevelType.
 * @subpackage Structs
 */
class VehicleCoveragePrefType extends CoverageCoreType
{
    /**
     * Constructor method for VehicleCoveragePrefType
     */
    public function __construct()
    {
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleCoveragePrefType
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
