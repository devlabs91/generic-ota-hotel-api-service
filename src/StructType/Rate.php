<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rate StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Rate contains a collection of elements that define the amount of the rate, associated fees, additional occupant amounts as well as payment and cancellation policies. Taxes can be broken out or included within the various amounts.
 * A currency can be associated to each amount The applicable period of the the rate are indicated by the effective dates. Restrictions that may apply to that rate, such as the minimum or maximum length of stay, stay-over dates (such as a Saturday
 * night), min/max guests applicable for the rate, and age group (ex Adult) are attributes of Rate. It indicates the number of units that the quoted rate is based upon, as well as the TimeUnits type used that the rate is based upon, e.g.: 3days at
 * $100.00 per day.
 * @subpackage Structs
 */
class Rate extends AmountType
{
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
     * - documentation: This supports returning a type of rate (minimum, maximum, etc.) as an alternative to returning a specific rate. Refer to OTA Code List Rate Mode (RMO).
     * - use: optional
     * @var string
     */
    public $RateMode;
    /**
     * Constructor method for Rate
     * @uses Rate::setTPA_Extensions()
     * @uses Rate::setDuration()
     * @uses Rate::setRateMode()
     * @param mixed $tPA_Extensions
     * @param string $duration
     * @param string $rateMode
     */
    public function __construct($tPA_Extensions = null, $duration = null, $rateMode = null)
    {
        $this
            ->setTPA_Extensions($tPA_Extensions)
            ->setDuration($duration)
            ->setRateMode($rateMode);
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
