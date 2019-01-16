<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecipientInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contact and/or reservation information pertaining to the recipient.
 * @subpackage Structs
 */
class RecipientInfo extends ContactPersonType
{
    /**
     * The ReservationID
     * Meta informations extracted from the WSDL
     * - documentation: Provides the reservation number of the recipient for delivery of the product.
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $ReservationID;
    /**
     * The ShippingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ShippingInfo
     */
    public $ShippingInfo;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Comments
     */
    public $Comments;
    /**
     * Constructor method for RecipientInfo
     * @uses RecipientInfo::setReservationID()
     * @uses RecipientInfo::setShippingInfo()
     * @uses RecipientInfo::setComments()
     * @param mixed[] $reservationID
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ShippingInfo $shippingInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Comments $comments
     */
    public function __construct(array $reservationID = array(), \Devlabs91\GenericOtaHotelApiService\StructType\ShippingInfo $shippingInfo = null, \Devlabs91\GenericOtaHotelApiService\StructType\Comments $comments = null)
    {
        $this
            ->setReservationID($reservationID)
            ->setShippingInfo($shippingInfo)
            ->setComments($comments);
    }
    /**
     * Get ReservationID value
     * @return mixed[]|null
     */
    public function getReservationID()
    {
        return $this->ReservationID;
    }
    /**
     * Set ReservationID value
     * @throws \InvalidArgumentException
     * @param mixed[] $reservationID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecipientInfo
     */
    public function setReservationID(array $reservationID = array())
    {
        foreach ($reservationID as $recipientInfoReservationIDItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The ReservationID property can only contain items of anyType, "%s" given', is_object($recipientInfoReservationIDItem) ? get_class($recipientInfoReservationIDItem) : gettype($recipientInfoReservationIDItem)), __LINE__);
            }
        }
        $this->ReservationID = $reservationID;
        return $this;
    }
    /**
     * Add item to ReservationID value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecipientInfo
     */
    public function addToReservationID($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The ReservationID property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ReservationID[] = $item;
        return $this;
    }
    /**
     * Get ShippingInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ShippingInfo|null
     */
    public function getShippingInfo()
    {
        return $this->ShippingInfo;
    }
    /**
     * Set ShippingInfo value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ShippingInfo $shippingInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecipientInfo
     */
    public function setShippingInfo(\Devlabs91\GenericOtaHotelApiService\StructType\ShippingInfo $shippingInfo = null)
    {
        $this->ShippingInfo = $shippingInfo;
        return $this;
    }
    /**
     * Get Comments value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Comments|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Comments $comments
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecipientInfo
     */
    public function setComments(\Devlabs91\GenericOtaHotelApiService\StructType\Comments $comments = null)
    {
        $this->Comments = $comments;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecipientInfo
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
