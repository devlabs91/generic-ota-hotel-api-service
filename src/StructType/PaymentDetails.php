<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentDetails StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for Payment Detail.
 * @subpackage Structs
 */
class PaymentDetails extends AbstractStructBase
{
    /**
     * The PaymentDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetail[]
     */
    public $PaymentDetail;
    /**
     * Constructor method for PaymentDetails
     * @uses PaymentDetails::setPaymentDetail()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetail[] $paymentDetail
     */
    public function __construct(array $paymentDetail = array())
    {
        $this
            ->setPaymentDetail($paymentDetail);
    }
    /**
     * Get PaymentDetail value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetail[]|null
     */
    public function getPaymentDetail()
    {
        return $this->PaymentDetail;
    }
    /**
     * Set PaymentDetail value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetail[] $paymentDetail
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetails
     */
    public function setPaymentDetail(array $paymentDetail = array())
    {
        foreach ($paymentDetail as $paymentDetailsPaymentDetailItem) {
            // validation for constraint: itemType
            if (!$paymentDetailsPaymentDetailItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetail) {
                throw new \InvalidArgumentException(sprintf('The PaymentDetail property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetail, "%s" given', is_object($paymentDetailsPaymentDetailItem) ? get_class($paymentDetailsPaymentDetailItem) : gettype($paymentDetailsPaymentDetailItem)), __LINE__);
            }
        }
        $this->PaymentDetail = $paymentDetail;
        return $this;
    }
    /**
     * Add item to PaymentDetail value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetail $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetails
     */
    public function addToPaymentDetail(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetail) {
            throw new \InvalidArgumentException(sprintf('The PaymentDetail property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PaymentDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentDetails
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
