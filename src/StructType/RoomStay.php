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
     * - minOccurs: 0
     * @var mixed
     */
    public $ServiceRPHs;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The AlternateInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $AlternateInfo;
    /**
     * The IsAlternate
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: Indicates that that the RoomStay is an alternate offer. Default=false.
     * - use: optional
     * @var bool
     */
    public $IsAlternate;
    /**
     * Constructor method for RoomStay
     * @uses RoomStay::setHotelReservationIDs()
     * @uses RoomStay::setRoomShares()
     * @uses RoomStay::setUniqueID()
     * @uses RoomStay::setSuccess()
     * @uses RoomStay::setWarnings()
     * @uses RoomStay::setErrors()
     * @uses RoomStay::setRoomStay()
     * @uses RoomStay::setResGuestRPHs()
     * @uses RoomStay::setMemberships()
     * @uses RoomStay::setComments()
     * @uses RoomStay::setSpecialRequests()
     * @uses RoomStay::setServiceRPHs()
     * @uses RoomStay::setTPA_Extensions()
     * @uses RoomStay::setAlternateInfo()
     * @uses RoomStay::setIsAlternate()
     * @param mixed $hotelReservationIDs
     * @param mixed $roomShares
     * @param mixed $uniqueID
     * @param mixed $success
     * @param mixed $warnings
     * @param mixed $errors
     * @param string $roomStay
     * @param mixed $resGuestRPHs
     * @param mixed $memberships
     * @param mixed $comments
     * @param mixed $specialRequests
     * @param mixed $serviceRPHs
     * @param mixed $tPA_Extensions
     * @param mixed $alternateInfo
     * @param bool $isAlternate
     */
    public function __construct($hotelReservationIDs = null, $roomShares = null, $uniqueID = null, $success = null, $warnings = null, $errors = null, $roomStay = null, $resGuestRPHs = null, $memberships = null, $comments = null, $specialRequests = null, $serviceRPHs = null, $tPA_Extensions = null, $alternateInfo = null, $isAlternate = false)
    {
        $this
            ->setHotelReservationIDs($hotelReservationIDs)
            ->setRoomShares($roomShares)
            ->setUniqueID($uniqueID)
            ->setSuccess($success)
            ->setWarnings($warnings)
            ->setErrors($errors)
            ->setRoomStay($roomStay)
            ->setResGuestRPHs($resGuestRPHs)
            ->setMemberships($memberships)
            ->setComments($comments)
            ->setSpecialRequests($specialRequests)
            ->setServiceRPHs($serviceRPHs)
            ->setTPA_Extensions($tPA_Extensions)
            ->setAlternateInfo($alternateInfo)
            ->setIsAlternate($isAlternate);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get AlternateInfo value
     * @return mixed|null
     */
    public function getAlternateInfo()
    {
        return $this->AlternateInfo;
    }
    /**
     * Set AlternateInfo value
     * @param mixed $alternateInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStay
     */
    public function setAlternateInfo($alternateInfo = null)
    {
        $this->AlternateInfo = $alternateInfo;
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
    public function setIsAlternate($isAlternate = false)
    {
        // validation for constraint: boolean
        if (!is_null($isAlternate) && !is_bool($isAlternate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAlternate)), __LINE__);
        }
        $this->IsAlternate = $isAlternate;
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
