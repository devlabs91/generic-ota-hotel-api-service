<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Criteria StructType
 * @subpackage Structs
 */
class Criteria extends AbstractStructBase
{
    /**
     * The Criterion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType[]
     */
    public $Criterion;
    /**
     * Constructor method for Criteria
     * @uses Criteria::setCriterion()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType[] $criterion
     */
    public function __construct(array $criterion = array())
    {
        $this
            ->setCriterion($criterion);
    }
    /**
     * Get Criterion value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType[]|null
     */
    public function getCriterion()
    {
        return $this->Criterion;
    }
    /**
     * Set Criterion value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType[] $criterion
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criteria
     */
    public function setCriterion(array $criterion = array())
    {
        foreach ($criterion as $criteriaCriterionItem) {
            // validation for constraint: itemType
            if (!$criteriaCriterionItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType) {
                throw new \InvalidArgumentException(sprintf('The Criterion property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType, "%s" given', is_object($criteriaCriterionItem) ? get_class($criteriaCriterionItem) : gettype($criteriaCriterionItem)), __LINE__);
            }
        }
        $this->Criterion = $criterion;
        return $this;
    }
    /**
     * Add item to Criterion value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criteria
     */
    public function addToCriterion(\Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType) {
            throw new \InvalidArgumentException(sprintf('The Criterion property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriterionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Criterion[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criteria
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
