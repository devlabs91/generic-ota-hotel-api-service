<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareBasisCodeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Fare basis code for the price for this PTC | Used for Character Strings, length 1 to 16.
 * - maxLength: 16
 * - minLength: 1
 * @subpackage Structs
 */
class FareBasisCodeType extends AbstractStructBase
{
    /**
     * The FlightSegmentRPH
     * Meta informations extracted from the WSDL
     * - documentation: A reference to the flight segment associated with this fare basis code.
     * - use: optional
     * @var string
     */
    public $FlightSegmentRPH;
    /**
     * The NotValidBefore
     * Meta informations extracted from the WSDL
     * - documentation: The date before which the fare basis code is not valid.
     * - use: optional
     * @var string
     */
    public $NotValidBefore;
    /**
     * The NotValidAfter
     * Meta informations extracted from the WSDL
     * - documentation: The date after which the fare basis code is not valid.
     * - use: optional
     * @var string
     */
    public $NotValidAfter;
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the required modification to the element.
     * - use: optional
     * @var string
     */
    public $Operation;
    /**
     * Constructor method for FareBasisCodeType
     * @uses FareBasisCodeType::setFlightSegmentRPH()
     * @uses FareBasisCodeType::setNotValidBefore()
     * @uses FareBasisCodeType::setNotValidAfter()
     * @uses FareBasisCodeType::setOperation()
     * @param string $flightSegmentRPH
     * @param string $notValidBefore
     * @param string $notValidAfter
     * @param string $operation
     */
    public function __construct($flightSegmentRPH = null, $notValidBefore = null, $notValidAfter = null, $operation = null)
    {
        $this
            ->setFlightSegmentRPH($flightSegmentRPH)
            ->setNotValidBefore($notValidBefore)
            ->setNotValidAfter($notValidAfter)
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareBasisCodeType
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
     * Get NotValidBefore value
     * @return string|null
     */
    public function getNotValidBefore()
    {
        return $this->NotValidBefore;
    }
    /**
     * Set NotValidBefore value
     * @param string $notValidBefore
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareBasisCodeType
     */
    public function setNotValidBefore($notValidBefore = null)
    {
        // validation for constraint: string
        if (!is_null($notValidBefore) && !is_string($notValidBefore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notValidBefore)), __LINE__);
        }
        $this->NotValidBefore = $notValidBefore;
        return $this;
    }
    /**
     * Get NotValidAfter value
     * @return string|null
     */
    public function getNotValidAfter()
    {
        return $this->NotValidAfter;
    }
    /**
     * Set NotValidAfter value
     * @param string $notValidAfter
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareBasisCodeType
     */
    public function setNotValidAfter($notValidAfter = null)
    {
        // validation for constraint: string
        if (!is_null($notValidAfter) && !is_string($notValidAfter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notValidAfter)), __LINE__);
        }
        $this->NotValidAfter = $notValidAfter;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareBasisCodeType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareBasisCodeType
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
