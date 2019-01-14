<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricedItineraryType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Itinerary with pricing information.
 * @subpackage Structs
 */
class PricedItineraryType extends AbstractStructBase
{
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: Assigns a number to priced itineraries.
     * - use: required
     * @var int
     */
    public $SequenceNumber;
    /**
     * The AirItinerary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $AirItinerary;
    /**
     * The AirItineraryPricingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $AirItineraryPricingInfo;
    /**
     * The Notes
     * Meta informations extracted from the WSDL
     * - documentation: Provides for free form descriptive information for the priced itinerary.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Notes;
    /**
     * The TicketingInfo
     * Meta informations extracted from the WSDL
     * - documentation: Container for TicketingInfoRS_Type.
     * - minOccurs: 0
     * @var mixed
     */
    public $TicketingInfo;
    /**
     * The OriginDestinationRPH
     * Meta informations extracted from the WSDL
     * - documentation: When a PricedItinerary element contains flights and pricing information for a single OriginDestinationPair from the OTA_LowFareSearchRQ message, this RPH attribute identifies that OriginDestinationPair from the RQ. When the
     * PricedItinerary contains flights and pricing information for all OriginDestinationPairs from the OTA_LowFareSearchRQ message, this attribute should not be included.
     * - use: optional
     * @var string
     */
    public $OriginDestinationRPH;
    /**
     * Constructor method for PricedItineraryType
     * @uses PricedItineraryType::setSequenceNumber()
     * @uses PricedItineraryType::setAirItinerary()
     * @uses PricedItineraryType::setAirItineraryPricingInfo()
     * @uses PricedItineraryType::setNotes()
     * @uses PricedItineraryType::setTicketingInfo()
     * @uses PricedItineraryType::setOriginDestinationRPH()
     * @param int $sequenceNumber
     * @param mixed $airItinerary
     * @param mixed $airItineraryPricingInfo
     * @param mixed[] $notes
     * @param mixed $ticketingInfo
     * @param string $originDestinationRPH
     */
    public function __construct($sequenceNumber = null, $airItinerary = null, $airItineraryPricingInfo = null, array $notes = array(), $ticketingInfo = null, $originDestinationRPH = null)
    {
        $this
            ->setSequenceNumber($sequenceNumber)
            ->setAirItinerary($airItinerary)
            ->setAirItineraryPricingInfo($airItineraryPricingInfo)
            ->setNotes($notes)
            ->setTicketingInfo($ticketingInfo)
            ->setOriginDestinationRPH($originDestinationRPH);
    }
    /**
     * Get SequenceNumber value
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItineraryType
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !is_numeric($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNumber)), __LINE__);
        }
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get AirItinerary value
     * @return mixed|null
     */
    public function getAirItinerary()
    {
        return $this->AirItinerary;
    }
    /**
     * Set AirItinerary value
     * @param mixed $airItinerary
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItineraryType
     */
    public function setAirItinerary($airItinerary = null)
    {
        $this->AirItinerary = $airItinerary;
        return $this;
    }
    /**
     * Get AirItineraryPricingInfo value
     * @return mixed|null
     */
    public function getAirItineraryPricingInfo()
    {
        return $this->AirItineraryPricingInfo;
    }
    /**
     * Set AirItineraryPricingInfo value
     * @param mixed $airItineraryPricingInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItineraryType
     */
    public function setAirItineraryPricingInfo($airItineraryPricingInfo = null)
    {
        $this->AirItineraryPricingInfo = $airItineraryPricingInfo;
        return $this;
    }
    /**
     * Get Notes value
     * @return mixed[]|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @throws \InvalidArgumentException
     * @param mixed[] $notes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItineraryType
     */
    public function setNotes(array $notes = array())
    {
        foreach ($notes as $pricedItineraryTypeNotesItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Notes property can only contain items of anyType, "%s" given', is_object($pricedItineraryTypeNotesItem) ? get_class($pricedItineraryTypeNotesItem) : gettype($pricedItineraryTypeNotesItem)), __LINE__);
            }
        }
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Add item to Notes value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItineraryType
     */
    public function addToNotes($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Notes property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Notes[] = $item;
        return $this;
    }
    /**
     * Get TicketingInfo value
     * @return mixed|null
     */
    public function getTicketingInfo()
    {
        return $this->TicketingInfo;
    }
    /**
     * Set TicketingInfo value
     * @param mixed $ticketingInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItineraryType
     */
    public function setTicketingInfo($ticketingInfo = null)
    {
        $this->TicketingInfo = $ticketingInfo;
        return $this;
    }
    /**
     * Get OriginDestinationRPH value
     * @return string|null
     */
    public function getOriginDestinationRPH()
    {
        return $this->OriginDestinationRPH;
    }
    /**
     * Set OriginDestinationRPH value
     * @param string $originDestinationRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItineraryType
     */
    public function setOriginDestinationRPH($originDestinationRPH = null)
    {
        // validation for constraint: string
        if (!is_null($originDestinationRPH) && !is_string($originDestinationRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originDestinationRPH)), __LINE__);
        }
        $this->OriginDestinationRPH = $originDestinationRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItineraryType
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
