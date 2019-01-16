<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhysChallFeaturePrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for type of features required to meet the needs of persons with physical challenges, disabilities, etc. | Identifies the customer's level of preference for the hotel physically challenged feature identified. |
 * Used for Character Strings, length 1 to 128.
 * - maxLength: 128
 * - minLength: 1
 * @subpackage Structs
 */
class PhysChallFeaturePrefType extends AbstractStructBase
{
    /**
     * The PhysChallFeatureType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the types of features the hotel offers to service physically challenged guests. Refer to OpenTravel Code List Physically Challenged Feature Code (PHY).
     * @var string
     */
    public $PhysChallFeatureType;
    /**
     * Constructor method for PhysChallFeaturePrefType
     * @uses PhysChallFeaturePrefType::setPhysChallFeatureType()
     * @param string $physChallFeatureType
     */
    public function __construct($physChallFeatureType = null)
    {
        $this
            ->setPhysChallFeatureType($physChallFeatureType);
    }
    /**
     * Get PhysChallFeatureType value
     * @return string|null
     */
    public function getPhysChallFeatureType()
    {
        return $this->PhysChallFeatureType;
    }
    /**
     * Set PhysChallFeatureType value
     * @param string $physChallFeatureType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PhysChallFeaturePrefType
     */
    public function setPhysChallFeatureType($physChallFeatureType = null)
    {
        // validation for constraint: string
        if (!is_null($physChallFeatureType) && !is_string($physChallFeatureType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($physChallFeatureType)), __LINE__);
        }
        $this->PhysChallFeatureType = $physChallFeatureType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PhysChallFeaturePrefType
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
