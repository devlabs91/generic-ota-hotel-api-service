<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyClassPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for class of hotel property. | Identifies the customer's level of preference for the hotel property class identified. | Used for Character Strings, length 1 to 128.
 * - maxLength: 128
 * - minLength: 1
 * @subpackage Structs
 */
class PropertyClassPrefType extends AbstractStructBase
{
    /**
     * The PropertyClassType
     * Meta informations extracted from the WSDL
     * - documentation: Identifes the classification of the property. Refer to OpenTravel Code List Brand Category Code (BCC).
     * - use: optional
     * @var string
     */
    public $PropertyClassType;
    /**
     * Constructor method for PropertyClassPrefType
     * @uses PropertyClassPrefType::setPropertyClassType()
     * @param string $propertyClassType
     */
    public function __construct($propertyClassType = null)
    {
        $this
            ->setPropertyClassType($propertyClassType);
    }
    /**
     * Get PropertyClassType value
     * @return string|null
     */
    public function getPropertyClassType()
    {
        return $this->PropertyClassType;
    }
    /**
     * Set PropertyClassType value
     * @param string $propertyClassType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyClassPrefType
     */
    public function setPropertyClassType($propertyClassType = null)
    {
        // validation for constraint: string
        if (!is_null($propertyClassType) && !is_string($propertyClassType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($propertyClassType)), __LINE__);
        }
        $this->PropertyClassType = $propertyClassType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyClassPrefType
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
