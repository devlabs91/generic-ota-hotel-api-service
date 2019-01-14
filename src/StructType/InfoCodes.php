<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InfoCodes StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of types of restaurant.
 * @subpackage Structs
 */
class InfoCodes extends AbstractStructBase
{
    /**
     * The InfoCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\InfoCode[]
     */
    public $InfoCode;
    /**
     * Constructor method for InfoCodes
     * @uses InfoCodes::setInfoCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InfoCode[] $infoCode
     */
    public function __construct(array $infoCode = array())
    {
        $this
            ->setInfoCode($infoCode);
    }
    /**
     * Get InfoCode value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InfoCode[]|null
     */
    public function getInfoCode()
    {
        return $this->InfoCode;
    }
    /**
     * Set InfoCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InfoCode[] $infoCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InfoCodes
     */
    public function setInfoCode(array $infoCode = array())
    {
        foreach ($infoCode as $infoCodesInfoCodeItem) {
            // validation for constraint: itemType
            if (!$infoCodesInfoCodeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\InfoCode) {
                throw new \InvalidArgumentException(sprintf('The InfoCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\InfoCode, "%s" given', is_object($infoCodesInfoCodeItem) ? get_class($infoCodesInfoCodeItem) : gettype($infoCodesInfoCodeItem)), __LINE__);
            }
        }
        $this->InfoCode = $infoCode;
        return $this;
    }
    /**
     * Add item to InfoCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\InfoCode $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InfoCodes
     */
    public function addToInfoCode(\Devlabs91\GenericOtaHotelApiService\StructType\InfoCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\InfoCode) {
            throw new \InvalidArgumentException(sprintf('The InfoCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\InfoCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InfoCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\InfoCodes
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
