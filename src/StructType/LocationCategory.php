<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationCategory StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the general location of the hotel such as airport, suburban, downtown. | May be used to give further detail on the code or to remove an obsolete item. The code detail may provide the name of the suburb in which the hotel
 * resides or other specifics about the location type.
 * @subpackage Structs
 */
class LocationCategory extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: This defines the location of the hotel (e.g. downtown, airport or suburban, etc.). Refer to OTA Code List Location Category Codes (LOC).
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * Constructor method for LocationCategory
     * @uses LocationCategory::setCode()
     * @param string $code
     */
    public function __construct($code = null)
    {
        $this
            ->setCode($code);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationCategory
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationCategory
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
