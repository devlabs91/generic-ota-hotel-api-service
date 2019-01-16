<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MinMax StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information on any minimum or maximum amounts, if appropriate.
 * @subpackage Structs
 */
class MinMax extends AbstractStructBase
{
    /**
     * The MaxCharge
     * Meta informations extracted from the WSDL
     * - documentation: The maximum amount that will be charged.
     * - use: optional
     * @var string
     */
    public $MaxCharge;
    /**
     * The MinCharge
     * Meta informations extracted from the WSDL
     * - documentation: The minimum amount that will be charged.
     * - use: optional
     * @var string
     */
    public $MinCharge;
    /**
     * The MaxChargeDays
     * Meta informations extracted from the WSDL
     * - documentation: Maximum number of days for which a charge will be applied.
     * - use: optional
     * @var int
     */
    public $MaxChargeDays;
    /**
     * Constructor method for MinMax
     * @uses MinMax::setMaxCharge()
     * @uses MinMax::setMinCharge()
     * @uses MinMax::setMaxChargeDays()
     * @param string $maxCharge
     * @param string $minCharge
     * @param int $maxChargeDays
     */
    public function __construct($maxCharge = null, $minCharge = null, $maxChargeDays = null)
    {
        $this
            ->setMaxCharge($maxCharge)
            ->setMinCharge($minCharge)
            ->setMaxChargeDays($maxChargeDays);
    }
    /**
     * Get MaxCharge value
     * @return string|null
     */
    public function getMaxCharge()
    {
        return $this->MaxCharge;
    }
    /**
     * Set MaxCharge value
     * @param string $maxCharge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MinMax
     */
    public function setMaxCharge($maxCharge = null)
    {
        // validation for constraint: string
        if (!is_null($maxCharge) && !is_string($maxCharge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxCharge)), __LINE__);
        }
        $this->MaxCharge = $maxCharge;
        return $this;
    }
    /**
     * Get MinCharge value
     * @return string|null
     */
    public function getMinCharge()
    {
        return $this->MinCharge;
    }
    /**
     * Set MinCharge value
     * @param string $minCharge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MinMax
     */
    public function setMinCharge($minCharge = null)
    {
        // validation for constraint: string
        if (!is_null($minCharge) && !is_string($minCharge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minCharge)), __LINE__);
        }
        $this->MinCharge = $minCharge;
        return $this;
    }
    /**
     * Get MaxChargeDays value
     * @return int|null
     */
    public function getMaxChargeDays()
    {
        return $this->MaxChargeDays;
    }
    /**
     * Set MaxChargeDays value
     * @param int $maxChargeDays
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MinMax
     */
    public function setMaxChargeDays($maxChargeDays = null)
    {
        // validation for constraint: int
        if (!is_null($maxChargeDays) && !is_numeric($maxChargeDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxChargeDays)), __LINE__);
        }
        $this->MaxChargeDays = $maxChargeDays;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MinMax
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
