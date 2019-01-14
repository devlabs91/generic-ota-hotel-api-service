<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomStayType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details on the Room Stay including Guest Counts, Time Span of this Room Stay, pointers to Res Guests, guest Memberships, Comments and Special Requests pertaining to this particular Room Stay and finally finacial information related
 * to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
 * @subpackage Structs
 */
class RoomStayType extends AbstractStructBase
{
    /**
     * The RoomTypes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypes
     */
    public $RoomTypes;
    /**
     * The RatePlans
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RatePlans
     */
    public $RatePlans;
    /**
     * The RoomRates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RoomRates
     */
    public $RoomRates;
    /**
     * The GuestCounts
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Guest Counts associated with Room Stay. A child Guest Count element is required for each distinct age group.
     * - minOccurs: 0
     * @var mixed
     */
    public $GuestCounts;
    /**
     * The TimeSpan
     * Meta informations extracted from the WSDL
     * - documentation: The Time Span which covers the Room Stay.
     * - minOccurs: 0
     * @var mixed
     */
    public $TimeSpan;
    /**
     * The Guarantee
     * Meta informations extracted from the WSDL
     * - documentation: The guarantee information associated to the Room Stay. A maximum of 5 occurances are available for use depending on the context.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Guarantee;
    /**
     * The DepositPayments
     * Meta informations extracted from the WSDL
     * - documentation: A collection of deposit and/or payments for the Room Stay.
     * - minOccurs: 0
     * @var mixed
     */
    public $DepositPayments;
    /**
     * The CancelPenalties
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Cancellation Penalties objects for the Room Stay.
     * - minOccurs: 0
     * @var mixed
     */
    public $CancelPenalties;
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - documentation: Discount percentage and/or Amount, code and textual reason for discount.
     * - minOccurs: 0
     * @var mixed
     */
    public $Discount;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - documentation: The total amount charged for the Room Stay including additional occupant amounts and fees. If TaxInclusive is set to True, then taxes are included in the total amount.
     * - minOccurs: 0
     * @var mixed
     */
    public $Total;
    /**
     * The BasicPropertyInfo
     * Meta informations extracted from the WSDL
     * - documentation: Property Information for the Room Stay.
     * - minOccurs: 0
     * @var mixed
     */
    public $BasicPropertyInfo;
    /**
     * The MarketCode
     * Meta informations extracted from the WSDL
     * - documentation: The code that relates to the market being sold to e.g. the corporate market, packages.
     * - use: optional
     * @var string
     */
    public $MarketCode;
    /**
     * The SourceOfBusiness
     * Meta informations extracted from the WSDL
     * - documentation: To specify where the business came from e.g. radio, newspaper ad, etc.
     * - use: optional
     * @var string
     */
    public $SourceOfBusiness;
    /**
     * The DiscountCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $DiscountCode;
    /**
     * Constructor method for RoomStayType
     * @uses RoomStayType::setRoomTypes()
     * @uses RoomStayType::setRatePlans()
     * @uses RoomStayType::setRoomRates()
     * @uses RoomStayType::setGuestCounts()
     * @uses RoomStayType::setTimeSpan()
     * @uses RoomStayType::setGuarantee()
     * @uses RoomStayType::setDepositPayments()
     * @uses RoomStayType::setCancelPenalties()
     * @uses RoomStayType::setDiscount()
     * @uses RoomStayType::setTotal()
     * @uses RoomStayType::setBasicPropertyInfo()
     * @uses RoomStayType::setMarketCode()
     * @uses RoomStayType::setSourceOfBusiness()
     * @uses RoomStayType::setDiscountCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypes $roomTypes
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RatePlans $ratePlans
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomRates $roomRates
     * @param mixed $guestCounts
     * @param mixed $timeSpan
     * @param mixed[] $guarantee
     * @param mixed $depositPayments
     * @param mixed $cancelPenalties
     * @param mixed $discount
     * @param mixed $total
     * @param mixed $basicPropertyInfo
     * @param string $marketCode
     * @param string $sourceOfBusiness
     * @param string $discountCode
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\RoomTypes $roomTypes = null, \Devlabs91\GenericOtaHotelApiService\StructType\RatePlans $ratePlans = null, \Devlabs91\GenericOtaHotelApiService\StructType\RoomRates $roomRates = null, $guestCounts = null, $timeSpan = null, array $guarantee = array(), $depositPayments = null, $cancelPenalties = null, $discount = null, $total = null, $basicPropertyInfo = null, $marketCode = null, $sourceOfBusiness = null, $discountCode = null)
    {
        $this
            ->setRoomTypes($roomTypes)
            ->setRatePlans($ratePlans)
            ->setRoomRates($roomRates)
            ->setGuestCounts($guestCounts)
            ->setTimeSpan($timeSpan)
            ->setGuarantee($guarantee)
            ->setDepositPayments($depositPayments)
            ->setCancelPenalties($cancelPenalties)
            ->setDiscount($discount)
            ->setTotal($total)
            ->setBasicPropertyInfo($basicPropertyInfo)
            ->setMarketCode($marketCode)
            ->setSourceOfBusiness($sourceOfBusiness)
            ->setDiscountCode($discountCode);
    }
    /**
     * Get RoomTypes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypes|null
     */
    public function getRoomTypes()
    {
        return $this->RoomTypes;
    }
    /**
     * Set RoomTypes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomTypes $roomTypes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayType
     */
    public function setRoomTypes(\Devlabs91\GenericOtaHotelApiService\StructType\RoomTypes $roomTypes = null)
    {
        $this->RoomTypes = $roomTypes;
        return $this;
    }
    /**
     * Get RatePlans value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlans|null
     */
    public function getRatePlans()
    {
        return $this->RatePlans;
    }
    /**
     * Set RatePlans value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RatePlans $ratePlans
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayType
     */
    public function setRatePlans(\Devlabs91\GenericOtaHotelApiService\StructType\RatePlans $ratePlans = null)
    {
        $this->RatePlans = $ratePlans;
        return $this;
    }
    /**
     * Get RoomRates value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRates|null
     */
    public function getRoomRates()
    {
        return $this->RoomRates;
    }
    /**
     * Set RoomRates value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomRates $roomRates
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayType
     */
    public function setRoomRates(\Devlabs91\GenericOtaHotelApiService\StructType\RoomRates $roomRates = null)
    {
        $this->RoomRates = $roomRates;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayType
     */
    public function setGuestCounts($guestCounts = null)
    {
        $this->GuestCounts = $guestCounts;
        return $this;
    }
    /**
     * Get TimeSpan value
     * @return mixed|null
     */
    public function getTimeSpan()
    {
        return $this->TimeSpan;
    }
    /**
     * Set TimeSpan value
     * @param mixed $timeSpan
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayType
     */
    public function setTimeSpan($timeSpan = null)
    {
        $this->TimeSpan = $timeSpan;
        return $this;
    }
    /**
     * Get Guarantee value
     * @return mixed[]|null
     */
    public function getGuarantee()
    {
        return $this->Guarantee;
    }
    /**
     * Set Guarantee value
     * @throws \InvalidArgumentException
     * @param mixed[] $guarantee
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayType
     */
    public function setGuarantee(array $guarantee = array())
    {
        foreach ($guarantee as $roomStayTypeGuaranteeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Guarantee property can only contain items of anyType, "%s" given', is_object($roomStayTypeGuaranteeItem) ? get_class($roomStayTypeGuaranteeItem) : gettype($roomStayTypeGuaranteeItem)), __LINE__);
            }
        }
        $this->Guarantee = $guarantee;
        return $this;
    }
    /**
     * Add item to Guarantee value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayType
     */
    public function addToGuarantee($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Guarantee property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Guarantee[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayType
     */
    public function setCancelPenalties($cancelPenalties = null)
    {
        $this->CancelPenalties = $cancelPenalties;
        return $this;
    }
    /**
     * Get Discount value
     * @return mixed|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * Set Discount value
     * @param mixed $discount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayType
     */
    public function setDiscount($discount = null)
    {
        $this->Discount = $discount;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayType
     */
    public function setTotal($total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get BasicPropertyInfo value
     * @return mixed|null
     */
    public function getBasicPropertyInfo()
    {
        return $this->BasicPropertyInfo;
    }
    /**
     * Set BasicPropertyInfo value
     * @param mixed $basicPropertyInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayType
     */
    public function setBasicPropertyInfo($basicPropertyInfo = null)
    {
        $this->BasicPropertyInfo = $basicPropertyInfo;
        return $this;
    }
    /**
     * Get MarketCode value
     * @return string|null
     */
    public function getMarketCode()
    {
        return $this->MarketCode;
    }
    /**
     * Set MarketCode value
     * @param string $marketCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayType
     */
    public function setMarketCode($marketCode = null)
    {
        // validation for constraint: string
        if (!is_null($marketCode) && !is_string($marketCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($marketCode)), __LINE__);
        }
        $this->MarketCode = $marketCode;
        return $this;
    }
    /**
     * Get SourceOfBusiness value
     * @return string|null
     */
    public function getSourceOfBusiness()
    {
        return $this->SourceOfBusiness;
    }
    /**
     * Set SourceOfBusiness value
     * @param string $sourceOfBusiness
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayType
     */
    public function setSourceOfBusiness($sourceOfBusiness = null)
    {
        // validation for constraint: string
        if (!is_null($sourceOfBusiness) && !is_string($sourceOfBusiness)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sourceOfBusiness)), __LINE__);
        }
        $this->SourceOfBusiness = $sourceOfBusiness;
        return $this;
    }
    /**
     * Get DiscountCode value
     * @return string|null
     */
    public function getDiscountCode()
    {
        return $this->DiscountCode;
    }
    /**
     * Set DiscountCode value
     * @param string $discountCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayType
     */
    public function setDiscountCode($discountCode = null)
    {
        // validation for constraint: string
        if (!is_null($discountCode) && !is_string($discountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($discountCode)), __LINE__);
        }
        $this->DiscountCode = $discountCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStayType
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
