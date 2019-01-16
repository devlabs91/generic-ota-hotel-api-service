<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingClassAvails StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of availability counts per booking class.
 * @subpackage Structs
 */
class BookingClassAvails extends AbstractStructBase
{
    /**
     * The BookingClassAvail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 26
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvail[]
     */
    public $BookingClassAvail;
    /**
     * The CabinType
     * Meta informations extracted from the WSDL
     * - documentation: Marketing name as defined by an airline for the first, business or economy cabin.
     * - use: optional
     * @var string
     */
    public $CabinType;
    /**
     * Constructor method for BookingClassAvails
     * @uses BookingClassAvails::setBookingClassAvail()
     * @uses BookingClassAvails::setCabinType()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvail[] $bookingClassAvail
     * @param string $cabinType
     */
    public function __construct(array $bookingClassAvail = array(), $cabinType = null)
    {
        $this
            ->setBookingClassAvail($bookingClassAvail)
            ->setCabinType($cabinType);
    }
    /**
     * Get BookingClassAvail value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvail[]|null
     */
    public function getBookingClassAvail()
    {
        return $this->BookingClassAvail;
    }
    /**
     * Set BookingClassAvail value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvail[] $bookingClassAvail
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvails
     */
    public function setBookingClassAvail(array $bookingClassAvail = array())
    {
        foreach ($bookingClassAvail as $bookingClassAvailsBookingClassAvailItem) {
            // validation for constraint: itemType
            if (!$bookingClassAvailsBookingClassAvailItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvail) {
                throw new \InvalidArgumentException(sprintf('The BookingClassAvail property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvail, "%s" given', is_object($bookingClassAvailsBookingClassAvailItem) ? get_class($bookingClassAvailsBookingClassAvailItem) : gettype($bookingClassAvailsBookingClassAvailItem)), __LINE__);
            }
        }
        $this->BookingClassAvail = $bookingClassAvail;
        return $this;
    }
    /**
     * Add item to BookingClassAvail value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvail $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvails
     */
    public function addToBookingClassAvail(\Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvail) {
            throw new \InvalidArgumentException(sprintf('The BookingClassAvail property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BookingClassAvail[] = $item;
        return $this;
    }
    /**
     * Get CabinType value
     * @return string|null
     */
    public function getCabinType()
    {
        return $this->CabinType;
    }
    /**
     * Set CabinType value
     * @param string $cabinType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvails
     */
    public function setCabinType($cabinType = null)
    {
        // validation for constraint: string
        if (!is_null($cabinType) && !is_string($cabinType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cabinType)), __LINE__);
        }
        $this->CabinType = $cabinType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BookingClassAvails
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
