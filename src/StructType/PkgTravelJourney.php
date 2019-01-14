<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PkgTravelJourney StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides details of a return travel journey.
 * @subpackage Structs
 */
class PkgTravelJourney extends AbstractStructBase
{
    /**
     * The OriginAirportID
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $OriginAirportID;
    /**
     * The DestinationAirportID
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $DestinationAirportID;
    /**
     * The OutwardDateTime
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $OutwardDateTime;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: The type of travel component - e.g. Air, Rail, Sea etc.
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The ReturnDateTime
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ReturnDateTime;
    /**
     * The TravelCode
     * Meta informations extracted from the WSDL
     * - documentation: The code allocated to a travel component by the supplier.
     * - use: optional
     * @var string
     */
    public $TravelCode;
    /**
     * Constructor method for PkgTravelJourney
     * @uses PkgTravelJourney::setOriginAirportID()
     * @uses PkgTravelJourney::setDestinationAirportID()
     * @uses PkgTravelJourney::setOutwardDateTime()
     * @uses PkgTravelJourney::setType()
     * @uses PkgTravelJourney::setReturnDateTime()
     * @uses PkgTravelJourney::setTravelCode()
     * @param string $originAirportID
     * @param string $destinationAirportID
     * @param string $outwardDateTime
     * @param string $type
     * @param string $returnDateTime
     * @param string $travelCode
     */
    public function __construct($originAirportID = null, $destinationAirportID = null, $outwardDateTime = null, $type = null, $returnDateTime = null, $travelCode = null)
    {
        $this
            ->setOriginAirportID($originAirportID)
            ->setDestinationAirportID($destinationAirportID)
            ->setOutwardDateTime($outwardDateTime)
            ->setType($type)
            ->setReturnDateTime($returnDateTime)
            ->setTravelCode($travelCode);
    }
    /**
     * Get OriginAirportID value
     * @return string
     */
    public function getOriginAirportID()
    {
        return $this->OriginAirportID;
    }
    /**
     * Set OriginAirportID value
     * @param string $originAirportID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgTravelJourney
     */
    public function setOriginAirportID($originAirportID = null)
    {
        // validation for constraint: string
        if (!is_null($originAirportID) && !is_string($originAirportID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($originAirportID)), __LINE__);
        }
        $this->OriginAirportID = $originAirportID;
        return $this;
    }
    /**
     * Get DestinationAirportID value
     * @return string
     */
    public function getDestinationAirportID()
    {
        return $this->DestinationAirportID;
    }
    /**
     * Set DestinationAirportID value
     * @param string $destinationAirportID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgTravelJourney
     */
    public function setDestinationAirportID($destinationAirportID = null)
    {
        // validation for constraint: string
        if (!is_null($destinationAirportID) && !is_string($destinationAirportID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($destinationAirportID)), __LINE__);
        }
        $this->DestinationAirportID = $destinationAirportID;
        return $this;
    }
    /**
     * Get OutwardDateTime value
     * @return string
     */
    public function getOutwardDateTime()
    {
        return $this->OutwardDateTime;
    }
    /**
     * Set OutwardDateTime value
     * @param string $outwardDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgTravelJourney
     */
    public function setOutwardDateTime($outwardDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($outwardDateTime) && !is_string($outwardDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($outwardDateTime)), __LINE__);
        }
        $this->OutwardDateTime = $outwardDateTime;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgTravelJourney
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get ReturnDateTime value
     * @return string|null
     */
    public function getReturnDateTime()
    {
        return $this->ReturnDateTime;
    }
    /**
     * Set ReturnDateTime value
     * @param string $returnDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgTravelJourney
     */
    public function setReturnDateTime($returnDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($returnDateTime) && !is_string($returnDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($returnDateTime)), __LINE__);
        }
        $this->ReturnDateTime = $returnDateTime;
        return $this;
    }
    /**
     * Get TravelCode value
     * @return string|null
     */
    public function getTravelCode()
    {
        return $this->TravelCode;
    }
    /**
     * Set TravelCode value
     * @param string $travelCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgTravelJourney
     */
    public function setTravelCode($travelCode = null)
    {
        // validation for constraint: string
        if (!is_null($travelCode) && !is_string($travelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelCode)), __LINE__);
        }
        $this->TravelCode = $travelCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgTravelJourney
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
