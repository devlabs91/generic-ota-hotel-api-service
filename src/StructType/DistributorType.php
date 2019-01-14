<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistributorType StructType
 * @subpackage Structs
 */
class DistributorType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The DistributorCode
     * Meta informations extracted from the WSDL
     * - documentation: Code used to uniquely identify the distributor.
     * @var string
     */
    public $DistributorCode;
    /**
     * The DistributorTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: Type code is used to qualify the Distibutor into general classes of distributors.
     * @var string
     */
    public $DistributorTypeCode;
    /**
     * Constructor method for DistributorType
     * @uses DistributorType::set_()
     * @uses DistributorType::setDistributorCode()
     * @uses DistributorType::setDistributorTypeCode()
     * @param string $_
     * @param string $distributorCode
     * @param string $distributorTypeCode
     */
    public function __construct($_ = null, $distributorCode = null, $distributorTypeCode = null)
    {
        $this
            ->set_($_)
            ->setDistributorCode($distributorCode)
            ->setDistributorTypeCode($distributorTypeCode);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DistributorType
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
     * Get DistributorCode value
     * @return string|null
     */
    public function getDistributorCode()
    {
        return $this->DistributorCode;
    }
    /**
     * Set DistributorCode value
     * @param string $distributorCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DistributorType
     */
    public function setDistributorCode($distributorCode = null)
    {
        // validation for constraint: string
        if (!is_null($distributorCode) && !is_string($distributorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distributorCode)), __LINE__);
        }
        $this->DistributorCode = $distributorCode;
        return $this;
    }
    /**
     * Get DistributorTypeCode value
     * @return string|null
     */
    public function getDistributorTypeCode()
    {
        return $this->DistributorTypeCode;
    }
    /**
     * Set DistributorTypeCode value
     * @param string $distributorTypeCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DistributorType
     */
    public function setDistributorTypeCode($distributorTypeCode = null)
    {
        // validation for constraint: string
        if (!is_null($distributorTypeCode) && !is_string($distributorTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($distributorTypeCode)), __LINE__);
        }
        $this->DistributorTypeCode = $distributorTypeCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DistributorType
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
