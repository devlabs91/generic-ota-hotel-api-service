<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Charge StructType
 * Meta informations extracted from the WSDL
 * - documentation: Cost associated with an amenity.
 * @subpackage Structs
 */
class Charge extends FeeType
{
    /**
     * The ChargeUnit
     * Meta informations extracted from the WSDL
     * - documentation: This is the unit for which the charge applies (e.g. hourly, daily, half-day). Refer to OTA Code List Charge Type (CHG).
     * - use: optional
     * @var string
     */
    public $ChargeUnit;
    /**
     * Constructor method for Charge
     * @uses Charge::setChargeUnit()
     * @param string $chargeUnit
     */
    public function __construct($chargeUnit = null)
    {
        $this
            ->setChargeUnit($chargeUnit);
    }
    /**
     * Get ChargeUnit value
     * @return string|null
     */
    public function getChargeUnit()
    {
        return $this->ChargeUnit;
    }
    /**
     * Set ChargeUnit value
     * @param string $chargeUnit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Charge
     */
    public function setChargeUnit($chargeUnit = null)
    {
        // validation for constraint: string
        if (!is_null($chargeUnit) && !is_string($chargeUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chargeUnit)), __LINE__);
        }
        $this->ChargeUnit = $chargeUnit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Charge
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
