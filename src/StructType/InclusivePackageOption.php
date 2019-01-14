<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InclusivePackageOption StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to request package options that the cruise might offer with the sailing. It is quite common to request, at this stage, packages that are included in the cruise sailing offering (inclusive packages).
 * @subpackage Structs
 */
class InclusivePackageOption extends AbstractStructBase
{
    /**
     * Constructor method for InclusivePackageOption
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InclusivePackageOption
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
