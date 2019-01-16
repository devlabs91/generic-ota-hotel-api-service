<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailRequestSegments StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of AvailRequestSegment. Each segment includes a collection of criteria that requests a bookable entity, which may include designated rate plans, room types, amenities or services, and the request can be used for guest
 * rooms or other inventory items for which availability is sought. Each segment would be presumed to have a unique date range for each request.
 * @subpackage Structs
 */
class AvailRequestSegments extends AvailRequestSegmentsType
{
    /**
     * The MaximumWaitTime
     * Meta informations extracted from the WSDL
     * - documentation: The value of this attribute will be a decimal field identifying the maximum number of seconds the responding application has to respond to the request. For example, if a client requests 10 OTA 'AvailRequestSegment' items but can only
     * wait up to 4.0 seconds max. If only 6 segments were collected within the time-frame, the client would only receive those 6 segments within one response message.
     * - use: optional
     * @var float
     */
    public $MaximumWaitTime;
    /**
     * Constructor method for AvailRequestSegments
     * @uses AvailRequestSegments::setMaximumWaitTime()
     * @param float $maximumWaitTime
     */
    public function __construct($maximumWaitTime = null)
    {
        $this
            ->setMaximumWaitTime($maximumWaitTime);
    }
    /**
     * Get MaximumWaitTime value
     * @return float|null
     */
    public function getMaximumWaitTime()
    {
        return $this->MaximumWaitTime;
    }
    /**
     * Set MaximumWaitTime value
     * @param float $maximumWaitTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegments
     */
    public function setMaximumWaitTime($maximumWaitTime = null)
    {
        $this->MaximumWaitTime = $maximumWaitTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegments
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
