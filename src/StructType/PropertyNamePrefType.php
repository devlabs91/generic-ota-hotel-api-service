<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyNamePrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Name of preferred hotel property associated with this collection. | Identifies the customer's level of preference for the hotel property identified. | Used for Character Strings, length 1 to 128
 * - maxLength: 128
 * - minLength: 1
 * @subpackage Structs
 */
class PropertyNamePrefType extends AbstractStructBase
{
    /**
     * Constructor method for PropertyNamePrefType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyNamePrefType
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
