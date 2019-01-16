<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OneWayDropLocation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Location where a one way drop is allowed.
 * @subpackage Structs
 */
class OneWayDropLocation extends LocationType
{
    /**
     * The ExtendedLocationCode
     * Meta informations extracted from the WSDL
     * - documentation: Used for extended OAG code in conjunction with the OAG code which is sent in Code.
     * - use: optional
     * @var string
     */
    public $ExtendedLocationCode;
    /**
     * Constructor method for OneWayDropLocation
     * @uses OneWayDropLocation::setExtendedLocationCode()
     * @param string $extendedLocationCode
     */
    public function __construct($extendedLocationCode = null)
    {
        $this
            ->setExtendedLocationCode($extendedLocationCode);
    }
    /**
     * Get ExtendedLocationCode value
     * @return string|null
     */
    public function getExtendedLocationCode()
    {
        return $this->ExtendedLocationCode;
    }
    /**
     * Set ExtendedLocationCode value
     * @param string $extendedLocationCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocation
     */
    public function setExtendedLocationCode($extendedLocationCode = null)
    {
        // validation for constraint: string
        if (!is_null($extendedLocationCode) && !is_string($extendedLocationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($extendedLocationCode)), __LINE__);
        }
        $this->ExtendedLocationCode = $extendedLocationCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OneWayDropLocation
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
