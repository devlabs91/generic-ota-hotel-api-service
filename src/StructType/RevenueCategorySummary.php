<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevenueCategorySummary StructType
 * Meta informations extracted from the WSDL
 * - documentation: This element has revenue amount data for its revenue category, identified using OpenTravel Code List RCC, such as Room Revenue, Food and Beverage Revenue.
 * @subpackage Structs
 */
class RevenueCategorySummary extends AbstractStructBase
{
    /**
     * Constructor method for RevenueCategorySummary
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummary
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
