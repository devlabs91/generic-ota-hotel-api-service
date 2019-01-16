<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StayInfosType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of StayInfo objects
 * @subpackage Structs
 */
class StayInfosType extends AbstractStructBase
{
    /**
     * The StayInfo
     * Meta informations extracted from the WSDL
     * - documentation: Provides details of a guest's stay.
     * - maxOccurs: 99
     * @var mixed[]
     */
    public $StayInfo;
    /**
     * Constructor method for StayInfosType
     * @uses StayInfosType::setStayInfo()
     * @param mixed[] $stayInfo
     */
    public function __construct(array $stayInfo = array())
    {
        $this
            ->setStayInfo($stayInfo);
    }
    /**
     * Get StayInfo value
     * @return mixed[]|null
     */
    public function getStayInfo()
    {
        return $this->StayInfo;
    }
    /**
     * Set StayInfo value
     * @throws \InvalidArgumentException
     * @param mixed[] $stayInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayInfosType
     */
    public function setStayInfo(array $stayInfo = array())
    {
        foreach ($stayInfo as $stayInfosTypeStayInfoItem) {
            // validation for constraint: itemType
            if (!false) {
                throw new \InvalidArgumentException(sprintf('The StayInfo property can only contain items of anyType, "%s" given', is_object($stayInfosTypeStayInfoItem) ? get_class($stayInfosTypeStayInfoItem) : gettype($stayInfosTypeStayInfoItem)), __LINE__);
            }
        }
        $this->StayInfo = $stayInfo;
        return $this;
    }
    /**
     * Add item to StayInfo value
     * @throws \InvalidArgumentException
     * @param mixed $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayInfosType
     */
    public function addToStayInfo($item)
    {
        // validation for constraint: itemType
        if (!false) {
            throw new \InvalidArgumentException(sprintf('The StayInfo property can only contain items of anyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->StayInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\StayInfosType
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
