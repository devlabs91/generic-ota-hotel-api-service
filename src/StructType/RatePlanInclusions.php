<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlanInclusions StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines charges that are included in this rate plan.This element allows for future extension should there be a need.
 * @subpackage Structs
 */
class RatePlanInclusions extends AbstractStructBase
{
    /**
     * The RatePlanInclusionDesciption
     * Meta informations extracted from the WSDL
     * - documentation: Description of what is included in the rate plan.
     * - minOccurs: 0
     * @var mixed
     */
    public $RatePlanInclusionDesciption;
    /**
     * The TaxInclusive
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $TaxInclusive;
    /**
     * The ServiceFeeInclusive
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $ServiceFeeInclusive;
    /**
     * Constructor method for RatePlanInclusions
     * @uses RatePlanInclusions::setRatePlanInclusionDesciption()
     * @uses RatePlanInclusions::setTaxInclusive()
     * @uses RatePlanInclusions::setServiceFeeInclusive()
     * @param mixed $ratePlanInclusionDesciption
     * @param bool $taxInclusive
     * @param bool $serviceFeeInclusive
     */
    public function __construct($ratePlanInclusionDesciption = null, $taxInclusive = null, $serviceFeeInclusive = null)
    {
        $this
            ->setRatePlanInclusionDesciption($ratePlanInclusionDesciption)
            ->setTaxInclusive($taxInclusive)
            ->setServiceFeeInclusive($serviceFeeInclusive);
    }
    /**
     * Get RatePlanInclusionDesciption value
     * @return mixed|null
     */
    public function getRatePlanInclusionDesciption()
    {
        return $this->RatePlanInclusionDesciption;
    }
    /**
     * Set RatePlanInclusionDesciption value
     * @param mixed $ratePlanInclusionDesciption
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanInclusions
     */
    public function setRatePlanInclusionDesciption($ratePlanInclusionDesciption = null)
    {
        $this->RatePlanInclusionDesciption = $ratePlanInclusionDesciption;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanInclusions
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
     * Get ServiceFeeInclusive value
     * @return bool|null
     */
    public function getServiceFeeInclusive()
    {
        return $this->ServiceFeeInclusive;
    }
    /**
     * Set ServiceFeeInclusive value
     * @param bool $serviceFeeInclusive
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanInclusions
     */
    public function setServiceFeeInclusive($serviceFeeInclusive = null)
    {
        // validation for constraint: boolean
        if (!is_null($serviceFeeInclusive) && !is_bool($serviceFeeInclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($serviceFeeInclusive)), __LINE__);
        }
        $this->ServiceFeeInclusive = $serviceFeeInclusive;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanInclusions
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
