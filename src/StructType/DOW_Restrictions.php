<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DOW_Restrictions StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Day Of Week restrictions.
 * @subpackage Structs
 */
class DOW_Restrictions extends AbstractStructBase
{
    /**
     * The AvailableDaysOfWeek
     * Meta informations extracted from the WSDL
     * - documentation: Days of week on which this room/rate combination is available.
     * - minOccurs: 0
     * @var mixed
     */
    public $AvailableDaysOfWeek;
    /**
     * The ArrivalDaysOfWeek
     * Meta informations extracted from the WSDL
     * - documentation: Days of Week on which the guest can arrive.
     * - minOccurs: 0
     * @var mixed
     */
    public $ArrivalDaysOfWeek;
    /**
     * The DepartureDaysOfWeek
     * Meta informations extracted from the WSDL
     * - documentation: Days of Week on which the guest can leave.
     * - minOccurs: 0
     * @var mixed
     */
    public $DepartureDaysOfWeek;
    /**
     * The RequiredDaysOfWeek
     * Meta informations extracted from the WSDL
     * - documentation: Days of Week on which the guest has to stay at the hotel.
     * - minOccurs: 0
     * @var mixed
     */
    public $RequiredDaysOfWeek;
    /**
     * Constructor method for DOW_Restrictions
     * @uses DOW_Restrictions::setAvailableDaysOfWeek()
     * @uses DOW_Restrictions::setArrivalDaysOfWeek()
     * @uses DOW_Restrictions::setDepartureDaysOfWeek()
     * @uses DOW_Restrictions::setRequiredDaysOfWeek()
     * @param mixed $availableDaysOfWeek
     * @param mixed $arrivalDaysOfWeek
     * @param mixed $departureDaysOfWeek
     * @param mixed $requiredDaysOfWeek
     */
    public function __construct($availableDaysOfWeek = null, $arrivalDaysOfWeek = null, $departureDaysOfWeek = null, $requiredDaysOfWeek = null)
    {
        $this
            ->setAvailableDaysOfWeek($availableDaysOfWeek)
            ->setArrivalDaysOfWeek($arrivalDaysOfWeek)
            ->setDepartureDaysOfWeek($departureDaysOfWeek)
            ->setRequiredDaysOfWeek($requiredDaysOfWeek);
    }
    /**
     * Get AvailableDaysOfWeek value
     * @return mixed|null
     */
    public function getAvailableDaysOfWeek()
    {
        return $this->AvailableDaysOfWeek;
    }
    /**
     * Set AvailableDaysOfWeek value
     * @param mixed $availableDaysOfWeek
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DOW_Restrictions
     */
    public function setAvailableDaysOfWeek($availableDaysOfWeek = null)
    {
        $this->AvailableDaysOfWeek = $availableDaysOfWeek;
        return $this;
    }
    /**
     * Get ArrivalDaysOfWeek value
     * @return mixed|null
     */
    public function getArrivalDaysOfWeek()
    {
        return $this->ArrivalDaysOfWeek;
    }
    /**
     * Set ArrivalDaysOfWeek value
     * @param mixed $arrivalDaysOfWeek
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DOW_Restrictions
     */
    public function setArrivalDaysOfWeek($arrivalDaysOfWeek = null)
    {
        $this->ArrivalDaysOfWeek = $arrivalDaysOfWeek;
        return $this;
    }
    /**
     * Get DepartureDaysOfWeek value
     * @return mixed|null
     */
    public function getDepartureDaysOfWeek()
    {
        return $this->DepartureDaysOfWeek;
    }
    /**
     * Set DepartureDaysOfWeek value
     * @param mixed $departureDaysOfWeek
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DOW_Restrictions
     */
    public function setDepartureDaysOfWeek($departureDaysOfWeek = null)
    {
        $this->DepartureDaysOfWeek = $departureDaysOfWeek;
        return $this;
    }
    /**
     * Get RequiredDaysOfWeek value
     * @return mixed|null
     */
    public function getRequiredDaysOfWeek()
    {
        return $this->RequiredDaysOfWeek;
    }
    /**
     * Set RequiredDaysOfWeek value
     * @param mixed $requiredDaysOfWeek
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DOW_Restrictions
     */
    public function setRequiredDaysOfWeek($requiredDaysOfWeek = null)
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DOW_Restrictions
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
