<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Total StructType
 * Meta informations extracted from the WSDL
 * - documentation: The total of the base fee and taxes. | Used to specify the total base fees, total taxes and total of both.
 * - type: Money
 * - use: required
 * @subpackage Structs
 */
class Total extends AbstractStructBase
{
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: The total of the base fee and taxes.
     * - use: required
     * @var string
     */
    public $Amount;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Type;
    /**
     * Constructor method for Total
     * @uses Total::setAmount()
     * @uses Total::setType()
     * @param string $amount
     * @param string $type
     */
    public function __construct($amount = null, $type = null)
    {
        $this
            ->setAmount($amount)
            ->setType($type);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Total
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
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Total
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Total
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
