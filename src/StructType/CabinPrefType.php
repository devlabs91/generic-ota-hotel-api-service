<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabinPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for choice of airline cabin for a given travel situation.
 * @subpackage Structs
 */
class CabinPrefType extends AbstractStructBase
{
    /**
     * The Cabin
     * @var string
     */
    public $Cabin;
    /**
     * Constructor method for CabinPrefType
     * @uses CabinPrefType::setCabin()
     * @param string $cabin
     */
    public function __construct($cabin = null)
    {
        $this
            ->setCabin($cabin);
    }
    /**
     * Get Cabin value
     * @return string|null
     */
    public function getCabin()
    {
        return $this->Cabin;
    }
    /**
     * Set Cabin value
     * @param string $cabin
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinPrefType
     */
    public function setCabin($cabin = null)
    {
        // validation for constraint: string
        if (!is_null($cabin) && !is_string($cabin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cabin)), __LINE__);
        }
        $this->Cabin = $cabin;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinPrefType
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
