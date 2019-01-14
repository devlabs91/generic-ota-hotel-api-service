<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdvReservation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies constraints on when advance reservations can be made.
 * @subpackage Structs
 */
class AdvReservation extends AbstractStructBase
{
    /**
     * The LatestTimeOfDay
     * Meta informations extracted from the WSDL
     * - documentation: The time of day by which reservations must be made on the last day that advance reservations can be made.
     * - use: optional
     * @var string
     */
    public $LatestTimeOfDay;
    /**
     * The LatestPeriod
     * Meta informations extracted from the WSDL
     * - documentation: The amount of elapsed time or number of occurrences of a day of the week before departure needed to satisfy an advance reservation requirement.
     * - use: optional
     * @var string
     */
    public $LatestPeriod;
    /**
     * The LatestUnit
     * Meta informations extracted from the WSDL
     * - documentation: The unit of elapsed time or the day of the week to be applied to the LatestPeriod value.
     * - use: optional
     * @var string
     */
    public $LatestUnit;
    /**
     * Constructor method for AdvReservation
     * @uses AdvReservation::setLatestTimeOfDay()
     * @uses AdvReservation::setLatestPeriod()
     * @uses AdvReservation::setLatestUnit()
     * @param string $latestTimeOfDay
     * @param string $latestPeriod
     * @param string $latestUnit
     */
    public function __construct($latestTimeOfDay = null, $latestPeriod = null, $latestUnit = null)
    {
        $this
            ->setLatestTimeOfDay($latestTimeOfDay)
            ->setLatestPeriod($latestPeriod)
            ->setLatestUnit($latestUnit);
    }
    /**
     * Get LatestTimeOfDay value
     * @return string|null
     */
    public function getLatestTimeOfDay()
    {
        return $this->LatestTimeOfDay;
    }
    /**
     * Set LatestTimeOfDay value
     * @param string $latestTimeOfDay
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvReservation
     */
    public function setLatestTimeOfDay($latestTimeOfDay = null)
    {
        // validation for constraint: string
        if (!is_null($latestTimeOfDay) && !is_string($latestTimeOfDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($latestTimeOfDay)), __LINE__);
        }
        $this->LatestTimeOfDay = $latestTimeOfDay;
        return $this;
    }
    /**
     * Get LatestPeriod value
     * @return string|null
     */
    public function getLatestPeriod()
    {
        return $this->LatestPeriod;
    }
    /**
     * Set LatestPeriod value
     * @param string $latestPeriod
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvReservation
     */
    public function setLatestPeriod($latestPeriod = null)
    {
        // validation for constraint: string
        if (!is_null($latestPeriod) && !is_string($latestPeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($latestPeriod)), __LINE__);
        }
        $this->LatestPeriod = $latestPeriod;
        return $this;
    }
    /**
     * Get LatestUnit value
     * @return string|null
     */
    public function getLatestUnit()
    {
        return $this->LatestUnit;
    }
    /**
     * Set LatestUnit value
     * @param string $latestUnit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvReservation
     */
    public function setLatestUnit($latestUnit = null)
    {
        // validation for constraint: string
        if (!is_null($latestUnit) && !is_string($latestUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($latestUnit)), __LINE__);
        }
        $this->LatestUnit = $latestUnit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvReservation
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
