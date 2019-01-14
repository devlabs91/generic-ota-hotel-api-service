<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxAmounts StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of one or more taxes associated with a specific charge.
 * @subpackage Structs
 */
class TaxAmounts extends AbstractStructBase
{
    /**
     * The TaxAmount
     * Meta informations extracted from the WSDL
     * - documentation: Detailed information on one specific tax associated with a specific charge
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $TaxAmount;
    /**
     * Constructor method for TaxAmounts
     * @uses TaxAmounts::setTaxAmount()
     * @param mixed[] $taxAmount
     */
    public function __construct(array $taxAmount = array())
    {
        $this
            ->setTaxAmount($taxAmount);
    }
    /**
     * Get TaxAmount value
     * @return mixed[]|null
     */
    public function getTaxAmount()
    {
        return $this->TaxAmount;
    }
    /**
     * Set TaxAmount value
     * @throws \InvalidArgumentException
     * @param mixed[] $taxAmount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxAmounts
     */
    public function setTaxAmount(array $taxAmount = array())
    {
        foreach ($taxAmount as $taxAmountsTaxAmountItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The TaxAmount property can only contain items of anyType, "%s" given', is_object($taxAmountsTaxAmountItem) ? get_class($taxAmountsTaxAmountItem) : gettype($taxAmountsTaxAmountItem)), __LINE__);
            }
        }
        $this->TaxAmount = $taxAmount;
        return $this;
    }
    /**
     * Add item to TaxAmount value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxAmounts
     */
    public function addToTaxAmount($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The TaxAmount property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TaxAmount[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxAmounts
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
