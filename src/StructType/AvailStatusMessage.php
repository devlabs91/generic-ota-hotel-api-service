<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailStatusMessage StructType
 * Meta informations extracted from the WSDL
 * - documentation: The AvailStatusMessage. It is here that one indicates whether the inventory is opened, closed, closed on request, etc. | The MinMaxLOSStatusMessage class communicates the set of minimum and maximum length-of-stay availability status
 * changes to be synchronized with another system. | The RateHurdleStatusMessage class defines the setting for rate hurdle controls to be synchronized with the central reservation system.
 * @subpackage Structs
 */
class AvailStatusMessage extends AbstractStructBase
{
    /**
     * The StatusApplicationControl
     * Meta informations extracted from the WSDL
     * - documentation: Information on what the AvailStatus Message applies to (i.e. the combination of inventory and rate codes) and the period of application.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\StatusApplicationControlType
     */
    public $StatusApplicationControl;
    /**
     * The LengthsOfStay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\LengthsOfStay
     */
    public $LengthsOfStay;
    /**
     * The HurdleRate
     * Meta informations extracted from the WSDL
     * - documentation: Restriction based on the minimum rate to be considered for availability, ex. can sell weekend rate only if charging the hurdle rate or more.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyAmountType
     */
    public $HurdleRate;
    /**
     * The Delta
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Delta
     */
    public $Delta;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier element allows the trading partners to uniquely identify each AvailStatusMessage, for tracing of transactions.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type
     */
    public $UniqueID;
    /**
     * The RestrictionStatus
     * Meta informations extracted from the WSDL
     * - documentation: Availability status assigned to the room rate combination.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatusType
     */
    public $RestrictionStatus;
    /**
     * The Override
     * Meta informations extracted from the WSDL
     * - documentation: Mechanism to allow the user to override settings at the reservation system and to allow the RMS to replace this overridden values: If value = "false", the reservations system may ignore the settings passed and keep values overridden
     * by the user. If value = "true", the reservations system must replace values overridden by the user.
     * - use: optional
     * @var bool
     */
    public $Override;
    /**
     * The BookingLimitMessageType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $BookingLimitMessageType;
    /**
     * The BookingLimit
     * Meta informations extracted from the WSDL
     * - documentation: Number of units.
     * - use: optional
     * @var int
     */
    public $BookingLimit;
    /**
     * Constructor method for AvailStatusMessage
     * @uses AvailStatusMessage::setStatusApplicationControl()
     * @uses AvailStatusMessage::setLengthsOfStay()
     * @uses AvailStatusMessage::setHurdleRate()
     * @uses AvailStatusMessage::setDelta()
     * @uses AvailStatusMessage::setUniqueID()
     * @uses AvailStatusMessage::setRestrictionStatus()
     * @uses AvailStatusMessage::setOverride()
     * @uses AvailStatusMessage::setBookingLimitMessageType()
     * @uses AvailStatusMessage::setBookingLimit()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\StatusApplicationControlType $statusApplicationControl
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LengthsOfStay $lengthsOfStay
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyAmountType $hurdleRate
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Delta $delta
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $uniqueID
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatusType $restrictionStatus
     * @param bool $override
     * @param string $bookingLimitMessageType
     * @param int $bookingLimit
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\StatusApplicationControlType $statusApplicationControl = null, \Devlabs91\GenericOtaHotelApiService\StructType\LengthsOfStay $lengthsOfStay = null, \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyAmountType $hurdleRate = null, \Devlabs91\GenericOtaHotelApiService\StructType\Delta $delta = null, \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $uniqueID = null, \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatusType $restrictionStatus = null, $override = null, $bookingLimitMessageType = null, $bookingLimit = null)
    {
        $this
            ->setStatusApplicationControl($statusApplicationControl)
            ->setLengthsOfStay($lengthsOfStay)
            ->setHurdleRate($hurdleRate)
            ->setDelta($delta)
            ->setUniqueID($uniqueID)
            ->setRestrictionStatus($restrictionStatus)
            ->setOverride($override)
            ->setBookingLimitMessageType($bookingLimitMessageType)
            ->setBookingLimit($bookingLimit);
    }
    /**
     * Get StatusApplicationControl value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatusApplicationControlType|null
     */
    public function getStatusApplicationControl()
    {
        return $this->StatusApplicationControl;
    }
    /**
     * Set StatusApplicationControl value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\StatusApplicationControlType $statusApplicationControl
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessage
     */
    public function setStatusApplicationControl(\Devlabs91\GenericOtaHotelApiService\StructType\StatusApplicationControlType $statusApplicationControl = null)
    {
        $this->StatusApplicationControl = $statusApplicationControl;
        return $this;
    }
    /**
     * Get LengthsOfStay value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LengthsOfStay|null
     */
    public function getLengthsOfStay()
    {
        return $this->LengthsOfStay;
    }
    /**
     * Set LengthsOfStay value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LengthsOfStay $lengthsOfStay
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessage
     */
    public function setLengthsOfStay(\Devlabs91\GenericOtaHotelApiService\StructType\LengthsOfStay $lengthsOfStay = null)
    {
        $this->LengthsOfStay = $lengthsOfStay;
        return $this;
    }
    /**
     * Get HurdleRate value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyAmountType|null
     */
    public function getHurdleRate()
    {
        return $this->HurdleRate;
    }
    /**
     * Set HurdleRate value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CurrencyAmountType $hurdleRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessage
     */
    public function setHurdleRate(\Devlabs91\GenericOtaHotelApiService\StructType\CurrencyAmountType $hurdleRate = null)
    {
        $this->HurdleRate = $hurdleRate;
        return $this;
    }
    /**
     * Get Delta value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Delta|null
     */
    public function getDelta()
    {
        return $this->Delta;
    }
    /**
     * Set Delta value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Delta $delta
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessage
     */
    public function setDelta(\Devlabs91\GenericOtaHotelApiService\StructType\Delta $delta = null)
    {
        $this->Delta = $delta;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $uniqueID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessage
     */
    public function setUniqueID(\Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get RestrictionStatus value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatusType|null
     */
    public function getRestrictionStatus()
    {
        return $this->RestrictionStatus;
    }
    /**
     * Set RestrictionStatus value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatusType $restrictionStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessage
     */
    public function setRestrictionStatus(\Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatusType $restrictionStatus = null)
    {
        $this->RestrictionStatus = $restrictionStatus;
        return $this;
    }
    /**
     * Get Override value
     * @return bool|null
     */
    public function getOverride()
    {
        return $this->Override;
    }
    /**
     * Set Override value
     * @param bool $override
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessage
     */
    public function setOverride($override = null)
    {
        // validation for constraint: boolean
        if (!is_null($override) && !is_bool($override)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($override)), __LINE__);
        }
        $this->Override = $override;
        return $this;
    }
    /**
     * Get BookingLimitMessageType value
     * @return string|null
     */
    public function getBookingLimitMessageType()
    {
        return $this->BookingLimitMessageType;
    }
    /**
     * Set BookingLimitMessageType value
     * @param string $bookingLimitMessageType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessage
     */
    public function setBookingLimitMessageType($bookingLimitMessageType = null)
    {
        // validation for constraint: string
        if (!is_null($bookingLimitMessageType) && !is_string($bookingLimitMessageType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingLimitMessageType)), __LINE__);
        }
        $this->BookingLimitMessageType = $bookingLimitMessageType;
        return $this;
    }
    /**
     * Get BookingLimit value
     * @return int|null
     */
    public function getBookingLimit()
    {
        return $this->BookingLimit;
    }
    /**
     * Set BookingLimit value
     * @param int $bookingLimit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessage
     */
    public function setBookingLimit($bookingLimit = null)
    {
        // validation for constraint: int
        if (!is_null($bookingLimit) && !is_numeric($bookingLimit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bookingLimit)), __LINE__);
        }
        $this->BookingLimit = $bookingLimit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessage
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
