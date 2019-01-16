<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvCounts StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of inventory counts.
 * @subpackage Structs
 */
class InvCounts extends AbstractStructBase
{
    /**
     * The InvCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\InvCount[]
     */
    public $InvCount;
    /**
     * Constructor method for InvCounts
     * @uses InvCounts::setInvCount()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InvCount[] $invCount
     */
    public function __construct(array $invCount = array())
    {
        $this
            ->setInvCount($invCount);
    }
    /**
     * Get InvCount value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvCount[]|null
     */
    public function getInvCount()
    {
        return $this->InvCount;
    }
    /**
     * Set InvCount value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InvCount[] $invCount
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvCounts
     */
    public function setInvCount(array $invCount = array())
    {
        foreach ($invCount as $invCountsInvCountItem) {
            // validation for constraint: itemType
            if (!$invCountsInvCountItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\InvCount) {
                throw new \InvalidArgumentException(sprintf('The InvCount property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\InvCount, "%s" given', is_object($invCountsInvCountItem) ? get_class($invCountsInvCountItem) : gettype($invCountsInvCountItem)), __LINE__);
            }
        }
        $this->InvCount = $invCount;
        return $this;
    }
    /**
     * Add item to InvCount value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InvCount $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvCounts
     */
    public function addToInvCount(\Devlabs91\GenericOtaHotelApiService\StructType\InvCount $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\InvCount) {
            throw new \InvalidArgumentException(sprintf('The InvCount property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\InvCount, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InvCount[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InvCounts
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
