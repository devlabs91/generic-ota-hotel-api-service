<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarketingAirline StructType
 * Meta informations extracted from the WSDL
 * - documentation: The marketing airline. This is required for use with scheduled airline messages but may be omitted for requests by tour operators. | To specifiy if an airline is a member of an alliance.
 * @subpackage Structs
 */
class MarketingAirline extends CompanyNameType
{
    /**
     * Constructor method for MarketingAirline
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MarketingAirline
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
