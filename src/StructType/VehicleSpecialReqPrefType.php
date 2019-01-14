<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleSpecialReqPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleSpecialReqPrefType complex type defines a preference for a particular special request. The preference is expressed using the attribute group PreferLevelType. | Used for Character Strings, length 1 to 255
 * - maxLength: 255
 * - minLength: 1
 * @subpackage Structs
 */
class VehicleSpecialReqPrefType extends AbstractStructBase
{
    /**
     * Constructor method for VehicleSpecialReqPrefType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleSpecialReqPrefType
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
