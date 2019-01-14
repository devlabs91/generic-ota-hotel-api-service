<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuaranteeAccepted StructType
 * Meta informations extracted from the WSDL
 * - documentation: The guarantee information | Guarantee Detail
 * @subpackage Structs
 */
class GuaranteeAccepted extends PaymentFormType
{
    /**
     * The GuaranteePolicyType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $GuaranteePolicyType;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Payment Type (PMT).
     * - use: optional
     * @var string
     */
    public $PaymentType;
    /**
     * The Default
     * Meta informations extracted from the WSDL
     * - documentation: This is to indicate that the information in the model is the default (e.g. if PaymentCard information is completed then this would be considered the default if the boolean is true).
     * @var bool
     */
    public $Default;
    /**
     * Constructor method for GuaranteeAccepted
     * @uses GuaranteeAccepted::setGuaranteePolicyType()
     * @uses GuaranteeAccepted::setPaymentType()
     * @uses GuaranteeAccepted::setDefault()
     * @param string $guaranteePolicyType
     * @param string $paymentType
     * @param bool $default
     */
    public function __construct($guaranteePolicyType = null, $paymentType = null, $default = null)
    {
        $this
            ->setGuaranteePolicyType($guaranteePolicyType)
            ->setPaymentType($paymentType)
            ->setDefault($default);
    }
    /**
     * Get GuaranteePolicyType value
     * @return string|null
     */
    public function getGuaranteePolicyType()
    {
        return $this->GuaranteePolicyType;
    }
    /**
     * Set GuaranteePolicyType value
     * @param string $guaranteePolicyType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted
     */
    public function setGuaranteePolicyType($guaranteePolicyType = null)
    {
        // validation for constraint: string
        if (!is_null($guaranteePolicyType) && !is_string($guaranteePolicyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($guaranteePolicyType)), __LINE__);
        }
        $this->GuaranteePolicyType = $guaranteePolicyType;
        return $this;
    }
    /**
     * Get PaymentType value
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @param string $paymentType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentType)), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Get Default value
     * @return bool|null
     */
    public function getDefault()
    {
        return $this->Default;
    }
    /**
     * Set Default value
     * @param bool $default
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted
     */
    public function setDefault($default = null)
    {
        // validation for constraint: boolean
        if (!is_null($default) && !is_bool($default)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($default)), __LINE__);
        }
        $this->Default = $default;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteeAccepted
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
