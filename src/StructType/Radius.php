<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Radius StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to specify the extent of a search area. The extent is relative to an element (position, address, hotel reference, etc.) present in this ItemSearchCriterionType that specifies a location. | Used to provide distance and direction
 * information from the referenced location.
 * @subpackage Structs
 */
class Radius extends AbstractStructBase
{
    /**
     * Constructor method for Radius
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Radius
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
