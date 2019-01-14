<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransportInfo StructType
 * @subpackage Structs
 */
class TransportInfo extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Method of conveyance of this guest. Values: Air, Rail, Bus, Boat, Private Auto, Other.
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - documentation: Identifier of this transportation method (e.g., flight number).
     * - use: optional
     * @var string
     */
    public $ID;
    /**
     * The LocationCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifier of the arrival or delivery point (e.g., airport code)
     * - use: optional
     * @var string
     */
    public $LocationCode;
    /**
     * The Time
     * Meta informations extracted from the WSDL
     * - documentation: Time of transportation. Local time of the location indicated by the LocationCode.
     * - use: optional
     * @var string
     */
    public $Time;
    /**
     * Constructor method for TransportInfo
     * @uses TransportInfo::setType()
     * @uses TransportInfo::setID()
     * @uses TransportInfo::setLocationCode()
     * @uses TransportInfo::setTime()
     * @param string $type
     * @param string $iD
     * @param string $locationCode
     * @param string $time
     */
    public function __construct($type = null, $iD = null, $locationCode = null, $time = null)
    {
        $this
            ->setType($type)
            ->setID($iD)
            ->setLocationCode($locationCode)
            ->setTime($time);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransportInfo
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
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransportInfo
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get LocationCode value
     * @return string|null
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }
    /**
     * Set LocationCode value
     * @param string $locationCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransportInfo
     */
    public function setLocationCode($locationCode = null)
    {
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationCode)), __LINE__);
        }
        $this->LocationCode = $locationCode;
        return $this;
    }
    /**
     * Get Time value
     * @return string|null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransportInfo
     */
    public function setTime($time = null)
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($time)), __LINE__);
        }
        $this->Time = $time;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransportInfo
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
