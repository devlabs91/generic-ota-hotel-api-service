<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NetAmount StructType
 * Meta informations extracted from the WSDL
 * - documentation: The amount payable by the agent, i.e. GrossAmount less Commission less Tax.
 * @subpackage Structs
 */
class NetAmount extends AbstractStructBase
{
    /**
     * The PaymentDueDate
     * Meta informations extracted from the WSDL
     * - documentation: Date on which payment must be received.
     * - use: optional
     * @var string
     */
    public $PaymentDueDate;
    /**
     * Constructor method for NetAmount
     * @uses NetAmount::setPaymentDueDate()
     * @param string $paymentDueDate
     */
    public function __construct($paymentDueDate = null)
    {
        $this
            ->setPaymentDueDate($paymentDueDate);
    }
    /**
     * Get PaymentDueDate value
     * @return string|null
     */
    public function getPaymentDueDate()
    {
        return $this->PaymentDueDate;
    }
    /**
     * Set PaymentDueDate value
     * @param string $paymentDueDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\NetAmount
     */
    public function setPaymentDueDate($paymentDueDate = null)
    {
        // validation for constraint: string
        if (!is_null($paymentDueDate) && !is_string($paymentDueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentDueDate)), __LINE__);
        }
        $this->PaymentDueDate = $paymentDueDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\NetAmount
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
