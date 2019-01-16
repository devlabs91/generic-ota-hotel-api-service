<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequiredPaymentsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of required payments.
 * @subpackage Structs
 */
class RequiredPaymentsType extends AbstractStructBase
{
    /**
     * The GuaranteePayment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment[]
     */
    public $GuaranteePayment;
    /**
     * Constructor method for RequiredPaymentsType
     * @uses RequiredPaymentsType::setGuaranteePayment()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment[] $guaranteePayment
     */
    public function __construct(array $guaranteePayment = array())
    {
        $this
            ->setGuaranteePayment($guaranteePayment);
    }
    /**
     * Get GuaranteePayment value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment[]|null
     */
    public function getGuaranteePayment()
    {
        return $this->GuaranteePayment;
    }
    /**
     * Set GuaranteePayment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment[] $guaranteePayment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPaymentsType
     */
    public function setGuaranteePayment(array $guaranteePayment = array())
    {
        foreach ($guaranteePayment as $requiredPaymentsTypeGuaranteePaymentItem) {
            // validation for constraint: itemType
            if (!$requiredPaymentsTypeGuaranteePaymentItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment) {
                throw new \InvalidArgumentException(sprintf('The GuaranteePayment property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment, "%s" given', is_object($requiredPaymentsTypeGuaranteePaymentItem) ? get_class($requiredPaymentsTypeGuaranteePaymentItem) : gettype($requiredPaymentsTypeGuaranteePaymentItem)), __LINE__);
            }
        }
        $this->GuaranteePayment = $guaranteePayment;
        return $this;
    }
    /**
     * Add item to GuaranteePayment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPaymentsType
     */
    public function addToGuaranteePayment(\Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment) {
            throw new \InvalidArgumentException(sprintf('The GuaranteePayment property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GuaranteePayment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuaranteePayment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPaymentsType
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
