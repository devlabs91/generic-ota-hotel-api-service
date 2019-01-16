<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessSrvcPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for type of business services in a hotel. | Identifies the customer's level of preference for the hotel business service identified. | Used for Character Strings, length 1 to 128.
 * - maxLength: 128
 * - minLength: 1
 * @subpackage Structs
 */
class BusinessSrvcPrefType extends AbstractStructBase
{
    /**
     * The BusinessSrvcType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the types of business services offered by the hotel. Refer to OpenTravel Code ListBusiness Srvc Type (BUS).
     * @var string
     */
    public $BusinessSrvcType;
    /**
     * Constructor method for BusinessSrvcPrefType
     * @uses BusinessSrvcPrefType::setBusinessSrvcType()
     * @param string $businessSrvcType
     */
    public function __construct($businessSrvcType = null)
    {
        $this
            ->setBusinessSrvcType($businessSrvcType);
    }
    /**
     * Get BusinessSrvcType value
     * @return string|null
     */
    public function getBusinessSrvcType()
    {
        return $this->BusinessSrvcType;
    }
    /**
     * Set BusinessSrvcType value
     * @param string $businessSrvcType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BusinessSrvcPrefType
     */
    public function setBusinessSrvcType($businessSrvcType = null)
    {
        // validation for constraint: string
        if (!is_null($businessSrvcType) && !is_string($businessSrvcType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($businessSrvcType)), __LINE__);
        }
        $this->BusinessSrvcType = $businessSrvcType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\BusinessSrvcPrefType
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
