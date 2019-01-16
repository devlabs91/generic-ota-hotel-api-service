<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelFeature StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to search for hotels based on hotel features.
 * @subpackage Structs
 */
class HotelFeature extends AbstractStructBase
{
    /**
     * The SecurityFeatureCode
     * Meta informations extracted from the WSDL
     * - documentation: Hotel security feature that is used as a qualifier when searching for properties. Refer to OpenTravel Code list Security Feature Code (SEC).
     * - use: optional
     * @var string
     */
    public $SecurityFeatureCode;
    /**
     * The AccessibilityCode
     * Meta informations extracted from the WSDL
     * - documentation: Hotel accessibility feature that is used as a qualifier when searching for properties. Refer to OpenTravel Code list Physically Challenged Feature Code (PHY).
     * - use: optional
     * @var string
     */
    public $AccessibilityCode;
    /**
     * Constructor method for HotelFeature
     * @uses HotelFeature::setSecurityFeatureCode()
     * @uses HotelFeature::setAccessibilityCode()
     * @param string $securityFeatureCode
     * @param string $accessibilityCode
     */
    public function __construct($securityFeatureCode = null, $accessibilityCode = null)
    {
        $this
            ->setSecurityFeatureCode($securityFeatureCode)
            ->setAccessibilityCode($accessibilityCode);
    }
    /**
     * Get SecurityFeatureCode value
     * @return string|null
     */
    public function getSecurityFeatureCode()
    {
        return $this->SecurityFeatureCode;
    }
    /**
     * Set SecurityFeatureCode value
     * @param string $securityFeatureCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelFeature
     */
    public function setSecurityFeatureCode($securityFeatureCode = null)
    {
        // validation for constraint: string
        if (!is_null($securityFeatureCode) && !is_string($securityFeatureCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($securityFeatureCode)), __LINE__);
        }
        $this->SecurityFeatureCode = $securityFeatureCode;
        return $this;
    }
    /**
     * Get AccessibilityCode value
     * @return string|null
     */
    public function getAccessibilityCode()
    {
        return $this->AccessibilityCode;
    }
    /**
     * Set AccessibilityCode value
     * @param string $accessibilityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelFeature
     */
    public function setAccessibilityCode($accessibilityCode = null)
    {
        // validation for constraint: string
        if (!is_null($accessibilityCode) && !is_string($accessibilityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accessibilityCode)), __LINE__);
        }
        $this->AccessibilityCode = $accessibilityCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelFeature
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
