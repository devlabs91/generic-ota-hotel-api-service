<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginDestinationOptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A container for flight segments.
 * @subpackage Structs
 */
class OriginDestinationOptionType extends AbstractStructBase
{
    /**
     * The FlightSegment
     * Meta informations extracted from the WSDL
     * - documentation: A container for necessary data to describe one or more legs of a single flight number.
     * - maxOccurs: 4
     * @var mixed[]
     */
    public $FlightSegment;
    /**
     * Constructor method for OriginDestinationOptionType
     * @uses OriginDestinationOptionType::setFlightSegment()
     * @param mixed[] $flightSegment
     */
    public function __construct(array $flightSegment = array())
    {
        $this
            ->setFlightSegment($flightSegment);
    }
    /**
     * Get FlightSegment value
     * @return mixed[]|null
     */
    public function getFlightSegment()
    {
        return $this->FlightSegment;
    }
    /**
     * Set FlightSegment value
     * @throws \InvalidArgumentException
     * @param mixed[] $flightSegment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationOptionType
     */
    public function setFlightSegment(array $flightSegment = array())
    {
        foreach ($flightSegment as $originDestinationOptionTypeFlightSegmentItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The FlightSegment property can only contain items of anyType, "%s" given', is_object($originDestinationOptionTypeFlightSegmentItem) ? get_class($originDestinationOptionTypeFlightSegmentItem) : gettype($originDestinationOptionTypeFlightSegmentItem)), __LINE__);
            }
        }
        $this->FlightSegment = $flightSegment;
        return $this;
    }
    /**
     * Add item to FlightSegment value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationOptionType
     */
    public function addToFlightSegment($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The FlightSegment property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightSegment[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationOptionType
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
