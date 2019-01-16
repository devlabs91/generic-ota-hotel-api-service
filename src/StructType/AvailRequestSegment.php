<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailRequestSegment StructType
 * Meta informations extracted from the WSDL
 * - documentation: To accommodate the ability to perform multiple requests within one message, the availability request contains the repeating element, AvailRequestSegment. Each segment includes a collection of criteria that requests a bookable entity,
 * which may include designated rate plans, room types, amenities or services, and the request can be used for guest rooms or other inventory items for which availability is sought. Each segment would be presumed to have a unique date range for each
 * request.
 * @subpackage Structs
 */
class AvailRequestSegment extends AbstractStructBase
{
    /**
     * The StayDateRange
     * Meta informations extracted from the WSDL
     * - documentation: Range of dates, or fixed set of dates for Availability Request. Date range can also be specified by using start dates and number of nights (minimum, maximum or fixed). **This element is maintained at this level to support those who
     * have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\DateTimeSpanType
     */
    public $StayDateRange;
    /**
     * The RateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RateRange[]
     */
    public $RateRange;
    /**
     * The RatePlanCandidates
     * Meta informations extracted from the WSDL
     * - documentation: **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.**
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidatesType
     */
    public $RatePlanCandidates;
    /**
     * The Profiles
     * Meta informations extracted from the WSDL
     * - documentation: A collection of profile objects or unique IDs of profiles. **This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under
     * HotelSearchCriteria.**
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ProfilesType
     */
    public $Profiles;
    /**
     * The RoomStayCandidates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidates
     */
    public $RoomStayCandidates;
    /**
     * The HotelSearchCriteria
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriteria
     */
    public $HotelSearchCriteria;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The AvailReqType
     * @var string
     */
    public $AvailReqType;
    /**
     * The MoreDataEchoToken
     * Meta informations extracted from the WSDL
     * - documentation: The availability response returns the attribute if there were additional rates that could not fit within the availability response. The text value should be echoed in this availability request to indicate where to begin the next
     * block of availability data. | Used for Character Strings, length 1 to 128.
     * - maxLength: 128
     * - minLength: 1
     * @var string
     */
    public $MoreDataEchoToken;
    /**
     * The InfoSource
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify the source of the data being exchanged as determined by trading partners. | Used to specify the source of the data being exchanged.
     * - use: optional
     * - maxLength: 32
     * - minLength: 1
     * @var string
     */
    public $InfoSource;
    /**
     * The ResponseType
     * @var string
     */
    public $ResponseType;
    /**
     * Constructor method for AvailRequestSegment
     * @uses AvailRequestSegment::setStayDateRange()
     * @uses AvailRequestSegment::setRateRange()
     * @uses AvailRequestSegment::setRatePlanCandidates()
     * @uses AvailRequestSegment::setProfiles()
     * @uses AvailRequestSegment::setRoomStayCandidates()
     * @uses AvailRequestSegment::setHotelSearchCriteria()
     * @uses AvailRequestSegment::setTPA_Extensions()
     * @uses AvailRequestSegment::setAvailReqType()
     * @uses AvailRequestSegment::setMoreDataEchoToken()
     * @uses AvailRequestSegment::setInfoSource()
     * @uses AvailRequestSegment::setResponseType()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DateTimeSpanType $stayDateRange
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateRange[] $rateRange
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidatesType $ratePlanCandidates
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProfilesType $profiles
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidates $roomStayCandidates
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriteria $hotelSearchCriteria
     * @param mixed $tPA_Extensions
     * @param string $availReqType
     * @param string $moreDataEchoToken
     * @param string $infoSource
     * @param string $responseType
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\DateTimeSpanType $stayDateRange = null, array $rateRange = array(), \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidatesType $ratePlanCandidates = null, \Devlabs91\GenericOtaHotelApiService\StructType\ProfilesType $profiles = null, \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidates $roomStayCandidates = null, \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriteria $hotelSearchCriteria = null, $tPA_Extensions = null, $availReqType = null, $moreDataEchoToken = null, $infoSource = null, $responseType = null)
    {
        $this
            ->setStayDateRange($stayDateRange)
            ->setRateRange($rateRange)
            ->setRatePlanCandidates($ratePlanCandidates)
            ->setProfiles($profiles)
            ->setRoomStayCandidates($roomStayCandidates)
            ->setHotelSearchCriteria($hotelSearchCriteria)
            ->setTPA_Extensions($tPA_Extensions)
            ->setAvailReqType($availReqType)
            ->setMoreDataEchoToken($moreDataEchoToken)
            ->setInfoSource($infoSource)
            ->setResponseType($responseType);
    }
    /**
     * Get StayDateRange value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DateTimeSpanType|null
     */
    public function getStayDateRange()
    {
        return $this->StayDateRange;
    }
    /**
     * Set StayDateRange value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DateTimeSpanType $stayDateRange
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment
     */
    public function setStayDateRange(\Devlabs91\GenericOtaHotelApiService\StructType\DateTimeSpanType $stayDateRange = null)
    {
        $this->StayDateRange = $stayDateRange;
        return $this;
    }
    /**
     * Get RateRange value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRange[]|null
     */
    public function getRateRange()
    {
        return $this->RateRange;
    }
    /**
     * Set RateRange value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateRange[] $rateRange
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment
     */
    public function setRateRange(array $rateRange = array())
    {
        foreach ($rateRange as $availRequestSegmentRateRangeItem) {
            // validation for constraint: itemType
            if (!$availRequestSegmentRateRangeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RateRange) {
                throw new \InvalidArgumentException(sprintf('The RateRange property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RateRange, "%s" given', is_object($availRequestSegmentRateRangeItem) ? get_class($availRequestSegmentRateRangeItem) : gettype($availRequestSegmentRateRangeItem)), __LINE__);
            }
        }
        $this->RateRange = $rateRange;
        return $this;
    }
    /**
     * Add item to RateRange value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateRange $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment
     */
    public function addToRateRange(\Devlabs91\GenericOtaHotelApiService\StructType\RateRange $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RateRange) {
            throw new \InvalidArgumentException(sprintf('The RateRange property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RateRange, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RateRange[] = $item;
        return $this;
    }
    /**
     * Get RatePlanCandidates value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidatesType|null
     */
    public function getRatePlanCandidates()
    {
        return $this->RatePlanCandidates;
    }
    /**
     * Set RatePlanCandidates value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidatesType $ratePlanCandidates
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment
     */
    public function setRatePlanCandidates(\Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidatesType $ratePlanCandidates = null)
    {
        $this->RatePlanCandidates = $ratePlanCandidates;
        return $this;
    }
    /**
     * Get Profiles value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfilesType|null
     */
    public function getProfiles()
    {
        return $this->Profiles;
    }
    /**
     * Set Profiles value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProfilesType $profiles
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment
     */
    public function setProfiles(\Devlabs91\GenericOtaHotelApiService\StructType\ProfilesType $profiles = null)
    {
        $this->Profiles = $profiles;
        return $this;
    }
    /**
     * Get RoomStayCandidates value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidates|null
     */
    public function getRoomStayCandidates()
    {
        return $this->RoomStayCandidates;
    }
    /**
     * Set RoomStayCandidates value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidates $roomStayCandidates
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment
     */
    public function setRoomStayCandidates(\Devlabs91\GenericOtaHotelApiService\StructType\RoomStayCandidates $roomStayCandidates = null)
    {
        $this->RoomStayCandidates = $roomStayCandidates;
        return $this;
    }
    /**
     * Get HotelSearchCriteria value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriteria|null
     */
    public function getHotelSearchCriteria()
    {
        return $this->HotelSearchCriteria;
    }
    /**
     * Set HotelSearchCriteria value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriteria $hotelSearchCriteria
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment
     */
    public function setHotelSearchCriteria(\Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriteria $hotelSearchCriteria = null)
    {
        $this->HotelSearchCriteria = $hotelSearchCriteria;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get AvailReqType value
     * @return string|null
     */
    public function getAvailReqType()
    {
        return $this->AvailReqType;
    }
    /**
     * Set AvailReqType value
     * @param string $availReqType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment
     */
    public function setAvailReqType($availReqType = null)
    {
        // validation for constraint: string
        if (!is_null($availReqType) && !is_string($availReqType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($availReqType)), __LINE__);
        }
        $this->AvailReqType = $availReqType;
        return $this;
    }
    /**
     * Get MoreDataEchoToken value
     * @return string|null
     */
    public function getMoreDataEchoToken()
    {
        return $this->MoreDataEchoToken;
    }
    /**
     * Set MoreDataEchoToken value
     * @param string $moreDataEchoToken
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment
     */
    public function setMoreDataEchoToken($moreDataEchoToken = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($moreDataEchoToken) && strlen($moreDataEchoToken) > 128) || (is_array($moreDataEchoToken) && count($moreDataEchoToken) > 128)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 128 element(s) or a scalar of 128 character(s) at most, "%d" length given', is_scalar($moreDataEchoToken) ? strlen($moreDataEchoToken) : count($moreDataEchoToken)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($moreDataEchoToken) && strlen($moreDataEchoToken) < 1) || (is_array($moreDataEchoToken) && count($moreDataEchoToken) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($moreDataEchoToken) && !is_string($moreDataEchoToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($moreDataEchoToken)), __LINE__);
        }
        $this->MoreDataEchoToken = $moreDataEchoToken;
        return $this;
    }
    /**
     * Get InfoSource value
     * @return string|null
     */
    public function getInfoSource()
    {
        return $this->InfoSource;
    }
    /**
     * Set InfoSource value
     * @param string $infoSource
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment
     */
    public function setInfoSource($infoSource = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($infoSource) && strlen($infoSource) > 32) || (is_array($infoSource) && count($infoSource) > 32)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 32 element(s) or a scalar of 32 character(s) at most, "%d" length given', is_scalar($infoSource) ? strlen($infoSource) : count($infoSource)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($infoSource) && strlen($infoSource) < 1) || (is_array($infoSource) && count($infoSource) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($infoSource) && !is_string($infoSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($infoSource)), __LINE__);
        }
        $this->InfoSource = $infoSource;
        return $this;
    }
    /**
     * Get ResponseType value
     * @return string|null
     */
    public function getResponseType()
    {
        return $this->ResponseType;
    }
    /**
     * Set ResponseType value
     * @param string $responseType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment
     */
    public function setResponseType($responseType = null)
    {
        // validation for constraint: string
        if (!is_null($responseType) && !is_string($responseType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($responseType)), __LINE__);
        }
        $this->ResponseType = $responseType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegment
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
