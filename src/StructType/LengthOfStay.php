<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LengthOfStay StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of patterns defining allowable lengths of stay (LOS).
 * @subpackage Structs
 */
class LengthOfStay extends AbstractStructBase
{
    /**
     * The LOS_Pattern
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\LOS_Pattern
     */
    public $LOS_Pattern;
    /**
     * The Time
     * Meta informations extracted from the WSDL
     * - documentation: Used in conjunction with the MinMaxMessageType and the TimeUnit to define the length of stay requirements.
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
     * The OpenStatusIndicator
     * Meta informations extracted from the WSDL
     * - documentation: Indicates if the length of stay is open or closed when MinMaxMessageType is FullPatternLOS if true then open and if false then closed.
     * - use: optional
     * @var bool
     */
    public $OpenStatusIndicator;
    /**
     * The MinMaxMessageType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MinMaxMessageType;
    /**
     * Constructor method for LengthOfStay
     * @uses LengthOfStay::setLOS_Pattern()
     * @uses LengthOfStay::setTime()
     * @uses LengthOfStay::setTimeUnit()
     * @uses LengthOfStay::setOpenStatusIndicator()
     * @uses LengthOfStay::setMinMaxMessageType()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LOS_Pattern $lOS_Pattern
     * @param int $time
     * @param string $timeUnit
     * @param bool $openStatusIndicator
     * @param string $minMaxMessageType
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\LOS_Pattern $lOS_Pattern = null, $time = null, $timeUnit = null, $openStatusIndicator = null, $minMaxMessageType = null)
    {
        $this
            ->setLOS_Pattern($lOS_Pattern)
            ->setTime($time)
            ->setTimeUnit($timeUnit)
            ->setOpenStatusIndicator($openStatusIndicator)
            ->setMinMaxMessageType($minMaxMessageType);
    }
    /**
     * Get LOS_Pattern value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LOS_Pattern|null
     */
    public function getLOS_Pattern()
    {
        return $this->LOS_Pattern;
    }
    /**
     * Set LOS_Pattern value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LOS_Pattern $lOS_Pattern
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LengthOfStay
     */
    public function setLOS_Pattern(\Devlabs91\GenericOtaHotelApiService\StructType\LOS_Pattern $lOS_Pattern = null)
    {
        $this->LOS_Pattern = $lOS_Pattern;
        return $this;
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
     * Get OpenStatusIndicator value
     * @return bool|null
     */
    public function getOpenStatusIndicator()
    {
        return $this->OpenStatusIndicator;
    }
    /**
     * Set OpenStatusIndicator value
     * @param bool $openStatusIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LengthOfStay
     */
    public function setOpenStatusIndicator($openStatusIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($openStatusIndicator) && !is_bool($openStatusIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($openStatusIndicator)), __LINE__);
        }
        $this->OpenStatusIndicator = $openStatusIndicator;
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
