<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LatestReturn StructType
 * Meta informations extracted from the WSDL
 * - documentation: The latest day and time a vehicle can be returned to qualify for a specific rate.
 * @subpackage Structs
 */
class LatestReturn extends AbstractStructBase
{
    /**
     * The DayOfWeek
     * Meta informations extracted from the WSDL
     * - documentation: The latest day of the week the rental can terminate to qualify for the specific rate.
     * - use: optional
     * @var string
     */
    public $DayOfWeek;
    /**
     * The Time
     * Meta informations extracted from the WSDL
     * - documentation: The latest time, in conjunction with the DayOfWeek, the rental can terminate to qualify for the specific rate.
     * - use: optional
     * @var string
     */
    public $Time;
    /**
     * Constructor method for LatestReturn
     * @uses LatestReturn::setDayOfWeek()
     * @uses LatestReturn::setTime()
     * @param string $dayOfWeek
     * @param string $time
     */
    public function __construct($dayOfWeek = null, $time = null)
    {
        $this
            ->setDayOfWeek($dayOfWeek)
            ->setTime($time);
    }
    /**
     * Get DayOfWeek value
     * @return string|null
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @param string $dayOfWeek
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LatestReturn
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        // validation for constraint: string
        if (!is_null($dayOfWeek) && !is_string($dayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dayOfWeek)), __LINE__);
        }
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Get Time value
     * @return string|null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LatestReturn
     */
    public function setTime($time = null)
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($time)), __LINE__);
        }
        $this->Time = $time;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LatestReturn
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
