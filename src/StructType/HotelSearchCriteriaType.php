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
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Criterion[]
     */
    public $Criterion;
    /**
     * The AvailableOnlyIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, return only hotels that are available.
     * - use: optional
     * @var bool
     */
    public $AvailableOnlyIndicator;
    /**
     * The BestOnlyIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, return only the lowest room rate for hotels that are available.
     * @var bool
     */
    public $BestOnlyIndicator;
    /**
     * Constructor method for HotelSearchCriteriaType
     * @uses HotelSearchCriteriaType::setCriterion()
     * @uses HotelSearchCriteriaType::setAvailableOnlyIndicator()
     * @uses HotelSearchCriteriaType::setBestOnlyIndicator()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Criterion[] $criterion
     * @param bool $availableOnlyIndicator
     * @param bool $bestOnlyIndicator
     */
    public function __construct(array $criterion = array(), $availableOnlyIndicator = null, $bestOnlyIndicator = null)
    {
        $this
            ->setCriterion($criterion)
            ->setAvailableOnlyIndicator($availableOnlyIndicator)
            ->setBestOnlyIndicator($bestOnlyIndicator);
    }
    /**
     * Get Criterion value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criterion[]|null
     */
    public function getCriterion()
    {
        return $this->Criterion;
    }
    /**
     * Set Criterion value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Criterion[] $criterion
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriteriaType
     */
    public function setCriterion(array $criterion = array())
    {
        foreach ($criterion as $hotelSearchCriteriaTypeCriterionItem) {
            // validation for constraint: itemType
            if (!$hotelSearchCriteriaTypeCriterionItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Criterion) {
                throw new \InvalidArgumentException(sprintf('The Criterion property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Criterion, "%s" given', is_object($hotelSearchCriteriaTypeCriterionItem) ? get_class($hotelSearchCriteriaTypeCriterionItem) : gettype($hotelSearchCriteriaTypeCriterionItem)), __LINE__);
            }
        }
        $this->Criterion = $criterion;
        return $this;
    }
    /**
     * Add item to Criterion value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Criterion $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriteriaType
     */
    public function addToCriterion(\Devlabs91\GenericOtaHotelApiService\StructType\Criterion $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Criterion) {
            throw new \InvalidArgumentException(sprintf('The Criterion property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Criterion, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Criterion[] = $item;
        return $this;
    }
    /**
     * Get AvailableOnlyIndicator value
     * @return bool|null
     */
    public function getAvailableOnlyIndicator()
    {
        return $this->AvailableOnlyIndicator;
    }
    /**
     * Set AvailableOnlyIndicator value
     * @param bool $availableOnlyIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriteriaType
     */
    public function setAvailableOnlyIndicator($availableOnlyIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($availableOnlyIndicator) && !is_bool($availableOnlyIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($availableOnlyIndicator)), __LINE__);
        }
        $this->AvailableOnlyIndicator = $availableOnlyIndicator;
        return $this;
    }
    /**
     * Get BestOnlyIndicator value
     * @return bool|null
     */
    public function getBestOnlyIndicator()
    {
        return $this->BestOnlyIndicator;
    }
    /**
     * Set BestOnlyIndicator value
     * @param bool $bestOnlyIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelSearchCriteriaType
     */
    public function setBestOnlyIndicator($bestOnlyIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($bestOnlyIndicator) && !is_bool($bestOnlyIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bestOnlyIndicator)), __LINE__);
        }
        $this->BestOnlyIndicator = $bestOnlyIndicator;
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
