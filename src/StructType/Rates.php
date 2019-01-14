<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rates StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of rate changes to be synchronized between systems.
 * @subpackage Structs
 */
class Rates extends AbstractStructBase
{
    /**
     * The Rate
     * Meta informations extracted from the WSDL
     * - documentation: An individual rate, which is a collection of amounts by guest, additional guests, fees, collection of related guarantee, cancel and payment policies, a description and the unique id to identify the rate. Rate restrictions can be sent
     * along with the rate as attributes of this rate.
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RateUploadType[]
     */
    public $Rate;
    /**
     * Constructor method for Rates
     * @uses Rates::setRate()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateUploadType[] $rate
     */
    public function __construct(array $rate = array())
    {
        $this
            ->setRate($rate);
    }
    /**
     * Get Rate value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateUploadType[]|null
     */
    public function getRate()
    {
        return $this->Rate;
    }
    /**
     * Set Rate value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateUploadType[] $rate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Rates
     */
    public function setRate(array $rate = array())
    {
        foreach ($rate as $ratesRateItem) {
            // validation for constraint: itemType
            if (!$ratesRateItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RateUploadType) {
                throw new \InvalidArgumentException(sprintf('The Rate property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RateUploadType, "%s" given', is_object($ratesRateItem) ? get_class($ratesRateItem) : gettype($ratesRateItem)), __LINE__);
            }
        }
        $this->Rate = $rate;
        return $this;
    }
    /**
     * Add item to Rate value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateUploadType $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Rates
     */
    public function addToRate(\Devlabs91\GenericOtaHotelApiService\StructType\RateUploadType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RateUploadType) {
            throw new \InvalidArgumentException(sprintf('The Rate property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RateUploadType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Rates
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
