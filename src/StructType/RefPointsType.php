<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefPointsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Reference points in relation to/from the current entity.
 * @subpackage Structs
 */
class RefPointsType extends AbstractStructBase
{
    /**
     * The RefPoint
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint[]
     */
    public $RefPoint;
    /**
     * Constructor method for RefPointsType
     * @uses RefPointsType::setRefPoint()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint[] $refPoint
     */
    public function __construct(array $refPoint = array())
    {
        $this
            ->setRefPoint($refPoint);
    }
    /**
     * Get RefPoint value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint[]|null
     */
    public function getRefPoint()
    {
        return $this->RefPoint;
    }
    /**
     * Set RefPoint value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint[] $refPoint
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPointsType
     */
    public function setRefPoint(array $refPoint = array())
    {
        foreach ($refPoint as $refPointsTypeRefPointItem) {
            // validation for constraint: itemType
            if (!$refPointsTypeRefPointItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint) {
                throw new \InvalidArgumentException(sprintf('The RefPoint property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint, "%s" given', is_object($refPointsTypeRefPointItem) ? get_class($refPointsTypeRefPointItem) : gettype($refPointsTypeRefPointItem)), __LINE__);
            }
        }
        $this->RefPoint = $refPoint;
        return $this;
    }
    /**
     * Add item to RefPoint value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPointsType
     */
    public function addToRefPoint(\Devlabs91\GenericOtaHotelApiService\StructType\RefPoint $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint) {
            throw new \InvalidArgumentException(sprintf('The RefPoint property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RefPoint, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RefPoint[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RefPointsType
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
