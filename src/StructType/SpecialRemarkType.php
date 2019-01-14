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
     * - use: required
     * @var string
     */
    public $RemarkType;
    /**
     * The TravelerRefNumber
     * Meta informations extracted from the WSDL
     * - documentation: One or more travelers to whom this request applies
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $TravelerRefNumber;
    /**
     * The FlightRefNumber
     * Meta informations extracted from the WSDL
     * - documentation: One or more flights to whom this request applies
     * - maxOccurs: 10
     * - minOccurs: 0
     * @var mixed[]
     */
    public $FlightRefNumber;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: Text associated with remark
     * @var mixed
     */
    public $Text;
    /**
     * Constructor method for SpecialRemarkType
     * @uses SpecialRemarkType::setRemarkType()
     * @uses SpecialRemarkType::setTravelerRefNumber()
     * @uses SpecialRemarkType::setFlightRefNumber()
     * @uses SpecialRemarkType::setText()
     * @param string $remarkType
     * @param mixed[] $travelerRefNumber
     * @param mixed[] $flightRefNumber
     * @param mixed $text
     */
    public function __construct($remarkType = null, array $travelerRefNumber = array(), array $flightRefNumber = array(), $text = null)
    {
        $this
            ->setRemarkType($remarkType)
            ->setTravelerRefNumber($travelerRefNumber)
            ->setFlightRefNumber($flightRefNumber)
            ->setText($text);
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
     * @return mixed[]|null
     */
    public function getTravelerRefNumber()
    {
        return $this->TravelerRefNumber;
    }
    /**
     * Set TravelerRefNumber value
     * @throws \InvalidArgumentException
     * @param mixed[] $travelerRefNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarkType
     */
    public function setTravelerRefNumber(array $travelerRefNumber = array())
    {
        foreach ($travelerRefNumber as $specialRemarkTypeTravelerRefNumberItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The TravelerRefNumber property can only contain items of anyType, "%s" given', is_object($specialRemarkTypeTravelerRefNumberItem) ? get_class($specialRemarkTypeTravelerRefNumberItem) : gettype($specialRemarkTypeTravelerRefNumberItem)), __LINE__);
            }
        }
        $this->TravelerRefNumber = $travelerRefNumber;
        return $this;
    }
    /**
     * Add item to TravelerRefNumber value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarkType
     */
    public function addToTravelerRefNumber($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The TravelerRefNumber property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TravelerRefNumber[] = $item;
        return $this;
    }
    /**
     * Get FlightRefNumber value
     * @return mixed[]|null
     */
    public function getFlightRefNumber()
    {
        return $this->FlightRefNumber;
    }
    /**
     * Set FlightRefNumber value
     * @throws \InvalidArgumentException
     * @param mixed[] $flightRefNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarkType
     */
    public function setFlightRefNumber(array $flightRefNumber = array())
    {
        foreach ($flightRefNumber as $specialRemarkTypeFlightRefNumberItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The FlightRefNumber property can only contain items of anyType, "%s" given', is_object($specialRemarkTypeFlightRefNumberItem) ? get_class($specialRemarkTypeFlightRefNumberItem) : gettype($specialRemarkTypeFlightRefNumberItem)), __LINE__);
            }
        }
        $this->FlightRefNumber = $flightRefNumber;
        return $this;
    }
    /**
     * Add item to FlightRefNumber value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarkType
     */
    public function addToFlightRefNumber($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The FlightRefNumber property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FlightRefNumber[] = $item;
        return $this;
    }
    /**
     * Get Text value
     * @return mixed|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param mixed $text
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarkType
     */
    public function setText($text = null)
    {
        $this->Text = $text;
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
