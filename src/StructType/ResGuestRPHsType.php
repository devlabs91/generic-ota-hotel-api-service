<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResGuestRPHsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of unsigned integers serving as reference placeholders, and used as an index identifying which guests occupy this room
 * @subpackage Structs
 */
class ResGuestRPHsType extends AbstractStructBase
{
    /**
     * The ResGuestRPH
     * Meta informations extracted from the WSDL
     * - documentation: This is a reference placeholder, used as an index for this guest in this reservation. In the ResGuest object it is used like all other RPH attributes to send the delta of a reservation. It is used by the RoomStay and Service objects
     * to indicate which guests are associated with that room stay or service.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $ResGuestRPH;
    /**
     * Constructor method for ResGuestRPHsType
     * @uses ResGuestRPHsType::setResGuestRPH()
     * @param mixed[] $resGuestRPH
     */
    public function __construct(array $resGuestRPH = array())
    {
        $this
            ->setResGuestRPH($resGuestRPH);
    }
    /**
     * Get ResGuestRPH value
     * @return mixed[]|null
     */
    public function getResGuestRPH()
    {
        return $this->ResGuestRPH;
    }
    /**
     * Set ResGuestRPH value
     * @throws \InvalidArgumentException
     * @param mixed[] $resGuestRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestRPHsType
     */
    public function setResGuestRPH(array $resGuestRPH = array())
    {
        foreach ($resGuestRPH as $resGuestRPHsTypeResGuestRPHItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The ResGuestRPH property can only contain items of anyType, "%s" given', is_object($resGuestRPHsTypeResGuestRPHItem) ? get_class($resGuestRPHsTypeResGuestRPHItem) : gettype($resGuestRPHsTypeResGuestRPHItem)), __LINE__);
            }
        }
        $this->ResGuestRPH = $resGuestRPH;
        return $this;
    }
    /**
     * Add item to ResGuestRPH value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestRPHsType
     */
    public function addToResGuestRPH($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The ResGuestRPH property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ResGuestRPH[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGuestRPHsType
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
