<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessLocaleType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The jurisdiction in which a company is authorized to do business. Uses the Address entity to indicate the location of business using any of the components of the address (e.g., city, state, zip code, country, etc.) | Indicates
 * whether the business location is the default choice among several. The default business locale could be used to indicate the primary place of business or incorporation.
 * @subpackage Structs
 */
class BusinessLocaleType extends AbstractStructBase
{
    /**
     * The Address
     * @var mixed
     */
    public $Address;
    /**
     * Constructor method for BusinessLocaleType
     * @uses BusinessLocaleType::setAddress()
     * @param mixed $address
     */
    public function __construct($address = null)
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get Address value
     * @return mixed|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param mixed $address
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BusinessLocaleType
     */
    public function setAddress($address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BusinessLocaleType
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
