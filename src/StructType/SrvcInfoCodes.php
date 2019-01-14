<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SrvcInfoCodes StructType
 * Meta informations extracted from the WSDL
 * - documentation: Collection of type of restaurant offered by the hotel.
 * @subpackage Structs
 */
class SrvcInfoCodes extends AbstractStructBase
{
    /**
     * The SrvcInfoCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCode[]
     */
    public $SrvcInfoCode;
    /**
     * Constructor method for SrvcInfoCodes
     * @uses SrvcInfoCodes::setSrvcInfoCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCode[] $srvcInfoCode
     */
    public function __construct(array $srvcInfoCode = array())
    {
        $this
            ->setSrvcInfoCode($srvcInfoCode);
    }
    /**
     * Get SrvcInfoCode value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCode[]|null
     */
    public function getSrvcInfoCode()
    {
        return $this->SrvcInfoCode;
    }
    /**
     * Set SrvcInfoCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCode[] $srvcInfoCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCodes
     */
    public function setSrvcInfoCode(array $srvcInfoCode = array())
    {
        foreach ($srvcInfoCode as $srvcInfoCodesSrvcInfoCodeItem) {
            // validation for constraint: itemType
            if (!$srvcInfoCodesSrvcInfoCodeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCode) {
                throw new \InvalidArgumentException(sprintf('The SrvcInfoCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCode, "%s" given', is_object($srvcInfoCodesSrvcInfoCodeItem) ? get_class($srvcInfoCodesSrvcInfoCodeItem) : gettype($srvcInfoCodesSrvcInfoCodeItem)), __LINE__);
            }
        }
        $this->SrvcInfoCode = $srvcInfoCode;
        return $this;
    }
    /**
     * Add item to SrvcInfoCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCode $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCodes
     */
    public function addToSrvcInfoCode(\Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCode) {
            throw new \InvalidArgumentException(sprintf('The SrvcInfoCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SrvcInfoCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\SrvcInfoCodes
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
