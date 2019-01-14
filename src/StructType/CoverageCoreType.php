<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoverageCoreType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The CoverageCoreType complex type defines the required and most often used components that together define a specific Vehicle Coverage.
 * @subpackage Structs
 */
class CoverageCoreType extends AbstractStructBase
{
    /**
     * The CoverageType
     * Meta informations extracted from the WSDL
     * - documentation: Identifies the type of coverage, for example, collision damage waiver. Refer to OTA Code List Vehicle Coverage Type (CVT).
     * - use: required
     * @var string
     */
    public $CoverageType;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Allows for an industry-specific code that describes this coverage to be specified, for example, CDW may be indicated when the coverage type is Collision Damage Waiver.
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * Constructor method for CoverageCoreType
     * @uses CoverageCoreType::setCoverageType()
     * @uses CoverageCoreType::setCode()
     * @param string $coverageType
     * @param string $code
     */
    public function __construct($coverageType = null, $code = null)
    {
        $this
            ->setCoverageType($coverageType)
            ->setCode($code);
    }
    /**
     * Get CoverageType value
     * @return string
     */
    public function getCoverageType()
    {
        return $this->CoverageType;
    }
    /**
     * Set CoverageType value
     * @param string $coverageType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoverageCoreType
     */
    public function setCoverageType($coverageType = null)
    {
        // validation for constraint: string
        if (!is_null($coverageType) && !is_string($coverageType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($coverageType)), __LINE__);
        }
        $this->CoverageType = $coverageType;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoverageCoreType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoverageCoreType
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
