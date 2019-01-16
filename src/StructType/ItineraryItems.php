<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItineraryItems StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of elements to allow any item of inventory to be requested for a booking. Normal usage is for the items to be presented in chronological sequence | A collection of elements to allow any item of inventory to be requested
 * for a booking. Normal usage is for the items to be presented in chronological sequence.
 * @subpackage Structs
 */
class ItineraryItems extends AbstractStructBase
{
    /**
     * The ItineraryItem
     * Meta informations extracted from the WSDL
     * - documentation: An item of package itinerary - typically a flight, accommodation or car rental arrangement. | Details of a package component.
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $ItineraryItem;
    /**
     * Constructor method for ItineraryItems
     * @uses ItineraryItems::setItineraryItem()
     * @param mixed[] $itineraryItem
     */
    public function __construct(array $itineraryItem = array())
    {
        $this
            ->setItineraryItem($itineraryItem);
    }
    /**
     * Get ItineraryItem value
     * @return mixed[]|null
     */
    public function getItineraryItem()
    {
        return $this->ItineraryItem;
    }
    /**
     * Set ItineraryItem value
     * @throws \InvalidArgumentException
     * @param mixed[] $itineraryItem
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItems
     */
    public function setItineraryItem(array $itineraryItem = array())
    {
        foreach ($itineraryItem as $itineraryItemsItineraryItemItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The ItineraryItem property can only contain items of anyType, "%s" given', is_object($itineraryItemsItineraryItemItem) ? get_class($itineraryItemsItineraryItemItem) : gettype($itineraryItemsItineraryItemItem)), __LINE__);
            }
        }
        $this->ItineraryItem = $itineraryItem;
        return $this;
    }
    /**
     * Add item to ItineraryItem value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItems
     */
    public function addToItineraryItem($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The ItineraryItem property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItineraryItem[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ItineraryItems
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
