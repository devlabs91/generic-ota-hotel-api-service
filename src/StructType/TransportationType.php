<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransportationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines the type of transportation offered.
 * @subpackage Structs
 */
class TransportationType extends AbstractStructBase
{
    /**
     * The Transportation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\Transportation[]
     */
    public $Transportation;
    /**
     * Constructor method for TransportationType
     * @uses TransportationType::setTransportation()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Transportation[] $transportation
     */
    public function __construct(array $transportation = array())
    {
        $this
            ->setTransportation($transportation);
    }
    /**
     * Get Transportation value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\Transportation[]|null
     */
    public function getTransportation()
    {
        return $this->Transportation;
    }
    /**
     * Set Transportation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Transportation[] $transportation
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransportationType
     */
    public function setTransportation(array $transportation = array())
    {
        foreach ($transportation as $transportationTypeTransportationItem) {
            // validation for constraint: itemType
            if (!$transportationTypeTransportationItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Transportation) {
                throw new \InvalidArgumentException(sprintf('The Transportation property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Transportation, "%s" given', is_object($transportationTypeTransportationItem) ? get_class($transportationTypeTransportationItem) : gettype($transportationTypeTransportationItem)), __LINE__);
            }
        }
        $this->Transportation = $transportation;
        return $this;
    }
    /**
     * Add item to Transportation value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\Transportation $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransportationType
     */
    public function addToTransportation(\Devlabs91\GenericOtaHotelApiService\StructType\Transportation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\Transportation) {
            throw new \InvalidArgumentException(sprintf('The Transportation property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\Transportation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Transportation[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\TransportationType
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
