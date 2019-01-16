<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoyaltyCertificate StructType
 * Meta informations extracted from the WSDL
 * - documentation: A certificate may be needed in order to redeem miles or points. Certificates may be used in combination with each other as part of a reservation. | Identifies the loyalty scheme, programs and promotions within the scheme, membership
 * reference, format of the certificate, the number of nights it can be used and its current status.
 * @subpackage Structs
 */
class LoyaltyCertificate extends AbstractStructBase
{
    /**
     * Constructor method for LoyaltyCertificate
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LoyaltyCertificate
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
