<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MealsIncluded StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines which meals are included with this rate program.
 * @subpackage Structs
 */
class MealsIncluded extends AbstractStructBase
{
    /**
     * The Breakfast
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $Breakfast;
    /**
     * The Lunch
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $Lunch;
    /**
     * The Dinner
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $Dinner;
    /**
     * Constructor method for MealsIncluded
     * @uses MealsIncluded::setBreakfast()
     * @uses MealsIncluded::setLunch()
     * @uses MealsIncluded::setDinner()
     * @param bool $breakfast
     * @param bool $lunch
     * @param bool $dinner
     */
    public function __construct($breakfast = null, $lunch = null, $dinner = null)
    {
        $this
            ->setBreakfast($breakfast)
            ->setLunch($lunch)
            ->setDinner($dinner);
    }
    /**
     * Get Breakfast value
     * @return bool|null
     */
    public function getBreakfast()
    {
        return $this->Breakfast;
    }
    /**
     * Set Breakfast value
     * @param bool $breakfast
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded
     */
    public function setBreakfast($breakfast = null)
    {
        // validation for constraint: boolean
        if (!is_null($breakfast) && !is_bool($breakfast)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($breakfast)), __LINE__);
        }
        $this->Breakfast = $breakfast;
        return $this;
    }
    /**
     * Get Lunch value
     * @return bool|null
     */
    public function getLunch()
    {
        return $this->Lunch;
    }
    /**
     * Set Lunch value
     * @param bool $lunch
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded
     */
    public function setLunch($lunch = null)
    {
        // validation for constraint: boolean
        if (!is_null($lunch) && !is_bool($lunch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($lunch)), __LINE__);
        }
        $this->Lunch = $lunch;
        return $this;
    }
    /**
     * Get Dinner value
     * @return bool|null
     */
    public function getDinner()
    {
        return $this->Dinner;
    }
    /**
     * Set Dinner value
     * @param bool $dinner
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded
     */
    public function setDinner($dinner = null)
    {
        // validation for constraint: boolean
        if (!is_null($dinner) && !is_bool($dinner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dinner)), __LINE__);
        }
        $this->Dinner = $dinner;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded
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
