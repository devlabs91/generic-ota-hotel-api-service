<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinationSystemCodes StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of destination system codes. These are systems for which this Sellable product is targeted.
 * @subpackage Structs
 */
class DestinationSystemCodes extends AbstractStructBase
{
    /**
     * The DestinationSystemCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\DestinationSystemCode[]
     */
    public $DestinationSystemCode;
    /**
     * Constructor method for DestinationSystemCodes
     * @uses DestinationSystemCodes::setDestinationSystemCode()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DestinationSystemCode[] $destinationSystemCode
     */
    public function __construct(array $destinationSystemCode = array())
    {
        $this
            ->setDestinationSystemCode($destinationSystemCode);
    }
    /**
     * Get DestinationSystemCode value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DestinationSystemCode[]|null
     */
    public function getDestinationSystemCode()
    {
        return $this->DestinationSystemCode;
    }
    /**
     * Set DestinationSystemCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DestinationSystemCode[] $destinationSystemCode
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DestinationSystemCodes
     */
    public function setDestinationSystemCode(array $destinationSystemCode = array())
    {
        foreach ($destinationSystemCode as $destinationSystemCodesDestinationSystemCodeItem) {
            // validation for constraint: itemType
            if (!$destinationSystemCodesDestinationSystemCodeItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\DestinationSystemCode) {
                throw new \InvalidArgumentException(sprintf('The DestinationSystemCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\DestinationSystemCode, "%s" given', is_object($destinationSystemCodesDestinationSystemCodeItem) ? get_class($destinationSystemCodesDestinationSystemCodeItem) : gettype($destinationSystemCodesDestinationSystemCodeItem)), __LINE__);
            }
        }
        $this->DestinationSystemCode = $destinationSystemCode;
        return $this;
    }
    /**
     * Add item to DestinationSystemCode value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\DestinationSystemCode $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DestinationSystemCodes
     */
    public function addToDestinationSystemCode(\Devlabs91\GenericOtaHotelApiService\StructType\DestinationSystemCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\DestinationSystemCode) {
            throw new \InvalidArgumentException(sprintf('The DestinationSystemCode property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\DestinationSystemCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DestinationSystemCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\DestinationSystemCodes
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
