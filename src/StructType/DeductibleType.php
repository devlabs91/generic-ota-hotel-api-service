<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeductibleType StructType
 * Meta informations extracted from the WSDL
 * - documentation: The deductible amount for this coverage.
 * @subpackage Structs
 */
class DeductibleType extends AbstractStructBase
{
    /**
     * The LiabilityAmount
     * Meta informations extracted from the WSDL
     * - documentation: The total liability amount for this coverage.
     * - use: optional
     * @var string
     */
    public $LiabilityAmount;
    /**
     * The ExcessAmount
     * Meta informations extracted from the WSDL
     * - documentation: The excess amount for this coverage.
     * - use: optional
     * @var string
     */
    public $ExcessAmount;
    /**
     * Constructor method for DeductibleType
     * @uses DeductibleType::setLiabilityAmount()
     * @uses DeductibleType::setExcessAmount()
     * @param string $liabilityAmount
     * @param string $excessAmount
     */
    public function __construct($liabilityAmount = null, $excessAmount = null)
    {
        $this
            ->setLiabilityAmount($liabilityAmount)
            ->setExcessAmount($excessAmount);
    }
    /**
     * Get LiabilityAmount value
     * @return string|null
     */
    public function getLiabilityAmount()
    {
        return $this->LiabilityAmount;
    }
    /**
     * Set LiabilityAmount value
     * @param string $liabilityAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DeductibleType
     */
    public function setLiabilityAmount($liabilityAmount = null)
    {
        // validation for constraint: string
        if (!is_null($liabilityAmount) && !is_string($liabilityAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($liabilityAmount)), __LINE__);
        }
        $this->LiabilityAmount = $liabilityAmount;
        return $this;
    }
    /**
     * Get ExcessAmount value
     * @return string|null
     */
    public function getExcessAmount()
    {
        return $this->ExcessAmount;
    }
    /**
     * Set ExcessAmount value
     * @param string $excessAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DeductibleType
     */
    public function setExcessAmount($excessAmount = null)
    {
        // validation for constraint: string
        if (!is_null($excessAmount) && !is_string($excessAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($excessAmount)), __LINE__);
        }
        $this->ExcessAmount = $excessAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DeductibleType
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
