<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricedEquips StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of special equipment that is part of this quote, along with the charges associated with this equipment. | A collection of special equipment that is part of this reservation, along with the charges associated with this
 * equipment. | A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
 * @subpackage Structs
 */
class PricedEquips extends AbstractStructBase
{
    /**
     * The PricedEquip
     * Meta informations extracted from the WSDL
     * - documentation: A specific piece of special equipment, along with the quantity, restrictions and charge. | A specific piece of special equipment, along with the quantity, restrictions and charge.
     * - maxOccurs: 25
     * @var mixed[]
     */
    public $PricedEquip;
    /**
     * Constructor method for PricedEquips
     * @uses PricedEquips::setPricedEquip()
     * @param mixed[] $pricedEquip
     */
    public function __construct(array $pricedEquip = array())
    {
        $this
            ->setPricedEquip($pricedEquip);
    }
    /**
     * Get PricedEquip value
     * @return mixed[]|null
     */
    public function getPricedEquip()
    {
        return $this->PricedEquip;
    }
    /**
     * Set PricedEquip value
     * @throws \InvalidArgumentException
     * @param mixed[] $pricedEquip
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips
     */
    public function setPricedEquip(array $pricedEquip = array())
    {
        foreach ($pricedEquip as $pricedEquipsPricedEquipItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The PricedEquip property can only contain items of anyType, "%s" given', is_object($pricedEquipsPricedEquipItem) ? get_class($pricedEquipsPricedEquipItem) : gettype($pricedEquipsPricedEquipItem)), __LINE__);
            }
        }
        $this->PricedEquip = $pricedEquip;
        return $this;
    }
    /**
     * Add item to PricedEquip value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips
     */
    public function addToPricedEquip($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The PricedEquip property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PricedEquip[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\PricedEquips
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
