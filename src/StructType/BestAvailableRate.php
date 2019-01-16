<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BestAvailableRate StructType
 * Meta informations extracted from the WSDL
 * - documentation: The details of a best available rate. | The amount of the best available rate. This may be used in conjuction with the RatePlanCode attribute to define its rate.
 * @subpackage Structs
 */
class BestAvailableRate extends AbstractStructBase
{
    /**
     * The LengthOfStayTime
     * Meta informations extracted from the WSDL
     * - documentation: Used in conjunction with the TimeUnit to define the length of stay.
     * - use: optional
     * @var int
     */
    public $LengthOfStayTime;
    /**
     * The LengthOfStayTimeUnit
     * Meta informations extracted from the WSDL
     * - documentation: A time unit used to apply this status message to other inventory, and with more granularity than daily. Values: Year, Month, Week, Day, Hour, Minute, Second.
     * - use: optional
     * @var string
     */
    public $LengthOfStayTimeUnit;
    /**
     * The RatePlanCode
     * Meta informations extracted from the WSDL
     * - documentation: A string value used to specify the rate code as the best available rate.
     * - use: optional
     * @var string
     */
    public $RatePlanCode;
    /**
     * The TaxInclusive
     * Meta informations extracted from the WSDL
     * - documentation: When true indicates tax is included. When false tax is not included.
     * - use: optional
     * @var bool
     */
    public $TaxInclusive;
    /**
     * Constructor method for BestAvailableRate
     * @uses BestAvailableRate::setLengthOfStayTime()
     * @uses BestAvailableRate::setLengthOfStayTimeUnit()
     * @uses BestAvailableRate::setRatePlanCode()
     * @uses BestAvailableRate::setTaxInclusive()
     * @param int $lengthOfStayTime
     * @param string $lengthOfStayTimeUnit
     * @param string $ratePlanCode
     * @param bool $taxInclusive
     */
    public function __construct($lengthOfStayTime = null, $lengthOfStayTimeUnit = null, $ratePlanCode = null, $taxInclusive = null)
    {
        $this
            ->setLengthOfStayTime($lengthOfStayTime)
            ->setLengthOfStayTimeUnit($lengthOfStayTimeUnit)
            ->setRatePlanCode($ratePlanCode)
            ->setTaxInclusive($taxInclusive);
    }
    /**
     * Get LengthOfStayTime value
     * @return int|null
     */
    public function getLengthOfStayTime()
    {
        return $this->LengthOfStayTime;
    }
    /**
     * Set LengthOfStayTime value
     * @param int $lengthOfStayTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRate
     */
    public function setLengthOfStayTime($lengthOfStayTime = null)
    {
        // validation for constraint: int
        if (!is_null($lengthOfStayTime) && !is_numeric($lengthOfStayTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lengthOfStayTime)), __LINE__);
        }
        $this->LengthOfStayTime = $lengthOfStayTime;
        return $this;
    }
    /**
     * Get LengthOfStayTimeUnit value
     * @return string|null
     */
    public function getLengthOfStayTimeUnit()
    {
        return $this->LengthOfStayTimeUnit;
    }
    /**
     * Set LengthOfStayTimeUnit value
     * @param string $lengthOfStayTimeUnit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRate
     */
    public function setLengthOfStayTimeUnit($lengthOfStayTimeUnit = null)
    {
        // validation for constraint: string
        if (!is_null($lengthOfStayTimeUnit) && !is_string($lengthOfStayTimeUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lengthOfStayTimeUnit)), __LINE__);
        }
        $this->LengthOfStayTimeUnit = $lengthOfStayTimeUnit;
        return $this;
    }
    /**
     * Get RatePlanCode value
     * @return string|null
     */
    public function getRatePlanCode()
    {
        return $this->RatePlanCode;
    }
    /**
     * Set RatePlanCode value
     * @param string $ratePlanCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRate
     */
    public function setRatePlanCode($ratePlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanCode) && !is_string($ratePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanCode)), __LINE__);
        }
        $this->RatePlanCode = $ratePlanCode;
        return $this;
    }
    /**
     * Get TaxInclusive value
     * @return bool|null
     */
    public function getTaxInclusive()
    {
        return $this->TaxInclusive;
    }
    /**
     * Set TaxInclusive value
     * @param bool $taxInclusive
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRate
     */
    public function setTaxInclusive($taxInclusive = null)
    {
        // validation for constraint: boolean
        if (!is_null($taxInclusive) && !is_bool($taxInclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($taxInclusive)), __LINE__);
        }
        $this->TaxInclusive = $taxInclusive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BestAvailableRate
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
