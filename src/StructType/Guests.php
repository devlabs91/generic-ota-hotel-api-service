<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Guests StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Guest.
 * @subpackage Structs
 */
class Guests extends AbstractStructBase
{
    /**
     * The Guest
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Guest[]
     */
    public $Guest;
    /**
     * Constructor method for Guests
     * @uses Guests::setGuest()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Guest[] $guest
     */
    public function __construct(array $guest = array())
    {
        $this
            ->setGuest($guest);
    }
    /**
     * Get Guest value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Guest[]|null
     */
    public function getGuest()
    {
        return $this->Guest;
    }
    /**
     * Set Guest value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Guest[] $guest
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Guests
     */
    public function setGuest(array $guest = array())
    {
        foreach ($guest as $guestsGuestItem) {
            // validation for constraint: itemType
            if (!$guestsGuestItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Guest) {
                throw new \InvalidArgumentException(sprintf('The Guest property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Guest, "%s" given', is_object($guestsGuestItem) ? get_class($guestsGuestItem) : gettype($guestsGuestItem)), __LINE__);
            }
        }
        $this->Guest = $guest;
        return $this;
    }
    /**
     * Add item to Guest value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Guest $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Guests
     */
    public function addToGuest(\Devlabs91\GenericOtaHotelApiService\StructType\Guest $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Guest) {
            throw new \InvalidArgumentException(sprintf('The Guest property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Guest, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Guest[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Guests
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
