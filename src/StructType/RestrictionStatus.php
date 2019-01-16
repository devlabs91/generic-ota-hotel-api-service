<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RestrictionStatus StructType
 * Meta informations extracted from the WSDL
 * - documentation: Availability status assigned to the room rate combination. | Availability status assigned to the room rate combination for this booking rule. | Used to indicate whether the rate is on request or available.
 * @subpackage Structs
 */
class RestrictionStatus extends AbstractStructBase
{
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
     * Constructor method for RestrictionStatus
     * @uses RestrictionStatus::setMaxAdvancedBookingOffset()
     * @uses RestrictionStatus::setMinAdvancedBookingOffset()
     * @param string $maxAdvancedBookingOffset
     * @param string $minAdvancedBookingOffset
     */
    public function __construct($maxAdvancedBookingOffset = null, $minAdvancedBookingOffset = null)
    {
        $this
            ->setMaxAdvancedBookingOffset($maxAdvancedBookingOffset)
            ->setMinAdvancedBookingOffset($minAdvancedBookingOffset);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatus
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatus
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestrictionStatus
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
