<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomStay StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details the success, failure and warnings for the RoomStay. | Details on the Room Stay including Guest Counts, Time Span of this Room Stay, pointers to Res Guests, guest Memberships, Comments and Special Requests pertaining to this
 * particular Room Stay and finally finacial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties. | A collection of reference place holders. This is a reference placeholder, used as an index for the
 * reservation guests. | A collection of Hotel Service reference placeholders. | Details on the Room Stay including Guest Counts, Time Span of this Room Stay, and financial information related to the Room Stay, including Guarantee, Deposit and Payment
 * and Cancellation Penalties.
 * @subpackage Structs
 */
class RoomStay extends RoomStayType
{
    /**
     * The ResGuestRPHs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $ResGuestRPHs;
    /**
     * The Memberships
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Membership objects. Memberships provides a list of reward programs which may be credited with points accrued from the guest's activity.
     * - minOccurs: 0
     * @var mixed
     */
    public $Memberships;
    /**
     * The Comments
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Comment objects. Comments which apply to the whole Reservation or a particular Room Stay or Service.
     * - minOccurs: 0
     * @var mixed
     */
    public $Comments;
    /**
     * The SpecialRequests
     * Meta informations extracted from the WSDL
     * - documentation: The SpecialRequest object indicates special requests for the whole Reservation, or a particular Room Stay or Service.
     * - minOccurs: 0
     * @var mixed
     */
    public $SpecialRequests;
    /**
     * The ServiceRPHs
     * Meta informations extracted from the WSDL
     * - documentation: A container for the unique references to the services for the room stay.
     * - minOccurs: 0
     * @var mixed
     */
    public $ServiceRPHs;
    /**
     * The Reference
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Reference
     */
    public $Reference;
    /**
     * The BookingRules
     * Meta informations extracted from the WSDL
     * - documentation: Provides booking rule information for the room stay.
     * - minOccurs: 0
     * @var mixed
     */
    public $BookingRules;
    /**
     * The IndexNumber
     * Meta informations extracted from the WSDL
     * - documentation: A unique number (e.g. segment number or index number) used to further identify a booked item within a list of booked items.
     * - use: optional
     * @var string
     */
    public $IndexNumber;
    /**
     * The HotelReservationIDs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $HotelReservationIDs;
    /**
     * The RoomShares
     * Meta informations extracted from the WSDL
     * - documentation: Collection of shared rooms for room stay.
     * - minOccurs: 0
     * @var mixed
     */
    public $RoomShares;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: Provides a mechanism for uniquely identifying a room stay (e.g. this would be useful for a modification).
     * - minOccurs: 0
     * @var mixed
     */
    public $UniqueID;
    /**
     * The Success
     * @var mixed
     */
    public $Success;
    /**
     * The Warnings
     * @var mixed
     */
    public $Warnings;
    /**
     * The Errors
     * @var mixed
     */
    public $Errors;
    /**
     * The RoomStay
     * Meta informations extracted from the WSDL
     * - documentation: This attribute indicates the change to the reservation.
     * - use: optional
     * @var string
     */
    public $RoomStay;
    /**
     * The IsAlternate
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the RoomStay is an alternate offer. Default=false. | false
     * - use: optional
     * @var bool
     */
    public $IsAlternate;
    /**
     * The AvailabilityStatus
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify an availability status at the room stay level for a property.
     * - use: optional
     * @var string
     */
    public $AvailabilityStatus;
    /**
     * The RoomStayCandidateRPH
     * Meta informations extracted from the WSDL
     * - documentation: A reference to a requested room stay candidate from the SearchCriteria. | The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items (e.g. used to assign individual passengers or
     * clients to particular itinerary items).
     * - use: optional
     * - pattern: [0-9]{1,8}
     * @var string
     */
    public $RoomStayCandidateRPH;
    /**
     * The MoreDataEchoToken
     * Meta informations extracted from the WSDL
     * - documentation: The availability response returns the attribute if there is additional data that could not fit within the availability response. The text value should be echoed in the availability request to indicate where to begin the next block of
     * availability data. | Used for Character Strings, length 1 to 128.
     * - use: optional
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
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the room stay for use in the hotel stay. | The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items (e.g. used to assign individual passengers or clients to particular
     * itinerary items).
     * - use: optional
     * - pattern: [0-9]{1,8}
     * @var string
     */
    public $RPH;
    /**
     * The AvailableIndicator
     * Meta informations extracted from the WSDL
     * - documentation: May be used as a simple true/false to indicate availability or used in conjunction with @AvailabilityStatus to indicate if restricted rate qualifications have been met e.g. Exclusive and Available (true) vs. Exclusive but not
     * Available (false).
     * - use: optional
     * @var bool
     */
    public $AvailableIndicator;
    /**
     * The ResponseType
     * @var string
     */
    public $ResponseType;
    /**
     * Constructor method for RoomStay
     * @uses RoomStay::setResGuestRPHs()
     * @uses RoomStay::setMemberships()
     * @uses RoomStay::setComments()
     * @uses RoomStay::setSpecialRequests()
     * @uses RoomStay::setServiceRPHs()
     * @uses RoomStay::setReference()
     * @uses RoomStay::setBookingRules()
     * @uses RoomStay::setIndexNumber()
     * @uses RoomStay::setHotelReservationIDs()
     * @uses RoomStay::setRoomShares()
     * @uses RoomStay::setUniqueID()
     * @uses RoomStay::setSuccess()
     * @uses RoomStay::setWarnings()
     * @uses RoomStay::setErrors()
     * @uses RoomStay::setRoomStay()
     * @uses RoomStay::setIsAlternate()
     * @uses RoomStay::setAvailabilityStatus()
     * @uses RoomStay::setRoomStayCandidateRPH()
     * @uses RoomStay::setMoreDataEchoToken()
     * @uses RoomStay::setInfoSource()
     * @uses RoomStay::setRPH()
     * @uses RoomStay::setAvailableIndicator()
     * @uses RoomStay::setResponseType()
     * @param mixed $resGuestRPHs
     * @param mixed $memberships
     * @param mixed $comments
     * @param mixed $specialRequests
     * @param mixed $serviceRPHs
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Reference $reference
     * @param mixed $bookingRules
     * @param string $indexNumber
     * @param mixed $hotelReservationIDs
     * @param mixed $roomShares
     * @param mixed $uniqueID
     * @param mixed $success
     * @param mixed $warnings
     * @param mixed $errors
     * @param string $roomStay
     * @param bool $isAlternate
     * @param string $availabilityStatus
     * @param string $roomStayCandidateRPH
     * @param string $moreDataEchoToken
     * @param string $infoSource
     * @param string $rPH
     * @param bool $availableIndicator
     * @param string $responseType
     */
    public function __construct($resGuestRPHs = null, $memberships = null, $comments = null, $specialRequests = null, $serviceRPHs = null, \Devlabs91\GenericOtaHotelApiService\StructType\Reference $reference = null, $bookingRules = null, $indexNumber = null, $hotelReservationIDs = null, $roomShares = null, $uniqueID = null, $success = null, $warnings = null, $errors = null, $roomStay = null, $isAlternate = null, $availabilityStatus = null, $roomStayCandidateRPH = null, $moreDataEchoToken = null, $infoSource = null, $rPH = null, $availableIndicator = null, $responseType = null)
    {
        $this
            ->setResGuestRPHs($resGuestRPHs)
            ->setMemberships($memberships)
            ->setComments($comments)
            ->setSpecialRequests($specialRequests)
            ->setServiceRPHs($serviceRPHs)
            ->setReference($reference)
            ->setBookingRules($bookingRules)
            ->setIndexNumber($indexNumber)
            ->setHotelReservationIDs($hotelReservationIDs)
            ->setRoomShares($roomShares)
            ->setUniqueID($uniqueID)
            ->setSuccess($success)
            ->setWarnings($warnings)
            ->setErrors($errors)
            ->setRoomStay($roomStay)
            ->setIsAlternate($isAlternate)
            ->setAvailabilityStatus($availabilityStatus)
            ->setRoomStayCandidateRPH($roomStayCandidateRPH)
            ->setMoreDataEchoToken($moreDataEchoToken)
            ->setInfoSource($infoSource)
            ->setRPH($rPH)
            ->setAvailableIndicator($availableIndicator)
            ->setResponseType($responseType);
    }
    /**
     * Get ResGuestRPHs value
     * @return mixed|null
     */
    public function getResGuestRPHs()
    {
        return $this->ResGuestRPHs;
    }
    /**
     * Set ResGuestRPHs value
     * @param mixed $resGuestRPHs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setResGuestRPHs($resGuestRPHs = null)
    {
        $this->ResGuestRPHs = $resGuestRPHs;
        return $this;
    }
    /**
     * Get Memberships value
     * @return mixed|null
     */
    public function getMemberships()
    {
        return $this->Memberships;
    }
    /**
     * Set Memberships value
     * @param mixed $memberships
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setMemberships($memberships = null)
    {
        $this->Memberships = $memberships;
        return $this;
    }
    /**
     * Get Comments value
     * @return mixed|null
     */
    public function getComments()
    {
        return $this->Comments;
    }
    /**
     * Set Comments value
     * @param mixed $comments
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setComments($comments = null)
    {
        $this->Comments = $comments;
        return $this;
    }
    /**
     * Get SpecialRequests value
     * @return mixed|null
     */
    public function getSpecialRequests()
    {
        return $this->SpecialRequests;
    }
    /**
     * Set SpecialRequests value
     * @param mixed $specialRequests
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setSpecialRequests($specialRequests = null)
    {
        $this->SpecialRequests = $specialRequests;
        return $this;
    }
    /**
     * Get ServiceRPHs value
     * @return mixed|null
     */
    public function getServiceRPHs()
    {
        return $this->ServiceRPHs;
    }
    /**
     * Set ServiceRPHs value
     * @param mixed $serviceRPHs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setServiceRPHs($serviceRPHs = null)
    {
        $this->ServiceRPHs = $serviceRPHs;
        return $this;
    }
    /**
     * Get Reference value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Reference|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Reference $reference
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setReference(\Devlabs91\GenericOtaHotelApiService\StructType\Reference $reference = null)
    {
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Get BookingRules value
     * @return mixed|null
     */
    public function getBookingRules()
    {
        return $this->BookingRules;
    }
    /**
     * Set BookingRules value
     * @param mixed $bookingRules
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setBookingRules($bookingRules = null)
    {
        $this->BookingRules = $bookingRules;
        return $this;
    }
    /**
     * Get IndexNumber value
     * @return string|null
     */
    public function getIndexNumber()
    {
        return $this->IndexNumber;
    }
    /**
     * Set IndexNumber value
     * @param string $indexNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setIndexNumber($indexNumber = null)
    {
        // validation for constraint: string
        if (!is_null($indexNumber) && !is_string($indexNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($indexNumber)), __LINE__);
        }
        $this->IndexNumber = $indexNumber;
        return $this;
    }
    /**
     * Get HotelReservationIDs value
     * @return mixed|null
     */
    public function getHotelReservationIDs()
    {
        return $this->HotelReservationIDs;
    }
    /**
     * Set HotelReservationIDs value
     * @param mixed $hotelReservationIDs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setHotelReservationIDs($hotelReservationIDs = null)
    {
        $this->HotelReservationIDs = $hotelReservationIDs;
        return $this;
    }
    /**
     * Get RoomShares value
     * @return mixed|null
     */
    public function getRoomShares()
    {
        return $this->RoomShares;
    }
    /**
     * Set RoomShares value
     * @param mixed $roomShares
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setRoomShares($roomShares = null)
    {
        $this->RoomShares = $roomShares;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return mixed|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param mixed $uniqueID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get Success value
     * @return mixed|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param mixed $success
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setSuccess($success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get Warnings value
     * @return mixed|null
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }
    /**
     * Set Warnings value
     * @param mixed $warnings
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setWarnings($warnings = null)
    {
        $this->Warnings = $warnings;
        return $this;
    }
    /**
     * Get Errors value
     * @return mixed|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param mixed $errors
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setErrors($errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get RoomStay value
     * @return string|null
     */
    public function getRoomStay()
    {
        return $this->RoomStay;
    }
    /**
     * Set RoomStay value
     * @param string $roomStay
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setRoomStay($roomStay = null)
    {
        // validation for constraint: string
        if (!is_null($roomStay) && !is_string($roomStay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomStay)), __LINE__);
        }
        $this->RoomStay = $roomStay;
        return $this;
    }
    /**
     * Get IsAlternate value
     * @return bool|null
     */
    public function getIsAlternate()
    {
        return $this->IsAlternate;
    }
    /**
     * Set IsAlternate value
     * @param bool $isAlternate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setIsAlternate($isAlternate = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAlternate) && !is_bool($isAlternate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAlternate)), __LINE__);
        }
        $this->IsAlternate = $isAlternate;
        return $this;
    }
    /**
     * Get AvailabilityStatus value
     * @return string|null
     */
    public function getAvailabilityStatus()
    {
        return $this->AvailabilityStatus;
    }
    /**
     * Set AvailabilityStatus value
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\RateIndicatorType::valueIsValid()
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\RateIndicatorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $availabilityStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setAvailabilityStatus($availabilityStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Devlabs91\GenericOtaHotelApiService\EnumType\RateIndicatorType::valueIsValid($availabilityStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $availabilityStatus, implode(', ', \Devlabs91\GenericOtaHotelApiService\EnumType\RateIndicatorType::getValidValues())), __LINE__);
        }
        $this->AvailabilityStatus = $availabilityStatus;
        return $this;
    }
    /**
     * Get RoomStayCandidateRPH value
     * @return string|null
     */
    public function getRoomStayCandidateRPH()
    {
        return $this->RoomStayCandidateRPH;
    }
    /**
     * Set RoomStayCandidateRPH value
     * @param string $roomStayCandidateRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setRoomStayCandidateRPH($roomStayCandidateRPH = null)
    {
        // validation for constraint: pattern
        if (is_scalar($roomStayCandidateRPH) && !preg_match('/[0-9]{1,8}/', $roomStayCandidateRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,8}", "%s" given', var_export($roomStayCandidateRPH, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($roomStayCandidateRPH) && !is_string($roomStayCandidateRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomStayCandidateRPH)), __LINE__);
        }
        $this->RoomStayCandidateRPH = $roomStayCandidateRPH;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: pattern
        if (is_scalar($rPH) && !preg_match('/[0-9]{1,8}/', $rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,8}", "%s" given', var_export($rPH, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get AvailableIndicator value
     * @return bool|null
     */
    public function getAvailableIndicator()
    {
        return $this->AvailableIndicator;
    }
    /**
     * Set AvailableIndicator value
     * @param bool $availableIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setAvailableIndicator($availableIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($availableIndicator) && !is_bool($availableIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($availableIndicator)), __LINE__);
        }
        $this->AvailableIndicator = $availableIndicator;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
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
