<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserID StructType
 * Meta informations extracted from the WSDL
 * - documentation: The user ids and pin numbers of the profile.
 * @subpackage Structs
 */
class UserID extends UniqueID_Type
{
    /**
     * The PinNumber
     * Meta informations extracted from the WSDL
     * - documentation: The personal identification number (password) for this user ID.
     * - use: optional
     * @var string
     */
    public $PinNumber;
    /**
     * Constructor method for UserID
     * @uses UserID::setPinNumber()
     * @param string $pinNumber
     */
    public function __construct($pinNumber = null)
    {
        $this
            ->setPinNumber($pinNumber);
    }
    /**
     * Get PinNumber value
     * @return string|null
     */
    public function getPinNumber()
    {
        return $this->PinNumber;
    }
    /**
     * Set PinNumber value
     * @param string $pinNumber
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UserID
     */
    public function setPinNumber($pinNumber = null)
    {
        // validation for constraint: string
        if (!is_null($pinNumber) && !is_string($pinNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pinNumber)), __LINE__);
        }
        $this->PinNumber = $pinNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UserID
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
