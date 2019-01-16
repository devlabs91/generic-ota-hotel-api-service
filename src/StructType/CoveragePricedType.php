<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CoveragePricedType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The CoveragePricedType complex type defines the information that is required to describe a priced coverage, that is, a coverage and a charge.
 * @subpackage Structs
 */
class CoveragePricedType extends AbstractStructBase
{
    /**
     * The Coverage
     * Meta informations extracted from the WSDL
     * - documentation: Details about a coverage, such as text or description.
     * @var mixed
     */
    public $Coverage;
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - documentation: The charges as they relate to a single coverage, such as minimum or maximum amounts, taxes, or information on how the charge was calculated.
     * @var mixed
     */
    public $Charge;
    /**
     * The Deductible
     * Meta informations extracted from the WSDL
     * - documentation: The deductible, excess or liability amount for this coverage of a vehicle(s).
     * - minOccurs: 0
     * @var mixed
     */
    public $Deductible;
    /**
     * The Required
     * Meta informations extracted from the WSDL
     * - documentation: An indication if this particular coverage is required in the vehicle reservation, or is optional, based upon renter preference. | false
     * - use: optional
     * @var bool
     */
    public $Required;
    /**
     * Constructor method for CoveragePricedType
     * @uses CoveragePricedType::setCoverage()
     * @uses CoveragePricedType::setCharge()
     * @uses CoveragePricedType::setDeductible()
     * @uses CoveragePricedType::setRequired()
     * @param mixed $coverage
     * @param mixed $charge
     * @param mixed $deductible
     * @param bool $required
     */
    public function __construct($coverage = null, $charge = null, $deductible = null, $required = null)
    {
        $this
            ->setCoverage($coverage)
            ->setCharge($charge)
            ->setDeductible($deductible)
            ->setRequired($required);
    }
    /**
     * Get Coverage value
     * @return mixed|null
     */
    public function getCoverage()
    {
        return $this->Coverage;
    }
    /**
     * Set Coverage value
     * @param mixed $coverage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePricedType
     */
    public function setCoverage($coverage = null)
    {
        $this->Coverage = $coverage;
        return $this;
    }
    /**
     * Get Charge value
     * @return mixed|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @param mixed $charge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePricedType
     */
    public function setCharge($charge = null)
    {
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Get Deductible value
     * @return mixed|null
     */
    public function getDeductible()
    {
        return $this->Deductible;
    }
    /**
     * Set Deductible value
     * @param mixed $deductible
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePricedType
     */
    public function setDeductible($deductible = null)
    {
        $this->Deductible = $deductible;
        return $this;
    }
    /**
     * Get Required value
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->Required;
    }
    /**
     * Set Required value
     * @param bool $required
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePricedType
     */
    public function setRequired($required = null)
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($required)), __LINE__);
        }
        $this->Required = $required;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CoveragePricedType
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
