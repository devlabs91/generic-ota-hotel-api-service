<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatAvailabilityType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of seat availability by class.
 * @subpackage Structs
 */
class SeatAvailabilityType extends AbstractStructBase
{
    /**
     * The SupplementCharges
     * Meta informations extracted from the WSDL
     * - documentation: A value representing a supplement for this seat class over the cost of the seat class on which package basic price is calculated The element repeats to allow for charges in an alternative currency to be shown. The charge element
     * repeats to allow differential charging according to, for exaample, age.
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SupplementCharges;
    /**
     * Constructor method for SeatAvailabilityType
     * @uses SeatAvailabilityType::setSupplementCharges()
     * @param mixed[] $supplementCharges
     */
    public function __construct(array $supplementCharges = array())
    {
        $this
            ->setSupplementCharges($supplementCharges);
    }
    /**
     * Get SupplementCharges value
     * @return mixed[]|null
     */
    public function getSupplementCharges()
    {
        return $this->SupplementCharges;
    }
    /**
     * Set SupplementCharges value
     * @throws \InvalidArgumentException
     * @param mixed[] $supplementCharges
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatAvailabilityType
     */
    public function setSupplementCharges(array $supplementCharges = array())
    {
        foreach ($supplementCharges as $seatAvailabilityTypeSupplementChargesItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SupplementCharges property can only contain items of anyType, "%s" given', is_object($seatAvailabilityTypeSupplementChargesItem) ? get_class($seatAvailabilityTypeSupplementChargesItem) : gettype($seatAvailabilityTypeSupplementChargesItem)), __LINE__);
            }
        }
        $this->SupplementCharges = $supplementCharges;
        return $this;
    }
    /**
     * Add item to SupplementCharges value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatAvailabilityType
     */
    public function addToSupplementCharges($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SupplementCharges property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SupplementCharges[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatAvailabilityType
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
