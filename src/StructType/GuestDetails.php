<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GuestDetails StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies the guests' information.
 * @subpackage Structs
 */
class GuestDetails extends AbstractStructBase
{
    /**
     * The GuestDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the Guest information.
     * - maxOccurs: 9
     * @var mixed[]
     */
    public $GuestDetail;
    /**
     * Constructor method for GuestDetails
     * @uses GuestDetails::setGuestDetail()
     * @param mixed[] $guestDetail
     */
    public function __construct(array $guestDetail = array())
    {
        $this
            ->setGuestDetail($guestDetail);
    }
    /**
     * Get GuestDetail value
     * @return mixed[]|null
     */
    public function getGuestDetail()
    {
        return $this->GuestDetail;
    }
    /**
     * Set GuestDetail value
     * @throws \InvalidArgumentException
     * @param mixed[] $guestDetail
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestDetails
     */
    public function setGuestDetail(array $guestDetail = array())
    {
        foreach ($guestDetail as $guestDetailsGuestDetailItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The GuestDetail property can only contain items of anyType, "%s" given', is_object($guestDetailsGuestDetailItem) ? get_class($guestDetailsGuestDetailItem) : gettype($guestDetailsGuestDetailItem)), __LINE__);
            }
        }
        $this->GuestDetail = $guestDetail;
        return $this;
    }
    /**
     * Add item to GuestDetail value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestDetails
     */
    public function addToGuestDetail($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The GuestDetail property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GuestDetail[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestDetails
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
