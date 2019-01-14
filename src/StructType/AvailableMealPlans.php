<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableMealPlans StructType
 * @subpackage Structs
 */
class AvailableMealPlans extends AbstractStructBase
{
    /**
     * The MealPlan
     * Meta informations extracted from the WSDL
     * - maxOccurs: 9
     * @var mixed[]
     */
    public $MealPlan;
    /**
     * Constructor method for AvailableMealPlans
     * @uses AvailableMealPlans::setMealPlan()
     * @param mixed[] $mealPlan
     */
    public function __construct(array $mealPlan = array())
    {
        $this
            ->setMealPlan($mealPlan);
    }
    /**
     * Get MealPlan value
     * @return mixed[]|null
     */
    public function getMealPlan()
    {
        return $this->MealPlan;
    }
    /**
     * Set MealPlan value
     * @throws \InvalidArgumentException
     * @param mixed[] $mealPlan
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableMealPlans
     */
    public function setMealPlan(array $mealPlan = array())
    {
        foreach ($mealPlan as $availableMealPlansMealPlanItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The MealPlan property can only contain items of anyType, "%s" given', is_object($availableMealPlansMealPlanItem) ? get_class($availableMealPlansMealPlanItem) : gettype($availableMealPlansMealPlanItem)), __LINE__);
            }
        }
        $this->MealPlan = $mealPlan;
        return $this;
    }
    /**
     * Add item to MealPlan value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableMealPlans
     */
    public function addToMealPlan($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The MealPlan property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MealPlan[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableMealPlans
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
