<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelInfoCodes StructType
 * @subpackage Structs
 */
class HotelInfoCodes extends AbstractStructBase
{
    /**
     * The HotelInfoCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCode[]
     */
    public $HotelInfoCode;
    /**
     * Constructor method for HotelInfoCodes
     * @uses HotelInfoCodes::setHotelInfoCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCode[] $hotelInfoCode
     */
    public function __construct(array $hotelInfoCode = array())
    {
        $this
            ->setHotelInfoCode($hotelInfoCode);
    }
    /**
     * Get HotelInfoCode value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCode[]|null
     */
    public function getHotelInfoCode()
    {
        return $this->HotelInfoCode;
    }
    /**
     * Set HotelInfoCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCode[] $hotelInfoCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCodes
     */
    public function setHotelInfoCode(array $hotelInfoCode = array())
    {
        foreach ($hotelInfoCode as $hotelInfoCodesHotelInfoCodeItem) {
            // validation for constraint: itemType
            if (!$hotelInfoCodesHotelInfoCodeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCode) {
                throw new \InvalidArgumentException(sprintf('The HotelInfoCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCode, "%s" given', is_object($hotelInfoCodesHotelInfoCodeItem) ? get_class($hotelInfoCodesHotelInfoCodeItem) : gettype($hotelInfoCodesHotelInfoCodeItem)), __LINE__);
            }
        }
        $this->HotelInfoCode = $hotelInfoCode;
        return $this;
    }
    /**
     * Add item to HotelInfoCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCode $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCodes
     */
    public function addToHotelInfoCode(\Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCode) {
            throw new \InvalidArgumentException(sprintf('The HotelInfoCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->HotelInfoCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\HotelInfoCodes
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
