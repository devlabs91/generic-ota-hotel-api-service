<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Resort StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies the resort and destination of the property | Identifies a resort, town or city. | Identifies the parent of the Resort. The geo-political position of the destination (e.g. country) is determined by the DestinationLevel
 * attribute.
 * @subpackage Structs
 */
class Resort extends AbstractStructBase
{
    /**
     * Constructor method for Resort
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Resort
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
