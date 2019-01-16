<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Prices StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of room-based passenger-level prices. These will be either actual prices or supplemental charges dependent on the SupplementIndicator attribute. When these are actual prices, they may be by MealPlan (e.g., room prices on
 * HalfBoard arrangement, together with prices on Full Board).
 * @subpackage Structs
 */
class Prices extends AbstractStructBase
{
    /**
     * The Price
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Price[]
     */
    public $Price;
    /**
     * The SupplementIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When 'true', the Amount value in each Price element is additional to the base price; when 'false', the Amount is a full passenger price.
     * - use: optional
     * @var bool
     */
    public $SupplementIndicator;
    /**
     * The MealPlanRPH
     * Meta informations extracted from the WSDL
     * - documentation: Pointer to the MealPlan for which this set of RoomPrices applies - normally used when the SupplementIndicator attribute is 'False'.
     * - use: optional
     * @var string
     */
    public $MealPlanRPH;
    /**
     * Constructor method for Prices
     * @uses Prices::setPrice()
     * @uses Prices::setSupplementIndicator()
     * @uses Prices::setMealPlanRPH()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Price[] $price
     * @param bool $supplementIndicator
     * @param string $mealPlanRPH
     */
    public function __construct(array $price = array(), $supplementIndicator = null, $mealPlanRPH = null)
    {
        $this
            ->setPrice($price)
            ->setSupplementIndicator($supplementIndicator)
            ->setMealPlanRPH($mealPlanRPH);
    }
    /**
     * Get Price value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Price[]|null
     */
    public function getPrice()
    {
        return $this->Price;
    }
    /**
     * Set Price value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Price[] $price
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Prices
     */
    public function setPrice(array $price = array())
    {
        foreach ($price as $pricesPriceItem) {
            // validation for constraint: itemType
            if (!$pricesPriceItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Price) {
                throw new \InvalidArgumentException(sprintf('The Price property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Price, "%s" given', is_object($pricesPriceItem) ? get_class($pricesPriceItem) : gettype($pricesPriceItem)), __LINE__);
            }
        }
        $this->Price = $price;
        return $this;
    }
    /**
     * Add item to Price value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Price $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Prices
     */
    public function addToPrice(\Devlabs91\GenericOtaHotelApiService\StructType\Price $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Price) {
            throw new \InvalidArgumentException(sprintf('The Price property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Price, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Price[] = $item;
        return $this;
    }
    /**
     * Get SupplementIndicator value
     * @return bool|null
     */
    public function getSupplementIndicator()
    {
        return $this->SupplementIndicator;
    }
    /**
     * Set SupplementIndicator value
     * @param bool $supplementIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Prices
     */
    public function setSupplementIndicator($supplementIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($supplementIndicator) && !is_bool($supplementIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($supplementIndicator)), __LINE__);
        }
        $this->SupplementIndicator = $supplementIndicator;
        return $this;
    }
    /**
     * Get MealPlanRPH value
     * @return string|null
     */
    public function getMealPlanRPH()
    {
        return $this->MealPlanRPH;
    }
    /**
     * Set MealPlanRPH value
     * @param string $mealPlanRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Prices
     */
    public function setMealPlanRPH($mealPlanRPH = null)
    {
        // validation for constraint: string
        if (!is_null($mealPlanRPH) && !is_string($mealPlanRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mealPlanRPH)), __LINE__);
        }
        $this->MealPlanRPH = $mealPlanRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Prices
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
