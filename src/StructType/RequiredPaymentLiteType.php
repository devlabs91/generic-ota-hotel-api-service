<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequiredPaymentLiteType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Summary version of the RequiredPaymentType, initially created for the Travel Itinerary Message set.
 * @subpackage Structs
 */
class RequiredPaymentLiteType extends AbstractStructBase
{
    /**
     * The AcceptedPayments
     * Meta informations extracted from the WSDL
     * - documentation: Collection of forms of payment accepted for payment.
     * - minOccurs: 0
     * @var mixed
     */
    public $AcceptedPayments;
    /**
     * The AmountPercent
     * Meta informations extracted from the WSDL
     * - documentation: Payment expressed as a fixed amount, or a percentage of/or room nights.
     * - minOccurs: 0
     * @var mixed
     */
    public $AmountPercent;
    /**
     * The RetributionType
     * @var string
     */
    public $RetributionType;
    /**
     * Constructor method for RequiredPaymentLiteType
     * @uses RequiredPaymentLiteType::setAcceptedPayments()
     * @uses RequiredPaymentLiteType::setAmountPercent()
     * @uses RequiredPaymentLiteType::setRetributionType()
     * @param mixed $acceptedPayments
     * @param mixed $amountPercent
     * @param string $retributionType
     */
    public function __construct($acceptedPayments = null, $amountPercent = null, $retributionType = null)
    {
        $this
            ->setAcceptedPayments($acceptedPayments)
            ->setAmountPercent($amountPercent)
            ->setRetributionType($retributionType);
    }
    /**
     * Get AcceptedPayments value
     * @return mixed|null
     */
    public function getAcceptedPayments()
    {
        return $this->AcceptedPayments;
    }
    /**
     * Set AcceptedPayments value
     * @param mixed $acceptedPayments
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPaymentLiteType
     */
    public function setAcceptedPayments($acceptedPayments = null)
    {
        $this->AcceptedPayments = $acceptedPayments;
        return $this;
    }
    /**
     * Get AmountPercent value
     * @return mixed|null
     */
    public function getAmountPercent()
    {
        return $this->AmountPercent;
    }
    /**
     * Set AmountPercent value
     * @param mixed $amountPercent
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPaymentLiteType
     */
    public function setAmountPercent($amountPercent = null)
    {
        $this->AmountPercent = $amountPercent;
        return $this;
    }
    /**
     * Get RetributionType value
     * @return string|null
     */
    public function getRetributionType()
    {
        return $this->RetributionType;
    }
    /**
     * Set RetributionType value
     * @param string $retributionType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPaymentLiteType
     */
    public function setRetributionType($retributionType = null)
    {
        // validation for constraint: string
        if (!is_null($retributionType) && !is_string($retributionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($retributionType)), __LINE__);
        }
        $this->RetributionType = $retributionType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPaymentLiteType
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
