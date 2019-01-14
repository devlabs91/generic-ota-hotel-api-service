<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileInfo StructType
 * @subpackage Structs
 */
class ProfileInfo extends AbstractStructBase
{
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var mixed
     */
    public $UniqueID;
    /**
     * The Profile
     * @var mixed
     */
    public $Profile;
    /**
     * Constructor method for ProfileInfo
     * @uses ProfileInfo::setUniqueID()
     * @uses ProfileInfo::setProfile()
     * @param mixed $uniqueID
     * @param mixed $profile
     */
    public function __construct($uniqueID = null, $profile = null)
    {
        $this
            ->setUniqueID($uniqueID)
            ->setProfile($profile);
    }
    /**
     * Get UniqueID value
     * @return mixed|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param mixed $uniqueID
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ProfileInfo
     */
    public function setUniqueID($uniqueID = null)
    {
        $this->UniqueID = $uniqueID;
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
