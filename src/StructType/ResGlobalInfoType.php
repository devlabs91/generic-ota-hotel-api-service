<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResGlobalInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: ResGlobalInfo is a container for various information that affects the Reservation as a whole. These include global comments, counts, reservation IDs, loyalty programs, and payment methods.
 * @subpackage Structs
 */
class ResGlobalInfoType extends ResCommonDetailType
{
    /**
     * The HotelReservationIDs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $HotelReservationIDs;
    /**
     * The RoutingHops
     * Meta informations extracted from the WSDL
     * - documentation: A collection of RoutingHop objects. This details the path that the original request or notification traveled.
     * - minOccurs: 0
     * @var mixed
     */
    public $RoutingHops;
    /**
     * The Profiles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $Profiles;
    /**
     * Constructor method for ResGlobalInfoType
     * @uses ResGlobalInfoType::setHotelReservationIDs()
     * @uses ResGlobalInfoType::setRoutingHops()
     * @uses ResGlobalInfoType::setProfiles()
     * @param mixed $hotelReservationIDs
     * @param mixed $routingHops
     * @param mixed $profiles
     */
    public function __construct($hotelReservationIDs = null, $routingHops = null, $profiles = null)
    {
        $this
            ->setHotelReservationIDs($hotelReservationIDs)
            ->setRoutingHops($routingHops)
            ->setProfiles($profiles);
    }
    /**
     * Get HotelReservationIDs value
     * @return mixed|null
     */
    public function getHotelReservationIDs()
    {
        return $this->HotelReservationIDs;
    }
    /**
     * Set HotelReservationIDs value
     * @param mixed $hotelReservationIDs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGlobalInfoType
     */
    public function setHotelReservationIDs($hotelReservationIDs = null)
    {
        $this->HotelReservationIDs = $hotelReservationIDs;
        return $this;
    }
    /**
     * Get RoutingHops value
     * @return mixed|null
     */
    public function getRoutingHops()
    {
        return $this->RoutingHops;
    }
    /**
     * Set RoutingHops value
     * @param mixed $routingHops
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGlobalInfoType
     */
    public function setRoutingHops($routingHops = null)
    {
        $this->RoutingHops = $routingHops;
        return $this;
    }
    /**
     * Get Profiles value
     * @return mixed|null
     */
    public function getProfiles()
    {
        return $this->Profiles;
    }
    /**
     * Set Profiles value
     * @param mixed $profiles
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGlobalInfoType
     */
    public function setProfiles($profiles = null)
    {
        $this->Profiles = $profiles;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ResGlobalInfoType
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
