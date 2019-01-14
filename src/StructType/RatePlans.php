<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlans StructType
 * Meta informations extracted from the WSDL
 * - documentation: Rate Plan info. | A collection of Rate Plans associated with a particular Room Stay. | The rate plan element is used to contain all the rate information for a single Rate Plan Code (ex RACK) for a given date range. A given Rate Plan
 * may have variable rates, over the effective period of the Rate Plan, this is represented by the child element Rates.
 * @subpackage Structs
 */
class RatePlans extends AbstractStructBase
{
    /**
     * The RatePlan
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $RatePlan;
    /**
     * Constructor method for RatePlans
     * @uses RatePlans::setRatePlan()
     * @param mixed[] $ratePlan
     */
    public function __construct(array $ratePlan = array())
    {
        $this
            ->setRatePlan($ratePlan);
    }
    /**
     * Get RatePlan value
     * @return mixed[]|null
     */
    public function getRatePlan()
    {
        return $this->RatePlan;
    }
    /**
     * Set RatePlan value
     * @throws \InvalidArgumentException
     * @param mixed[] $ratePlan
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlans
     */
    public function setRatePlan(array $ratePlan = array())
    {
        foreach ($ratePlan as $ratePlansRatePlanItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RatePlan property can only contain items of anyType, "%s" given', is_object($ratePlansRatePlanItem) ? get_class($ratePlansRatePlanItem) : gettype($ratePlansRatePlanItem)), __LINE__);
            }
        }
        $this->RatePlan = $ratePlan;
        return $this;
    }
    /**
     * Add item to RatePlan value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlans
     */
    public function addToRatePlan($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RatePlan property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RatePlan[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlans
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
