<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleResRSCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleResRSCoreType complex type identifies the core, or common, information that is associated with the reservation of a vehicle.
 * @subpackage Structs
 */
class VehicleResRSCoreType extends AbstractStructBase
{
    /**
     * The VehReservation
     * Meta informations extracted from the WSDL
     * - documentation: Represents the vehicle rental reservation that was successfully created.
     * @var mixed
     */
    public $VehReservation;
    /**
     * The TPA_Extensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: TPA_Extensions
     * @var mixed
     */
    public $TPA_Extensions;
    /**
     * Constructor method for VehicleResRSCoreType
     * @uses VehicleResRSCoreType::setVehReservation()
     * @uses VehicleResRSCoreType::setTPA_Extensions()
     * @param mixed $vehReservation
     * @param mixed $tPA_Extensions
     */
    public function __construct($vehReservation = null, $tPA_Extensions = null)
    {
        $this
            ->setVehReservation($vehReservation)
            ->setTPA_Extensions($tPA_Extensions);
    }
    /**
     * Get VehReservation value
     * @return mixed|null
     */
    public function getVehReservation()
    {
        return $this->VehReservation;
    }
    /**
     * Set VehReservation value
     * @param mixed $vehReservation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleResRSCoreType
     */
    public function setVehReservation($vehReservation = null)
    {
        $this->VehReservation = $vehReservation;
        return $this;
    }
    /**
     * Get TPA_Extensions value
     * @return mixed|null
     */
    public function getTPA_Extensions()
    {
        return $this->TPA_Extensions;
    }
    /**
     * Set TPA_Extensions value
     * @param mixed $tPA_Extensions
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleResRSCoreType
     */
    public function setTPA_Extensions($tPA_Extensions = null)
    {
        $this->TPA_Extensions = $tPA_Extensions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleResRSCoreType
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
