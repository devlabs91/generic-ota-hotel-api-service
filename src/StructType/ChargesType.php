<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChargesType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A value representing a supplement for an item over the cost of the item on which a package basic price is calculated; may be repeated for multiple currencies e.g. GBP and Euros.
 * @subpackage Structs
 */
class ChargesType extends AbstractStructBase
{
    /**
     * The Charge
     * Meta informations extracted from the WSDL
     * - documentation: The charge element repeats to allow differential charging according to, for example, age.
     * - maxOccurs: 9
     * @var mixed[]
     */
    public $Charge;
    /**
     * Constructor method for ChargesType
     * @uses ChargesType::setCharge()
     * @param mixed[] $charge
     */
    public function __construct(array $charge = array())
    {
        $this
            ->setCharge($charge);
    }
    /**
     * Get Charge value
     * @return mixed[]|null
     */
    public function getCharge()
    {
        return $this->Charge;
    }
    /**
     * Set Charge value
     * @throws \InvalidArgumentException
     * @param mixed[] $charge
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ChargesType
     */
    public function setCharge(array $charge = array())
    {
        foreach ($charge as $chargesTypeChargeItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Charge property can only contain items of anyType, "%s" given', is_object($chargesTypeChargeItem) ? get_class($chargesTypeChargeItem) : gettype($chargesTypeChargeItem)), __LINE__);
            }
        }
        $this->Charge = $charge;
        return $this;
    }
    /**
     * Add item to Charge value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ChargesType
     */
    public function addToCharge($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Charge property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Charge[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\ChargesType
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
