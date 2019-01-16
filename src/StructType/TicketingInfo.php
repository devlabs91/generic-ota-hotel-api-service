<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketingInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for TicketingInfoRS_Type.
 * @subpackage Structs
 */
class TicketingInfo extends TicketingInfoRS_Type
{
    /**
     * The DeliveryInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\DeliveryInfo[]
     */
    public $DeliveryInfo;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the allowable forms of payment (i.e., check, cash, credit card). Refer to OpenTravel Code List Payment Type (PMT).
     * - use: optional
     * @var string
     */
    public $PaymentType;
    /**
     * Constructor method for TicketingInfo
     * @uses TicketingInfo::setDeliveryInfo()
     * @uses TicketingInfo::setPaymentType()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DeliveryInfo[] $deliveryInfo
     * @param string $paymentType
     */
    public function __construct(array $deliveryInfo = array(), $paymentType = null)
    {
        $this
            ->setDeliveryInfo($deliveryInfo)
            ->setPaymentType($paymentType);
    }
    /**
     * Get DeliveryInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DeliveryInfo[]|null
     */
    public function getDeliveryInfo()
    {
        return $this->DeliveryInfo;
    }
    /**
     * Set DeliveryInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DeliveryInfo[] $deliveryInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfo
     */
    public function setDeliveryInfo(array $deliveryInfo = array())
    {
        foreach ($deliveryInfo as $ticketingInfoDeliveryInfoItem) {
            // validation for constraint: itemType
            if (!$ticketingInfoDeliveryInfoItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\DeliveryInfo) {
                throw new \InvalidArgumentException(sprintf('The DeliveryInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\DeliveryInfo, "%s" given', is_object($ticketingInfoDeliveryInfoItem) ? get_class($ticketingInfoDeliveryInfoItem) : gettype($ticketingInfoDeliveryInfoItem)), __LINE__);
            }
        }
        $this->DeliveryInfo = $deliveryInfo;
        return $this;
    }
    /**
     * Add item to DeliveryInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DeliveryInfo $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfo
     */
    public function addToDeliveryInfo(\Devlabs91\GenericOtaHotelApiService\StructType\DeliveryInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\DeliveryInfo) {
            throw new \InvalidArgumentException(sprintf('The DeliveryInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\DeliveryInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DeliveryInfo[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfo
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfo
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
