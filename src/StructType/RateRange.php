<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateRange StructType
 * Meta informations extracted from the WSDL
 * - documentation: Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room stay candidates. | Used to provide the minimum and maximum range of rates at this hotel property. | Used to provide the minimum
 * and maximum range of rates at this hotel property. | Provides rate range information. | Used to designate a date range for which the rates apply. | Requested rate or rate range. Repeats to allow the identification of multiple ranges for multiple room
 * stay candidates. *This element is maintained at this level to support those who have implemented this message prior to 2005B. For new implementations consider using this element under HotelSearchCriteria.** | The minimum and maximum amounts a
 * customer is willing to pay.
 * @subpackage Structs
 */
class RateRange extends AbstractStructBase
{
    /**
     * The RoomStayCandidateRPH
     * Meta informations extracted from the WSDL
     * - documentation: Used to associate a rate range with a room stay candidate. | Used to associate a rate range with a room stay candidate.
     * - use: optional
     * @var string
     */
    public $RoomStayCandidateRPH;
    /**
     * The RateMode
     * Meta informations extracted from the WSDL
     * - documentation: This supports returning a type of rate (minimum, maximum, etc.) as an alternative to returning a specific rate. Refer to OpenTravel Code List Rate Mode (RMO).
     * - use: optional
     * @var string
     */
    public $RateMode;
    /**
     * The InfoSource
     * Meta informations extracted from the WSDL
     * - documentation: Used to provide the source of the rate range.
     * - use: optional
     * @var string
     */
    public $InfoSource;
    /**
     * The TaxRate
     * Meta informations extracted from the WSDL
     * - documentation: The tax rate at this property.
     * - use: optional
     * @var string
     */
    public $TaxRate;
    /**
     * The RateInfoNotAvailableInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, rate information is not available.
     * - use: optional
     * @var bool
     */
    public $RateInfoNotAvailableInd;
    /**
     * The MinRate
     * @var string
     */
    public $MinRate;
    /**
     * The MaxRate
     * @var string
     */
    public $MaxRate;
    /**
     * The FixedRate
     * @var string
     */
    public $FixedRate;
    /**
     * The RateTimeUnit
     * @var string
     */
    public $RateTimeUnit;
    /**
     * Constructor method for RateRange
     * @uses RateRange::setRoomStayCandidateRPH()
     * @uses RateRange::setRateMode()
     * @uses RateRange::setInfoSource()
     * @uses RateRange::setTaxRate()
     * @uses RateRange::setRateInfoNotAvailableInd()
     * @uses RateRange::setMinRate()
     * @uses RateRange::setMaxRate()
     * @uses RateRange::setFixedRate()
     * @uses RateRange::setRateTimeUnit()
     * @param string $roomStayCandidateRPH
     * @param string $rateMode
     * @param string $infoSource
     * @param string $taxRate
     * @param bool $rateInfoNotAvailableInd
     * @param string $minRate
     * @param string $maxRate
     * @param string $fixedRate
     * @param string $rateTimeUnit
     */
    public function __construct($roomStayCandidateRPH = null, $rateMode = null, $infoSource = null, $taxRate = null, $rateInfoNotAvailableInd = null, $minRate = null, $maxRate = null, $fixedRate = null, $rateTimeUnit = null)
    {
        $this
            ->setRoomStayCandidateRPH($roomStayCandidateRPH)
            ->setRateMode($rateMode)
            ->setInfoSource($infoSource)
            ->setTaxRate($taxRate)
            ->setRateInfoNotAvailableInd($rateInfoNotAvailableInd)
            ->setMinRate($minRate)
            ->setMaxRate($maxRate)
            ->setFixedRate($fixedRate)
            ->setRateTimeUnit($rateTimeUnit);
    }
    /**
     * Get RoomStayCandidateRPH value
     * @return string|null
     */
    public function getRoomStayCandidateRPH()
    {
        return $this->RoomStayCandidateRPH;
    }
    /**
     * Set RoomStayCandidateRPH value
     * @param string $roomStayCandidateRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRange
     */
    public function setRoomStayCandidateRPH($roomStayCandidateRPH = null)
    {
        // validation for constraint: string
        if (!is_null($roomStayCandidateRPH) && !is_string($roomStayCandidateRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomStayCandidateRPH)), __LINE__);
        }
        $this->RoomStayCandidateRPH = $roomStayCandidateRPH;
        return $this;
    }
    /**
     * Get RateMode value
     * @return string|null
     */
    public function getRateMode()
    {
        return $this->RateMode;
    }
    /**
     * Set RateMode value
     * @param string $rateMode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRange
     */
    public function setRateMode($rateMode = null)
    {
        // validation for constraint: string
        if (!is_null($rateMode) && !is_string($rateMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateMode)), __LINE__);
        }
        $this->RateMode = $rateMode;
        return $this;
    }
    /**
     * Get InfoSource value
     * @return string|null
     */
    public function getInfoSource()
    {
        return $this->InfoSource;
    }
    /**
     * Set InfoSource value
     * @param string $infoSource
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRange
     */
    public function setInfoSource($infoSource = null)
    {
        // validation for constraint: string
        if (!is_null($infoSource) && !is_string($infoSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($infoSource)), __LINE__);
        }
        $this->InfoSource = $infoSource;
        return $this;
    }
    /**
     * Get TaxRate value
     * @return string|null
     */
    public function getTaxRate()
    {
        return $this->TaxRate;
    }
    /**
     * Set TaxRate value
     * @param string $taxRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRange
     */
    public function setTaxRate($taxRate = null)
    {
        // validation for constraint: string
        if (!is_null($taxRate) && !is_string($taxRate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxRate)), __LINE__);
        }
        $this->TaxRate = $taxRate;
        return $this;
    }
    /**
     * Get RateInfoNotAvailableInd value
     * @return bool|null
     */
    public function getRateInfoNotAvailableInd()
    {
        return $this->RateInfoNotAvailableInd;
    }
    /**
     * Set RateInfoNotAvailableInd value
     * @param bool $rateInfoNotAvailableInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRange
     */
    public function setRateInfoNotAvailableInd($rateInfoNotAvailableInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($rateInfoNotAvailableInd) && !is_bool($rateInfoNotAvailableInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rateInfoNotAvailableInd)), __LINE__);
        }
        $this->RateInfoNotAvailableInd = $rateInfoNotAvailableInd;
        return $this;
    }
    /**
     * Get MinRate value
     * @return string|null
     */
    public function getMinRate()
    {
        return $this->MinRate;
    }
    /**
     * Set MinRate value
     * @param string $minRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRange
     */
    public function setMinRate($minRate = null)
    {
        // validation for constraint: string
        if (!is_null($minRate) && !is_string($minRate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($minRate)), __LINE__);
        }
        $this->MinRate = $minRate;
        return $this;
    }
    /**
     * Get MaxRate value
     * @return string|null
     */
    public function getMaxRate()
    {
        return $this->MaxRate;
    }
    /**
     * Set MaxRate value
     * @param string $maxRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRange
     */
    public function setMaxRate($maxRate = null)
    {
        // validation for constraint: string
        if (!is_null($maxRate) && !is_string($maxRate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maxRate)), __LINE__);
        }
        $this->MaxRate = $maxRate;
        return $this;
    }
    /**
     * Get FixedRate value
     * @return string|null
     */
    public function getFixedRate()
    {
        return $this->FixedRate;
    }
    /**
     * Set FixedRate value
     * @param string $fixedRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRange
     */
    public function setFixedRate($fixedRate = null)
    {
        // validation for constraint: string
        if (!is_null($fixedRate) && !is_string($fixedRate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fixedRate)), __LINE__);
        }
        $this->FixedRate = $fixedRate;
        return $this;
    }
    /**
     * Get RateTimeUnit value
     * @return string|null
     */
    public function getRateTimeUnit()
    {
        return $this->RateTimeUnit;
    }
    /**
     * Set RateTimeUnit value
     * @param string $rateTimeUnit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRange
     */
    public function setRateTimeUnit($rateTimeUnit = null)
    {
        // validation for constraint: string
        if (!is_null($rateTimeUnit) && !is_string($rateTimeUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateTimeUnit)), __LINE__);
        }
        $this->RateTimeUnit = $rateTimeUnit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRange
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
