<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabinAttribute StructType
 * Meta informations extracted from the WSDL
 * - documentation: List of attributes associated with all cabins in the specified category. | List of attributes associated with this cabin.
 * @subpackage Structs
 */
class CabinAttribute extends AbstractStructBase
{
    /**
     * The CabinAttributeCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of cabin requested. Refer to OpenTravel Code List Cabin Filters (CBF). | Specifies the type of cabin requested. Refer to OpenTravel Code List Cabin Filters (CBF).
     * - use: optional
     * @var string
     */
    public $CabinAttributeCode;
    /**
     * Constructor method for CabinAttribute
     * @uses CabinAttribute::setCabinAttributeCode()
     * @param string $cabinAttributeCode
     */
    public function __construct($cabinAttributeCode = null)
    {
        $this
            ->setCabinAttributeCode($cabinAttributeCode);
    }
    /**
     * Get CabinAttributeCode value
     * @return string|null
     */
    public function getCabinAttributeCode()
    {
        return $this->CabinAttributeCode;
    }
    /**
     * Set CabinAttributeCode value
     * @param string $cabinAttributeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinAttribute
     */
    public function setCabinAttributeCode($cabinAttributeCode = null)
    {
        // validation for constraint: string
        if (!is_null($cabinAttributeCode) && !is_string($cabinAttributeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cabinAttributeCode)), __LINE__);
        }
        $this->CabinAttributeCode = $cabinAttributeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CabinAttribute
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
