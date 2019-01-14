<?php

namespace Devlabs91\GenericOtaHotelApiService\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RoutingHopType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A collection of RoutingHop objects. This details the path that the original request or notification traveled.
 * @subpackage Structs
 */
class RoutingHopType extends AbstractStructBase
{
    /**
     * The RoutingHop
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop[]
     */
    public $RoutingHop;
    /**
     * Constructor method for RoutingHopType
     * @uses RoutingHopType::setRoutingHop()
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop[] $routingHop
     */
    public function __construct(array $routingHop = array())
    {
        $this
            ->setRoutingHop($routingHop);
    }
    /**
     * Get RoutingHop value
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop[]|null
     */
    public function getRoutingHop()
    {
        return $this->RoutingHop;
    }
    /**
     * Set RoutingHop value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop[] $routingHop
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHopType
     */
    public function setRoutingHop(array $routingHop = array())
    {
        foreach ($routingHop as $routingHopTypeRoutingHopItem) {
            // validation for constraint: itemType
            if (!$routingHopTypeRoutingHopItem instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop) {
                throw new \InvalidArgumentException(sprintf('The RoutingHop property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop, "%s" given', is_object($routingHopTypeRoutingHopItem) ? get_class($routingHopTypeRoutingHopItem) : gettype($routingHopTypeRoutingHopItem)), __LINE__);
            }
        }
        $this->RoutingHop = $routingHop;
        return $this;
    }
    /**
     * Add item to RoutingHop value
     * @throws \InvalidArgumentException
     * @param \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop $item
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHopType
     */
    public function addToRoutingHop(\Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop) {
            throw new \InvalidArgumentException(sprintf('The RoutingHop property can only contain items of \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHop, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RoutingHop[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Devlabs91\GenericOtaHotelApiService\StructType\RoutingHopType
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
