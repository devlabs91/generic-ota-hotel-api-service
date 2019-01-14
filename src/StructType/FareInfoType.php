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
     * - documentation: FareReferenceCode can be used for either the Fare Basis Code or the Fare Class Code.
     * @var mixed
     */
    public $FareReference;
    /**
     * The RuleInfo
     * Meta informations extracted from the WSDL
     * - documentation: Information regarding restrictions governing use of the fare.
     * @var mixed
     */
    public $RuleInfo;
    /**
     * The FilingAirline
     * Meta informations extracted from the WSDL
     * - documentation: The airline that filed the fare(s).
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
     * @var mixed
     */
    public $DepartureAirport;
    /**
     * The ArrivalAirport
     * Meta informations extracted from the WSDL
     * - documentation: Arrival point of flight segment.
     * @var mixed
     */
    public $ArrivalAirport;
    /**
     * Constructor method for FareInfoType
     * @uses FareInfoType::setDepartureDate()
     * @uses FareInfoType::setFareReference()
     * @uses FareInfoType::setRuleInfo()
     * @uses FareInfoType::setFilingAirline()
     * @uses FareInfoType::setMarketingAirline()
     * @uses FareInfoType::setDepartureAirport()
     * @uses FareInfoType::setArrivalAirport()
     * @param string $departureDate
     * @param mixed $fareReference
     * @param mixed $ruleInfo
     * @param mixed $filingAirline
     * @param mixed[] $marketingAirline
     * @param mixed $departureAirport
     * @param mixed $arrivalAirport
     */
    public function __construct($departureDate = null, $fareReference = null, $ruleInfo = null, $filingAirline = null, array $marketingAirline = array(), $departureAirport = null, $arrivalAirport = null)
    {
        $this
            ->setDepartureDate($departureDate)
            ->setFareReference($fareReference)
            ->setRuleInfo($ruleInfo)
            ->setFilingAirline($filingAirline)
            ->setMarketingAirline($marketingAirline)
            ->setDepartureAirport($departureAirport)
            ->setArrivalAirport($arrivalAirport);
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
     * @return mixed|null
     */
    public function getFareReference()
    {
        return $this->FareReference;
    }
    /**
     * Set FareReference value
     * @param mixed $fareReference
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setFareReference($fareReference = null)
    {
        $this->FareReference = $fareReference;
        return $this;
    }
    /**
     * Get RuleInfo value
     * @return mixed|null
     */
    public function getRuleInfo()
    {
        return $this->RuleInfo;
    }
    /**
     * Set RuleInfo value
     * @param mixed $ruleInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfoType
     */
    public function setRuleInfo($ruleInfo = null)
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
