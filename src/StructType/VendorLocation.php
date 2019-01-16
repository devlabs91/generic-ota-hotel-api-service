<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VendorLocation StructType
 * Meta informations extracted from the WSDL
 * - documentation: The vendor location information for a specific vehicle.
 * @subpackage Structs
 */
class VendorLocation extends LocationType
{
    /**
     * The ExtendedLocationCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the extended location code (e.g., ATLC10).
     * - use: optional
     * @var string
     */
    public $ExtendedLocationCode;
    /**
     * The CounterLocation
     * Meta informations extracted from the WSDL
     * - documentation: The location of the counter. Refer to OpenTravel Code List Vehicle Where At Facility (VWF).
     * - use: optional
     * @var string
     */
    public $CounterLocation;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: The name of the vendor location.
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * The CounterLocInfo
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CounterLocInfo;
    /**
     * Constructor method for VendorLocation
     * @uses VendorLocation::setExtendedLocationCode()
     * @uses VendorLocation::setCounterLocation()
     * @uses VendorLocation::setName()
     * @uses VendorLocation::setCounterLocInfo()
     * @param string $extendedLocationCode
     * @param string $counterLocation
     * @param string $name
     * @param string $counterLocInfo
     */
    public function __construct($extendedLocationCode = null, $counterLocation = null, $name = null, $counterLocInfo = null)
    {
        $this
            ->setExtendedLocationCode($extendedLocationCode)
            ->setCounterLocation($counterLocation)
            ->setName($name)
            ->setCounterLocInfo($counterLocInfo);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorLocation
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
     * Get CounterLocation value
     * @return string|null
     */
    public function getCounterLocation()
    {
        return $this->CounterLocation;
    }
    /**
     * Set CounterLocation value
     * @param string $counterLocation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorLocation
     */
    public function setCounterLocation($counterLocation = null)
    {
        // validation for constraint: string
        if (!is_null($counterLocation) && !is_string($counterLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($counterLocation)), __LINE__);
        }
        $this->CounterLocation = $counterLocation;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorLocation
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
     * Get CounterLocInfo value
     * @return string|null
     */
    public function getCounterLocInfo()
    {
        return $this->CounterLocInfo;
    }
    /**
     * Set CounterLocInfo value
     * @param string $counterLocInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorLocation
     */
    public function setCounterLocInfo($counterLocInfo = null)
    {
        // validation for constraint: string
        if (!is_null($counterLocInfo) && !is_string($counterLocInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($counterLocInfo)), __LINE__);
        }
        $this->CounterLocInfo = $counterLocInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VendorLocation
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
