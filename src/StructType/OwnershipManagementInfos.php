<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OwnershipManagementInfos StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of OwnershipManagementInfo.
 * @subpackage Structs
 */
class OwnershipManagementInfos extends AbstractStructBase
{
    /**
     * The OwnershipManagementInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfo[]
     */
    public $OwnershipManagementInfo;
    /**
     * Constructor method for OwnershipManagementInfos
     * @uses OwnershipManagementInfos::setOwnershipManagementInfo()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfo[] $ownershipManagementInfo
     */
    public function __construct(array $ownershipManagementInfo = array())
    {
        $this
            ->setOwnershipManagementInfo($ownershipManagementInfo);
    }
    /**
     * Get OwnershipManagementInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfo[]|null
     */
    public function getOwnershipManagementInfo()
    {
        return $this->OwnershipManagementInfo;
    }
    /**
     * Set OwnershipManagementInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfo[] $ownershipManagementInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfos
     */
    public function setOwnershipManagementInfo(array $ownershipManagementInfo = array())
    {
        foreach ($ownershipManagementInfo as $ownershipManagementInfosOwnershipManagementInfoItem) {
            // validation for constraint: itemType
            if (!$ownershipManagementInfosOwnershipManagementInfoItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfo) {
                throw new \InvalidArgumentException(sprintf('The OwnershipManagementInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfo, "%s" given', is_object($ownershipManagementInfosOwnershipManagementInfoItem) ? get_class($ownershipManagementInfosOwnershipManagementInfoItem) : gettype($ownershipManagementInfosOwnershipManagementInfoItem)), __LINE__);
            }
        }
        $this->OwnershipManagementInfo = $ownershipManagementInfo;
        return $this;
    }
    /**
     * Add item to OwnershipManagementInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfo $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfos
     */
    public function addToOwnershipManagementInfo(\Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfo) {
            throw new \InvalidArgumentException(sprintf('The OwnershipManagementInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OwnershipManagementInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\OwnershipManagementInfos
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
