<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehSegmentCore StructType
 * Meta informations extracted from the WSDL
 * - documentation: Common, or core, information associated with a reservation period and a reserved vehicle.
 * @subpackage Structs
 */
class VehSegmentCore extends VehicleSegmentCoreType
{
    /**
     * The OptionChangeAllowedIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates that the options that may have changed since the availability response do not affect the rate.
     * - use: optional
     * @var bool
     */
    public $OptionChangeAllowedIndicator;
    /**
     * Constructor method for VehSegmentCore
     * @uses VehSegmentCore::setOptionChangeAllowedIndicator()
     * @param bool $optionChangeAllowedIndicator
     */
    public function __construct($optionChangeAllowedIndicator = null)
    {
        $this
            ->setOptionChangeAllowedIndicator($optionChangeAllowedIndicator);
    }
    /**
     * Get OptionChangeAllowedIndicator value
     * @return bool|null
     */
    public function getOptionChangeAllowedIndicator()
    {
        return $this->OptionChangeAllowedIndicator;
    }
    /**
     * Set OptionChangeAllowedIndicator value
     * @param bool $optionChangeAllowedIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehSegmentCore
     */
    public function setOptionChangeAllowedIndicator($optionChangeAllowedIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($optionChangeAllowedIndicator) && !is_bool($optionChangeAllowedIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($optionChangeAllowedIndicator)), __LINE__);
        }
        $this->OptionChangeAllowedIndicator = $optionChangeAllowedIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehSegmentCore
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
