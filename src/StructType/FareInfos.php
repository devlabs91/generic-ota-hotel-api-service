<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareInfos StructType
 * Meta informations extracted from the WSDL
 * - documentation: This is a collection of FareInfo
 * @subpackage Structs
 */
class FareInfos extends AbstractStructBase
{
    /**
     * The FareInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 10
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo[]
     */
    public $FareInfo;
    /**
     * Constructor method for FareInfos
     * @uses FareInfos::setFareInfo()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo[] $fareInfo
     */
    public function __construct(array $fareInfo = array())
    {
        $this
            ->setFareInfo($fareInfo);
    }
    /**
     * Get FareInfo value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo[]|null
     */
    public function getFareInfo()
    {
        return $this->FareInfo;
    }
    /**
     * Set FareInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo[] $fareInfo
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfos
     */
    public function setFareInfo(array $fareInfo = array())
    {
        foreach ($fareInfo as $fareInfosFareInfoItem) {
            // validation for constraint: itemType
            if (!$fareInfosFareInfoItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo) {
                throw new \InvalidArgumentException(sprintf('The FareInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo, "%s" given', is_object($fareInfosFareInfoItem) ? get_class($fareInfosFareInfoItem) : gettype($fareInfosFareInfoItem)), __LINE__);
            }
        }
        $this->FareInfo = $fareInfo;
        return $this;
    }
    /**
     * Add item to FareInfo value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfos
     */
    public function addToFareInfo(\Devlabs91\GenericOtaHotelApiService\StructType\FareInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo) {
            throw new \InvalidArgumentException(sprintf('The FareInfo property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\FareInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FareInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\FareInfos
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
