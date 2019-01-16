<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseFee StructType
 * Meta informations extracted from the WSDL
 * - documentation: The base fee amount.
 * @subpackage Structs
 */
class BaseFee extends AbstractStructBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: The base fee amount.
     * - use: required
     * @var string
     */
    public $Amount;
    /**
     * Constructor method for BaseFee
     * @uses BaseFee::setAmount()
     * @param string $amount
     */
    public function __construct($amount = null)
    {
        $this
            ->setAmount($amount);
    }
    /**
     * Get Amount value
     * @return string
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseFee
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BaseFee
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
