<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Remarks StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Remark.
 * @subpackage Structs
 */
class Remarks extends AbstractStructBase
{
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Remark[]
     */
    public $Remark;
    /**
     * Constructor method for Remarks
     * @uses Remarks::setRemark()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Remark[] $remark
     */
    public function __construct(array $remark = array())
    {
        $this
            ->setRemark($remark);
    }
    /**
     * Get Remark value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Remark[]|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Remark[] $remark
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Remarks
     */
    public function setRemark(array $remark = array())
    {
        foreach ($remark as $remarksRemarkItem) {
            // validation for constraint: itemType
            if (!$remarksRemarkItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Remark) {
                throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Remark, "%s" given', is_object($remarksRemarkItem) ? get_class($remarksRemarkItem) : gettype($remarksRemarkItem)), __LINE__);
            }
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Remark $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Remarks
     */
    public function addToRemark(\Devlabs91\GenericOtaHotelApiService\StructType\Remark $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Remark) {
            throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Remark, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Remark[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Remarks
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
