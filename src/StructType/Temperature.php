<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Temperature StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides average temperatures and the unit in which they are measured for a Period.
 * @subpackage Structs
 */
class Temperature extends AbstractStructBase
{
    /**
     * The AverageHighTemp
     * Meta informations extracted from the WSDL
     * - documentation: Defines the average high tempature for the time as designated in Period and is qualified by the TempUnit.
     * - use: optional
     * @var int
     */
    public $AverageHighTemp;
    /**
     * The AverageLowTemp
     * Meta informations extracted from the WSDL
     * - documentation: Defines the average low tempature for the time as designated in Period and is qualified by the TempUnit.
     * - use: optional
     * @var int
     */
    public $AverageLowTemp;
    /**
     * The TempUnit
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $TempUnit;
    /**
     * Constructor method for Temperature
     * @uses Temperature::setAverageHighTemp()
     * @uses Temperature::setAverageLowTemp()
     * @uses Temperature::setTempUnit()
     * @param int $averageHighTemp
     * @param int $averageLowTemp
     * @param string $tempUnit
     */
    public function __construct($averageHighTemp = null, $averageLowTemp = null, $tempUnit = null)
    {
        $this
            ->setAverageHighTemp($averageHighTemp)
            ->setAverageLowTemp($averageLowTemp)
            ->setTempUnit($tempUnit);
    }
    /**
     * Get AverageHighTemp value
     * @return int|null
     */
    public function getAverageHighTemp()
    {
        return $this->AverageHighTemp;
    }
    /**
     * Set AverageHighTemp value
     * @param int $averageHighTemp
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Temperature
     */
    public function setAverageHighTemp($averageHighTemp = null)
    {
        // validation for constraint: int
        if (!is_null($averageHighTemp) && !is_numeric($averageHighTemp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($averageHighTemp)), __LINE__);
        }
        $this->AverageHighTemp = $averageHighTemp;
        return $this;
    }
    /**
     * Get AverageLowTemp value
     * @return int|null
     */
    public function getAverageLowTemp()
    {
        return $this->AverageLowTemp;
    }
    /**
     * Set AverageLowTemp value
     * @param int $averageLowTemp
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Temperature
     */
    public function setAverageLowTemp($averageLowTemp = null)
    {
        // validation for constraint: int
        if (!is_null($averageLowTemp) && !is_numeric($averageLowTemp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($averageLowTemp)), __LINE__);
        }
        $this->AverageLowTemp = $averageLowTemp;
        return $this;
    }
    /**
     * Get TempUnit value
     * @return string|null
     */
    public function getTempUnit()
    {
        return $this->TempUnit;
    }
    /**
     * Set TempUnit value
     * @param string $tempUnit
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Temperature
     */
    public function setTempUnit($tempUnit = null)
    {
        // validation for constraint: string
        if (!is_null($tempUnit) && !is_string($tempUnit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tempUnit)), __LINE__);
        }
        $this->TempUnit = $tempUnit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Temperature
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
