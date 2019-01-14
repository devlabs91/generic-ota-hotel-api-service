<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomRateType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
 * @subpackage Structs
 */
class RoomRateType extends AbstractStructBase
{
    /**
     * The Rates
     * Meta informations extracted from the WSDL
     * - documentation: Individual rate amount. This rate is valid for a range of number of occupants and an occupant type.
     * @var mixed
     */
    public $Rates;
    /**
     * The RoomRateDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $RoomRateDescription;
    /**
     * The Features
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Features
     */
    public $Features;
    /**
     * The BookingCode
     * Meta informations extracted from the WSDL
     * - documentation: This is used to indicate the item booked and is primarily used to exchange information with GDSs.
     * - use: optional
     * @var string
     */
    public $BookingCode;
    /**
     * The RoomTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Specfic system room type code, ex: A1K, A1Q etc.
     * @var string
     */
    public $RoomTypeCode;
    /**
     * The InvBlockCode
     * Meta informations extracted from the WSDL
     * - documentation: Code that identifies an inventory block.
     * @var string
     */
    public $InvBlockCode;
    /**
     * The NumberOfUnits
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $NumberOfUnits;
    /**
     * Constructor method for RoomRateType
     * @uses RoomRateType::setRates()
     * @uses RoomRateType::setRoomRateDescription()
     * @uses RoomRateType::setFeatures()
     * @uses RoomRateType::setBookingCode()
     * @uses RoomRateType::setRoomTypeCode()
     * @uses RoomRateType::setInvBlockCode()
     * @uses RoomRateType::setNumberOfUnits()
     * @param mixed $rates
     * @param mixed $roomRateDescription
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Features $features
     * @param string $bookingCode
     * @param string $roomTypeCode
     * @param string $invBlockCode
     * @param string $numberOfUnits
     */
    public function __construct($rates = null, $roomRateDescription = null, \Devlabs91\GenericOtaHotelApiService\StructType\Features $features = null, $bookingCode = null, $roomTypeCode = null, $invBlockCode = null, $numberOfUnits = null)
    {
        $this
            ->setRates($rates)
            ->setRoomRateDescription($roomRateDescription)
            ->setFeatures($features)
            ->setBookingCode($bookingCode)
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateType
     */
    public function setRates($rates = null)
    {
        $this->Rates = $rates;
        return $this;
    }
    /**
     * Get RoomRateDescription value
     * @return mixed|null
     */
    public function getRoomRateDescription()
    {
        return $this->RoomRateDescription;
    }
    /**
     * Set RoomRateDescription value
     * @param mixed $roomRateDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateType
     */
    public function setRoomRateDescription($roomRateDescription = null)
    {
        $this->RoomRateDescription = $roomRateDescription;
        return $this;
    }
    /**
     * Get Features value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Features|null
     */
    public function getFeatures()
    {
        return $this->Features;
    }
    /**
     * Set Features value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Features $features
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateType
     */
    public function setFeatures(\Devlabs91\GenericOtaHotelApiService\StructType\Features $features = null)
    {
        $this->Features = $features;
        return $this;
    }
    /**
     * Get BookingCode value
     * @return string|null
     */
    public function getBookingCode()
    {
        return $this->BookingCode;
    }
    /**
     * Set BookingCode value
     * @param string $bookingCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateType
     */
    public function setBookingCode($bookingCode = null)
    {
        // validation for constraint: string
        if (!is_null($bookingCode) && !is_string($bookingCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bookingCode)), __LINE__);
        }
        $this->BookingCode = $bookingCode;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateType
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
     * @return string|null
     */
    public function getNumberOfUnits()
    {
        return $this->NumberOfUnits;
    }
    /**
     * Set NumberOfUnits value
     * @param string $numberOfUnits
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateType
     */
    public function setNumberOfUnits($numberOfUnits = null)
    {
        // validation for constraint: string
        if (!is_null($numberOfUnits) && !is_string($numberOfUnits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberOfUnits)), __LINE__);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateType
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
