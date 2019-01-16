<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileInfo StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Profiles or Unique IDs of Profiles.
 * @subpackage Structs
 */
class ProfileInfo extends AbstractStructBase
{
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: A unique ID for a profile. This element repeats to accommodate multiple unique IDs for a single profile across multiple systems.
     * - maxOccurs: 9
     * - minOccurs: 0
     * @var mixed[]
     */
    public $UniqueID;
    /**
     * The Profile
     * Meta informations extracted from the WSDL
     * - documentation: Provides detailed information regarding either a company or a customer profile.
     * @var mixed
     */
    public $Profile;
    /**
     * Constructor method for ProfileInfo
     * @uses ProfileInfo::setUniqueID()
     * @uses ProfileInfo::setProfile()
     * @param mixed[] $uniqueID
     * @param mixed $profile
     */
    public function __construct(array $uniqueID = array(), $profile = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setProfile($profile);
    }
    /**
     * Get UniqueID value
     * @return mixed[]|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @throws \InvalidArgumentException
     * @param mixed[] $uniqueID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileInfo
     */
    public function setUniqueID(array $uniqueID = array())
    {
        foreach ($uniqueID as $profileInfoUniqueIDItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The UniqueID property can only contain items of anyType, "%s" given', is_object($profileInfoUniqueIDItem) ? get_class($profileInfoUniqueIDItem) : gettype($profileInfoUniqueIDItem)), __LINE__);
            }
        }
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Add item to UniqueID value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileInfo
     */
    public function addToUniqueID($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The UniqueID property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UniqueID[] = $item;
        return $this;
    }
    /**
     * Get Profile value
     * @return mixed|null
     */
    public function getProfile()
    {
        return $this->Profile;
    }
    /**
     * Set Profile value
     * @param mixed $profile
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileInfo
     */
    public function setProfile($profile = null)
    {
        $this->Profile = $profile;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileInfo
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
