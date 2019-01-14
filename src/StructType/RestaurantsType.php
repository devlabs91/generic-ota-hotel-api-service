<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RestaurantsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides detailed information regarding restaurants.
 * @subpackage Structs
 */
class RestaurantsType extends AbstractStructBase
{
    /**
     * The Restaurant
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant[]
     */
    public $Restaurant;
    /**
     * The SrvcInfoCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCodes
     */
    public $SrvcInfoCodes;
    /**
     * Constructor method for RestaurantsType
     * @uses RestaurantsType::setRestaurant()
     * @uses RestaurantsType::setSrvcInfoCodes()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant[] $restaurant
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCodes $srvcInfoCodes
     */
    public function __construct(array $restaurant = array(), \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCodes $srvcInfoCodes = null)
    {
        $this
            ->setRestaurant($restaurant)
            ->setSrvcInfoCodes($srvcInfoCodes);
    }
    /**
     * Get Restaurant value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant[]|null
     */
    public function getRestaurant()
    {
        return $this->Restaurant;
    }
    /**
     * Set Restaurant value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant[] $restaurant
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantsType
     */
    public function setRestaurant(array $restaurant = array())
    {
        foreach ($restaurant as $restaurantsTypeRestaurantItem) {
            // validation for constraint: itemType
            if (!$restaurantsTypeRestaurantItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant) {
                throw new \InvalidArgumentException(sprintf('The Restaurant property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant, "%s" given', is_object($restaurantsTypeRestaurantItem) ? get_class($restaurantsTypeRestaurantItem) : gettype($restaurantsTypeRestaurantItem)), __LINE__);
            }
        }
        $this->Restaurant = $restaurant;
        return $this;
    }
    /**
     * Add item to Restaurant value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantsType
     */
    public function addToRestaurant(\Devlabs91\GenericOtaHotelApiService\StructType\Restaurant $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant) {
            throw new \InvalidArgumentException(sprintf('The Restaurant property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Restaurant, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Restaurant[] = $item;
        return $this;
    }
    /**
     * Get SrvcInfoCodes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCodes|null
     */
    public function getSrvcInfoCodes()
    {
        return $this->SrvcInfoCodes;
    }
    /**
     * Set SrvcInfoCodes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCodes $srvcInfoCodes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantsType
     */
    public function setSrvcInfoCodes(\Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCodes $srvcInfoCodes = null)
    {
        $this->SrvcInfoCodes = $srvcInfoCodes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RestaurantsType
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
