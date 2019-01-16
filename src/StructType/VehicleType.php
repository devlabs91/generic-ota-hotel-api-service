<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The VehicleType complex type identifie sthe data that fully describes a vehicle. This includes the core information along with supplemental information such as make and model, and a link to a picture. | Code used to identify the
 * vehicle. May be used in place of VehicleCoreType. Typically a SIPP code would be passed here. Identifies the source authority for the code (e.g., SIPP). | The volume (i.e., unit of measure and quantity) of the boot/trunk. | The effective date range
 * for the vehicle information.
 * @subpackage Structs
 */
class VehicleType extends VehicleCoreType
{
    /**
     * The VehMakeModel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehMakeModel
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
     * The VehIdentity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehIdentity
     */
    public $VehIdentity;
    /**
     * The PassengerQuantity
     * Meta informations extracted from the WSDL
     * - documentation: Number of passengers that can be accommodated by this vehicle. This may be an exact number or may be a range, i.e., 4-5, 5-6.
     * - use: optional
     * @var string
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
     * The VendorCarType
     * Meta informations extracted from the WSDL
     * - documentation: An internal car type assigned by the vendor. This is not the SIPP code.
     * - use: optional
     * @var string
     */
    public $VendorCarType;
    /**
     * The OdometerUnitOfMeasure
     * Meta informations extracted from the WSDL
     * - documentation: Provides the units in which distance is measured, when applied to a vehicle (i.e., miles or kilometers)
     * - use: optional
     * @var string
     */
    public $OdometerUnitOfMeasure;
    /**
     * Constructor method for VehicleType
     * @uses VehicleType::setVehMakeModel()
     * @uses VehicleType::setPictureURL()
     * @uses VehicleType::setVehIdentity()
     * @uses VehicleType::setPassengerQuantity()
     * @uses VehicleType::setBaggageQuantity()
     * @uses VehicleType::setVendorCarType()
     * @uses VehicleType::setOdometerUnitOfMeasure()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehMakeModel $vehMakeModel
     * @param string $pictureURL
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehIdentity $vehIdentity
     * @param string $passengerQuantity
     * @param int $baggageQuantity
     * @param string $vendorCarType
     * @param string $odometerUnitOfMeasure
     */
    public function __construct(\Devlabs91\GenericOtaHotelApiService\StructType\VehMakeModel $vehMakeModel = null, $pictureURL = null, \Devlabs91\GenericOtaHotelApiService\StructType\VehIdentity $vehIdentity = null, $passengerQuantity = null, $baggageQuantity = null, $vendorCarType = null, $odometerUnitOfMeasure = null)
    {
        $this
            ->setVehMakeModel($vehMakeModel)
            ->setPictureURL($pictureURL)
            ->setVehIdentity($vehIdentity)
            ->setPassengerQuantity($passengerQuantity)
            ->setBaggageQuantity($baggageQuantity)
            ->setVendorCarType($vendorCarType)
            ->setOdometerUnitOfMeasure($odometerUnitOfMeasure);
    }
    /**
     * Get VehMakeModel value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehMakeModel|null
     */
    public function getVehMakeModel()
    {
        return $this->VehMakeModel;
    }
    /**
     * Set VehMakeModel value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehMakeModel $vehMakeModel
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleType
     */
    public function setVehMakeModel(\Devlabs91\GenericOtaHotelApiService\StructType\VehMakeModel $vehMakeModel = null)
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
     * Get VehIdentity value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehIdentity|null
     */
    public function getVehIdentity()
    {
        return $this->VehIdentity;
    }
    /**
     * Set VehIdentity value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehIdentity $vehIdentity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleType
     */
    public function setVehIdentity(\Devlabs91\GenericOtaHotelApiService\StructType\VehIdentity $vehIdentity = null)
    {
        $this->VehIdentity = $vehIdentity;
        return $this;
    }
    /**
     * Get PassengerQuantity value
     * @return string|null
     */
    public function getPassengerQuantity()
    {
        return $this->PassengerQuantity;
    }
    /**
     * Set PassengerQuantity value
     * @param string $passengerQuantity
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleType
     */
    public function setPassengerQuantity($passengerQuantity = null)
    {
        // validation for constraint: string
        if (!is_null($passengerQuantity) && !is_string($passengerQuantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerQuantity)), __LINE__);
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
     * Get VendorCarType value
     * @return string|null
     */
    public function getVendorCarType()
    {
        return $this->VendorCarType;
    }
    /**
     * Set VendorCarType value
     * @param string $vendorCarType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleType
     */
    public function setVendorCarType($vendorCarType = null)
    {
        // validation for constraint: string
        if (!is_null($vendorCarType) && !is_string($vendorCarType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorCarType)), __LINE__);
        }
        $this->VendorCarType = $vendorCarType;
        return $this;
    }
    /**
     * Get OdometerUnitOfMeasure value
     * @return string|null
     */
    public function getOdometerUnitOfMeasure()
    {
        return $this->OdometerUnitOfMeasure;
    }
    /**
     * Set OdometerUnitOfMeasure value
     * @param string $odometerUnitOfMeasure
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleType
     */
    public function setOdometerUnitOfMeasure($odometerUnitOfMeasure = null)
    {
        // validation for constraint: string
        if (!is_null($odometerUnitOfMeasure) && !is_string($odometerUnitOfMeasure)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($odometerUnitOfMeasure)), __LINE__);
        }
        $this->OdometerUnitOfMeasure = $odometerUnitOfMeasure;
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
