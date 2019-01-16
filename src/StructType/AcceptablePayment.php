<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptablePayment StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies an acceptable method of payment.
 * @subpackage Structs
 */
class AcceptablePayment extends AbstractStructBase
{
    /**
     * The CreditCardCode
     * Meta informations extracted from the WSDL
     * - documentation: The acceptable credit card for this payment rule.
     * - use: optional
     * @var string
     */
    public $CreditCardCode;
    /**
     * Constructor method for AcceptablePayment
     * @uses AcceptablePayment::setCreditCardCode()
     * @param string $creditCardCode
     */
    public function __construct($creditCardCode = null)
    {
        $this
            ->setCreditCardCode($creditCardCode);
    }
    /**
     * Get CreditCardCode value
     * @return string|null
     */
    public function getCreditCardCode()
    {
        return $this->CreditCardCode;
    }
    /**
     * Set CreditCardCode value
     * @param string $creditCardCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePayment
     */
    public function setCreditCardCode($creditCardCode = null)
    {
        // validation for constraint: string
        if (!is_null($creditCardCode) && !is_string($creditCardCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creditCardCode)), __LINE__);
        }
        $this->CreditCardCode = $creditCardCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptablePayment
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
