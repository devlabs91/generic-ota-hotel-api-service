<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CitizenCountryName StructType
 * Meta informations extracted from the WSDL
 * - documentation: Name of the (self-professed) country that is claimed for citizenship. | Name of the (self-professed) country that is claimed for citizenship.
 * @subpackage Structs
 */
class CitizenCountryName extends AbstractStructBase
{
    /**
     * Constructor method for CitizenCountryName
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CitizenCountryName
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
