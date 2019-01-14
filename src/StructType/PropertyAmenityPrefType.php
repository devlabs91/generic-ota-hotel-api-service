<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyAmenityPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for hotel property amenities. | Identifies the customer's level of preference for the hotel property amenity identified. | Used for Character Strings, length 1 to 128
 * - maxLength: 128
 * - minLength: 1
 * @subpackage Structs
 */
class PropertyAmenityPrefType extends AbstractStructBase
{
    /**
     * The PropertyAmenityType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the amenities offered by the hotel. Refer to OTA Code List Hotel Amenity Code (HAC).
     * @var string
     */
    public $PropertyAmenityType;
    /**
     * Constructor method for PropertyAmenityPrefType
     * @uses PropertyAmenityPrefType::setPropertyAmenityType()
     * @param string $propertyAmenityType
     */
    public function __construct($propertyAmenityType = null)
    {
        $this
            ->setPropertyAmenityType($propertyAmenityType);
    }
    /**
     * Get PropertyAmenityType value
     * @return string|null
     */
    public function getPropertyAmenityType()
    {
        return $this->PropertyAmenityType;
    }
    /**
     * Set PropertyAmenityType value
     * @param string $propertyAmenityType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyAmenityPrefType
     */
    public function setPropertyAmenityType($propertyAmenityType = null)
    {
        // validation for constraint: string
        if (!is_null($propertyAmenityType) && !is_string($propertyAmenityType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($propertyAmenityType)), __LINE__);
        }
        $this->PropertyAmenityType = $propertyAmenityType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyAmenityPrefType
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
