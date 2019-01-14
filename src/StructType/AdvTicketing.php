<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdvTicketing StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies advance ticketing restrictions.
 * @subpackage Structs
 */
class AdvTicketing extends AbstractStructBase
{
    /**
     * The FromResTimeOfDay
     * Meta informations extracted from the WSDL
     * - documentation: The time of day after reservations are made by which a ticket must be purchased.
     * - use: optional
     * @var string
     */
    public $FromResTimeOfDay;
    /**
     * The FromResPeriod
     * Meta informations extracted from the WSDL
     * - documentation: A length of time expressed as either an amount of time or the number of occurrences of a day of the week after reservations are made that a ticket must be purchased.
     * - use: optional
     * @var string
     */
    public $FromResPeriod;
    /**
     * The FromResUnit
     * Meta informations extracted from the WSDL
     * - documentation: The unit of elapsed time or the day of the week to be applied to the period after reservation are made that a ticket must be purchased.
     * - use: optional
     * @var string
     */
    public $FromResUnit;
    /**
     * The FromDepartTimeOfDay
     * Meta informations extracted from the WSDL
     * - documentation: The time of day prior to departure when that a ticket must be purchased.
     * - use: optional
     * @var string
     */
    public $FromDepartTimeOfDay;
    /**
     * The FromDepartPeriod
     * Meta informations extracted from the WSDL
     * - documentation: A length of time expressed as either an amount of time or the number of occurrences of a day of the week before departure that a ticket must be purchased.
     * - use: optional
     * @var string
     */
    public $FromDepartPeriod;
    /**
     * The FromDepartUnit
     * Meta informations extracted from the WSDL
     * - documentation: The unit of elapsed time or the day of the week to be applied to the the period before departure that a ticket must be purchased.
     * - use: optional
     * @var string
     */
    public $FromDepartUnit;
    /**
     * Constructor method for AdvTicketing
     * @uses AdvTicketing::setFromResTimeOfDay()
     * @uses AdvTicketing::setFromResPeriod()
     * @uses AdvTicketing::setFromResUnit()
     * @uses AdvTicketing::setFromDepartTimeOfDay()
     * @uses AdvTicketing::setFromDepartPeriod()
     * @uses AdvTicketing::setFromDepartUnit()
     * @param string $fromResTimeOfDay
     * @param string $fromResPeriod
     * @param string $fromResUnit
     * @param string $fromDepartTimeOfDay
     * @param string $fromDepartPeriod
     * @param string $fromDepartUnit
     */
    public function __construct($fromResTimeOfDay = null, $fromResPeriod = null, $fromResUnit = null, $fromDepartTimeOfDay = null, $fromDepartPeriod = null, $fromDepartUnit = null)
    {
        $this
            ->setFromResTimeOfDay($fromResTimeOfDay)
            ->setFromResPeriod($fromResPeriod)
            ->setFromResUnit($fromResUnit)
            ->setFromDepartTimeOfDay($fromDepartTimeOfDay)
            ->setFromDepartPeriod($fromDepartPeriod)
            ->setFromDepartUnit($fromDepartUnit);
    }
    /**
     * Get FromResTimeOfDay value
     * @return string|null
     */
    public function getFromResTimeOfDay()
    {
        return $this->FromResTimeOfDay;
    }
    /**
     * Set FromResTimeOfDay value
     * @param string $fromResTimeOfDay
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvTicketing
     */
    public function setFromResTimeOfDay($fromResTimeOfDay = null)
    {
        // validation for constraint: string
        if (!is_null($fromResTimeOfDay) && !is_string($fromResTimeOfDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromResTimeOfDay)), __LINE__);
        }
        $this->FromResTimeOfDay = $fromResTimeOfDay;
        return $this;
    }
    /**
     * Get FromResPeriod value
     * @return string|null
     */
    public function getFromResPeriod()
    {
        return $this->FromResPeriod;
    }
    /**
     * Set FromResPeriod value
     * @param string $fromResPeriod
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvTicketing
     */
    public function setFromResPeriod($fromResPeriod = null)
    {
        // validation for constraint: string
        if (!is_null($fromResPeriod) && !is_string($fromResPeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromResPeriod)), __LINE__);
        }
        $this->FromResPeriod = $fromResPeriod;
        return $this;
    }
    /**
     * Get FromResUnit value
     * @return string|null
     */
    public function getFromResUnit()
    {
        return $this->FromResUnit;
    }
    /**
     * Set FromResUnit value
     * @param string $fromResUnit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvTicketing
     */
    public function setFromResUnit($fromResUnit = null)
    {
        // validation for constraint: string
        if (!is_null($fromResUnit) && !is_string($fromResUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromResUnit)), __LINE__);
        }
        $this->FromResUnit = $fromResUnit;
        return $this;
    }
    /**
     * Get FromDepartTimeOfDay value
     * @return string|null
     */
    public function getFromDepartTimeOfDay()
    {
        return $this->FromDepartTimeOfDay;
    }
    /**
     * Set FromDepartTimeOfDay value
     * @param string $fromDepartTimeOfDay
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvTicketing
     */
    public function setFromDepartTimeOfDay($fromDepartTimeOfDay = null)
    {
        // validation for constraint: string
        if (!is_null($fromDepartTimeOfDay) && !is_string($fromDepartTimeOfDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromDepartTimeOfDay)), __LINE__);
        }
        $this->FromDepartTimeOfDay = $fromDepartTimeOfDay;
        return $this;
    }
    /**
     * Get FromDepartPeriod value
     * @return string|null
     */
    public function getFromDepartPeriod()
    {
        return $this->FromDepartPeriod;
    }
    /**
     * Set FromDepartPeriod value
     * @param string $fromDepartPeriod
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvTicketing
     */
    public function setFromDepartPeriod($fromDepartPeriod = null)
    {
        // validation for constraint: string
        if (!is_null($fromDepartPeriod) && !is_string($fromDepartPeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromDepartPeriod)), __LINE__);
        }
        $this->FromDepartPeriod = $fromDepartPeriod;
        return $this;
    }
    /**
     * Get FromDepartUnit value
     * @return string|null
     */
    public function getFromDepartUnit()
    {
        return $this->FromDepartUnit;
    }
    /**
     * Set FromDepartUnit value
     * @param string $fromDepartUnit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvTicketing
     */
    public function setFromDepartUnit($fromDepartUnit = null)
    {
        // validation for constraint: string
        if (!is_null($fromDepartUnit) && !is_string($fromDepartUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fromDepartUnit)), __LINE__);
        }
        $this->FromDepartUnit = $fromDepartUnit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvTicketing
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
