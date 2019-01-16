<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirItineraryPricingInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Pricing Information for an Air Itinerary.
 * @subpackage Structs
 */
class AirItineraryPricingInfo extends AirItineraryPricingInfoType
{
    /**
     * The RepriceRequired
     * Meta informations extracted from the WSDL
     * - documentation: If true re-pricing of the itinerary is required.
     * @var bool
     */
    public $RepriceRequired;
    /**
     * Constructor method for AirItineraryPricingInfo
     * @uses AirItineraryPricingInfo::setRepriceRequired()
     * @param bool $repriceRequired
     */
    public function __construct($repriceRequired = null)
    {
        $this
            ->setRepriceRequired($repriceRequired);
    }
    /**
     * Get RepriceRequired value
     * @return bool|null
     */
    public function getRepriceRequired()
    {
        return $this->RepriceRequired;
    }
    /**
     * Set RepriceRequired value
     * @param bool $repriceRequired
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirItineraryPricingInfo
     */
    public function setRepriceRequired($repriceRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($repriceRequired) && !is_bool($repriceRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($repriceRequired)), __LINE__);
        }
        $this->RepriceRequired = $repriceRequired;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirItineraryPricingInfo
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
