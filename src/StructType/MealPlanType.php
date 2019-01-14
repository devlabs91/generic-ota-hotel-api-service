<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MealPlanType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of meal arrangements, booked or available according to context, with appropriate supplementary charges.
 * @subpackage Structs
 */
class MealPlanType extends AbstractStructBase
{
    /**
     * The CustomerCounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $CustomerCounts;
    /**
     * The SupplementCharges
     * Meta informations extracted from the WSDL
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SupplementCharges;
    /**
     * Constructor method for MealPlanType
     * @uses MealPlanType::setCustomerCounts()
     * @uses MealPlanType::setSupplementCharges()
     * @param mixed $customerCounts
     * @param mixed[] $supplementCharges
     */
    public function __construct($customerCounts = null, array $supplementCharges = array())
    {
        $this
            ->setCustomerCounts($customerCounts)
            ->setSupplementCharges($supplementCharges);
    }
    /**
     * Get CustomerCounts value
     * @return mixed|null
     */
    public function getCustomerCounts()
    {
        return $this->CustomerCounts;
    }
    /**
     * Set CustomerCounts value
     * @param mixed $customerCounts
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MealPlanType
     */
    public function setCustomerCounts($customerCounts = null)
    {
        $this->CustomerCounts = $customerCounts;
        return $this;
    }
    /**
     * Get SupplementCharges value
     * @return mixed[]|null
     */
    public function getSupplementCharges()
    {
        return $this->SupplementCharges;
    }
    /**
     * Set SupplementCharges value
     * @throws \InvalidArgumentException
     * @param mixed[] $supplementCharges
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MealPlanType
     */
    public function setSupplementCharges(array $supplementCharges = array())
    {
        foreach ($supplementCharges as $mealPlanTypeSupplementChargesItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SupplementCharges property can only contain items of anyType, "%s" given', is_object($mealPlanTypeSupplementChargesItem) ? get_class($mealPlanTypeSupplementChargesItem) : gettype($mealPlanTypeSupplementChargesItem)), __LINE__);
            }
        }
        $this->SupplementCharges = $supplementCharges;
        return $this;
    }
    /**
     * Add item to SupplementCharges value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MealPlanType
     */
    public function addToSupplementCharges($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SupplementCharges property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SupplementCharges[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MealPlanType
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
