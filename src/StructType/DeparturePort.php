<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeparturePort StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains cruise departure port information. Departure port defines the start place of the cruise sailing.
 * @subpackage Structs
 */
class DeparturePort extends LocationType
{
    /**
     * The EmbarkationTime
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $EmbarkationTime;
    /**
     * Constructor method for DeparturePort
     * @uses DeparturePort::setEmbarkationTime()
     * @param string $embarkationTime
     */
    public function __construct($embarkationTime = null)
    {
        $this
            ->setEmbarkationTime($embarkationTime);
    }
    /**
     * Get EmbarkationTime value
     * @return string|null
     */
    public function getEmbarkationTime()
    {
        return $this->EmbarkationTime;
    }
    /**
     * Set EmbarkationTime value
     * @param string $embarkationTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DeparturePort
     */
    public function setEmbarkationTime($embarkationTime = null)
    {
        // validation for constraint: string
        if (!is_null($embarkationTime) && !is_string($embarkationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($embarkationTime)), __LINE__);
        }
        $this->EmbarkationTime = $embarkationTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DeparturePort
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
