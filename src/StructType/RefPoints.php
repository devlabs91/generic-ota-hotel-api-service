<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefPoints StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of reference points.
 * @subpackage Structs
 */
class RefPoints extends RefPointsType
{
    /**
     * The LastUpdated
     * Meta informations extracted from the WSDL
     * - documentation: The date and time when RefPoints was last updated.
     * - use: optional
     * @var string
     */
    public $LastUpdated;
    /**
     * Constructor method for RefPoints
     * @uses RefPoints::setLastUpdated()
     * @param string $lastUpdated
     */
    public function __construct($lastUpdated = null)
    {
        $this
            ->setLastUpdated($lastUpdated);
    }
    /**
     * Get LastUpdated value
     * @return string|null
     */
    public function getLastUpdated()
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoints
     */
    public function setLastUpdated($lastUpdated = null)
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoints
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
