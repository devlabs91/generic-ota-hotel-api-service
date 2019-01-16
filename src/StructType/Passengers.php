<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Passengers StructType
 * Meta informations extracted from the WSDL
 * - documentation: Reference Place Holders of the passengers travelling on this flight segment.
 * @subpackage Structs
 */
class Passengers extends AbstractStructBase
{
    /**
     * The PassengerRPH
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PassengerRPH;
    /**
     * Constructor method for Passengers
     * @uses Passengers::setPassengerRPH()
     * @param string $passengerRPH
     */
    public function __construct($passengerRPH = null)
    {
        $this
            ->setPassengerRPH($passengerRPH);
    }
    /**
     * Get PassengerRPH value
     * @return string|null
     */
    public function getPassengerRPH()
    {
        return $this->PassengerRPH;
    }
    /**
     * Set PassengerRPH value
     * @param string $passengerRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Passengers
     */
    public function setPassengerRPH($passengerRPH = null)
    {
        // validation for constraint: string
        if (!is_null($passengerRPH) && !is_string($passengerRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerRPH)), __LINE__);
        }
        $this->PassengerRPH = $passengerRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Passengers
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
