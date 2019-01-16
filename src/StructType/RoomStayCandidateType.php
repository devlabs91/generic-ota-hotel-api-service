<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomStayCandidateType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to identify available room products. | Identifies the dates when the RoomStayCandidate is applicable when there are multiple room stay requirements within a StayDateRange.
 * @subpackage Structs
 */
class RoomStayCandidateType extends AbstractStructBase
{
    /**
     * The GuestCounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $GuestCounts;
    /**
     * The RoomAmenity
     * Meta informations extracted from the WSDL
     * - documentation: This element is used to pass room attributes. Typical attributes are smoking, non-smoking, wheelchair access, room location (low floor, high floor, close to elevator, etc) and view (garden, pool, ocean, etc.)
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $RoomAmenity;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for this room stay candidate.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The RatePlanCandidateRPH
     * Meta informations extracted from the WSDL
     * - documentation: Used to refer to the Rate Plan Candidate associated with this room stay.
     * - use: optional
     * @var string
     */
    public $RatePlanCandidateRPH;
    /**
     * The BookingCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify the booking code for which availability is requested.
     * - use: optional
     * @var string
     */
    public $BookingCode;
    /**
     * Constructor method for RoomStayCandidateType
     * @uses RoomStayCandidateType::setGuestCounts()
     * @uses RoomStayCandidateType::setRoomAmenity()
     * @uses RoomStayCandidateType::setRPH()
     * @uses RoomStayCandidateType::setRatePlanCandidateRPH()
     * @uses RoomStayCandidateType::setBookingCode()
     * @param mixed $guestCounts
     * @param mixed[] $roomAmenity
     * @param string $rPH
     * @param string $ratePlanCandidateRPH
     * @param string $bookingCode
     */
    public function __construct($guestCounts = null, array $roomAmenity = array(), $rPH = null, $ratePlanCandidateRPH = null, $bookingCode = null)
    {
        $this
            ->setGuestCounts($guestCounts)
            ->setRoomAmenity($roomAmenity)
            ->setRPH($rPH)
            ->setRatePlanCandidateRPH($ratePlanCandidateRPH)
            ->setBookingCode($bookingCode);
    }
    /**
     * Get GuestCounts value
     * @return mixed|null
     */
    public function getGuestCounts()
    {
        return $this->GuestCounts;
    }
    /**
     * Set GuestCounts value
     * @param mixed $guestCounts
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType
     */
    public function setGuestCounts($guestCounts = null)
    {
        $this->GuestCounts = $guestCounts;
        return $this;
    }
    /**
     * Get RoomAmenity value
     * @return mixed[]|null
     */
    public function getRoomAmenity()
    {
        return $this->RoomAmenity;
    }
    /**
     * Set RoomAmenity value
     * @throws \InvalidArgumentException
     * @param mixed[] $roomAmenity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType
     */
    public function setRoomAmenity(array $roomAmenity = array())
    {
        foreach ($roomAmenity as $roomStayCandidateTypeRoomAmenityItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RoomAmenity property can only contain items of anyType, "%s" given', is_object($roomStayCandidateTypeRoomAmenityItem) ? get_class($roomStayCandidateTypeRoomAmenityItem) : gettype($roomStayCandidateTypeRoomAmenityItem)), __LINE__);
            }
        }
        $this->RoomAmenity = $roomAmenity;
        return $this;
    }
    /**
     * Add item to RoomAmenity value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType
     */
    public function addToRoomAmenity($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RoomAmenity property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomAmenity[] = $item;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get RatePlanCandidateRPH value
     * @return string|null
     */
    public function getRatePlanCandidateRPH()
    {
        return $this->RatePlanCandidateRPH;
    }
    /**
     * Set RatePlanCandidateRPH value
     * @param string $ratePlanCandidateRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType
     */
    public function setRatePlanCandidateRPH($ratePlanCandidateRPH = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanCandidateRPH) && !is_string($ratePlanCandidateRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanCandidateRPH)), __LINE__);
        }
        $this->RatePlanCandidateRPH = $ratePlanCandidateRPH;
        return $this;
    }
    /**
     * Get BookingCode value
     * @return string|null
     */
    public function getBookingCode()
    {
        return $this->BookingCode;
    }
    /**
     * Set BookingCode value
     * @param string $bookingCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType
     */
    public function setBookingCode($bookingCode = null)
    {
        // validation for constraint: string
        if (!is_null($bookingCode) && !is_string($bookingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingCode)), __LINE__);
        }
        $this->BookingCode = $bookingCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidateType
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
