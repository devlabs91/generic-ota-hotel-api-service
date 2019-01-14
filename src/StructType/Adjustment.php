<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Adjustment StructType
 * @subpackage Structs
 */
class Adjustment extends AbstractStructBase
{
    /**
     * The ReservationOriginatorCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ReservationOriginatorCode;
    /**
     * The ConfirmationID
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ConfirmationID;
    /**
     * The ReservationID
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ReservationID;
    /**
     * The RoomInventoryCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RoomInventoryCode;
    /**
     * The AdjustReason
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AdjustReason;
    /**
     * The Sequence
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $Sequence;
    /**
     * The InvValue
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $InvValue;
    /**
     * Constructor method for Adjustment
     * @uses Adjustment::setReservationOriginatorCode()
     * @uses Adjustment::setConfirmationID()
     * @uses Adjustment::setReservationID()
     * @uses Adjustment::setRoomInventoryCode()
     * @uses Adjustment::setAdjustReason()
     * @uses Adjustment::setSequence()
     * @uses Adjustment::setInvValue()
     * @param string $reservationOriginatorCode
     * @param string $confirmationID
     * @param string $reservationID
     * @param string $roomInventoryCode
     * @param string $adjustReason
     * @param int $sequence
     * @param string $invValue
     */
    public function __construct($reservationOriginatorCode = null, $confirmationID = null, $reservationID = null, $roomInventoryCode = null, $adjustReason = null, $sequence = null, $invValue = null)
    {
        $this
            ->setReservationOriginatorCode($reservationOriginatorCode)
            ->setConfirmationID($confirmationID)
            ->setReservationID($reservationID)
            ->setRoomInventoryCode($roomInventoryCode)
            ->setAdjustReason($adjustReason)
            ->setSequence($sequence)
            ->setInvValue($invValue);
    }
    /**
     * Get ReservationOriginatorCode value
     * @return string|null
     */
    public function getReservationOriginatorCode()
    {
        return $this->ReservationOriginatorCode;
    }
    /**
     * Set ReservationOriginatorCode value
     * @param string $reservationOriginatorCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment
     */
    public function setReservationOriginatorCode($reservationOriginatorCode = null)
    {
        // validation for constraint: string
        if (!is_null($reservationOriginatorCode) && !is_string($reservationOriginatorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reservationOriginatorCode)), __LINE__);
        }
        $this->ReservationOriginatorCode = $reservationOriginatorCode;
        return $this;
    }
    /**
     * Get ConfirmationID value
     * @return string|null
     */
    public function getConfirmationID()
    {
        return $this->ConfirmationID;
    }
    /**
     * Set ConfirmationID value
     * @param string $confirmationID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment
     */
    public function setConfirmationID($confirmationID = null)
    {
        // validation for constraint: string
        if (!is_null($confirmationID) && !is_string($confirmationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmationID)), __LINE__);
        }
        $this->ConfirmationID = $confirmationID;
        return $this;
    }
    /**
     * Get ReservationID value
     * @return string|null
     */
    public function getReservationID()
    {
        return $this->ReservationID;
    }
    /**
     * Set ReservationID value
     * @param string $reservationID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment
     */
    public function setReservationID($reservationID = null)
    {
        // validation for constraint: string
        if (!is_null($reservationID) && !is_string($reservationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reservationID)), __LINE__);
        }
        $this->ReservationID = $reservationID;
        return $this;
    }
    /**
     * Get RoomInventoryCode value
     * @return string|null
     */
    public function getRoomInventoryCode()
    {
        return $this->RoomInventoryCode;
    }
    /**
     * Set RoomInventoryCode value
     * @param string $roomInventoryCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment
     */
    public function setRoomInventoryCode($roomInventoryCode = null)
    {
        // validation for constraint: string
        if (!is_null($roomInventoryCode) && !is_string($roomInventoryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roomInventoryCode)), __LINE__);
        }
        $this->RoomInventoryCode = $roomInventoryCode;
        return $this;
    }
    /**
     * Get AdjustReason value
     * @return string|null
     */
    public function getAdjustReason()
    {
        return $this->AdjustReason;
    }
    /**
     * Set AdjustReason value
     * @param string $adjustReason
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment
     */
    public function setAdjustReason($adjustReason = null)
    {
        // validation for constraint: string
        if (!is_null($adjustReason) && !is_string($adjustReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($adjustReason)), __LINE__);
        }
        $this->AdjustReason = $adjustReason;
        return $this;
    }
    /**
     * Get Sequence value
     * @return int|null
     */
    public function getSequence()
    {
        return $this->Sequence;
    }
    /**
     * Set Sequence value
     * @param int $sequence
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment
     */
    public function setSequence($sequence = null)
    {
        // validation for constraint: int
        if (!is_null($sequence) && !is_numeric($sequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequence)), __LINE__);
        }
        $this->Sequence = $sequence;
        return $this;
    }
    /**
     * Get InvValue value
     * @return string|null
     */
    public function getInvValue()
    {
        return $this->InvValue;
    }
    /**
     * Set InvValue value
     * @param string $invValue
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment
     */
    public function setInvValue($invValue = null)
    {
        // validation for constraint: string
        if (!is_null($invValue) && !is_string($invValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invValue)), __LINE__);
        }
        $this->InvValue = $invValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Adjustment
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
