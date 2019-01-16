<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConjunctionTicketNbr StructType
 * Meta informations extracted from the WSDL
 * - documentation: Conjunction ticket number in case a conjunction ticket is exchanged. | Used for Character Strings, length 1 to 32.
 * - maxLength: 32
 * - minLength: 1
 * @subpackage Structs
 */
class ConjunctionTicketNbr extends AbstractStructBase
{
    /**
     * The Coupons
     * Meta informations extracted from the WSDL
     * - documentation: Gives the coupon numbers of the ticket, which will be taken for payment.
     * @var string
     */
    public $Coupons;
    /**
     * Constructor method for ConjunctionTicketNbr
     * @uses ConjunctionTicketNbr::setCoupons()
     * @param string $coupons
     */
    public function __construct($coupons = null)
    {
        $this
            ->setCoupons($coupons);
    }
    /**
     * Get Coupons value
     * @return string|null
     */
    public function getCoupons()
    {
        return $this->Coupons;
    }
    /**
     * Set Coupons value
     * @param string $coupons
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ConjunctionTicketNbr
     */
    public function setCoupons($coupons = null)
    {
        // validation for constraint: string
        if (!is_null($coupons) && !is_string($coupons)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($coupons)), __LINE__);
        }
        $this->Coupons = $coupons;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ConjunctionTicketNbr
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
