<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TotalCharge StructType
 * Meta informations extracted from the WSDL
 * - documentation: The anticipated total cost of a reservation, the sum of the individual charges, optional charges and associated fees. | The anticipated total cost of a rental, the sum of the individual charges, optional charges, and associated fees.
 * | Total cost for this reservation as returned from an availability search. | The total cost of this reservation, the sum of the individual charges, optional charges and associated fees.
 * @subpackage Structs
 */
class TotalCharge extends AbstractStructBase
{
    /**
     * The RateConvertInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, the rates have been converted to a different currency.
     * - use: optional
     * @var bool
     */
    public $RateConvertInd;
    /**
     * Constructor method for TotalCharge
     * @uses TotalCharge::setRateConvertInd()
     * @param bool $rateConvertInd
     */
    public function __construct($rateConvertInd = null)
    {
        $this
            ->setRateConvertInd($rateConvertInd);
    }
    /**
     * Get RateConvertInd value
     * @return bool|null
     */
    public function getRateConvertInd()
    {
        return $this->RateConvertInd;
    }
    /**
     * Set RateConvertInd value
     * @param bool $rateConvertInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge
     */
    public function setRateConvertInd($rateConvertInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($rateConvertInd) && !is_bool($rateConvertInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rateConvertInd)), __LINE__);
        }
        $this->RateConvertInd = $rateConvertInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TotalCharge
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
