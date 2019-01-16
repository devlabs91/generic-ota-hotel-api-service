<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeatAvailabilityType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Details of seat availability by class with optional charge information. | Specifies a seat class and quantity.
 * @subpackage Structs
 */
class SeatAvailabilityType extends AbstractStructBase
{
    /**
     * The Charges
     * Meta informations extracted from the WSDL
     * - documentation: A collection of seat prices. The charge element repeats to allow differential charging according to, for exaample, age.
     * - minOccurs: 0
     * @var mixed
     */
    public $Charges;
    /**
     * Constructor method for SeatAvailabilityType
     * @uses SeatAvailabilityType::setCharges()
     * @param mixed $charges
     */
    public function __construct($charges = null)
    {
        $this
            ->setCharges($charges);
    }
    /**
     * Get Charges value
     * @return mixed|null
     */
    public function getCharges()
    {
        return $this->Charges;
    }
    /**
     * Set Charges value
     * @param mixed $charges
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SeatAvailabilityType
     */
    public function setCharges($charges = null)
    {
        $this->Charges = $charges;
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
