<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabinPref StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferred cabin(s) to be used in a search. | Defines preferred cabin(s) to be used in a search.
 * @subpackage Structs
 */
class CabinPref extends AbstractStructBase
{
    /**
     * The CabinSubtype
     * Meta informations extracted from the WSDL
     * - documentation: Defines a specific cabin sub type within the cabin type (i.e., first, business, economy.) For example, Premium.
     * - use: optional
     * @var string
     */
    public $CabinSubtype;
    /**
     * Constructor method for CabinPref
     * @uses CabinPref::setCabinSubtype()
     * @param string $cabinSubtype
     */
    public function __construct($cabinSubtype = null)
    {
        $this
            ->setCabinSubtype($cabinSubtype);
    }
    /**
     * Get CabinSubtype value
     * @return string|null
     */
    public function getCabinSubtype()
    {
        return $this->CabinSubtype;
    }
    /**
     * Set CabinSubtype value
     * @param string $cabinSubtype
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinPref
     */
    public function setCabinSubtype($cabinSubtype = null)
    {
        // validation for constraint: string
        if (!is_null($cabinSubtype) && !is_string($cabinSubtype)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cabinSubtype)), __LINE__);
        }
        $this->CabinSubtype = $cabinSubtype;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinPref
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
