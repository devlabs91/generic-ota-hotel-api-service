<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyNamePrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Name of preferred hotel property associated with this collection. | Identifies the customer's level of preference for the hotel property identified. | Used for Character Strings, length 0 to 128.
 * - maxLength: 128
 * - minLength: 0
 * @subpackage Structs
 */
class PropertyNamePrefType extends AbstractStructBase
{
    /**
     * The HotelCode
     * Meta informations extracted from the WSDL
     * - documentation: The code that uniquely identifies a single hotel property. The hotel code is decided between vendors.
     * - use: optional
     * @var string
     */
    public $HotelCode;
    /**
     * Constructor method for PropertyNamePrefType
     * @uses PropertyNamePrefType::setHotelCode()
     * @param string $hotelCode
     */
    public function __construct($hotelCode = null)
    {
        $this
            ->setHotelCode($hotelCode);
    }
    /**
     * Get HotelCode value
     * @return string|null
     */
    public function getHotelCode()
    {
        return $this->HotelCode;
    }
    /**
     * Set HotelCode value
     * @param string $hotelCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyNamePrefType
     */
    public function setHotelCode($hotelCode = null)
    {
        // validation for constraint: string
        if (!is_null($hotelCode) && !is_string($hotelCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hotelCode)), __LINE__);
        }
        $this->HotelCode = $hotelCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PropertyNamePrefType
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
