<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomRateLiteType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Summary version of the RoomRateType, initially created for the Travel Itinerary Message set.
 * @subpackage Structs
 */
class RoomRateLiteType extends AbstractStructBase
{
    /**
     * The Rates
     * @var mixed
     */
    public $Rates;
    /**
     * The RoomTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Specfic system room type code, ex: A1K, A1Q etc.
     * - use: optional
     * @var string
     */
    public $RoomTypeCode;
    /**
     * The InvBlockCode
     * Meta informations extracted from the WSDL
     * - documentation: Code that identifies an inventory block.
     * - use: optional
     * @var string
     */
    public $InvBlockCode;
    /**
     * The NumberOfUnits
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $NumberOfUnits;
    /**
     * Constructor method for RoomRateLiteType
     * @uses RoomRateLiteType::setRates()
     * @uses RoomRateLiteType::setRoomTypeCode()
     * @uses RoomRateLiteType::setInvBlockCode()
     * @uses RoomRateLiteType::setNumberOfUnits()
     * @param mixed $rates
     * @param string $roomTypeCode
     * @param string $invBlockCode
     * @param int $numberOfUnits
     */
    public function __construct($rates = null, $roomTypeCode = null, $invBlockCode = null, $numberOfUnits = null)
    {
        $this
            ->setRates($rates)
            ->setRoomTypeCode($roomTypeCode)
            ->setInvBlockCode($invBlockCode)
            ->setNumberOfUnits($numberOfUnits);
    }
    /**
     * Get Rates value
     * @return mixed|null
     */
    public function getRates()
    {
        return $this->Rates;
    }
    /**
     * Set Rates value
     * @param mixed $rates
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateLiteType
     */
    public function setRates($rates = null)
    {
        $this->Rates = $rates;
        return $this;
    }
    /**
     * Get RoomTypeCode value
     * @return string|null
     */
    public function getRoomTypeCode()
    {
        return $this->RoomTypeCode;
    }
    /**
     * Set RoomTypeCode value
     * @param string $roomTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateLiteType
     */
    public function setRoomTypeCode($roomTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomTypeCode) && !is_string($roomTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomTypeCode)), __LINE__);
        }
        $this->RoomTypeCode = $roomTypeCode;
        return $this;
    }
    /**
     * Get InvBlockCode value
     * @return string|null
     */
    public function getInvBlockCode()
    {
        return $this->InvBlockCode;
    }
    /**
     * Set InvBlockCode value
     * @param string $invBlockCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateLiteType
     */
    public function setInvBlockCode($invBlockCode = null)
    {
        // validation for constraint: string
        if (!is_null($invBlockCode) && !is_string($invBlockCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invBlockCode)), __LINE__);
        }
        $this->InvBlockCode = $invBlockCode;
        return $this;
    }
    /**
     * Get NumberOfUnits value
     * @return int|null
     */
    public function getNumberOfUnits()
    {
        return $this->NumberOfUnits;
    }
    /**
     * Set NumberOfUnits value
     * @param int $numberOfUnits
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateLiteType
     */
    public function setNumberOfUnits($numberOfUnits = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfUnits) && !is_numeric($numberOfUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfUnits)), __LINE__);
        }
        $this->NumberOfUnits = $numberOfUnits;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateLiteType
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
