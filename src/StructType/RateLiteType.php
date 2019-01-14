<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateLiteType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Summary version of the RateType, initially created for the Travel Itinerary Message set.
 * @subpackage Structs
 */
class RateLiteType extends AbstractStructBase
{
    /**
     * The Rate
     * Meta informations extracted from the WSDL
     * - documentation: The Lite Rate contains the Base amount as well as the associated taxes.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $Rate;
    /**
     * Constructor method for RateLiteType
     * @uses RateLiteType::setRate()
     * @param mixed[] $rate
     */
    public function __construct(array $rate = array())
    {
        $this
            ->setRate($rate);
    }
    /**
     * Get Rate value
     * @return mixed[]|null
     */
    public function getRate()
    {
        return $this->Rate;
    }
    /**
     * Set Rate value
     * @throws \InvalidArgumentException
     * @param mixed[] $rate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateLiteType
     */
    public function setRate(array $rate = array())
    {
        foreach ($rate as $rateLiteTypeRateItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Rate property can only contain items of anyType, "%s" given', is_object($rateLiteTypeRateItem) ? get_class($rateLiteTypeRateItem) : gettype($rateLiteTypeRateItem)), __LINE__);
            }
        }
        $this->Rate = $rate;
        return $this;
    }
    /**
     * Add item to Rate value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateLiteType
     */
    public function addToRate($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Rate property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Rate[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateLiteType
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
