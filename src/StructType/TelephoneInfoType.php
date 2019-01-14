<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TelephoneInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information about a telephone number, including the actual number and its usage
 * @subpackage Structs
 */
class TelephoneInfoType extends TelephoneType
{
    /**
     * The PhoneUseType
     * Meta informations extracted from the WSDL
     * - documentation: Describes the type of telephone number, in the context of its general use (e.g. Home, Business, Emergency Contact, Travel Arranger, Day, Evening). Refer to OTA Code List Phone Use Type (PUT).
     * - use: optional
     * @var string
     */
    public $PhoneUseType;
    /**
     * Constructor method for TelephoneInfoType
     * @uses TelephoneInfoType::setPhoneUseType()
     * @param string $phoneUseType
     */
    public function __construct($phoneUseType = null)
    {
        $this
            ->setPhoneUseType($phoneUseType);
    }
    /**
     * Get PhoneUseType value
     * @return string|null
     */
    public function getPhoneUseType()
    {
        return $this->PhoneUseType;
    }
    /**
     * Set PhoneUseType value
     * @param string $phoneUseType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TelephoneInfoType
     */
    public function setPhoneUseType($phoneUseType = null)
    {
        // validation for constraint: string
        if (!is_null($phoneUseType) && !is_string($phoneUseType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneUseType)), __LINE__);
        }
        $this->PhoneUseType = $phoneUseType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TelephoneInfoType
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
