<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Policy StructType
 * Meta informations extracted from the WSDL
 * - documentation: The PolicyInfo class that describes the policies of the hotel, such as the type of payments, or whether children or pets are accepted. | May be used to give further detail on the code or to remove an obsolete item.
 * @subpackage Structs
 */
class Policy extends AbstractStructBase
{
    /**
     * The CancelPolicy
     * Meta informations extracted from the WSDL
     * - documentation: The CancelPenalty class defines the cancellation policy of the hotel facility.
     * - minOccurs: 0
     * @var mixed
     */
    public $CancelPolicy;
    /**
     * The PaymentPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PaymentPolicy
     */
    public $PaymentPolicy;
    /**
     * The PolicyInfoCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCodes
     */
    public $PolicyInfoCodes;
    /**
     * The CheckoutCharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharges
     */
    public $CheckoutCharges;
    /**
     * The PolicyInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo
     */
    public $PolicyInfo;
    /**
     * The TaxPolicies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicies
     */
    public $TaxPolicies;
    /**
     * The DefaultValidBookingMinOffset
     * Meta informations extracted from the WSDL
     * - documentation: Defines the default minimum number of days in advance that a booking must be made at this hotel.
     * - use: optional
     * @var int
     */
    public $DefaultValidBookingMinOffset;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: The code identifying this policy.
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The PetsPolicyCode
     * Meta informations extracted from the WSDL
     * - documentation: The code for the type of pet policy maintained at the hotel facility. Refer to OTA Code List Pets Policy Code (PET).
     * - use: optional
     * @var string
     */
    public $PetsPolicyCode;
    /**
     * The LastUpdated
     * Meta informations extracted from the WSDL
     * - documentation: The date and time when the policy information for this hotel was last updated.
     * - use: optional
     * @var string
     */
    public $LastUpdated;
    /**
     * Constructor method for Policy
     * @uses Policy::setCancelPolicy()
     * @uses Policy::setPaymentPolicy()
     * @uses Policy::setPolicyInfoCodes()
     * @uses Policy::setCheckoutCharges()
     * @uses Policy::setPolicyInfo()
     * @uses Policy::setTaxPolicies()
     * @uses Policy::setDefaultValidBookingMinOffset()
     * @uses Policy::setCode()
     * @uses Policy::setPetsPolicyCode()
     * @uses Policy::setLastUpdated()
     * @param mixed $cancelPolicy
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentPolicy $paymentPolicy
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCodes $policyInfoCodes
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharges $checkoutCharges
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo $policyInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicies $taxPolicies
     * @param int $defaultValidBookingMinOffset
     * @param string $code
     * @param string $petsPolicyCode
     * @param string $lastUpdated
     */
    public function __construct($cancelPolicy = null, \Devlabs91\GenericOtaHotelApiService\StructType\PaymentPolicy $paymentPolicy = null, \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCodes $policyInfoCodes = null, \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharges $checkoutCharges = null, \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo $policyInfo = null, \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicies $taxPolicies = null, $defaultValidBookingMinOffset = null, $code = null, $petsPolicyCode = null, $lastUpdated = null)
    {
        $this
            ->setCancelPolicy($cancelPolicy)
            ->setPaymentPolicy($paymentPolicy)
            ->setPolicyInfoCodes($policyInfoCodes)
            ->setCheckoutCharges($checkoutCharges)
            ->setPolicyInfo($policyInfo)
            ->setTaxPolicies($taxPolicies)
            ->setDefaultValidBookingMinOffset($defaultValidBookingMinOffset)
            ->setCode($code)
            ->setPetsPolicyCode($petsPolicyCode)
            ->setLastUpdated($lastUpdated);
    }
    /**
     * Get CancelPolicy value
     * @return mixed|null
     */
    public function getCancelPolicy()
    {
        return $this->CancelPolicy;
    }
    /**
     * Set CancelPolicy value
     * @param mixed $cancelPolicy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Policy
     */
    public function setCancelPolicy($cancelPolicy = null)
    {
        $this->CancelPolicy = $cancelPolicy;
        return $this;
    }
    /**
     * Get PaymentPolicy value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentPolicy|null
     */
    public function getPaymentPolicy()
    {
        return $this->PaymentPolicy;
    }
    /**
     * Set PaymentPolicy value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentPolicy $paymentPolicy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Policy
     */
    public function setPaymentPolicy(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentPolicy $paymentPolicy = null)
    {
        $this->PaymentPolicy = $paymentPolicy;
        return $this;
    }
    /**
     * Get PolicyInfoCodes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCodes|null
     */
    public function getPolicyInfoCodes()
    {
        return $this->PolicyInfoCodes;
    }
    /**
     * Set PolicyInfoCodes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCodes $policyInfoCodes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Policy
     */
    public function setPolicyInfoCodes(\Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfoCodes $policyInfoCodes = null)
    {
        $this->PolicyInfoCodes = $policyInfoCodes;
        return $this;
    }
    /**
     * Get CheckoutCharges value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharges|null
     */
    public function getCheckoutCharges()
    {
        return $this->CheckoutCharges;
    }
    /**
     * Set CheckoutCharges value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharges $checkoutCharges
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Policy
     */
    public function setCheckoutCharges(\Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharges $checkoutCharges = null)
    {
        $this->CheckoutCharges = $checkoutCharges;
        return $this;
    }
    /**
     * Get PolicyInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo|null
     */
    public function getPolicyInfo()
    {
        return $this->PolicyInfo;
    }
    /**
     * Set PolicyInfo value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo $policyInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Policy
     */
    public function setPolicyInfo(\Devlabs91\GenericOtaHotelApiService\StructType\PolicyInfo $policyInfo = null)
    {
        $this->PolicyInfo = $policyInfo;
        return $this;
    }
    /**
     * Get TaxPolicies value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicies|null
     */
    public function getTaxPolicies()
    {
        return $this->TaxPolicies;
    }
    /**
     * Set TaxPolicies value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicies $taxPolicies
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Policy
     */
    public function setTaxPolicies(\Devlabs91\GenericOtaHotelApiService\StructType\TaxPolicies $taxPolicies = null)
    {
        $this->TaxPolicies = $taxPolicies;
        return $this;
    }
    /**
     * Get DefaultValidBookingMinOffset value
     * @return int|null
     */
    public function getDefaultValidBookingMinOffset()
    {
        return $this->DefaultValidBookingMinOffset;
    }
    /**
     * Set DefaultValidBookingMinOffset value
     * @param int $defaultValidBookingMinOffset
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Policy
     */
    public function setDefaultValidBookingMinOffset($defaultValidBookingMinOffset = null)
    {
        // validation for constraint: int
        if (!is_null($defaultValidBookingMinOffset) && !is_numeric($defaultValidBookingMinOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($defaultValidBookingMinOffset)), __LINE__);
        }
        $this->DefaultValidBookingMinOffset = $defaultValidBookingMinOffset;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Policy
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get PetsPolicyCode value
     * @return string|null
     */
    public function getPetsPolicyCode()
    {
        return $this->PetsPolicyCode;
    }
    /**
     * Set PetsPolicyCode value
     * @param string $petsPolicyCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Policy
     */
    public function setPetsPolicyCode($petsPolicyCode = null)
    {
        // validation for constraint: string
        if (!is_null($petsPolicyCode) && !is_string($petsPolicyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($petsPolicyCode)), __LINE__);
        }
        $this->PetsPolicyCode = $petsPolicyCode;
        return $this;
    }
    /**
     * Get LastUpdated value
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Policy
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Policy
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
