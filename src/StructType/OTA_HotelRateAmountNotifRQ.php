<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelRateAmountNotifRQ StructType
 * Meta informations extracted from the WSDL
 * - documentation: The OTA_HotelRateAmountNotifRQ is used to provide a notification of a new rate plan created for a hotel, and to synchronize the rate plan between systems for booking. | This element defines standard attributes that appear on the root
 * element for all OTA payloads. | Candidate for removal in a future release, usage is not recommended at this level. This attribute group should be used within the RateAmountMessages element.
 * @subpackage Structs
 */
class OTA_HotelRateAmountNotifRQ extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - documentation: POS provides a mechanisim to indicate the source of the message.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\POS_Type
     */
    public $POS;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: The unique identifier element allows the trading partners to uniquely identify each RateAmountNotifRQ, (i.e. the entire message) for transaction tracability.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type
     */
    public $UniqueID;
    /**
     * The RateAmountMessages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: RateAmountMessages
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RateAmountMessages
     */
    public $RateAmountMessages;
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
     * The ChainCode
     * @var string
     */
    public $ChainCode;
    /**
     * The BrandCode
     * @var string
     */
    public $BrandCode;
    /**
     * The HotelCode
     * @var string
     */
    public $HotelCode;
    /**
     * The HotelCityCode
     * @var string
     */
    public $HotelCityCode;
    /**
     * The HotelName
     * @var string
     */
    public $HotelName;
    /**
     * The HotelCodeContext
     * @var string
     */
    public $HotelCodeContext;
    /**
     * The ChainName
     * @var string
     */
    public $ChainName;
    /**
     * The BrandName
     * @var string
     */
    public $BrandName;
    /**
     * Constructor method for OTA_HotelRateAmountNotifRQ
     * @uses OTA_HotelRateAmountNotifRQ::setPOS()
     * @uses OTA_HotelRateAmountNotifRQ::setUniqueID()
     * @uses OTA_HotelRateAmountNotifRQ::setRateAmountMessages()
     * @uses OTA_HotelRateAmountNotifRQ::setEchoToken()
     * @uses OTA_HotelRateAmountNotifRQ::setTimeStamp()
     * @uses OTA_HotelRateAmountNotifRQ::setTarget()
     * @uses OTA_HotelRateAmountNotifRQ::setVersion()
     * @uses OTA_HotelRateAmountNotifRQ::setTransactionIdentifier()
     * @uses OTA_HotelRateAmountNotifRQ::setSequenceNmbr()
     * @uses OTA_HotelRateAmountNotifRQ::setTransactionStatusCode()
     * @uses OTA_HotelRateAmountNotifRQ::setChainCode()
     * @uses OTA_HotelRateAmountNotifRQ::setBrandCode()
     * @uses OTA_HotelRateAmountNotifRQ::setHotelCode()
     * @uses OTA_HotelRateAmountNotifRQ::setHotelCityCode()
     * @uses OTA_HotelRateAmountNotifRQ::setHotelName()
     * @uses OTA_HotelRateAmountNotifRQ::setHotelCodeContext()
     * @uses OTA_HotelRateAmountNotifRQ::setChainName()
     * @uses OTA_HotelRateAmountNotifRQ::setBrandName()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $uniqueID
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateAmountMessages $rateAmountMessages
     * @param string $echoToken
     * @param string $timeStamp
     * @param string $target
     * @param float $version
     * @param string $transactionIdentifier
     * @param int $sequenceNmbr
     * @param string $transactionStatusCode
     * @param string $chainCode
     * @param string $brandCode
     * @param string $hotelCode
     * @param string $hotelCityCode
     * @param string $hotelName
     * @param string $hotelCodeContext
     * @param string $chainName
     * @param string $brandName
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS = null, \Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $uniqueID = null, \Devlabs91\GenericOtaHotelApiService\StructType\RateAmountMessages $rateAmountMessages = null, $echoToken = null, $timeStamp = null, $target = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $chainCode = null, $brandCode = null, $hotelCode = null, $hotelCityCode = null, $hotelName = null, $hotelCodeContext = null, $chainName = null, $brandName = null)
    {
        $this
            ->setPOS($pOS)
            ->setUniqueID($uniqueID)
            ->setRateAmountMessages($rateAmountMessages)
            ->setEchoToken($echoToken)
            ->setTimeStamp($timeStamp)
            ->setTarget($target)
            ->setVersion($version)
            ->setTransactionIdentifier($transactionIdentifier)
            ->setSequenceNmbr($sequenceNmbr)
            ->setTransactionStatusCode($transactionStatusCode)
            ->setChainCode($chainCode)
            ->setBrandCode($brandCode)
            ->setHotelCode($hotelCode)
            ->setHotelCityCode($hotelCityCode)
            ->setHotelName($hotelName)
            ->setHotelCodeContext($hotelCodeContext)
            ->setChainName($chainName)
            ->setBrandName($brandName);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
     */
    public function setUniqueID(\Devlabs91\GenericOtaHotelApiService\StructType\UniqueID_Type $uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get RateAmountMessages value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RateAmountMessages|null
     */
    public function getRateAmountMessages()
    {
        return $this->RateAmountMessages;
    }
    /**
     * Set RateAmountMessages value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RateAmountMessages $rateAmountMessages
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
     */
    public function setRateAmountMessages(\Devlabs91\GenericOtaHotelApiService\StructType\RateAmountMessages $rateAmountMessages = null)
    {
        $this->RateAmountMessages = $rateAmountMessages;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
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
     * Get ChainCode value
     * @return string|null
     */
    public function getChainCode()
    {
        return $this->ChainCode;
    }
    /**
     * Set ChainCode value
     * @param string $chainCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
     */
    public function setChainCode($chainCode = null)
    {
        // validation for constraint: string
        if (!is_null($chainCode) && !is_string($chainCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chainCode)), __LINE__);
        }
        $this->ChainCode = $chainCode;
        return $this;
    }
    /**
     * Get BrandCode value
     * @return string|null
     */
    public function getBrandCode()
    {
        return $this->BrandCode;
    }
    /**
     * Set BrandCode value
     * @param string $brandCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
     */
    public function setBrandCode($brandCode = null)
    {
        // validation for constraint: string
        if (!is_null($brandCode) && !is_string($brandCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandCode)), __LINE__);
        }
        $this->BrandCode = $brandCode;
        return $this;
    }
    /**
     * Get HotelCode value
     * @return string|null
     */
    public function getHotelCode()
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @param string $hotelCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
     */
    public function setHotelCode($hotelCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCode)), __LINE__);
        }
        $this->HotelCode = $hotelCode;
        return $this;
    }
    /**
     * Get HotelCityCode value
     * @return string|null
     */
    public function getHotelCityCode()
    {
        return $this->HotelCityCode;
    }
    /**
     * Set HotelCityCode value
     * @param string $hotelCityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
     */
    public function setHotelCityCode($hotelCityCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCityCode) && !is_string($hotelCityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCityCode)), __LINE__);
        }
        $this->HotelCityCode = $hotelCityCode;
        return $this;
    }
    /**
     * Get HotelName value
     * @return string|null
     */
    public function getHotelName()
    {
        return $this->HotelName;
    }
    /**
     * Set HotelName value
     * @param string $hotelName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
     */
    public function setHotelName($hotelName = null)
    {
        // validation for constraint: string
        if (!is_null($hotelName) && !is_string($hotelName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelName)), __LINE__);
        }
        $this->HotelName = $hotelName;
        return $this;
    }
    /**
     * Get HotelCodeContext value
     * @return string|null
     */
    public function getHotelCodeContext()
    {
        return $this->HotelCodeContext;
    }
    /**
     * Set HotelCodeContext value
     * @param string $hotelCodeContext
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
     */
    public function setHotelCodeContext($hotelCodeContext = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCodeContext) && !is_string($hotelCodeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCodeContext)), __LINE__);
        }
        $this->HotelCodeContext = $hotelCodeContext;
        return $this;
    }
    /**
     * Get ChainName value
     * @return string|null
     */
    public function getChainName()
    {
        return $this->ChainName;
    }
    /**
     * Set ChainName value
     * @param string $chainName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
     */
    public function setChainName($chainName = null)
    {
        // validation for constraint: string
        if (!is_null($chainName) && !is_string($chainName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($chainName)), __LINE__);
        }
        $this->ChainName = $chainName;
        return $this;
    }
    /**
     * Get BrandName value
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->BrandName;
    }
    /**
     * Set BrandName value
     * @param string $brandName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
     */
    public function setBrandName($brandName = null)
    {
        // validation for constraint: string
        if (!is_null($brandName) && !is_string($brandName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandName)), __LINE__);
        }
        $this->BrandName = $brandName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelRateAmountNotifRQ
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
