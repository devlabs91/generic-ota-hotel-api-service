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
     * - documentation: One or more travelers to whom this request applies
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $TravelerRefNumber;
    /**
     * The Airline
     * Meta informations extracted from the WSDL
     * - documentation: Specify airline to request availability for.
     * @var mixed
     */
    public $Airline;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: Text associated with remark
     * @var mixed
     */
    public $Text;
    /**
     * Constructor method for OtherServiceInfoType
     * @uses OtherServiceInfoType::setTravelerRefNumber()
     * @uses OtherServiceInfoType::setAirline()
     * @uses OtherServiceInfoType::setText()
     * @param mixed[] $travelerRefNumber
     * @param mixed $airline
     * @param mixed $text
     */
    public function __construct(array $travelerRefNumber = array(), $airline = null, $text = null)
    {
        $this
            ->setTravelerRefNumber($travelerRefNumber)
            ->setAirline($airline)
            ->setText($text);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInfoType
     */
    public function setTravelerRefNumber(array $travelerRefNumber = array())
    {
        foreach ($travelerRefNumber as $otherServiceInfoTypeTravelerRefNumberItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The TravelerRefNumber property can only contain items of anyType, "%s" given', is_object($otherServiceInfoTypeTravelerRefNumberItem) ? get_class($otherServiceInfoTypeTravelerRefNumberItem) : gettype($otherServiceInfoTypeTravelerRefNumberItem)), __LINE__);
            }
        }
        $this->TravelerRefNumber = $travelerRefNumber;
        return $this;
    }
    /**
     * Add item to TravelerRefNumber value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OtherServiceInfoType
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
