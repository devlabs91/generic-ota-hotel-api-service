<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PkgRoomProfileType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes the occupancy of a room or cabin.
 * @subpackage Structs
 */
class PkgRoomProfileType extends PkgRoomInventoryType
{
    /**
     * The PassengerRPHs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $PassengerRPHs;
    /**
     * Constructor method for PkgRoomProfileType
     * @uses PkgRoomProfileType::setPassengerRPHs()
     * @param mixed $passengerRPHs
     */
    public function __construct($passengerRPHs = null)
    {
        $this
            ->setPassengerRPHs($passengerRPHs);
    }
    /**
     * Get PassengerRPHs value
     * @return mixed|null
     */
    public function getPassengerRPHs()
    {
        return $this->PassengerRPHs;
    }
    /**
     * Set PassengerRPHs value
     * @param mixed $passengerRPHs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgRoomProfileType
     */
    public function setPassengerRPHs($passengerRPHs = null)
    {
        $this->PassengerRPHs = $passengerRPHs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PkgRoomProfileType
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
