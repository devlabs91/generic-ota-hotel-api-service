<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of taxes.
 * @subpackage Structs
 */
class TaxesType extends AbstractStructBase
{
    /**
     * The Tax
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Tax;
    /**
     * Constructor method for TaxesType
     * @uses TaxesType::setTax()
     * @param mixed[] $tax
     */
    public function __construct(array $tax = array())
    {
        $this
            ->setTax($tax);
    }
    /**
     * Get Tax value
     * @return mixed[]|null
     */
    public function getTax()
    {
        return $this->Tax;
    }
    /**
     * Set Tax value
     * @throws \InvalidArgumentException
     * @param mixed[] $tax
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxesType
     */
    public function setTax(array $tax = array())
    {
        foreach ($tax as $taxesTypeTaxItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of anyType, "%s" given', is_object($taxesTypeTaxItem) ? get_class($taxesTypeTaxItem) : gettype($taxesTypeTaxItem)), __LINE__);
            }
        }
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Add item to Tax value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxesType
     */
    public function addToTax($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Tax[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TaxesType
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
