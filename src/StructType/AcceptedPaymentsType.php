<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcceptedPaymentsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to define the types of payments accepted.
 * @subpackage Structs
 */
class AcceptedPaymentsType extends AbstractStructBase
{
    /**
     * The AcceptedPayment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $AcceptedPayment;
    /**
     * Constructor method for AcceptedPaymentsType
     * @uses AcceptedPaymentsType::setAcceptedPayment()
     * @param mixed[] $acceptedPayment
     */
    public function __construct(array $acceptedPayment = array())
    {
        $this
            ->setAcceptedPayment($acceptedPayment);
    }
    /**
     * Get AcceptedPayment value
     * @return mixed[]|null
     */
    public function getAcceptedPayment()
    {
        return $this->AcceptedPayment;
    }
    /**
     * Set AcceptedPayment value
     * @throws \InvalidArgumentException
     * @param mixed[] $acceptedPayment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptedPaymentsType
     */
    public function setAcceptedPayment(array $acceptedPayment = array())
    {
        foreach ($acceptedPayment as $acceptedPaymentsTypeAcceptedPaymentItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AcceptedPayment property can only contain items of anyType, "%s" given', is_object($acceptedPaymentsTypeAcceptedPaymentItem) ? get_class($acceptedPaymentsTypeAcceptedPaymentItem) : gettype($acceptedPaymentsTypeAcceptedPaymentItem)), __LINE__);
            }
        }
        $this->AcceptedPayment = $acceptedPayment;
        return $this;
    }
    /**
     * Add item to AcceptedPayment value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptedPaymentsType
     */
    public function addToAcceptedPayment($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AcceptedPayment property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AcceptedPayment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptedPaymentsType
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
