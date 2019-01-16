<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StreetNmbrType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Street name; number on street. | Used for Character Strings, length 0 to 64.
 * - maxLength: 64
 * - minLength: 0
 * @subpackage Structs
 */
class StreetNmbrType extends AbstractStructBase
{
    /**
     * The PO_Box
     * Meta informations extracted from the WSDL
     * - documentation: Defines a Post Office Box number.
     * @var string
     */
    public $PO_Box;
    /**
     * Constructor method for StreetNmbrType
     * @uses StreetNmbrType::setPO_Box()
     * @param string $pO_Box
     */
    public function __construct($pO_Box = null)
    {
        $this
            ->setPO_Box($pO_Box);
    }
    /**
     * Get PO_Box value
     * @return string|null
     */
    public function getPO_Box()
    {
        return $this->PO_Box;
    }
    /**
     * Set PO_Box value
     * @param string $pO_Box
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StreetNmbrType
     */
    public function setPO_Box($pO_Box = null)
    {
        // validation for constraint: string
        if (!is_null($pO_Box) && !is_string($pO_Box)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pO_Box)), __LINE__);
        }
        $this->PO_Box = $pO_Box;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StreetNmbrType
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
