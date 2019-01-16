<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehRentLocInfos StructType
 * Meta informations extracted from the WSDL
 * - documentation: Descriptive information allowing the vendor to present informational messages about the rental location. These may include after-hour return of vehicle messages, messages providing directions to the location, or other similar
 * messages.
 * @subpackage Structs
 */
class VehRentLocInfos extends AbstractStructBase
{
    /**
     * The VehRentLocInfo
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive information of one specific aspect of the rental location.
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $VehRentLocInfo;
    /**
     * Constructor method for VehRentLocInfos
     * @uses VehRentLocInfos::setVehRentLocInfo()
     * @param mixed[] $vehRentLocInfo
     */
    public function __construct(array $vehRentLocInfo = array())
    {
        $this
            ->setVehRentLocInfo($vehRentLocInfo);
    }
    /**
     * Get VehRentLocInfo value
     * @return mixed[]|null
     */
    public function getVehRentLocInfo()
    {
        return $this->VehRentLocInfo;
    }
    /**
     * Set VehRentLocInfo value
     * @throws \InvalidArgumentException
     * @param mixed[] $vehRentLocInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehRentLocInfos
     */
    public function setVehRentLocInfo(array $vehRentLocInfo = array())
    {
        foreach ($vehRentLocInfo as $vehRentLocInfosVehRentLocInfoItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The VehRentLocInfo property can only contain items of anyType, "%s" given', is_object($vehRentLocInfosVehRentLocInfoItem) ? get_class($vehRentLocInfosVehRentLocInfoItem) : gettype($vehRentLocInfosVehRentLocInfoItem)), __LINE__);
            }
        }
        $this->VehRentLocInfo = $vehRentLocInfo;
        return $this;
    }
    /**
     * Add item to VehRentLocInfo value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehRentLocInfos
     */
    public function addToVehRentLocInfo($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The VehRentLocInfo property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehRentLocInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\VehRentLocInfos
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
