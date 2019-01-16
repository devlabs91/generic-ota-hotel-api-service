<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeSpan StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Time Span which covers the Reservation, Room Stay or Service.
 * @subpackage Structs
 */
class TimeSpan extends DateTimeSpanType
{
    /**
     * The Increment
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the increment at which a service offering is repeated. For example an increment of PT2H would mean that the service is offered every two hours.
     * - use: optional
     * @var string
     */
    public $Increment;
    /**
     * Constructor method for TimeSpan
     * @uses TimeSpan::setIncrement()
     * @param string $increment
     */
    public function __construct($increment = null)
    {
        $this
            ->setIncrement($increment);
    }
    /**
     * Get Increment value
     * @return string|null
     */
    public function getIncrement()
    {
        return $this->Increment;
    }
    /**
     * Set Increment value
     * @param string $increment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimeSpan
     */
    public function setIncrement($increment = null)
    {
        // validation for constraint: string
        if (!is_null($increment) && !is_string($increment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($increment)), __LINE__);
        }
        $this->Increment = $increment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimeSpan
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
