<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingReferenceID StructType
 * Meta informations extracted from the WSDL
 * - documentation: Optional field available for use by trading partners as determined by their needs. | The booking or confirmation number for which charges are being authorized.
 * @subpackage Structs
 */
class BookingReferenceID extends UniqueID_Type
{
    /**
     * The FlightRefNumberRPHList
     * Meta informations extracted from the WSDL
     * - documentation: This provides a list of flight segment RPHs associated with a specific Booking Reference ID.
     * - use: optional
     * @var string
     */
    public $FlightRefNumberRPHList;
    /**
     * The IgnoreReservationInd
     * Meta informations extracted from the WSDL
     * - documentation: When true, the PNR should not be updated with the authorization information returned.
     * - use: optional
     * @var bool
     */
    public $IgnoreReservationInd;
    /**
     * Constructor method for BookingReferenceID
     * @uses BookingReferenceID::setFlightRefNumberRPHList()
     * @uses BookingReferenceID::setIgnoreReservationInd()
     * @param string $flightRefNumberRPHList
     * @param bool $ignoreReservationInd
     */
    public function __construct($flightRefNumberRPHList = null, $ignoreReservationInd = null)
    {
        $this
            ->setFlightRefNumberRPHList($flightRefNumberRPHList)
            ->setIgnoreReservationInd($ignoreReservationInd);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingReferenceID
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
     * Get IgnoreReservationInd value
     * @return bool|null
     */
    public function getIgnoreReservationInd()
    {
        return $this->IgnoreReservationInd;
    }
    /**
     * Set IgnoreReservationInd value
     * @param bool $ignoreReservationInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingReferenceID
     */
    public function setIgnoreReservationInd($ignoreReservationInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($ignoreReservationInd) && !is_bool($ignoreReservationInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ignoreReservationInd)), __LINE__);
        }
        $this->IgnoreReservationInd = $ignoreReservationInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingReferenceID
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
