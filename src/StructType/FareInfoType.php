<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Rules for this priced option.
 * @subpackage Structs
 */
class FareInfoType extends AbstractStructBase
{
    /**
     * The DepartureDate
     * Meta informations extracted from the WSDL
     * - documentation: Departure Date for this priced fare
     * - minOccurs: 0
     * @var string
     */
    public $DepartureDate;
    /**
     * The FareReference
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FareReference[]
     */
    public $FareReference;
    /**
     * The RuleInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RuleInfo
     */
    public $RuleInfo;
    /**
     * The FilingAirline
     * Meta informations extracted from the WSDL
     * - documentation: The airline that filed the fare(s).
     * - minOccurs: 0
     * @var mixed
     */
    public $FilingAirline;
    /**
     * The MarketingAirline
     * Meta informations extracted from the WSDL
     * - documentation: The marketing airline.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $MarketingAirline;
    /**
     * The DepartureAirport
     * Meta informations extracted from the WSDL
     * - documentation: Departure point of flight segment.
     * - minOccurs: 0
     * @var mixed
     */
    public $DepartureAirport;
    /**
     * The ArrivalAirport
     * Meta informations extracted from the WSDL
     * - documentation: Arrival point of flight segment.
     * - minOccurs: 0
     * @var mixed
     */
    public $ArrivalAirport;
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Date[]
     */
    public $Date;
    /**
     * The FareInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 15
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo[]
     */
    public $FareInfo;
    /**
     * The DiscountPricing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\DiscountPricing
     */
    public $DiscountPricing;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\City[]
     */
    public $City;
    /**
     * The Airport
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Airport[]
     */
    public $Airport;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - documentation: The ISO 4217 currency code associated with the fare rule information.
     * - use: optional
     * @var string
     */
    public $CurrencyCode;
    /**
     * The TariffNumber
     * Meta informations extracted from the WSDL
     * - documentation: The tariff number for the rule.
     * - use: optional
     * @var string
     */
    public $TariffNumber;
    /**
     * The RuleNumber
     * Meta informations extracted from the WSDL
     * - documentation: The number associated with the fare rule.
     * - use: optional
     * @var string
     */
    public $RuleNumber;
    /**
     * The RoutingNumber
     * Meta informations extracted from the WSDL
     * - documentation: The routing number applicable to this fare.
     * - use: optional
     * @var string
     */
    public $RoutingNumber;
    /**
     * The NbrOfCities
     * Meta informations extracted from the WSDL
     * - documentation: The number of cities applicable to this fare.
     * - use: optional
     * @var string
     */
    public $NbrOfCities;
    /**
     * Constructor method for FareInfoType
     * @uses FareInfoType::setDepartureDate()
     * @uses FareInfoType::setFareReference()
     * @uses FareInfoType::setRuleInfo()
     * @uses FareInfoType::setFilingAirline()
     * @uses FareInfoType::setMarketingAirline()
     * @uses FareInfoType::setDepartureAirport()
     * @uses FareInfoType::setArrivalAirport()
     * @uses FareInfoType::setDate()
     * @uses FareInfoType::setFareInfo()
     * @uses FareInfoType::setDiscountPricing()
     * @uses FareInfoType::setCity()
     * @uses FareInfoType::setAirport()
     * @uses FareInfoType::setCurrencyCode()
     * @uses FareInfoType::setTariffNumber()
     * @uses FareInfoType::setRuleNumber()
     * @uses FareInfoType::setRoutingNumber()
     * @uses FareInfoType::setNbrOfCities()
     * @param string $departureDate
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareReference[] $fareReference
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RuleInfo $ruleInfo
     * @param mixed $filingAirline
     * @param mixed[] $marketingAirline
     * @param mixed $departureAirport
     * @param mixed $arrivalAirport
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Date[] $date
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo[] $fareInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DiscountPricing $discountPricing
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\City[] $city
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Airport[] $airport
     * @param string $currencyCode
     * @param string $tariffNumber
     * @param string $ruleNumber
     * @param string $routingNumber
     * @param string $nbrOfCities
     */
    public function __construct($departureDate = null, array $fareReference = array(), \Devlabs91\GenericOtaHotelApiService\StructType\RuleInfo $ruleInfo = null, $filingAirline = null, array $marketingAirline = array(), $departureAirport = null, $arrivalAirport = null, array $date = array(), array $fareInfo = array(), \Devlabs91\GenericOtaHotelApiService\StructType\DiscountPricing $discountPricing = null, array $city = array(), array $airport = array(), $currencyCode = null, $tariffNumber = null, $ruleNumber = null, $routingNumber = null, $nbrOfCities = null)
    {
        $this
            ->setDepartureDate($departureDate)
            ->setFareReference($fareReference)
            ->setRuleInfo($ruleInfo)
            ->setFilingAirline($filingAirline)
            ->setMarketingAirline($marketingAirline)
            ->setDepartureAirport($departureAirport)
            ->setArrivalAirport($arrivalAirport)
            ->setDate($date)
            ->setFareInfo($fareInfo)
            ->setDiscountPricing($discountPricing)
            ->setCity($city)
            ->setAirport($airport)
            ->setCurrencyCode($currencyCode)
            ->setTariffNumber($tariffNumber)
            ->setRuleNumber($ruleNumber)
            ->setRoutingNumber($routingNumber)
            ->setNbrOfCities($nbrOfCities);
    }
    /**
     * Get DepartureDate value
     * @return string|null
     */
    public function getDepartureDate()
    {
        return $this->DepartureDate;
    }
    /**
     * Set DepartureDate value
     * @param string $departureDate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setDepartureDate($departureDate = null)
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($departureDate)), __LINE__);
        }
        $this->DepartureDate = $departureDate;
        return $this;
    }
    /**
     * Get FareReference value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareReference[]|null
     */
    public function getFareReference()
    {
        return $this->FareReference;
    }
    /**
     * Set FareReference value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareReference[] $fareReference
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setFareReference(array $fareReference = array())
    {
        foreach ($fareReference as $fareInfoTypeFareReferenceItem) {
            // validation for constraint: itemType
            if (!$fareInfoTypeFareReferenceItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FareReference) {
                throw new \InvalidArgumentException(sprintf('The FareReference property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FareReference, "%s" given', is_object($fareInfoTypeFareReferenceItem) ? get_class($fareInfoTypeFareReferenceItem) : gettype($fareInfoTypeFareReferenceItem)), __LINE__);
            }
        }
        $this->FareReference = $fareReference;
        return $this;
    }
    /**
     * Add item to FareReference value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareReference $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function addToFareReference(\Devlabs91\GenericOtaHotelApiService\StructType\FareReference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FareReference) {
            throw new \InvalidArgumentException(sprintf('The FareReference property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FareReference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareReference[] = $item;
        return $this;
    }
    /**
     * Get RuleInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RuleInfo|null
     */
    public function getRuleInfo()
    {
        return $this->RuleInfo;
    }
    /**
     * Set RuleInfo value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RuleInfo $ruleInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setRuleInfo(\Devlabs91\GenericOtaHotelApiService\StructType\RuleInfo $ruleInfo = null)
    {
        $this->RuleInfo = $ruleInfo;
        return $this;
    }
    /**
     * Get FilingAirline value
     * @return mixed|null
     */
    public function getFilingAirline()
    {
        return $this->FilingAirline;
    }
    /**
     * Set FilingAirline value
     * @param mixed $filingAirline
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setFilingAirline($filingAirline = null)
    {
        $this->FilingAirline = $filingAirline;
        return $this;
    }
    /**
     * Get MarketingAirline value
     * @return mixed[]|null
     */
    public function getMarketingAirline()
    {
        return $this->MarketingAirline;
    }
    /**
     * Set MarketingAirline value
     * @throws \InvalidArgumentException
     * @param mixed[] $marketingAirline
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setMarketingAirline(array $marketingAirline = array())
    {
        foreach ($marketingAirline as $fareInfoTypeMarketingAirlineItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The MarketingAirline property can only contain items of anyType, "%s" given', is_object($fareInfoTypeMarketingAirlineItem) ? get_class($fareInfoTypeMarketingAirlineItem) : gettype($fareInfoTypeMarketingAirlineItem)), __LINE__);
            }
        }
        $this->MarketingAirline = $marketingAirline;
        return $this;
    }
    /**
     * Add item to MarketingAirline value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function addToMarketingAirline($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The MarketingAirline property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MarketingAirline[] = $item;
        return $this;
    }
    /**
     * Get DepartureAirport value
     * @return mixed|null
     */
    public function getDepartureAirport()
    {
        return $this->DepartureAirport;
    }
    /**
     * Set DepartureAirport value
     * @param mixed $departureAirport
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setDepartureAirport($departureAirport = null)
    {
        $this->DepartureAirport = $departureAirport;
        return $this;
    }
    /**
     * Get ArrivalAirport value
     * @return mixed|null
     */
    public function getArrivalAirport()
    {
        return $this->ArrivalAirport;
    }
    /**
     * Set ArrivalAirport value
     * @param mixed $arrivalAirport
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setArrivalAirport($arrivalAirport = null)
    {
        $this->ArrivalAirport = $arrivalAirport;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setDate(array $date = array())
    {
        foreach ($date as $fareInfoTypeDateItem) {
            // validation for constraint: itemType
            if (!$fareInfoTypeDateItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Date) {
                throw new \InvalidArgumentException(sprintf('The Date property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Date, "%s" given', is_object($fareInfoTypeDateItem) ? get_class($fareInfoTypeDateItem) : gettype($fareInfoTypeDateItem)), __LINE__);
            }
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Add item to Date value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Date $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
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
     * Get FareInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo[]|null
     */
    public function getFareInfo()
    {
        return $this->FareInfo;
    }
    /**
     * Set FareInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo[] $fareInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setFareInfo(array $fareInfo = array())
    {
        foreach ($fareInfo as $fareInfoTypeFareInfoItem) {
            // validation for constraint: itemType
            if (!$fareInfoTypeFareInfoItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo) {
                throw new \InvalidArgumentException(sprintf('The FareInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo, "%s" given', is_object($fareInfoTypeFareInfoItem) ? get_class($fareInfoTypeFareInfoItem) : gettype($fareInfoTypeFareInfoItem)), __LINE__);
            }
        }
        $this->FareInfo = $fareInfo;
        return $this;
    }
    /**
     * Add item to FareInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function addToFareInfo(\Devlabs91\GenericOtaHotelApiService\StructType\FareInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo) {
            throw new \InvalidArgumentException(sprintf('The FareInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareInfo[] = $item;
        return $this;
    }
    /**
     * Get DiscountPricing value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DiscountPricing|null
     */
    public function getDiscountPricing()
    {
        return $this->DiscountPricing;
    }
    /**
     * Set DiscountPricing value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DiscountPricing $discountPricing
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setDiscountPricing(\Devlabs91\GenericOtaHotelApiService\StructType\DiscountPricing $discountPricing = null)
    {
        $this->DiscountPricing = $discountPricing;
        return $this;
    }
    /**
     * Get City value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\City[]|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\City[] $city
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setCity(array $city = array())
    {
        foreach ($city as $fareInfoTypeCityItem) {
            // validation for constraint: itemType
            if (!$fareInfoTypeCityItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\City) {
                throw new \InvalidArgumentException(sprintf('The City property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\City, "%s" given', is_object($fareInfoTypeCityItem) ? get_class($fareInfoTypeCityItem) : gettype($fareInfoTypeCityItem)), __LINE__);
            }
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Add item to City value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\City $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function addToCity(\Devlabs91\GenericOtaHotelApiService\StructType\City $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\City) {
            throw new \InvalidArgumentException(sprintf('The City property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\City, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->City[] = $item;
        return $this;
    }
    /**
     * Get Airport value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Airport[]|null
     */
    public function getAirport()
    {
        return $this->Airport;
    }
    /**
     * Set Airport value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Airport[] $airport
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setAirport(array $airport = array())
    {
        foreach ($airport as $fareInfoTypeAirportItem) {
            // validation for constraint: itemType
            if (!$fareInfoTypeAirportItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Airport) {
                throw new \InvalidArgumentException(sprintf('The Airport property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Airport, "%s" given', is_object($fareInfoTypeAirportItem) ? get_class($fareInfoTypeAirportItem) : gettype($fareInfoTypeAirportItem)), __LINE__);
            }
        }
        $this->Airport = $airport;
        return $this;
    }
    /**
     * Add item to Airport value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Airport $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function addToAirport(\Devlabs91\GenericOtaHotelApiService\StructType\Airport $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Airport) {
            throw new \InvalidArgumentException(sprintf('The Airport property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Airport, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Airport[] = $item;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get TariffNumber value
     * @return string|null
     */
    public function getTariffNumber()
    {
        return $this->TariffNumber;
    }
    /**
     * Set TariffNumber value
     * @param string $tariffNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setTariffNumber($tariffNumber = null)
    {
        // validation for constraint: string
        if (!is_null($tariffNumber) && !is_string($tariffNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tariffNumber)), __LINE__);
        }
        $this->TariffNumber = $tariffNumber;
        return $this;
    }
    /**
     * Get RuleNumber value
     * @return string|null
     */
    public function getRuleNumber()
    {
        return $this->RuleNumber;
    }
    /**
     * Set RuleNumber value
     * @param string $ruleNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setRuleNumber($ruleNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ruleNumber) && !is_string($ruleNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ruleNumber)), __LINE__);
        }
        $this->RuleNumber = $ruleNumber;
        return $this;
    }
    /**
     * Get RoutingNumber value
     * @return string|null
     */
    public function getRoutingNumber()
    {
        return $this->RoutingNumber;
    }
    /**
     * Set RoutingNumber value
     * @param string $routingNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setRoutingNumber($routingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($routingNumber) && !is_string($routingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($routingNumber)), __LINE__);
        }
        $this->RoutingNumber = $routingNumber;
        return $this;
    }
    /**
     * Get NbrOfCities value
     * @return string|null
     */
    public function getNbrOfCities()
    {
        return $this->NbrOfCities;
    }
    /**
     * Set NbrOfCities value
     * @param string $nbrOfCities
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setNbrOfCities($nbrOfCities = null)
    {
        // validation for constraint: string
        if (!is_null($nbrOfCities) && !is_string($nbrOfCities)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nbrOfCities)), __LINE__);
        }
        $this->NbrOfCities = $nbrOfCities;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
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
