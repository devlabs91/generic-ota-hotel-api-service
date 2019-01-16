<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlanCommission StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines commission attributes for this rate plan.
 * @subpackage Structs
 */
class RatePlanCommission extends AbstractStructBase
{
    /**
     * The MaxCommissionPercentage
     * Meta informations extracted from the WSDL
     * - documentation: Defines the maximum commission percentage requested.
     * - use: optional
     * @var string
     */
    public $MaxCommissionPercentage;
    /**
     * The MinCommissionPercentage
     * Meta informations extracted from the WSDL
     * - documentation: Defines the minimum commission percentage requested.
     * - use: optional
     * @var string
     */
    public $MinCommissionPercentage;
    /**
     * The CommissionableIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates the rate requested is commissionable.
     * - use: optional
     * @var bool
     */
    public $CommissionableIndicator;
    /**
     * Constructor method for RatePlanCommission
     * @uses RatePlanCommission::setMaxCommissionPercentage()
     * @uses RatePlanCommission::setMinCommissionPercentage()
     * @uses RatePlanCommission::setCommissionableIndicator()
     * @param string $maxCommissionPercentage
     * @param string $minCommissionPercentage
     * @param bool $commissionableIndicator
     */
    public function __construct($maxCommissionPercentage = null, $minCommissionPercentage = null, $commissionableIndicator = null)
    {
        $this
            ->setMaxCommissionPercentage($maxCommissionPercentage)
            ->setMinCommissionPercentage($minCommissionPercentage)
            ->setCommissionableIndicator($commissionableIndicator);
    }
    /**
     * Get MaxCommissionPercentage value
     * @return string|null
     */
    public function getMaxCommissionPercentage()
    {
        return $this->MaxCommissionPercentage;
    }
    /**
     * Set MaxCommissionPercentage value
     * @param string $maxCommissionPercentage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCommission
     */
    public function setMaxCommissionPercentage($maxCommissionPercentage = null)
    {
        // validation for constraint: string
        if (!is_null($maxCommissionPercentage) && !is_string($maxCommissionPercentage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxCommissionPercentage)), __LINE__);
        }
        $this->MaxCommissionPercentage = $maxCommissionPercentage;
        return $this;
    }
    /**
     * Get MinCommissionPercentage value
     * @return string|null
     */
    public function getMinCommissionPercentage()
    {
        return $this->MinCommissionPercentage;
    }
    /**
     * Set MinCommissionPercentage value
     * @param string $minCommissionPercentage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCommission
     */
    public function setMinCommissionPercentage($minCommissionPercentage = null)
    {
        // validation for constraint: string
        if (!is_null($minCommissionPercentage) && !is_string($minCommissionPercentage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minCommissionPercentage)), __LINE__);
        }
        $this->MinCommissionPercentage = $minCommissionPercentage;
        return $this;
    }
    /**
     * Get CommissionableIndicator value
     * @return bool|null
     */
    public function getCommissionableIndicator()
    {
        return $this->CommissionableIndicator;
    }
    /**
     * Set CommissionableIndicator value
     * @param bool $commissionableIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCommission
     */
    public function setCommissionableIndicator($commissionableIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($commissionableIndicator) && !is_bool($commissionableIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($commissionableIndicator)), __LINE__);
        }
        $this->CommissionableIndicator = $commissionableIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCommission
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
