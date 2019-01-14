<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomRates StructType
 * Meta informations extracted from the WSDL
 * - documentation: Reservation rate(s). | A collection of Room Rates associated with a particular Room Stay. Each Room Rate combination can have multiple rates. Example King room, Rack rate plan, Monday through Thrusday, weekday amount, Friday and
 * Saturday, weekend amount. | The combination of a given Rate Plan and Room Type. This allows for support for systems where Rate Plans are child of Room Type as well as systems which Room Types are child of Rate Plans.
 * @subpackage Structs
 */
class RoomRates extends AbstractStructBase
{
    /**
     * The RoomRate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $RoomRate;
    /**
     * Constructor method for RoomRates
     * @uses RoomRates::setRoomRate()
     * @param mixed[] $roomRate
     */
    public function __construct(array $roomRate = array())
    {
        $this
            ->setRoomRate($roomRate);
    }
    /**
     * Get RoomRate value
     * @return mixed[]|null
     */
    public function getRoomRate()
    {
        return $this->RoomRate;
    }
    /**
     * Set RoomRate value
     * @throws \InvalidArgumentException
     * @param mixed[] $roomRate
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRates
     */
    public function setRoomRate(array $roomRate = array())
    {
        foreach ($roomRate as $roomRatesRoomRateItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The RoomRate property can only contain items of anyType, "%s" given', is_object($roomRatesRoomRateItem) ? get_class($roomRatesRoomRateItem) : gettype($roomRatesRoomRateItem)), __LINE__);
            }
        }
        $this->RoomRate = $roomRate;
        return $this;
    }
    /**
     * Add item to RoomRate value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRates
     */
    public function addToRoomRate($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The RoomRate property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoomRate[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRates
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
