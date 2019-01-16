<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlan StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is a specific rate plan defined for a specific room type. | This indicates additional special services included in the rate plan (e.g. breakfast included).
 * @subpackage Structs
 */
class RatePlan extends RateUploadType
{
    /**
     * The MarketCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MarketCode[]
     */
    public $MarketCode;
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - documentation: Commission associated with the RatePlan. This can be a percentage or a flat amount.
     * - minOccurs: 0
     * @var mixed
     */
    public $Commission;
    /**
     * The MethodInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo[]
     */
    public $MethodInfo;
    /**
     * The DaysOfWeeks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\DaysOfWeeks
     */
    public $DaysOfWeeks;
    /**
     * The RatePlanCode
     * Meta informations extracted from the WSDL
     * - documentation: The RatePlanCode assigned for the inventory item.
     * - use: optional
     * @var string
     */
    public $RatePlanCode;
    /**
     * The BookingCode
     * Meta informations extracted from the WSDL
     * - documentation: This is used to indicate the code with which to book the item and is primarily used to exchange information with GDSs or other systems.
     * - use: optional
     * @var string
     */
    public $BookingCode;
    /**
     * The UpgradeIndicator
     * Meta informations extracted from the WSDL
     * - documentation: Indicator that signifies whether a room block rate plan is available for room type upgrade.
     * - use: optional
     * @var bool
     */
    public $UpgradeIndicator;
    /**
     * Constructor method for RatePlan
     * @uses RatePlan::setMarketCode()
     * @uses RatePlan::setCommission()
     * @uses RatePlan::setMethodInfo()
     * @uses RatePlan::setDaysOfWeeks()
     * @uses RatePlan::setRatePlanCode()
     * @uses RatePlan::setBookingCode()
     * @uses RatePlan::setUpgradeIndicator()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MarketCode[] $marketCode
     * @param mixed $commission
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo[] $methodInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DaysOfWeeks $daysOfWeeks
     * @param string $ratePlanCode
     * @param string $bookingCode
     * @param bool $upgradeIndicator
     */
    public function __construct(array $marketCode = array(), $commission = null, array $methodInfo = array(), \Devlabs91\GenericOtaHotelApiService\StructType\DaysOfWeeks $daysOfWeeks = null, $ratePlanCode = null, $bookingCode = null, $upgradeIndicator = null)
    {
        $this
            ->setMarketCode($marketCode)
            ->setCommission($commission)
            ->setMethodInfo($methodInfo)
            ->setDaysOfWeeks($daysOfWeeks)
            ->setRatePlanCode($ratePlanCode)
            ->setBookingCode($bookingCode)
            ->setUpgradeIndicator($upgradeIndicator);
    }
    /**
     * Get MarketCode value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MarketCode[]|null
     */
    public function getMarketCode()
    {
        return $this->MarketCode;
    }
    /**
     * Set MarketCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MarketCode[] $marketCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlan
     */
    public function setMarketCode(array $marketCode = array())
    {
        foreach ($marketCode as $ratePlanMarketCodeItem) {
            // validation for constraint: itemType
            if (!$ratePlanMarketCodeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\MarketCode) {
                throw new \InvalidArgumentException(sprintf('The MarketCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\MarketCode, "%s" given', is_object($ratePlanMarketCodeItem) ? get_class($ratePlanMarketCodeItem) : gettype($ratePlanMarketCodeItem)), __LINE__);
            }
        }
        $this->MarketCode = $marketCode;
        return $this;
    }
    /**
     * Add item to MarketCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MarketCode $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlan
     */
    public function addToMarketCode(\Devlabs91\GenericOtaHotelApiService\StructType\MarketCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\MarketCode) {
            throw new \InvalidArgumentException(sprintf('The MarketCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\MarketCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MarketCode[] = $item;
        return $this;
    }
    /**
     * Get Commission value
     * @return mixed|null
     */
    public function getCommission()
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param mixed $commission
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlan
     */
    public function setCommission($commission = null)
    {
        $this->Commission = $commission;
        return $this;
    }
    /**
     * Get MethodInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo[]|null
     */
    public function getMethodInfo()
    {
        return $this->MethodInfo;
    }
    /**
     * Set MethodInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo[] $methodInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlan
     */
    public function setMethodInfo(array $methodInfo = array())
    {
        foreach ($methodInfo as $ratePlanMethodInfoItem) {
            // validation for constraint: itemType
            if (!$ratePlanMethodInfoItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo) {
                throw new \InvalidArgumentException(sprintf('The MethodInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo, "%s" given', is_object($ratePlanMethodInfoItem) ? get_class($ratePlanMethodInfoItem) : gettype($ratePlanMethodInfoItem)), __LINE__);
            }
        }
        $this->MethodInfo = $methodInfo;
        return $this;
    }
    /**
     * Add item to MethodInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlan
     */
    public function addToMethodInfo(\Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo) {
            throw new \InvalidArgumentException(sprintf('The MethodInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\MethodInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MethodInfo[] = $item;
        return $this;
    }
    /**
     * Get DaysOfWeeks value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DaysOfWeeks|null
     */
    public function getDaysOfWeeks()
    {
        return $this->DaysOfWeeks;
    }
    /**
     * Set DaysOfWeeks value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DaysOfWeeks $daysOfWeeks
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlan
     */
    public function setDaysOfWeeks(\Devlabs91\GenericOtaHotelApiService\StructType\DaysOfWeeks $daysOfWeeks = null)
    {
        $this->DaysOfWeeks = $daysOfWeeks;
        return $this;
    }
    /**
     * Get RatePlanCode value
     * @return string|null
     */
    public function getRatePlanCode()
    {
        return $this->RatePlanCode;
    }
    /**
     * Set RatePlanCode value
     * @param string $ratePlanCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlan
     */
    public function setRatePlanCode($ratePlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanCode) && !is_string($ratePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanCode)), __LINE__);
        }
        $this->RatePlanCode = $ratePlanCode;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlan
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
     * Get UpgradeIndicator value
     * @return bool|null
     */
    public function getUpgradeIndicator()
    {
        return $this->UpgradeIndicator;
    }
    /**
     * Set UpgradeIndicator value
     * @param bool $upgradeIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlan
     */
    public function setUpgradeIndicator($upgradeIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($upgradeIndicator) && !is_bool($upgradeIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($upgradeIndicator)), __LINE__);
        }
        $this->UpgradeIndicator = $upgradeIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlan
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
