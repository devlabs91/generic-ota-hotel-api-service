<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightSegmentRPHs StructType
 * Meta informations extracted from the WSDL
 * - documentation: Reference pointers to flight segments
 * @subpackage Structs
 */
class FlightSegmentRPHs extends AbstractStructBase
{
    /**
     * The FlightSegmentRPH
     * Meta informations extracted from the WSDL
     * - documentation: Reference to the flight segments for this traveler
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $FlightSegmentRPH;
    /**
     * Constructor method for FlightSegmentRPHs
     * @uses FlightSegmentRPHs::setFlightSegmentRPH()
     * @param mixed[] $flightSegmentRPH
     */
    public function __construct(array $flightSegmentRPH = array())
    {
        $this
            ->setFlightSegmentRPH($flightSegmentRPH);
    }
    /**
     * Get FlightSegmentRPH value
     * @return mixed[]|null
     */
    public function getFlightSegmentRPH()
    {
        return $this->FlightSegmentRPH;
    }
    /**
     * Set FlightSegmentRPH value
     * @throws \InvalidArgumentException
     * @param mixed[] $flightSegmentRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightSegmentRPHs
     */
    public function setFlightSegmentRPH(array $flightSegmentRPH = array())
    {
        foreach ($flightSegmentRPH as $flightSegmentRPHsFlightSegmentRPHItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The FlightSegmentRPH property can only contain items of anyType, "%s" given', is_object($flightSegmentRPHsFlightSegmentRPHItem) ? get_class($flightSegmentRPHsFlightSegmentRPHItem) : gettype($flightSegmentRPHsFlightSegmentRPHItem)), __LINE__);
            }
        }
        $this->FlightSegmentRPH = $flightSegmentRPH;
        return $this;
    }
    /**
     * Add item to FlightSegmentRPH value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightSegmentRPHs
     */
    public function addToFlightSegmentRPH($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The FlightSegmentRPH property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightSegmentRPH[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightSegmentRPHs
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
