<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SSR_PrefType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies preferences for special services required for air travel, using standard industry (SSR-OSI) code list.
 * @subpackage Structs
 */
class SSR_PrefType extends AbstractStructBase
{
    /**
     * The SSR_Code
     * Meta informations extracted from the WSDL
     * - documentation: Code of the special service request to be used for this air travel situation. Refers to standard industry code list.
     * @var string
     */
    public $SSR_Code;
    /**
     * Constructor method for SSR_PrefType
     * @uses SSR_PrefType::setSSR_Code()
     * @param string $sSR_Code
     */
    public function __construct($sSR_Code = null)
    {
        $this
            ->setSSR_Code($sSR_Code);
    }
    /**
     * Get SSR_Code value
     * @return string|null
     */
    public function getSSR_Code()
    {
        return $this->SSR_Code;
    }
    /**
     * Set SSR_Code value
     * @param string $sSR_Code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SSR_PrefType
     */
    public function setSSR_Code($sSR_Code = null)
    {
        // validation for constraint: string
        if (!is_null($sSR_Code) && !is_string($sSR_Code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sSR_Code)), __LINE__);
        }
        $this->SSR_Code = $sSR_Code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SSR_PrefType
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
