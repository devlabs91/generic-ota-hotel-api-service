<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PetInfoPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indentifies preferences regarding a pet. | Used to indicate a level of preference for pet information. | Used for Character Strings, length 1 to 64.
 * - maxLength: 64
 * - minLength: 1
 * @subpackage Structs
 */
class PetInfoPrefType extends AbstractStructBase
{
    /**
     * Constructor method for PetInfoPrefType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PetInfoPrefType
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
