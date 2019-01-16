<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Coverage StructType
 * Meta informations extracted from the WSDL
 * - documentation: This element is used to identify one specific coverage, insuranc or waiver, and to identify any fees that may be associated with it.
 * @subpackage Structs
 */
class Coverage extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Used to describe the specific coverage type or waiver type. Refer to OpenTravel Code List Vehicle Coverage Type (VCT).
     * - use: required
     * @var string
     */
    public $Type;
    /**
     * The CoverageInfo
     * Meta informations extracted from the WSDL
     * - documentation: General information about this specific coverage, insurance or fees.
     * - minOccurs: 0
     * @var mixed
     */
    public $CoverageInfo;
    /**
     * The CoverageFees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\CoverageFees
     */
    public $CoverageFees;
    /**
     * The RequiredInd
     * Meta informations extracted from the WSDL
     * - documentation: If true, this type of coverage must be purchased. If false, it is optional.
     * - use: optional
     * @var bool
     */
    public $RequiredInd;
    /**
     * Constructor method for Coverage
     * @uses Coverage::setType()
     * @uses Coverage::setCoverageInfo()
     * @uses Coverage::setCoverageFees()
     * @uses Coverage::setRequiredInd()
     * @param string $type
     * @param mixed $coverageInfo
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CoverageFees $coverageFees
     * @param bool $requiredInd
     */
    public function __construct($type = null, $coverageInfo = null, \Devlabs91\GenericOtaHotelApiService\StructType\CoverageFees $coverageFees = null, $requiredInd = null)
    {
        $this
            ->setType($type)
            ->setCoverageInfo($coverageInfo)
            ->setCoverageFees($coverageFees)
            ->setRequiredInd($requiredInd);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Coverage
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get CoverageInfo value
     * @return mixed|null
     */
    public function getCoverageInfo()
    {
        return $this->CoverageInfo;
    }
    /**
     * Set CoverageInfo value
     * @param mixed $coverageInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Coverage
     */
    public function setCoverageInfo($coverageInfo = null)
    {
        $this->CoverageInfo = $coverageInfo;
        return $this;
    }
    /**
     * Get CoverageFees value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoverageFees|null
     */
    public function getCoverageFees()
    {
        return $this->CoverageFees;
    }
    /**
     * Set CoverageFees value
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\CoverageFees $coverageFees
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Coverage
     */
    public function setCoverageFees(\Devlabs91\GenericOtaHotelApiService\StructType\CoverageFees $coverageFees = null)
    {
        $this->CoverageFees = $coverageFees;
        return $this;
    }
    /**
     * Get RequiredInd value
     * @return bool|null
     */
    public function getRequiredInd()
    {
        return $this->RequiredInd;
    }
    /**
     * Set RequiredInd value
     * @param bool $requiredInd
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Coverage
     */
    public function setRequiredInd($requiredInd = null)
    {
        // validation for constraint: boolean
        if (!is_null($requiredInd) && !is_bool($requiredInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($requiredInd)), __LINE__);
        }
        $this->RequiredInd = $requiredInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Coverage
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
