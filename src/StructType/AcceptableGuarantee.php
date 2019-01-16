<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptableGuarantee StructType
 * Meta informations extracted from the WSDL
 * - documentation: The guarantee information.
 * @subpackage Structs
 */
class AcceptableGuarantee extends \Devlabs91\GenericOtaHotelApiService\EnumType\GuaranteeType
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
     * - documentation: Refer to OpenTravel Code List Payment Type (PMT).
     * - use: optional
     * @var string
     */
    public $PaymentType;
    /**
     * The UnacceptablePaymentType
     * Meta informations extracted from the WSDL
     * - documentation: Used to denote unacceptable forms of payment. Refer to OpenTravel Code List Payment Type (PMT).
     * - use: optional
     * @var string
     */
    public $UnacceptablePaymentType;
    /**
     * Constructor method for AcceptableGuarantee
     * @uses AcceptableGuarantee::setGuaranteePolicyType()
     * @uses AcceptableGuarantee::setPaymentType()
     * @uses AcceptableGuarantee::setUnacceptablePaymentType()
     * @param string $guaranteePolicyType
     * @param string $paymentType
     * @param string $unacceptablePaymentType
     */
    public function __construct($guaranteePolicyType = null, $paymentType = null, $unacceptablePaymentType = null)
    {
        $this
            ->setGuaranteePolicyType($guaranteePolicyType)
            ->setPaymentType($paymentType)
            ->setUnacceptablePaymentType($unacceptablePaymentType);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantee
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantee
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
     * Get UnacceptablePaymentType value
     * @return string|null
     */
    public function getUnacceptablePaymentType()
    {
        return $this->UnacceptablePaymentType;
    }
    /**
     * Set UnacceptablePaymentType value
     * @param string $unacceptablePaymentType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantee
     */
    public function setUnacceptablePaymentType($unacceptablePaymentType = null)
    {
        // validation for constraint: string
        if (!is_null($unacceptablePaymentType) && !is_string($unacceptablePaymentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unacceptablePaymentType)), __LINE__);
        }
        $this->UnacceptablePaymentType = $unacceptablePaymentType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantee
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
