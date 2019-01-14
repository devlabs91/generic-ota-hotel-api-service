<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleType complex type identifie sthe data that fully describes a vehicle. This includes the core information along with supplemental information such as make and model, and a link to a picture.
 * @subpackage Structs
 */
class VehicleType extends VehicleCoreType
{
    /**
     * The VehMakeModel
     * Meta informations extracted from the WSDL
     * - documentation: The make and model of the vehicle, for examp;le, Ford escort
     * - minOccurs: 0
     * @var mixed
     */
    public $VehMakeModel;
    /**
     * The PictureURL
     * Meta informations extracted from the WSDL
     * - documentation: URL that identifies the location of a picture to describe this vehicle.
     * - minOccurs: 0
     * @var string
     */
    public $PictureURL;
    /**
     * The PassengerQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Number of passengers that can be accommodated by this vehicle.
     * - use: optional
     * @var int
     */
    public $PassengerQuantity;
    /**
     * The BaggageQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Number of bags/suitcases that can be accommodated by this vehicle.
     * - use: optional
     * @var int
     */
    public $BaggageQuantity;
    /**
     * Constructor method for VehicleType
     * @uses VehicleType::setVehMakeModel()
     * @uses VehicleType::setPictureURL()
     * @uses VehicleType::setPassengerQuantity()
     * @uses VehicleType::setBaggageQuantity()
     * @param mixed $vehMakeModel
     * @param string $pictureURL
     * @param int $passengerQuantity
     * @param int $baggageQuantity
     */
    public function __construct($vehMakeModel = null, $pictureURL = null, $passengerQuantity = null, $baggageQuantity = null)
    {
        $this
            ->setVehMakeModel($vehMakeModel)
            ->setPictureURL($pictureURL)
            ->setPassengerQuantity($passengerQuantity)
            ->setBaggageQuantity($baggageQuantity);
    }
    /**
     * Get VehMakeModel value
     * @return mixed|null
     */
    public function getVehMakeModel()
    {
        return $this->VehMakeModel;
    }
    /**
     * Set VehMakeModel value
     * @param mixed $vehMakeModel
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleType
     */
    public function setVehMakeModel($vehMakeModel = null)
    {
        $this->VehMakeModel = $vehMakeModel;
        return $this;
    }
    /**
     * Get PictureURL value
     * @return string|null
     */
    public function getPictureURL()
    {
        return $this->PictureURL;
    }
    /**
     * Set PictureURL value
     * @param string $pictureURL
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleType
     */
    public function setPictureURL($pictureURL = null)
    {
        // validation for constraint: string
        if (!is_null($pictureURL) && !is_string($pictureURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pictureURL)), __LINE__);
        }
        $this->PictureURL = $pictureURL;
        return $this;
    }
    /**
     * Get PassengerQuantity value
     * @return int|null
     */
    public function getPassengerQuantity()
    {
        return $this->PassengerQuantity;
    }
    /**
     * Set PassengerQuantity value
     * @param int $passengerQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleType
     */
    public function setPassengerQuantity($passengerQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($passengerQuantity) && !is_numeric($passengerQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($passengerQuantity)), __LINE__);
        }
        $this->PassengerQuantity = $passengerQuantity;
        return $this;
    }
    /**
     * Get BaggageQuantity value
     * @return int|null
     */
    public function getBaggageQuantity()
    {
        return $this->BaggageQuantity;
    }
    /**
     * Set BaggageQuantity value
     * @param int $baggageQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleType
     */
    public function setBaggageQuantity($baggageQuantity = null)
    {
        // validation for constraint: int
        if (!is_null($baggageQuantity) && !is_numeric($baggageQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($baggageQuantity)), __LINE__);
        }
        $this->BaggageQuantity = $baggageQuantity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleType
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
