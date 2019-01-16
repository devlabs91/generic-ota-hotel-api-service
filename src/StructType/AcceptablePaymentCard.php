<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptablePaymentCard StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specific information of one payment card that is acceptable as a form of payment. | Provides the information needed to describe a type of payment card that is acceptable as a form of payment. A usage fee (amount or percentage) may
 * also be stated for this particular card type.
 * @subpackage Structs
 */
class AcceptablePaymentCard extends AbstractStructBase
{
    /**
     * Constructor method for AcceptablePaymentCard
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePaymentCard
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
