<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: If StartSeqNmbr and EndSeqNmbr are not sent, the request will be assumed to be for the last sequence number.
 * @subpackage Structs
 */
class MessageType extends AbstractStructBase
{
    /**
     * The OriginalPayloadStdAttributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OriginalPayloadStdAttributes
     */
    public $OriginalPayloadStdAttributes;
    /**
     * The MessageContent
     * Meta informations extracted from the WSDL
     * - documentation: This container is designed to store the response message.
     * - minOccurs: 0
     * @var string
     */
    public $MessageContent;
    /**
     * The StartSeqNmbr
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $StartSeqNmbr;
    /**
     * The EndSeqNmbr
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $EndSeqNmbr;
    /**
     * The MessageType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $MessageType;
    /**
     * The ResponseValue
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ResponseValue;
    /**
     * The RequestCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RequestCode;
    /**
     * The ReasonForRequest
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ReasonForRequest;
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $UserName;
    /**
     * The RatePlanCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $RatePlanCode;
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
     * Constructor method for MessageType
     * @uses MessageType::setOriginalPayloadStdAttributes()
     * @uses MessageType::setMessageContent()
     * @uses MessageType::setStartSeqNmbr()
     * @uses MessageType::setEndSeqNmbr()
     * @uses MessageType::setMessageType()
     * @uses MessageType::setResponseValue()
     * @uses MessageType::setRequestCode()
     * @uses MessageType::setReasonForRequest()
     * @uses MessageType::setUserName()
     * @uses MessageType::setRatePlanCode()
     * @uses MessageType::setConfirmationID()
     * @uses MessageType::setReservationID()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OriginalPayloadStdAttributes $originalPayloadStdAttributes
     * @param string $messageContent
     * @param int $startSeqNmbr
     * @param int $endSeqNmbr
     * @param string $messageType
     * @param string $responseValue
     * @param string $requestCode
     * @param string $reasonForRequest
     * @param string $userName
     * @param string $ratePlanCode
     * @param string $confirmationID
     * @param string $reservationID
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\OriginalPayloadStdAttributes $originalPayloadStdAttributes = null, $messageContent = null, $startSeqNmbr = null, $endSeqNmbr = null, $messageType = null, $responseValue = null, $requestCode = null, $reasonForRequest = null, $userName = null, $ratePlanCode = null, $confirmationID = null, $reservationID = null)
    {
        $this
            ->setOriginalPayloadStdAttributes($originalPayloadStdAttributes)
            ->setMessageContent($messageContent)
            ->setStartSeqNmbr($startSeqNmbr)
            ->setEndSeqNmbr($endSeqNmbr)
            ->setMessageType($messageType)
            ->setResponseValue($responseValue)
            ->setRequestCode($requestCode)
            ->setReasonForRequest($reasonForRequest)
            ->setUserName($userName)
            ->setRatePlanCode($ratePlanCode)
            ->setConfirmationID($confirmationID)
            ->setReservationID($reservationID);
    }
    /**
     * Get OriginalPayloadStdAttributes value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OriginalPayloadStdAttributes|null
     */
    public function getOriginalPayloadStdAttributes()
    {
        return $this->OriginalPayloadStdAttributes;
    }
    /**
     * Set OriginalPayloadStdAttributes value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OriginalPayloadStdAttributes $originalPayloadStdAttributes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageType
     */
    public function setOriginalPayloadStdAttributes(\Devlabs91\GenericOtaHotelApiService\StructType\OriginalPayloadStdAttributes $originalPayloadStdAttributes = null)
    {
        $this->OriginalPayloadStdAttributes = $originalPayloadStdAttributes;
        return $this;
    }
    /**
     * Get MessageContent value
     * @return string|null
     */
    public function getMessageContent()
    {
        return $this->MessageContent;
    }
    /**
     * Set MessageContent value
     * @param string $messageContent
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageType
     */
    public function setMessageContent($messageContent = null)
    {
        // validation for constraint: string
        if (!is_null($messageContent) && !is_string($messageContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageContent)), __LINE__);
        }
        $this->MessageContent = $messageContent;
        return $this;
    }
    /**
     * Get StartSeqNmbr value
     * @return int|null
     */
    public function getStartSeqNmbr()
    {
        return $this->StartSeqNmbr;
    }
    /**
     * Set StartSeqNmbr value
     * @param int $startSeqNmbr
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageType
     */
    public function setStartSeqNmbr($startSeqNmbr = null)
    {
        // validation for constraint: int
        if (!is_null($startSeqNmbr) && !is_numeric($startSeqNmbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($startSeqNmbr)), __LINE__);
        }
        $this->StartSeqNmbr = $startSeqNmbr;
        return $this;
    }
    /**
     * Get EndSeqNmbr value
     * @return int|null
     */
    public function getEndSeqNmbr()
    {
        return $this->EndSeqNmbr;
    }
    /**
     * Set EndSeqNmbr value
     * @param int $endSeqNmbr
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageType
     */
    public function setEndSeqNmbr($endSeqNmbr = null)
    {
        // validation for constraint: int
        if (!is_null($endSeqNmbr) && !is_numeric($endSeqNmbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($endSeqNmbr)), __LINE__);
        }
        $this->EndSeqNmbr = $endSeqNmbr;
        return $this;
    }
    /**
     * Get MessageType value
     * @return string|null
     */
    public function getMessageType()
    {
        return $this->MessageType;
    }
    /**
     * Set MessageType value
     * @param string $messageType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageType
     */
    public function setMessageType($messageType = null)
    {
        // validation for constraint: string
        if (!is_null($messageType) && !is_string($messageType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($messageType)), __LINE__);
        }
        $this->MessageType = $messageType;
        return $this;
    }
    /**
     * Get ResponseValue value
     * @return string|null
     */
    public function getResponseValue()
    {
        return $this->ResponseValue;
    }
    /**
     * Set ResponseValue value
     * @param string $responseValue
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageType
     */
    public function setResponseValue($responseValue = null)
    {
        // validation for constraint: string
        if (!is_null($responseValue) && !is_string($responseValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($responseValue)), __LINE__);
        }
        $this->ResponseValue = $responseValue;
        return $this;
    }
    /**
     * Get RequestCode value
     * @return string|null
     */
    public function getRequestCode()
    {
        return $this->RequestCode;
    }
    /**
     * Set RequestCode value
     * @param string $requestCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageType
     */
    public function setRequestCode($requestCode = null)
    {
        // validation for constraint: string
        if (!is_null($requestCode) && !is_string($requestCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestCode)), __LINE__);
        }
        $this->RequestCode = $requestCode;
        return $this;
    }
    /**
     * Get ReasonForRequest value
     * @return string|null
     */
    public function getReasonForRequest()
    {
        return $this->ReasonForRequest;
    }
    /**
     * Set ReasonForRequest value
     * @param string $reasonForRequest
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageType
     */
    public function setReasonForRequest($reasonForRequest = null)
    {
        // validation for constraint: string
        if (!is_null($reasonForRequest) && !is_string($reasonForRequest)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reasonForRequest)), __LINE__);
        }
        $this->ReasonForRequest = $reasonForRequest;
        return $this;
    }
    /**
     * Get UserName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $userName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageType
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userName)), __LINE__);
        }
        $this->UserName = $userName;
        return $this;
    }
    /**
     * Get RatePlanCode value
     * @return string|null
     */
    public function getRatePlanCode()
    {
        return $this->RatePlanCode;
    }
    /**
     * Set RatePlanCode value
     * @param string $ratePlanCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageType
     */
    public function setRatePlanCode($ratePlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($ratePlanCode) && !is_string($ratePlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ratePlanCode)), __LINE__);
        }
        $this->RatePlanCode = $ratePlanCode;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageType
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\MessageType
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
