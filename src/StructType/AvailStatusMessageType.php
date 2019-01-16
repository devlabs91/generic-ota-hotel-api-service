<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailStatusMessageType StructType
 * @subpackage Structs
 */
class AvailStatusMessageType extends AbstractStructBase
{
    /**
     * The StatusApplicationControl
     * Meta informations extracted from the WSDL
     * - documentation: Information on what the AvailStatus Message applies to (i.e. the combination of inventory and rate codes) and the period of application.
     * - minOccurs: 0
     * @var mixed
     */
    public $StatusApplicationControl;
    /**
     * The LengthsOfStay
     * Meta informations extracted from the WSDL
     * - documentation: Collection of Length of Stay elements. These LOS elements indicate what LOS restrictions are to be added or removed. Some systems include this information directly with the Availability Status as opposed to the booking restriction.
     * - minOccurs: 0
     * @var mixed
     */
    public $LengthsOfStay;
    /**
     * The BestAvailableRates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRates
     */
    public $BestAvailableRates;
    /**
     * The HurdleRate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\HurdleRate
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
     * @var mixed
     */
    public $UniqueID;
    /**
     * The RestrictionStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatus
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
     * - documentation: Number of units of inventory that can be sold.
     * - use: optional
     * @var int
     */
    public $BookingLimit;
    /**
     * The LocatorID
     * Meta informations extracted from the WSDL
     * - documentation: Can be used to communicate back to the sender exactly which transaction may have had a problem (e.g. "Message 214 had an invalid date range").
     * - use: optional
     * @var int
     */
    public $LocatorID;
    /**
     * The BookingThreshold
     * Meta informations extracted from the WSDL
     * - documentation: Number of units down to which inventory can be sold.
     * - use: optional
     * @var int
     */
    public $BookingThreshold;
    /**
     * Constructor method for AvailStatusMessageType
     * @uses AvailStatusMessageType::setStatusApplicationControl()
     * @uses AvailStatusMessageType::setLengthsOfStay()
     * @uses AvailStatusMessageType::setBestAvailableRates()
     * @uses AvailStatusMessageType::setHurdleRate()
     * @uses AvailStatusMessageType::setDelta()
     * @uses AvailStatusMessageType::setUniqueID()
     * @uses AvailStatusMessageType::setRestrictionStatus()
     * @uses AvailStatusMessageType::setOverride()
     * @uses AvailStatusMessageType::setBookingLimitMessageType()
     * @uses AvailStatusMessageType::setBookingLimit()
     * @uses AvailStatusMessageType::setLocatorID()
     * @uses AvailStatusMessageType::setBookingThreshold()
     * @param mixed $statusApplicationControl
     * @param mixed $lengthsOfStay
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRates $bestAvailableRates
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HurdleRate $hurdleRate
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Delta $delta
     * @param mixed $uniqueID
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatus $restrictionStatus
     * @param bool $override
     * @param string $bookingLimitMessageType
     * @param int $bookingLimit
     * @param int $locatorID
     * @param int $bookingThreshold
     */
    public function __construct($statusApplicationControl = null, $lengthsOfStay = null, \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRates $bestAvailableRates = null, \Devlabs91\GenericOtaHotelApiService\StructType\HurdleRate $hurdleRate = null, \Devlabs91\GenericOtaHotelApiService\StructType\Delta $delta = null, $uniqueID = null, \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatus $restrictionStatus = null, $override = null, $bookingLimitMessageType = null, $bookingLimit = null, $locatorID = null, $bookingThreshold = null)
    {
        $this
            ->setStatusApplicationControl($statusApplicationControl)
            ->setLengthsOfStay($lengthsOfStay)
            ->setBestAvailableRates($bestAvailableRates)
            ->setHurdleRate($hurdleRate)
            ->setDelta($delta)
            ->setUniqueID($uniqueID)
            ->setRestrictionStatus($restrictionStatus)
            ->setOverride($override)
            ->setBookingLimitMessageType($bookingLimitMessageType)
            ->setBookingLimit($bookingLimit)
            ->setLocatorID($locatorID)
            ->setBookingThreshold($bookingThreshold);
    }
    /**
     * Get StatusApplicationControl value
     * @return mixed|null
     */
    public function getStatusApplicationControl()
    {
        return $this->StatusApplicationControl;
    }
    /**
     * Set StatusApplicationControl value
     * @param mixed $statusApplicationControl
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType
     */
    public function setStatusApplicationControl($statusApplicationControl = null)
    {
        $this->StatusApplicationControl = $statusApplicationControl;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType
     */
    public function setLengthsOfStay($lengthsOfStay = null)
    {
        $this->LengthsOfStay = $lengthsOfStay;
        return $this;
    }
    /**
     * Get BestAvailableRates value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRates|null
     */
    public function getBestAvailableRates()
    {
        return $this->BestAvailableRates;
    }
    /**
     * Set BestAvailableRates value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRates $bestAvailableRates
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType
     */
    public function setBestAvailableRates(\Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRates $bestAvailableRates = null)
    {
        $this->BestAvailableRates = $bestAvailableRates;
        return $this;
    }
    /**
     * Get HurdleRate value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HurdleRate|null
     */
    public function getHurdleRate()
    {
        return $this->HurdleRate;
    }
    /**
     * Set HurdleRate value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HurdleRate $hurdleRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType
     */
    public function setHurdleRate(\Devlabs91\GenericOtaHotelApiService\StructType\HurdleRate $hurdleRate = null)
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType
     */
    public function setDelta(\Devlabs91\GenericOtaHotelApiService\StructType\Delta $delta = null)
    {
        $this->Delta = $delta;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType
     */
    public function setRestrictionStatus(\Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatus $restrictionStatus = null)
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType
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
     * Get LocatorID value
     * @return int|null
     */
    public function getLocatorID()
    {
        return $this->LocatorID;
    }
    /**
     * Set LocatorID value
     * @param int $locatorID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType
     */
    public function setLocatorID($locatorID = null)
    {
        // validation for constraint: int
        if (!is_null($locatorID) && !is_numeric($locatorID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($locatorID)), __LINE__);
        }
        $this->LocatorID = $locatorID;
        return $this;
    }
    /**
     * Get BookingThreshold value
     * @return int|null
     */
    public function getBookingThreshold()
    {
        return $this->BookingThreshold;
    }
    /**
     * Set BookingThreshold value
     * @param int $bookingThreshold
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType
     */
    public function setBookingThreshold($bookingThreshold = null)
    {
        // validation for constraint: int
        if (!is_null($bookingThreshold) && !is_numeric($bookingThreshold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bookingThreshold)), __LINE__);
        }
        $this->BookingThreshold = $bookingThreshold;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessageType
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
