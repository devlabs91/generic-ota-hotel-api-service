<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestRPH StructType
 * Meta informations extracted from the WSDL
 * - documentation: References one of the guest(s) staying in this room | (Reference Place Holder) - an index code to identify an instance in a collection of like items.. For example, used to assign individual passengers or clients to particular
 * itinerary items.
 * - pattern: [0-9]{1,8}
 * @subpackage Structs
 */
class GuestRPH extends AbstractStructBase
{
    /**
     * Constructor method for GuestRPH
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRPH
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
