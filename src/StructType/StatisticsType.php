<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatisticsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of Statistic Elements.
 * @subpackage Structs
 */
class StatisticsType extends AbstractStructBase
{
    /**
     * The Statistic
     * Meta informations extracted from the WSDL
     * - documentation: Used to define the report fiscal date, report code, and the hotel(s) for which data is being reported.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $Statistic;
    /**
     * Constructor method for StatisticsType
     * @uses StatisticsType::setStatistic()
     * @param mixed[] $statistic
     */
    public function __construct(array $statistic = array())
    {
        $this
            ->setStatistic($statistic);
    }
    /**
     * Get Statistic value
     * @return mixed[]|null
     */
    public function getStatistic()
    {
        return $this->Statistic;
    }
    /**
     * Set Statistic value
     * @throws \InvalidArgumentException
     * @param mixed[] $statistic
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticsType
     */
    public function setStatistic(array $statistic = array())
    {
        foreach ($statistic as $statisticsTypeStatisticItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Statistic property can only contain items of anyType, "%s" given', is_object($statisticsTypeStatisticItem) ? get_class($statisticsTypeStatisticItem) : gettype($statisticsTypeStatisticItem)), __LINE__);
            }
        }
        $this->Statistic = $statistic;
        return $this;
    }
    /**
     * Add item to Statistic value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticsType
     */
    public function addToStatistic($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Statistic property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Statistic[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticsType
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
