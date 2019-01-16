<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirItineraryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the origin and destination of the traveler. Attributes: DirectionInd - A directional indicator that identifies a type of air booking, either one-way, round-trip, or open-jaw with the enumeration of (OneWay | RT | OpenJaw)
 * respectively; ActionCode - Indicates the status of the booking, such as OK or Wait-List; NumberInParty - Indicates the traveler count.
 * @subpackage Structs
 */
class AirItineraryType extends AbstractStructBase
{
    /**
     * The OriginDestinationOptions
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationOptions
     */
    public $OriginDestinationOptions;
    /**
     * The DirectionInd
     * Meta informations extracted from the WSDL
     * - documentation: Identifies whether travel is: one way, return trip, circle trip, open jaw, other.
     * - use: optional
     * @var string
     */
    public $DirectionInd;
    /**
     * Constructor method for AirItineraryType
     * @uses AirItineraryType::setOriginDestinationOptions()
     * @uses AirItineraryType::setDirectionInd()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationOptions $originDestinationOptions
     * @param string $directionInd
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationOptions $originDestinationOptions = null, $directionInd = null)
    {
        $this
            ->setOriginDestinationOptions($originDestinationOptions)
            ->setDirectionInd($directionInd);
    }
    /**
     * Get OriginDestinationOptions value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationOptions|null
     */
    public function getOriginDestinationOptions()
    {
        return $this->OriginDestinationOptions;
    }
    /**
     * Set OriginDestinationOptions value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationOptions $originDestinationOptions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirItineraryType
     */
    public function setOriginDestinationOptions(\Devlabs91\GenericOtaHotelApiService\StructType\OriginDestinationOptions $originDestinationOptions = null)
    {
        $this->OriginDestinationOptions = $originDestinationOptions;
        return $this;
    }
    /**
     * Get DirectionInd value
     * @return string|null
     */
    public function getDirectionInd()
    {
        return $this->DirectionInd;
    }
    /**
     * Set DirectionInd value
     * @param string $directionInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirItineraryType
     */
    public function setDirectionInd($directionInd = null)
    {
        // validation for constraint: string
        if (!is_null($directionInd) && !is_string($directionInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($directionInd)), __LINE__);
        }
        $this->DirectionInd = $directionInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirItineraryType
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
