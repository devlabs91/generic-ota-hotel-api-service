<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomPrices StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of price information for each available room based on an available board terms (meal plan) e.g prices for each room based on Half Board.
 * @subpackage Structs
 */
class RoomPrices extends AbstractStructBase
{
    /**
     * The RoomPrice
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $RoomPrice;
    /**
     * The MealPlan
     * Meta informations extracted from the WSDL
     * - documentation: The code for a meal plan e.g. AB- as brochure, AI- all inclusive, BB- bed and breakfast, FB- full board, HB- Half Board, RO- room only,SC- self catering
     * @var string
     */
    public $MealPlan;
    /**
     * Constructor method for RoomPrices
     * @uses RoomPrices::setRoomPrice()
     * @uses RoomPrices::setMealPlan()
     * @param mixed[] $roomPrice
     * @param string $mealPlan
     */
    public function __construct(array $roomPrice = array(), $mealPlan = null)
    {
        $this
            ->setRoomPrice($roomPrice)
            ->setMealPlan($mealPlan);
    }
    /**
     * Get RoomPrice value
     * @return mixed[]|null
     */
    public function getRoomPrice()
    {
        return $this->RoomPrice;
    }
    /**
     * Set RoomPrice value
     * @throws \InvalidArgumentException
     * @param mixed[] $roomPrice
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomPrices
     */
    public function setRoomPrice(array $roomPrice = array())
    {
        foreach ($roomPrice as $roomPricesRoomPriceItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RoomPrice property can only contain items of anyType, "%s" given', is_object($roomPricesRoomPriceItem) ? get_class($roomPricesRoomPriceItem) : gettype($roomPricesRoomPriceItem)), __LINE__);
            }
        }
        $this->RoomPrice = $roomPrice;
        return $this;
    }
    /**
     * Add item to RoomPrice value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomPrices
     */
    public function addToRoomPrice($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RoomPrice property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomPrice[] = $item;
        return $this;
    }
    /**
     * Get MealPlan value
     * @return string|null
     */
    public function getMealPlan()
    {
        return $this->MealPlan;
    }
    /**
     * Set MealPlan value
     * @param string $mealPlan
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomPrices
     */
    public function setMealPlan($mealPlan = null)
    {
        // validation for constraint: string
        if (!is_null($mealPlan) && !is_string($mealPlan)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mealPlan)), __LINE__);
        }
        $this->MealPlan = $mealPlan;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomPrices
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
