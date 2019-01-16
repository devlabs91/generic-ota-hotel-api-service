<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricedItinerary StructType
 * Meta informations extracted from the WSDL
 * - documentation: Itinerary with pricing information.
 * @subpackage Structs
 */
class PricedItinerary extends PricedItineraryType
{
    /**
     * The OriginDestinationRefNumber
     * Meta informations extracted from the WSDL
     * - documentation: This attribute refers back to origin destination information in the OTA_AirLowFareSearchRQ message.
     * - use: optional
     * @var string
     */
    public $OriginDestinationRefNumber;
    /**
     * Constructor method for PricedItinerary
     * @uses PricedItinerary::setOriginDestinationRefNumber()
     * @param string $originDestinationRefNumber
     */
    public function __construct($originDestinationRefNumber = null)
    {
        $this
            ->setOriginDestinationRefNumber($originDestinationRefNumber);
    }
    /**
     * Get OriginDestinationRefNumber value
     * @return string|null
     */
    public function getOriginDestinationRefNumber()
    {
        return $this->OriginDestinationRefNumber;
    }
    /**
     * Set OriginDestinationRefNumber value
     * @param string $originDestinationRefNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItinerary
     */
    public function setOriginDestinationRefNumber($originDestinationRefNumber = null)
    {
        // validation for constraint: string
        if (!is_null($originDestinationRefNumber) && !is_string($originDestinationRefNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originDestinationRefNumber)), __LINE__);
        }
        $this->OriginDestinationRefNumber = $originDestinationRefNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItinerary
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
