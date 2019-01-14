<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SpecialRemarks StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Special Remark
 * @subpackage Structs
 */
class SpecialRemarks extends AbstractStructBase
{
    /**
     * The SpecialRemark
     * Meta informations extracted from the WSDL
     * - documentation: Itinerary Remarks, Invoice Remarks, etc.
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $SpecialRemark;
    /**
     * Constructor method for SpecialRemarks
     * @uses SpecialRemarks::setSpecialRemark()
     * @param mixed[] $specialRemark
     */
    public function __construct(array $specialRemark = array())
    {
        $this
            ->setSpecialRemark($specialRemark);
    }
    /**
     * Get SpecialRemark value
     * @return mixed[]|null
     */
    public function getSpecialRemark()
    {
        return $this->SpecialRemark;
    }
    /**
     * Set SpecialRemark value
     * @throws \InvalidArgumentException
     * @param mixed[] $specialRemark
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarks
     */
    public function setSpecialRemark(array $specialRemark = array())
    {
        foreach ($specialRemark as $specialRemarksSpecialRemarkItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The SpecialRemark property can only contain items of anyType, "%s" given', is_object($specialRemarksSpecialRemarkItem) ? get_class($specialRemarksSpecialRemarkItem) : gettype($specialRemarksSpecialRemarkItem)), __LINE__);
            }
        }
        $this->SpecialRemark = $specialRemark;
        return $this;
    }
    /**
     * Add item to SpecialRemark value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarks
     */
    public function addToSpecialRemark($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The SpecialRemark property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialRemark[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SpecialRemarks
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
