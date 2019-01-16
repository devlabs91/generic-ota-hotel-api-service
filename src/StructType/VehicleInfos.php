<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleInfos StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of descriptions about various aspects of the vehicles.
 * @subpackage Structs
 */
class VehicleInfos extends AbstractStructBase
{
    /**
     * The VehicleInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\VehicleInfo[]
     */
    public $VehicleInfo;
    /**
     * Constructor method for VehicleInfos
     * @uses VehicleInfos::setVehicleInfo()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehicleInfo[] $vehicleInfo
     */
    public function __construct(array $vehicleInfo = array())
    {
        $this
            ->setVehicleInfo($vehicleInfo);
    }
    /**
     * Get VehicleInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleInfo[]|null
     */
    public function getVehicleInfo()
    {
        return $this->VehicleInfo;
    }
    /**
     * Set VehicleInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehicleInfo[] $vehicleInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleInfos
     */
    public function setVehicleInfo(array $vehicleInfo = array())
    {
        foreach ($vehicleInfo as $vehicleInfosVehicleInfoItem) {
            // validation for constraint: itemType
            if (!$vehicleInfosVehicleInfoItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\VehicleInfo) {
                throw new \InvalidArgumentException(sprintf('The VehicleInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\VehicleInfo, "%s" given', is_object($vehicleInfosVehicleInfoItem) ? get_class($vehicleInfosVehicleInfoItem) : gettype($vehicleInfosVehicleInfoItem)), __LINE__);
            }
        }
        $this->VehicleInfo = $vehicleInfo;
        return $this;
    }
    /**
     * Add item to VehicleInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\VehicleInfo $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleInfos
     */
    public function addToVehicleInfo(\Devlabs91\GenericOtaHotelApiService\StructType\VehicleInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\VehicleInfo) {
            throw new \InvalidArgumentException(sprintf('The VehicleInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\VehicleInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehicleInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehicleInfos
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
