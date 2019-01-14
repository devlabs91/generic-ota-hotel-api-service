<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CostingItems StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of invoice item lines.
 * @subpackage Structs
 */
class CostingItems extends AbstractStructBase
{
    /**
     * The CostingItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $CostingItem;
    /**
     * Constructor method for CostingItems
     * @uses CostingItems::setCostingItem()
     * @param mixed[] $costingItem
     */
    public function __construct(array $costingItem = array())
    {
        $this
            ->setCostingItem($costingItem);
    }
    /**
     * Get CostingItem value
     * @return mixed[]|null
     */
    public function getCostingItem()
    {
        return $this->CostingItem;
    }
    /**
     * Set CostingItem value
     * @throws \InvalidArgumentException
     * @param mixed[] $costingItem
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CostingItems
     */
    public function setCostingItem(array $costingItem = array())
    {
        foreach ($costingItem as $costingItemsCostingItemItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The CostingItem property can only contain items of anyType, "%s" given', is_object($costingItemsCostingItemItem) ? get_class($costingItemsCostingItemItem) : gettype($costingItemsCostingItemItem)), __LINE__);
            }
        }
        $this->CostingItem = $costingItem;
        return $this;
    }
    /**
     * Add item to CostingItem value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CostingItems
     */
    public function addToCostingItem($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The CostingItem property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CostingItem[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\CostingItems
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
