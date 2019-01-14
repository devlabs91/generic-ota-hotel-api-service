<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehiclePrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehiclePrefType complex type defines the information that is used when defining a preference of a vehicle.
 * @subpackage Structs
 */
class VehiclePrefType extends VehicleCoreType
{
    /**
     * The TypePref
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $TypePref;
    /**
     * The ClassPref
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ClassPref;
    /**
     * The AirConditionPref
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AirConditionPref;
    /**
     * The TransmissionPref
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $TransmissionPref;
    /**
     * Constructor method for VehiclePrefType
     * @uses VehiclePrefType::setTypePref()
     * @uses VehiclePrefType::setClassPref()
     * @uses VehiclePrefType::setAirConditionPref()
     * @uses VehiclePrefType::setTransmissionPref()
     * @param string $typePref
     * @param string $classPref
     * @param string $airConditionPref
     * @param string $transmissionPref
     */
    public function __construct($typePref = null, $classPref = null, $airConditionPref = null, $transmissionPref = null)
    {
        $this
            ->setTypePref($typePref)
            ->setClassPref($classPref)
            ->setAirConditionPref($airConditionPref)
            ->setTransmissionPref($transmissionPref);
    }
    /**
     * Get TypePref value
     * @return string|null
     */
    public function getTypePref()
    {
        return $this->TypePref;
    }
    /**
     * Set TypePref value
     * @param string $typePref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType
     */
    public function setTypePref($typePref = null)
    {
        // validation for constraint: string
        if (!is_null($typePref) && !is_string($typePref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typePref)), __LINE__);
        }
        $this->TypePref = $typePref;
        return $this;
    }
    /**
     * Get ClassPref value
     * @return string|null
     */
    public function getClassPref()
    {
        return $this->ClassPref;
    }
    /**
     * Set ClassPref value
     * @param string $classPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType
     */
    public function setClassPref($classPref = null)
    {
        // validation for constraint: string
        if (!is_null($classPref) && !is_string($classPref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($classPref)), __LINE__);
        }
        $this->ClassPref = $classPref;
        return $this;
    }
    /**
     * Get AirConditionPref value
     * @return string|null
     */
    public function getAirConditionPref()
    {
        return $this->AirConditionPref;
    }
    /**
     * Set AirConditionPref value
     * @param string $airConditionPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType
     */
    public function setAirConditionPref($airConditionPref = null)
    {
        // validation for constraint: string
        if (!is_null($airConditionPref) && !is_string($airConditionPref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($airConditionPref)), __LINE__);
        }
        $this->AirConditionPref = $airConditionPref;
        return $this;
    }
    /**
     * Get TransmissionPref value
     * @return string|null
     */
    public function getTransmissionPref()
    {
        return $this->TransmissionPref;
    }
    /**
     * Set TransmissionPref value
     * @param string $transmissionPref
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType
     */
    public function setTransmissionPref($transmissionPref = null)
    {
        // validation for constraint: string
        if (!is_null($transmissionPref) && !is_string($transmissionPref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transmissionPref)), __LINE__);
        }
        $this->TransmissionPref = $transmissionPref;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehiclePrefType
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
