<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestRPHs StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of Guest RPH items.
 * @subpackage Structs
 */
class GuestRPHs extends AbstractStructBase
{
    /**
     * The GuestRPH
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\GuestRPH[]
     */
    public $GuestRPH;
    /**
     * Constructor method for GuestRPHs
     * @uses GuestRPHs::setGuestRPH()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestRPH[] $guestRPH
     */
    public function __construct(array $guestRPH = array())
    {
        $this
            ->setGuestRPH($guestRPH);
    }
    /**
     * Get GuestRPH value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRPH[]|null
     */
    public function getGuestRPH()
    {
        return $this->GuestRPH;
    }
    /**
     * Set GuestRPH value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestRPH[] $guestRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRPHs
     */
    public function setGuestRPH(array $guestRPH = array())
    {
        foreach ($guestRPH as $guestRPHsGuestRPHItem) {
            // validation for constraint: itemType
            if (!$guestRPHsGuestRPHItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GuestRPH) {
                throw new \InvalidArgumentException(sprintf('The GuestRPH property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GuestRPH, "%s" given', is_object($guestRPHsGuestRPHItem) ? get_class($guestRPHsGuestRPHItem) : gettype($guestRPHsGuestRPHItem)), __LINE__);
            }
        }
        $this->GuestRPH = $guestRPH;
        return $this;
    }
    /**
     * Add item to GuestRPH value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestRPH $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRPHs
     */
    public function addToGuestRPH(\Devlabs91\GenericOtaHotelApiService\StructType\GuestRPH $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\GuestRPH) {
            throw new \InvalidArgumentException(sprintf('The GuestRPH property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\GuestRPH, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuestRPH[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestRPHs
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
