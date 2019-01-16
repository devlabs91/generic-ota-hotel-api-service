<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightLeg StructType
 * Meta informations extracted from the WSDL
 * - documentation: The flight leg information for the fare component. | Used to specify the free baggage allowance for this flight leg.
 * @subpackage Structs
 */
class FlightLeg extends BookFlightSegmentType
{
    /**
     * The SurchargeInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, a surcharge applies to this flight leg.
     * - use: optional
     * @var bool
     */
    public $SurchargeInd;
    /**
     * The FareBasisCode
     * Meta informations extracted from the WSDL
     * - documentation: The fare basis code for this flight leg.
     * - use: optional
     * @var string
     */
    public $FareBasisCode;
    /**
     * Constructor method for FlightLeg
     * @uses FlightLeg::setSurchargeInd()
     * @uses FlightLeg::setFareBasisCode()
     * @param bool $surchargeInd
     * @param string $fareBasisCode
     */
    public function __construct($surchargeInd = null, $fareBasisCode = null)
    {
        $this
            ->setSurchargeInd($surchargeInd)
            ->setFareBasisCode($fareBasisCode);
    }
    /**
     * Get SurchargeInd value
     * @return bool|null
     */
    public function getSurchargeInd()
    {
        return $this->SurchargeInd;
    }
    /**
     * Set SurchargeInd value
     * @param bool $surchargeInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightLeg
     */
    public function setSurchargeInd($surchargeInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($surchargeInd) && !is_bool($surchargeInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($surchargeInd)), __LINE__);
        }
        $this->SurchargeInd = $surchargeInd;
        return $this;
    }
    /**
     * Get FareBasisCode value
     * @return string|null
     */
    public function getFareBasisCode()
    {
        return $this->FareBasisCode;
    }
    /**
     * Set FareBasisCode value
     * @param string $fareBasisCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightLeg
     */
    public function setFareBasisCode($fareBasisCode = null)
    {
        // validation for constraint: string
        if (!is_null($fareBasisCode) && !is_string($fareBasisCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareBasisCode)), __LINE__);
        }
        $this->FareBasisCode = $fareBasisCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightLeg
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
