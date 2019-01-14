<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialServiceRequest StructType
 * Meta informations extracted from the WSDL
 * - documentation: Special Service Requests (SSR) for this booking
 * @subpackage Structs
 */
class SpecialServiceRequest extends SpecialServiceRequestType
{
    /**
     * The TravelerRefNumberRPHList
     * Meta informations extracted from the WSDL
     * - documentation: One or more travelers to whom this request applies
     * - use: optional
     * @var string
     */
    public $TravelerRefNumberRPHList;
    /**
     * The FlightRefNumberRPHList
     * Meta informations extracted from the WSDL
     * - documentation: One or more flights to whom this request applies
     * - use: optional
     * @var string
     */
    public $FlightRefNumberRPHList;
    /**
     * Constructor method for SpecialServiceRequest
     * @uses SpecialServiceRequest::setTravelerRefNumberRPHList()
     * @uses SpecialServiceRequest::setFlightRefNumberRPHList()
     * @param string $travelerRefNumberRPHList
     * @param string $flightRefNumberRPHList
     */
    public function __construct($travelerRefNumberRPHList = null, $flightRefNumberRPHList = null)
    {
        $this
            ->setTravelerRefNumberRPHList($travelerRefNumberRPHList)
            ->setFlightRefNumberRPHList($flightRefNumberRPHList);
    }
    /**
     * Get TravelerRefNumberRPHList value
     * @return string|null
     */
    public function getTravelerRefNumberRPHList()
    {
        return $this->TravelerRefNumberRPHList;
    }
    /**
     * Set TravelerRefNumberRPHList value
     * @param string $travelerRefNumberRPHList
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequest
     */
    public function setTravelerRefNumberRPHList($travelerRefNumberRPHList = null)
    {
        // validation for constraint: string
        if (!is_null($travelerRefNumberRPHList) && !is_string($travelerRefNumberRPHList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelerRefNumberRPHList)), __LINE__);
        }
        $this->TravelerRefNumberRPHList = $travelerRefNumberRPHList;
        return $this;
    }
    /**
     * Get FlightRefNumberRPHList value
     * @return string|null
     */
    public function getFlightRefNumberRPHList()
    {
        return $this->FlightRefNumberRPHList;
    }
    /**
     * Set FlightRefNumberRPHList value
     * @param string $flightRefNumberRPHList
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequest
     */
    public function setFlightRefNumberRPHList($flightRefNumberRPHList = null)
    {
        // validation for constraint: string
        if (!is_null($flightRefNumberRPHList) && !is_string($flightRefNumberRPHList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightRefNumberRPHList)), __LINE__);
        }
        $this->FlightRefNumberRPHList = $flightRefNumberRPHList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialServiceRequest
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
