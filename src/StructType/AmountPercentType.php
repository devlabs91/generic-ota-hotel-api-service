<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmountPercentType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the percentage basis for calculating the fee amount or the amount. | Provides a monetary amount and the currency code to reflect the currency in which this amount is expressed.
 * @subpackage Structs
 */
class AmountPercentType extends AbstractStructBase
{
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - documentation: A collection of taxes.
     * - minOccurs: 0
     * @var mixed
     */
    public $Taxes;
    /**
     * The TaxInclusive
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether taxes are included when figuring the base amount.
     * - use: optional
     * @var bool
     */
    public $TaxInclusive;
    /**
     * The FeesInclusive
     * Meta informations extracted from the WSDL
     * - documentation: Indicates whether fees, such as those imposed by a travel agency or other booking agent, are included when figuring cancel penalties.
     * - use: optional
     * @var bool
     */
    public $FeesInclusive;
    /**
     * The NmbrOfNights
     * Meta informations extracted from the WSDL
     * - documentation: The number of nights of the hotel stay that are used to calculate the fee amount.
     * - use: optional
     * @var int
     */
    public $NmbrOfNights;
    /**
     * The BasisType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $BasisType;
    /**
     * The Percent
     * Meta informations extracted from the WSDL
     * - documentation: The percentage used to calculate the amount.
     * - use: optional
     * @var string
     */
    public $Percent;
    /**
     * The ApplyAs
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ApplyAs;
    /**
     * Constructor method for AmountPercentType
     * @uses AmountPercentType::setTaxes()
     * @uses AmountPercentType::setTaxInclusive()
     * @uses AmountPercentType::setFeesInclusive()
     * @uses AmountPercentType::setNmbrOfNights()
     * @uses AmountPercentType::setBasisType()
     * @uses AmountPercentType::setPercent()
     * @uses AmountPercentType::setApplyAs()
     * @param mixed $taxes
     * @param bool $taxInclusive
     * @param bool $feesInclusive
     * @param int $nmbrOfNights
     * @param string $basisType
     * @param string $percent
     * @param string $applyAs
     */
    public function __construct($taxes = null, $taxInclusive = null, $feesInclusive = null, $nmbrOfNights = null, $basisType = null, $percent = null, $applyAs = null)
    {
        $this
            ->setTaxes($taxes)
            ->setTaxInclusive($taxInclusive)
            ->setFeesInclusive($feesInclusive)
            ->setNmbrOfNights($nmbrOfNights)
            ->setBasisType($basisType)
            ->setPercent($percent)
            ->setApplyAs($applyAs);
    }
    /**
     * Get Taxes value
     * @return mixed|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param mixed $taxes
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountPercentType
     */
    public function setTaxes($taxes = null)
    {
        $this->Taxes = $taxes;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountPercentType
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
     * Get FeesInclusive value
     * @return bool|null
     */
    public function getFeesInclusive()
    {
        return $this->FeesInclusive;
    }
    /**
     * Set FeesInclusive value
     * @param bool $feesInclusive
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountPercentType
     */
    public function setFeesInclusive($feesInclusive = null)
    {
        // validation for constraint: boolean
        if (!is_null($feesInclusive) && !is_bool($feesInclusive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($feesInclusive)), __LINE__);
        }
        $this->FeesInclusive = $feesInclusive;
        return $this;
    }
    /**
     * Get NmbrOfNights value
     * @return int|null
     */
    public function getNmbrOfNights()
    {
        return $this->NmbrOfNights;
    }
    /**
     * Set NmbrOfNights value
     * @param int $nmbrOfNights
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountPercentType
     */
    public function setNmbrOfNights($nmbrOfNights = null)
    {
        // validation for constraint: int
        if (!is_null($nmbrOfNights) && !is_numeric($nmbrOfNights)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nmbrOfNights)), __LINE__);
        }
        $this->NmbrOfNights = $nmbrOfNights;
        return $this;
    }
    /**
     * Get BasisType value
     * @return string|null
     */
    public function getBasisType()
    {
        return $this->BasisType;
    }
    /**
     * Set BasisType value
     * @param string $basisType
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountPercentType
     */
    public function setBasisType($basisType = null)
    {
        // validation for constraint: string
        if (!is_null($basisType) && !is_string($basisType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($basisType)), __LINE__);
        }
        $this->BasisType = $basisType;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountPercentType
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
     * Get ApplyAs value
     * @return string|null
     */
    public function getApplyAs()
    {
        return $this->ApplyAs;
    }
    /**
     * Set ApplyAs value
     * @param string $applyAs
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountPercentType
     */
    public function setApplyAs($applyAs = null)
    {
        // validation for constraint: string
        if (!is_null($applyAs) && !is_string($applyAs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($applyAs)), __LINE__);
        }
        $this->ApplyAs = $applyAs;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\AmountPercentType
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
