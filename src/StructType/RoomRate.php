<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoomRate StructType
 * @subpackage Structs
 */
class RoomRate extends RoomRateType
{
    /**
     * The AdvanceBookingRestriction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\AdvanceBookingRestriction
     */
    public $AdvanceBookingRestriction;
    /**
     * The Restrictions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Restrictions
     */
    public $Restrictions;
    /**
     * The ServiceRPHs
     * Meta informations extracted from the WSDL
     * - documentation: A container for the unique references to the services for the room stay.
     * - minOccurs: 0
     * @var mixed
     */
    public $ServiceRPHs;
    /**
     * The GuestCounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\GuestCounts
     */
    public $GuestCounts;
    /**
     * Constructor method for RoomRate
     * @uses RoomRate::setAdvanceBookingRestriction()
     * @uses RoomRate::setRestrictions()
     * @uses RoomRate::setServiceRPHs()
     * @uses RoomRate::setGuestCounts()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdvanceBookingRestriction $advanceBookingRestriction
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Restrictions $restrictions
     * @param mixed $serviceRPHs
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestCounts $guestCounts
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\AdvanceBookingRestriction $advanceBookingRestriction = null, \Devlabs91\GenericOtaHotelApiService\StructType\Restrictions $restrictions = null, $serviceRPHs = null, \Devlabs91\GenericOtaHotelApiService\StructType\GuestCounts $guestCounts = null)
    {
        $this
            ->setAdvanceBookingRestriction($advanceBookingRestriction)
            ->setRestrictions($restrictions)
            ->setServiceRPHs($serviceRPHs)
            ->setGuestCounts($guestCounts);
    }
    /**
     * Get AdvanceBookingRestriction value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AdvanceBookingRestriction|null
     */
    public function getAdvanceBookingRestriction()
    {
        return $this->AdvanceBookingRestriction;
    }
    /**
     * Set AdvanceBookingRestriction value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\AdvanceBookingRestriction $advanceBookingRestriction
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRate
     */
    public function setAdvanceBookingRestriction(\Devlabs91\GenericOtaHotelApiService\StructType\AdvanceBookingRestriction $advanceBookingRestriction = null)
    {
        $this->AdvanceBookingRestriction = $advanceBookingRestriction;
        return $this;
    }
    /**
     * Get Restrictions value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Restrictions|null
     */
    public function getRestrictions()
    {
        return $this->Restrictions;
    }
    /**
     * Set Restrictions value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Restrictions $restrictions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRate
     */
    public function setRestrictions(\Devlabs91\GenericOtaHotelApiService\StructType\Restrictions $restrictions = null)
    {
        $this->Restrictions = $restrictions;
        return $this;
    }
    /**
     * Get ServiceRPHs value
     * @return mixed|null
     */
    public function getServiceRPHs()
    {
        return $this->ServiceRPHs;
    }
    /**
     * Set ServiceRPHs value
     * @param mixed $serviceRPHs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRate
     */
    public function setServiceRPHs($serviceRPHs = null)
    {
        $this->ServiceRPHs = $serviceRPHs;
        return $this;
    }
    /**
     * Get GuestCounts value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\GuestCounts|null
     */
    public function getGuestCounts()
    {
        return $this->GuestCounts;
    }
    /**
     * Set GuestCounts value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\GuestCounts $guestCounts
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRate
     */
    public function setGuestCounts(\Devlabs91\GenericOtaHotelApiService\StructType\GuestCounts $guestCounts = null)
    {
        $this->GuestCounts = $guestCounts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoomRate
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
