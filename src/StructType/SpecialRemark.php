<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialRemark StructType
 * Meta informations extracted from the WSDL
 * - documentation: Itinerary Remarks, Invoice Remarks, etc.
 * @subpackage Structs
 */
class SpecialRemark extends SpecialRemarkType
{
    /**
     * The FlightLeg
     * Meta informations extracted from the WSDL
     * - documentation: Flight information associated to this special remark, used when FlightRefNumberRPHList is not available or is different.
     * - minOccurs: 0
     * @var mixed
     */
    public $FlightLeg;
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the required modification to the element.
     * - use: optional
     * @var string
     */
    public $Operation;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: Unique value associated with the Special Remark.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * Constructor method for SpecialRemark
     * @uses SpecialRemark::setFlightLeg()
     * @uses SpecialRemark::setOperation()
     * @uses SpecialRemark::setRPH()
     * @param mixed $flightLeg
     * @param string $operation
     * @param string $rPH
     */
    public function __construct($flightLeg = null, $operation = null, $rPH = null)
    {
        $this
            ->setFlightLeg($flightLeg)
            ->setOperation($operation)
            ->setRPH($rPH);
    }
    /**
     * Get FlightLeg value
     * @return mixed|null
     */
    public function getFlightLeg()
    {
        return $this->FlightLeg;
    }
    /**
     * Set FlightLeg value
     * @param mixed $flightLeg
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemark
     */
    public function setFlightLeg($flightLeg = null)
    {
        $this->FlightLeg = $flightLeg;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemark
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
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemark
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemark
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
