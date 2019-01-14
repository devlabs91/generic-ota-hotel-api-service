<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LinkedBookings StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of linked bookings.
 * @subpackage Structs
 */
class LinkedBookings extends AbstractStructBase
{
    /**
     * The LinkedBooking
     * Meta informations extracted from the WSDL
     * - maxOccurs: 32
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBooking[]
     */
    public $LinkedBooking;
    /**
     * Constructor method for LinkedBookings
     * @uses LinkedBookings::setLinkedBooking()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBooking[] $linkedBooking
     */
    public function __construct(array $linkedBooking = array())
    {
        $this
            ->setLinkedBooking($linkedBooking);
    }
    /**
     * Get LinkedBooking value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBooking[]|null
     */
    public function getLinkedBooking()
    {
        return $this->LinkedBooking;
    }
    /**
     * Set LinkedBooking value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBooking[] $linkedBooking
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBookings
     */
    public function setLinkedBooking(array $linkedBooking = array())
    {
        foreach ($linkedBooking as $linkedBookingsLinkedBookingItem) {
            // validation for constraint: itemType
            if (!$linkedBookingsLinkedBookingItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBooking) {
                throw new \InvalidArgumentException(sprintf('The LinkedBooking property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBooking, "%s" given', is_object($linkedBookingsLinkedBookingItem) ? get_class($linkedBookingsLinkedBookingItem) : gettype($linkedBookingsLinkedBookingItem)), __LINE__);
            }
        }
        $this->LinkedBooking = $linkedBooking;
        return $this;
    }
    /**
     * Add item to LinkedBooking value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBooking $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBookings
     */
    public function addToLinkedBooking(\Devlabs91\GenericOtaHotelApiService\StructType\LinkedBooking $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBooking) {
            throw new \InvalidArgumentException(sprintf('The LinkedBooking property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBooking, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LinkedBooking[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LinkedBookings
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
