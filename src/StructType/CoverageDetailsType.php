<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoverageDetailsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The CoverageDetailsType complex type provides information on a specfic aspect of coverage, for example, supplemental coverage, description, etc.
 * @subpackage Structs
 */
class CoverageDetailsType extends FormattedTextTextType
{
    /**
     * The CoverageTextType
     * Meta informations extracted from the WSDL
     * - documentation: The CoverageTextType identifes the type of free text that is provided as part of coverage (insurance) information.
     * - use: required
     * @var string
     */
    public $CoverageTextType;
    /**
     * Constructor method for CoverageDetailsType
     * @uses CoverageDetailsType::setCoverageTextType()
     * @param string $coverageTextType
     */
    public function __construct($coverageTextType = null)
    {
        $this
            ->setCoverageTextType($coverageTextType);
    }
    /**
     * Get CoverageTextType value
     * @return string
     */
    public function getCoverageTextType()
    {
        return $this->CoverageTextType;
    }
    /**
     * Set CoverageTextType value
     * @param string $coverageTextType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoverageDetailsType
     */
    public function setCoverageTextType($coverageTextType = null)
    {
        // validation for constraint: string
        if (!is_null($coverageTextType) && !is_string($coverageTextType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($coverageTextType)), __LINE__);
        }
        $this->CoverageTextType = $coverageTextType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoverageDetailsType
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
