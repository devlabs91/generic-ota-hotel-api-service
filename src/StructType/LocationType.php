<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Code and optional string to describe a location point.
 * @subpackage Structs
 */
class LocationType extends AbstractStructBase
{
    /**
     * The LocationCode
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $LocationCode;
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The CodeContext
     * Meta informations extracted from the WSDL
     * - default: IATA
     * - documentation: Identifies the context of the identifying code, such as IATA, ARC, or internal code, etc.
     * @var string
     */
    public $CodeContext;
    /**
     * Constructor method for LocationType
     * @uses LocationType::setLocationCode()
     * @uses LocationType::set_()
     * @uses LocationType::setCodeContext()
     * @param string $locationCode
     * @param string $_
     * @param string $codeContext
     */
    public function __construct($locationCode = null, $_ = null, $codeContext = 'IATA')
    {
        $this
            ->setLocationCode($locationCode)
            ->set_($_)
            ->setCodeContext($codeContext);
    }
    /**
     * Get LocationCode value
     * @return string
     */
    public function getLocationCode()
    {
        return $this->LocationCode;
    }
    /**
     * Set LocationCode value
     * @param string $locationCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationType
     */
    public function setLocationCode($locationCode = null)
    {
        // validation for constraint: string
        if (!is_null($locationCode) && !is_string($locationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($locationCode)), __LINE__);
        }
        $this->LocationCode = $locationCode;
        return $this;
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationType
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get CodeContext value
     * @return string|null
     */
    public function getCodeContext()
    {
        return $this->CodeContext;
    }
    /**
     * Set CodeContext value
     * @param string $codeContext
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationType
     */
    public function setCodeContext($codeContext = 'IATA')
    {
        // validation for constraint: string
        if (!is_null($codeContext) && !is_string($codeContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($codeContext)), __LINE__);
        }
        $this->CodeContext = $codeContext;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\LocationType
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
