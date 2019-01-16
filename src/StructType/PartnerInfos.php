<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PartnerInfos StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of PartnerInfo.
 * @subpackage Structs
 */
class PartnerInfos extends AbstractStructBase
{
    /**
     * The PartnerInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfo[]
     */
    public $PartnerInfo;
    /**
     * Constructor method for PartnerInfos
     * @uses PartnerInfos::setPartnerInfo()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfo[] $partnerInfo
     */
    public function __construct(array $partnerInfo = array())
    {
        $this
            ->setPartnerInfo($partnerInfo);
    }
    /**
     * Get PartnerInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfo[]|null
     */
    public function getPartnerInfo()
    {
        return $this->PartnerInfo;
    }
    /**
     * Set PartnerInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfo[] $partnerInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfos
     */
    public function setPartnerInfo(array $partnerInfo = array())
    {
        foreach ($partnerInfo as $partnerInfosPartnerInfoItem) {
            // validation for constraint: itemType
            if (!$partnerInfosPartnerInfoItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfo) {
                throw new \InvalidArgumentException(sprintf('The PartnerInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfo, "%s" given', is_object($partnerInfosPartnerInfoItem) ? get_class($partnerInfosPartnerInfoItem) : gettype($partnerInfosPartnerInfoItem)), __LINE__);
            }
        }
        $this->PartnerInfo = $partnerInfo;
        return $this;
    }
    /**
     * Add item to PartnerInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfo $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfos
     */
    public function addToPartnerInfo(\Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfo) {
            throw new \InvalidArgumentException(sprintf('The PartnerInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PartnerInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PartnerInfos
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
