<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Deadline StructType
 * Meta informations extracted from the WSDL
 * - documentation: Cancellation deadline, absolute or relative. | The absolute deadline or amount of offset time before a deadline for a payment of cancel goes into effect. | Guarantee deadline, absolute or relative. | Payment deadline, absolute or
 * relative. | Time by which a cancellation must be made before penalty fees are incurred or defines a period of time for which a specific fee is applied if a cancellation were to occur. | Provides ability to give a deadline for the cancel penalty. It
 * repeats to allow for a range (e.g., from 30 to 20 days before arrival).
 * @subpackage Structs
 */
class Deadline extends AbstractStructBase
{
    /**
     * The OverrideIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates that the deadline has been overridden.
     * - use: optional
     * @var bool
     */
    public $OverrideIndicator;
    /**
     * Constructor method for Deadline
     * @uses Deadline::setOverrideIndicator()
     * @param bool $overrideIndicator
     */
    public function __construct($overrideIndicator = null)
    {
        $this
            ->setOverrideIndicator($overrideIndicator);
    }
    /**
     * Get OverrideIndicator value
     * @return bool|null
     */
    public function getOverrideIndicator()
    {
        return $this->OverrideIndicator;
    }
    /**
     * Set OverrideIndicator value
     * @param bool $overrideIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Deadline
     */
    public function setOverrideIndicator($overrideIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($overrideIndicator) && !is_bool($overrideIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($overrideIndicator)), __LINE__);
        }
        $this->OverrideIndicator = $overrideIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Deadline
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
