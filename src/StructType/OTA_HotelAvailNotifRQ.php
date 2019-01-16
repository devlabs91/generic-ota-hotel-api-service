<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelAvailNotifRQ StructType
 * Meta informations extracted from the WSDL
 * - documentation: The OTA_AvailNotifRQ is the message that sends the notification of the availability status of a hotel. | This element defines standard attributes that appear on the root element for all OpenTravel Messages.
 * @subpackage Structs
 */
class OTA_HotelAvailNotifRQ extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - documentation: POS provides a mechanism to indicate the source of the message.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\POS_Type
     */
    public $POS;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier element allows the trading partners to uniquely identify each AvailStatusMessageRQ, (i.e. the entire message) for tracing of transactions.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type
     */
    public $UniqueID;
    /**
     * The AvailStatusMessages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages
     */
    public $AvailStatusMessages;
    /**
     * The MessageContentCode
     * Meta informations extracted from the WSDL
     * - documentation: Defines specific content of the message being sent. | Used for codes in the OpenTravel Code tables. Possible values of this pattern are 1, 101, 101.EQP, or 101.EQP.X.
     * - use: optional
     * - pattern: [0-9A-Z]{1,3}(\.[A-Z]{3}(\.X){0,1}){0,1}
     * @var string
     */
    public $MessageContentCode;
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
     * Constructor method for OTA_HotelAvailNotifRQ
     * @uses OTA_HotelAvailNotifRQ::setPOS()
     * @uses OTA_HotelAvailNotifRQ::setUniqueID()
     * @uses OTA_HotelAvailNotifRQ::setAvailStatusMessages()
     * @uses OTA_HotelAvailNotifRQ::setMessageContentCode()
     * @uses OTA_HotelAvailNotifRQ::setEchoToken()
     * @uses OTA_HotelAvailNotifRQ::setTimeStamp()
     * @uses OTA_HotelAvailNotifRQ::setTarget()
     * @uses OTA_HotelAvailNotifRQ::setVersion()
     * @uses OTA_HotelAvailNotifRQ::setTransactionIdentifier()
     * @uses OTA_HotelAvailNotifRQ::setSequenceNmbr()
     * @uses OTA_HotelAvailNotifRQ::setTransactionStatusCode()
     * @uses OTA_HotelAvailNotifRQ::setRetransmissionIndicator()
     * @uses OTA_HotelAvailNotifRQ::setCorrelationID()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $uniqueID
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages $availStatusMessages
     * @param string $messageContentCode
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
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS = null, \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $uniqueID = null, \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages $availStatusMessages = null, $messageContentCode = null, $echoToken = null, $timeStamp = null, $target = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $retransmissionIndicator = null, $correlationID = null)
    {
        $this
            ->setPOS($pOS)
            ->setUniqueID($uniqueID)
            ->setAvailStatusMessages($availStatusMessages)
            ->setMessageContentCode($messageContentCode)
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailNotifRQ
     */
    public function setPOS(\Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $uniqueID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailNotifRQ
     */
    public function setUniqueID(\Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get AvailStatusMessages value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages|null
     */
    public function getAvailStatusMessages()
    {
        return $this->AvailStatusMessages;
    }
    /**
     * Set AvailStatusMessages value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages $availStatusMessages
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailNotifRQ
     */
    public function setAvailStatusMessages(\Devlabs91\GenericOtaHotelApiService\StructType\AvailStatusMessages $availStatusMessages = null)
    {
        $this->AvailStatusMessages = $availStatusMessages;
        return $this;
    }
    /**
     * Get MessageContentCode value
     * @return string|null
     */
    public function getMessageContentCode()
    {
        return $this->MessageContentCode;
    }
    /**
     * Set MessageContentCode value
     * @param string $messageContentCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailNotifRQ
     */
    public function setMessageContentCode($messageContentCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($messageContentCode) && !preg_match('/[0-9A-Z]{1,3}(\\.[A-Z]{3}(\\.X){0,1}){0,1}/', $messageContentCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Z]{1,3}(\.[A-Z]{3}(\.X){0,1}){0,1}", "%s" given', var_export($messageContentCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($messageContentCode) && !is_string($messageContentCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageContentCode)), __LINE__);
        }
        $this->MessageContentCode = $messageContentCode;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailNotifRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailNotifRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailNotifRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailNotifRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailNotifRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailNotifRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailNotifRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailNotifRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailNotifRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailNotifRQ
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
