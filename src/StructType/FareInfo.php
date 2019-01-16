<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: Detailed information on individual priced fares | Information used to define a fare and its associated rules information. | Fares and related information for this fare rule. | Detailed information on individual priced fares. |
 * Information used to define a fare and its associated rules information.
 * @subpackage Structs
 */
class FareInfo extends FareInfoType
{
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * The Operation
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the required modification to the element. | Indicates the required modification to the element.
     * - use: optional
     * @var string
     */
    public $Operation;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: Provides a reference to a specific FareInfo item between an air modification request and the existing air reservation. | Provides a reference to a specific FareInfo item between an air modification request and the existing air
     * reservation.
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Date[]
     */
    public $Date;
    /**
     * The Fare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Fare
     */
    public $Fare;
    /**
     * The PTC
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PTC[]
     */
    public $PTC;
    /**
     * The FareBasisCode
     * Meta informations extracted from the WSDL
     * - documentation: The fare basis code for the fare for this rule.
     * - use: optional
     * @var string
     */
    public $FareBasisCode;
    /**
     * The GlobalIndicatorCode
     * Meta informations extracted from the WSDL
     * - documentation: The global direction for this fare rule.
     * - use: optional
     * @var string
     */
    public $GlobalIndicatorCode;
    /**
     * The MaximumPermittedMileage
     * Meta informations extracted from the WSDL
     * - documentation: The maximum mileage (in miles) that can be travelled under this fare.
     * - use: optional
     * @var int
     */
    public $MaximumPermittedMileage;
    /**
     * The TripType
     * Meta informations extracted from the WSDL
     * - documentation: Tthe type of trip associated with the rule.
     * - use: optional
     * @var string
     */
    public $TripType;
    /**
     * The FareType
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the fare type for this fare.
     * - use: optional
     * @var string
     */
    public $FareType;
    /**
     * The FareStatus
     * Meta informations extracted from the WSDL
     * - documentation: Identifies whether the fare was constructed, published, created, etc.
     * - use: optional
     * @var string
     */
    public $FareStatus;
    /**
     * The PassengerFare
     * Meta informations extracted from the WSDL
     * - documentation: The fare with cost breakdown.
     * @var mixed
     */
    public $PassengerFare;
    /**
     * Constructor method for FareInfo
     * @uses FareInfo::setTPA_Extensions()
     * @uses FareInfo::setOperation()
     * @uses FareInfo::setRPH()
     * @uses FareInfo::setDate()
     * @uses FareInfo::setFare()
     * @uses FareInfo::setPTC()
     * @uses FareInfo::setFareBasisCode()
     * @uses FareInfo::setGlobalIndicatorCode()
     * @uses FareInfo::setMaximumPermittedMileage()
     * @uses FareInfo::setTripType()
     * @uses FareInfo::setFareType()
     * @uses FareInfo::setFareStatus()
     * @uses FareInfo::setPassengerFare()
     * @param mixed $tPA_Extensions
     * @param string $operation
     * @param string $rPH
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Date[] $date
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Fare $fare
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PTC[] $pTC
     * @param string $fareBasisCode
     * @param string $globalIndicatorCode
     * @param int $maximumPermittedMileage
     * @param string $tripType
     * @param string $fareType
     * @param string $fareStatus
     * @param mixed $passengerFare
     */
    public function __construct($tPA_Extensions = null, $operation = null, $rPH = null, array $date = array(), \Devlabs91\GenericOtaHotelApiService\StructType\Fare $fare = null, array $pTC = array(), $fareBasisCode = null, $globalIndicatorCode = null, $maximumPermittedMileage = null, $tripType = null, $fareType = null, $fareStatus = null, $passengerFare = null)
    {
        $this
            ->setTPA_Extensions($tPA_Extensions)
            ->setOperation($operation)
            ->setRPH($rPH)
            ->setDate($date)
            ->setFare($fare)
            ->setPTC($pTC)
            ->setFareBasisCode($fareBasisCode)
            ->setGlobalIndicatorCode($globalIndicatorCode)
            ->setMaximumPermittedMileage($maximumPermittedMileage)
            ->setTripType($tripType)
            ->setFareType($fareType)
            ->setFareStatus($fareStatus)
            ->setPassengerFare($passengerFare);
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Get Operation value
     * @return string|null
     */
    public function getOperation()
    {
        return $this->Operation;
    }
    /**
     * Set Operation value
     * @param string $operation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo
     */
    public function setOperation($operation = null)
    {
        // validation for constraint: string
        if (!is_null($operation) && !is_string($operation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operation)), __LINE__);
        }
        $this->Operation = $operation;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get Date value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Date[]|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Date[] $date
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo
     */
    public function setDate(array $date = array())
    {
        foreach ($date as $fareInfoDateItem) {
            // validation for constraint: itemType
            if (!$fareInfoDateItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Date) {
                throw new \InvalidArgumentException(sprintf('The Date property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Date, "%s" given', is_object($fareInfoDateItem) ? get_class($fareInfoDateItem) : gettype($fareInfoDateItem)), __LINE__);
            }
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Add item to Date value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Date $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo
     */
    public function addToDate(\Devlabs91\GenericOtaHotelApiService\StructType\Date $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Date) {
            throw new \InvalidArgumentException(sprintf('The Date property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Date, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Date[] = $item;
        return $this;
    }
    /**
     * Get Fare value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Fare|null
     */
    public function getFare()
    {
        return $this->Fare;
    }
    /**
     * Set Fare value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Fare $fare
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo
     */
    public function setFare(\Devlabs91\GenericOtaHotelApiService\StructType\Fare $fare = null)
    {
        $this->Fare = $fare;
        return $this;
    }
    /**
     * Get PTC value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PTC[]|null
     */
    public function getPTC()
    {
        return $this->PTC;
    }
    /**
     * Set PTC value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PTC[] $pTC
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo
     */
    public function setPTC(array $pTC = array())
    {
        foreach ($pTC as $fareInfoPTCItem) {
            // validation for constraint: itemType
            if (!$fareInfoPTCItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PTC) {
                throw new \InvalidArgumentException(sprintf('The PTC property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PTC, "%s" given', is_object($fareInfoPTCItem) ? get_class($fareInfoPTCItem) : gettype($fareInfoPTCItem)), __LINE__);
            }
        }
        $this->PTC = $pTC;
        return $this;
    }
    /**
     * Add item to PTC value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PTC $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo
     */
    public function addToPTC(\Devlabs91\GenericOtaHotelApiService\StructType\PTC $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PTC) {
            throw new \InvalidArgumentException(sprintf('The PTC property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PTC, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PTC[] = $item;
        return $this;
    }
    /**
     * Get FareBasisCode value
     * @return string|null
     */
    public function getFareBasisCode()
    {
        return $this->FareBasisCode;
    }
    /**
     * Set FareBasisCode value
     * @param string $fareBasisCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo
     */
    public function setFareBasisCode($fareBasisCode = null)
    {
        // validation for constraint: string
        if (!is_null($fareBasisCode) && !is_string($fareBasisCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareBasisCode)), __LINE__);
        }
        $this->FareBasisCode = $fareBasisCode;
        return $this;
    }
    /**
     * Get GlobalIndicatorCode value
     * @return string|null
     */
    public function getGlobalIndicatorCode()
    {
        return $this->GlobalIndicatorCode;
    }
    /**
     * Set GlobalIndicatorCode value
     * @param string $globalIndicatorCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo
     */
    public function setGlobalIndicatorCode($globalIndicatorCode = null)
    {
        // validation for constraint: string
        if (!is_null($globalIndicatorCode) && !is_string($globalIndicatorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($globalIndicatorCode)), __LINE__);
        }
        $this->GlobalIndicatorCode = $globalIndicatorCode;
        return $this;
    }
    /**
     * Get MaximumPermittedMileage value
     * @return int|null
     */
    public function getMaximumPermittedMileage()
    {
        return $this->MaximumPermittedMileage;
    }
    /**
     * Set MaximumPermittedMileage value
     * @param int $maximumPermittedMileage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo
     */
    public function setMaximumPermittedMileage($maximumPermittedMileage = null)
    {
        // validation for constraint: int
        if (!is_null($maximumPermittedMileage) && !is_numeric($maximumPermittedMileage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximumPermittedMileage)), __LINE__);
        }
        $this->MaximumPermittedMileage = $maximumPermittedMileage;
        return $this;
    }
    /**
     * Get TripType value
     * @return string|null
     */
    public function getTripType()
    {
        return $this->TripType;
    }
    /**
     * Set TripType value
     * @param string $tripType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo
     */
    public function setTripType($tripType = null)
    {
        // validation for constraint: string
        if (!is_null($tripType) && !is_string($tripType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tripType)), __LINE__);
        }
        $this->TripType = $tripType;
        return $this;
    }
    /**
     * Get FareType value
     * @return string|null
     */
    public function getFareType()
    {
        return $this->FareType;
    }
    /**
     * Set FareType value
     * @param string $fareType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo
     */
    public function setFareType($fareType = null)
    {
        // validation for constraint: string
        if (!is_null($fareType) && !is_string($fareType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareType)), __LINE__);
        }
        $this->FareType = $fareType;
        return $this;
    }
    /**
     * Get FareStatus value
     * @return string|null
     */
    public function getFareStatus()
    {
        return $this->FareStatus;
    }
    /**
     * Set FareStatus value
     * @param string $fareStatus
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo
     */
    public function setFareStatus($fareStatus = null)
    {
        // validation for constraint: string
        if (!is_null($fareStatus) && !is_string($fareStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fareStatus)), __LINE__);
        }
        $this->FareStatus = $fareStatus;
        return $this;
    }
    /**
     * Get PassengerFare value
     * @return mixed|null
     */
    public function getPassengerFare()
    {
        return $this->PassengerFare;
    }
    /**
     * Set PassengerFare value
     * @param mixed $passengerFare
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo
     */
    public function setPassengerFare($passengerFare = null)
    {
        $this->PassengerFare = $passengerFare;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo
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
