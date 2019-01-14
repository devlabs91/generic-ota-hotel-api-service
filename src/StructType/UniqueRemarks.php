<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniqueRemarks StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Unique Remark
 * @subpackage Structs
 */
class UniqueRemarks extends AbstractStructBase
{
    /**
     * The UniqueRemark
     * Meta informations extracted from the WSDL
     * - documentation: Categorized remark information for the booking
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $UniqueRemark;
    /**
     * Constructor method for UniqueRemarks
     * @uses UniqueRemarks::setUniqueRemark()
     * @param mixed[] $uniqueRemark
     */
    public function __construct(array $uniqueRemark = array())
    {
        $this
            ->setUniqueRemark($uniqueRemark);
    }
    /**
     * Get UniqueRemark value
     * @return mixed[]|null
     */
    public function getUniqueRemark()
    {
        return $this->UniqueRemark;
    }
    /**
     * Set UniqueRemark value
     * @throws \InvalidArgumentException
     * @param mixed[] $uniqueRemark
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UniqueRemarks
     */
    public function setUniqueRemark(array $uniqueRemark = array())
    {
        foreach ($uniqueRemark as $uniqueRemarksUniqueRemarkItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The UniqueRemark property can only contain items of anyType, "%s" given', is_object($uniqueRemarksUniqueRemarkItem) ? get_class($uniqueRemarksUniqueRemarkItem) : gettype($uniqueRemarksUniqueRemarkItem)), __LINE__);
            }
        }
        $this->UniqueRemark = $uniqueRemark;
        return $this;
    }
    /**
     * Add item to UniqueRemark value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UniqueRemarks
     */
    public function addToUniqueRemark($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The UniqueRemark property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UniqueRemark[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\UniqueRemarks
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
