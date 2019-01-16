<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FoodSrvcPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for type of food service facilities in a hotel. | Identifies the customer's level of preference for the hotel food service identified. | Used for Character Strings, length 1 to 128.
 * - maxLength: 128
 * - minLength: 1
 * @subpackage Structs
 */
class FoodSrvcPrefType extends AbstractStructBase
{
    /**
     * The FoodSrvcType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the types of food services offered by the hotel. Refer to OpenTravel Code List Main Cuisine Code (CUI).
     * @var string
     */
    public $FoodSrvcType;
    /**
     * Constructor method for FoodSrvcPrefType
     * @uses FoodSrvcPrefType::setFoodSrvcType()
     * @param string $foodSrvcType
     */
    public function __construct($foodSrvcType = null)
    {
        $this
            ->setFoodSrvcType($foodSrvcType);
    }
    /**
     * Get FoodSrvcType value
     * @return string|null
     */
    public function getFoodSrvcType()
    {
        return $this->FoodSrvcType;
    }
    /**
     * Set FoodSrvcType value
     * @param string $foodSrvcType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FoodSrvcPrefType
     */
    public function setFoodSrvcType($foodSrvcType = null)
    {
        // validation for constraint: string
        if (!is_null($foodSrvcType) && !is_string($foodSrvcType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($foodSrvcType)), __LINE__);
        }
        $this->FoodSrvcType = $foodSrvcType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FoodSrvcPrefType
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
