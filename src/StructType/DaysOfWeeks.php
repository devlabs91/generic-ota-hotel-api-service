<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DaysOfWeeks StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is available so multiple rules or multiple date ranges may be applied. | This is available so multiple rules or multiple date ranges may be applied.
 * @subpackage Structs
 */
class DaysOfWeeks extends AbstractStructBase
{
    /**
     * The DaysOfWeek
     * Meta informations extracted from the WSDL
     * - documentation: Used to define rate plan by day of week rules for availability, required arrival, or required stay. | Used to define room type by day of week rules for availability, required arrival, or required stay.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $DaysOfWeek;
    /**
     * Constructor method for DaysOfWeeks
     * @uses DaysOfWeeks::setDaysOfWeek()
     * @param mixed[] $daysOfWeek
     */
    public function __construct(array $daysOfWeek = array())
    {
        $this
            ->setDaysOfWeek($daysOfWeek);
    }
    /**
     * Get DaysOfWeek value
     * @return mixed[]|null
     */
    public function getDaysOfWeek()
    {
        return $this->DaysOfWeek;
    }
    /**
     * Set DaysOfWeek value
     * @throws \InvalidArgumentException
     * @param mixed[] $daysOfWeek
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DaysOfWeeks
     */
    public function setDaysOfWeek(array $daysOfWeek = array())
    {
        foreach ($daysOfWeek as $daysOfWeeksDaysOfWeekItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The DaysOfWeek property can only contain items of anyType, "%s" given', is_object($daysOfWeeksDaysOfWeekItem) ? get_class($daysOfWeeksDaysOfWeekItem) : gettype($daysOfWeeksDaysOfWeekItem)), __LINE__);
            }
        }
        $this->DaysOfWeek = $daysOfWeek;
        return $this;
    }
    /**
     * Add item to DaysOfWeek value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DaysOfWeeks
     */
    public function addToDaysOfWeek($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The DaysOfWeek property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DaysOfWeek[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DaysOfWeeks
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
