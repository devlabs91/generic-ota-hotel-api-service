<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentAmount StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides the monetary amount due for payment as quoted. A second instance could show the actual paid amount in a different currency. | The currency amount of the payment.
 * @subpackage Structs
 */
class PaymentAmount extends AbstractStructBase
{
    /**
     * The ApprovalCode
     * Meta informations extracted from the WSDL
     * - documentation: The approval code returned as part of an authorization process. | The approval code returned as part of an authorization process.
     * - use: optional
     * @var string
     */
    public $ApprovalCode;
    /**
     * Constructor method for PaymentAmount
     * @uses PaymentAmount::setApprovalCode()
     * @param string $approvalCode
     */
    public function __construct($approvalCode = null)
    {
        $this
            ->setApprovalCode($approvalCode);
    }
    /**
     * Get ApprovalCode value
     * @return string|null
     */
    public function getApprovalCode()
    {
        return $this->ApprovalCode;
    }
    /**
     * Set ApprovalCode value
     * @param string $approvalCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount
     */
    public function setApprovalCode($approvalCode = null)
    {
        // validation for constraint: string
        if (!is_null($approvalCode) && !is_string($approvalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($approvalCode)), __LINE__);
        }
        $this->ApprovalCode = $approvalCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentAmount
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
