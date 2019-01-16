<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickUpReturnDetails StructType
 * Meta informations extracted from the WSDL
 * - documentation: Actual rental checkout and expected return locations, dates and times.
 * @subpackage Structs
 */
class PickUpReturnDetails extends VehicleRentalCoreType
{
    /**
     * The ExpectedActualCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ExpectedActualCode;
    /**
     * Constructor method for PickUpReturnDetails
     * @uses PickUpReturnDetails::setExpectedActualCode()
     * @param string $expectedActualCode
     */
    public function __construct($expectedActualCode = null)
    {
        $this
            ->setExpectedActualCode($expectedActualCode);
    }
    /**
     * Get ExpectedActualCode value
     * @return string|null
     */
    public function getExpectedActualCode()
    {
        return $this->ExpectedActualCode;
    }
    /**
     * Set ExpectedActualCode value
     * @param string $expectedActualCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PickUpReturnDetails
     */
    public function setExpectedActualCode($expectedActualCode = null)
    {
        // validation for constraint: string
        if (!is_null($expectedActualCode) && !is_string($expectedActualCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expectedActualCode)), __LINE__);
        }
        $this->ExpectedActualCode = $expectedActualCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PickUpReturnDetails
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
