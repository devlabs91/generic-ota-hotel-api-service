<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PTC StructType
 * Meta informations extracted from the WSDL
 * - documentation: The passenger types for which the fare is applicable.
 * @subpackage Structs
 */
class PTC extends AbstractStructBase
{
    /**
     * The PassengerTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: The passenger type code for this fare.
     * - use: optional
     * @var string
     */
    public $PassengerTypeCode;
    /**
     * Constructor method for PTC
     * @uses PTC::setPassengerTypeCode()
     * @param string $passengerTypeCode
     */
    public function __construct($passengerTypeCode = null)
    {
        $this
            ->setPassengerTypeCode($passengerTypeCode);
    }
    /**
     * Get PassengerTypeCode value
     * @return string|null
     */
    public function getPassengerTypeCode()
    {
        return $this->PassengerTypeCode;
    }
    /**
     * Set PassengerTypeCode value
     * @param string $passengerTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PTC
     */
    public function setPassengerTypeCode($passengerTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($passengerTypeCode) && !is_string($passengerTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerTypeCode)), __LINE__);
        }
        $this->PassengerTypeCode = $passengerTypeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PTC
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
