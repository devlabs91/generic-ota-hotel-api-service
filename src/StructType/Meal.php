<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Meal StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies any meal and/or beverage services that are provided.
 * @subpackage Structs
 */
class Meal extends AbstractStructBase
{
    /**
     * The MealCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to designate a meal or beverage service.
     * - use: required
     * @var string
     */
    public $MealCode;
    /**
     * Constructor method for Meal
     * @uses Meal::setMealCode()
     * @param string $mealCode
     */
    public function __construct($mealCode = null)
    {
        $this
            ->setMealCode($mealCode);
    }
    /**
     * Get MealCode value
     * @return string
     */
    public function getMealCode()
    {
        return $this->MealCode;
    }
    /**
     * Set MealCode value
     * @param string $mealCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Meal
     */
    public function setMealCode($mealCode = null)
    {
        // validation for constraint: string
        if (!is_null($mealCode) && !is_string($mealCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mealCode)), __LINE__);
        }
        $this->MealCode = $mealCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Meal
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
