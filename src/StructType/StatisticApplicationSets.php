<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatisticApplicationSets StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of StatisticApplicationSet Elements.
 * @subpackage Structs
 */
class StatisticApplicationSets extends AbstractStructBase
{
    /**
     * The StatisticApplicationSet
     * Meta informations extracted from the WSDL
     * - documentation: Repeated for each date or set of statistic codes.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $StatisticApplicationSet;
    /**
     * Constructor method for StatisticApplicationSets
     * @uses StatisticApplicationSets::setStatisticApplicationSet()
     * @param mixed[] $statisticApplicationSet
     */
    public function __construct(array $statisticApplicationSet = array())
    {
        $this
            ->setStatisticApplicationSet($statisticApplicationSet);
    }
    /**
     * Get StatisticApplicationSet value
     * @return mixed[]|null
     */
    public function getStatisticApplicationSet()
    {
        return $this->StatisticApplicationSet;
    }
    /**
     * Set StatisticApplicationSet value
     * @throws \InvalidArgumentException
     * @param mixed[] $statisticApplicationSet
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticApplicationSets
     */
    public function setStatisticApplicationSet(array $statisticApplicationSet = array())
    {
        foreach ($statisticApplicationSet as $statisticApplicationSetsStatisticApplicationSetItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The StatisticApplicationSet property can only contain items of anyType, "%s" given', is_object($statisticApplicationSetsStatisticApplicationSetItem) ? get_class($statisticApplicationSetsStatisticApplicationSetItem) : gettype($statisticApplicationSetsStatisticApplicationSetItem)), __LINE__);
            }
        }
        $this->StatisticApplicationSet = $statisticApplicationSet;
        return $this;
    }
    /**
     * Add item to StatisticApplicationSet value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticApplicationSets
     */
    public function addToStatisticApplicationSet($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The StatisticApplicationSet property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->StatisticApplicationSet[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticApplicationSets
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
