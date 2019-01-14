<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleTotalChargeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleTotalChargeType complex type identifies the data that is used to express a total charge, both including and excluding taxes.
 * @subpackage Structs
 */
class VehicleTotalChargeType extends AbstractStructBase
{
    /**
     * The RateTotalAmount
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $RateTotalAmount;
    /**
     * The EstimatedTotalAmount
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $EstimatedTotalAmount;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CurrencyCode;
    /**
     * Constructor method for VehicleTotalChargeType
     * @uses VehicleTotalChargeType::setRateTotalAmount()
     * @uses VehicleTotalChargeType::setEstimatedTotalAmount()
     * @uses VehicleTotalChargeType::setCurrencyCode()
     * @param string $rateTotalAmount
     * @param string $estimatedTotalAmount
     * @param string $currencyCode
     */
    public function __construct($rateTotalAmount = null, $estimatedTotalAmount = null, $currencyCode = null)
    {
        $this
            ->setRateTotalAmount($rateTotalAmount)
            ->setEstimatedTotalAmount($estimatedTotalAmount)
            ->setCurrencyCode($currencyCode);
    }
    /**
     * Get RateTotalAmount value
     * @return string
     */
    public function getRateTotalAmount()
    {
        return $this->RateTotalAmount;
    }
    /**
     * Set RateTotalAmount value
     * @param string $rateTotalAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleTotalChargeType
     */
    public function setRateTotalAmount($rateTotalAmount = null)
    {
        // validation for constraint: string
        if (!is_null($rateTotalAmount) && !is_string($rateTotalAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateTotalAmount)), __LINE__);
        }
        $this->RateTotalAmount = $rateTotalAmount;
        return $this;
    }
    /**
     * Get EstimatedTotalAmount value
     * @return string|null
     */
    public function getEstimatedTotalAmount()
    {
        return $this->EstimatedTotalAmount;
    }
    /**
     * Set EstimatedTotalAmount value
     * @param string $estimatedTotalAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleTotalChargeType
     */
    public function setEstimatedTotalAmount($estimatedTotalAmount = null)
    {
        // validation for constraint: string
        if (!is_null($estimatedTotalAmount) && !is_string($estimatedTotalAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($estimatedTotalAmount)), __LINE__);
        }
        $this->EstimatedTotalAmount = $estimatedTotalAmount;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleTotalChargeType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleTotalChargeType
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
