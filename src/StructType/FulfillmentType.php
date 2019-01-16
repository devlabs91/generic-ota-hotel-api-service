<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfillmentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Payment information relevant to a booking.
 * @subpackage Structs
 */
class FulfillmentType extends AbstractStructBase
{
    /**
     * The PaymentDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetails
     */
    public $PaymentDetails;
    /**
     * The DeliveryAddress
     * Meta informations extracted from the WSDL
     * - documentation: Ticket delivery information for the booking request.
     * - minOccurs: 0
     * @var mixed
     */
    public $DeliveryAddress;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Purchaser name details
     * - minOccurs: 0
     * @var mixed
     */
    public $Name;
    /**
     * The Receipt
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Receipt
     */
    public $Receipt;
    /**
     * The PaymentText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PaymentText[]
     */
    public $PaymentText;
    /**
     * Constructor method for FulfillmentType
     * @uses FulfillmentType::setPaymentDetails()
     * @uses FulfillmentType::setDeliveryAddress()
     * @uses FulfillmentType::setName()
     * @uses FulfillmentType::setReceipt()
     * @uses FulfillmentType::setPaymentText()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetails $paymentDetails
     * @param mixed $deliveryAddress
     * @param mixed $name
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Receipt $receipt
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentText[] $paymentText
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetails $paymentDetails = null, $deliveryAddress = null, $name = null, \Devlabs91\GenericOtaHotelApiService\StructType\Receipt $receipt = null, array $paymentText = array())
    {
        $this
            ->setPaymentDetails($paymentDetails)
            ->setDeliveryAddress($deliveryAddress)
            ->setName($name)
            ->setReceipt($receipt)
            ->setPaymentText($paymentText);
    }
    /**
     * Get PaymentDetails value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetails|null
     */
    public function getPaymentDetails()
    {
        return $this->PaymentDetails;
    }
    /**
     * Set PaymentDetails value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetails $paymentDetails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FulfillmentType
     */
    public function setPaymentDetails(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetails $paymentDetails = null)
    {
        $this->PaymentDetails = $paymentDetails;
        return $this;
    }
    /**
     * Get DeliveryAddress value
     * @return mixed|null
     */
    public function getDeliveryAddress()
    {
        return $this->DeliveryAddress;
    }
    /**
     * Set DeliveryAddress value
     * @param mixed $deliveryAddress
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FulfillmentType
     */
    public function setDeliveryAddress($deliveryAddress = null)
    {
        $this->DeliveryAddress = $deliveryAddress;
        return $this;
    }
    /**
     * Get Name value
     * @return mixed|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param mixed $name
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FulfillmentType
     */
    public function setName($name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Receipt value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Receipt|null
     */
    public function getReceipt()
    {
        return $this->Receipt;
    }
    /**
     * Set Receipt value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Receipt $receipt
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FulfillmentType
     */
    public function setReceipt(\Devlabs91\GenericOtaHotelApiService\StructType\Receipt $receipt = null)
    {
        $this->Receipt = $receipt;
        return $this;
    }
    /**
     * Get PaymentText value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentText[]|null
     */
    public function getPaymentText()
    {
        return $this->PaymentText;
    }
    /**
     * Set PaymentText value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentText[] $paymentText
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FulfillmentType
     */
    public function setPaymentText(array $paymentText = array())
    {
        foreach ($paymentText as $fulfillmentTypePaymentTextItem) {
            // validation for constraint: itemType
            if (!$fulfillmentTypePaymentTextItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PaymentText) {
                throw new \InvalidArgumentException(sprintf('The PaymentText property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PaymentText, "%s" given', is_object($fulfillmentTypePaymentTextItem) ? get_class($fulfillmentTypePaymentTextItem) : gettype($fulfillmentTypePaymentTextItem)), __LINE__);
            }
        }
        $this->PaymentText = $paymentText;
        return $this;
    }
    /**
     * Add item to PaymentText value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentText $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FulfillmentType
     */
    public function addToPaymentText(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentText $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PaymentText) {
            throw new \InvalidArgumentException(sprintf('The PaymentText property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PaymentText, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentText[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FulfillmentType
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
