<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Cash StructType
 * Meta informations extracted from the WSDL
 * - documentation: Used to indicate payment in cash.
 * @subpackage Structs
 */
class Cash extends AbstractStructBase
{
    /**
     * The CashIndicator
     * Meta informations extracted from the WSDL
     * - documentation: If true, this indicates cash is being used. | true
     * - use: optional
     * @var bool
     */
    public $CashIndicator;
    /**
     * Constructor method for Cash
     * @uses Cash::setCashIndicator()
     * @param bool $cashIndicator
     */
    public function __construct($cashIndicator = null)
    {
        $this
            ->setCashIndicator($cashIndicator);
    }
    /**
     * Get CashIndicator value
     * @return bool|null
     */
    public function getCashIndicator()
    {
        return $this->CashIndicator;
    }
    /**
     * Set CashIndicator value
     * @param bool $cashIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Cash
     */
    public function setCashIndicator($cashIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($cashIndicator) && !is_bool($cashIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($cashIndicator)), __LINE__);
        }
        $this->CashIndicator = $cashIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Cash
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
