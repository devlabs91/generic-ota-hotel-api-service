<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelSearchCriteriaType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of single search criterion items.
 * @subpackage Structs
 */
class HotelSearchCriteriaType extends AbstractStructBase
{
    /**
     * The Criterion
     * Meta informations extracted from the WSDL
     * - documentation: Child elements that identify a single search criterion by criteria type. Because many of the types include partial matches to string values such as partial addresses (street names without a number) or partial telephone numbers (area
     * code or three-digit prefix area, etc.) a ExactMatch attribute indicates whether the match to the string value must be exact.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $Criterion;
    /**
     * Constructor method for HotelSearchCriteriaType
     * @uses HotelSearchCriteriaType::setCriterion()
     * @param mixed[] $criterion
     */
    public function __construct(array $criterion = array())
    {
        $this
            ->setCriterion($criterion);
    }
    /**
     * Get Criterion value
     * @return mixed[]|null
     */
    public function getCriterion()
    {
        return $this->Criterion;
    }
    /**
     * Set Criterion value
     * @throws \InvalidArgumentException
     * @param mixed[] $criterion
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriteriaType
     */
    public function setCriterion(array $criterion = array())
    {
        foreach ($criterion as $hotelSearchCriteriaTypeCriterionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Criterion property can only contain items of anyType, "%s" given', is_object($hotelSearchCriteriaTypeCriterionItem) ? get_class($hotelSearchCriteriaTypeCriterionItem) : gettype($hotelSearchCriteriaTypeCriterionItem)), __LINE__);
            }
        }
        $this->Criterion = $criterion;
        return $this;
    }
    /**
     * Add item to Criterion value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriteriaType
     */
    public function addToCriterion($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Criterion property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriteriaType
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
