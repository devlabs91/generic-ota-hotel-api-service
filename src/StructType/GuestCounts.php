<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestCounts StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Guest Counts associated with the room rate.
 * @subpackage Structs
 */
class GuestCounts extends AbstractStructBase
{
    /**
     * The GuestCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount[]
     */
    public $GuestCount;
    /**
     * Constructor method for GuestCounts
     * @uses GuestCounts::setGuestCount()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount[] $guestCount
     */
    public function __construct(array $guestCount = array())
    {
        $this
            ->setGuestCount($guestCount);
    }
    /**
     * Get GuestCount value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount[]|null
     */
    public function getGuestCount()
    {
        return $this->GuestCount;
    }
    /**
     * Set GuestCount value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount[] $guestCount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestCounts
     */
    public function setGuestCount(array $guestCount = array())
    {
        foreach ($guestCount as $guestCountsGuestCountItem) {
            // validation for constraint: itemType
            if (!$guestCountsGuestCountItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount) {
                throw new \InvalidArgumentException(sprintf('The GuestCount property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount, "%s" given', is_object($guestCountsGuestCountItem) ? get_class($guestCountsGuestCountItem) : gettype($guestCountsGuestCountItem)), __LINE__);
            }
        }
        $this->GuestCount = $guestCount;
        return $this;
    }
    /**
     * Add item to GuestCount value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestCounts
     */
    public function addToGuestCount(\Devlabs91\GenericOtaHotelApiService\StructType\GuestCount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount) {
            throw new \InvalidArgumentException(sprintf('The GuestCount property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GuestCount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuestCount[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestCounts
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
