<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CruisePackageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines pre/post/shorex/bus/transfers packages.
 * @subpackage Structs
 */
class CruisePackageType extends AbstractStructBase
{
    /**
     * The PackageTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of the package. Refer to OpenTravel Codelist Cruise Package Type (CPK).
     * - use: required
     * @var string
     */
    public $PackageTypeCode;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Location[]
     */
    public $Location;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the Status of the package. Refer to OpenTravel Code table Status (STS).
     * - use: optional
     * @var string
     */
    public $Status;
    /**
     * Constructor method for CruisePackageType
     * @uses CruisePackageType::setPackageTypeCode()
     * @uses CruisePackageType::setLocation()
     * @uses CruisePackageType::setStatus()
     * @param string $packageTypeCode
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Location[] $location
     * @param string $status
     */
    public function __construct($packageTypeCode = null, array $location = array(), $status = null)
    {
        $this
            ->setPackageTypeCode($packageTypeCode)
            ->setLocation($location)
            ->setStatus($status);
    }
    /**
     * Get PackageTypeCode value
     * @return string
     */
    public function getPackageTypeCode()
    {
        return $this->PackageTypeCode;
    }
    /**
     * Set PackageTypeCode value
     * @param string $packageTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruisePackageType
     */
    public function setPackageTypeCode($packageTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($packageTypeCode) && !is_string($packageTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($packageTypeCode)), __LINE__);
        }
        $this->PackageTypeCode = $packageTypeCode;
        return $this;
    }
    /**
     * Get Location value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Location[]|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Location[] $location
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruisePackageType
     */
    public function setLocation(array $location = array())
    {
        foreach ($location as $cruisePackageTypeLocationItem) {
            // validation for constraint: itemType
            if (!$cruisePackageTypeLocationItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Location) {
                throw new \InvalidArgumentException(sprintf('The Location property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Location, "%s" given', is_object($cruisePackageTypeLocationItem) ? get_class($cruisePackageTypeLocationItem) : gettype($cruisePackageTypeLocationItem)), __LINE__);
            }
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Add item to Location value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Location $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruisePackageType
     */
    public function addToLocation(\Devlabs91\GenericOtaHotelApiService\StructType\Location $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Location) {
            throw new \InvalidArgumentException(sprintf('The Location property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Location, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Location[] = $item;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruisePackageType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CruisePackageType
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
