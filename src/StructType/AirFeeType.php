<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirFeeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the data fields available for the fees. | Provides a monetary amount and the currency code to reflect the currency in which this amount is expressed. | Defines a fee in terms of its amount, currency and decimal places. | A
 * textual description.
 * - maxLength: 64
 * - minLength: 0
 * @subpackage Structs
 */
class AirFeeType extends AbstractStructBase
{
    /**
     * The FeeCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the code for the fee.
     * - use: required
     * @var string
     */
    public $FeeCode;
    /**
     * Constructor method for AirFeeType
     * @uses AirFeeType::setFeeCode()
     * @param string $feeCode
     */
    public function __construct($feeCode = null)
    {
        $this
            ->setFeeCode($feeCode);
    }
    /**
     * Get FeeCode value
     * @return string
     */
    public function getFeeCode()
    {
        return $this->FeeCode;
    }
    /**
     * Set FeeCode value
     * @param string $feeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirFeeType
     */
    public function setFeeCode($feeCode = null)
    {
        // validation for constraint: string
        if (!is_null($feeCode) && !is_string($feeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($feeCode)), __LINE__);
        }
        $this->FeeCode = $feeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirFeeType
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
