<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Profiles StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of profiles.
 * @subpackage Structs
 */
class Profiles extends AbstractStructBase
{
    /**
     * The Profile
     * Meta informations extracted from the WSDL
     * - documentation: Profile associated with the Viewership, i.e. the information required to identify the company, agency, etc that is allowed to view the information.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $Profile;
    /**
     * Constructor method for Profiles
     * @uses Profiles::setProfile()
     * @param mixed[] $profile
     */
    public function __construct(array $profile = array())
    {
        $this
            ->setProfile($profile);
    }
    /**
     * Get Profile value
     * @return mixed[]|null
     */
    public function getProfile()
    {
        return $this->Profile;
    }
    /**
     * Set Profile value
     * @throws \InvalidArgumentException
     * @param mixed[] $profile
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Profiles
     */
    public function setProfile(array $profile = array())
    {
        foreach ($profile as $profilesProfileItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Profile property can only contain items of anyType, "%s" given', is_object($profilesProfileItem) ? get_class($profilesProfileItem) : gettype($profilesProfileItem)), __LINE__);
            }
        }
        $this->Profile = $profile;
        return $this;
    }
    /**
     * Add item to Profile value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Profiles
     */
    public function addToProfile($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Profile property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Profile[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Profiles
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
