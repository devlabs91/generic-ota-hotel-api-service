<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StateProvType StructType
 * Meta informations extracted from the WSDL
 * - documentation: State, province, or region name or code needed to identify location. | Used for Character Strings, length 0 to 64
 * - maxLength: 64
 * - minLength: 0
 * @subpackage Structs
 */
class StateProvType extends AbstractStructBase
{
    /**
     * The StateCode
     * @var string
     */
    public $StateCode;
    /**
     * Constructor method for StateProvType
     * @uses StateProvType::setStateCode()
     * @param string $stateCode
     */
    public function __construct($stateCode = null)
    {
        $this
            ->setStateCode($stateCode);
    }
    /**
     * Get StateCode value
     * @return string|null
     */
    public function getStateCode()
    {
        return $this->StateCode;
    }
    /**
     * Set StateCode value
     * @param string $stateCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StateProvType
     */
    public function setStateCode($stateCode = null)
    {
        // validation for constraint: string
        if (!is_null($stateCode) && !is_string($stateCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stateCode)), __LINE__);
        }
        $this->StateCode = $stateCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StateProvType
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
