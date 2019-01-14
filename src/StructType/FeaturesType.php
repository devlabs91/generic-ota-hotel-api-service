<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeaturesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Feature.
 * @subpackage Structs
 */
class FeaturesType extends AbstractStructBase
{
    /**
     * The Feature
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Feature[]
     */
    public $Feature;
    /**
     * Constructor method for FeaturesType
     * @uses FeaturesType::setFeature()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Feature[] $feature
     */
    public function __construct(array $feature = array())
    {
        $this
            ->setFeature($feature);
    }
    /**
     * Get Feature value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Feature[]|null
     */
    public function getFeature()
    {
        return $this->Feature;
    }
    /**
     * Set Feature value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Feature[] $feature
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeaturesType
     */
    public function setFeature(array $feature = array())
    {
        foreach ($feature as $featuresTypeFeatureItem) {
            // validation for constraint: itemType
            if (!$featuresTypeFeatureItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Feature) {
                throw new \InvalidArgumentException(sprintf('The Feature property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Feature, "%s" given', is_object($featuresTypeFeatureItem) ? get_class($featuresTypeFeatureItem) : gettype($featuresTypeFeatureItem)), __LINE__);
            }
        }
        $this->Feature = $feature;
        return $this;
    }
    /**
     * Add item to Feature value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Feature $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeaturesType
     */
    public function addToFeature(\Devlabs91\GenericOtaHotelApiService\StructType\Feature $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Feature) {
            throw new \InvalidArgumentException(sprintf('The Feature property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Feature, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Feature[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FeaturesType
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
