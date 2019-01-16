<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeInstantType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies a time window. | A construct to validate either a date or a dateTime value.
 * - union: date | dateTime
 * @subpackage Structs
 */
class TimeInstantType extends AbstractStructBase
{
    /**
     * The WindowBefore
     * Meta informations extracted from the WSDL
     * - documentation: A period of time that can be applied to another time resulting in an earlier range of time.
     * - use: optional
     * @var string
     */
    public $WindowBefore;
    /**
     * The WindowAfter
     * Meta informations extracted from the WSDL
     * - documentation: A period of time that can be applied to another time resulting in a later range of time.
     * - use: optional
     * @var string
     */
    public $WindowAfter;
    /**
     * The CrossDateAllowedIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true the requested period may extend over the previous or following day. When false, the search period is restricted to the date specified. Normally used when the window duration is in hours.
     * - use: optional
     * @var bool
     */
    public $CrossDateAllowedIndicator;
    /**
     * Constructor method for TimeInstantType
     * @uses TimeInstantType::setWindowBefore()
     * @uses TimeInstantType::setWindowAfter()
     * @uses TimeInstantType::setCrossDateAllowedIndicator()
     * @param string $windowBefore
     * @param string $windowAfter
     * @param bool $crossDateAllowedIndicator
     */
    public function __construct($windowBefore = null, $windowAfter = null, $crossDateAllowedIndicator = null)
    {
        $this
            ->setWindowBefore($windowBefore)
            ->setWindowAfter($windowAfter)
            ->setCrossDateAllowedIndicator($crossDateAllowedIndicator);
    }
    /**
     * Get WindowBefore value
     * @return string|null
     */
    public function getWindowBefore()
    {
        return $this->WindowBefore;
    }
    /**
     * Set WindowBefore value
     * @param string $windowBefore
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimeInstantType
     */
    public function setWindowBefore($windowBefore = null)
    {
        // validation for constraint: string
        if (!is_null($windowBefore) && !is_string($windowBefore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($windowBefore)), __LINE__);
        }
        $this->WindowBefore = $windowBefore;
        return $this;
    }
    /**
     * Get WindowAfter value
     * @return string|null
     */
    public function getWindowAfter()
    {
        return $this->WindowAfter;
    }
    /**
     * Set WindowAfter value
     * @param string $windowAfter
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimeInstantType
     */
    public function setWindowAfter($windowAfter = null)
    {
        // validation for constraint: string
        if (!is_null($windowAfter) && !is_string($windowAfter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($windowAfter)), __LINE__);
        }
        $this->WindowAfter = $windowAfter;
        return $this;
    }
    /**
     * Get CrossDateAllowedIndicator value
     * @return bool|null
     */
    public function getCrossDateAllowedIndicator()
    {
        return $this->CrossDateAllowedIndicator;
    }
    /**
     * Set CrossDateAllowedIndicator value
     * @param bool $crossDateAllowedIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimeInstantType
     */
    public function setCrossDateAllowedIndicator($crossDateAllowedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($crossDateAllowedIndicator) && !is_bool($crossDateAllowedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($crossDateAllowedIndicator)), __LINE__);
        }
        $this->CrossDateAllowedIndicator = $crossDateAllowedIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimeInstantType
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
