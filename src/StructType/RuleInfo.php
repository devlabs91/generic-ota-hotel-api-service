<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information regarding restrictions governing use of the fare.
 * @subpackage Structs
 */
class RuleInfo extends RuleInfoType
{
    /**
     * The TripType
     * Meta informations extracted from the WSDL
     * - documentation: To specify if the trip is one way or roundtrip.
     * - use: optional
     * @var string
     */
    public $TripType;
    /**
     * The MoneySaverInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, the fare rule being requested is for all airline fares for the specified city pair. If false, it is not.
     * - use: optional
     * @var bool
     */
    public $MoneySaverInd;
    /**
     * Constructor method for RuleInfo
     * @uses RuleInfo::setTripType()
     * @uses RuleInfo::setMoneySaverInd()
     * @param string $tripType
     * @param bool $moneySaverInd
     */
    public function __construct($tripType = null, $moneySaverInd = null)
    {
        $this
            ->setTripType($tripType)
            ->setMoneySaverInd($moneySaverInd);
    }
    /**
     * Get TripType value
     * @return string|null
     */
    public function getTripType()
    {
        return $this->TripType;
    }
    /**
     * Set TripType value
     * @param string $tripType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RuleInfo
     */
    public function setTripType($tripType = null)
    {
        // validation for constraint: string
        if (!is_null($tripType) && !is_string($tripType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tripType)), __LINE__);
        }
        $this->TripType = $tripType;
        return $this;
    }
    /**
     * Get MoneySaverInd value
     * @return bool|null
     */
    public function getMoneySaverInd()
    {
        return $this->MoneySaverInd;
    }
    /**
     * Set MoneySaverInd value
     * @param bool $moneySaverInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RuleInfo
     */
    public function setMoneySaverInd($moneySaverInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($moneySaverInd) && !is_bool($moneySaverInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($moneySaverInd)), __LINE__);
        }
        $this->MoneySaverInd = $moneySaverInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RuleInfo
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
