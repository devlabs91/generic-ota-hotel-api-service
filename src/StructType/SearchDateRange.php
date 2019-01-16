<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDateRange StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines a date type and a date or date range for searching. | The date or date range to be searched.
 * @subpackage Structs
 */
class SearchDateRange extends AbstractStructBase
{
    /**
     * The SearchQualifier
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $SearchQualifier;
    /**
     * The Start
     * @var string
     */
    public $Start;
    /**
     * The Duration
     * @var string
     */
    public $Duration;
    /**
     * The End
     * @var string
     */
    public $End;
    /**
     * Constructor method for SearchDateRange
     * @uses SearchDateRange::setSearchQualifier()
     * @uses SearchDateRange::setStart()
     * @uses SearchDateRange::setDuration()
     * @uses SearchDateRange::setEnd()
     * @param string $searchQualifier
     * @param string $start
     * @param string $duration
     * @param string $end
     */
    public function __construct($searchQualifier = null, $start = null, $duration = null, $end = null)
    {
        $this
            ->setSearchQualifier($searchQualifier)
            ->setStart($start)
            ->setDuration($duration)
            ->setEnd($end);
    }
    /**
     * Get SearchQualifier value
     * @return string|null
     */
    public function getSearchQualifier()
    {
        return $this->SearchQualifier;
    }
    /**
     * Set SearchQualifier value
     * @param string $searchQualifier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SearchDateRange
     */
    public function setSearchQualifier($searchQualifier = null)
    {
        // validation for constraint: string
        if (!is_null($searchQualifier) && !is_string($searchQualifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchQualifier)), __LINE__);
        }
        $this->SearchQualifier = $searchQualifier;
        return $this;
    }
    /**
     * Get Start value
     * @return string|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param string $start
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SearchDateRange
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($start)), __LINE__);
        }
        $this->Start = $start;
        return $this;
    }
    /**
     * Get Duration value
     * @return string|null
     */
    public function getDuration()
    {
        return $this->Duration;
    }
    /**
     * Set Duration value
     * @param string $duration
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SearchDateRange
     */
    public function setDuration($duration = null)
    {
        // validation for constraint: string
        if (!is_null($duration) && !is_string($duration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($duration)), __LINE__);
        }
        $this->Duration = $duration;
        return $this;
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SearchDateRange
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($end)), __LINE__);
        }
        $this->End = $end;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SearchDateRange
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
