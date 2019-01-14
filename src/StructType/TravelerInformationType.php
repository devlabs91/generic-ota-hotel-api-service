<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerInformationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specify passenger numbers and types
 * @subpackage Structs
 */
class TravelerInformationType extends AbstractStructBase
{
    /**
     * The PassengerTypeQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Specify number of passengers using Passenger Type Codes
     * - maxOccurs: 10
     * @var mixed[]
     */
    public $PassengerTypeQuantity;
    /**
     * The AirTraveler
     * Meta informations extracted from the WSDL
     * - documentation: Information profiling the person traveling Gender - the gender of the customer, if needed BirthDate - Date of Birth Currency - the preferred currency in which monetary amounts should be returned.
     * - minOccurs: 0
     * @var mixed
     */
    public $AirTraveler;
    /**
     * Constructor method for TravelerInformationType
     * @uses TravelerInformationType::setPassengerTypeQuantity()
     * @uses TravelerInformationType::setAirTraveler()
     * @param mixed[] $passengerTypeQuantity
     * @param mixed $airTraveler
     */
    public function __construct(array $passengerTypeQuantity = array(), $airTraveler = null)
    {
        $this
            ->setPassengerTypeQuantity($passengerTypeQuantity)
            ->setAirTraveler($airTraveler);
    }
    /**
     * Get PassengerTypeQuantity value
     * @return mixed[]|null
     */
    public function getPassengerTypeQuantity()
    {
        return $this->PassengerTypeQuantity;
    }
    /**
     * Set PassengerTypeQuantity value
     * @throws \InvalidArgumentException
     * @param mixed[] $passengerTypeQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerInformationType
     */
    public function setPassengerTypeQuantity(array $passengerTypeQuantity = array())
    {
        foreach ($passengerTypeQuantity as $travelerInformationTypePassengerTypeQuantityItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PassengerTypeQuantity property can only contain items of anyType, "%s" given', is_object($travelerInformationTypePassengerTypeQuantityItem) ? get_class($travelerInformationTypePassengerTypeQuantityItem) : gettype($travelerInformationTypePassengerTypeQuantityItem)), __LINE__);
            }
        }
        $this->PassengerTypeQuantity = $passengerTypeQuantity;
        return $this;
    }
    /**
     * Add item to PassengerTypeQuantity value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerInformationType
     */
    public function addToPassengerTypeQuantity($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PassengerTypeQuantity property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PassengerTypeQuantity[] = $item;
        return $this;
    }
    /**
     * Get AirTraveler value
     * @return mixed|null
     */
    public function getAirTraveler()
    {
        return $this->AirTraveler;
    }
    /**
     * Set AirTraveler value
     * @param mixed $airTraveler
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerInformationType
     */
    public function setAirTraveler($airTraveler = null)
    {
        $this->AirTraveler = $airTraveler;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TravelerInformationType
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
