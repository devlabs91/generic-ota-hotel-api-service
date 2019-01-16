<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateDistance StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information on the distance that a reserved vehicle may be driven as part of the standard rental charge. Such distance may be unlimited, or a quantity of miles or kilometers for a certain period of time. This may be repeated for
 * situations such as an 8 day rental that has 500 miles per week and 100 miles per additional day. | Information on the distance that a reserved vehicle may be driven as part of the standard rental charge. Such distance may be unlimited, or a quantity
 * of miles or kilometers for a certain period of time. This may be repeated for situations such as an 8 day rental that has 500 miles per week and 100 miles per additional day.
 * @subpackage Structs
 */
class RateDistance extends AbstractStructBase
{
    /**
     * Constructor method for RateDistance
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateDistance
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
