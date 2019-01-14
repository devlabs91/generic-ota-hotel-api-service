<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricedCoverages StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of coverages, along with associated price and details. | A collection of vehicle coverages associated with this reservation.
 * @subpackage Structs
 */
class PricedCoverages extends AbstractStructBase
{
    /**
     * The PricedCoverage
     * Meta informations extracted from the WSDL
     * - documentation: One specific vehicle coverage along with the corresponding charge. | One specific coverage associated with this reservation.
     * - maxOccurs: 15
     * @var mixed[]
     */
    public $PricedCoverage;
    /**
     * Constructor method for PricedCoverages
     * @uses PricedCoverages::setPricedCoverage()
     * @param mixed[] $pricedCoverage
     */
    public function __construct(array $pricedCoverage = array())
    {
        $this
            ->setPricedCoverage($pricedCoverage);
    }
    /**
     * Get PricedCoverage value
     * @return mixed[]|null
     */
    public function getPricedCoverage()
    {
        return $this->PricedCoverage;
    }
    /**
     * Set PricedCoverage value
     * @throws \InvalidArgumentException
     * @param mixed[] $pricedCoverage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages
     */
    public function setPricedCoverage(array $pricedCoverage = array())
    {
        foreach ($pricedCoverage as $pricedCoveragesPricedCoverageItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PricedCoverage property can only contain items of anyType, "%s" given', is_object($pricedCoveragesPricedCoverageItem) ? get_class($pricedCoveragesPricedCoverageItem) : gettype($pricedCoveragesPricedCoverageItem)), __LINE__);
            }
        }
        $this->PricedCoverage = $pricedCoverage;
        return $this;
    }
    /**
     * Add item to PricedCoverage value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages
     */
    public function addToPricedCoverage($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PricedCoverage property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PricedCoverage[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedCoverages
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
