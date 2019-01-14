<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecreationSrvcPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for type of recreation services in a hotel. | Identifies the customer's level of preference for the hotel recreational service identified. | Used for Character Strings, length 1 to 128
 * - maxLength: 128
 * - minLength: 1
 * @subpackage Structs
 */
class RecreationSrvcPrefType extends AbstractStructBase
{
    /**
     * The RecreationSrvcType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the recreational services offered by the hotel. Refer to OTA Code List Recreation Srvc Type (RST).
     * @var string
     */
    public $RecreationSrvcType;
    /**
     * Constructor method for RecreationSrvcPrefType
     * @uses RecreationSrvcPrefType::setRecreationSrvcType()
     * @param string $recreationSrvcType
     */
    public function __construct($recreationSrvcType = null)
    {
        $this
            ->setRecreationSrvcType($recreationSrvcType);
    }
    /**
     * Get RecreationSrvcType value
     * @return string|null
     */
    public function getRecreationSrvcType()
    {
        return $this->RecreationSrvcType;
    }
    /**
     * Set RecreationSrvcType value
     * @param string $recreationSrvcType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecreationSrvcPrefType
     */
    public function setRecreationSrvcType($recreationSrvcType = null)
    {
        // validation for constraint: string
        if (!is_null($recreationSrvcType) && !is_string($recreationSrvcType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recreationSrvcType)), __LINE__);
        }
        $this->RecreationSrvcType = $recreationSrvcType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RecreationSrvcPrefType
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
