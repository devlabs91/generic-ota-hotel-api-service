<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Occupancy StructType
 * Meta informations extracted from the WSDL
 * - documentation: The Occupancy details of a meeting room.
 * @subpackage Structs
 */
class Occupancy extends AbstractStructBase
{
    /**
     * The MinRoomCharge
     * Meta informations extracted from the WSDL
     * - documentation: The minimum room charge for this meeting room such as room rental fee.
     * - minOccurs: 0
     * @var mixed
     */
    public $MinRoomCharge;
    /**
     * The MinOccupancy
     * Meta informations extracted from the WSDL
     * - documentation: The minimum number of people in this meeting room.
     * - use: optional
     * @var int
     */
    public $MinOccupancy;
    /**
     * The MaxOccupancy
     * Meta informations extracted from the WSDL
     * - documentation: The maximum number of people in this meeting room.
     * - use: optional
     * @var int
     */
    public $MaxOccupancy;
    /**
     * The StandardOccupancy
     * Meta informations extracted from the WSDL
     * - documentation: The standard number of people in this meeting room.
     * - use: optional
     * @var int
     */
    public $StandardOccupancy;
    /**
     * Constructor method for Occupancy
     * @uses Occupancy::setMinRoomCharge()
     * @uses Occupancy::setMinOccupancy()
     * @uses Occupancy::setMaxOccupancy()
     * @uses Occupancy::setStandardOccupancy()
     * @param mixed $minRoomCharge
     * @param int $minOccupancy
     * @param int $maxOccupancy
     * @param int $standardOccupancy
     */
    public function __construct($minRoomCharge = null, $minOccupancy = null, $maxOccupancy = null, $standardOccupancy = null)
    {
        $this
            ->setMinRoomCharge($minRoomCharge)
            ->setMinOccupancy($minOccupancy)
            ->setMaxOccupancy($maxOccupancy)
            ->setStandardOccupancy($standardOccupancy);
    }
    /**
     * Get MinRoomCharge value
     * @return mixed|null
     */
    public function getMinRoomCharge()
    {
        return $this->MinRoomCharge;
    }
    /**
     * Set MinRoomCharge value
     * @param mixed $minRoomCharge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Occupancy
     */
    public function setMinRoomCharge($minRoomCharge = null)
    {
        $this->MinRoomCharge = $minRoomCharge;
        return $this;
    }
    /**
     * Get MinOccupancy value
     * @return int|null
     */
    public function getMinOccupancy()
    {
        return $this->MinOccupancy;
    }
    /**
     * Set MinOccupancy value
     * @param int $minOccupancy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Occupancy
     */
    public function setMinOccupancy($minOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($minOccupancy) && !is_numeric($minOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minOccupancy)), __LINE__);
        }
        $this->MinOccupancy = $minOccupancy;
        return $this;
    }
    /**
     * Get MaxOccupancy value
     * @return int|null
     */
    public function getMaxOccupancy()
    {
        return $this->MaxOccupancy;
    }
    /**
     * Set MaxOccupancy value
     * @param int $maxOccupancy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Occupancy
     */
    public function setMaxOccupancy($maxOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($maxOccupancy) && !is_numeric($maxOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxOccupancy)), __LINE__);
        }
        $this->MaxOccupancy = $maxOccupancy;
        return $this;
    }
    /**
     * Get StandardOccupancy value
     * @return int|null
     */
    public function getStandardOccupancy()
    {
        return $this->StandardOccupancy;
    }
    /**
     * Set StandardOccupancy value
     * @param int $standardOccupancy
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Occupancy
     */
    public function setStandardOccupancy($standardOccupancy = null)
    {
        // validation for constraint: int
        if (!is_null($standardOccupancy) && !is_numeric($standardOccupancy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($standardOccupancy)), __LINE__);
        }
        $this->StandardOccupancy = $standardOccupancy;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Occupancy
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
