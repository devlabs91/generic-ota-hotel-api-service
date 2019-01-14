<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricedItinerariesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Container for priced itineraries.
 * @subpackage Structs
 */
class PricedItinerariesType extends AbstractStructBase
{
    /**
     * The PricedItinerary
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PricedItinerary[]
     */
    public $PricedItinerary;
    /**
     * Constructor method for PricedItinerariesType
     * @uses PricedItinerariesType::setPricedItinerary()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricedItinerary[] $pricedItinerary
     */
    public function __construct(array $pricedItinerary = array())
    {
        $this
            ->setPricedItinerary($pricedItinerary);
    }
    /**
     * Get PricedItinerary value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItinerary[]|null
     */
    public function getPricedItinerary()
    {
        return $this->PricedItinerary;
    }
    /**
     * Set PricedItinerary value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricedItinerary[] $pricedItinerary
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItinerariesType
     */
    public function setPricedItinerary(array $pricedItinerary = array())
    {
        foreach ($pricedItinerary as $pricedItinerariesTypePricedItineraryItem) {
            // validation for constraint: itemType
            if (!$pricedItinerariesTypePricedItineraryItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PricedItinerary) {
                throw new \InvalidArgumentException(sprintf('The PricedItinerary property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PricedItinerary, "%s" given', is_object($pricedItinerariesTypePricedItineraryItem) ? get_class($pricedItinerariesTypePricedItineraryItem) : gettype($pricedItinerariesTypePricedItineraryItem)), __LINE__);
            }
        }
        $this->PricedItinerary = $pricedItinerary;
        return $this;
    }
    /**
     * Add item to PricedItinerary value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PricedItinerary $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItinerariesType
     */
    public function addToPricedItinerary(\Devlabs91\GenericOtaHotelApiService\StructType\PricedItinerary $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PricedItinerary) {
            throw new \InvalidArgumentException(sprintf('The PricedItinerary property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PricedItinerary, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PricedItinerary[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedItinerariesType
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
