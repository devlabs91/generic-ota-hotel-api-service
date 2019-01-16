<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DOW_RulesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the day of week rules that apply based on the DOW_TypeCode. | This will allow a specific date range to be defined.
 * @subpackage Structs
 */
class DOW_RulesType extends AbstractStructBase
{
    /**
     * The DOW_TypeCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $DOW_TypeCode;
    /**
     * Constructor method for DOW_RulesType
     * @uses DOW_RulesType::setDOW_TypeCode()
     * @param string $dOW_TypeCode
     */
    public function __construct($dOW_TypeCode = null)
    {
        $this
            ->setDOW_TypeCode($dOW_TypeCode);
    }
    /**
     * Get DOW_TypeCode value
     * @return string|null
     */
    public function getDOW_TypeCode()
    {
        return $this->DOW_TypeCode;
    }
    /**
     * Set DOW_TypeCode value
     * @param string $dOW_TypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DOW_RulesType
     */
    public function setDOW_TypeCode($dOW_TypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($dOW_TypeCode) && !is_string($dOW_TypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dOW_TypeCode)), __LINE__);
        }
        $this->DOW_TypeCode = $dOW_TypeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DOW_RulesType
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
