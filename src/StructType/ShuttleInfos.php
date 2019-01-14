<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShuttleInfos StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of descriptions about various aspects of the Shuttle Services.
 * @subpackage Structs
 */
class ShuttleInfos extends AbstractStructBase
{
    /**
     * The ShuttleInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ShuttleInfo[]
     */
    public $ShuttleInfo;
    /**
     * Constructor method for ShuttleInfos
     * @uses ShuttleInfos::setShuttleInfo()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ShuttleInfo[] $shuttleInfo
     */
    public function __construct(array $shuttleInfo = array())
    {
        $this
            ->setShuttleInfo($shuttleInfo);
    }
    /**
     * Get ShuttleInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ShuttleInfo[]|null
     */
    public function getShuttleInfo()
    {
        return $this->ShuttleInfo;
    }
    /**
     * Set ShuttleInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ShuttleInfo[] $shuttleInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ShuttleInfos
     */
    public function setShuttleInfo(array $shuttleInfo = array())
    {
        foreach ($shuttleInfo as $shuttleInfosShuttleInfoItem) {
            // validation for constraint: itemType
            if (!$shuttleInfosShuttleInfoItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ShuttleInfo) {
                throw new \InvalidArgumentException(sprintf('The ShuttleInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ShuttleInfo, "%s" given', is_object($shuttleInfosShuttleInfoItem) ? get_class($shuttleInfosShuttleInfoItem) : gettype($shuttleInfosShuttleInfoItem)), __LINE__);
            }
        }
        $this->ShuttleInfo = $shuttleInfo;
        return $this;
    }
    /**
     * Add item to ShuttleInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ShuttleInfo $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ShuttleInfos
     */
    public function addToShuttleInfo(\Devlabs91\GenericOtaHotelApiService\StructType\ShuttleInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ShuttleInfo) {
            throw new \InvalidArgumentException(sprintf('The ShuttleInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ShuttleInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ShuttleInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ShuttleInfos
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
