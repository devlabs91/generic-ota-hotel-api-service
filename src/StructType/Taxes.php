<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Taxes StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is a collection of Taxes | A collection of taxes. | Information on additional taxes that may apply to the rental. | The effective date range for the tax information.
 * @subpackage Structs
 */
class Taxes extends AbstractStructBase
{
    /**
     * The Tax
     * Meta informations extracted from the WSDL
     * - documentation: Any individual tax applied to the fare | The tax for the ticket fee.
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var mixed[]
     */
    public $Tax;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - documentation: The total of all the taxes. | The total amount for all ticket fee taxes.
     * - use: optional
     * @var string
     */
    public $Amount;
    /**
     * The Info
     * Meta informations extracted from the WSDL
     * - documentation: General information about the additional taxes that may apply.
     * - minOccurs: 0
     * @var mixed
     */
    public $Info;
    /**
     * Constructor method for Taxes
     * @uses Taxes::setTax()
     * @uses Taxes::setAmount()
     * @uses Taxes::setInfo()
     * @param mixed[] $tax
     * @param string $amount
     * @param mixed $info
     */
    public function __construct(array $tax = array(), $amount = null, $info = null)
    {
        $this
            ->setTax($tax)
            ->setAmount($amount)
            ->setInfo($info);
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Taxes
     */
    public function setTax(array $tax = array())
    {
        foreach ($tax as $taxesTaxItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Tax property can only contain items of anyType, "%s" given', is_object($taxesTaxItem) ? get_class($taxesTaxItem) : gettype($taxesTaxItem)), __LINE__);
            }
        }
        $this->Tax = $tax;
        return $this;
    }
    /**
     * Add item to Tax value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Taxes
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
     * Get Amount value
     * @return string|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param string $amount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Taxes
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: string
        if (!is_null($amount) && !is_string($amount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
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
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Taxes
     */
    public function setInfo($info = null)
    {
        $this->Info = $info;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Taxes
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
