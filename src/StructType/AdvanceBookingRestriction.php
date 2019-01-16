<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdvanceBookingRestriction StructType
 * Meta informations extracted from the WSDL
 * - documentation: The period during which the booking must be made. | The period of time during which the booking must be made. | The day(s) of the week either on which the booking may be made or the day(s) of arrival for the booking.
 * @subpackage Structs
 */
class AdvanceBookingRestriction extends AbstractStructBase
{
    /**
     * The MinAdvanceBookingOffset
     * Meta informations extracted from the WSDL
     * - documentation: The minimum lead time required for the booking.
     * - use: optional
     * @var string
     */
    public $MinAdvanceBookingOffset;
    /**
     * The MaxAdvanceBookingOffset
     * Meta informations extracted from the WSDL
     * - documentation: The maximum lead time required for the booking.
     * - use: optional
     * @var string
     */
    public $MaxAdvanceBookingOffset;
    /**
     * Constructor method for AdvanceBookingRestriction
     * @uses AdvanceBookingRestriction::setMinAdvanceBookingOffset()
     * @uses AdvanceBookingRestriction::setMaxAdvanceBookingOffset()
     * @param string $minAdvanceBookingOffset
     * @param string $maxAdvanceBookingOffset
     */
    public function __construct($minAdvanceBookingOffset = null, $maxAdvanceBookingOffset = null)
    {
        $this
            ->setMinAdvanceBookingOffset($minAdvanceBookingOffset)
            ->setMaxAdvanceBookingOffset($maxAdvanceBookingOffset);
    }
    /**
     * Get MinAdvanceBookingOffset value
     * @return string|null
     */
    public function getMinAdvanceBookingOffset()
    {
        return $this->MinAdvanceBookingOffset;
    }
    /**
     * Set MinAdvanceBookingOffset value
     * @param string $minAdvanceBookingOffset
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvanceBookingRestriction
     */
    public function setMinAdvanceBookingOffset($minAdvanceBookingOffset = null)
    {
        // validation for constraint: string
        if (!is_null($minAdvanceBookingOffset) && !is_string($minAdvanceBookingOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minAdvanceBookingOffset)), __LINE__);
        }
        $this->MinAdvanceBookingOffset = $minAdvanceBookingOffset;
        return $this;
    }
    /**
     * Get MaxAdvanceBookingOffset value
     * @return string|null
     */
    public function getMaxAdvanceBookingOffset()
    {
        return $this->MaxAdvanceBookingOffset;
    }
    /**
     * Set MaxAdvanceBookingOffset value
     * @param string $maxAdvanceBookingOffset
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvanceBookingRestriction
     */
    public function setMaxAdvanceBookingOffset($maxAdvanceBookingOffset = null)
    {
        // validation for constraint: string
        if (!is_null($maxAdvanceBookingOffset) && !is_string($maxAdvanceBookingOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxAdvanceBookingOffset)), __LINE__);
        }
        $this->MaxAdvanceBookingOffset = $maxAdvanceBookingOffset;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvanceBookingRestriction
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
