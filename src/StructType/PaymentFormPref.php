<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentFormPref StructType
 * Meta informations extracted from the WSDL
 * - documentation: A preference for a payment indicates a specific type of payment, such as a credit card or direct bill, to be assigned to the car rental preference collection. The RPH (Reference Place Holder) attribute designates a specific payment
 * form in a collection stored in the profile.
 * @subpackage Structs
 */
class PaymentFormPref extends AbstractStructBase
{
    /**
     * Constructor method for PaymentFormPref
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormPref
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
