<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StayInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The StayInfo class contains the guest revenue and stay data to be sent to the central server.
 * @subpackage Structs
 */
class StayInfoType extends AbstractStructBase
{
    /**
     * The LoyaltyPointsAccruals
     * Meta informations extracted from the WSDL
     * - documentation: A collection of loyalty points accruals.
     * - minOccurs: 0
     * @var mixed
     */
    public $LoyaltyPointsAccruals;
    /**
     * The RevenueCategories
     * Meta informations extracted from the WSDL
     * - documentation: A collection of RevenueCategory classes that detail the categories of revenue data associated with the StayInfo report.
     * - minOccurs: 0
     * @var mixed
     */
    public $RevenueCategories;
    /**
     * The ReservationID
     * Meta informations extracted from the WSDL
     * - documentation: The confirmation number of the reservation associated with the stay.
     * - minOccurs: 0
     * @var mixed
     */
    public $ReservationID;
    /**
     * The HotelReservation
     * Meta informations extracted from the WSDL
     * - documentation: Contains the reservation details associated with the stay information.
     * - minOccurs: 0
     * @var mixed
     */
    public $HotelReservation;
    /**
     * The SequenceNumber
     * Meta informations extracted from the WSDL
     * - documentation: Used to sequence the guest revenue blocks of data used to verify transmission.
     * - use: optional
     * @var int
     */
    public $SequenceNumber;
    /**
     * The RoomStayRPH
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $RoomStayRPH;
    /**
     * Constructor method for StayInfoType
     * @uses StayInfoType::setLoyaltyPointsAccruals()
     * @uses StayInfoType::setRevenueCategories()
     * @uses StayInfoType::setReservationID()
     * @uses StayInfoType::setHotelReservation()
     * @uses StayInfoType::setSequenceNumber()
     * @uses StayInfoType::setRoomStayRPH()
     * @param mixed $loyaltyPointsAccruals
     * @param mixed $revenueCategories
     * @param mixed $reservationID
     * @param mixed $hotelReservation
     * @param int $sequenceNumber
     * @param int $roomStayRPH
     */
    public function __construct($loyaltyPointsAccruals = null, $revenueCategories = null, $reservationID = null, $hotelReservation = null, $sequenceNumber = null, $roomStayRPH = null)
    {
        $this
            ->setLoyaltyPointsAccruals($loyaltyPointsAccruals)
            ->setRevenueCategories($revenueCategories)
            ->setReservationID($reservationID)
            ->setHotelReservation($hotelReservation)
            ->setSequenceNumber($sequenceNumber)
            ->setRoomStayRPH($roomStayRPH);
    }
    /**
     * Get LoyaltyPointsAccruals value
     * @return mixed|null
     */
    public function getLoyaltyPointsAccruals()
    {
        return $this->LoyaltyPointsAccruals;
    }
    /**
     * Set LoyaltyPointsAccruals value
     * @param mixed $loyaltyPointsAccruals
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayInfoType
     */
    public function setLoyaltyPointsAccruals($loyaltyPointsAccruals = null)
    {
        $this->LoyaltyPointsAccruals = $loyaltyPointsAccruals;
        return $this;
    }
    /**
     * Get RevenueCategories value
     * @return mixed|null
     */
    public function getRevenueCategories()
    {
        return $this->RevenueCategories;
    }
    /**
     * Set RevenueCategories value
     * @param mixed $revenueCategories
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayInfoType
     */
    public function setRevenueCategories($revenueCategories = null)
    {
        $this->RevenueCategories = $revenueCategories;
        return $this;
    }
    /**
     * Get ReservationID value
     * @return mixed|null
     */
    public function getReservationID()
    {
        return $this->ReservationID;
    }
    /**
     * Set ReservationID value
     * @param mixed $reservationID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayInfoType
     */
    public function setReservationID($reservationID = null)
    {
        $this->ReservationID = $reservationID;
        return $this;
    }
    /**
     * Get HotelReservation value
     * @return mixed|null
     */
    public function getHotelReservation()
    {
        return $this->HotelReservation;
    }
    /**
     * Set HotelReservation value
     * @param mixed $hotelReservation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayInfoType
     */
    public function setHotelReservation($hotelReservation = null)
    {
        $this->HotelReservation = $hotelReservation;
        return $this;
    }
    /**
     * Get SequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayInfoType
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !is_numeric($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNumber)), __LINE__);
        }
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get RoomStayRPH value
     * @return int|null
     */
    public function getRoomStayRPH()
    {
        return $this->RoomStayRPH;
    }
    /**
     * Set RoomStayRPH value
     * @param int $roomStayRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayInfoType
     */
    public function setRoomStayRPH($roomStayRPH = null)
    {
        // validation for constraint: int
        if (!is_null($roomStayRPH) && !is_numeric($roomStayRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($roomStayRPH)), __LINE__);
        }
        $this->RoomStayRPH = $roomStayRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayInfoType
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
