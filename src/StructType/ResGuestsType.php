<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResGuestsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of ResGuest objects, identifying the guests associated with this reservation. Which guests are in which room is determined by each RoomStays ResGuestRPHs collection.
 * @subpackage Structs
 */
class ResGuestsType extends AbstractStructBase
{
    /**
     * The ResGuest
     * Meta informations extracted from the WSDL
     * - documentation: The ResGuest object contains the information about a guest associated with a reservation.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $ResGuest;
    /**
     * Constructor method for ResGuestsType
     * @uses ResGuestsType::setResGuest()
     * @param mixed[] $resGuest
     */
    public function __construct(array $resGuest = array())
    {
        $this
            ->setResGuest($resGuest);
    }
    /**
     * Get ResGuest value
     * @return mixed[]|null
     */
    public function getResGuest()
    {
        return $this->ResGuest;
    }
    /**
     * Set ResGuest value
     * @throws \InvalidArgumentException
     * @param mixed[] $resGuest
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestsType
     */
    public function setResGuest(array $resGuest = array())
    {
        foreach ($resGuest as $resGuestsTypeResGuestItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The ResGuest property can only contain items of anyType, "%s" given', is_object($resGuestsTypeResGuestItem) ? get_class($resGuestsTypeResGuestItem) : gettype($resGuestsTypeResGuestItem)), __LINE__);
            }
        }
        $this->ResGuest = $resGuest;
        return $this;
    }
    /**
     * Add item to ResGuest value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestsType
     */
    public function addToResGuest($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The ResGuest property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ResGuest[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestsType
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
