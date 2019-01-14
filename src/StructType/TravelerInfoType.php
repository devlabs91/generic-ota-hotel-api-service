<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies passenger(s) who will travel on the reservation.
 * @subpackage Structs
 */
class TravelerInfoType extends AbstractStructBase
{
    /**
     * The AirTraveler
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var mixed[]
     */
    public $AirTraveler;
    /**
     * The SpecialReqDetails
     * Meta informations extracted from the WSDL
     * - documentation: Provides detailed information regarding any special needs, requests, or remarks associated with the traveler
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var mixed[]
     */
    public $SpecialReqDetails;
    /**
     * Constructor method for TravelerInfoType
     * @uses TravelerInfoType::setAirTraveler()
     * @uses TravelerInfoType::setSpecialReqDetails()
     * @param mixed[] $airTraveler
     * @param mixed[] $specialReqDetails
     */
    public function __construct(array $airTraveler = array(), array $specialReqDetails = array())
    {
        $this
            ->setAirTraveler($airTraveler)
            ->setSpecialReqDetails($specialReqDetails);
    }
    /**
     * Get AirTraveler value
     * @return mixed[]|null
     */
    public function getAirTraveler()
    {
        return $this->AirTraveler;
    }
    /**
     * Set AirTraveler value
     * @throws \InvalidArgumentException
     * @param mixed[] $airTraveler
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerInfoType
     */
    public function setAirTraveler(array $airTraveler = array())
    {
        foreach ($airTraveler as $travelerInfoTypeAirTravelerItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The AirTraveler property can only contain items of anyType, "%s" given', is_object($travelerInfoTypeAirTravelerItem) ? get_class($travelerInfoTypeAirTravelerItem) : gettype($travelerInfoTypeAirTravelerItem)), __LINE__);
            }
        }
        $this->AirTraveler = $airTraveler;
        return $this;
    }
    /**
     * Add item to AirTraveler value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerInfoType
     */
    public function addToAirTraveler($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The AirTraveler property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AirTraveler[] = $item;
        return $this;
    }
    /**
     * Get SpecialReqDetails value
     * @return mixed[]|null
     */
    public function getSpecialReqDetails()
    {
        return $this->SpecialReqDetails;
    }
    /**
     * Set SpecialReqDetails value
     * @throws \InvalidArgumentException
     * @param mixed[] $specialReqDetails
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerInfoType
     */
    public function setSpecialReqDetails(array $specialReqDetails = array())
    {
        foreach ($specialReqDetails as $travelerInfoTypeSpecialReqDetailsItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SpecialReqDetails property can only contain items of anyType, "%s" given', is_object($travelerInfoTypeSpecialReqDetailsItem) ? get_class($travelerInfoTypeSpecialReqDetailsItem) : gettype($travelerInfoTypeSpecialReqDetailsItem)), __LINE__);
            }
        }
        $this->SpecialReqDetails = $specialReqDetails;
        return $this;
    }
    /**
     * Add item to SpecialReqDetails value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerInfoType
     */
    public function addToSpecialReqDetails($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SpecialReqDetails property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialReqDetails[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerInfoType
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
