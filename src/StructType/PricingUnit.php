<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricingUnit StructType
 * Meta informations extracted from the WSDL
 * - documentation: A pricing unit for a passenger type code.
 * @subpackage Structs
 */
class PricingUnit extends AbstractStructBase
{
    /**
     * The UnitNumber
     * Meta informations extracted from the WSDL
     * - documentation: A sequential number that identifies this pricing unit.
     * - use: required
     * @var string
     */
    public $UnitNumber;
    /**
     * The FareComponent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FareComponent[]
     */
    public $FareComponent;
    /**
     * Constructor method for PricingUnit
     * @uses PricingUnit::setUnitNumber()
     * @uses PricingUnit::setFareComponent()
     * @param string $unitNumber
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareComponent[] $fareComponent
     */
    public function __construct($unitNumber = null, array $fareComponent = array())
    {
        $this
            ->setUnitNumber($unitNumber)
            ->setFareComponent($fareComponent);
    }
    /**
     * Get UnitNumber value
     * @return string
     */
    public function getUnitNumber()
    {
        return $this->UnitNumber;
    }
    /**
     * Set UnitNumber value
     * @param string $unitNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingUnit
     */
    public function setUnitNumber($unitNumber = null)
    {
        // validation for constraint: string
        if (!is_null($unitNumber) && !is_string($unitNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitNumber)), __LINE__);
        }
        $this->UnitNumber = $unitNumber;
        return $this;
    }
    /**
     * Get FareComponent value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareComponent[]|null
     */
    public function getFareComponent()
    {
        return $this->FareComponent;
    }
    /**
     * Set FareComponent value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareComponent[] $fareComponent
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingUnit
     */
    public function setFareComponent(array $fareComponent = array())
    {
        foreach ($fareComponent as $pricingUnitFareComponentItem) {
            // validation for constraint: itemType
            if (!$pricingUnitFareComponentItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FareComponent) {
                throw new \InvalidArgumentException(sprintf('The FareComponent property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FareComponent, "%s" given', is_object($pricingUnitFareComponentItem) ? get_class($pricingUnitFareComponentItem) : gettype($pricingUnitFareComponentItem)), __LINE__);
            }
        }
        $this->FareComponent = $fareComponent;
        return $this;
    }
    /**
     * Add item to FareComponent value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareComponent $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingUnit
     */
    public function addToFareComponent(\Devlabs91\GenericOtaHotelApiService\StructType\FareComponent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FareComponent) {
            throw new \InvalidArgumentException(sprintf('The FareComponent property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FareComponent, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareComponent[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricingUnit
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
