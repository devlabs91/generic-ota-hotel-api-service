<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountPricing StructType
 * Meta informations extracted from the WSDL
 * - documentation: The information needed when a passenger presents a discount/promotional coupon for a dollar/percentage off the fare or when a passenger qualifies for a percentage discount such as a senior discount. | The information needed when a
 * passenger presents a discount/promotional coupon for a dollar/percentage of the fare or when a passenger qualifies for a percentage discount such as a senior discount.
 * @subpackage Structs
 */
class DiscountPricing extends AbstractStructBase
{
    /**
     * The FlightReference
     * Meta informations extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FlightReference[]
     */
    public $FlightReference;
    /**
     * Constructor method for DiscountPricing
     * @uses DiscountPricing::setFlightReference()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FlightReference[] $flightReference
     */
    public function __construct(array $flightReference = array())
    {
        $this
            ->setFlightReference($flightReference);
    }
    /**
     * Get FlightReference value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightReference[]|null
     */
    public function getFlightReference()
    {
        return $this->FlightReference;
    }
    /**
     * Set FlightReference value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FlightReference[] $flightReference
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DiscountPricing
     */
    public function setFlightReference(array $flightReference = array())
    {
        foreach ($flightReference as $discountPricingFlightReferenceItem) {
            // validation for constraint: itemType
            if (!$discountPricingFlightReferenceItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FlightReference) {
                throw new \InvalidArgumentException(sprintf('The FlightReference property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FlightReference, "%s" given', is_object($discountPricingFlightReferenceItem) ? get_class($discountPricingFlightReferenceItem) : gettype($discountPricingFlightReferenceItem)), __LINE__);
            }
        }
        $this->FlightReference = $flightReference;
        return $this;
    }
    /**
     * Add item to FlightReference value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FlightReference $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DiscountPricing
     */
    public function addToFlightReference(\Devlabs91\GenericOtaHotelApiService\StructType\FlightReference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FlightReference) {
            throw new \InvalidArgumentException(sprintf('The FlightReference property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FlightReference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightReference[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DiscountPricing
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
