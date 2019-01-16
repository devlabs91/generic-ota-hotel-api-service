<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CodeRef StructType
 * Meta informations extracted from the WSDL
 * - documentation: Indicates the location of points of interest.
 * @subpackage Structs
 */
class CodeRef extends LocationType
{
    /**
     * The VicinityCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to identify the vicinity of the location. Refer to OpenTravel Codelist Vehicle Where at Facility (VWF).
     * - use: optional
     * @var string
     */
    public $VicinityCode;
    /**
     * Constructor method for CodeRef
     * @uses CodeRef::setVicinityCode()
     * @param string $vicinityCode
     */
    public function __construct($vicinityCode = null)
    {
        $this
            ->setVicinityCode($vicinityCode);
    }
    /**
     * Get VicinityCode value
     * @return string|null
     */
    public function getVicinityCode()
    {
        return $this->VicinityCode;
    }
    /**
     * Set VicinityCode value
     * @param string $vicinityCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CodeRef
     */
    public function setVicinityCode($vicinityCode = null)
    {
        // validation for constraint: string
        if (!is_null($vicinityCode) && !is_string($vicinityCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vicinityCode)), __LINE__);
        }
        $this->VicinityCode = $vicinityCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CodeRef
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
