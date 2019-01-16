<?php

namespace Devlabs91\GenericOtaHotelApiService\EnumType;

/**
 * This class stands for MealServiceType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumerated List (Meal Code in brackets): Breakfast (B); Snack (S); Dinner (D); Hot Meal (H); Lunch (L); Refreshments (R); Complimentary Liquor (C); Meal (M); Liquor for Purchase (P); Food for Purchase (F); Cold Meal (O); No Meal
 * Service (-). Alternately, a String of Length 32 can be used if the above list does not suffice. | Used for Character Strings, length 1 to 32.
 * - maxLength: 32
 * - minLength: 1
 * @subpackage Enumerations
 */
class MealServiceType
{
    /**
     * Constant for value 'Breakfast'
     * @return string 'Breakfast'
     */
    const VALUE_BREAKFAST = 'Breakfast';
    /**
     * Constant for value 'Snack'
     * @return string 'Snack'
     */
    const VALUE_SNACK = 'Snack';
    /**
     * Constant for value 'Dinner'
     * @return string 'Dinner'
     */
    const VALUE_DINNER = 'Dinner';
    /**
     * Constant for value 'Hot Meal'
     * @return string 'Hot Meal'
     */
    const VALUE_HOT_MEAL = 'Hot Meal';
    /**
     * Constant for value 'Lunch'
     * @return string 'Lunch'
     */
    const VALUE_LUNCH = 'Lunch';
    /**
     * Constant for value 'Refreshments'
     * @return string 'Refreshments'
     */
    const VALUE_REFRESHMENTS = 'Refreshments';
    /**
     * Constant for value 'Complimentary Liquor'
     * @return string 'Complimentary Liquor'
     */
    const VALUE_COMPLIMENTARY_LIQUOR = 'Complimentary Liquor';
    /**
     * Constant for value 'Meal'
     * @return string 'Meal'
     */
    const VALUE_MEAL = 'Meal';
    /**
     * Constant for value 'Liquor for Purchase'
     * @return string 'Liquor for Purchase'
     */
    const VALUE_LIQUOR_FOR_PURCHASE = 'Liquor for Purchase';
    /**
     * Constant for value 'Food for Purchase'
     * @return string 'Food for Purchase'
     */
    const VALUE_FOOD_FOR_PURCHASE = 'Food for Purchase';
    /**
     * Constant for value 'Cold Meal'
     * @return string 'Cold Meal'
     */
    const VALUE_COLD_MEAL = 'Cold Meal';
    /**
     * Constant for value 'No Meal Service'
     * @return string 'No Meal Service'
     */
    const VALUE_NO_MEAL_SERVICE = 'No Meal Service';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_BREAKFAST
     * @uses self::VALUE_SNACK
     * @uses self::VALUE_DINNER
     * @uses self::VALUE_HOT_MEAL
     * @uses self::VALUE_LUNCH
     * @uses self::VALUE_REFRESHMENTS
     * @uses self::VALUE_COMPLIMENTARY_LIQUOR
     * @uses self::VALUE_MEAL
     * @uses self::VALUE_LIQUOR_FOR_PURCHASE
     * @uses self::VALUE_FOOD_FOR_PURCHASE
     * @uses self::VALUE_COLD_MEAL
     * @uses self::VALUE_NO_MEAL_SERVICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BREAKFAST,
            self::VALUE_SNACK,
            self::VALUE_DINNER,
            self::VALUE_HOT_MEAL,
            self::VALUE_LUNCH,
            self::VALUE_REFRESHMENTS,
            self::VALUE_COMPLIMENTARY_LIQUOR,
            self::VALUE_MEAL,
            self::VALUE_LIQUOR_FOR_PURCHASE,
            self::VALUE_FOOD_FOR_PURCHASE,
            self::VALUE_COLD_MEAL,
            self::VALUE_NO_MEAL_SERVICE,
        );
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
