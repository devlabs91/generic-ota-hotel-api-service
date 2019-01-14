<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AvailableSeats StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of seat availability by class.
 * @subpackage Structs
 */
class AvailableSeats extends AbstractStructBase
{
    /**
     * The SeatAvailability
     * Meta informations extracted from the WSDL
     * - maxOccurs: 26
     * @var mixed[]
     */
    public $SeatAvailability;
    /**
     * Constructor method for AvailableSeats
     * @uses AvailableSeats::setSeatAvailability()
     * @param mixed[] $seatAvailability
     */
    public function __construct(array $seatAvailability = array())
    {
        $this
            ->setSeatAvailability($seatAvailability);
    }
    /**
     * Get SeatAvailability value
     * @return mixed[]|null
     */
    public function getSeatAvailability()
    {
        return $this->SeatAvailability;
    }
    /**
     * Set SeatAvailability value
     * @throws \InvalidArgumentException
     * @param mixed[] $seatAvailability
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableSeats
     */
    public function setSeatAvailability(array $seatAvailability = array())
    {
        foreach ($seatAvailability as $availableSeatsSeatAvailabilityItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SeatAvailability property can only contain items of anyType, "%s" given', is_object($availableSeatsSeatAvailabilityItem) ? get_class($availableSeatsSeatAvailabilityItem) : gettype($availableSeatsSeatAvailabilityItem)), __LINE__);
            }
        }
        $this->SeatAvailability = $seatAvailability;
        return $this;
    }
    /**
     * Add item to SeatAvailability value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableSeats
     */
    public function addToSeatAvailability($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SeatAvailability property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SeatAvailability[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AvailableSeats
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
