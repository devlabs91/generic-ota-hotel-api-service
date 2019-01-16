<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Tax StructType
 * Meta informations extracted from the WSDL
 * - documentation: This element is used to describe one specific tax that may apply.
 * @subpackage Structs
 */
class Tax extends AbstractStructBase
{
    /**
     * The Info
     * Meta informations extracted from the WSDL
     * - documentation: Information on this one specific tax, including a description, etc.
     * - minOccurs: 0
     * @var mixed
     */
    public $Info;
    /**
     * The TaxCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $TaxCode;
    /**
     * The Percentage
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Percentage;
    /**
     * Constructor method for Tax
     * @uses Tax::setInfo()
     * @uses Tax::setTaxCode()
     * @uses Tax::setPercentage()
     * @param mixed $info
     * @param string $taxCode
     * @param string $percentage
     */
    public function __construct($info = null, $taxCode = null, $percentage = null)
    {
        $this
            ->setInfo($info)
            ->setTaxCode($taxCode)
            ->setPercentage($percentage);
    }
    /**
     * Get Info value
     * @return mixed|null
     */
    public function getInfo()
    {
        return $this->Info;
    }
    /**
     * Set Info value
     * @param mixed $info
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Tax
     */
    public function setInfo($info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Get TaxCode value
     * @return string|null
     */
    public function getTaxCode()
    {
        return $this->TaxCode;
    }
    /**
     * Set TaxCode value
     * @param string $taxCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Tax
     */
    public function setTaxCode($taxCode = null)
    {
        // validation for constraint: string
        if (!is_null($taxCode) && !is_string($taxCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($taxCode)), __LINE__);
        }
        $this->TaxCode = $taxCode;
        return $this;
    }
    /**
     * Get Percentage value
     * @return string|null
     */
    public function getPercentage()
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param string $percentage
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Tax
     */
    public function setPercentage($percentage = null)
    {
        // validation for constraint: string
        if (!is_null($percentage) && !is_string($percentage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percentage)), __LINE__);
        }
        $this->Percentage = $percentage;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Tax
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
