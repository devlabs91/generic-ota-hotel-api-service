<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReservationID StructType
 * Meta informations extracted from the WSDL
 * - documentation: The HotelReservationID object contains various unique (ReservationID) and non unique (ConfirmationID, CancellationID) identifiers that the trading partners associate with a given reservation.
 * @subpackage Structs
 */
class HotelReservationID extends AbstractStructBase
{
    /**
     * The ResID_Type
     * Meta informations extracted from the WSDL
     * - documentation: Defines the type of Reservation ID (e.g. reservation number, cancellation number). Refer to OpenTravel Code List Unique ID Type (UIT).
     * - use: optional
     * @var string
     */
    public $ResID_Type;
    /**
     * The ResID_Value
     * Meta informations extracted from the WSDL
     * - documentation: This is the actual value associated with ResID_Type as generated by the system that is the source of the ResID_Type.
     * - use: optional
     * @var string
     */
    public $ResID_Value;
    /**
     * The ResID_Source
     * Meta informations extracted from the WSDL
     * - documentation: A unique identifier to indicate the source system which generated the ResID_Value.
     * - use: optional
     * @var string
     */
    public $ResID_Source;
    /**
     * The ResID_SourceContext
     * Meta informations extracted from the WSDL
     * - documentation: Additional information on Source.
     * - use: optional
     * @var string
     */
    public $ResID_SourceContext;
    /**
     * The ResID_Date
     * Meta informations extracted from the WSDL
     * - documentation: Date of the creation of this reservation.
     * - use: optional
     * @var string
     */
    public $ResID_Date;
    /**
     * The ForGuest
     * Meta informations extracted from the WSDL
     * - documentation: Used to determine if the ResID_Value is given to guest. | false
     * @var bool
     */
    public $ForGuest;
    /**
     * The ResGuestRPH
     * Meta informations extracted from the WSDL
     * - documentation: This is a reference placeholder, used as an index for this guest in this reservation. In the ResGuest object it is used like all other RPH attributes to send the delta of a reservation. It is used by the RoomStay and Service objects
     * to indicate which guests are associated with that room stay or service. It is also used to link a guest with a ReservationID.
     * - use: optional
     * @var string
     */
    public $ResGuestRPH;
    /**
     * The CancelOriginatorCode
     * Meta informations extracted from the WSDL
     * - documentation: Identifying code of the system that initiated the cancel of this reservation.
     * - use: optional
     * @var string
     */
    public $CancelOriginatorCode;
    /**
     * The CancellationDate
     * Meta informations extracted from the WSDL
     * - documentation: Date this reservation was cancelled.
     * - use: optional
     * @var string
     */
    public $CancellationDate;
    /**
     * Constructor method for HotelReservationID
     * @uses HotelReservationID::setResID_Type()
     * @uses HotelReservationID::setResID_Value()
     * @uses HotelReservationID::setResID_Source()
     * @uses HotelReservationID::setResID_SourceContext()
     * @uses HotelReservationID::setResID_Date()
     * @uses HotelReservationID::setForGuest()
     * @uses HotelReservationID::setResGuestRPH()
     * @uses HotelReservationID::setCancelOriginatorCode()
     * @uses HotelReservationID::setCancellationDate()
     * @param string $resID_Type
     * @param string $resID_Value
     * @param string $resID_Source
     * @param string $resID_SourceContext
     * @param string $resID_Date
     * @param bool $forGuest
     * @param string $resGuestRPH
     * @param string $cancelOriginatorCode
     * @param string $cancellationDate
     */
    public function __construct($resID_Type = null, $resID_Value = null, $resID_Source = null, $resID_SourceContext = null, $resID_Date = null, $forGuest = null, $resGuestRPH = null, $cancelOriginatorCode = null, $cancellationDate = null)
    {
        $this
            ->setResID_Type($resID_Type)
            ->setResID_Value($resID_Value)
            ->setResID_Source($resID_Source)
            ->setResID_SourceContext($resID_SourceContext)
            ->setResID_Date($resID_Date)
            ->setForGuest($forGuest)
            ->setResGuestRPH($resGuestRPH)
            ->setCancelOriginatorCode($cancelOriginatorCode)
            ->setCancellationDate($cancellationDate);
    }
    /**
     * Get ResID_Type value
     * @return string|null
     */
    public function getResID_Type()
    {
        return $this->ResID_Type;
    }
    /**
     * Set ResID_Type value
     * @param string $resID_Type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationID
     */
    public function setResID_Type($resID_Type = null)
    {
        // validation for constraint: string
        if (!is_null($resID_Type) && !is_string($resID_Type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resID_Type)), __LINE__);
        }
        $this->ResID_Type = $resID_Type;
        return $this;
    }
    /**
     * Get ResID_Value value
     * @return string|null
     */
    public function getResID_Value()
    {
        return $this->ResID_Value;
    }
    /**
     * Set ResID_Value value
     * @param string $resID_Value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationID
     */
    public function setResID_Value($resID_Value = null)
    {
        // validation for constraint: string
        if (!is_null($resID_Value) && !is_string($resID_Value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resID_Value)), __LINE__);
        }
        $this->ResID_Value = $resID_Value;
        return $this;
    }
    /**
     * Get ResID_Source value
     * @return string|null
     */
    public function getResID_Source()
    {
        return $this->ResID_Source;
    }
    /**
     * Set ResID_Source value
     * @param string $resID_Source
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationID
     */
    public function setResID_Source($resID_Source = null)
    {
        // validation for constraint: string
        if (!is_null($resID_Source) && !is_string($resID_Source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resID_Source)), __LINE__);
        }
        $this->ResID_Source = $resID_Source;
        return $this;
    }
    /**
     * Get ResID_SourceContext value
     * @return string|null
     */
    public function getResID_SourceContext()
    {
        return $this->ResID_SourceContext;
    }
    /**
     * Set ResID_SourceContext value
     * @param string $resID_SourceContext
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationID
     */
    public function setResID_SourceContext($resID_SourceContext = null)
    {
        // validation for constraint: string
        if (!is_null($resID_SourceContext) && !is_string($resID_SourceContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resID_SourceContext)), __LINE__);
        }
        $this->ResID_SourceContext = $resID_SourceContext;
        return $this;
    }
    /**
     * Get ResID_Date value
     * @return string|null
     */
    public function getResID_Date()
    {
        return $this->ResID_Date;
    }
    /**
     * Set ResID_Date value
     * @param string $resID_Date
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationID
     */
    public function setResID_Date($resID_Date = null)
    {
        // validation for constraint: string
        if (!is_null($resID_Date) && !is_string($resID_Date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resID_Date)), __LINE__);
        }
        $this->ResID_Date = $resID_Date;
        return $this;
    }
    /**
     * Get ForGuest value
     * @return bool|null
     */
    public function getForGuest()
    {
        return $this->ForGuest;
    }
    /**
     * Set ForGuest value
     * @param bool $forGuest
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationID
     */
    public function setForGuest($forGuest = null)
    {
        // validation for constraint: boolean
        if (!is_null($forGuest) && !is_bool($forGuest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($forGuest)), __LINE__);
        }
        $this->ForGuest = $forGuest;
        return $this;
    }
    /**
     * Get ResGuestRPH value
     * @return string|null
     */
    public function getResGuestRPH()
    {
        return $this->ResGuestRPH;
    }
    /**
     * Set ResGuestRPH value
     * @param string $resGuestRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationID
     */
    public function setResGuestRPH($resGuestRPH = null)
    {
        // validation for constraint: string
        if (!is_null($resGuestRPH) && !is_string($resGuestRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($resGuestRPH)), __LINE__);
        }
        $this->ResGuestRPH = $resGuestRPH;
        return $this;
    }
    /**
     * Get CancelOriginatorCode value
     * @return string|null
     */
    public function getCancelOriginatorCode()
    {
        return $this->CancelOriginatorCode;
    }
    /**
     * Set CancelOriginatorCode value
     * @param string $cancelOriginatorCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationID
     */
    public function setCancelOriginatorCode($cancelOriginatorCode = null)
    {
        // validation for constraint: string
        if (!is_null($cancelOriginatorCode) && !is_string($cancelOriginatorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelOriginatorCode)), __LINE__);
        }
        $this->CancelOriginatorCode = $cancelOriginatorCode;
        return $this;
    }
    /**
     * Get CancellationDate value
     * @return string|null
     */
    public function getCancellationDate()
    {
        return $this->CancellationDate;
    }
    /**
     * Set CancellationDate value
     * @param string $cancellationDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationID
     */
    public function setCancellationDate($cancellationDate = null)
    {
        // validation for constraint: string
        if (!is_null($cancellationDate) && !is_string($cancellationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancellationDate)), __LINE__);
        }
        $this->CancellationDate = $cancellationDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationID
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
