<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelResNotifRQ StructType
 * Meta informations extracted from the WSDL
 * - documentation: This message supports the functionality of updating other systems with reservation data. The message assumes a push model, with the originating system pushing the data to another system. The originating system would usually be a
 * booking source, such as a Global Distribution System (GDS), a Central Reservation System (CRS) or some other agent of the hotel.
 * @subpackage Structs
 */
class OTA_HotelResNotifRQ extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - documentation: The point-of-sale data, contained in the element, communicates the information that allows the receiving system to identify the trading partner that is sending the request or the response message.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\POS_Type
     */
    public $POS;
    /**
     * The MessageID
     * Meta informations extracted from the WSDL
     * - documentation: This represents a batch ID.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type
     */
    public $MessageID;
    /**
     * The HotelReservations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationsType
     */
    public $HotelReservations;
    /**
     * The ResStatus
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ResStatus;
    /**
     * The HoldDuration
     * Meta informations extracted from the WSDL
     * - documentation: The time until a hold is released.
     * - use: optional
     * @var string
     */
    public $HoldDuration;
    /**
     * The EchoToken
     * @var string
     */
    public $EchoToken;
    /**
     * The TimeStamp
     * @var string
     */
    public $TimeStamp;
    /**
     * The Target
     * @var string
     */
    public $Target;
    /**
     * The Version
     * @var float
     */
    public $Version;
    /**
     * The TransactionIdentifier
     * @var string
     */
    public $TransactionIdentifier;
    /**
     * The SequenceNmbr
     * @var int
     */
    public $SequenceNmbr;
    /**
     * The TransactionStatusCode
     * @var string
     */
    public $TransactionStatusCode;
    /**
     * The RetransmissionIndicator
     * @var bool
     */
    public $RetransmissionIndicator;
    /**
     * The CorrelationID
     * @var string
     */
    public $CorrelationID;
    /**
     * Constructor method for OTA_HotelResNotifRQ
     * @uses OTA_HotelResNotifRQ::setPOS()
     * @uses OTA_HotelResNotifRQ::setMessageID()
     * @uses OTA_HotelResNotifRQ::setHotelReservations()
     * @uses OTA_HotelResNotifRQ::setResStatus()
     * @uses OTA_HotelResNotifRQ::setHoldDuration()
     * @uses OTA_HotelResNotifRQ::setEchoToken()
     * @uses OTA_HotelResNotifRQ::setTimeStamp()
     * @uses OTA_HotelResNotifRQ::setTarget()
     * @uses OTA_HotelResNotifRQ::setVersion()
     * @uses OTA_HotelResNotifRQ::setTransactionIdentifier()
     * @uses OTA_HotelResNotifRQ::setSequenceNmbr()
     * @uses OTA_HotelResNotifRQ::setTransactionStatusCode()
     * @uses OTA_HotelResNotifRQ::setRetransmissionIndicator()
     * @uses OTA_HotelResNotifRQ::setCorrelationID()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $messageID
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationsType $hotelReservations
     * @param string $resStatus
     * @param string $holdDuration
     * @param string $echoToken
     * @param string $timeStamp
     * @param string $target
     * @param float $version
     * @param string $transactionIdentifier
     * @param int $sequenceNmbr
     * @param string $transactionStatusCode
     * @param bool $retransmissionIndicator
     * @param string $correlationID
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS = null, \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $messageID = null, \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationsType $hotelReservations = null, $resStatus = null, $holdDuration = null, $echoToken = null, $timeStamp = null, $target = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null, $correlationID = null)
    {
        $this
            ->setPOS($pOS)
            ->setMessageID($messageID)
            ->setHotelReservations($hotelReservations)
            ->setResStatus($resStatus)
            ->setHoldDuration($holdDuration)
            ->setEchoToken($echoToken)
            ->setTimeStamp($timeStamp)
            ->setTarget($target)
            ->setVersion($version)
            ->setTransactionIdentifier($transactionIdentifier)
            ->setSequenceNmbr($sequenceNmbr)
            ->setTransactionStatusCode($transactionStatusCode)
            ->setRetransmissionIndicator($retransmissionIndicator)
            ->setCorrelationID($correlationID);
    }
    /**
     * Get POS value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\POS_Type|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ
     */
    public function setPOS(\Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get MessageID value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type|null
     */
    public function getMessageID()
    {
        return $this->MessageID;
    }
    /**
     * Set MessageID value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $messageID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ
     */
    public function setMessageID(\Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $messageID = null)
    {
        $this->MessageID = $messageID;
        return $this;
    }
    /**
     * Get HotelReservations value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationsType|null
     */
    public function getHotelReservations()
    {
        return $this->HotelReservations;
    }
    /**
     * Set HotelReservations value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationsType $hotelReservations
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ
     */
    public function setHotelReservations(\Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationsType $hotelReservations = null)
    {
        $this->HotelReservations = $hotelReservations;
        return $this;
    }
    /**
     * Get ResStatus value
     * @return string|null
     */
    public function getResStatus()
    {
        return $this->ResStatus;
    }
    /**
     * Set ResStatus value
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\TransactionActionType::valueIsValid()
     * @uses \Devlabs91\GenericOtaHotelApiService\EnumType\TransactionActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $resStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ
     */
    public function setResStatus($resStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Devlabs91\GenericOtaHotelApiService\EnumType\TransactionActionType::valueIsValid($resStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $resStatus, implode(', ', \Devlabs91\GenericOtaHotelApiService\EnumType\TransactionActionType::getValidValues())), __LINE__);
        }
        $this->ResStatus = $resStatus;
        return $this;
    }
    /**
     * Get HoldDuration value
     * @return string|null
     */
    public function getHoldDuration()
    {
        return $this->HoldDuration;
    }
    /**
     * Set HoldDuration value
     * @param string $holdDuration
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ
     */
    public function setHoldDuration($holdDuration = null)
    {
        // validation for constraint: string
        if (!is_null($holdDuration) && !is_string($holdDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($holdDuration)), __LINE__);
        }
        $this->HoldDuration = $holdDuration;
        return $this;
    }
    /**
     * Get EchoToken value
     * @return string|null
     */
    public function getEchoToken()
    {
        return $this->EchoToken;
    }
    /**
     * Set EchoToken value
     * @param string $echoToken
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ
     */
    public function setEchoToken($echoToken = null)
    {
        // validation for constraint: string
        if (!is_null($echoToken) && !is_string($echoToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($echoToken)), __LINE__);
        }
        $this->EchoToken = $echoToken;
        return $this;
    }
    /**
     * Get TimeStamp value
     * @return string|null
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }
    /**
     * Set TimeStamp value
     * @param string $timeStamp
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ
     */
    public function setTimeStamp($timeStamp = null)
    {
        // validation for constraint: string
        if (!is_null($timeStamp) && !is_string($timeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeStamp)), __LINE__);
        }
        $this->TimeStamp = $timeStamp;
        return $this;
    }
    /**
     * Get Target value
     * @return string|null
     */
    public function getTarget()
    {
        return $this->Target;
    }
    /**
     * Set Target value
     * @param string $target
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ
     */
    public function setTarget($target = null)
    {
        // validation for constraint: string
        if (!is_null($target) && !is_string($target)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($target)), __LINE__);
        }
        $this->Target = $target;
        return $this;
    }
    /**
     * Get Version value
     * @return float|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param float $version
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ
     */
    public function setVersion($version = null)
    {
        $this->Version = $version;
        return $this;
    }
    /**
     * Get TransactionIdentifier value
     * @return string|null
     */
    public function getTransactionIdentifier()
    {
        return $this->TransactionIdentifier;
    }
    /**
     * Set TransactionIdentifier value
     * @param string $transactionIdentifier
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ
     */
    public function setTransactionIdentifier($transactionIdentifier = null)
    {
        // validation for constraint: string
        if (!is_null($transactionIdentifier) && !is_string($transactionIdentifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionIdentifier)), __LINE__);
        }
        $this->TransactionIdentifier = $transactionIdentifier;
        return $this;
    }
    /**
     * Get SequenceNmbr value
     * @return int|null
     */
    public function getSequenceNmbr()
    {
        return $this->SequenceNmbr;
    }
    /**
     * Set SequenceNmbr value
     * @param int $sequenceNmbr
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ
     */
    public function setSequenceNmbr($sequenceNmbr = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNmbr) && !is_numeric($sequenceNmbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequenceNmbr)), __LINE__);
        }
        $this->SequenceNmbr = $sequenceNmbr;
        return $this;
    }
    /**
     * Get TransactionStatusCode value
     * @return string|null
     */
    public function getTransactionStatusCode()
    {
        return $this->TransactionStatusCode;
    }
    /**
     * Set TransactionStatusCode value
     * @param string $transactionStatusCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ
     */
    public function setTransactionStatusCode($transactionStatusCode = null)
    {
        // validation for constraint: string
        if (!is_null($transactionStatusCode) && !is_string($transactionStatusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transactionStatusCode)), __LINE__);
        }
        $this->TransactionStatusCode = $transactionStatusCode;
        return $this;
    }
    /**
     * Get RetransmissionIndicator value
     * @return bool|null
     */
    public function getRetransmissionIndicator()
    {
        return $this->RetransmissionIndicator;
    }
    /**
     * Set RetransmissionIndicator value
     * @param bool $retransmissionIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ
     */
    public function setRetransmissionIndicator($retransmissionIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($retransmissionIndicator) && !is_bool($retransmissionIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($retransmissionIndicator)), __LINE__);
        }
        $this->RetransmissionIndicator = $retransmissionIndicator;
        return $this;
    }
    /**
     * Get CorrelationID value
     * @return string|null
     */
    public function getCorrelationID()
    {
        return $this->CorrelationID;
    }
    /**
     * Set CorrelationID value
     * @param string $correlationID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ
     */
    public function setCorrelationID($correlationID = null)
    {
        // validation for constraint: string
        if (!is_null($correlationID) && !is_string($correlationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($correlationID)), __LINE__);
        }
        $this->CorrelationID = $correlationID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelResNotifRQ
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
