<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeWindowType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Total time span covered by this availability request (from the earliest arrival to the latest departure)
 * @subpackage Structs
 */
class TimeWindowType extends AbstractStructBase
{
    /**
     * The EarliestDate
     * Meta informations extracted from the WSDL
     * - documentation: The earliest ending date/time for the availability requested, expressed in dateTime format as prescribed by ISO 8601.
     * - use: optional
     * @var string
     */
    public $EarliestDate;
    /**
     * The LatestDate
     * Meta informations extracted from the WSDL
     * - documentation: The latest ending date/time for the availability requested, expressed in dateTime format as prescribed by ISO 8601.
     * - use: optional
     * @var string
     */
    public $LatestDate;
    /**
     * The DOW
     * Meta informations extracted from the WSDL
     * - documentation: The Day of Week of the starting date for the availability requested. Enumerated values of StartDOW are the seven days of the week: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, or Sunday.
     * - use: optional
     * @var string
     */
    public $DOW;
    /**
     * Constructor method for TimeWindowType
     * @uses TimeWindowType::setEarliestDate()
     * @uses TimeWindowType::setLatestDate()
     * @uses TimeWindowType::setDOW()
     * @param string $earliestDate
     * @param string $latestDate
     * @param string $dOW
     */
    public function __construct($earliestDate = null, $latestDate = null, $dOW = null)
    {
        $this
            ->setEarliestDate($earliestDate)
            ->setLatestDate($latestDate)
            ->setDOW($dOW);
    }
    /**
     * Get EarliestDate value
     * @return string|null
     */
    public function getEarliestDate()
    {
        return $this->EarliestDate;
    }
    /**
     * Set EarliestDate value
     * @param string $earliestDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimeWindowType
     */
    public function setEarliestDate($earliestDate = null)
    {
        // validation for constraint: string
        if (!is_null($earliestDate) && !is_string($earliestDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($earliestDate)), __LINE__);
        }
        $this->EarliestDate = $earliestDate;
        return $this;
    }
    /**
     * Get LatestDate value
     * @return string|null
     */
    public function getLatestDate()
    {
        return $this->LatestDate;
    }
    /**
     * Set LatestDate value
     * @param string $latestDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimeWindowType
     */
    public function setLatestDate($latestDate = null)
    {
        // validation for constraint: string
        if (!is_null($latestDate) && !is_string($latestDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($latestDate)), __LINE__);
        }
        $this->LatestDate = $latestDate;
        return $this;
    }
    /**
     * Get DOW value
     * @return string|null
     */
    public function getDOW()
    {
        return $this->DOW;
    }
    /**
     * Set DOW value
     * @param string $dOW
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimeWindowType
     */
    public function setDOW($dOW = null)
    {
        // validation for constraint: string
        if (!is_null($dOW) && !is_string($dOW)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dOW)), __LINE__);
        }
        $this->DOW = $dOW;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimeWindowType
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
