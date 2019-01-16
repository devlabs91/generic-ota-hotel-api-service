<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperationSchedule StructType
 * Meta informations extracted from the WSDL
 * - documentation: The OperationSchedule class defines details the dates and hours of operation.
 * @subpackage Structs
 */
class OperationSchedule extends OperationSchedulePlusChargeType
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: Used to provide a name for a sub-operation (e.g. an activity or event).
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * Constructor method for OperationSchedule
     * @uses OperationSchedule::setName()
     * @param string $name
     */
    public function __construct($name = null)
    {
        $this
            ->setName($name);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedule
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OperationSchedule
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
