<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonalSrvcPrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates preferences for type of personal services in a hotel. | Identifies the customer's level of preference for the hotel personal service identified. | Used for Character Strings, length 1 to 128
 * - maxLength: 128
 * - minLength: 1
 * @subpackage Structs
 */
class PersonalSrvcPrefType extends AbstractStructBase
{
    /**
     * The PersonalSrvcType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the types of personal services offered by the hotel as identified in the PersonalSrvcCode Table
     * @var string
     */
    public $PersonalSrvcType;
    /**
     * Constructor method for PersonalSrvcPrefType
     * @uses PersonalSrvcPrefType::setPersonalSrvcType()
     * @param string $personalSrvcType
     */
    public function __construct($personalSrvcType = null)
    {
        $this
            ->setPersonalSrvcType($personalSrvcType);
    }
    /**
     * Get PersonalSrvcType value
     * @return string|null
     */
    public function getPersonalSrvcType()
    {
        return $this->PersonalSrvcType;
    }
    /**
     * Set PersonalSrvcType value
     * @param string $personalSrvcType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonalSrvcPrefType
     */
    public function setPersonalSrvcType($personalSrvcType = null)
    {
        // validation for constraint: string
        if (!is_null($personalSrvcType) && !is_string($personalSrvcType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($personalSrvcType)), __LINE__);
        }
        $this->PersonalSrvcType = $personalSrvcType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PersonalSrvcPrefType
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
