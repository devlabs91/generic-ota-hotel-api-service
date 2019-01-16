<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportSummaries StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of ReportSummary elements. | Container for ReportSummary elements of type ParagraphType.
 * @subpackage Structs
 */
class ReportSummaries extends AbstractStructBase
{
    /**
     * The ReportSummary
     * Meta informations extracted from the WSDL
     * - documentation: This element has text information, included with the data in the report as needed.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $ReportSummary;
    /**
     * Constructor method for ReportSummaries
     * @uses ReportSummaries::setReportSummary()
     * @param mixed[] $reportSummary
     */
    public function __construct(array $reportSummary = array())
    {
        $this
            ->setReportSummary($reportSummary);
    }
    /**
     * Get ReportSummary value
     * @return mixed[]|null
     */
    public function getReportSummary()
    {
        return $this->ReportSummary;
    }
    /**
     * Set ReportSummary value
     * @throws \InvalidArgumentException
     * @param mixed[] $reportSummary
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ReportSummaries
     */
    public function setReportSummary(array $reportSummary = array())
    {
        foreach ($reportSummary as $reportSummariesReportSummaryItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The ReportSummary property can only contain items of anyType, "%s" given', is_object($reportSummariesReportSummaryItem) ? get_class($reportSummariesReportSummaryItem) : gettype($reportSummariesReportSummaryItem)), __LINE__);
            }
        }
        $this->ReportSummary = $reportSummary;
        return $this;
    }
    /**
     * Add item to ReportSummary value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ReportSummaries
     */
    public function addToReportSummary($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The ReportSummary property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ReportSummary[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ReportSummaries
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
