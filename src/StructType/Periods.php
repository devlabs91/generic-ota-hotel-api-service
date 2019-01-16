<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Periods StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of prices by booking period.
 * @subpackage Structs
 */
class Periods extends AbstractStructBase
{
    /**
     * The Period
     * Meta informations extracted from the WSDL
     * - documentation: The price of the Extra per unit (which may be person, room, car etc,) and/or duration
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $Period;
    /**
     * Constructor method for Periods
     * @uses Periods::setPeriod()
     * @param mixed[] $period
     */
    public function __construct(array $period = array())
    {
        $this
            ->setPeriod($period);
    }
    /**
     * Get Period value
     * @return mixed[]|null
     */
    public function getPeriod()
    {
        return $this->Period;
    }
    /**
     * Set Period value
     * @throws \InvalidArgumentException
     * @param mixed[] $period
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Periods
     */
    public function setPeriod(array $period = array())
    {
        foreach ($period as $periodsPeriodItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Period property can only contain items of anyType, "%s" given', is_object($periodsPeriodItem) ? get_class($periodsPeriodItem) : gettype($periodsPeriodItem)), __LINE__);
            }
        }
        $this->Period = $period;
        return $this;
    }
    /**
     * Add item to Period value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Periods
     */
    public function addToPeriod($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Period property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Period[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Periods
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
