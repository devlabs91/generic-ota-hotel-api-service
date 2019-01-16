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
     * The AirItinerary
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the origin and destination of the traveler. Attributes: DirectionInd - A directional indicator that identifies a type of air booking, either one-way, round-trip, or open-jaw with the enumeration of (OneWay | RT | OpenJaw)
     * respectively. ActionCode - Indicates the status of the booking, such as OK or Wait-List. NumberInParty - Indicates the traveler count.
     * - minOccurs: 0
     * @var mixed
     */
    public $AirItinerary;
    /**
     * The AirItineraryPricingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AirItineraryPricingInfo
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
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfo
     */
    public $TicketingInfo;
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: Assigns a number to priced itineraries.
     * - use: optional
     * @var int
     */
    public $SequenceNumber;
    /**
     * The PriceType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies how the pricing was done.
     * - use: optional
     * @var string
     */
    public $PriceType;
    /**
     * The NUC_Rate
     * Meta informations extracted from the WSDL
     * - documentation: The neutral unit currency rate.
     * - use: optional
     * @var float
     */
    public $NUC_Rate;
    /**
     * The ExchangeRate
     * Meta informations extracted from the WSDL
     * - documentation: The currency exchange rate.
     * - use: optional
     * @var float
     */
    public $ExchangeRate;
    /**
     * Constructor method for PricedItineraryType
     * @uses PricedItineraryType::setAirItinerary()
     * @uses PricedItineraryType::setAirItineraryPricingInfo()
     * @uses PricedItineraryType::setNotes()
     * @uses PricedItineraryType::setTicketingInfo()
     * @uses PricedItineraryType::setSequenceNumber()
     * @uses PricedItineraryType::setPriceType()
     * @uses PricedItineraryType::setNUC_Rate()
     * @uses PricedItineraryType::setExchangeRate()
     * @param mixed $airItinerary
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AirItineraryPricingInfo $airItineraryPricingInfo
     * @param mixed[] $notes
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfo $ticketingInfo
     * @param int $sequenceNumber
     * @param string $priceType
     * @param float $nUC_Rate
     * @param float $exchangeRate
     */
    public function __construct($airItinerary = null, \Devlabs91\GenericOtaHotelApiService\StructType\AirItineraryPricingInfo $airItineraryPricingInfo = null, array $notes = array(), \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfo $ticketingInfo = null, $sequenceNumber = null, $priceType = null, $nUC_Rate = null, $exchangeRate = null)
    {
        $this
            ->setAirItinerary($airItinerary)
            ->setAirItineraryPricingInfo($airItineraryPricingInfo)
            ->setNotes($notes)
            ->setTicketingInfo($ticketingInfo)
            ->setSequenceNumber($sequenceNumber)
            ->setPriceType($priceType)
            ->setNUC_Rate($nUC_Rate)
            ->setExchangeRate($exchangeRate);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirItineraryPricingInfo|null
     */
    public function getAirItineraryPricingInfo()
    {
        return $this->AirItineraryPricingInfo;
    }
    /**
     * Set AirItineraryPricingInfo value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AirItineraryPricingInfo $airItineraryPricingInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItineraryType
     */
    public function setAirItineraryPricingInfo(\Devlabs91\GenericOtaHotelApiService\StructType\AirItineraryPricingInfo $airItineraryPricingInfo = null)
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfo|null
     */
    public function getTicketingInfo()
    {
        return $this->TicketingInfo;
    }
    /**
     * Set TicketingInfo value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfo $ticketingInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItineraryType
     */
    public function setTicketingInfo(\Devlabs91\GenericOtaHotelApiService\StructType\TicketingInfo $ticketingInfo = null)
    {
        $this->TicketingInfo = $ticketingInfo;
        return $this;
    }
    /**
     * Get SequenceNumber value
     * @return int|null
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
     * Get PriceType value
     * @return string|null
     */
    public function getPriceType()
    {
        return $this->PriceType;
    }
    /**
     * Set PriceType value
     * @param string $priceType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItineraryType
     */
    public function setPriceType($priceType = null)
    {
        // validation for constraint: string
        if (!is_null($priceType) && !is_string($priceType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($priceType)), __LINE__);
        }
        $this->PriceType = $priceType;
        return $this;
    }
    /**
     * Get NUC_Rate value
     * @return float|null
     */
    public function getNUC_Rate()
    {
        return $this->NUC_Rate;
    }
    /**
     * Set NUC_Rate value
     * @param float $nUC_Rate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItineraryType
     */
    public function setNUC_Rate($nUC_Rate = null)
    {
        $this->NUC_Rate = $nUC_Rate;
        return $this;
    }
    /**
     * Get ExchangeRate value
     * @return float|null
     */
    public function getExchangeRate()
    {
        return $this->ExchangeRate;
    }
    /**
     * Set ExchangeRate value
     * @param float $exchangeRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItineraryType
     */
    public function setExchangeRate($exchangeRate = null)
    {
        $this->ExchangeRate = $exchangeRate;
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
