<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LengthOfStay StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of unsigned integers defining allowable lengths of stay (LOS).
 * @subpackage Structs
 */
class LengthOfStay extends AbstractStructBase
{
    /**
     * The Time
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $Time;
    /**
     * The TimeUnit
     * Meta informations extracted from the WSDL
     * - documentation: A time unit used to apply this status message to other inventory, and with more granularity than daily. Values: Year, Month, Week, Day, Hour, Minute, Second.
     * - use: optional
     * @var string
     */
    public $TimeUnit;
    /**
     * The MinMaxMessageType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MinMaxMessageType;
    /**
     * Constructor method for LengthOfStay
     * @uses LengthOfStay::setTime()
     * @uses LengthOfStay::setTimeUnit()
     * @uses LengthOfStay::setMinMaxMessageType()
     * @param int $time
     * @param string $timeUnit
     * @param string $minMaxMessageType
     */
    public function __construct($time = null, $timeUnit = null, $minMaxMessageType = null)
    {
        $this
            ->setTime($time)
            ->setTimeUnit($timeUnit)
            ->setMinMaxMessageType($minMaxMessageType);
    }
    /**
     * Get Time value
     * @return int|null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param int $time
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LengthOfStay
     */
    public function setTime($time = null)
    {
        // validation for constraint: int
        if (!is_null($time) && !is_numeric($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($time)), __LINE__);
        }
        $this->Time = $time;
        return $this;
    }
    /**
     * Get TimeUnit value
     * @return string|null
     */
    public function getTimeUnit()
    {
        return $this->TimeUnit;
    }
    /**
     * Set TimeUnit value
     * @param string $timeUnit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LengthOfStay
     */
    public function setTimeUnit($timeUnit = null)
    {
        // validation for constraint: string
        if (!is_null($timeUnit) && !is_string($timeUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeUnit)), __LINE__);
        }
        $this->TimeUnit = $timeUnit;
        return $this;
    }
    /**
     * Get MinMaxMessageType value
     * @return string|null
     */
    public function getMinMaxMessageType()
    {
        return $this->MinMaxMessageType;
    }
    /**
     * Set MinMaxMessageType value
     * @param string $minMaxMessageType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LengthOfStay
     */
    public function setMinMaxMessageType($minMaxMessageType = null)
    {
        // validation for constraint: string
        if (!is_null($minMaxMessageType) && !is_string($minMaxMessageType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minMaxMessageType)), __LINE__);
        }
        $this->MinMaxMessageType = $minMaxMessageType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LengthOfStay
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
