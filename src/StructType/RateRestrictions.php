<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateRestrictions StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information on any restrictions that may be associated with this rate. | Information on any restrictions that may be associated with this rate.
 * @subpackage Structs
 */
class RateRestrictions extends AbstractStructBase
{
    /**
     * The ArriveByFlight
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: Indicates if this rate is only available to those customers who are flying to the vehicle rental location. | Indicates if this rate is only available to those customers who are flying to the vehicle rental location.
     * - use: optional
     * @var bool
     */
    public $ArriveByFlight;
    /**
     * Constructor method for RateRestrictions
     * @uses RateRestrictions::setArriveByFlight()
     * @param bool $arriveByFlight
     */
    public function __construct($arriveByFlight = false)
    {
        $this
            ->setArriveByFlight($arriveByFlight);
    }
    /**
     * Get ArriveByFlight value
     * @return bool|null
     */
    public function getArriveByFlight()
    {
        return $this->ArriveByFlight;
    }
    /**
     * Set ArriveByFlight value
     * @param bool $arriveByFlight
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
     */
    public function setArriveByFlight($arriveByFlight = false)
    {
        // validation for constraint: boolean
        if (!is_null($arriveByFlight) && !is_bool($arriveByFlight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($arriveByFlight)), __LINE__);
        }
        $this->ArriveByFlight = $arriveByFlight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateRestrictions
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
