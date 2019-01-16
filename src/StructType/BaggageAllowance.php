<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaggageAllowance StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides the maximum weight of checked-in bags per passenger in this cabin. | Provides the maximum weight of checked-in bags per passenger in this cabin | Specifies the weight and measurement units for baggage.
 * @subpackage Structs
 */
class BaggageAllowance extends AbstractStructBase
{
    /**
     * Constructor method for BaggageAllowance
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaggageAllowance
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
