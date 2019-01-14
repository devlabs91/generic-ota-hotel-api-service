<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfilesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Profile objects or Unique IDs of Profiles.
 * @subpackage Structs
 */
class ProfilesType extends AbstractStructBase
{
    /**
     * The ProfileInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\ProfileInfo[]
     */
    public $ProfileInfo;
    /**
     * Constructor method for ProfilesType
     * @uses ProfilesType::setProfileInfo()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProfileInfo[] $profileInfo
     */
    public function __construct(array $profileInfo = array())
    {
        $this
            ->setProfileInfo($profileInfo);
    }
    /**
     * Get ProfileInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileInfo[]|null
     */
    public function getProfileInfo()
    {
        return $this->ProfileInfo;
    }
    /**
     * Set ProfileInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProfileInfo[] $profileInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfilesType
     */
    public function setProfileInfo(array $profileInfo = array())
    {
        foreach ($profileInfo as $profilesTypeProfileInfoItem) {
            // validation for constraint: itemType
            if (!$profilesTypeProfileInfoItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ProfileInfo) {
                throw new \InvalidArgumentException(sprintf('The ProfileInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ProfileInfo, "%s" given', is_object($profilesTypeProfileInfoItem) ? get_class($profilesTypeProfileInfoItem) : gettype($profilesTypeProfileInfoItem)), __LINE__);
            }
        }
        $this->ProfileInfo = $profileInfo;
        return $this;
    }
    /**
     * Add item to ProfileInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\ProfileInfo $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfilesType
     */
    public function addToProfileInfo(\Devlabs91\GenericOtaHotelApiService\StructType\ProfileInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\ProfileInfo) {
            throw new \InvalidArgumentException(sprintf('The ProfileInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\ProfileInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ProfileInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfilesType
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
