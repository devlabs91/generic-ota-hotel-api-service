<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BldgRoom StructType
 * Meta informations extracted from the WSDL
 * - documentation: Building name, room, apartment, or suite number. | Used for Character Strings, length 0 to 64.
 * - maxLength: 64
 * - minLength: 0
 * @subpackage Structs
 */
class BldgRoom extends AbstractStructBase
{
    /**
     * The BldgNameIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, the information is a building name.
     * - use: optional
     * @var bool
     */
    public $BldgNameIndicator;
    /**
     * Constructor method for BldgRoom
     * @uses BldgRoom::setBldgNameIndicator()
     * @param bool $bldgNameIndicator
     */
    public function __construct($bldgNameIndicator = null)
    {
        $this
            ->setBldgNameIndicator($bldgNameIndicator);
    }
    /**
     * Get BldgNameIndicator value
     * @return bool|null
     */
    public function getBldgNameIndicator()
    {
        return $this->BldgNameIndicator;
    }
    /**
     * Set BldgNameIndicator value
     * @param bool $bldgNameIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BldgRoom
     */
    public function setBldgNameIndicator($bldgNameIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($bldgNameIndicator) && !is_bool($bldgNameIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($bldgNameIndicator)), __LINE__);
        }
        $this->BldgNameIndicator = $bldgNameIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BldgRoom
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
