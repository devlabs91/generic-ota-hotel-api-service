<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareBaggageAllowance StructType
 * Meta informations extracted from the WSDL
 * - documentation: Checked baggage allowance for the fare. | Baggage allowance for this fare.
 * @subpackage Structs
 */
class FareBaggageAllowance extends AbstractStructBase
{
    /**
     * The FlightSegmentRPH
     * Meta informations extracted from the WSDL
     * - documentation: The segment this baggage allowance is associated with.
     * - use: optional
     * @var string
     */
    public $FlightSegmentRPH;
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the required modification to the element.
     * - use: optional
     * @var string
     */
    public $Operation;
    /**
     * Constructor method for FareBaggageAllowance
     * @uses FareBaggageAllowance::setFlightSegmentRPH()
     * @uses FareBaggageAllowance::setOperation()
     * @param string $flightSegmentRPH
     * @param string $operation
     */
    public function __construct($flightSegmentRPH = null, $operation = null)
    {
        $this
            ->setFlightSegmentRPH($flightSegmentRPH)
            ->setOperation($operation);
    }
    /**
     * Get FlightSegmentRPH value
     * @return string|null
     */
    public function getFlightSegmentRPH()
    {
        return $this->FlightSegmentRPH;
    }
    /**
     * Set FlightSegmentRPH value
     * @param string $flightSegmentRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareBaggageAllowance
     */
    public function setFlightSegmentRPH($flightSegmentRPH = null)
    {
        // validation for constraint: string
        if (!is_null($flightSegmentRPH) && !is_string($flightSegmentRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightSegmentRPH)), __LINE__);
        }
        $this->FlightSegmentRPH = $flightSegmentRPH;
        return $this;
    }
    /**
     * Get Operation value
     * @return string|null
     */
    public function getOperation()
    {
        return $this->Operation;
    }
    /**
     * Set Operation value
     * @param string $operation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareBaggageAllowance
     */
    public function setOperation($operation = null)
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operation)), __LINE__);
        }
        $this->Operation = $operation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareBaggageAllowance
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
