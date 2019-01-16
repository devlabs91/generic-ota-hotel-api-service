<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Identifies and provides details about the discount.
 * @subpackage Structs
 */
class DiscountType extends TotalType
{
    /**
     * The DiscountReason
     * @var mixed
     */
    public $DiscountReason;
    /**
     * The TaxInclusive
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $TaxInclusive;
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Percent;
    /**
     * The DiscountCode
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the type of discount (e.g., No condition, LOS, Deposit or Total amount spent).
     * - use: optional
     * @var string
     */
    public $DiscountCode;
    /**
     * The RestrictedDisplayIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true, used to indicate the discount should not be displayed. When false, indicates the discount may be displayed.
     * - use: optional
     * @var bool
     */
    public $RestrictedDisplayIndicator;
    /**
     * Constructor method for DiscountType
     * @uses DiscountType::setDiscountReason()
     * @uses DiscountType::setTaxInclusive()
     * @uses DiscountType::setPercent()
     * @uses DiscountType::setDiscountCode()
     * @uses DiscountType::setRestrictedDisplayIndicator()
     * @param mixed $discountReason
     * @param bool $taxInclusive
     * @param string $percent
     * @param string $discountCode
     * @param bool $restrictedDisplayIndicator
     */
    public function __construct($discountReason = null, $taxInclusive = null, $percent = null, $discountCode = null, $restrictedDisplayIndicator = null)
    {
        $this
            ->setDiscountReason($discountReason)
            ->setTaxInclusive($taxInclusive)
            ->setPercent($percent)
            ->setDiscountCode($discountCode)
            ->setRestrictedDisplayIndicator($restrictedDisplayIndicator);
    }
    /**
     * Get DiscountReason value
     * @return mixed|null
     */
    public function getDiscountReason()
    {
        return $this->DiscountReason;
    }
    /**
     * Set DiscountReason value
     * @param mixed $discountReason
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DiscountType
     */
    public function setDiscountReason($discountReason = null)
    {
        $this->DiscountReason = $discountReason;
        return $this;
    }
    /**
     * Get TaxInclusive value
     * @return bool|null
     */
    public function getTaxInclusive()
    {
        return $this->TaxInclusive;
    }
    /**
     * Set TaxInclusive value
     * @param bool $taxInclusive
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DiscountType
     */
    public function setTaxInclusive($taxInclusive = null)
    {
        // validation for constraint: boolean
        if (!is_null($taxInclusive) && !is_bool($taxInclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($taxInclusive)), __LINE__);
        }
        $this->TaxInclusive = $taxInclusive;
        return $this;
    }
    /**
     * Get Percent value
     * @return string|null
     */
    public function getPercent()
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param string $percent
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DiscountType
     */
    public function setPercent($percent = null)
    {
        // validation for constraint: string
        if (!is_null($percent) && !is_string($percent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($percent)), __LINE__);
        }
        $this->Percent = $percent;
        return $this;
    }
    /**
     * Get DiscountCode value
     * @return string|null
     */
    public function getDiscountCode()
    {
        return $this->DiscountCode;
    }
    /**
     * Set DiscountCode value
     * @param string $discountCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DiscountType
     */
    public function setDiscountCode($discountCode = null)
    {
        // validation for constraint: string
        if (!is_null($discountCode) && !is_string($discountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($discountCode)), __LINE__);
        }
        $this->DiscountCode = $discountCode;
        return $this;
    }
    /**
     * Get RestrictedDisplayIndicator value
     * @return bool|null
     */
    public function getRestrictedDisplayIndicator()
    {
        return $this->RestrictedDisplayIndicator;
    }
    /**
     * Set RestrictedDisplayIndicator value
     * @param bool $restrictedDisplayIndicator
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DiscountType
     */
    public function setRestrictedDisplayIndicator($restrictedDisplayIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($restrictedDisplayIndicator) && !is_bool($restrictedDisplayIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($restrictedDisplayIndicator)), __LINE__);
        }
        $this->RestrictedDisplayIndicator = $restrictedDisplayIndicator;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DiscountType
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
