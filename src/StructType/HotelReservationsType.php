<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelReservationsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of hotel reservations.
 * @subpackage Structs
 */
class HotelReservationsType extends AbstractStructBase
{
    /**
     * The HotelReservation
     * Meta informations extracted from the WSDL
     * - documentation: The Reservation class contains the current reservation being created or altered.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $HotelReservation;
    /**
     * The RoutingHops
     * Meta informations extracted from the WSDL
     * - documentation: A collection of routing hops.
     * - minOccurs: 0
     * @var mixed
     */
    public $RoutingHops;
    /**
     * The WrittenConfInst
     * Meta informations extracted from the WSDL
     * - documentation: To indicate a confirmation is to be sent for this batch of reservations.
     * - minOccurs: 0
     * @var mixed
     */
    public $WrittenConfInst;
    /**
     * Constructor method for HotelReservationsType
     * @uses HotelReservationsType::setHotelReservation()
     * @uses HotelReservationsType::setRoutingHops()
     * @uses HotelReservationsType::setWrittenConfInst()
     * @param mixed[] $hotelReservation
     * @param mixed $routingHops
     * @param mixed $writtenConfInst
     */
    public function __construct(array $hotelReservation = array(), $routingHops = null, $writtenConfInst = null)
    {
        $this
            ->setHotelReservation($hotelReservation)
            ->setRoutingHops($routingHops)
            ->setWrittenConfInst($writtenConfInst);
    }
    /**
     * Get HotelReservation value
     * @return mixed[]|null
     */
    public function getHotelReservation()
    {
        return $this->HotelReservation;
    }
    /**
     * Set HotelReservation value
     * @throws \InvalidArgumentException
     * @param mixed[] $hotelReservation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationsType
     */
    public function setHotelReservation(array $hotelReservation = array())
    {
        foreach ($hotelReservation as $hotelReservationsTypeHotelReservationItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The HotelReservation property can only contain items of anyType, "%s" given', is_object($hotelReservationsTypeHotelReservationItem) ? get_class($hotelReservationsTypeHotelReservationItem) : gettype($hotelReservationsTypeHotelReservationItem)), __LINE__);
            }
        }
        $this->HotelReservation = $hotelReservation;
        return $this;
    }
    /**
     * Add item to HotelReservation value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationsType
     */
    public function addToHotelReservation($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The HotelReservation property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelReservation[] = $item;
        return $this;
    }
    /**
     * Get RoutingHops value
     * @return mixed|null
     */
    public function getRoutingHops()
    {
        return $this->RoutingHops;
    }
    /**
     * Set RoutingHops value
     * @param mixed $routingHops
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationsType
     */
    public function setRoutingHops($routingHops = null)
    {
        $this->RoutingHops = $routingHops;
        return $this;
    }
    /**
     * Get WrittenConfInst value
     * @return mixed|null
     */
    public function getWrittenConfInst()
    {
        return $this->WrittenConfInst;
    }
    /**
     * Set WrittenConfInst value
     * @param mixed $writtenConfInst
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationsType
     */
    public function setWrittenConfInst($writtenConfInst = null)
    {
        $this->WrittenConfInst = $writtenConfInst;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelReservationsType
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
