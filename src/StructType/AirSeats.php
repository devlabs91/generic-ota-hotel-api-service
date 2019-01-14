<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSeats StructType
 * Meta informations extracted from the WSDL
 * - documentation: A Collection of Air Seat
 * @subpackage Structs
 */
class AirSeats extends AbstractStructBase
{
    /**
     * The AirSeat
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AirSeat[]
     */
    public $AirSeat;
    /**
     * Constructor method for AirSeats
     * @uses AirSeats::setAirSeat()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AirSeat[] $airSeat
     */
    public function __construct(array $airSeat = array())
    {
        $this
            ->setAirSeat($airSeat);
    }
    /**
     * Get AirSeat value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSeat[]|null
     */
    public function getAirSeat()
    {
        return $this->AirSeat;
    }
    /**
     * Set AirSeat value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AirSeat[] $airSeat
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSeats
     */
    public function setAirSeat(array $airSeat = array())
    {
        foreach ($airSeat as $airSeatsAirSeatItem) {
            // validation for constraint: itemType
            if (!$airSeatsAirSeatItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AirSeat) {
                throw new \InvalidArgumentException(sprintf('The AirSeat property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AirSeat, "%s" given', is_object($airSeatsAirSeatItem) ? get_class($airSeatsAirSeatItem) : gettype($airSeatsAirSeatItem)), __LINE__);
            }
        }
        $this->AirSeat = $airSeat;
        return $this;
    }
    /**
     * Add item to AirSeat value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AirSeat $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSeats
     */
    public function addToAirSeat(\Devlabs91\GenericOtaHotelApiService\StructType\AirSeat $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\AirSeat) {
            throw new \InvalidArgumentException(sprintf('The AirSeat property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\AirSeat, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AirSeat[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AirSeats
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
