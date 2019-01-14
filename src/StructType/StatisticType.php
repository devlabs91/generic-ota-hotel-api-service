<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatisticType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Statistic class contains the guest revenue stay data to be included in the report.
 * @subpackage Structs
 */
class StatisticType extends AbstractStructBase
{
    /**
     * The RevenueCategorySummaries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $RevenueCategorySummaries;
    /**
     * The CountCategorySummaries
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
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
     * The FiscalDate
     * Meta informations extracted from the WSDL
     * - documentation: Hotel fiscal date for statistics.
     * - use: optional
     * @var string
     */
    public $FiscalDate;
    /**
     * The ReportCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of statistics collected. Each ReportCode corresponds to a set of category summaries based upon a predetermined agreement
     * - use: optional
     * @var string
     */
    public $ReportCode;
    /**
     * Constructor method for StatisticType
     * @uses StatisticType::setRevenueCategorySummaries()
     * @uses StatisticType::setCountCategorySummaries()
     * @uses StatisticType::setReportSummaries()
     * @uses StatisticType::setFiscalDate()
     * @uses StatisticType::setReportCode()
     * @param mixed $revenueCategorySummaries
     * @param mixed $countCategorySummaries
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ReportSummaries $reportSummaries
     * @param string $fiscalDate
     * @param string $reportCode
     */
    public function __construct($revenueCategorySummaries = null, $countCategorySummaries = null, \Devlabs91\GenericOtaHotelApiService\StructType\ReportSummaries $reportSummaries = null, $fiscalDate = null, $reportCode = null)
    {
        $this
            ->setRevenueCategorySummaries($revenueCategorySummaries)
            ->setCountCategorySummaries($countCategorySummaries)
            ->setReportSummaries($reportSummaries)
            ->setFiscalDate($fiscalDate)
            ->setReportCode($reportCode);
    }
    /**
     * Get RevenueCategorySummaries value
     * @return mixed|null
     */
    public function getRevenueCategorySummaries()
    {
        return $this->RevenueCategorySummaries;
    }
    /**
     * Set RevenueCategorySummaries value
     * @param mixed $revenueCategorySummaries
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticType
     */
    public function setRevenueCategorySummaries($revenueCategorySummaries = null)
    {
        $this->RevenueCategorySummaries = $revenueCategorySummaries;
        return $this;
    }
    /**
     * Get CountCategorySummaries value
     * @return mixed|null
     */
    public function getCountCategorySummaries()
    {
        return $this->CountCategorySummaries;
    }
    /**
     * Set CountCategorySummaries value
     * @param mixed $countCategorySummaries
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticType
     */
    public function setCountCategorySummaries($countCategorySummaries = null)
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticType
     */
    public function setReportSummaries(\Devlabs91\GenericOtaHotelApiService\StructType\ReportSummaries $reportSummaries = null)
    {
        $this->ReportSummaries = $reportSummaries;
        return $this;
    }
    /**
     * Get FiscalDate value
     * @return string|null
     */
    public function getFiscalDate()
    {
        return $this->FiscalDate;
    }
    /**
     * Set FiscalDate value
     * @param string $fiscalDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticType
     */
    public function setFiscalDate($fiscalDate = null)
    {
        // validation for constraint: string
        if (!is_null($fiscalDate) && !is_string($fiscalDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fiscalDate)), __LINE__);
        }
        $this->FiscalDate = $fiscalDate;
        return $this;
    }
    /**
     * Get ReportCode value
     * @return string|null
     */
    public function getReportCode()
    {
        return $this->ReportCode;
    }
    /**
     * Set ReportCode value
     * @param string $reportCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StatisticType
     */
    public function setReportCode($reportCode = null)
    {
        // validation for constraint: string
        if (!is_null($reportCode) && !is_string($reportCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reportCode)), __LINE__);
        }
        $this->ReportCode = $reportCode;
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
