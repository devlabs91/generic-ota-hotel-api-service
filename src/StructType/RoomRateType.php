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
     * - minOccurs: 0
     * @var mixed
     */
    public $Rates;
    /**
     * The RoomRateDescription
     * Meta informations extracted from the WSDL
     * - documentation: The description or name of a room rate.
     * - maxOccurs: 20
     * - minOccurs: 0
     * @var mixed[]
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
     * The Total
     * Meta informations extracted from the WSDL
     * - documentation: The total of all rates for this room rate type.
     * - minOccurs: 0
     * @var mixed
     */
    public $Total;
    /**
     * The Availability
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Availability[]
     */
    public $Availability;
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
     * - documentation: The number of rooms.
     * - use: optional
     * @var int
     */
    public $NumberOfUnits;
    /**
     * The AvailabilityStatus
     * Meta informations extracted from the WSDL
     * - documentation: Used to specify an availability status for the room rate.
     * - use: optional
     * @var string
     */
    public $AvailabilityStatus;
    /**
     * The RoomID
     * Meta informations extracted from the WSDL
     * - documentation: A string value representing the unique identification of a room.
     * - use: optional
     * @var string
     */
    public $RoomID;
    /**
     * Constructor method for RoomRateType
     * @uses RoomRateType::setRates()
     * @uses RoomRateType::setRoomRateDescription()
     * @uses RoomRateType::setFeatures()
     * @uses RoomRateType::setTotal()
     * @uses RoomRateType::setAvailability()
     * @uses RoomRateType::setBookingCode()
     * @uses RoomRateType::setRoomTypeCode()
     * @uses RoomRateType::setInvBlockCode()
     * @uses RoomRateType::setNumberOfUnits()
     * @uses RoomRateType::setAvailabilityStatus()
     * @uses RoomRateType::setRoomID()
     * @param mixed $rates
     * @param mixed[] $roomRateDescription
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Features $features
     * @param mixed $total
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Availability[] $availability
     * @param string $bookingCode
     * @param string $roomTypeCode
     * @param string $invBlockCode
     * @param int $numberOfUnits
     * @param string $availabilityStatus
     * @param string $roomID
     */
    public function __construct($rates = null, array $roomRateDescription = array(), \Devlabs91\GenericOtaHotelApiService\StructType\Features $features = null, $total = null, array $availability = array(), $bookingCode = null, $roomTypeCode = null, $invBlockCode = null, $numberOfUnits = null, $availabilityStatus = null, $roomID = null)
    {
        $this
            ->setRates($rates)
            ->setRoomRateDescription($roomRateDescription)
            ->setFeatures($features)
            ->setTotal($total)
            ->setAvailability($availability)
            ->setBookingCode($bookingCode)
            ->setRoomTypeCode($roomTypeCode)
            ->setInvBlockCode($invBlockCode)
            ->setNumberOfUnits($numberOfUnits)
            ->setAvailabilityStatus($availabilityStatus)
            ->setRoomID($roomID);
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
     * @return mixed[]|null
     */
    public function getRoomRateDescription()
    {
        return $this->RoomRateDescription;
    }
    /**
     * Set RoomRateDescription value
     * @throws \InvalidArgumentException
     * @param mixed[] $roomRateDescription
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateType
     */
    public function setRoomRateDescription(array $roomRateDescription = array())
    {
        foreach ($roomRateDescription as $roomRateTypeRoomRateDescriptionItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RoomRateDescription property can only contain items of anyType, "%s" given', is_object($roomRateTypeRoomRateDescriptionItem) ? get_class($roomRateTypeRoomRateDescriptionItem) : gettype($roomRateTypeRoomRateDescriptionItem)), __LINE__);
            }
        }
        $this->RoomRateDescription = $roomRateDescription;
        return $this;
    }
    /**
     * Add item to RoomRateDescription value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateType
     */
    public function addToRoomRateDescription($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RoomRateDescription property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomRateDescription[] = $item;
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
     * Get Total value
     * @return mixed|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param mixed $total
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateType
     */
    public function setTotal($total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get Availability value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Availability[]|null
     */
    public function getAvailability()
    {
        return $this->Availability;
    }
    /**
     * Set Availability value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Availability[] $availability
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateType
     */
    public function setAvailability(array $availability = array())
    {
        foreach ($availability as $roomRateTypeAvailabilityItem) {
            // validation for constraint: itemType
            if (!$roomRateTypeAvailabilityItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Availability) {
                throw new \InvalidArgumentException(sprintf('The Availability property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Availability, "%s" given', is_object($roomRateTypeAvailabilityItem) ? get_class($roomRateTypeAvailabilityItem) : gettype($roomRateTypeAvailabilityItem)), __LINE__);
            }
        }
        $this->Availability = $availability;
        return $this;
    }
    /**
     * Add item to Availability value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Availability $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateType
     */
    public function addToAvailability(\Devlabs91\GenericOtaHotelApiService\StructType\Availability $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Availability) {
            throw new \InvalidArgumentException(sprintf('The Availability property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Availability, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Availability[] = $item;
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
     * @return int|null
     */
    public function getNumberOfUnits()
    {
        return $this->NumberOfUnits;
    }
    /**
     * Set NumberOfUnits value
     * @param int $numberOfUnits
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateType
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
     * Get AvailabilityStatus value
     * @return string|null
     */
    public function getAvailabilityStatus()
    {
        return $this->AvailabilityStatus;
    }
    /**
     * Set AvailabilityStatus value
     * @param string $availabilityStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateType
     */
    public function setAvailabilityStatus($availabilityStatus = null)
    {
        // validation for constraint: string
        if (!is_null($availabilityStatus) && !is_string($availabilityStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($availabilityStatus)), __LINE__);
        }
        $this->AvailabilityStatus = $availabilityStatus;
        return $this;
    }
    /**
     * Get RoomID value
     * @return string|null
     */
    public function getRoomID()
    {
        return $this->RoomID;
    }
    /**
     * Set RoomID value
     * @param string $roomID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRateType
     */
    public function setRoomID($roomID = null)
    {
        // validation for constraint: string
        if (!is_null($roomID) && !is_string($roomID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomID)), __LINE__);
        }
        $this->RoomID = $roomID;
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
