<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationSchedules StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of days, times, and fees. | Collection of days, times, and fees. | Collection of days, times, and fees.
 * @subpackage Structs
 */
class OperationSchedules extends AbstractStructBase
{
    /**
     * The OperationSchedule
     * Meta informations extracted from the WSDL
     * - documentation: The OperationSchedule class defines the dates and hours of operation and charges. | The OperationSchedule class defines the dates and hours of operation. | The OperationSchedule class defines the dates and hours of operation.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $OperationSchedule;
    /**
     * Constructor method for OperationSchedules
     * @uses OperationSchedules::setOperationSchedule()
     * @param mixed[] $operationSchedule
     */
    public function __construct(array $operationSchedule = array())
    {
        $this
            ->setOperationSchedule($operationSchedule);
    }
    /**
     * Get OperationSchedule value
     * @return mixed[]|null
     */
    public function getOperationSchedule()
    {
        return $this->OperationSchedule;
    }
    /**
     * Set OperationSchedule value
     * @throws \InvalidArgumentException
     * @param mixed[] $operationSchedule
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules
     */
    public function setOperationSchedule(array $operationSchedule = array())
    {
        foreach ($operationSchedule as $operationSchedulesOperationScheduleItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The OperationSchedule property can only contain items of anyType, "%s" given', is_object($operationSchedulesOperationScheduleItem) ? get_class($operationSchedulesOperationScheduleItem) : gettype($operationSchedulesOperationScheduleItem)), __LINE__);
            }
        }
        $this->OperationSchedule = $operationSchedule;
        return $this;
    }
    /**
     * Add item to OperationSchedule value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules
     */
    public function addToOperationSchedule($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The OperationSchedule property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OperationSchedule[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedules
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
