<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides information regarding the guest name and the guest's mode of transportation. | Provides information about the guest.
 * @subpackage Structs
 */
class GuestType extends AbstractStructBase
{
    /**
     * The GuestName
     * Meta informations extracted from the WSDL
     * - documentation: Name of the guest.
     * - minOccurs: 0
     * @var mixed
     */
    public $GuestName;
    /**
     * The GuestTransportation
     * Meta informations extracted from the WSDL
     * - documentation: Selected guest mode of transportation.
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var mixed[]
     */
    public $GuestTransportation;
    /**
     * Constructor method for GuestType
     * @uses GuestType::setGuestName()
     * @uses GuestType::setGuestTransportation()
     * @param mixed $guestName
     * @param mixed[] $guestTransportation
     */
    public function __construct($guestName = null, array $guestTransportation = array())
    {
        $this
            ->setGuestName($guestName)
            ->setGuestTransportation($guestTransportation);
    }
    /**
     * Get GuestName value
     * @return mixed|null
     */
    public function getGuestName()
    {
        return $this->GuestName;
    }
    /**
     * Set GuestName value
     * @param mixed $guestName
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestType
     */
    public function setGuestName($guestName = null)
    {
        $this->GuestName = $guestName;
        return $this;
    }
    /**
     * Get GuestTransportation value
     * @return mixed[]|null
     */
    public function getGuestTransportation()
    {
        return $this->GuestTransportation;
    }
    /**
     * Set GuestTransportation value
     * @throws \InvalidArgumentException
     * @param mixed[] $guestTransportation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestType
     */
    public function setGuestTransportation(array $guestTransportation = array())
    {
        foreach ($guestTransportation as $guestTypeGuestTransportationItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The GuestTransportation property can only contain items of anyType, "%s" given', is_object($guestTypeGuestTransportationItem) ? get_class($guestTypeGuestTransportationItem) : gettype($guestTypeGuestTransportationItem)), __LINE__);
            }
        }
        $this->GuestTransportation = $guestTransportation;
        return $this;
    }
    /**
     * Add item to GuestTransportation value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestType
     */
    public function addToGuestTransportation($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The GuestTransportation property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuestTransportation[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestType
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
