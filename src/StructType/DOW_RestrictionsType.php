<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DOW_RestrictionsType StructType
 * @subpackage Structs
 */
class DOW_RestrictionsType extends AbstractStructBase
{
    /**
     * The AvailableDaysOfWeek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AvailableDaysOfWeek
     */
    public $AvailableDaysOfWeek;
    /**
     * The ArrivalDaysOfWeek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalDaysOfWeek
     */
    public $ArrivalDaysOfWeek;
    /**
     * The DepartureDaysOfWeek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\DepartureDaysOfWeek
     */
    public $DepartureDaysOfWeek;
    /**
     * The RequiredDaysOfWeek
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RequiredDaysOfWeek
     */
    public $RequiredDaysOfWeek;
    /**
     * Constructor method for DOW_RestrictionsType
     * @uses DOW_RestrictionsType::setAvailableDaysOfWeek()
     * @uses DOW_RestrictionsType::setArrivalDaysOfWeek()
     * @uses DOW_RestrictionsType::setDepartureDaysOfWeek()
     * @uses DOW_RestrictionsType::setRequiredDaysOfWeek()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailableDaysOfWeek $availableDaysOfWeek
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalDaysOfWeek $arrivalDaysOfWeek
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DepartureDaysOfWeek $departureDaysOfWeek
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RequiredDaysOfWeek $requiredDaysOfWeek
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\AvailableDaysOfWeek $availableDaysOfWeek = null, \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalDaysOfWeek $arrivalDaysOfWeek = null, \Devlabs91\GenericOtaHotelApiService\StructType\DepartureDaysOfWeek $departureDaysOfWeek = null, \Devlabs91\GenericOtaHotelApiService\StructType\RequiredDaysOfWeek $requiredDaysOfWeek = null)
    {
        $this
            ->setAvailableDaysOfWeek($availableDaysOfWeek)
            ->setArrivalDaysOfWeek($arrivalDaysOfWeek)
            ->setDepartureDaysOfWeek($departureDaysOfWeek)
            ->setRequiredDaysOfWeek($requiredDaysOfWeek);
    }
    /**
     * Get AvailableDaysOfWeek value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableDaysOfWeek|null
     */
    public function getAvailableDaysOfWeek()
    {
        return $this->AvailableDaysOfWeek;
    }
    /**
     * Set AvailableDaysOfWeek value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailableDaysOfWeek $availableDaysOfWeek
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DOW_RestrictionsType
     */
    public function setAvailableDaysOfWeek(\Devlabs91\GenericOtaHotelApiService\StructType\AvailableDaysOfWeek $availableDaysOfWeek = null)
    {
        $this->AvailableDaysOfWeek = $availableDaysOfWeek;
        return $this;
    }
    /**
     * Get ArrivalDaysOfWeek value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalDaysOfWeek|null
     */
    public function getArrivalDaysOfWeek()
    {
        return $this->ArrivalDaysOfWeek;
    }
    /**
     * Set ArrivalDaysOfWeek value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ArrivalDaysOfWeek $arrivalDaysOfWeek
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DOW_RestrictionsType
     */
    public function setArrivalDaysOfWeek(\Devlabs91\GenericOtaHotelApiService\StructType\ArrivalDaysOfWeek $arrivalDaysOfWeek = null)
    {
        $this->ArrivalDaysOfWeek = $arrivalDaysOfWeek;
        return $this;
    }
    /**
     * Get DepartureDaysOfWeek value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DepartureDaysOfWeek|null
     */
    public function getDepartureDaysOfWeek()
    {
        return $this->DepartureDaysOfWeek;
    }
    /**
     * Set DepartureDaysOfWeek value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DepartureDaysOfWeek $departureDaysOfWeek
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DOW_RestrictionsType
     */
    public function setDepartureDaysOfWeek(\Devlabs91\GenericOtaHotelApiService\StructType\DepartureDaysOfWeek $departureDaysOfWeek = null)
    {
        $this->DepartureDaysOfWeek = $departureDaysOfWeek;
        return $this;
    }
    /**
     * Get RequiredDaysOfWeek value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RequiredDaysOfWeek|null
     */
    public function getRequiredDaysOfWeek()
    {
        return $this->RequiredDaysOfWeek;
    }
    /**
     * Set RequiredDaysOfWeek value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RequiredDaysOfWeek $requiredDaysOfWeek
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DOW_RestrictionsType
     */
    public function setRequiredDaysOfWeek(\Devlabs91\GenericOtaHotelApiService\StructType\RequiredDaysOfWeek $requiredDaysOfWeek = null)
    {
        $this->RequiredDaysOfWeek = $requiredDaysOfWeek;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DOW_RestrictionsType
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
