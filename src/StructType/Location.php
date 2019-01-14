<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the activity location (e.g., port city for excursion, bus stop for transfer). | Period of time for which you'll be at a particular location. Typically when a hotel, this is the check-in date and time and check-out date and
 * time or if this is a bus stop, it will be the date and time of pick-up and date and time for drop-off .
 * - type: CategoryLocationType
 * - use: optional
 * @subpackage Structs
 */
class Location extends AbstractStructBase
{
    /**
     * The Information
     * Meta informations extracted from the WSDL
     * - documentation: Provides additional information pertaining to the location or cruise package.
     * - minOccurs: 0
     * @var mixed
     */
    public $Information;
    /**
     * The LocationName
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the full name of the port city.
     * - use: optional
     * @var string
     */
    public $LocationName;
    /**
     * Constructor method for Location
     * @uses Location::setInformation()
     * @uses Location::setLocationName()
     * @param mixed $information
     * @param string $locationName
     */
    public function __construct($information = null, $locationName = null)
    {
        $this
            ->setInformation($information)
            ->setLocationName($locationName);
    }
    /**
     * Get Information value
     * @return mixed|null
     */
    public function getInformation()
    {
        return $this->Information;
    }
    /**
     * Set Information value
     * @param mixed $information
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Location
     */
    public function setInformation($information = null)
    {
        $this->Information = $information;
        return $this;
    }
    /**
     * Get LocationName value
     * @return string|null
     */
    public function getLocationName()
    {
        return $this->LocationName;
    }
    /**
     * Set LocationName value
     * @param string $locationName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Location
     */
    public function setLocationName($locationName = null)
    {
        // validation for constraint: string
        if (!is_null($locationName) && !is_string($locationName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationName)), __LINE__);
        }
        $this->LocationName = $locationName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Location
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
