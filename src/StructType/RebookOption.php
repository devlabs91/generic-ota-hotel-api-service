<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RebookOption StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides information concerning a flight segment that can be rebooked for a lower fare.
 * @subpackage Structs
 */
class RebookOption extends AbstractStructBase
{
    /**
     * The FlightSegmentRPH
     * Meta informations extracted from the WSDL
     * - documentation: A reference to a booked flight segment.
     * - use: required
     * @var string
     */
    public $FlightSegmentRPH;
    /**
     * The ResBookDesigCode
     * Meta informations extracted from the WSDL
     * - documentation: The class of service in which the flight should be rebooked for a lower fare.
     * - use: required
     * @var string
     */
    public $ResBookDesigCode;
    /**
     * Constructor method for RebookOption
     * @uses RebookOption::setFlightSegmentRPH()
     * @uses RebookOption::setResBookDesigCode()
     * @param string $flightSegmentRPH
     * @param string $resBookDesigCode
     */
    public function __construct($flightSegmentRPH = null, $resBookDesigCode = null)
    {
        $this
            ->setFlightSegmentRPH($flightSegmentRPH)
            ->setResBookDesigCode($resBookDesigCode);
    }
    /**
     * Get FlightSegmentRPH value
     * @return string
     */
    public function getFlightSegmentRPH()
    {
        return $this->FlightSegmentRPH;
    }
    /**
     * Set FlightSegmentRPH value
     * @param string $flightSegmentRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RebookOption
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
     * Get ResBookDesigCode value
     * @return string
     */
    public function getResBookDesigCode()
    {
        return $this->ResBookDesigCode;
    }
    /**
     * Set ResBookDesigCode value
     * @param string $resBookDesigCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RebookOption
     */
    public function setResBookDesigCode($resBookDesigCode = null)
    {
        // validation for constraint: string
        if (!is_null($resBookDesigCode) && !is_string($resBookDesigCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resBookDesigCode)), __LINE__);
        }
        $this->ResBookDesigCode = $resBookDesigCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RebookOption
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
