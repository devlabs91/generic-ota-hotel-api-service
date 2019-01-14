<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CruiseGuestInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains guest information for the specified sailing.
 * @subpackage Structs
 */
class CruiseGuestInfoType extends AbstractStructBase
{
    /**
     * The ReservationID
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the reservation control information or the guest's booking ID in modification mode (e.g. PNR Record Locator and/or Vendor Confirmation Number).
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $ReservationID;
    /**
     * The GuestDetails
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\GuestDetails
     */
    public $GuestDetails;
    /**
     * The LinkedBookings
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBookings
     */
    public $LinkedBookings;
    /**
     * The PaymentOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOptions
     */
    public $PaymentOptions;
    /**
     * The CancellationPenalty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CancellationPenalty
     */
    public $CancellationPenalty;
    /**
     * Constructor method for CruiseGuestInfoType
     * @uses CruiseGuestInfoType::setReservationID()
     * @uses CruiseGuestInfoType::setGuestDetails()
     * @uses CruiseGuestInfoType::setLinkedBookings()
     * @uses CruiseGuestInfoType::setPaymentOptions()
     * @uses CruiseGuestInfoType::setCancellationPenalty()
     * @param mixed[] $reservationID
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestDetails $guestDetails
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBookings $linkedBookings
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOptions $paymentOptions
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CancellationPenalty $cancellationPenalty
     */
    public function __construct(array $reservationID = array(), \Devlabs91\GenericOtaHotelApiService\StructType\GuestDetails $guestDetails = null, \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBookings $linkedBookings = null, \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOptions $paymentOptions = null, \Devlabs91\GenericOtaHotelApiService\StructType\CancellationPenalty $cancellationPenalty = null)
    {
        $this
            ->setReservationID($reservationID)
            ->setGuestDetails($guestDetails)
            ->setLinkedBookings($linkedBookings)
            ->setPaymentOptions($paymentOptions)
            ->setCancellationPenalty($cancellationPenalty);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestInfoType
     */
    public function setReservationID(array $reservationID = array())
    {
        foreach ($reservationID as $cruiseGuestInfoTypeReservationIDItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The ReservationID property can only contain items of anyType, "%s" given', is_object($cruiseGuestInfoTypeReservationIDItem) ? get_class($cruiseGuestInfoTypeReservationIDItem) : gettype($cruiseGuestInfoTypeReservationIDItem)), __LINE__);
            }
        }
        $this->ReservationID = $reservationID;
        return $this;
    }
    /**
     * Add item to ReservationID value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestInfoType
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
     * Get GuestDetails value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestDetails|null
     */
    public function getGuestDetails()
    {
        return $this->GuestDetails;
    }
    /**
     * Set GuestDetails value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestDetails $guestDetails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestInfoType
     */
    public function setGuestDetails(\Devlabs91\GenericOtaHotelApiService\StructType\GuestDetails $guestDetails = null)
    {
        $this->GuestDetails = $guestDetails;
        return $this;
    }
    /**
     * Get LinkedBookings value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBookings|null
     */
    public function getLinkedBookings()
    {
        return $this->LinkedBookings;
    }
    /**
     * Set LinkedBookings value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBookings $linkedBookings
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestInfoType
     */
    public function setLinkedBookings(\Devlabs91\GenericOtaHotelApiService\StructType\LinkedBookings $linkedBookings = null)
    {
        $this->LinkedBookings = $linkedBookings;
        return $this;
    }
    /**
     * Get PaymentOptions value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOptions|null
     */
    public function getPaymentOptions()
    {
        return $this->PaymentOptions;
    }
    /**
     * Set PaymentOptions value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PaymentOptions $paymentOptions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestInfoType
     */
    public function setPaymentOptions(\Devlabs91\GenericOtaHotelApiService\StructType\PaymentOptions $paymentOptions = null)
    {
        $this->PaymentOptions = $paymentOptions;
        return $this;
    }
    /**
     * Get CancellationPenalty value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CancellationPenalty|null
     */
    public function getCancellationPenalty()
    {
        return $this->CancellationPenalty;
    }
    /**
     * Set CancellationPenalty value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CancellationPenalty $cancellationPenalty
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestInfoType
     */
    public function setCancellationPenalty(\Devlabs91\GenericOtaHotelApiService\StructType\CancellationPenalty $cancellationPenalty = null)
    {
        $this->CancellationPenalty = $cancellationPenalty;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruiseGuestInfoType
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
