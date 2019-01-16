<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmountPercent StructType
 * Meta informations extracted from the WSDL
 * - documentation: Payment expressed as a fixed amount, or a percentage of/or room nights.
 * @subpackage Structs
 */
class AmountPercent extends AmountPercentType
{
    /**
     * The OverriddenAmountIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, indicates that the amount has been overridden.
     * - use: optional
     * @var bool
     */
    public $OverriddenAmountIndicator;
    /**
     * Constructor method for AmountPercent
     * @uses AmountPercent::setOverriddenAmountIndicator()
     * @param bool $overriddenAmountIndicator
     */
    public function __construct($overriddenAmountIndicator = null)
    {
        $this
            ->setOverriddenAmountIndicator($overriddenAmountIndicator);
    }
    /**
     * Get OverriddenAmountIndicator value
     * @return bool|null
     */
    public function getOverriddenAmountIndicator()
    {
        return $this->OverriddenAmountIndicator;
    }
    /**
     * Set OverriddenAmountIndicator value
     * @param bool $overriddenAmountIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountPercent
     */
    public function setOverriddenAmountIndicator($overriddenAmountIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($overriddenAmountIndicator) && !is_bool($overriddenAmountIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($overriddenAmountIndicator)), __LINE__);
        }
        $this->OverriddenAmountIndicator = $overriddenAmountIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountPercent
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
