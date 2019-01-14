<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NegotiatedFareCode StructType
 * Meta informations extracted from the WSDL
 * - type: xs:string
 * - use: optional
 * - documentation: Used for Character Strings, length 1 to 16
 * - maxLength: 16
 * - minLength: 1
 * @subpackage Structs
 */
class NegotiatedFareCode extends AbstractStructBase
{
    /**
     * Constructor method for NegotiatedFareCode
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\NegotiatedFareCode
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
