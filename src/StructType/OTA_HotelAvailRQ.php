<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OTA_HotelAvailRQ StructType
 * Meta informations extracted from the WSDL
 * - documentation: Requests availability of hotel properties by specific criteria that may include: dates, date ranges, price range, room types, regular and qualifying rates, and/or services and amenities. The availability message can be used to get an
 * initial availability or to get availability for the purpose of modifying an existing reservation.
 * @subpackage Structs
 */
class OTA_HotelAvailRQ extends AbstractStructBase
{
    /**
     * The POS
     * Meta informations extracted from the WSDL
     * - documentation: Point of sale object.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\POS_Type
     */
    public $POS;
    /**
     * The AvailRequestSegments
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegmentsType
     */
    public $AvailRequestSegments;
    /**
     * The HotelReservationIDs
     * Meta informations extracted from the WSDL
     * - documentation: Collection of Hotel Reservation IDs associated with a given reservation, used when asking for availability for the purpose of modifying an existing reservation.
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationIDsType
     */
    public $HotelReservationIDs;
    /**
     * The SummaryOnly
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $SummaryOnly;
    /**
     * The SortOrder
     * Meta informations extracted from the WSDL
     * - default: A
     * - use: optional
     * @var string
     */
    public $SortOrder;
    /**
     * The AvailRatesOnly
     * Meta informations extracted from the WSDL
     * - documentation: A boolean flag that indicates the response should include ONLY those rates that are available in the date range specified, or whether rates that are NOT available should be shown. "Yes" returns only available rates; "No" returns all
     * rates.
     * - use: optional
     * @var bool
     */
    public $AvailRatesOnly;
    /**
     * The BestOnly
     * Meta informations extracted from the WSDL
     * - documentation: A boolean flag that indicates the response message should send back only the best rate available at the hotel property, as there could be multiple room types and rates that meet the requested criteria (e.g.: rate range). Allowing
     * that the term "best rate" is subjective, the intent means the lowest rate that meets the category of the input criteria, and may have the effect of limiting the return to one rate quote as opposed to multiples.
     * - use: optional
     * @var bool
     */
    public $BestOnly;
    /**
     * The RateRangeOnly
     * Meta informations extracted from the WSDL
     * - documentation: A boolean flag that indicates the response message should send back only those rates that are available within the range of the minimum and maximum amount specified.
     * - use: optional
     * @var bool
     */
    public $RateRangeOnly;
    /**
     * The ExactMatchOnly
     * Meta informations extracted from the WSDL
     * - documentation: A boolean flag that indicates the response message should send back only those rates that are an exact match to the requested criteria.
     * - use: optional
     * @var bool
     */
    public $ExactMatchOnly;
    /**
     * The AllowPartialAvail
     * Meta informations extracted from the WSDL
     * - documentation: A boolean flag that indicates the response message should include availability and rates that do not span the complete stay.
     * - use: optional
     * @var bool
     */
    public $AllowPartialAvail;
    /**
     * The RequestedCurrency
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for Alphabetic Strings, length exactly 3
     * - pattern: [a-zA-Z]{3}
     * @var string
     */
    public $RequestedCurrency;
    /**
     * The IsModify
     * Meta informations extracted from the WSDL
     * - default: false
     * - documentation: Indicates that this is an availibility request for a modification to an existing reservation.
     * - use: optional
     * @var bool
     */
    public $IsModify;
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
     * The MaxResponses
     * @var int
     */
    public $MaxResponses;
    /**
     * Constructor method for OTA_HotelAvailRQ
     * @uses OTA_HotelAvailRQ::setPOS()
     * @uses OTA_HotelAvailRQ::setAvailRequestSegments()
     * @uses OTA_HotelAvailRQ::setHotelReservationIDs()
     * @uses OTA_HotelAvailRQ::setSummaryOnly()
     * @uses OTA_HotelAvailRQ::setSortOrder()
     * @uses OTA_HotelAvailRQ::setAvailRatesOnly()
     * @uses OTA_HotelAvailRQ::setBestOnly()
     * @uses OTA_HotelAvailRQ::setRateRangeOnly()
     * @uses OTA_HotelAvailRQ::setExactMatchOnly()
     * @uses OTA_HotelAvailRQ::setAllowPartialAvail()
     * @uses OTA_HotelAvailRQ::setRequestedCurrency()
     * @uses OTA_HotelAvailRQ::setIsModify()
     * @uses OTA_HotelAvailRQ::setEchoToken()
     * @uses OTA_HotelAvailRQ::setTimeStamp()
     * @uses OTA_HotelAvailRQ::setTarget()
     * @uses OTA_HotelAvailRQ::setVersion()
     * @uses OTA_HotelAvailRQ::setTransactionIdentifier()
     * @uses OTA_HotelAvailRQ::setSequenceNmbr()
     * @uses OTA_HotelAvailRQ::setTransactionStatusCode()
     * @uses OTA_HotelAvailRQ::setMaxResponses()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegmentsType $availRequestSegments
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationIDsType $hotelReservationIDs
     * @param bool $summaryOnly
     * @param string $sortOrder
     * @param bool $availRatesOnly
     * @param bool $bestOnly
     * @param bool $rateRangeOnly
     * @param bool $exactMatchOnly
     * @param bool $allowPartialAvail
     * @param string $requestedCurrency
     * @param bool $isModify
     * @param string $echoToken
     * @param string $timeStamp
     * @param string $target
     * @param float $version
     * @param string $transactionIdentifier
     * @param int $sequenceNmbr
     * @param string $transactionStatusCode
     * @param int $maxResponses
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS = null, \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegmentsType $availRequestSegments = null, \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationIDsType $hotelReservationIDs = null, $summaryOnly = null, $sortOrder = 'A', $availRatesOnly = null, $bestOnly = null, $rateRangeOnly = null, $exactMatchOnly = null, $allowPartialAvail = null, $requestedCurrency = null, $isModify = false, $echoToken = null, $timeStamp = null, $target = null, $version = null, $transactionIdentifier = null, $sequenceNmbr = null, $transactionStatusCode = null, $maxResponses = null)
    {
        $this
            ->setPOS($pOS)
            ->setAvailRequestSegments($availRequestSegments)
            ->setHotelReservationIDs($hotelReservationIDs)
            ->setSummaryOnly($summaryOnly)
            ->setSortOrder($sortOrder)
            ->setAvailRatesOnly($availRatesOnly)
            ->setBestOnly($bestOnly)
            ->setRateRangeOnly($rateRangeOnly)
            ->setExactMatchOnly($exactMatchOnly)
            ->setAllowPartialAvail($allowPartialAvail)
            ->setRequestedCurrency($requestedCurrency)
            ->setIsModify($isModify)
            ->setEchoToken($echoToken)
            ->setTimeStamp($timeStamp)
            ->setTarget($target)
            ->setVersion($version)
            ->setTransactionIdentifier($transactionIdentifier)
            ->setSequenceNmbr($sequenceNmbr)
            ->setTransactionStatusCode($transactionStatusCode)
            ->setMaxResponses($maxResponses);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
     */
    public function setPOS(\Devlabs91\GenericOtaHotelApiService\StructType\POS_Type $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get AvailRequestSegments value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegmentsType|null
     */
    public function getAvailRequestSegments()
    {
        return $this->AvailRequestSegments;
    }
    /**
     * Set AvailRequestSegments value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegmentsType $availRequestSegments
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
     */
    public function setAvailRequestSegments(\Devlabs91\GenericOtaHotelApiService\StructType\AvailRequestSegmentsType $availRequestSegments = null)
    {
        $this->AvailRequestSegments = $availRequestSegments;
        return $this;
    }
    /**
     * Get HotelReservationIDs value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationIDsType|null
     */
    public function getHotelReservationIDs()
    {
        return $this->HotelReservationIDs;
    }
    /**
     * Set HotelReservationIDs value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationIDsType $hotelReservationIDs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
     */
    public function setHotelReservationIDs(\Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationIDsType $hotelReservationIDs = null)
    {
        $this->HotelReservationIDs = $hotelReservationIDs;
        return $this;
    }
    /**
     * Get SummaryOnly value
     * @return bool|null
     */
    public function getSummaryOnly()
    {
        return $this->SummaryOnly;
    }
    /**
     * Set SummaryOnly value
     * @param bool $summaryOnly
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
     */
    public function setSummaryOnly($summaryOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($summaryOnly) && !is_bool($summaryOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($summaryOnly)), __LINE__);
        }
        $this->SummaryOnly = $summaryOnly;
        return $this;
    }
    /**
     * Get SortOrder value
     * @return string|null
     */
    public function getSortOrder()
    {
        return $this->SortOrder;
    }
    /**
     * Set SortOrder value
     * @param string $sortOrder
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
     */
    public function setSortOrder($sortOrder = 'A')
    {
        // validation for constraint: string
        if (!is_null($sortOrder) && !is_string($sortOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sortOrder)), __LINE__);
        }
        $this->SortOrder = $sortOrder;
        return $this;
    }
    /**
     * Get AvailRatesOnly value
     * @return bool|null
     */
    public function getAvailRatesOnly()
    {
        return $this->AvailRatesOnly;
    }
    /**
     * Set AvailRatesOnly value
     * @param bool $availRatesOnly
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
     */
    public function setAvailRatesOnly($availRatesOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($availRatesOnly) && !is_bool($availRatesOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($availRatesOnly)), __LINE__);
        }
        $this->AvailRatesOnly = $availRatesOnly;
        return $this;
    }
    /**
     * Get BestOnly value
     * @return bool|null
     */
    public function getBestOnly()
    {
        return $this->BestOnly;
    }
    /**
     * Set BestOnly value
     * @param bool $bestOnly
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
     */
    public function setBestOnly($bestOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($bestOnly) && !is_bool($bestOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bestOnly)), __LINE__);
        }
        $this->BestOnly = $bestOnly;
        return $this;
    }
    /**
     * Get RateRangeOnly value
     * @return bool|null
     */
    public function getRateRangeOnly()
    {
        return $this->RateRangeOnly;
    }
    /**
     * Set RateRangeOnly value
     * @param bool $rateRangeOnly
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
     */
    public function setRateRangeOnly($rateRangeOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($rateRangeOnly) && !is_bool($rateRangeOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($rateRangeOnly)), __LINE__);
        }
        $this->RateRangeOnly = $rateRangeOnly;
        return $this;
    }
    /**
     * Get ExactMatchOnly value
     * @return bool|null
     */
    public function getExactMatchOnly()
    {
        return $this->ExactMatchOnly;
    }
    /**
     * Set ExactMatchOnly value
     * @param bool $exactMatchOnly
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
     */
    public function setExactMatchOnly($exactMatchOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($exactMatchOnly) && !is_bool($exactMatchOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($exactMatchOnly)), __LINE__);
        }
        $this->ExactMatchOnly = $exactMatchOnly;
        return $this;
    }
    /**
     * Get AllowPartialAvail value
     * @return bool|null
     */
    public function getAllowPartialAvail()
    {
        return $this->AllowPartialAvail;
    }
    /**
     * Set AllowPartialAvail value
     * @param bool $allowPartialAvail
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
     */
    public function setAllowPartialAvail($allowPartialAvail = null)
    {
        // validation for constraint: boolean
        if (!is_null($allowPartialAvail) && !is_bool($allowPartialAvail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($allowPartialAvail)), __LINE__);
        }
        $this->AllowPartialAvail = $allowPartialAvail;
        return $this;
    }
    /**
     * Get RequestedCurrency value
     * @return string|null
     */
    public function getRequestedCurrency()
    {
        return $this->RequestedCurrency;
    }
    /**
     * Set RequestedCurrency value
     * @param string $requestedCurrency
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
     */
    public function setRequestedCurrency($requestedCurrency = null)
    {
        // validation for constraint: pattern
        if (is_scalar($requestedCurrency) && !preg_match('/[a-zA-Z]{3}/', $requestedCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z]{3}", "%s" given', var_export($requestedCurrency, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($requestedCurrency) && !is_string($requestedCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($requestedCurrency)), __LINE__);
        }
        $this->RequestedCurrency = $requestedCurrency;
        return $this;
    }
    /**
     * Get IsModify value
     * @return bool|null
     */
    public function getIsModify()
    {
        return $this->IsModify;
    }
    /**
     * Set IsModify value
     * @param bool $isModify
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
     */
    public function setIsModify($isModify = false)
    {
        // validation for constraint: boolean
        if (!is_null($isModify) && !is_bool($isModify)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isModify)), __LINE__);
        }
        $this->IsModify = $isModify;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
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
     * Get MaxResponses value
     * @return int|null
     */
    public function getMaxResponses()
    {
        return $this->MaxResponses;
    }
    /**
     * Set MaxResponses value
     * @param int $maxResponses
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
     */
    public function setMaxResponses($maxResponses = null)
    {
        // validation for constraint: int
        if (!is_null($maxResponses) && !is_numeric($maxResponses)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxResponses)), __LINE__);
        }
        $this->MaxResponses = $maxResponses;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OTA_HotelAvailRQ
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
