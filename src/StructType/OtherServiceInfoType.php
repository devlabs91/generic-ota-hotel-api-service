<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OtherServiceInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Other Service Information (OSI) for relevant airlines
 * @subpackage Structs
 */
class OtherServiceInfoType extends AbstractStructBase
{
    /**
     * The TravelerRefNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber[]
     */
    public $TravelerRefNumber;
    /**
     * The Airline
     * Meta informations extracted from the WSDL
     * - documentation: The airline to which the OSI applies. When applicable to all airlines or an unknown airline use Code="YY".
     * @var mixed
     */
    public $Airline;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: The OSI text.
     * @var mixed
     */
    public $Text;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: A proprietary code used between systems to identify an Other Service Information (OSI) item.
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * Constructor method for OtherServiceInfoType
     * @uses OtherServiceInfoType::setTravelerRefNumber()
     * @uses OtherServiceInfoType::setAirline()
     * @uses OtherServiceInfoType::setText()
     * @uses OtherServiceInfoType::setCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber[] $travelerRefNumber
     * @param mixed $airline
     * @param mixed $text
     * @param string $code
     */
    public function __construct(array $travelerRefNumber = array(), $airline = null, $text = null, $code = null)
    {
        $this
            ->setTravelerRefNumber($travelerRefNumber)
            ->setAirline($airline)
            ->setText($text)
            ->setCode($code);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInfoType
     */
    public function setTravelerRefNumber(array $travelerRefNumber = array())
    {
        foreach ($travelerRefNumber as $otherServiceInfoTypeTravelerRefNumberItem) {
            // validation for constraint: itemType
            if (!$otherServiceInfoTypeTravelerRefNumberItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber) {
                throw new \InvalidArgumentException(sprintf('The TravelerRefNumber property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber, "%s" given', is_object($otherServiceInfoTypeTravelerRefNumberItem) ? get_class($otherServiceInfoTypeTravelerRefNumberItem) : gettype($otherServiceInfoTypeTravelerRefNumberItem)), __LINE__);
            }
        }
        $this->TravelerRefNumber = $travelerRefNumber;
        return $this;
    }
    /**
     * Add item to TravelerRefNumber value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\TravelerRefNumber $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInfoType
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
     * Get Airline value
     * @return mixed|null
     */
    public function getAirline()
    {
        return $this->Airline;
    }
    /**
     * Set Airline value
     * @param mixed $airline
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInfoType
     */
    public function setAirline($airline = null)
    {
        $this->Airline = $airline;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInfoType
     */
    public function setText($text = null)
    {
        $this->Text = $text;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInfoType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInfoType
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
