<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationTimes StructType
 * Meta informations extracted from the WSDL
 * - documentation: The OperationTime class indicates the times and availability of a facility.
 * @subpackage Structs
 */
class OperationTimes extends AbstractStructBase
{
    /**
     * The OperationTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 999
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OperationTime[]
     */
    public $OperationTime;
    /**
     * Constructor method for OperationTimes
     * @uses OperationTimes::setOperationTime()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OperationTime[] $operationTime
     */
    public function __construct(array $operationTime = array())
    {
        $this
            ->setOperationTime($operationTime);
    }
    /**
     * Get OperationTime value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationTime[]|null
     */
    public function getOperationTime()
    {
        return $this->OperationTime;
    }
    /**
     * Set OperationTime value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OperationTime[] $operationTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationTimes
     */
    public function setOperationTime(array $operationTime = array())
    {
        foreach ($operationTime as $operationTimesOperationTimeItem) {
            // validation for constraint: itemType
            if (!$operationTimesOperationTimeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\OperationTime) {
                throw new \InvalidArgumentException(sprintf('The OperationTime property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\OperationTime, "%s" given', is_object($operationTimesOperationTimeItem) ? get_class($operationTimesOperationTimeItem) : gettype($operationTimesOperationTimeItem)), __LINE__);
            }
        }
        $this->OperationTime = $operationTime;
        return $this;
    }
    /**
     * Add item to OperationTime value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OperationTime $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationTimes
     */
    public function addToOperationTime(\Devlabs91\GenericOtaHotelApiService\StructType\OperationTime $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\OperationTime) {
            throw new \InvalidArgumentException(sprintf('The OperationTime property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\OperationTime, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OperationTime[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationTimes
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
