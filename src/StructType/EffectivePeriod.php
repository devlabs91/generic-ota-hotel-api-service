<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EffectivePeriod StructType
 * Meta informations extracted from the WSDL
 * - documentation: The period for which content is visible. This may be either specific times of year that repeat annually or actual dates. | Used to define a period of time using either actual dates or a day and month. May be used to define a period
 * of time that occurs annually.
 * @subpackage Structs
 */
class EffectivePeriod extends AbstractStructBase
{
    /**
     * Constructor method for EffectivePeriod
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\EffectivePeriod
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
