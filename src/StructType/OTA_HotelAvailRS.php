<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelAvailRS StructType
 * Meta informations extracted from the WSDL
 * - documentation: Returns information about hotel properties that meet the requested criteria, indicating whether the requested service, rate, room stay, etc. is available within the date(s) specified. The response message may include Warnings from
 * business processing rules, or Errors if the request did not succeed.
 * @subpackage Structs
 */
class OTA_HotelAvailRS extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\POS_Type
     */
    public $POS;
    /**
     * The Success
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SuccessType
     */
    public $Success;
    /**
     * The Warnings
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\WarningsType
     */
    public $Warnings;
    /**
     * The Profiles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ProfilesType
     */
    public $Profiles;
    /**
     * The RoomStays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RoomStays
     */
    public $RoomStays;
    /**
     * The Areas
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AreasType
     */
    public $Areas;
    /**
     * The Criteria
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Criteria
     */
    public $Criteria;
    /**
     * The Errors
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ErrorsType
     */
    public $Errors;
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
     * Constructor method for OTA_HotelAvailRS
     * @uses OTA_HotelAvailRS::setPOS()
     * @uses OTA_HotelAvailRS::setSuccess()
     * @uses OTA_HotelAvailRS::setWarnings()
     * @uses OTA_HotelAvailRS::setProfiles()
     * @uses OTA_HotelAvailRS::setRoomStays()
     * @uses OTA_HotelAvailRS::setAreas()
     * @uses OTA_HotelAvailRS::setCriteria()
     * @uses OTA_HotelAvailRS::setErrors()
     * @uses OTA_HotelAvailRS::setEchoToken()
     * @uses OTA_HotelAvailRS::setTimeStamp()
     * @uses OTA_HotelAvailRS::setTarget()
     * @uses OTA_HotelAvailRS::setVersion()
     * @uses OTA_HotelAvailRS::setTransactionIdentifier()
     * @uses OTA_HotelAvailRS::setSequenceNmbr()
     * @uses OTA_HotelAvailRS::setTransactionStatusCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SuccessType $success
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\WarningsType $warnings
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProfilesType $profiles
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomStays $roomStays
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AreasType $areas
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Criteria $criteria
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ErrorsType $errors
     * @param string $echoToken
     * @param string $timeStamp
     * @param string $target
     * @param float $version
     * @param string $transactionIdentifier
     * @param int $sequenceNmbr
     * @param string $transactionStatusCode
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS = null, \Devlabs91\GenericOtaHotelApiService\StructType\SuccessType $success = null, \Devlabs91\GenericOtaHotelApiService\StructType\WarningsType $warnings = null, \Devlabs91\GenericOtaHotelApiService\StructType\ProfilesType $profiles = null, \Devlabs91\GenericOtaHotelApiService\StructType\RoomStays $roomStays = null, \Devlabs91\GenericOtaHotelApiService\StructType\AreasType $areas = null, \Devlabs91\GenericOtaHotelApiService\StructType\Criteria $criteria = null, \Devlabs91\GenericOtaHotelApiService\StructType\ErrorsType $errors = null, $echoToken = null, $timeStamp = null, $target = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null)
    {
        $this
            ->setPOS($pOS)
            ->setSuccess($success)
            ->setWarnings($warnings)
            ->setProfiles($profiles)
            ->setRoomStays($roomStays)
            ->setAreas($areas)
            ->setCriteria($criteria)
            ->setErrors($errors)
            ->setEchoToken($echoToken)
            ->setTimeStamp($timeStamp)
            ->setTarget($target)
            ->setVersion($version)
            ->setTransactionIdentifier($transactionIdentifier)
            ->setSequenceNmbr($sequenceNmbr)
            ->setTransactionStatusCode($transactionStatusCode);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS
     */
    public function setPOS(\Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get Success value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SuccessType|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SuccessType $success
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS
     */
    public function setSuccess(\Devlabs91\GenericOtaHotelApiService\StructType\SuccessType $success = null)
    {
        $this->Success = $success;
        return $this;
    }
    /**
     * Get Warnings value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\WarningsType|null
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }
    /**
     * Set Warnings value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\WarningsType $warnings
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS
     */
    public function setWarnings(\Devlabs91\GenericOtaHotelApiService\StructType\WarningsType $warnings = null)
    {
        $this->Warnings = $warnings;
        return $this;
    }
    /**
     * Get Profiles value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfilesType|null
     */
    public function getProfiles()
    {
        return $this->Profiles;
    }
    /**
     * Set Profiles value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProfilesType $profiles
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS
     */
    public function setProfiles(\Devlabs91\GenericOtaHotelApiService\StructType\ProfilesType $profiles = null)
    {
        $this->Profiles = $profiles;
        return $this;
    }
    /**
     * Get RoomStays value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomStays|null
     */
    public function getRoomStays()
    {
        return $this->RoomStays;
    }
    /**
     * Set RoomStays value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoomStays $roomStays
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS
     */
    public function setRoomStays(\Devlabs91\GenericOtaHotelApiService\StructType\RoomStays $roomStays = null)
    {
        $this->RoomStays = $roomStays;
        return $this;
    }
    /**
     * Get Areas value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AreasType|null
     */
    public function getAreas()
    {
        return $this->Areas;
    }
    /**
     * Set Areas value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AreasType $areas
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS
     */
    public function setAreas(\Devlabs91\GenericOtaHotelApiService\StructType\AreasType $areas = null)
    {
        $this->Areas = $areas;
        return $this;
    }
    /**
     * Get Criteria value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Criteria|null
     */
    public function getCriteria()
    {
        return $this->Criteria;
    }
    /**
     * Set Criteria value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Criteria $criteria
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS
     */
    public function setCriteria(\Devlabs91\GenericOtaHotelApiService\StructType\Criteria $criteria = null)
    {
        $this->Criteria = $criteria;
        return $this;
    }
    /**
     * Get Errors value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ErrorsType $errors
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS
     */
    public function setErrors(\Devlabs91\GenericOtaHotelApiService\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRS
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
