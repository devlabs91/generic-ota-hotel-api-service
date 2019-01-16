<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialRemarkType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Itinerary Remarks, Invoice Remarks, etc.
 * @subpackage Structs
 */
class SpecialRemarkType extends AbstractStructBase
{
    /**
     * The RemarkType
     * Meta informations extracted from the WSDL
     * - documentation: Type of special remark used (e.g., itinerary remark, invoice remark). Refer to OpenTravel Code List Special Remark Option Type (SRO).
     * - use: required
     * @var string
     */
    public $RemarkType;
    /**
     * The TravelerRefNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber[]
     */
    public $TravelerRefNumber;
    /**
     * The FlightRefNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FlightRefNumber[]
     */
    public $FlightRefNumber;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: Text associated with remark
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The Airline
     * Meta informations extracted from the WSDL
     * - documentation: Denotes the receiver (or target) airline(s) for the remark.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Airline;
    /**
     * The AuthorizedViewers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewers
     */
    public $AuthorizedViewers;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - documentation: Used to further define the remark type.
     * - use: optional
     * @var string
     */
    public $ID;
    /**
     * Constructor method for SpecialRemarkType
     * @uses SpecialRemarkType::setRemarkType()
     * @uses SpecialRemarkType::setTravelerRefNumber()
     * @uses SpecialRemarkType::setFlightRefNumber()
     * @uses SpecialRemarkType::setText()
     * @uses SpecialRemarkType::setAirline()
     * @uses SpecialRemarkType::setAuthorizedViewers()
     * @uses SpecialRemarkType::setID()
     * @param string $remarkType
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber[] $travelerRefNumber
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FlightRefNumber[] $flightRefNumber
     * @param string $text
     * @param mixed[] $airline
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewers $authorizedViewers
     * @param string $iD
     */
    public function __construct($remarkType = null, array $travelerRefNumber = array(), array $flightRefNumber = array(), $text = null, array $airline = array(), \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewers $authorizedViewers = null, $iD = null)
    {
        $this
            ->setRemarkType($remarkType)
            ->setTravelerRefNumber($travelerRefNumber)
            ->setFlightRefNumber($flightRefNumber)
            ->setText($text)
            ->setAirline($airline)
            ->setAuthorizedViewers($authorizedViewers)
            ->setID($iD);
    }
    /**
     * Get RemarkType value
     * @return string
     */
    public function getRemarkType()
    {
        return $this->RemarkType;
    }
    /**
     * Set RemarkType value
     * @param string $remarkType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarkType
     */
    public function setRemarkType($remarkType = null)
    {
        // validation for constraint: string
        if (!is_null($remarkType) && !is_string($remarkType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remarkType)), __LINE__);
        }
        $this->RemarkType = $remarkType;
        return $this;
    }
    /**
     * Get TravelerRefNumber value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber[]|null
     */
    public function getTravelerRefNumber()
    {
        return $this->TravelerRefNumber;
    }
    /**
     * Set TravelerRefNumber value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber[] $travelerRefNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarkType
     */
    public function setTravelerRefNumber(array $travelerRefNumber = array())
    {
        foreach ($travelerRefNumber as $specialRemarkTypeTravelerRefNumberItem) {
            // validation for constraint: itemType
            if (!$specialRemarkTypeTravelerRefNumberItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber) {
                throw new \InvalidArgumentException(sprintf('The TravelerRefNumber property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber, "%s" given', is_object($specialRemarkTypeTravelerRefNumberItem) ? get_class($specialRemarkTypeTravelerRefNumberItem) : gettype($specialRemarkTypeTravelerRefNumberItem)), __LINE__);
            }
        }
        $this->TravelerRefNumber = $travelerRefNumber;
        return $this;
    }
    /**
     * Add item to TravelerRefNumber value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarkType
     */
    public function addToTravelerRefNumber(\Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber) {
            throw new \InvalidArgumentException(sprintf('The TravelerRefNumber property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TravelerRefNumber[] = $item;
        return $this;
    }
    /**
     * Get FlightRefNumber value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FlightRefNumber[]|null
     */
    public function getFlightRefNumber()
    {
        return $this->FlightRefNumber;
    }
    /**
     * Set FlightRefNumber value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FlightRefNumber[] $flightRefNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarkType
     */
    public function setFlightRefNumber(array $flightRefNumber = array())
    {
        foreach ($flightRefNumber as $specialRemarkTypeFlightRefNumberItem) {
            // validation for constraint: itemType
            if (!$specialRemarkTypeFlightRefNumberItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FlightRefNumber) {
                throw new \InvalidArgumentException(sprintf('The FlightRefNumber property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FlightRefNumber, "%s" given', is_object($specialRemarkTypeFlightRefNumberItem) ? get_class($specialRemarkTypeFlightRefNumberItem) : gettype($specialRemarkTypeFlightRefNumberItem)), __LINE__);
            }
        }
        $this->FlightRefNumber = $flightRefNumber;
        return $this;
    }
    /**
     * Add item to FlightRefNumber value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FlightRefNumber $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarkType
     */
    public function addToFlightRefNumber(\Devlabs91\GenericOtaHotelApiService\StructType\FlightRefNumber $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FlightRefNumber) {
            throw new \InvalidArgumentException(sprintf('The FlightRefNumber property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FlightRefNumber, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightRefNumber[] = $item;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarkType
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get Airline value
     * @return mixed[]|null
     */
    public function getAirline()
    {
        return $this->Airline;
    }
    /**
     * Set Airline value
     * @throws \InvalidArgumentException
     * @param mixed[] $airline
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarkType
     */
    public function setAirline(array $airline = array())
    {
        foreach ($airline as $specialRemarkTypeAirlineItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Airline property can only contain items of anyType, "%s" given', is_object($specialRemarkTypeAirlineItem) ? get_class($specialRemarkTypeAirlineItem) : gettype($specialRemarkTypeAirlineItem)), __LINE__);
            }
        }
        $this->Airline = $airline;
        return $this;
    }
    /**
     * Add item to Airline value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarkType
     */
    public function addToAirline($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Airline property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Airline[] = $item;
        return $this;
    }
    /**
     * Get AuthorizedViewers value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewers|null
     */
    public function getAuthorizedViewers()
    {
        return $this->AuthorizedViewers;
    }
    /**
     * Set AuthorizedViewers value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewers $authorizedViewers
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarkType
     */
    public function setAuthorizedViewers(\Devlabs91\GenericOtaHotelApiService\StructType\AuthorizedViewers $authorizedViewers = null)
    {
        $this->AuthorizedViewers = $authorizedViewers;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarkType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarkType
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
