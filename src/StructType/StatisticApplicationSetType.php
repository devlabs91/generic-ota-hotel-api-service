<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatisticApplicationSetType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Includes the statistic data reported and the codes for which it has been aggregated, if applicable. The applicable date range for the data is defined in its attributes.
 * @subpackage Structs
 */
class StatisticApplicationSetType extends AbstractStructBase
{
    /**
     * The StatisticCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\StatisticCodes
     */
    public $StatisticCodes;
    /**
     * The RevenueCategorySummaries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummaries
     */
    public $RevenueCategorySummaries;
    /**
     * The CountCategorySummaries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummaries
     */
    public $CountCategorySummaries;
    /**
     * The ReportSummaries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ReportSummaries
     */
    public $ReportSummaries;
    /**
     * Constructor method for StatisticApplicationSetType
     * @uses StatisticApplicationSetType::setStatisticCodes()
     * @uses StatisticApplicationSetType::setRevenueCategorySummaries()
     * @uses StatisticApplicationSetType::setCountCategorySummaries()
     * @uses StatisticApplicationSetType::setReportSummaries()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\StatisticCodes $statisticCodes
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummaries $revenueCategorySummaries
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummaries $countCategorySummaries
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ReportSummaries $reportSummaries
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\StatisticCodes $statisticCodes = null, \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummaries $revenueCategorySummaries = null, \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummaries $countCategorySummaries = null, \Devlabs91\GenericOtaHotelApiService\StructType\ReportSummaries $reportSummaries = null)
    {
        $this
            ->setStatisticCodes($statisticCodes)
            ->setRevenueCategorySummaries($revenueCategorySummaries)
            ->setCountCategorySummaries($countCategorySummaries)
            ->setReportSummaries($reportSummaries);
    }
    /**
     * Get StatisticCodes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticCodes|null
     */
    public function getStatisticCodes()
    {
        return $this->StatisticCodes;
    }
    /**
     * Set StatisticCodes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\StatisticCodes $statisticCodes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticApplicationSetType
     */
    public function setStatisticCodes(\Devlabs91\GenericOtaHotelApiService\StructType\StatisticCodes $statisticCodes = null)
    {
        $this->StatisticCodes = $statisticCodes;
        return $this;
    }
    /**
     * Get RevenueCategorySummaries value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummaries|null
     */
    public function getRevenueCategorySummaries()
    {
        return $this->RevenueCategorySummaries;
    }
    /**
     * Set RevenueCategorySummaries value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummaries $revenueCategorySummaries
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticApplicationSetType
     */
    public function setRevenueCategorySummaries(\Devlabs91\GenericOtaHotelApiService\StructType\RevenueCategorySummaries $revenueCategorySummaries = null)
    {
        $this->RevenueCategorySummaries = $revenueCategorySummaries;
        return $this;
    }
    /**
     * Get CountCategorySummaries value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummaries|null
     */
    public function getCountCategorySummaries()
    {
        return $this->CountCategorySummaries;
    }
    /**
     * Set CountCategorySummaries value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummaries $countCategorySummaries
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticApplicationSetType
     */
    public function setCountCategorySummaries(\Devlabs91\GenericOtaHotelApiService\StructType\CountCategorySummaries $countCategorySummaries = null)
    {
        $this->CountCategorySummaries = $countCategorySummaries;
        return $this;
    }
    /**
     * Get ReportSummaries value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ReportSummaries|null
     */
    public function getReportSummaries()
    {
        return $this->ReportSummaries;
    }
    /**
     * Set ReportSummaries value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ReportSummaries $reportSummaries
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticApplicationSetType
     */
    public function setReportSummaries(\Devlabs91\GenericOtaHotelApiService\StructType\ReportSummaries $reportSummaries = null)
    {
        $this->ReportSummaries = $reportSummaries;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticApplicationSetType
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
