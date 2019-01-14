<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
 * @subpackage Structs
 */
class RateType extends AbstractStructBase
{
    /**
     * The Rate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Rate[]
     */
    public $Rate;
    /**
     * Constructor method for RateType
     * @uses RateType::setRate()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Rate[] $rate
     */
    public function __construct(array $rate = array())
    {
        $this
            ->setRate($rate);
    }
    /**
     * Get Rate value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Rate[]|null
     */
    public function getRate()
    {
        return $this->Rate;
    }
    /**
     * Set Rate value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Rate[] $rate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateType
     */
    public function setRate(array $rate = array())
    {
        foreach ($rate as $rateTypeRateItem) {
            // validation for constraint: itemType
            if (!$rateTypeRateItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Rate) {
                throw new \InvalidArgumentException(sprintf('The Rate property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Rate, "%s" given', is_object($rateTypeRateItem) ? get_class($rateTypeRateItem) : gettype($rateTypeRateItem)), __LINE__);
            }
        }
        $this->Rate = $rate;
        return $this;
    }
    /**
     * Add item to Rate value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Rate $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateType
     */
    public function addToRate(\Devlabs91\GenericOtaHotelApiService\StructType\Rate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Rate) {
            throw new \InvalidArgumentException(sprintf('The Rate property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Rate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateType
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
