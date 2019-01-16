<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatePlanCandidate StructType
 * Meta informations extracted from the WSDL
 * - documentation: Element used to identify available products and rates.
 * @subpackage Structs
 */
class RatePlanCandidate extends AbstractStructBase
{
    /**
     * The HotelRefs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\HotelRefs
     */
    public $HotelRefs;
    /**
     * The MealsIncluded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded
     */
    public $MealsIncluded;
    /**
     * The ArrivalPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPolicy
     */
    public $ArrivalPolicy;
    /**
     * The RatePlanCommission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCommission
     */
    public $RatePlanCommission;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier for this rate plan candidate.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The PrepaidQualifier
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $PrepaidQualifier;
    /**
     * Constructor method for RatePlanCandidate
     * @uses RatePlanCandidate::setHotelRefs()
     * @uses RatePlanCandidate::setMealsIncluded()
     * @uses RatePlanCandidate::setArrivalPolicy()
     * @uses RatePlanCandidate::setRatePlanCommission()
     * @uses RatePlanCandidate::setRPH()
     * @uses RatePlanCandidate::setPrepaidQualifier()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelRefs $hotelRefs
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded $mealsIncluded
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPolicy $arrivalPolicy
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCommission $ratePlanCommission
     * @param string $rPH
     * @param string $prepaidQualifier
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\HotelRefs $hotelRefs = null, \Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded $mealsIncluded = null, \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPolicy $arrivalPolicy = null, \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCommission $ratePlanCommission = null, $rPH = null, $prepaidQualifier = null)
    {
        $this
            ->setHotelRefs($hotelRefs)
            ->setMealsIncluded($mealsIncluded)
            ->setArrivalPolicy($arrivalPolicy)
            ->setRatePlanCommission($ratePlanCommission)
            ->setRPH($rPH)
            ->setPrepaidQualifier($prepaidQualifier);
    }
    /**
     * Get HotelRefs value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelRefs|null
     */
    public function getHotelRefs()
    {
        return $this->HotelRefs;
    }
    /**
     * Set HotelRefs value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelRefs $hotelRefs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate
     */
    public function setHotelRefs(\Devlabs91\GenericOtaHotelApiService\StructType\HotelRefs $hotelRefs = null)
    {
        $this->HotelRefs = $hotelRefs;
        return $this;
    }
    /**
     * Get MealsIncluded value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded|null
     */
    public function getMealsIncluded()
    {
        return $this->MealsIncluded;
    }
    /**
     * Set MealsIncluded value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded $mealsIncluded
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate
     */
    public function setMealsIncluded(\Devlabs91\GenericOtaHotelApiService\StructType\MealsIncluded $mealsIncluded = null)
    {
        $this->MealsIncluded = $mealsIncluded;
        return $this;
    }
    /**
     * Get ArrivalPolicy value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPolicy|null
     */
    public function getArrivalPolicy()
    {
        return $this->ArrivalPolicy;
    }
    /**
     * Set ArrivalPolicy value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPolicy $arrivalPolicy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate
     */
    public function setArrivalPolicy(\Devlabs91\GenericOtaHotelApiService\StructType\ArrivalPolicy $arrivalPolicy = null)
    {
        $this->ArrivalPolicy = $arrivalPolicy;
        return $this;
    }
    /**
     * Get RatePlanCommission value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCommission|null
     */
    public function getRatePlanCommission()
    {
        return $this->RatePlanCommission;
    }
    /**
     * Set RatePlanCommission value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCommission $ratePlanCommission
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate
     */
    public function setRatePlanCommission(\Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCommission $ratePlanCommission = null)
    {
        $this->RatePlanCommission = $ratePlanCommission;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get PrepaidQualifier value
     * @return string|null
     */
    public function getPrepaidQualifier()
    {
        return $this->PrepaidQualifier;
    }
    /**
     * Set PrepaidQualifier value
     * @param string $prepaidQualifier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate
     */
    public function setPrepaidQualifier($prepaidQualifier = null)
    {
        // validation for constraint: string
        if (!is_null($prepaidQualifier) && !is_string($prepaidQualifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prepaidQualifier)), __LINE__);
        }
        $this->PrepaidQualifier = $prepaidQualifier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RatePlanCandidate
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
