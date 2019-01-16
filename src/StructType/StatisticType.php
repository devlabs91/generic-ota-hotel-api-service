<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatisticType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines all details needed to create a statistical report.
 * @subpackage Structs
 */
class StatisticType extends AbstractStructBase
{
    /**
     * The StatisticApplicationSets
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\StatisticApplicationSets
     */
    public $StatisticApplicationSets;
    /**
     * Constructor method for StatisticType
     * @uses StatisticType::setStatisticApplicationSets()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\StatisticApplicationSets $statisticApplicationSets
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\StatisticApplicationSets $statisticApplicationSets = null)
    {
        $this
            ->setStatisticApplicationSets($statisticApplicationSets);
    }
    /**
     * Get StatisticApplicationSets value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticApplicationSets|null
     */
    public function getStatisticApplicationSets()
    {
        return $this->StatisticApplicationSets;
    }
    /**
     * Set StatisticApplicationSets value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\StatisticApplicationSets $statisticApplicationSets
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticType
     */
    public function setStatisticApplicationSets(\Devlabs91\GenericOtaHotelApiService\StructType\StatisticApplicationSets $statisticApplicationSets = null)
    {
        $this->StatisticApplicationSets = $statisticApplicationSets;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticType
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
