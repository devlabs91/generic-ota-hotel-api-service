<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DateTimeSpanType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to specify a time window range by either specifying an earliest and latest date for the start date and end date or by giving a date with a time period that can be applied before and/or after the start date.
 * @subpackage Structs
 */
class DateTimeSpanType extends AbstractStructBase
{
    /**
     * The DateWindowRange
     * @var mixed
     */
    public $DateWindowRange;
    /**
     * The StartDateWindow
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $StartDateWindow;
    /**
     * The EndDateWindow
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $EndDateWindow;
    /**
     * Constructor method for DateTimeSpanType
     * @uses DateTimeSpanType::setDateWindowRange()
     * @uses DateTimeSpanType::setStartDateWindow()
     * @uses DateTimeSpanType::setEndDateWindow()
     * @param mixed $dateWindowRange
     * @param mixed $startDateWindow
     * @param mixed $endDateWindow
     */
    public function __construct($dateWindowRange = null, $startDateWindow = null, $endDateWindow = null)
    {
        $this
            ->setDateWindowRange($dateWindowRange)
            ->setStartDateWindow($startDateWindow)
            ->setEndDateWindow($endDateWindow);
    }
    /**
     * Get DateWindowRange value
     * @return mixed|null
     */
    public function getDateWindowRange()
    {
        return $this->DateWindowRange;
    }
    /**
     * Set DateWindowRange value
     * @param mixed $dateWindowRange
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DateTimeSpanType
     */
    public function setDateWindowRange($dateWindowRange = null)
    {
        $this->DateWindowRange = $dateWindowRange;
        return $this;
    }
    /**
     * Get StartDateWindow value
     * @return mixed|null
     */
    public function getStartDateWindow()
    {
        return $this->StartDateWindow;
    }
    /**
     * Set StartDateWindow value
     * @param mixed $startDateWindow
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DateTimeSpanType
     */
    public function setStartDateWindow($startDateWindow = null)
    {
        $this->StartDateWindow = $startDateWindow;
        return $this;
    }
    /**
     * Get EndDateWindow value
     * @return mixed|null
     */
    public function getEndDateWindow()
    {
        return $this->EndDateWindow;
    }
    /**
     * Set EndDateWindow value
     * @param mixed $endDateWindow
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DateTimeSpanType
     */
    public function setEndDateWindow($endDateWindow = null)
    {
        $this->EndDateWindow = $endDateWindow;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DateTimeSpanType
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
