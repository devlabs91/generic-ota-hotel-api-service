<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResCommonDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A grouping of elements including Guest Counts, Time Span, pointers to Res Guests, guest Memberships, Comments and Special Requests and finally finacial information including Guarantee, Deposit and Payyment and Cancellation Penalties.
 * @subpackage Structs
 */
class ResCommonDetailType extends AbstractStructBase
{
    /**
     * The GuestCounts
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Guest Counts associated to the whole Reservation or a particular Room Stay or Service. A child Guest Count element is required for each distict age group.
     * - minOccurs: 0
     * @var mixed
     */
    public $GuestCounts;
    /**
     * The TimeSpan
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TimeSpan
     */
    public $TimeSpan;
    /**
     * The ResGuestRPHs
     * Meta informations extracted from the WSDL
     * - documentation: A collection of ResGuestRPH objects.
     * - minOccurs: 0
     * @var mixed
     */
    public $ResGuestRPHs;
    /**
     * The Memberships
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Membership objects. Memberships provides a list of reward programs which may be credited with points accrued from the guest's activity. Which memberships are to be applied to which part is determined by each object's
     * SelectedMembershipRPHs collection.
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
     * The Guarantee
     * Meta informations extracted from the WSDL
     * - documentation: The guarantee information associated to the Reservation or a particular Room Stay or Service.
     * - minOccurs: 0
     * @var mixed
     */
    public $Guarantee;
    /**
     * The DepositPayments
     * Meta informations extracted from the WSDL
     * - documentation: A collection of deposit and/or payments.
     * - minOccurs: 0
     * @var mixed
     */
    public $DepositPayments;
    /**
     * The CancelPenalties
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Cancellation Penalties objects.
     * - minOccurs: 0
     * @var mixed
     */
    public $CancelPenalties;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - documentation: A collection of fees that applies to the reservation.
     * - minOccurs: 0
     * @var mixed
     */
    public $Fees;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - documentation: The total amount charged for the accommodation including additional occupant amounts and fees. If TaxInclusive is set to True, then taxes are included in the total amount.
     * - minOccurs: 0
     * @var mixed
     */
    public $Total;
    /**
     * Constructor method for ResCommonDetailType
     * @uses ResCommonDetailType::setGuestCounts()
     * @uses ResCommonDetailType::setTimeSpan()
     * @uses ResCommonDetailType::setResGuestRPHs()
     * @uses ResCommonDetailType::setMemberships()
     * @uses ResCommonDetailType::setComments()
     * @uses ResCommonDetailType::setSpecialRequests()
     * @uses ResCommonDetailType::setGuarantee()
     * @uses ResCommonDetailType::setDepositPayments()
     * @uses ResCommonDetailType::setCancelPenalties()
     * @uses ResCommonDetailType::setFees()
     * @uses ResCommonDetailType::setTotal()
     * @param mixed $guestCounts
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TimeSpan $timeSpan
     * @param mixed $resGuestRPHs
     * @param mixed $memberships
     * @param mixed $comments
     * @param mixed $specialRequests
     * @param mixed $guarantee
     * @param mixed $depositPayments
     * @param mixed $cancelPenalties
     * @param mixed $fees
     * @param mixed $total
     */
    public function __construct($guestCounts = null, \Devlabs91\GenericOtaHotelApiService\StructType\TimeSpan $timeSpan = null, $resGuestRPHs = null, $memberships = null, $comments = null, $specialRequests = null, $guarantee = null, $depositPayments = null, $cancelPenalties = null, $fees = null, $total = null)
    {
        $this
            ->setGuestCounts($guestCounts)
            ->setTimeSpan($timeSpan)
            ->setResGuestRPHs($resGuestRPHs)
            ->setMemberships($memberships)
            ->setComments($comments)
            ->setSpecialRequests($specialRequests)
            ->setGuarantee($guarantee)
            ->setDepositPayments($depositPayments)
            ->setCancelPenalties($cancelPenalties)
            ->setFees($fees)
            ->setTotal($total);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResCommonDetailType
     */
    public function setGuestCounts($guestCounts = null)
    {
        $this->GuestCounts = $guestCounts;
        return $this;
    }
    /**
     * Get TimeSpan value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimeSpan|null
     */
    public function getTimeSpan()
    {
        return $this->TimeSpan;
    }
    /**
     * Set TimeSpan value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TimeSpan $timeSpan
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResCommonDetailType
     */
    public function setTimeSpan(\Devlabs91\GenericOtaHotelApiService\StructType\TimeSpan $timeSpan = null)
    {
        $this->TimeSpan = $timeSpan;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResCommonDetailType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResCommonDetailType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResCommonDetailType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResCommonDetailType
     */
    public function setSpecialRequests($specialRequests = null)
    {
        $this->SpecialRequests = $specialRequests;
        return $this;
    }
    /**
     * Get Guarantee value
     * @return mixed|null
     */
    public function getGuarantee()
    {
        return $this->Guarantee;
    }
    /**
     * Set Guarantee value
     * @param mixed $guarantee
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResCommonDetailType
     */
    public function setGuarantee($guarantee = null)
    {
        $this->Guarantee = $guarantee;
        return $this;
    }
    /**
     * Get DepositPayments value
     * @return mixed|null
     */
    public function getDepositPayments()
    {
        return $this->DepositPayments;
    }
    /**
     * Set DepositPayments value
     * @param mixed $depositPayments
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResCommonDetailType
     */
    public function setDepositPayments($depositPayments = null)
    {
        $this->DepositPayments = $depositPayments;
        return $this;
    }
    /**
     * Get CancelPenalties value
     * @return mixed|null
     */
    public function getCancelPenalties()
    {
        return $this->CancelPenalties;
    }
    /**
     * Set CancelPenalties value
     * @param mixed $cancelPenalties
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResCommonDetailType
     */
    public function setCancelPenalties($cancelPenalties = null)
    {
        $this->CancelPenalties = $cancelPenalties;
        return $this;
    }
    /**
     * Get Fees value
     * @return mixed|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param mixed $fees
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResCommonDetailType
     */
    public function setFees($fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get Total value
     * @return mixed|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param mixed $total
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResCommonDetailType
     */
    public function setTotal($total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResCommonDetailType
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
