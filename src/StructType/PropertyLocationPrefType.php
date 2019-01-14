<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyLocationPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for hotel property locations. | Indicates the level of preference for the property location identified. | Used for Character Strings, length 1 to 128
 * - maxLength: 128
 * - minLength: 1
 * @subpackage Structs
 */
class PropertyLocationPrefType extends AbstractStructBase
{
    /**
     * The PropertyLocationType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the propery location type. Refer to OTA Code List Location Category Codes (LOC).
     * @var string
     */
    public $PropertyLocationType;
    /**
     * Constructor method for PropertyLocationPrefType
     * @uses PropertyLocationPrefType::setPropertyLocationType()
     * @param string $propertyLocationType
     */
    public function __construct($propertyLocationType = null)
    {
        $this
            ->setPropertyLocationType($propertyLocationType);
    }
    /**
     * Get PropertyLocationType value
     * @return string|null
     */
    public function getPropertyLocationType()
    {
        return $this->PropertyLocationType;
    }
    /**
     * Set PropertyLocationType value
     * @param string $propertyLocationType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyLocationPrefType
     */
    public function setPropertyLocationType($propertyLocationType = null)
    {
        // validation for constraint: string
        if (!is_null($propertyLocationType) && !is_string($propertyLocationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($propertyLocationType)), __LINE__);
        }
        $this->PropertyLocationType = $propertyLocationType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyLocationPrefType
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
