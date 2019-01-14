<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DescriptionType StructType
 * Meta informations extracted from the WSDL
 * - documentation: An extension of ParagraphType. It is used to pass description information when reference to or from a location may be needed.
 * @subpackage Structs
 */
class DescriptionType extends ParagraphType
{
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: An indicator for whether this is a location description.
     * - use: optional
     * @var bool
     */
    public $Location;
    /**
     * The RefDirectionTo
     * Meta informations extracted from the WSDL
     * - default: true
     * - documentation: An indicator for whether this is a description TO the location (default value of TRUE is TO the location, else FROM).
     * - use: optional
     * @var bool
     */
    public $RefDirectionTo;
    /**
     * Constructor method for DescriptionType
     * @uses DescriptionType::setLocation()
     * @uses DescriptionType::setRefDirectionTo()
     * @param bool $location
     * @param bool $refDirectionTo
     */
    public function __construct($location = false, $refDirectionTo = true)
    {
        $this
            ->setLocation($location)
            ->setRefDirectionTo($refDirectionTo);
    }
    /**
     * Get Location value
     * @return bool|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param bool $location
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DescriptionType
     */
    public function setLocation($location = false)
    {
        // validation for constraint: boolean
        if (!is_null($location) && !is_bool($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Get RefDirectionTo value
     * @return bool|null
     */
    public function getRefDirectionTo()
    {
        return $this->RefDirectionTo;
    }
    /**
     * Set RefDirectionTo value
     * @param bool $refDirectionTo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DescriptionType
     */
    public function setRefDirectionTo($refDirectionTo = true)
    {
        // validation for constraint: boolean
        if (!is_null($refDirectionTo) && !is_bool($refDirectionTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($refDirectionTo)), __LINE__);
        }
        $this->RefDirectionTo = $refDirectionTo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DescriptionType
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
