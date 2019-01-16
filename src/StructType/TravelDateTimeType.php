<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelDateTimeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Date and time of trip that allows specifying a time window before and after the given date.
 * @subpackage Structs
 */
class TravelDateTimeType extends AbstractStructBase
{
    /**
     * The DepartureDateTime
     * Meta informations extracted from the WSDL
     * - documentation: The departure date and optionally a time period that can be applied before and/or after the departure date.
     * @var mixed
     */
    public $DepartureDateTime;
    /**
     * The ArrivalDateTime
     * Meta informations extracted from the WSDL
     * - documentation: The arrival date and optionally a time period that can be applied before and/or after the arrival date.
     * @var mixed
     */
    public $ArrivalDateTime;
    /**
     * Constructor method for TravelDateTimeType
     * @uses TravelDateTimeType::setDepartureDateTime()
     * @uses TravelDateTimeType::setArrivalDateTime()
     * @param mixed $departureDateTime
     * @param mixed $arrivalDateTime
     */
    public function __construct($departureDateTime = null, $arrivalDateTime = null)
    {
        $this
            ->setDepartureDateTime($departureDateTime)
            ->setArrivalDateTime($arrivalDateTime);
    }
    /**
     * Get DepartureDateTime value
     * @return mixed|null
     */
    public function getDepartureDateTime()
    {
        return $this->DepartureDateTime;
    }
    /**
     * Set DepartureDateTime value
     * @param mixed $departureDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelDateTimeType
     */
    public function setDepartureDateTime($departureDateTime = null)
    {
        $this->DepartureDateTime = $departureDateTime;
        return $this;
    }
    /**
     * Get ArrivalDateTime value
     * @return mixed|null
     */
    public function getArrivalDateTime()
    {
        return $this->ArrivalDateTime;
    }
    /**
     * Set ArrivalDateTime value
     * @param mixed $arrivalDateTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelDateTimeType
     */
    public function setArrivalDateTime($arrivalDateTime = null)
    {
        $this->ArrivalDateTime = $arrivalDateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelDateTimeType
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
