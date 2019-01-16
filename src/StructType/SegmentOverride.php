<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SegmentOverride StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to specify a segment that should be overridden.
 * @subpackage Structs
 */
class SegmentOverride extends AbstractStructBase
{
    /**
     * The SegmentNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify a segment that should be overridden.
     * - use: required
     * @var string
     */
    public $SegmentNumber;
    /**
     * The SegmentType
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $SegmentType;
    /**
     * Constructor method for SegmentOverride
     * @uses SegmentOverride::setSegmentNumber()
     * @uses SegmentOverride::setSegmentType()
     * @param string $segmentNumber
     * @param string $segmentType
     */
    public function __construct($segmentNumber = null, $segmentType = null)
    {
        $this
            ->setSegmentNumber($segmentNumber)
            ->setSegmentType($segmentType);
    }
    /**
     * Get SegmentNumber value
     * @return string
     */
    public function getSegmentNumber()
    {
        return $this->SegmentNumber;
    }
    /**
     * Set SegmentNumber value
     * @param string $segmentNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SegmentOverride
     */
    public function setSegmentNumber($segmentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($segmentNumber) && !is_string($segmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentNumber)), __LINE__);
        }
        $this->SegmentNumber = $segmentNumber;
        return $this;
    }
    /**
     * Get SegmentType value
     * @return string
     */
    public function getSegmentType()
    {
        return $this->SegmentType;
    }
    /**
     * Set SegmentType value
     * @param string $segmentType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SegmentOverride
     */
    public function setSegmentType($segmentType = null)
    {
        // validation for constraint: string
        if (!is_null($segmentType) && !is_string($segmentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($segmentType)), __LINE__);
        }
        $this->SegmentType = $segmentType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SegmentOverride
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
