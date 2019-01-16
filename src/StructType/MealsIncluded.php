<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MealsIncluded StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines which meals are included with this rate plan. | Defines which meals are included with this rate plan. | Defines which meals are included with this rate program. | Defines which meals are included with this rate program. |
 * Defines which meals are included with this rate program. | Defines which meals are included with this rate program.
 * @subpackage Structs
 */
class MealsIncluded extends AbstractStructBase
{
    /**
     * Constructor method for MealsIncluded
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded
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
