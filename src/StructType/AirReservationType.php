<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirReservationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains all booking response information pertaining to a completed reservation.
 * @subpackage Structs
 */
class AirReservationType extends AbstractStructBase
{
    /**
     * The AirItinerary
     * Meta informations extracted from the WSDL
     * - documentation: A collection of all flight segments requested for booking.
     * - minOccurs: 0
     * @var mixed
     */
    public $AirItinerary;
    /**
     * The PriceInfo
     * Meta informations extracted from the WSDL
     * - documentation: Pricing information for the air itinerary to be booked e.g. this data could come from the OTA_AirPriceRS data.
     * - minOccurs: 0
     * @var mixed
     */
    public $PriceInfo;
    /**
     * The TravelerInfo
     * Meta informations extracted from the WSDL
     * - documentation: All traveler information relevant to a booking request.
     * - minOccurs: 0
     * @var mixed
     */
    public $TravelerInfo;
    /**
     * The Fulfillment
     * Meta informations extracted from the WSDL
     * - documentation: All payment information relevant to a booking request.
     * - minOccurs: 0
     * @var mixed
     */
    public $Fulfillment;
    /**
     * The Ticketing
     * Meta informations extracted from the WSDL
     * - documentation: Information used to specify the ticketing arrangement or a summary of the associated ticket(s).
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Ticketing;
    /**
     * The Queues
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Queues
     */
    public $Queues;
    /**
     * The BookingReferenceID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\BookingReferenceID[]
     */
    public $BookingReferenceID;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - documentation: Textual information for the reservation.
     * - minOccurs: 0
     * @var mixed
     */
    public $Comment;
    /**
     * The PricingOverview
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview
     */
    public $PricingOverview;
    /**
     * The LastModified
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the date the reservation was last modified.
     * - use: optional
     * @var string
     */
    public $LastModified;
    /**
     * Constructor method for AirReservationType
     * @uses AirReservationType::setAirItinerary()
     * @uses AirReservationType::setPriceInfo()
     * @uses AirReservationType::setTravelerInfo()
     * @uses AirReservationType::setFulfillment()
     * @uses AirReservationType::setTicketing()
     * @uses AirReservationType::setQueues()
     * @uses AirReservationType::setBookingReferenceID()
     * @uses AirReservationType::setComment()
     * @uses AirReservationType::setPricingOverview()
     * @uses AirReservationType::setLastModified()
     * @param mixed $airItinerary
     * @param mixed $priceInfo
     * @param mixed $travelerInfo
     * @param mixed $fulfillment
     * @param mixed[] $ticketing
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Queues $queues
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BookingReferenceID[] $bookingReferenceID
     * @param mixed $comment
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview $pricingOverview
     * @param string $lastModified
     */
    public function __construct($airItinerary = null, $priceInfo = null, $travelerInfo = null, $fulfillment = null, array $ticketing = array(), \Devlabs91\GenericOtaHotelApiService\StructType\Queues $queues = null, array $bookingReferenceID = array(), $comment = null, \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview $pricingOverview = null, $lastModified = null)
    {
        $this
            ->setAirItinerary($airItinerary)
            ->setPriceInfo($priceInfo)
            ->setTravelerInfo($travelerInfo)
            ->setFulfillment($fulfillment)
            ->setTicketing($ticketing)
            ->setQueues($queues)
            ->setBookingReferenceID($bookingReferenceID)
            ->setComment($comment)
            ->setPricingOverview($pricingOverview)
            ->setLastModified($lastModified);
    }
    /**
     * Get AirItinerary value
     * @return mixed|null
     */
    public function getAirItinerary()
    {
        return $this->AirItinerary;
    }
    /**
     * Set AirItinerary value
     * @param mixed $airItinerary
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirReservationType
     */
    public function setAirItinerary($airItinerary = null)
    {
        $this->AirItinerary = $airItinerary;
        return $this;
    }
    /**
     * Get PriceInfo value
     * @return mixed|null
     */
    public function getPriceInfo()
    {
        return $this->PriceInfo;
    }
    /**
     * Set PriceInfo value
     * @param mixed $priceInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirReservationType
     */
    public function setPriceInfo($priceInfo = null)
    {
        $this->PriceInfo = $priceInfo;
        return $this;
    }
    /**
     * Get TravelerInfo value
     * @return mixed|null
     */
    public function getTravelerInfo()
    {
        return $this->TravelerInfo;
    }
    /**
     * Set TravelerInfo value
     * @param mixed $travelerInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirReservationType
     */
    public function setTravelerInfo($travelerInfo = null)
    {
        $this->TravelerInfo = $travelerInfo;
        return $this;
    }
    /**
     * Get Fulfillment value
     * @return mixed|null
     */
    public function getFulfillment()
    {
        return $this->Fulfillment;
    }
    /**
     * Set Fulfillment value
     * @param mixed $fulfillment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirReservationType
     */
    public function setFulfillment($fulfillment = null)
    {
        $this->Fulfillment = $fulfillment;
        return $this;
    }
    /**
     * Get Ticketing value
     * @return mixed[]|null
     */
    public function getTicketing()
    {
        return $this->Ticketing;
    }
    /**
     * Set Ticketing value
     * @throws \InvalidArgumentException
     * @param mixed[] $ticketing
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirReservationType
     */
    public function setTicketing(array $ticketing = array())
    {
        foreach ($ticketing as $airReservationTypeTicketingItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Ticketing property can only contain items of anyType, "%s" given', is_object($airReservationTypeTicketingItem) ? get_class($airReservationTypeTicketingItem) : gettype($airReservationTypeTicketingItem)), __LINE__);
            }
        }
        $this->Ticketing = $ticketing;
        return $this;
    }
    /**
     * Add item to Ticketing value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirReservationType
     */
    public function addToTicketing($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Ticketing property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Ticketing[] = $item;
        return $this;
    }
    /**
     * Get Queues value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Queues|null
     */
    public function getQueues()
    {
        return $this->Queues;
    }
    /**
     * Set Queues value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Queues $queues
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirReservationType
     */
    public function setQueues(\Devlabs91\GenericOtaHotelApiService\StructType\Queues $queues = null)
    {
        $this->Queues = $queues;
        return $this;
    }
    /**
     * Get BookingReferenceID value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingReferenceID[]|null
     */
    public function getBookingReferenceID()
    {
        return $this->BookingReferenceID;
    }
    /**
     * Set BookingReferenceID value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BookingReferenceID[] $bookingReferenceID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirReservationType
     */
    public function setBookingReferenceID(array $bookingReferenceID = array())
    {
        foreach ($bookingReferenceID as $airReservationTypeBookingReferenceIDItem) {
            // validation for constraint: itemType
            if (!$airReservationTypeBookingReferenceIDItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\BookingReferenceID) {
                throw new \InvalidArgumentException(sprintf('The BookingReferenceID property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\BookingReferenceID, "%s" given', is_object($airReservationTypeBookingReferenceIDItem) ? get_class($airReservationTypeBookingReferenceIDItem) : gettype($airReservationTypeBookingReferenceIDItem)), __LINE__);
            }
        }
        $this->BookingReferenceID = $bookingReferenceID;
        return $this;
    }
    /**
     * Add item to BookingReferenceID value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BookingReferenceID $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirReservationType
     */
    public function addToBookingReferenceID(\Devlabs91\GenericOtaHotelApiService\StructType\BookingReferenceID $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\BookingReferenceID) {
            throw new \InvalidArgumentException(sprintf('The BookingReferenceID property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\BookingReferenceID, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookingReferenceID[] = $item;
        return $this;
    }
    /**
     * Get Comment value
     * @return mixed|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param mixed $comment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirReservationType
     */
    public function setComment($comment = null)
    {
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get PricingOverview value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview|null
     */
    public function getPricingOverview()
    {
        return $this->PricingOverview;
    }
    /**
     * Set PricingOverview value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview $pricingOverview
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirReservationType
     */
    public function setPricingOverview(\Devlabs91\GenericOtaHotelApiService\StructType\PricingOverview $pricingOverview = null)
    {
        $this->PricingOverview = $pricingOverview;
        return $this;
    }
    /**
     * Get LastModified value
     * @return string|null
     */
    public function getLastModified()
    {
        return $this->LastModified;
    }
    /**
     * Set LastModified value
     * @param string $lastModified
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirReservationType
     */
    public function setLastModified($lastModified = null)
    {
        // validation for constraint: string
        if (!is_null($lastModified) && !is_string($lastModified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastModified)), __LINE__);
        }
        $this->LastModified = $lastModified;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirReservationType
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
