<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingRule StructType
 * Meta informations extracted from the WSDL
 * - documentation: The BookingRule element defines restrictions to rates and stays at the hotel for a given rate plan, room type or rate plan/room type combination. | Used to specify a rate plan code, room type code or rate plan/room type combination
 * code and its associated attributes. | Defines when block inventory is released back to general inventory.
 * @subpackage Structs
 */
class BookingRule extends AbstractStructBase
{
    /**
     * The AcceptableGuarantees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantees
     */
    public $AcceptableGuarantees;
    /**
     * The CancelPenalties
     * Meta informations extracted from the WSDL
     * - documentation: A collection of required payments that are part of the booking restriction.
     * - minOccurs: 0
     * @var mixed
     */
    public $CancelPenalties;
    /**
     * The RequiredPaymts
     * Meta informations extracted from the WSDL
     * - documentation: A collection of required payments that are part of the booking restriction.
     * - minOccurs: 0
     * @var mixed
     */
    public $RequiredPaymts;
    /**
     * The LengthsOfStay
     * Meta informations extracted from the WSDL
     * - documentation: A collection of lengths of stay.
     * - minOccurs: 0
     * @var mixed
     */
    public $LengthsOfStay;
    /**
     * The DOW_Restrictions
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Day Of Week restrictions.
     * - minOccurs: 0
     * @var mixed
     */
    public $DOW_Restrictions;
    /**
     * The RestrictionStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatus
     */
    public $RestrictionStatus;
    /**
     * The Viewerships
     * Meta informations extracted from the WSDL
     * - documentation: A collection of Viewships.
     * - minOccurs: 0
     * @var mixed
     */
    public $Viewerships;
    /**
     * The AddtionalRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AddtionalRules
     */
    public $AddtionalRules;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: General description of booking rule.
     * - maxOccurs: 20
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Description;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier element allows the trading partners to uniquely identify each Booking Rule, for transaction tracability.
     * - minOccurs: 0
     * @var mixed
     */
    public $UniqueID;
    /**
     * The CheckoutCharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge[]
     */
    public $CheckoutCharge;
    /**
     * The MaxAdvancedBookingOffset
     * Meta informations extracted from the WSDL
     * - documentation: Maximum days before the arrival date for which this rate plan may be booked.
     * - use: optional
     * @var string
     */
    public $MaxAdvancedBookingOffset;
    /**
     * The MinAdvancedBookingOffset
     * Meta informations extracted from the WSDL
     * - documentation: Minimum days before the arrival date for which this rate plan may be booked.
     * - use: optional
     * @var string
     */
    public $MinAdvancedBookingOffset;
    /**
     * The ForceGuaranteeOffset
     * Meta informations extracted from the WSDL
     * - documentation: Number of days prior to arrival date at which a guarantee is required.
     * - use: optional
     * @var string
     */
    public $ForceGuaranteeOffset;
    /**
     * The DepositWaiverOffset
     * Meta informations extracted from the WSDL
     * - documentation: Number of days prior to arrival date for which a deposit is no longer accepted (because of a too short time delay between reservation and guest arrival).
     * - use: optional
     * @var string
     */
    public $DepositWaiverOffset;
    /**
     * The MinTotalOccupancy
     * Meta informations extracted from the WSDL
     * - documentation: Defines the minimum number of total occupants required for a rate plan.
     * - use: optional
     * @var int
     */
    public $MinTotalOccupancy;
    /**
     * The MaxTotalOccupancy
     * Meta informations extracted from the WSDL
     * - documentation: Defines the maximum number of total occupants allowed for a rate plan.
     * - use: optional
     * @var int
     */
    public $MaxTotalOccupancy;
    /**
     * The AbsoluteDropTime
     * Meta informations extracted from the WSDL
     * - documentation: The fixed time that the booking restriction goes into effect to cancel the non-guaranteed reservation. Either this attribute or the DropTimeOffset element may be used.
     * - use: optional
     * @var string
     */
    public $AbsoluteDropTime;
    /**
     * The GenerallyBookable
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether this rate plan can be booked by those not in the viewership collection. If this attribute is False (0), then the viewerships collection lists those who have view-only or bookable status for this rate plan. If this
     * attribute is True (1), then the viewerships collection lists those who have view-only or not-viewable status for this rate plan.
     * - use: optional
     * @var bool
     */
    public $GenerallyBookable;
    /**
     * The PriceViewable
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether the price for this rate plan can be viewed, or whether the guest must contact another entity to obtain price information. | Valid values: 0 = (No) Price Not Viewable, 1 = (Yes) Price Viewable.
     * - use: optional
     * @var bool
     */
    public $PriceViewable;
    /**
     * The QualifiedRateYN
     * Meta informations extracted from the WSDL
     * - documentation: Boolean value indicating whether a specific rate plan must be qualified prior to inclusion in availability response messages.
     * - use: optional
     * @var bool
     */
    public $QualifiedRateYN;
    /**
     * The AddressRequired
     * Meta informations extracted from the WSDL
     * - documentation: An address is required to complete the booking.
     * - use: optional
     * @var bool
     */
    public $AddressRequired;
    /**
     * The MaxContiguousBookings
     * Meta informations extracted from the WSDL
     * - documentation: The maximum number of times a rate may be booked contiguously within a reservation (often used with packages).
     * - use: optional
     * @var int
     */
    public $MaxContiguousBookings;
    /**
     * Constructor method for BookingRule
     * @uses BookingRule::setAcceptableGuarantees()
     * @uses BookingRule::setCancelPenalties()
     * @uses BookingRule::setRequiredPaymts()
     * @uses BookingRule::setLengthsOfStay()
     * @uses BookingRule::setDOW_Restrictions()
     * @uses BookingRule::setRestrictionStatus()
     * @uses BookingRule::setViewerships()
     * @uses BookingRule::setAddtionalRules()
     * @uses BookingRule::setDescription()
     * @uses BookingRule::setUniqueID()
     * @uses BookingRule::setCheckoutCharge()
     * @uses BookingRule::setMaxAdvancedBookingOffset()
     * @uses BookingRule::setMinAdvancedBookingOffset()
     * @uses BookingRule::setForceGuaranteeOffset()
     * @uses BookingRule::setDepositWaiverOffset()
     * @uses BookingRule::setMinTotalOccupancy()
     * @uses BookingRule::setMaxTotalOccupancy()
     * @uses BookingRule::setAbsoluteDropTime()
     * @uses BookingRule::setGenerallyBookable()
     * @uses BookingRule::setPriceViewable()
     * @uses BookingRule::setQualifiedRateYN()
     * @uses BookingRule::setAddressRequired()
     * @uses BookingRule::setMaxContiguousBookings()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantees $acceptableGuarantees
     * @param mixed $cancelPenalties
     * @param mixed $requiredPaymts
     * @param mixed $lengthsOfStay
     * @param mixed $dOW_Restrictions
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatus $restrictionStatus
     * @param mixed $viewerships
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AddtionalRules $addtionalRules
     * @param mixed[] $description
     * @param mixed $uniqueID
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge[] $checkoutCharge
     * @param string $maxAdvancedBookingOffset
     * @param string $minAdvancedBookingOffset
     * @param string $forceGuaranteeOffset
     * @param string $depositWaiverOffset
     * @param int $minTotalOccupancy
     * @param int $maxTotalOccupancy
     * @param string $absoluteDropTime
     * @param bool $generallyBookable
     * @param bool $priceViewable
     * @param bool $qualifiedRateYN
     * @param bool $addressRequired
     * @param int $maxContiguousBookings
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantees $acceptableGuarantees = null, $cancelPenalties = null, $requiredPaymts = null, $lengthsOfStay = null, $dOW_Restrictions = null, \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatus $restrictionStatus = null, $viewerships = null, \Devlabs91\GenericOtaHotelApiService\StructType\AddtionalRules $addtionalRules = null, array $description = array(), $uniqueID = null, array $checkoutCharge = array(), $maxAdvancedBookingOffset = null, $minAdvancedBookingOffset = null, $forceGuaranteeOffset = null, $depositWaiverOffset = null, $minTotalOccupancy = null, $maxTotalOccupancy = null, $absoluteDropTime = null, $generallyBookable = null, $priceViewable = null, $qualifiedRateYN = null, $addressRequired = null, $maxContiguousBookings = null)
    {
        $this
            ->setAcceptableGuarantees($acceptableGuarantees)
            ->setCancelPenalties($cancelPenalties)
            ->setRequiredPaymts($requiredPaymts)
            ->setLengthsOfStay($lengthsOfStay)
            ->setDOW_Restrictions($dOW_Restrictions)
            ->setRestrictionStatus($restrictionStatus)
            ->setViewerships($viewerships)
            ->setAddtionalRules($addtionalRules)
            ->setDescription($description)
            ->setUniqueID($uniqueID)
            ->setCheckoutCharge($checkoutCharge)
            ->setMaxAdvancedBookingOffset($maxAdvancedBookingOffset)
            ->setMinAdvancedBookingOffset($minAdvancedBookingOffset)
            ->setForceGuaranteeOffset($forceGuaranteeOffset)
            ->setDepositWaiverOffset($depositWaiverOffset)
            ->setMinTotalOccupancy($minTotalOccupancy)
            ->setMaxTotalOccupancy($maxTotalOccupancy)
            ->setAbsoluteDropTime($absoluteDropTime)
            ->setGenerallyBookable($generallyBookable)
            ->setPriceViewable($priceViewable)
            ->setQualifiedRateYN($qualifiedRateYN)
            ->setAddressRequired($addressRequired)
            ->setMaxContiguousBookings($maxContiguousBookings);
    }
    /**
     * Get AcceptableGuarantees value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantees|null
     */
    public function getAcceptableGuarantees()
    {
        return $this->AcceptableGuarantees;
    }
    /**
     * Set AcceptableGuarantees value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantees $acceptableGuarantees
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setAcceptableGuarantees(\Devlabs91\GenericOtaHotelApiService\StructType\AcceptableGuarantees $acceptableGuarantees = null)
    {
        $this->AcceptableGuarantees = $acceptableGuarantees;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setCancelPenalties($cancelPenalties = null)
    {
        $this->CancelPenalties = $cancelPenalties;
        return $this;
    }
    /**
     * Get RequiredPaymts value
     * @return mixed|null
     */
    public function getRequiredPaymts()
    {
        return $this->RequiredPaymts;
    }
    /**
     * Set RequiredPaymts value
     * @param mixed $requiredPaymts
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setRequiredPaymts($requiredPaymts = null)
    {
        $this->RequiredPaymts = $requiredPaymts;
        return $this;
    }
    /**
     * Get LengthsOfStay value
     * @return mixed|null
     */
    public function getLengthsOfStay()
    {
        return $this->LengthsOfStay;
    }
    /**
     * Set LengthsOfStay value
     * @param mixed $lengthsOfStay
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setLengthsOfStay($lengthsOfStay = null)
    {
        $this->LengthsOfStay = $lengthsOfStay;
        return $this;
    }
    /**
     * Get DOW_Restrictions value
     * @return mixed|null
     */
    public function getDOW_Restrictions()
    {
        return $this->DOW_Restrictions;
    }
    /**
     * Set DOW_Restrictions value
     * @param mixed $dOW_Restrictions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setDOW_Restrictions($dOW_Restrictions = null)
    {
        $this->DOW_Restrictions = $dOW_Restrictions;
        return $this;
    }
    /**
     * Get RestrictionStatus value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatus|null
     */
    public function getRestrictionStatus()
    {
        return $this->RestrictionStatus;
    }
    /**
     * Set RestrictionStatus value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatus $restrictionStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setRestrictionStatus(\Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatus $restrictionStatus = null)
    {
        $this->RestrictionStatus = $restrictionStatus;
        return $this;
    }
    /**
     * Get Viewerships value
     * @return mixed|null
     */
    public function getViewerships()
    {
        return $this->Viewerships;
    }
    /**
     * Set Viewerships value
     * @param mixed $viewerships
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setViewerships($viewerships = null)
    {
        $this->Viewerships = $viewerships;
        return $this;
    }
    /**
     * Get AddtionalRules value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AddtionalRules|null
     */
    public function getAddtionalRules()
    {
        return $this->AddtionalRules;
    }
    /**
     * Set AddtionalRules value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AddtionalRules $addtionalRules
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setAddtionalRules(\Devlabs91\GenericOtaHotelApiService\StructType\AddtionalRules $addtionalRules = null)
    {
        $this->AddtionalRules = $addtionalRules;
        return $this;
    }
    /**
     * Get Description value
     * @return mixed[]|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @throws \InvalidArgumentException
     * @param mixed[] $description
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setDescription(array $description = array())
    {
        foreach ($description as $bookingRuleDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($bookingRuleDescriptionItem) ? get_class($bookingRuleDescriptionItem) : gettype($bookingRuleDescriptionItem)), __LINE__);
            }
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Add item to Description value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function addToDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Description property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Description[] = $item;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get CheckoutCharge value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge[]|null
     */
    public function getCheckoutCharge()
    {
        return $this->CheckoutCharge;
    }
    /**
     * Set CheckoutCharge value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge[] $checkoutCharge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setCheckoutCharge(array $checkoutCharge = array())
    {
        foreach ($checkoutCharge as $bookingRuleCheckoutChargeItem) {
            // validation for constraint: itemType
            if (!$bookingRuleCheckoutChargeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge) {
                throw new \InvalidArgumentException(sprintf('The CheckoutCharge property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge, "%s" given', is_object($bookingRuleCheckoutChargeItem) ? get_class($bookingRuleCheckoutChargeItem) : gettype($bookingRuleCheckoutChargeItem)), __LINE__);
            }
        }
        $this->CheckoutCharge = $checkoutCharge;
        return $this;
    }
    /**
     * Add item to CheckoutCharge value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function addToCheckoutCharge(\Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge) {
            throw new \InvalidArgumentException(sprintf('The CheckoutCharge property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\CheckoutCharge, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CheckoutCharge[] = $item;
        return $this;
    }
    /**
     * Get MaxAdvancedBookingOffset value
     * @return string|null
     */
    public function getMaxAdvancedBookingOffset()
    {
        return $this->MaxAdvancedBookingOffset;
    }
    /**
     * Set MaxAdvancedBookingOffset value
     * @param string $maxAdvancedBookingOffset
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setMaxAdvancedBookingOffset($maxAdvancedBookingOffset = null)
    {
        // validation for constraint: string
        if (!is_null($maxAdvancedBookingOffset) && !is_string($maxAdvancedBookingOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxAdvancedBookingOffset)), __LINE__);
        }
        $this->MaxAdvancedBookingOffset = $maxAdvancedBookingOffset;
        return $this;
    }
    /**
     * Get MinAdvancedBookingOffset value
     * @return string|null
     */
    public function getMinAdvancedBookingOffset()
    {
        return $this->MinAdvancedBookingOffset;
    }
    /**
     * Set MinAdvancedBookingOffset value
     * @param string $minAdvancedBookingOffset
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setMinAdvancedBookingOffset($minAdvancedBookingOffset = null)
    {
        // validation for constraint: string
        if (!is_null($minAdvancedBookingOffset) && !is_string($minAdvancedBookingOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minAdvancedBookingOffset)), __LINE__);
        }
        $this->MinAdvancedBookingOffset = $minAdvancedBookingOffset;
        return $this;
    }
    /**
     * Get ForceGuaranteeOffset value
     * @return string|null
     */
    public function getForceGuaranteeOffset()
    {
        return $this->ForceGuaranteeOffset;
    }
    /**
     * Set ForceGuaranteeOffset value
     * @param string $forceGuaranteeOffset
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setForceGuaranteeOffset($forceGuaranteeOffset = null)
    {
        // validation for constraint: string
        if (!is_null($forceGuaranteeOffset) && !is_string($forceGuaranteeOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($forceGuaranteeOffset)), __LINE__);
        }
        $this->ForceGuaranteeOffset = $forceGuaranteeOffset;
        return $this;
    }
    /**
     * Get DepositWaiverOffset value
     * @return string|null
     */
    public function getDepositWaiverOffset()
    {
        return $this->DepositWaiverOffset;
    }
    /**
     * Set DepositWaiverOffset value
     * @param string $depositWaiverOffset
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setDepositWaiverOffset($depositWaiverOffset = null)
    {
        // validation for constraint: string
        if (!is_null($depositWaiverOffset) && !is_string($depositWaiverOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($depositWaiverOffset)), __LINE__);
        }
        $this->DepositWaiverOffset = $depositWaiverOffset;
        return $this;
    }
    /**
     * Get MinTotalOccupancy value
     * @return int|null
     */
    public function getMinTotalOccupancy()
    {
        return $this->MinTotalOccupancy;
    }
    /**
     * Set MinTotalOccupancy value
     * @param int $minTotalOccupancy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setMinTotalOccupancy($minTotalOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($minTotalOccupancy) && !is_numeric($minTotalOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minTotalOccupancy)), __LINE__);
        }
        $this->MinTotalOccupancy = $minTotalOccupancy;
        return $this;
    }
    /**
     * Get MaxTotalOccupancy value
     * @return int|null
     */
    public function getMaxTotalOccupancy()
    {
        return $this->MaxTotalOccupancy;
    }
    /**
     * Set MaxTotalOccupancy value
     * @param int $maxTotalOccupancy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setMaxTotalOccupancy($maxTotalOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($maxTotalOccupancy) && !is_numeric($maxTotalOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxTotalOccupancy)), __LINE__);
        }
        $this->MaxTotalOccupancy = $maxTotalOccupancy;
        return $this;
    }
    /**
     * Get AbsoluteDropTime value
     * @return string|null
     */
    public function getAbsoluteDropTime()
    {
        return $this->AbsoluteDropTime;
    }
    /**
     * Set AbsoluteDropTime value
     * @param string $absoluteDropTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setAbsoluteDropTime($absoluteDropTime = null)
    {
        // validation for constraint: string
        if (!is_null($absoluteDropTime) && !is_string($absoluteDropTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($absoluteDropTime)), __LINE__);
        }
        $this->AbsoluteDropTime = $absoluteDropTime;
        return $this;
    }
    /**
     * Get GenerallyBookable value
     * @return bool|null
     */
    public function getGenerallyBookable()
    {
        return $this->GenerallyBookable;
    }
    /**
     * Set GenerallyBookable value
     * @param bool $generallyBookable
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setGenerallyBookable($generallyBookable = null)
    {
        // validation for constraint: boolean
        if (!is_null($generallyBookable) && !is_bool($generallyBookable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($generallyBookable)), __LINE__);
        }
        $this->GenerallyBookable = $generallyBookable;
        return $this;
    }
    /**
     * Get PriceViewable value
     * @return bool|null
     */
    public function getPriceViewable()
    {
        return $this->PriceViewable;
    }
    /**
     * Set PriceViewable value
     * @param bool $priceViewable
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setPriceViewable($priceViewable = null)
    {
        // validation for constraint: boolean
        if (!is_null($priceViewable) && !is_bool($priceViewable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($priceViewable)), __LINE__);
        }
        $this->PriceViewable = $priceViewable;
        return $this;
    }
    /**
     * Get QualifiedRateYN value
     * @return bool|null
     */
    public function getQualifiedRateYN()
    {
        return $this->QualifiedRateYN;
    }
    /**
     * Set QualifiedRateYN value
     * @param bool $qualifiedRateYN
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setQualifiedRateYN($qualifiedRateYN = null)
    {
        // validation for constraint: boolean
        if (!is_null($qualifiedRateYN) && !is_bool($qualifiedRateYN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($qualifiedRateYN)), __LINE__);
        }
        $this->QualifiedRateYN = $qualifiedRateYN;
        return $this;
    }
    /**
     * Get AddressRequired value
     * @return bool|null
     */
    public function getAddressRequired()
    {
        return $this->AddressRequired;
    }
    /**
     * Set AddressRequired value
     * @param bool $addressRequired
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setAddressRequired($addressRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($addressRequired) && !is_bool($addressRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($addressRequired)), __LINE__);
        }
        $this->AddressRequired = $addressRequired;
        return $this;
    }
    /**
     * Get MaxContiguousBookings value
     * @return int|null
     */
    public function getMaxContiguousBookings()
    {
        return $this->MaxContiguousBookings;
    }
    /**
     * Set MaxContiguousBookings value
     * @param int $maxContiguousBookings
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
     */
    public function setMaxContiguousBookings($maxContiguousBookings = null)
    {
        // validation for constraint: int
        if (!is_null($maxContiguousBookings) && !is_numeric($maxContiguousBookings)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxContiguousBookings)), __LINE__);
        }
        $this->MaxContiguousBookings = $maxContiguousBookings;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingRule
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
