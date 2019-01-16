<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehMakeModel StructType
 * Meta informations extracted from the WSDL
 * - documentation: The make and model of the vehicle (e.g., Ford Focus). The Code attribute may be used for the SIPP code. | The make and model of the vehicle (e.g., Ford Focus). The Code attribute may be used for the SIPP code.
 * @subpackage Structs
 */
class VehMakeModel extends AbstractStructBase
{
    /**
     * Constructor method for VehMakeModel
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehMakeModel
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
