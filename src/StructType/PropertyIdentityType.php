<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyIdentityType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Full name or description plus codes for a property. | Used for Character Strings, length 0 to 128
 * - maxLength: 128
 * - minLength: 0
 * @subpackage Structs
 */
class PropertyIdentityType extends AbstractStructBase
{
    /**
     * The PropertyClassType
     * Meta informations extracted from the WSDL
     * - documentation: Refer to OTA Code List Property Class Type (PCT).
     * - use: required
     * @var string
     */
    public $PropertyClassType;
    /**
     * The ContentURL
     * @var string
     */
    public $ContentURL;
    /**
     * Constructor method for PropertyIdentityType
     * @uses PropertyIdentityType::setPropertyClassType()
     * @uses PropertyIdentityType::setContentURL()
     * @param string $propertyClassType
     * @param string $contentURL
     */
    public function __construct($propertyClassType = null, $contentURL = null)
    {
        $this
            ->setPropertyClassType($propertyClassType)
            ->setContentURL($contentURL);
    }
    /**
     * Get PropertyClassType value
     * @return string
     */
    public function getPropertyClassType()
    {
        return $this->PropertyClassType;
    }
    /**
     * Set PropertyClassType value
     * @param string $propertyClassType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyIdentityType
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
     * Get ContentURL value
     * @return string|null
     */
    public function getContentURL()
    {
        return $this->ContentURL;
    }
    /**
     * Set ContentURL value
     * @param string $contentURL
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyIdentityType
     */
    public function setContentURL($contentURL = null)
    {
        // validation for constraint: string
        if (!is_null($contentURL) && !is_string($contentURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($contentURL)), __LINE__);
        }
        $this->ContentURL = $contentURL;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyIdentityType
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
