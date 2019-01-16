<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OriginalOriginDestination StructType
 * Meta informations extracted from the WSDL
 * - documentation: The original origin and destination for exchanged ticket/documents.
 * @subpackage Structs
 */
class OriginalOriginDestination extends AbstractStructBase
{
    /**
     * The OriginCityCode
     * Meta informations extracted from the WSDL
     * - documentation: Origin city code.
     * - use: optional
     * @var string
     */
    public $OriginCityCode;
    /**
     * The DestinationCityCode
     * Meta informations extracted from the WSDL
     * - documentation: Destination city code.
     * - use: optional
     * @var string
     */
    public $DestinationCityCode;
    /**
     * Constructor method for OriginalOriginDestination
     * @uses OriginalOriginDestination::setOriginCityCode()
     * @uses OriginalOriginDestination::setDestinationCityCode()
     * @param string $originCityCode
     * @param string $destinationCityCode
     */
    public function __construct($originCityCode = null, $destinationCityCode = null)
    {
        $this
            ->setOriginCityCode($originCityCode)
            ->setDestinationCityCode($destinationCityCode);
    }
    /**
     * Get OriginCityCode value
     * @return string|null
     */
    public function getOriginCityCode()
    {
        return $this->OriginCityCode;
    }
    /**
     * Set OriginCityCode value
     * @param string $originCityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginalOriginDestination
     */
    public function setOriginCityCode($originCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($originCityCode) && !is_string($originCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originCityCode)), __LINE__);
        }
        $this->OriginCityCode = $originCityCode;
        return $this;
    }
    /**
     * Get DestinationCityCode value
     * @return string|null
     */
    public function getDestinationCityCode()
    {
        return $this->DestinationCityCode;
    }
    /**
     * Set DestinationCityCode value
     * @param string $destinationCityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginalOriginDestination
     */
    public function setDestinationCityCode($destinationCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($destinationCityCode) && !is_string($destinationCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationCityCode)), __LINE__);
        }
        $this->DestinationCityCode = $destinationCityCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginalOriginDestination
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
