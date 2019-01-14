<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PkgTravelSegment StructType
 * Meta informations extracted from the WSDL
 * - documentation: A full definition of a travel segment including supplemental price and facilities.
 * @subpackage Structs
 */
class PkgTravelSegment extends AbstractStructBase
{
    /**
     * The AirSegment
     * @var mixed
     */
    public $AirSegment;
    /**
     * Constructor method for PkgTravelSegment
     * @uses PkgTravelSegment::setAirSegment()
     * @param mixed $airSegment
     */
    public function __construct($airSegment = null)
    {
        $this
            ->setAirSegment($airSegment);
    }
    /**
     * Get AirSegment value
     * @return mixed|null
     */
    public function getAirSegment()
    {
        return $this->AirSegment;
    }
    /**
     * Set AirSegment value
     * @param mixed $airSegment
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgTravelSegment
     */
    public function setAirSegment($airSegment = null)
    {
        $this->AirSegment = $airSegment;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgTravelSegment
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
