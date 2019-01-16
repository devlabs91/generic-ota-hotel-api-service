<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeDurationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to specify a time period, which may additionally include a minimum and/or maximum duration.
 * @subpackage Structs
 */
class TimeDurationType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The Minimum
     * Meta informations extracted from the WSDL
     * - documentation: A minimum duration.
     * - use: optional
     * @var string
     */
    public $Minimum;
    /**
     * The Maximum
     * Meta informations extracted from the WSDL
     * - documentation: A maximum duration.
     * - use: optional
     * @var string
     */
    public $Maximum;
    /**
     * Constructor method for TimeDurationType
     * @uses TimeDurationType::set_()
     * @uses TimeDurationType::setMinimum()
     * @uses TimeDurationType::setMaximum()
     * @param string $_
     * @param string $minimum
     * @param string $maximum
     */
    public function __construct($_ = null, $minimum = null, $maximum = null)
    {
        $this
            ->set_($_)
            ->setMinimum($minimum)
            ->setMaximum($maximum);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimeDurationType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get Minimum value
     * @return string|null
     */
    public function getMinimum()
    {
        return $this->Minimum;
    }
    /**
     * Set Minimum value
     * @param string $minimum
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimeDurationType
     */
    public function setMinimum($minimum = null)
    {
        // validation for constraint: string
        if (!is_null($minimum) && !is_string($minimum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minimum)), __LINE__);
        }
        $this->Minimum = $minimum;
        return $this;
    }
    /**
     * Get Maximum value
     * @return string|null
     */
    public function getMaximum()
    {
        return $this->Maximum;
    }
    /**
     * Set Maximum value
     * @param string $maximum
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimeDurationType
     */
    public function setMaximum($maximum = null)
    {
        // validation for constraint: string
        if (!is_null($maximum) && !is_string($maximum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maximum)), __LINE__);
        }
        $this->Maximum = $maximum;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TimeDurationType
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
