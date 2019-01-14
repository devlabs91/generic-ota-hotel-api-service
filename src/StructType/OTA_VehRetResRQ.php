<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_VehRetResRQ StructType
 * Meta informations extracted from the WSDL
 * - documentation: The root tag of OTA_VehRetResRQ contains standard payload attributes found in all OTA payload documents. The attribute ReqRespVersion is a positive integer value that indicates the version number requested for the response message.
 * @subpackage Structs
 */
class OTA_VehRetResRQ extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - documentation: Point of Sale Identification. Identification number of the vendor that has made the vehicle availability request and agency number assigned by IATA, ARC, ESRP or TID.
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\POS_Type
     */
    public $POS;
    /**
     * The VehRetResRQCore
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the common, or core, information associated with the request for retrieval of a rental vehicle reservation.
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQCoreType
     */
    public $VehRetResRQCore;
    /**
     * The VehRetResRQInfo
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the supplemental information associated with the request for the retrieval of a rental vehicle reservation.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType
     */
    public $VehRetResRQInfo;
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
     * The ReqRespVersion
     * @var string
     */
    public $ReqRespVersion;
    /**
     * Constructor method for OTA_VehRetResRQ
     * @uses OTA_VehRetResRQ::setPOS()
     * @uses OTA_VehRetResRQ::setVehRetResRQCore()
     * @uses OTA_VehRetResRQ::setVehRetResRQInfo()
     * @uses OTA_VehRetResRQ::setEchoToken()
     * @uses OTA_VehRetResRQ::setTimeStamp()
     * @uses OTA_VehRetResRQ::setTarget()
     * @uses OTA_VehRetResRQ::setVersion()
     * @uses OTA_VehRetResRQ::setTransactionIdentifier()
     * @uses OTA_VehRetResRQ::setSequenceNmbr()
     * @uses OTA_VehRetResRQ::setTransactionStatusCode()
     * @uses OTA_VehRetResRQ::setReqRespVersion()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQCoreType $vehRetResRQCore
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType $vehRetResRQInfo
     * @param string $echoToken
     * @param string $timeStamp
     * @param string $target
     * @param float $version
     * @param string $transactionIdentifier
     * @param int $sequenceNmbr
     * @param string $transactionStatusCode
     * @param string $reqRespVersion
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS = null, \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQCoreType $vehRetResRQCore = null, \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType $vehRetResRQInfo = null, $echoToken = null, $timeStamp = null, $target = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $reqRespVersion = null)
    {
        $this
            ->setPOS($pOS)
            ->setVehRetResRQCore($vehRetResRQCore)
            ->setVehRetResRQInfo($vehRetResRQInfo)
            ->setEchoToken($echoToken)
            ->setTimeStamp($timeStamp)
            ->setTarget($target)
            ->setVersion($version)
            ->setTransactionIdentifier($transactionIdentifier)
            ->setSequenceNmbr($sequenceNmbr)
            ->setTransactionStatusCode($transactionStatusCode)
            ->setReqRespVersion($reqRespVersion);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_VehRetResRQ
     */
    public function setPOS(\Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get VehRetResRQCore value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQCoreType|null
     */
    public function getVehRetResRQCore()
    {
        return $this->VehRetResRQCore;
    }
    /**
     * Set VehRetResRQCore value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQCoreType $vehRetResRQCore
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_VehRetResRQ
     */
    public function setVehRetResRQCore(\Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQCoreType $vehRetResRQCore = null)
    {
        $this->VehRetResRQCore = $vehRetResRQCore;
        return $this;
    }
    /**
     * Get VehRetResRQInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType|null
     */
    public function getVehRetResRQInfo()
    {
        return $this->VehRetResRQInfo;
    }
    /**
     * Set VehRetResRQInfo value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType $vehRetResRQInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_VehRetResRQ
     */
    public function setVehRetResRQInfo(\Devlabs91\GenericOtaHotelApiService\StructType\VehicleRetrieveResRQAdditionalInfoType $vehRetResRQInfo = null)
    {
        $this->VehRetResRQInfo = $vehRetResRQInfo;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_VehRetResRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_VehRetResRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_VehRetResRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_VehRetResRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_VehRetResRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_VehRetResRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_VehRetResRQ
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
     * Get ReqRespVersion value
     * @return string|null
     */
    public function getReqRespVersion()
    {
        return $this->ReqRespVersion;
    }
    /**
     * Set ReqRespVersion value
     * @param string $reqRespVersion
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_VehRetResRQ
     */
    public function setReqRespVersion($reqRespVersion = null)
    {
        // validation for constraint: string
        if (!is_null($reqRespVersion) && !is_string($reqRespVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reqRespVersion)), __LINE__);
        }
        $this->ReqRespVersion = $reqRespVersion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_VehRetResRQ
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
