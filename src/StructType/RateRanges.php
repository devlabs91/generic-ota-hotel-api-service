<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateRanges StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of rate range information.
 * @subpackage Structs
 */
class RateRanges extends AbstractStructBase
{
    /**
     * The RateRange
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RateRange[]
     */
    public $RateRange;
    /**
     * Constructor method for RateRanges
     * @uses RateRanges::setRateRange()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateRange[] $rateRange
     */
    public function __construct(array $rateRange = array())
    {
        $this
            ->setRateRange($rateRange);
    }
    /**
     * Get RateRange value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRange[]|null
     */
    public function getRateRange()
    {
        return $this->RateRange;
    }
    /**
     * Set RateRange value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateRange[] $rateRange
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRanges
     */
    public function setRateRange(array $rateRange = array())
    {
        foreach ($rateRange as $rateRangesRateRangeItem) {
            // validation for constraint: itemType
            if (!$rateRangesRateRangeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RateRange) {
                throw new \InvalidArgumentException(sprintf('The RateRange property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RateRange, "%s" given', is_object($rateRangesRateRangeItem) ? get_class($rateRangesRateRangeItem) : gettype($rateRangesRateRangeItem)), __LINE__);
            }
        }
        $this->RateRange = $rateRange;
        return $this;
    }
    /**
     * Add item to RateRange value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateRange $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRanges
     */
    public function addToRateRange(\Devlabs91\GenericOtaHotelApiService\StructType\RateRange $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RateRange) {
            throw new \InvalidArgumentException(sprintf('The RateRange property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RateRange, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RateRange[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRanges
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
