<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BestAvailableRates StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of the best rates available.
 * @subpackage Structs
 */
class BestAvailableRates extends AbstractStructBase
{
    /**
     * The BestAvailableRate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRate[]
     */
    public $BestAvailableRate;
    /**
     * Constructor method for BestAvailableRates
     * @uses BestAvailableRates::setBestAvailableRate()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRate[] $bestAvailableRate
     */
    public function __construct(array $bestAvailableRate = array())
    {
        $this
            ->setBestAvailableRate($bestAvailableRate);
    }
    /**
     * Get BestAvailableRate value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRate[]|null
     */
    public function getBestAvailableRate()
    {
        return $this->BestAvailableRate;
    }
    /**
     * Set BestAvailableRate value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRate[] $bestAvailableRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRates
     */
    public function setBestAvailableRate(array $bestAvailableRate = array())
    {
        foreach ($bestAvailableRate as $bestAvailableRatesBestAvailableRateItem) {
            // validation for constraint: itemType
            if (!$bestAvailableRatesBestAvailableRateItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRate) {
                throw new \InvalidArgumentException(sprintf('The BestAvailableRate property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRate, "%s" given', is_object($bestAvailableRatesBestAvailableRateItem) ? get_class($bestAvailableRatesBestAvailableRateItem) : gettype($bestAvailableRatesBestAvailableRateItem)), __LINE__);
            }
        }
        $this->BestAvailableRate = $bestAvailableRate;
        return $this;
    }
    /**
     * Add item to BestAvailableRate value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRate $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRates
     */
    public function addToBestAvailableRate(\Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRate) {
            throw new \InvalidArgumentException(sprintf('The BestAvailableRate property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BestAvailableRate[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRates
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
