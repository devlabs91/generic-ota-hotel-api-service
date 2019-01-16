<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RentalPaymentPref StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for the form of payment that will be used, if the request results in a reservation. This element may repeat for different rental payment preferences.
 * @subpackage Structs
 */
class RentalPaymentPref extends PaymentDetailType
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * Constructor method for RentalPaymentPref
     * @uses RentalPaymentPref::setType()
     * @param string $type
     */
    public function __construct($type = null)
    {
        $this
            ->setType($type);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RentalPaymentPref
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RentalPaymentPref
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
