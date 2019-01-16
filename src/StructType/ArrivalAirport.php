<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrivalAirport StructType
 * Meta informations extracted from the WSDL
 * - documentation: The arrival airport for the flight. | The arrival airport/city code. | Arrival point of flight segment. | Identifies the airport location for the arrival. | Arrival point of flight segment.
 * @subpackage Structs
 */
class ArrivalAirport extends AbstractStructBase
{
    /**
     * Constructor method for ArrivalAirport
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalAirport
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
