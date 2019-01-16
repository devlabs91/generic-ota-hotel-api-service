<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentFormPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies a form of payment preference. | Used to indicate a level of preference for a form of payment. | Used for Character Strings, length 1 to 64.
 * - maxLength: 64
 * - minLength: 1
 * @subpackage Structs
 */
class PaymentFormPrefType extends AbstractStructBase
{
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: The unique reference for a payment form within this message.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for PaymentFormPrefType
     * @uses PaymentFormPrefType::setRPH()
     * @param string $rPH
     */
    public function __construct($rPH = null)
    {
        $this
            ->setRPH($rPH);
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormPrefType
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentFormPrefType
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
