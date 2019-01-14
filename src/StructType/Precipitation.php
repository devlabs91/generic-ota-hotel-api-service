<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Precipitation StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides average precipitation and the unit in which it is measured for a Period.
 * @subpackage Structs
 */
class Precipitation extends AbstractStructBase
{
    /**
     * The AveragePrecipitation
     * Meta informations extracted from the WSDL
     * - documentation: Defines the average precipitation for the time as designated in Period and is qualified by the UnitOfMeasure.
     * - use: optional
     * @var float
     */
    public $AveragePrecipitation;
    /**
     * The UnitOfMeasure
     * Meta informations extracted from the WSDL
     * - documentation: This is the unit of measure as it applies to AveragePercipitation (e.g.inches or centimeters).
     * - use: optional
     * @var string
     */
    public $UnitOfMeasure;
    /**
     * Constructor method for Precipitation
     * @uses Precipitation::setAveragePrecipitation()
     * @uses Precipitation::setUnitOfMeasure()
     * @param float $averagePrecipitation
     * @param string $unitOfMeasure
     */
    public function __construct($averagePrecipitation = null, $unitOfMeasure = null)
    {
        $this
            ->setAveragePrecipitation($averagePrecipitation)
            ->setUnitOfMeasure($unitOfMeasure);
    }
    /**
     * Get AveragePrecipitation value
     * @return float|null
     */
    public function getAveragePrecipitation()
    {
        return $this->AveragePrecipitation;
    }
    /**
     * Set AveragePrecipitation value
     * @param float $averagePrecipitation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Precipitation
     */
    public function setAveragePrecipitation($averagePrecipitation = null)
    {
        $this->AveragePrecipitation = $averagePrecipitation;
        return $this;
    }
    /**
     * Get UnitOfMeasure value
     * @return string|null
     */
    public function getUnitOfMeasure()
    {
        return $this->UnitOfMeasure;
    }
    /**
     * Set UnitOfMeasure value
     * @param string $unitOfMeasure
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Precipitation
     */
    public function setUnitOfMeasure($unitOfMeasure = null)
    {
        // validation for constraint: string
        if (!is_null($unitOfMeasure) && !is_string($unitOfMeasure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($unitOfMeasure)), __LINE__);
        }
        $this->UnitOfMeasure = $unitOfMeasure;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Precipitation
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
