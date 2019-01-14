<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequiredPaymentsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of RequiredPayment.
 * @subpackage Structs
 */
class RequiredPaymentsType extends AbstractStructBase
{
    /**
     * The RequiredPayment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment[]
     */
    public $RequiredPayment;
    /**
     * Constructor method for RequiredPaymentsType
     * @uses RequiredPaymentsType::setRequiredPayment()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment[] $requiredPayment
     */
    public function __construct(array $requiredPayment = array())
    {
        $this
            ->setRequiredPayment($requiredPayment);
    }
    /**
     * Get RequiredPayment value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment[]|null
     */
    public function getRequiredPayment()
    {
        return $this->RequiredPayment;
    }
    /**
     * Set RequiredPayment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment[] $requiredPayment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPaymentsType
     */
    public function setRequiredPayment(array $requiredPayment = array())
    {
        foreach ($requiredPayment as $requiredPaymentsTypeRequiredPaymentItem) {
            // validation for constraint: itemType
            if (!$requiredPaymentsTypeRequiredPaymentItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment) {
                throw new \InvalidArgumentException(sprintf('The RequiredPayment property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment, "%s" given', is_object($requiredPaymentsTypeRequiredPaymentItem) ? get_class($requiredPaymentsTypeRequiredPaymentItem) : gettype($requiredPaymentsTypeRequiredPaymentItem)), __LINE__);
            }
        }
        $this->RequiredPayment = $requiredPayment;
        return $this;
    }
    /**
     * Add item to RequiredPayment value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPaymentsType
     */
    public function addToRequiredPayment(\Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment) {
            throw new \InvalidArgumentException(sprintf('The RequiredPayment property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RequiredPayment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RequiredPayment[] = $item;
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
