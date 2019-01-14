<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyTypePrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preference for hotel property types. | Identifies the customer's level of preference for the hotel type identified. | Used for Character Strings, length 1 to 128
 * - maxLength: 128
 * - minLength: 1
 * @subpackage Structs
 */
class PropertyTypePrefType extends AbstractStructBase
{
    /**
     * The PropertyType
     * @var string
     */
    public $PropertyType;
    /**
     * Constructor method for PropertyTypePrefType
     * @uses PropertyTypePrefType::setPropertyType()
     * @param string $propertyType
     */
    public function __construct($propertyType = null)
    {
        $this
            ->setPropertyType($propertyType);
    }
    /**
     * Get PropertyType value
     * @return string|null
     */
    public function getPropertyType()
    {
        return $this->PropertyType;
    }
    /**
     * Set PropertyType value
     * @param string $propertyType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyTypePrefType
     */
    public function setPropertyType($propertyType = null)
    {
        // validation for constraint: string
        if (!is_null($propertyType) && !is_string($propertyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($propertyType)), __LINE__);
        }
        $this->PropertyType = $propertyType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyTypePrefType
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
