<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Discount StructType
 * Meta informations extracted from the WSDL
 * - documentation: Provides discount information associated with the fare. | Details regarding the discount. | Discount percentage and/or Amount, code and textual reason for discount | Discount percentage and/or Amount, code and textual reason for
 * discount
 * - type: MoneyOrPercentageType
 * - use: optional
 * @subpackage Structs
 */
class Discount extends DiscountType
{
    /**
     * The AppliesTo
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AppliesTo;
    /**
     * The ItemRPH
     * Meta informations extracted from the WSDL
     * - documentation: Used to identify the specific item referred to by the AppliesTo attribute.
     * - use: optional
     * @var string
     */
    public $ItemRPH;
    /**
     * Constructor method for Discount
     * @uses Discount::setAppliesTo()
     * @uses Discount::setItemRPH()
     * @param string $appliesTo
     * @param string $itemRPH
     */
    public function __construct($appliesTo = null, $itemRPH = null)
    {
        $this
            ->setAppliesTo($appliesTo)
            ->setItemRPH($itemRPH);
    }
    /**
     * Get AppliesTo value
     * @return string|null
     */
    public function getAppliesTo()
    {
        return $this->AppliesTo;
    }
    /**
     * Set AppliesTo value
     * @param string $appliesTo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Discount
     */
    public function setAppliesTo($appliesTo = null)
    {
        // validation for constraint: string
        if (!is_null($appliesTo) && !is_string($appliesTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($appliesTo)), __LINE__);
        }
        $this->AppliesTo = $appliesTo;
        return $this;
    }
    /**
     * Get ItemRPH value
     * @return string|null
     */
    public function getItemRPH()
    {
        return $this->ItemRPH;
    }
    /**
     * Set ItemRPH value
     * @param string $itemRPH
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Discount
     */
    public function setItemRPH($itemRPH = null)
    {
        // validation for constraint: string
        if (!is_null($itemRPH) && !is_string($itemRPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemRPH)), __LINE__);
        }
        $this->ItemRPH = $itemRPH;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Discount
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
