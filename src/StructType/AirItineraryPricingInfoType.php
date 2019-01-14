<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirItineraryPricingInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Pricing Information for an Air Itinerary
 * @subpackage Structs
 */
class AirItineraryPricingInfoType extends AbstractStructBase
{
    /**
     * The ItinTotalFare
     * Meta informations extracted from the WSDL
     * - documentation: Total price of the itinerary
     * @var mixed
     */
    public $ItinTotalFare;
    /**
     * The PTC_FareBreakdowns
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PTC_FareBreakdowns
     */
    public $PTC_FareBreakdowns;
    /**
     * The FareInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FareInfos
     */
    public $FareInfos;
    /**
     * The PricingSource
     * Meta informations extracted from the WSDL
     * - documentation: Used to indicate whether the pricing is public or private
     * - use: optional
     * @var string
     */
    public $PricingSource;
    /**
     * Constructor method for AirItineraryPricingInfoType
     * @uses AirItineraryPricingInfoType::setItinTotalFare()
     * @uses AirItineraryPricingInfoType::setPTC_FareBreakdowns()
     * @uses AirItineraryPricingInfoType::setFareInfos()
     * @uses AirItineraryPricingInfoType::setPricingSource()
     * @param mixed $itinTotalFare
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PTC_FareBreakdowns $pTC_FareBreakdowns
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareInfos $fareInfos
     * @param string $pricingSource
     */
    public function __construct($itinTotalFare = null, \Devlabs91\GenericOtaHotelApiService\StructType\PTC_FareBreakdowns $pTC_FareBreakdowns = null, \Devlabs91\GenericOtaHotelApiService\StructType\FareInfos $fareInfos = null, $pricingSource = null)
    {
        $this
            ->setItinTotalFare($itinTotalFare)
            ->setPTC_FareBreakdowns($pTC_FareBreakdowns)
            ->setFareInfos($fareInfos)
            ->setPricingSource($pricingSource);
    }
    /**
     * Get ItinTotalFare value
     * @return mixed|null
     */
    public function getItinTotalFare()
    {
        return $this->ItinTotalFare;
    }
    /**
     * Set ItinTotalFare value
     * @param mixed $itinTotalFare
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirItineraryPricingInfoType
     */
    public function setItinTotalFare($itinTotalFare = null)
    {
        $this->ItinTotalFare = $itinTotalFare;
        return $this;
    }
    /**
     * Get PTC_FareBreakdowns value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PTC_FareBreakdowns|null
     */
    public function getPTC_FareBreakdowns()
    {
        return $this->PTC_FareBreakdowns;
    }
    /**
     * Set PTC_FareBreakdowns value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PTC_FareBreakdowns $pTC_FareBreakdowns
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirItineraryPricingInfoType
     */
    public function setPTC_FareBreakdowns(\Devlabs91\GenericOtaHotelApiService\StructType\PTC_FareBreakdowns $pTC_FareBreakdowns = null)
    {
        $this->PTC_FareBreakdowns = $pTC_FareBreakdowns;
        return $this;
    }
    /**
     * Get FareInfos value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfos|null
     */
    public function getFareInfos()
    {
        return $this->FareInfos;
    }
    /**
     * Set FareInfos value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareInfos $fareInfos
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirItineraryPricingInfoType
     */
    public function setFareInfos(\Devlabs91\GenericOtaHotelApiService\StructType\FareInfos $fareInfos = null)
    {
        $this->FareInfos = $fareInfos;
        return $this;
    }
    /**
     * Get PricingSource value
     * @return string|null
     */
    public function getPricingSource()
    {
        return $this->PricingSource;
    }
    /**
     * Set PricingSource value
     * @param string $pricingSource
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirItineraryPricingInfoType
     */
    public function setPricingSource($pricingSource = null)
    {
        // validation for constraint: string
        if (!is_null($pricingSource) && !is_string($pricingSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pricingSource)), __LINE__);
        }
        $this->PricingSource = $pricingSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirItineraryPricingInfoType
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
