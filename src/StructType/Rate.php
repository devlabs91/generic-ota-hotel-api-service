<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rate StructType
 * Meta informations extracted from the WSDL
 * - documentation: An individual rate, which is a collection of amounts by guest, additional guests, fees, collection of related guarantee, cancel and payment policies, a description and the unique id to identify the rate. Rate restrictions can be sent
 * along with the rate as attributes of this rate. | The Rate contains a collection of elements that define the amount of the rate, associated fees, additional occupant amounts as well as payment and cancellation policies. Taxes can be broken out or
 * included within the various amounts. A currency can be associated to each amount The applicable period of the the rate are indicated by the effective dates. Restrictions that may apply to that rate, such as the minimum or maximum length of stay,
 * stay-over dates (such as a Saturday night), min/max guests applicable for the rate, and age group (ex Adult) are attributes of Rate. It indicates the number of units that the quoted rate is based upon, as well as the TimeUnits type used that the rate
 * is based upon, e.g.: 3days at $100.00 per day.
 * - type: Percentage
 * - use: optional
 * @subpackage Structs
 */
class Rate extends AmountType
{
    /**
     * The RateChangeIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates a rate change is applicable. When false, a rate change does not apply.
     * - use: optional
     * @var bool
     */
    public $RateChangeIndicator;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The Duration
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Duration;
    /**
     * The RateMode
     * Meta informations extracted from the WSDL
     * - documentation: This supports returning a type of rate (minimum, maximum, etc.) as an alternative to returning a specific rate. Refer to OpenTravel Code List Rate Mode (RMO).
     * - use: optional
     * @var string
     */
    public $RateMode;
    /**
     * The CachedIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, this indicates the rate data is not real-time.
     * - use: optional
     * @var bool
     */
    public $CachedIndicator;
    /**
     * The RateSource
     * Meta informations extracted from the WSDL
     * - documentation: The source from which the rate was acquired.
     * - use: optional
     * @var string
     */
    public $RateSource;
    /**
     * The RateTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to identify the type of rate. Refer to OpenTravel Code list Rate Plan Type (RPT).
     * - use: optional
     * @var string
     */
    public $RateTypeCode;
    /**
     * The RoomPricingType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how the room is priced (per night, per person, etc.).
     * - use: optional
     * @var string
     */
    public $RoomPricingType;
    /**
     * Constructor method for Rate
     * @uses Rate::setRateChangeIndicator()
     * @uses Rate::setTPA_Extensions()
     * @uses Rate::setDuration()
     * @uses Rate::setRateMode()
     * @uses Rate::setCachedIndicator()
     * @uses Rate::setRateSource()
     * @uses Rate::setRateTypeCode()
     * @uses Rate::setRoomPricingType()
     * @param bool $rateChangeIndicator
     * @param mixed $tPA_Extensions
     * @param string $duration
     * @param string $rateMode
     * @param bool $cachedIndicator
     * @param string $rateSource
     * @param string $rateTypeCode
     * @param string $roomPricingType
     */
    public function __construct($rateChangeIndicator = null, $tPA_Extensions = null, $duration = null, $rateMode = null, $cachedIndicator = null, $rateSource = null, $rateTypeCode = null, $roomPricingType = null)
    {
        $this
            ->setRateChangeIndicator($rateChangeIndicator)
            ->setTPA_Extensions($tPA_Extensions)
            ->setDuration($duration)
            ->setRateMode($rateMode)
            ->setCachedIndicator($cachedIndicator)
            ->setRateSource($rateSource)
            ->setRateTypeCode($rateTypeCode)
            ->setRoomPricingType($roomPricingType);
    }
    /**
     * Get RateChangeIndicator value
     * @return bool|null
     */
    public function getRateChangeIndicator()
    {
        return $this->RateChangeIndicator;
    }
    /**
     * Set RateChangeIndicator value
     * @param bool $rateChangeIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Rate
     */
    public function setRateChangeIndicator($rateChangeIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($rateChangeIndicator) && !is_bool($rateChangeIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rateChangeIndicator)), __LINE__);
        }
        $this->RateChangeIndicator = $rateChangeIndicator;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Rate
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param string $duration
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Rate
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get RateMode value
     * @return string|null
     */
    public function getRateMode()
    {
        return $this->RateMode;
    }
    /**
     * Set RateMode value
     * @param string $rateMode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Rate
     */
    public function setRateMode($rateMode = null)
    {
        // validation for constraint: string
        if (!is_null($rateMode) && !is_string($rateMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateMode)), __LINE__);
        }
        $this->RateMode = $rateMode;
        return $this;
    }
    /**
     * Get CachedIndicator value
     * @return bool|null
     */
    public function getCachedIndicator()
    {
        return $this->CachedIndicator;
    }
    /**
     * Set CachedIndicator value
     * @param bool $cachedIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Rate
     */
    public function setCachedIndicator($cachedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($cachedIndicator) && !is_bool($cachedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cachedIndicator)), __LINE__);
        }
        $this->CachedIndicator = $cachedIndicator;
        return $this;
    }
    /**
     * Get RateSource value
     * @return string|null
     */
    public function getRateSource()
    {
        return $this->RateSource;
    }
    /**
     * Set RateSource value
     * @param string $rateSource
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Rate
     */
    public function setRateSource($rateSource = null)
    {
        // validation for constraint: string
        if (!is_null($rateSource) && !is_string($rateSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateSource)), __LINE__);
        }
        $this->RateSource = $rateSource;
        return $this;
    }
    /**
     * Get RateTypeCode value
     * @return string|null
     */
    public function getRateTypeCode()
    {
        return $this->RateTypeCode;
    }
    /**
     * Set RateTypeCode value
     * @param string $rateTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Rate
     */
    public function setRateTypeCode($rateTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($rateTypeCode) && !is_string($rateTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateTypeCode)), __LINE__);
        }
        $this->RateTypeCode = $rateTypeCode;
        return $this;
    }
    /**
     * Get RoomPricingType value
     * @return string|null
     */
    public function getRoomPricingType()
    {
        return $this->RoomPricingType;
    }
    /**
     * Set RoomPricingType value
     * @param string $roomPricingType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Rate
     */
    public function setRoomPricingType($roomPricingType = null)
    {
        // validation for constraint: string
        if (!is_null($roomPricingType) && !is_string($roomPricingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomPricingType)), __LINE__);
        }
        $this->RoomPricingType = $roomPricingType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Rate
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
