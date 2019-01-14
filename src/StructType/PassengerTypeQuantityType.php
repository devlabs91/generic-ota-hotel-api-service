<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerTypeQuantityType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies a PTC and the associated number of PTC's - for use in specifying passenger lists
 * @subpackage Structs
 */
class PassengerTypeQuantityType extends TravelerCountType
{
    /**
     * The Changeable
     * Meta informations extracted from the WSDL
     * - default: true
     * - use: optional
     * @var bool
     */
    public $Changeable;
    /**
     * Constructor method for PassengerTypeQuantityType
     * @uses PassengerTypeQuantityType::setChangeable()
     * @param bool $changeable
     */
    public function __construct($changeable = true)
    {
        $this
            ->setChangeable($changeable);
    }
    /**
     * Get Changeable value
     * @return bool|null
     */
    public function getChangeable()
    {
        return $this->Changeable;
    }
    /**
     * Set Changeable value
     * @param bool $changeable
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PassengerTypeQuantityType
     */
    public function setChangeable($changeable = true)
    {
        // validation for constraint: boolean
        if (!is_null($changeable) && !is_bool($changeable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($changeable)), __LINE__);
        }
        $this->Changeable = $changeable;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PassengerTypeQuantityType
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
