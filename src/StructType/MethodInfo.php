<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MethodInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is used to indicate the reservation and billing methods for the rate plan. | This is used to indicate the reservation and billing methods for a single inventory block.
 * @subpackage Structs
 */
class MethodInfo extends AbstractStructBase
{
    /**
     * Constructor method for MethodInfo
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo
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
