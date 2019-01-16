<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MinimumStay StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies restrictions for the shortest length/period of time or earliest day return travel can commence or be completed.
 * @subpackage Structs
 */
class MinimumStay extends AbstractStructBase
{
    /**
     * The ReturnTimeOfDay
     * Meta informations extracted from the WSDL
     * - documentation: The time of day when return travel may commence.
     * - use: optional
     * @var string
     */
    public $ReturnTimeOfDay;
    /**
     * The MinStay
     * Meta informations extracted from the WSDL
     * - documentation: The amount of elapsed time or number of occurrences of a day of the week needed to satisfy a minimum stay requirement.
     * - use: optional
     * @var string
     */
    public $MinStay;
    /**
     * The StayUnit
     * Meta informations extracted from the WSDL
     * - documentation: The unit of elapsed time or the day of the week applied to the MinStay value.
     * - use: optional
     * @var string
     */
    public $StayUnit;
    /**
     * The MinStayDate
     * Meta informations extracted from the WSDL
     * - documentation: The specific date for the minimum stay requirement.
     * - use: optional
     * @var string
     */
    public $MinStayDate;
    /**
     * The ComplicatedRulesInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, there are complicated rules for the minimum stay requirement.
     * - use: optional
     * @var bool
     */
    public $ComplicatedRulesInd;
    /**
     * Constructor method for MinimumStay
     * @uses MinimumStay::setReturnTimeOfDay()
     * @uses MinimumStay::setMinStay()
     * @uses MinimumStay::setStayUnit()
     * @uses MinimumStay::setMinStayDate()
     * @uses MinimumStay::setComplicatedRulesInd()
     * @param string $returnTimeOfDay
     * @param string $minStay
     * @param string $stayUnit
     * @param string $minStayDate
     * @param bool $complicatedRulesInd
     */
    public function __construct($returnTimeOfDay = null, $minStay = null, $stayUnit = null, $minStayDate = null, $complicatedRulesInd = null)
    {
        $this
            ->setReturnTimeOfDay($returnTimeOfDay)
            ->setMinStay($minStay)
            ->setStayUnit($stayUnit)
            ->setMinStayDate($minStayDate)
            ->setComplicatedRulesInd($complicatedRulesInd);
    }
    /**
     * Get ReturnTimeOfDay value
     * @return string|null
     */
    public function getReturnTimeOfDay()
    {
        return $this->ReturnTimeOfDay;
    }
    /**
     * Set ReturnTimeOfDay value
     * @param string $returnTimeOfDay
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MinimumStay
     */
    public function setReturnTimeOfDay($returnTimeOfDay = null)
    {
        // validation for constraint: string
        if (!is_null($returnTimeOfDay) && !is_string($returnTimeOfDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnTimeOfDay)), __LINE__);
        }
        $this->ReturnTimeOfDay = $returnTimeOfDay;
        return $this;
    }
    /**
     * Get MinStay value
     * @return string|null
     */
    public function getMinStay()
    {
        return $this->MinStay;
    }
    /**
     * Set MinStay value
     * @param string $minStay
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MinimumStay
     */
    public function setMinStay($minStay = null)
    {
        // validation for constraint: string
        if (!is_null($minStay) && !is_string($minStay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minStay)), __LINE__);
        }
        $this->MinStay = $minStay;
        return $this;
    }
    /**
     * Get StayUnit value
     * @return string|null
     */
    public function getStayUnit()
    {
        return $this->StayUnit;
    }
    /**
     * Set StayUnit value
     * @param string $stayUnit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MinimumStay
     */
    public function setStayUnit($stayUnit = null)
    {
        // validation for constraint: string
        if (!is_null($stayUnit) && !is_string($stayUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stayUnit)), __LINE__);
        }
        $this->StayUnit = $stayUnit;
        return $this;
    }
    /**
     * Get MinStayDate value
     * @return string|null
     */
    public function getMinStayDate()
    {
        return $this->MinStayDate;
    }
    /**
     * Set MinStayDate value
     * @param string $minStayDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MinimumStay
     */
    public function setMinStayDate($minStayDate = null)
    {
        // validation for constraint: string
        if (!is_null($minStayDate) && !is_string($minStayDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minStayDate)), __LINE__);
        }
        $this->MinStayDate = $minStayDate;
        return $this;
    }
    /**
     * Get ComplicatedRulesInd value
     * @return bool|null
     */
    public function getComplicatedRulesInd()
    {
        return $this->ComplicatedRulesInd;
    }
    /**
     * Set ComplicatedRulesInd value
     * @param bool $complicatedRulesInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MinimumStay
     */
    public function setComplicatedRulesInd($complicatedRulesInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($complicatedRulesInd) && !is_bool($complicatedRulesInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($complicatedRulesInd)), __LINE__);
        }
        $this->ComplicatedRulesInd = $complicatedRulesInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MinimumStay
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
