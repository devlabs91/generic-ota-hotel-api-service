<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SecurityFeaturePrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for type of security features in a hotel. | Identifies the customer's level of preference for the hotel security feature identified. Refer to OpenTravel Code List Security Feature Code (SEC). | Used for codes in
 * the OpenTravel Code tables. Possible values of this pattern are 1, 101, 101.EQP, or 101.EQP.X.
 * - pattern: [0-9A-Z]{1,3}(\.[A-Z]{3}(\.X){0,1}){0,1}
 * @subpackage Structs
 */
class SecurityFeaturePrefType extends AbstractStructBase
{
    /**
     * Constructor method for SecurityFeaturePrefType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SecurityFeaturePrefType
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
