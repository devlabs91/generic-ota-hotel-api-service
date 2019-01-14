<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Remarks StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of Remark
 * @subpackage Structs
 */
class Remarks extends AbstractStructBase
{
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - documentation: Supplementary information for this booking
     * - maxOccurs: unbounded
     * @var mixed[]
     */
    public $Remark;
    /**
     * Constructor method for Remarks
     * @uses Remarks::setRemark()
     * @param mixed[] $remark
     */
    public function __construct(array $remark = array())
    {
        $this
            ->setRemark($remark);
    }
    /**
     * Get Remark value
     * @return mixed[]|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @throws \InvalidArgumentException
     * @param mixed[] $remark
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Remarks
     */
    public function setRemark(array $remark = array())
    {
        foreach ($remark as $remarksRemarkItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of anyType, "%s" given', is_object($remarksRemarkItem) ? get_class($remarksRemarkItem) : gettype($remarksRemarkItem)), __LINE__);
            }
        }
        $this->Remark = $remark;
        return $this;
    }
    /**
     * Add item to Remark value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Remarks
     */
    public function addToRemark($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The Remark property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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