<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyPref StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates a preference for the loyalty program to be used for vehicle rental. The RPH (Reference Place Holder) attribute designates a specific loyalty program from a collection stored in the profile.
 * @subpackage Structs
 */
class LoyaltyPref extends AbstractStructBase
{
    /**
     * Constructor method for LoyaltyPref
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyPref
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
