<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConnectionLocation StructType
 * Meta informations extracted from the WSDL
 * - documentation: The preference level for the connection point - only, unacceptable, preferred.
 * @subpackage Structs
 */
class ConnectionLocation extends LocationType
{
    /**
     * The Inclusive
     * Meta informations extracted from the WSDL
     * - default: true
     * - use: optional
     * @var bool
     */
    public $Inclusive;
    /**
     * The MinChangeTime
     * Meta informations extracted from the WSDL
     * - documentation: Number of minutes between connections.
     * - use: optional
     * @var int
     */
    public $MinChangeTime;
    /**
     * The ConnectionInfo
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ConnectionInfo;
    /**
     * Constructor method for ConnectionLocation
     * @uses ConnectionLocation::setInclusive()
     * @uses ConnectionLocation::setMinChangeTime()
     * @uses ConnectionLocation::setConnectionInfo()
     * @param bool $inclusive
     * @param int $minChangeTime
     * @param string $connectionInfo
     */
    public function __construct($inclusive = true, $minChangeTime = null, $connectionInfo = null)
    {
        $this
            ->setInclusive($inclusive)
            ->setMinChangeTime($minChangeTime)
            ->setConnectionInfo($connectionInfo);
    }
    /**
     * Get Inclusive value
     * @return bool|null
     */
    public function getInclusive()
    {
        return $this->Inclusive;
    }
    /**
     * Set Inclusive value
     * @param bool $inclusive
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ConnectionLocation
     */
    public function setInclusive($inclusive = true)
    {
        // validation for constraint: boolean
        if (!is_null($inclusive) && !is_bool($inclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($inclusive)), __LINE__);
        }
        $this->Inclusive = $inclusive;
        return $this;
    }
    /**
     * Get MinChangeTime value
     * @return int|null
     */
    public function getMinChangeTime()
    {
        return $this->MinChangeTime;
    }
    /**
     * Set MinChangeTime value
     * @param int $minChangeTime
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ConnectionLocation
     */
    public function setMinChangeTime($minChangeTime = null)
    {
        // validation for constraint: int
        if (!is_null($minChangeTime) && !is_numeric($minChangeTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minChangeTime)), __LINE__);
        }
        $this->MinChangeTime = $minChangeTime;
        return $this;
    }
    /**
     * Get ConnectionInfo value
     * @return string|null
     */
    public function getConnectionInfo()
    {
        return $this->ConnectionInfo;
    }
    /**
     * Set ConnectionInfo value
     * @param string $connectionInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ConnectionLocation
     */
    public function setConnectionInfo($connectionInfo = null)
    {
        // validation for constraint: string
        if (!is_null($connectionInfo) && !is_string($connectionInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($connectionInfo)), __LINE__);
        }
        $this->ConnectionInfo = $connectionInfo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ConnectionLocation
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
